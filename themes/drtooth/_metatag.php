<?php
// หน้าแรก
if($this->uri->segment(1) == "home" || $this->uri->segment(1) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟัน จัดฟัน ดัดฟัน รากฟันเทียม ทันตกรรมความงาม";
	$description = "คลินิกทันตกรรมที่ให้บริการด้านจัดฟัน ทำฟัน ดัดฟัน รากฟันเทียม ทันตกรรมความงาม โดยทีมทันตแพทย์ที่มีประสบการณ์เชี่ยวชาญเฉพาะทาง";
	$keywords = "ทำฟัน, ดัดฟัน, จัดฟัน, รากฟันเทียม, ทันตกรรมความงาม, จัดฟันโดยไม่ต้องผ่า";
}

// เกี่ยวกับเรา
if($this->uri->segment(1) == "aboutus"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟัน ดัดฟัน ทันตกรรมความงาม รากฟันเทียม ดัดฟัน เกี่ยวกับ";
	$description = "ข้อมูลเกี่ยวกับคลินิกทันตกรรมความงาม บริการจัดฟัน ทำฟัน ดัดฟัน บริการฝังรากฟันเทียม และบริการการดูแลรักษาฟันและโรคในช่องปาก";
	$keywords = "ทันตกรรมความงาม, จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, จัดฟันโดยไม่ต้องผ่า";
}

// บริการทางทันตกรรม
if($this->uri->segment(1) == "services"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทันตกรรมความงาม ทำฟัน จัดฟัน ดัดฟัน";
	$description = "ข้อมูลบริการทางทันตกรรมในด้านต่างๆ เช่น ทำฟันขัดหินปูน รักษารากฟันเทียม การจัดฟัน เป็นต้น";
	$keywords = "ทำฟัน, ทันตกรรมความงาม, จัดฟัน, ดัดฟัน, รากฟันเทียม, จัดฟันโดยไม่ต้องผ่า";
}

// คุยกับหมอฟัน
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟันปรึกษาหมอฟัน ดัดฟันปรึกษาหมอฟัน หรือทันตกรรมความงาม";
	$description = "ให้บริการคำปรึกษาทันตกรรมความงาม เช่น จัดฟันโดยไม่ต้องผ่า รักษารากฟันเทียม ฯลฯ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม, จัดฟันโดยไม่ต้องผ่า";
}

// คุยกับหมอฟัน (หมวดหมู่)
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "category" && is_numeric($this->uri->segment(3))){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟัน ทันตกรรมความงาม ดัดฟัน จัดฟันโดยไม่ต้องผ่า ปรึกษาหมอฟัน";
	$description = "ข้อมูลการประเภทการจัดฟัน ดัดฟัน พร้อมอธิบายปัญญาที่ควรได้รับการจัดฟัน";
	$keywords = "ทันตกรรมความงาม, จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, จัดฟันโดยไม่ต้องผ่า";
}


// คุยกับหมอฟัน (รายละเอียดข่าว)
if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "th";
	$robots = "index, follow";
	$title = "รากฟันเทียม ทำฟัน ดัดฟัน จัดฟัน พร้อมให้คำปรึกษาเรื่องทันตกรรมความงาม";
	$description = "คุยกับหมอฟัน เรื่องทันตกรรมความความ การรักษารากฟันเทียม ทำฟัน ดัดฟัน จัดฟัน";
	$keywords = "ทำฟัน, จัดฟัน, ดัดฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// ทีมทันตแพทย์ของเรา
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "จัดฟันกับทันตแพทย์ ทำฟันกับทันตแพทย์ รากฟันเทียมกับทันตแพทย์ ดันฟันกับทันตแพทย์";
	$description = "ทำฟัน จัดฟันโดยไม่ต้องผ่า ดัดฟัน รากฟันเทียม โดยทีมทันตแพทย์ผู้เชี่ยวชาญ";
	$keywords = "ทำฟัน, จัดฟัน, ดัดฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// ทีมทันตแพทย์ของเรา (รายละเอียดหมอ)
// if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	// $content_language = "th";
	// $robots = "index, follow";
	// $title = "ทันตแพทย์ทั่วไป ทำฟัน รักษารากฟันเทียม";
	// $description = "ทำฟัน จัดฟันโดยไม่ต้องผ่า ดัดฟัน รากฟันเทียม โดยทีมทันตแพทย์ผู้เชี่ยวชาญ";
	// $keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
// }

// ทีมทันตแพทย์ของเรา (รายละเอียดหมอ)
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 32){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทพญ. อินทิรา วุฒิวิกัยการ";
	$description = "ทพญ. อินทิรา วุฒิวิกัยการ ทันตแพทยศาศตร์บัญฑิต จุฬาลงกรณ์มหาวิทยาลัย สมาชิกทันแพทย์สภาแห่งประเทศไทย";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}


// ทีมงานของเรา
if($this->uri->segment(1) == "staffs"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟันกับทีมงาน รากฟันเทียมกับทีมงาน ดันฟันกับทีมงาน จัดฟันกับทีมงาน";
	$description = "ทำฟัน จัดฟันโดยไม่ต้องผ่า ดัดฟัน รากฟันเทียม โดยทีมงานผู้ชำนาญการ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// คนไข้ของเรา
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟันให้คนไข้ รากฟันเทียมให้คนไข้ ดันฟันให้คนไข้ จัดฟันให้คนไข้";
	$description = "ทำฟัน จัดฟันโดยไม่ต้องผ่า ดัดฟัน รากฟันเทียม ความประทับใจจากผู้รับบริการ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// คนไข้ของเรา (รายละเอียด)
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// ติดต่อเรา
if($this->uri->segment(1) == "contacts"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ติดต่อสอบถามข้อมูล ทันตกรรมความงาม จัดฟัน ทำฟัน ดัดฟัน รักษารากฟันเทียม";
	$description = "บริการสอบถามข้อมูลทันตกรรมความงามในด้านต่างๆ ได้ เช่น จัดฟันโดยไม่ต้องผ่า จัดฟันแบบใสไร้เหล็ก จัดฟันแบบเซรามิก ดัดฟัน รักษารักฟันเทียม ฯลฯ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// ภาพกิจกรรม
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// ภาพกิจกรรม (รายละเอียด)
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// เครื่องมือของเรา
if($this->uri->segment(1) == "tools" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "th";
	$robots = "index, follow";
	$title = "";
	$description = "";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

?>



<meta http-equiv="content-language" content="<?=@$content_language?>">
<meta name="robots" content="<?=@$robots?>">
<meta name="description" content="<?=@$description?>"> 
<meta name="keywords" content="<?=@$keywords?>">
<title><?=@$title?></title> 