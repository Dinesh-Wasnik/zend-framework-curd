<?php
namespace Post\Model;


use Zend\Db\TableGateway\TableGatewayInterface;

class PostTable{

   protected $tableGateway;

   /**
    *constructor
    * @interface  TableGatewayInterface
    * 
    */ 
   function  __construct(TableGatewayInterface $tableGateway){
   		$this->tableGateway = $tableGateway;
   }

   //get all records
   public  function fetchAll(){
   	 return $this->tableGateway->select();
   }

}