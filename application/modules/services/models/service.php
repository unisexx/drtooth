<?php
class Service extends ORM
{
	public $table = 'services';
	
	var $has_one = array('category');
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>