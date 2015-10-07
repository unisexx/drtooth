<?php 
class Staff extends ORM
{
	public $table = 'staffs';
	
	// public $has_many = array('user','permission');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}	
}
?>