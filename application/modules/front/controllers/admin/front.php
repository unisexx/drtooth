<?php
Class Front extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
	}
	
	function index(){
		$this->template->build('admin/front');
	}
}
?>