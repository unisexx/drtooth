<?php
class Dentist extends ORM {

    var $table = 'dentists';
	
	var $has_one = array('category');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>