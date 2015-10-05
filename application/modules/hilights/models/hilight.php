<?php
class Hilight extends ORM
{
	public $table = 'hilights';
	
	public function __construct($id = NULL)
	{
		parent::__construct($id);
	}
}
?>