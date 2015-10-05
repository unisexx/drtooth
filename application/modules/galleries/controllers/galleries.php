<?php
Class Galleries extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
	}	
	
	function view($id)
	{
		$data['rs'] = new Category($id);
		$this->template->build('view',$data);
	}
}
?>