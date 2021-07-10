<?php
namespace Post\Model;

Class Post{

	protected $id;
	protected $title;
	protected $description;


	public function exchangeArray($data){
		$this->id = $data['id'];
		$this->title = $data['title'];
		$this->description = $data['description'];
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
}
