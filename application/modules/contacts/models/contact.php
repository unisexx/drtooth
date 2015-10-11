<?php
class Contact extends ORM
{
	public $table = 'contacts';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>