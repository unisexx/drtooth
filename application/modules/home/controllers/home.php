<?php
class Home extends Public_Controller {

	function __construct()
	{
		parent::__construct();	
	}
	
	function index($seYear=FALSE,$seMonth=FALSE)
	{
		$this->template->set_layout('home');

		if($seMonth == '')$seMonth = date('m');
		if($seYear == '')$seYear = date('Y');
		
		
		$data['seYear'] = $seYear;
		$data['seMonth'] = $seMonth;
	
		
		$this->template->build('index', $data);
	
/*		if(@$seMonth)
		{
			$m=$seMonth;	
			
		}else{
			$m=date('m');
		}
		
		$data[1] = 'calendars/calendar_mso_detail/1';
		
		
		$rs = new Content_calendar();
		$rs->order_by('id desc')->get();	
						
		foreach($rs as $row)
		{
	
				
			$bg = "#77c705";
	
			$cat_type = 1;
			$s_date = $row->start_date;
			
			$calendar_id = $row->id;
			$calendar_title = $row->title;
			
			$sd = explode(" ", $s_date); 
			$sd1 = explode("-", $sd[0]); 
			
			
	
				
				if($sd1[1]==$m)
				{
				
					$data[$sd1[2]] = 'calendars/calendar_mso_detail/'.$calendar_id;
				  		
				}
				
			

		}
		
	
	$prefs = array (
       'show_next_prev'  => TRUE,
       'next_prev_url'   => 'home/index/'
    );
	
	$prefs['template'] = '
   {table_open} <table class="cal" width="100%">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

      {heading_previous_cell}<td>
   
   <div class="cal-pre"><a href="{previous_url}">&nbsp;</a></div>
   
   </td>{/heading_previous_cell}
   
      {heading_next_cell}<td>
   
    <div class="cal-next"><a href="{next_url}">&nbsp;</a></div>
   
   </td>{/heading_next_cell}
   
   {heading_title_cell}
   
   <td colspan="7" align="center">
   
     <div class="cal-month">{heading}</div>
   
   </td>
   
   {/heading_title_cell}
   


   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<th>{week_day}</th>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
   {cal_cell_content_today}<div class="today"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="today">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}';
	
	
	
	
		$this->load->library('calendar', $prefs);
		
	$vars['rs_calendar'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
	
		
		$this->template->build('index', $vars);
*/		
	
		
	}
	
	function show_calendar($seYear=FALSE,$seMonth=FALSE)
	{
		
			
		$m=$seMonth;	
		
		$data = array();
		
		$vars['seYear'] = $seYear;
		$vars['seMonth'] = $seMonth;
		
		$vars['seYear2'] = $seYear;
		$vars['seMonth2'] = $seMonth;
		
		$rs = new content_calendar();
		
		$rs->order_by('id desc')->get();
			
						
		foreach($rs as $row)
		{
	
	
				
			$bg = "#77c705";
	
			$cat_type = $row->module;
			$s_date = $row->start_date;
			
			$calendar_id = $row->id;
			$calendar_title = $row->title;
			
			$sd = explode(" ", $s_date); 
			$sd1 = explode("-", $sd[0]); 
				
			if($sd1[1]==$m)
			{
			
				$data[$sd1[2]] = 'calendars/calendar_mso_detail/'.$calendar_id;
					
			}
				
			

		}
		
		
	if(count($data)==0)$data[1] = 'calendars/calendar_mso_detail/1';		
	
	$prefs = array (
       'show_next_prev'  => FALSE,
       'next_prev_url'   => 'calendars/index/'
    );
	
	$prefs['template'] = '
   {table_open} <table class="cal" width="100%">{/table_open}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<th>{week_day}</th>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
   {cal_cell_content_today}<div class="today"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="today">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}';
	
	
	
	
		$this->load->library('calendar', $prefs);
		
		$vars['rs_calendar'] = $this->calendar->generate($this->uri->segment(3), $this->uri->segment(4), $data);
			
		$this->load->view('calendar_data', $vars);	
	}
	
	
	function intro(){
		$this->load->view('intro');
	}
	
	public function lang($lang)
	{
		$this->load->library('user_agent');
		$this->session->set_userdata('lang',$lang);
		
		redirect($this->agent->referrer());
	}
	
	public function sitemap()
	{
		$data['categories'] = new Category();
		$data['childs'] = new Category();
		$data['categories']->where("parents = 0 and id not in (74)")->get();
		$data['num'] = ceil($data['categories']->where("parents = 0 and id not in (74)")->count()/2);
		$this->template->build('sitemap',$data);
	}
	
	function testmail(){
			$this->load->library('email');
			$this->email->from('ampzimeow@gmail.com', 'เคน ธีรเดช วงสืบพันธุ์');
			$this->email->to('unisexx@hotmail.com');
			$this->email->subject('นี่คือสแปม');
			$this->email->message('555+');
			$this->email->send();
			echo $this->email->print_debugger();
	}
	
	function search()
	{
		$this->template->title(lang('search').' - zulex.co.th');
		$this->template->build('search');
	}
	
	function under_construction(){
		$this->template->build('under_contruction');
	}
	
	public function testdb()
	{
		$this->load->library('adodb');
		$row = $this->ado->pageexecute('SELECT * FROM ACT_PROVINCE', 10, 1);
		//dbConvert($row);
		foreach($row as $item)
		{
			dbConvert($item);
			echo $item['province_name'].'<br />';
		}
	}
	
	function how_to(){
		$this->template->build('how_to');
	}
}
?>