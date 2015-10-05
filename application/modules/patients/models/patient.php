<?php 
class Patient extends ORM
{
	public $table = 'patients';
	
	// public $has_many = array('user','permission');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}	
}
?>