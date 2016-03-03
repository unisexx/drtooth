<?php
class Public_Controller extends Master_Controller
{
	function __construct()
	{
		parent::__construct();
		
		header('Content-type: text/html; charset=UTF-8');
		$this->template->title('DrTooth Dental Clinic');
		$this->template->set_theme('drtooth');
    	$this->template->set_layout('layout');
		
		// Set js
		$this->lang->load('admin');
		$this->template->append_metadata(js_notify());
		
		// meta keywords
		// $this->template->append_metadata( meta('description','คลินิกทันตกรรมที่ให้บริการการดูแลรักษาฟันและโรคในช่องปากโดยทีมทันตแพทย์ที่เชี่ยวชาญเฉพาะทาง มีประสบการณ์ในการทำงาน'));
		// $this->template->append_metadata( meta('keywords','DrTooth,Dental,Clinic,ทันตกรรม,จัดฟัน,Damon,Invisalign,จัดฟันร่วมกับการผ่าตัด,ความงาม,ทันตกรรมประดิษฐ์,รากเทียม,ศัลยกรรม,ช่องปาก,โรคเหงือก,ขูดหินปูน,เคลือบผิวฟัน,เคลือบฟลูออไรด์,ฟอกสีฟัน,X-Ray,ถอนฟัน,ผ่าฟันคุด,ครอบฟัน,อุดฟัน'));
        
        // Set Language
        if(!$this->session->userdata('lang')) $this->session->set_userdata('lang','th');
       
        if(@$this->session->userdata('lang') == "th"){
            $this->lang->load('public','thai');
        }elseif(@$this->session->userdata('lang') == "en"){
            $this->lang->load('public','english');
        }else{
            $this->lang->load('public','china');
        }
	}
}
?>