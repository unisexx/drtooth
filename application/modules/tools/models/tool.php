<?php 
class Tool extends ORM
{
	public $table = 'tools';
	
	// public $has_many = array('user','permission');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}	
}
?>