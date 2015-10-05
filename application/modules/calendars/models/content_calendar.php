<?php
class Content_calendar extends ORM {

    var $table = 'contents_calendar';
	
	//var $has_one = array('user');

    function __construct($id = NULL)
    {
        parent::__construct($id);
    }
}
?>