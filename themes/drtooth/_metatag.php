<?php
// หน้าแรก
if($this->uri->segment(1) == "home" || $this->uri->segment(1) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "หน้าแรก - DrTooth Dental Clinic";
	$description = "คลินิกทันตกรรมที่ให้บริการการดูแลรักษาฟันและโรคในช่องปากโดยทีมทันตแพทย์ที่เชี่ยวชาญเฉพาะทาง มีประสบการณ์ในการทำงาน";
	$keywords = "DrTooth,Dental,Clinic,ทันตกรรม,จัดฟัน,Damon,Invisalign,จัดฟันร่วมกับการผ่าตัด,ความงาม,ทันตกรรมประดิษฐ์,รากเทียม,ศัลยกรรม,ช่องปาก,โรคเหงือก,ขูดหินปูน,เคลือบผิวฟัน,เคลือบฟลูออไรด์,ฟอกสีฟัน,X-Ray,ถอนฟัน,ผ่าฟันคุด,ครอบฟัน,อุดฟัน";
}

// เกี่ยวกับเรา
if($this->uri->segment(1) == "aboutus"){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// บริการทางทันตกรรม
if($this->uri->segment(1) == "services"){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// คุยกับหมอฟัน
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// คุยกับหมอฟัน (หมวดหมู่)
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "category" && is_numeric($this->uri->segment(3))){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// คุยกับหมอฟัน (รายละเอียดข่าว)
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// ทีมทันตแพทย์ของเรา
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// ทีมทันตแพทย์ของเรา (รายละเอียดหมอ)
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// ทีมงานของเรา
if($this->uri->segment(1) == "staffs"){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// คนไข้ของเรา
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// คนไข้ของเรา (รายละเอียด)
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// ติดต่อเรา
if($this->uri->segment(1) == "contacts"){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// ภาพกิจกรรม
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// ภาพกิจกรรม (รายละเอียด)
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}

// เครื่องมือของเรา
if($this->uri->segment(1) == "tools" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "";
	$robots = "";
	$title = "";
	$description = "";
	$keywords = "";
}
?>

<meta http-equiv="content-language" content="<?=@$content_language?>">
<meta name="robots" content="<?=@$robots?>">
<meta name="description" content="<?=@$description?>"> 
<meta name="keywords" content="<?=@$keywords?>">
<title><?=@$title?></title> 