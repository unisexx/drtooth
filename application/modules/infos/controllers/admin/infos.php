<?php
class Infos extends Admin_mso_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		
		//if($_GET['module']!='mso'){
				
			$data['rs'] = new Info();
			$data['rs']->where('module = "'.$_GET['module'].'"')->order_by('id','desc')->get();
			$this->template->append_metadata(js_checkbox('approve'));
			
			
			$this->template->build('admin/index',$data);
			
/*		}else{
				
			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			$data['rs'] = $db->Execute("select * from WEB_NEWS ORDER BY ID DESC");
			
			$this->template->append_metadata(js_checkbox('approve'));
			$this->template->build('admin/index_mso',$data);
			
		}*/
		

	}
	
	function get_intranet_data()
	{
		
				
			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			$rs_intranet = $db->Execute("select * from WEB_NEWS WHERE ROWNUM <=12 ORDER BY ID DESC");
			
			//insert data to db mso
			
			$count_news_mso = 0;
			
			foreach($rs_intranet as $row){
			
				dbConvert($row);
				
				//http://intranet.m-society.go.th/upload/newsletters/
				$intranet_id = $row['id'];
				$rs_check = new Info();
				$rs_check->where('intranet_id = "'.$intranet_id.'"')->order_by('id','desc')->get();

				if(!$rs_check->id)
				{
					
					$rs = new Info();
		
					$rs->title = $row['title'];
					$rs->detail = $row['detail'];
					$rs->image = $row['img_title'];
					$rs->created = date('Y-m-d H:i:s');
					$rs->updated = date('Y-m-d H:i:s');
					$rs->start_date= date('Y-m-d H:i:s');
					$rs->end_date = date('Y-m-d H:i:s');
					$rs->module = 'ข่าวประชาสัมพันธ์';
					$rs->slug = 'mso';
					$rs->status = 'approve';
					$rs->user_id = 49;
					$rs->counter = 0;
					$rs->intranet_id = $row['id'];
					
					
					$rs->save();
					$count_news_mso++;
				}
								
			}
			//set_notify('success', lang('save_data_complete'));
			//**********
			
			$data['count_news_mso'] = $count_news_mso;
			$data['get_intranet'] = 'mso';
			
			$data['rs'] = new Info();
			$data['rs']->where('module = "ข่าวประชาสัมพันธ์"')->order_by('id','desc')->get();
		
			$this->template->append_metadata(js_checkbox('approve'));
			
			$this->template->build('admin/index',$data);
			
		
	
	}
	
	function form($id=FALSE)
	{
		if($_GET['module']!='mso'){
			
			$data['rs'] = new Info($id);
			$this->template->build('admin/form',$data);
		
		}else{
			
			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			$data['rs'] = $db->Execute("select * from WEB_NEWS WHERE ID=".$id);
			
			$this->template->build('admin/form_mso',$data);
			
		}
	}
	
	function save($id=false){
        if($_POST)
        {
            $rs = new Info($id);
            if($_FILES['image']['name'])
            {
                if($rs->id){
                    $rs->delete_file($rs->id,'uploads/info','image');
                }
                $_POST['image'] = $rs->upload($_FILES['image'],'uploads/info/',139,96);
            }
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			if(!$id)$_POST['status'] = "approve";
			$_POST['slug'] = clean_url($_POST['title']);
			// $_POST['start_date'] = Date2DB($_POST['start_date']);
            // $_POST['end_date'] = Date2DB($_POST['end_date']);
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
			$rs = new Info($id);
			$rs->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id){
        if($_POST)
        {
            $rs = new Info($id);
            $rs->from_array($_POST);
            $rs->save();
        }

    }
	
	
	function get_new(){
		include('themes/fundv2/odbc_connect.php');
		$this->load->helper('html');
		$rs = $db->Execute("select * from WEB_NEWS ORDER BY ID DESC");
		// echo "<pre>";
		// print_r($rs);
		// echo "</pre>";
		
		foreach($rs as $row){
			// หาไอดีซ้ำใน db
			$info = new Info();
			$info->where('intranet_id = '.$row['ID'])->get();
			if($info->intranet_id == ""){
				$_POST['module'] = 'ข่าวประชาสัมพันธ์';
				$_POST['slug'] = clean_url(iconv('TIS-620','UTF-8', $row['TITLE']));
				$_POST['title'] = iconv('TIS-620','UTF-8', $row['TITLE']);
				$_POST['detail'] = iconv('TIS-620','UTF-8', $row['DETAIL']);
				$_POST['image'] = 'http://intranet.m-society.go.th/upload/newsletters/'.$row['IMG_TITLE'];
				$_POST['intranet_id'] = $row['ID'];
				
				$rs = new Info();
	            $rs->from_array($_POST);
	            $rs->save();
				
				echo 'intranet_news id '.$_POST['intranet_id'].' is insert <br>';
			}
		}
	}
	
}
?>