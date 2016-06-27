<?php
require_once 'lib/Controller'.LAST_NAME;
require_once 'lib/Model'.LAST_NAME;

class GoodsController extends Controller{

	function goodsList(){
	    $userId = $this->getSession('userId');
	    $conn = Model::getInstance('pro');

	    $res = $conn->table("goods")->columns("goodsId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->where("goods_userId = ?")->stmtMethod("select",array($userId));

	    $this->assign('goods',$res);
	    $this->display('goodsList.html');
	}
	
	function addGoods(){
	    if(!empty($this->getSession('userId'))){
    	    $userId = $_SESSION['userId'];
    	    if(!empty($goodsName = $this->post('goodsName')) && !empty($goodsPrice = $this->post('goodsPrice')) && !empty($goodsQuantity = $this->post('goodsQuantity')) && !empty($goodsDescribe = $this->post('goodsDescribe'))){
    	        $conn = Model::getInstance('pro');
    	        $res = $conn->table("goods")->columns("goods_userId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->values("?,?,?,?,?")->stmtMethod("insert",array($userId,$goodsName,$goodsPrice,$goodsQuantity,$goodsDescribe));
    	        if($res == 1)
    	            $this->assign('message','添加成功');
    	        else
    	            $this->assign('message','添加失败');
    	    }else $this->assign('message','');
    	    
    	    $this->display('addGoods.html');
	    }else 
	        $this->location('../user/login.html');
	}
	
	function deleteGoods(){
	    if(!empty($this->getSession('userId'))){
	        $userId = $_SESSION['userId'];
	        if(!empty($goodsId = $this->get('goodsId'))){
	            $conn = Model::getInstance('pro');
	            
	            $res = $conn->table("goods")->where("goodsId = ? and goods_userId = ?")->stmtMethod("delete",array($goodsId,$userId));
	            
	            if($res == 1)
	                $this->assign('message','删除成功');
	            else
	                $this->assign('message','删除失败');
	        }else $this->assign('message','');
	        	
	        $this->display('deleteGoods.html');
	    }else
	        $this->location('../user/login.html');
	}
	function updateGoods(){
	    if(!empty($this->getSession('userId'))){
	        $userId = $_SESSION['userId'];
	        
	        if(!empty($goodsId = $this->post('goodsId')) && !empty($goodsName = $this->post('goodsName')) && !empty($goodsPrice = $this->post('goodsPrice')) && !empty($goodsQuantity = $this->post('goodsQuantity')) && !empty($goodsDescribe = $this->post('goodsDescribe'))){
	            $conn = Model::getInstance('pro');
	            $res = $conn->table("goods")->set("goodsName = ?,goodsPrice = ?,goodsQuantity = ?,goodsDescribe = ?")->where("goodsId = ? and goods_userId = ?")->stmtMethod("update",array($goodsName,$goodsPrice,$goodsQuantity,$goodsDescribe,$goodsId,$userId));
	            if($res == 1){
	                $this->assign('message','修改成功');
	            }else $this->assign('message','');
	        }else $this->assign('message','');
	        
	        if(!empty($goodsId = $this->get('goodsId'))){
	            $conn = Model::getInstance('pro');
	             
	            $res = $conn->table("goods")->columns("goodsId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->where("goodsId = ? and goods_userId = ?")->stmtMethod("select",array($goodsId,$userId));

	            $this->assign('goods',$res);
	        }else $this->assign('goods','');
	
	        $this->display('updateGoods.html');
	    }else
	        $this->location('../user/login.html');
	}
	function searchGoods(){
	    if(!empty($this->getSession('userId'))){
	        $userId = $_SESSION['userId'];
	         
	        if(!empty($goodsName = $this->post('goodsName'))){
	            $conn = Model::getInstance('pro');
	            $res = $conn->table("goods")->columns("goodsId,goods_userId,goodsName,goodsPrice,goodsQuantity,goodsDescribe")->where("goodsName like ? and goods_userId <> ?")->stmtMethod("select",array('%'.$goodsName.'%',$userId));

	            $this->assign('goods',$res);
	        }else $this->assign('goods','');
	    
// 	        var_dump($res);
	        $this->display('searchGoods.html');
	    }else
	        $this->location('../user/login.html');
	}
}