<?php
class Address extends ORM
{
	public $table = 'addresses';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>