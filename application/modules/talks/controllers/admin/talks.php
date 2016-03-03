<?php
class Talks extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
			$data['rs'] = new Talk();
			$data['rs']->order_by('id','desc')->get();
			$this->template->append_metadata(js_checkbox('approve'));
			$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE)
	{
			$data['rs'] = new Talk($id);
			$this->template->build('admin/form',$data);
	}
	
	function save($id=false){
        if($_POST)
        {
            $rs = new Talk($id);
            if($_FILES['image']['name'])
            {
                if($rs->id){
                    $rs->delete_file($rs->id,'uploads/talks','image');
                }
                $_POST['image'] = $rs->upload($_FILES['image'],'uploads/talks/');
            }
			// if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['detail'] = lang_encode($_POST['detail']);
			// $_POST['meta_keyword'] = lang_encode($_POST['meta_keyword']);
			// $_POST['meta_description'] = lang_encode($_POST['meta_description']);
			if(!$id)$_POST['status'] = "approve";
			$_POST['slug'] = clean_url($_POST['title']);
            $rs->from_array($_POST);
            $rs->save();
            set_notify('success', lang('save_data_complete'));
        }
        redirect($_POST['referer']);
    }
	
	function delete($id=false)
	{
		if($id)
		{
			$rs = new Talk($id);
			$rs->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id){
        if($_POST)
        {
            $rs = new Talk($id);
            $rs->from_array($_POST);
            $rs->save();
        }
    }
}
?>