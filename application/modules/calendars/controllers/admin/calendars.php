<?php
class Calendars extends Admin_mso_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		
/*			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			
			$data['rs'] = $db->Execute("select * from INTRANET_ACTCALENDAR ORDER BY ID DESC");
			
			$data['rs_type'] = $db->Execute("select * from INTRANET_ACTCALENDAR_TYPE ORDER BY ID DESC");
			$data['rs_acc'] = $db->Execute("select * from INTRANET_ACTCALENDAR_ACCESSORY ORDER BY ID DESC");
			
			$this->template->build('admin/index_mso',$data);*/
			
			
		$calendar = new content_calendar();
		
		if(@$_GET['search'])$calendar->where("title like '%".$_GET['search']."%'");
		

			//$calendar->where("module = '".$_GET['module']."'");	
			
			$data['module'] = $_GET['module'];
		
			
			$data['rs'] = $calendar->order_by('id','desc')->get_page();
			
			$this->template->append_metadata(js_checkbox('approve'));
			$this->template->build('admin/index_mso',$data);
			
			
	
		
	}
	
	function get_intranet_data()
	{
		
				
			include('themes/msosocial/odbc_connect.php');
			
			$this->load->helper('html');
			
			$rs_intranet = $db->Execute("select * from INTRANET_ACTCALENDAR WHERE ROWNUM <=12 ORDER BY ID DESC");
			
			//insert data to db mso
			
			foreach($rs_intranet as $row){
			
				dbConvert($row);
				
				$intranet_id = $row['id'];
				
				$type_cal = $row['actcalendar_type_id'];
				$type_name = 'อบรม';
				
				if($type_cal == '7')
				{
					$type_name = 'อบรม';
				}
				elseif($type_cal == '8')
				{
					$type_name = 'ประชุม';
				}
				elseif($type_cal == '9')
				{
					$type_name = 'กิจกรรม';
				}
				
				$rs_check = new content_calendar();
				$rs_check->where('intranet_id = "'.$intranet_id.'"')->order_by('id','desc')->get();

				if(!$rs_check->id)
				{
					$rs = new content_calendar();
		
					$rs->title = $row['title'];
					$rs->detail = $row['detail'];
					$rs->image = 'no image';
					$rs->created = date('Y-m-d H:i:s');
					$rs->updated = date('Y-m-d H:i:s');
					$rs->module = 'mso';
					$rs->category = $row['actcalendar_type_id'];
					$rs->slug = $type_name;
					$rs->status = 'approve';
					$rs->user_id = 49;
					$rs->orderlist = 0;
					$rs->counter = 0;
					$rs->start_date = date('Y-m-d H:i:s');
					$rs->end_date = date('Y-m-d H:i:s');
					$rs->intranet_id = $row['id'];
					$rs->source_data = 'mso';
					$rs->place = 'mso';
					
					$rs->save();
				}
								
			}
			//set_notify('success', lang('save_data_complete'));
			//**********
			
			
			$data['rs'] = new content_calendar();
			$data['rs']->where("module = 'mso'")->order_by('id desc')->get();
		
			$this->template->append_metadata(js_checkbox('approve'));
			
			$this->template->build('admin/index',$data);
			
		
	
	}
	
	function index2(){
		$this->template->build('admin/index');
	}
	
	function events_move()
	{
		//$this->db->debug = TRUE;
		$calendar = New Calendar($_POST['id']);
		if($_POST['start'])
		{
			list($y,$m,$d) = explode('-', $calendar->start);
			$_POST['start'] =  date("Y-m-d", mktime(0, 0, 0, $m, $d + $_POST['start'], $y));
		}
		if($_POST['end'])
		{
			list($y,$m,$d) = explode('-', $calendar->end);
			$_POST['end'] =  date("Y-m-d", mktime(0, 0, 0, $m, $d + $_POST['end'], $y));
		}
		$calendar->from_array($_POST);
		$calendar->save();
	}
	
	function events()
	{
		$calendar = New Calendar();
		$events = $calendar->get()->all_to_array();
		echo json_encode($events);
	}	
	
	function form($id = FALSE)
	{
		
		
/*			include('themes/fundv2/odbc_connect.php');
			
			$this->load->helper('html');
			
			
			$data['rs'] = $db->Execute("select * from INTRANET_ACTCALENDAR WHERE ID=".$id);
			
			$this->template->build('admin/form_mso',$data);*/	
			
				$data['rs'] = new content_calendar($id);
				$this->template->append_metadata(js_datepicker());
				if(@$_GET['module'])
				{
					$data['module'] = $_GET['module'];
					//$data['category'] = $_GET['category'];
				}
				else
				{
					$calendar = new content_calendar($id);
					
					
					$data['module'] = $calendar->module;
					//$data['category'] = $calendar->category;
					
				}
				$this->template->build('admin/form_mso',$data);
	}
    
    function save($id = FALSE)
    {
        if($_POST)
        {
            $calendar = new content_calendar($id);
			
			if($_FILES['image']['name'])
            {
                if($rs->id){
                    $rs->delete_file($rs->id,'uploads/calendar','image');
                }
                //$_POST['image'] = $rs->upload($_FILES['image'],'uploads/calendar/',139,96);
				
				move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/calendar/".$_FILES["image"]["name"]);
						
				$_POST['img_title'] = $_FILES["image"]["name"];
            }
			
			if($_FILES['url']['name'])
            {
                if($rs->id){
                    $rs->delete_file($rs->id,'uploads/calendar','url');
                }
				
				move_uploaded_file($_FILES["url"]["tmp_name"],"uploads/calendar/".$_FILES["url"]["name"]);
						
				$_POST['url'] = $_FILES["url"]["name"];
            }
			
			if(!$id)$_POST['user_id'] = $this->session->userdata('id');
			$_POST['status'] = "approve";
			
			$stime=date('H:i:s');
			$s_date = $_POST['start_date'];
			$e_date = $_POST['end_date'];
			
			$sd = explode("/", $s_date); 
			$ed = explode("/", $e_date); 
			
			$start_date = ($sd[2]  - 543).'-'.$sd[1].'-'.$sd[0].' '.$stime;
			$end_date = ($ed[2]  - 543).'-'.$ed[1].'-'.$ed[0].' '.$stime;
			
			$_POST['start_date'] = $start_date;
			$_POST['end_date'] = $end_date;
			$_POST['orderlist'] = 0;
			$_POST['slug'] = $_POST['module'];
			$_POST['source_data'] = 'website';
			
            $calendar->from_array($_POST);
            $calendar->save();
            
			set_notify('success', lang('save_data_complete'));
        }
        redirect('calendars/admin/calendars');
    }
    
    function delete($id)
    {
        if($id)
        {
            $calendar = new content_calendar($id);
            $calendar->delete();
            set_notify('success', lang('delete_data_complete'));
        } 
        redirect('calendars/admin/calendars');      
    }
	
	function ajax_save($id = FALSE)
	{
		if($_POST)
		{
			$calendar = new content_calendar($id);
            $_POST['start'] = date("Y-m-d", strtotime($_POST['start']));
            $_POST['end'] = date("Y-m-d", strtotime($_POST['end']));
			$_POST['user_id'] = $this->session->userdata('id');
			$calendar->from_array($_POST);
			$calendar->save();
		}
	}
	
	function ajax_delete($id)
	{
		if($id)
		{
			$calendar = new content_calendar($id);
			$calendar->delete();
		}
	}
}
?>