<?php
class Talk extends ORM {

    var $table = 'talks';
	
	var $has_one = array('user','category');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>