<?php
namespace Post\Model;

class Post extends Zend_Db_Table_Abstract
{
	protected $id;
	protected $title;
	protected $description;
	protected $directorId;
	protected $_dependentTables = ['MoviesActors'];

	public function exchangeArray($data){
		$this->id = $data['id'];
		$this->title = $data['title'];
		$this->description = $data['description'];
		$this->directorId = $data['director_id'];
	}


	public function getId(){
		return $this->id;
	}


	public function getTitle(){
		return $this->title;
	}


	public function getDescription(){
		return $this->description;
	}	

	public function getDirector(){
		return $this->directorId;
	}	
}
