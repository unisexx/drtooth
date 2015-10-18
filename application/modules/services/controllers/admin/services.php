<?php
Class Services extends Admin_Controller{
	
	function __construct(){
		parent::__construct();	
		// if(!permission('hilight','full')):
			// redirect('front/admin/front');
		// endif;
	}
	
	function index(){
		$rs = new Category();
		$data['rs'] = $rs->where('module = "services"')->order_by('id','desc')->get();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/index',$data);
	}
	
	function form($id=FALSE){
		$data['rs'] = new Category($id);
		$this->template->build('admin/form',$data);
	}
	
	function save($id=FALSE){
		if($_POST){
			$category = new Category($id);
			$_POST['module'] = "services";
			$_POST['name'] = lang_encode($_POST['name']);
			$category->from_array($_POST);
			$category->save();
			
			if($_POST['title']['th']){
                foreach($_POST['title']['th'] as $key => $item){
                    $service = new Service(@$_POST['sub_id'][$key]);
                    if($item)
                    {
                    	$title = array('th'=>$_POST['title']['th'][$key],'en'=>$_POST['title']['en'][$key]);
                        $service->title = lang_encode($title);
                        $service->category_id = $category->id;
                        $service->save();
                    }   
                }
				// exit;
            }
			
			set_notify('success', lang('save_data_complete'));
		}
		// redirect($_POST['referer']);
		// redirect($_SERVER['HTTP_REFERER']);
		redirect('services/admin/services');
	}
	
	function delete($id){
		if($id){
			$hilight = new Hilight($id);
			$hilight->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$rs = new Category($id);
			$rs->from_array($_POST);
			$rs->save();
		}
		// echo $_POST['status'];
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$hilight = new Hilight(@$_POST['orderid'][$key]);
						$hilight->from_array(array('orderlist' => $item));
						$hilight->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function delete_list($id){
		if($id){
			$rs = new Service($id);
			$rs->delete();
		}
	}
}
?>