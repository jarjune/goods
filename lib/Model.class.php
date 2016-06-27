<?php

/**
*	author : jarjune
*	date : 2016-5-31
* 	class : PDO操作类
*/

class Model{
    
    private static $_instance;
	private $conn = null;
	private $fragment = array(
		"table"=>"",
		"where"=>"",
		"order"=>"",
		"having"=>"",
		"limit"=>"",
		"columns"=>"*",
		"set"=>"",
		"values"=>""
		);

	private function __construct($dbname = "",$host = "localhost",$username = "root",$password = ""){
		
		try {

			//创建pdo对象
			$this->conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
			$this->conn->query("set names utf8");
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	public function __clone(){
	    
	}
	public static function getInstance($dbname = "",$host = "localhost",$username = "root",$password = ""){
	    if(!(self::$_instance instanceof self)){
	        self::$_instance = new self($dbname,$host = "localhost",$username = "root",$password = "");
	    }
	    return self::$_instance;
	}
	/**
	*	预处理方法
	*	$sqlOrMethod : 预处理语句或者方式
	*	$args : 需要绑定的参数
	*/
	function stmtMethod($sqlOrMethod = "",$args = array()){

		if($sqlOrMethod == "")
			$sql = $sqlOrMethod;

		if($sqlOrMethod == "select")
			$sql = $this->combination("select");
		if($sqlOrMethod == "update")
			$sql = $this->combination("update");
		if($sqlOrMethod == "delete")
			$sql = $this->combination("delete");
		if($sqlOrMethod == "insert")
			$sql = $this->combination("insert");

		$conn = $this->conn;

		$stmt = $conn->prepare($sql);

// 		for($i = 1; $i <= count($args); $i++){
// 			$stmt->bindParam($i, $args[$i-1]);
// 		}

		$stmt->execute($args);

		if($sqlOrMethod == "select"){
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$result = $stmt->fetchAll();
			return $result;
		}else{
			return $stmt->rowCount();
		}
	}

	
	/**
	*	增方法
	*	返回值 : 修改的条数
	*/
	function insert(){
		return $this->exec($this->combination("insert"));
	}
	/**
	*	删方法
	*	返回值 : 修改的条数
	*/
	function delete(){
		return $this->exec($this->combination("delete"));
	}
	/**
	*	改方法
	*	返回值 : 修改的条数
	*/
	function update(){
		return $this->exec($this->combination("update"));
	}

	/**
	*	各个sql语句片断
	*/
	function where($str){
		$this->fragment['where']=$str;
		return $this;
	}
	function order($str){
		$this->fragment['order']=$str;
		return $this;
	}
	function limit($num=""){
		$this->fragment['limit']=$num;
		return $this;
	}
	function table($table){
		$this->fragment['table']=$table;
		return $this;
	}
	function columns($columns="*"){
		$this->fragment['columns']=$columns;
		return $this;
	}
	function set($set){
		$this->fragment['set']=$set;
		return $this;
	}
	function values($values){
		$this->fragment['values']=$values;
		return $this;
	}

	/**
	*	拼接sql并清除sql片段函数
	*/
	private function combination($method){
		if($method == "select"){
			$sql = "select ".$this->fragment['columns']." from ".$this->fragment['table'];
			if($this->fragment['where'] != "")
				$sql = $sql." where ".$this->fragment['where'];
			if($this->fragment['limit'] != "")
				$sql = $sql." limit ".$this->fragment['limit'];
		}
		if($method == "insert"){
			$sql = "insert into ".$this->fragment['table'];
			if($this->fragment['columns'] != "")
				$sql .= " ({$this->fragment['columns']}) ";
			$sql .= "values ({$this->fragment['values']})";
		}
		if($method == "delete"){
			$sql = "delete from ".$this->fragment['table']." where ".$this->fragment['where'];
		}
		if($method == "update"){
			$sql = "update ".$this->fragment['table']." set ".$this->fragment['set']." where ".$this->fragment['where'];
		}

		foreach ($this->fragment as $key => $value)
			$this->fragment[$key] = "";
		return $sql;
	}

	/**
	*	普通查询方法
	*	返回值 : 结果集
	*/
	function query($sql = ""){
		if($sql == "")
			$sql = $this->combination("select");

		$conn = $this->conn;

		$query = $conn->query($sql);
		$query->setFetchMode(PDO::FETCH_ASSOC);

		return $query->fetchAll();

	}

	/**
	*	增删改方法
	*	返回值 : 修改的条数
	*/
	function exec($sql = ""){
		$conn = $this->conn;
		return $conn->exec($sql);
	}

	/**
	*	查看查询数据
	*	$result : 结果集
	*/
	function printResult($result){

		echo "<pre>";
		print_r($result);
		echo "</pre>";
	}

}
