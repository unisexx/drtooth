<?php
// เกี่ยวกับเรา
if($this->uri->segment(1) == "aboutus"){
	$description = "";
	$keywords = "";
}

// บริการทางทันตกรรม
if($this->uri->segment(1) == "services"){
	$description = "";
	$keywords = "";
}

// คุยกับหมอฟัน
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$description = "";
	$keywords = "";
}

// คุยกับหมอฟัน (หมวดหมู่)
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "category" && is_numeric($this->uri->segment(3))){
	$description = "";
	$keywords = "";
}

// คุยกับหมอฟัน (รายละเอียดข่าว)
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$description = "";
	$keywords = "";
}

// ทีมทันตแพทย์ของเรา
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$description = "";
	$keywords = "";
}

// ทีมทันตแพทย์ของเรา (รายละเอียดหมอ)
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$description = "";
	$keywords = "";
}

// ทีมงานของเรา
if($this->uri->segment(1) == "staffs"){
	$description = "";
	$keywords = "";
}

// คนไข้ของเรา
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$description = "";
	$keywords = "";
}

// คนไข้ของเรา (รายละเอียด)
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$description = "";
	$keywords = "";
}

// ติดต่อเรา
if($this->uri->segment(1) == "contacts"){
	$description = "";
	$keywords = "";
}

// ภาพกิจกรรม
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$description = "";
	$keywords = "";
}

// ภาพกิจกรรม (รายละเอียด)
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$description = "";
	$keywords = "";
}

// เครื่องมือของเรา
if($this->uri->segment(1) == "tools" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$description = "";
	$keywords = "";
}
?>


<meta name="description" content="<?=$description?>"> 
<meta name="keywords" content="<?=$keywords?>">