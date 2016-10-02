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
	$title = "เกี่ยวกับ ทำฟัน ดัดฟัน ทันตกรรมความงาม รากฟันเทียม ดัดฟัน";
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
	$keywords = "รากฟันเทียม, ทำฟัน, จัดฟัน, ดัดฟัน, ทันตกรรมความงาม";
}

if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 3){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ฟันไม่สวย ฟันเก มาปรึกาษเรื่องจัดฟัน ดัดฟัน";
	$description = "บริการจัดฟัน ดัดฟัน พร้อมให้คำแนะนำและปรึกษาปัญหาการจัดฟัน";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, ทันตกรรมความงาม";
}

if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 15){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟัน ขจัดหินปูน";
	$description = "บริการทำฟัน การขูดหินปูน ขจัดคราบหินปูนและแบคทีเรียบนผิวฟัน";
	$keywords = "ทำฟัน, ทันตกรรมความงาม";
}

if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 19){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟันแตก ทำฟันหัก ทำอย่างไหร่ดี";
	$description = "บริการทำฟัน ครอบฟันเป็นการบูรณะและปกป้องฟันที่ได้รับความเสียหาย";
	$keywords = "ทำฟัน, ทันตกรรมความงาม, จัดฟัน";
}

// ทีมทันตแพทย์ของเรา
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "จัดฟัน ดัดฟัน ทำฟัน ทำรากฟันเทียมกับทันตแพทย์";
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
	$title = "ทำฟัน กับ ทพญ. อินทิรา วุฒิวิกัยการ";
	$description = "บริการทำฟัน ทันตกรรมทั่วไป";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 29){
	$content_language = "th";
	$robots = "index, follow";
	$title = "จัดฟัน ดัดฟัน กับ ทพ.ณัฐวุฒิ ศิริเสาวลักษณ์";
	$description = "บริการจัดฟัน ดัดฟัน กับแพทย์ผู้เชี่ยวชาญทางด้านการจัดฟัน";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 9){
	$content_language = "th";
	$robots = "index, follow";
	$title = "รักษารากฟันเทียม กับ ทพญ.ปนัดดา โรจนโรวรรณ";
	$description = "บริการรักษารากฟันเทียม กับแพทย์ผู้เชี่ยวชาญทางด้านทันตกรรมรากฟันเทียม";
	$keywords = "รากฟันเทียม, จัดฟัน, ดัดฟัน, ทำฟัน, ทันตกรรมความงาม";
}
if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 20){
	$content_language = "th";
	$robots = "index, follow";
	$title = "รักษารากฟันเทียม กับ ทพ. ตริน รื่นรมย์";
	$description = "บริการรักษารากฟันเทียม กับแพทย์ทันตกรรมเฉพาะทางศัลยกรรมช่องปากและใบหน้า ทันตกรรมรากเทียม";
	$keywords = "รากฟันเทียม, จัดฟัน, ดัดฟัน, ทำฟัน, ทันตกรรมความงาม";
}



// ทีมงานของเรา
if($this->uri->segment(1) == "staffs"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ดัดฟัน จัดฟัน ทำฟัน รากฟันเทียมกับทีมงาน";
	$description = "ทำฟัน จัดฟันโดยไม่ต้องผ่า ดัดฟัน รากฟันเทียม โดยทีมงานผู้ชำนาญการ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// คนไข้ของเรา
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทำฟันให้คนไข้ รากฟันเทียมให้คนไข้ ดัดฟันให้คนไข้ จัดฟันให้คนไข้";
	$description = "ทำฟัน จัดฟันโดยไม่ต้องผ่า ดัดฟัน รากฟันเทียม ความประทับใจจากผู้รับบริการ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// คนไข้ของเรา (รายละเอียด)
if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 3){
//if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$content_language = "th";
	$robots = "index, follow";
	$title = "จัดฟัน ดัดฟัน ความประทับใจของคุณลูกค้า";
	$description = "คุณวีระวรรณ สุทธิเดช (กุ้ง) หนึ่งในลูกค้าที่ประทับใจในบริการ ดัดฟัน จัดฟัน";
	$keywords = "จัดฟัน, ดัดฟัน, จัดฟันโดยไม่ต้องผ่า";
}

if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 6){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ดัดฟัน จัดฟัน ความประทับใจของคุณลูกค้า";
	$description = "คุณอินทุรัตน์ ลิ้มอังกูร หนึ่งในลูกค้าที่ประทับใจในบริการ ดัดฟัน จัดฟัน";
	$keywords = "จัดฟัน, ดัดฟัน";
}

// ติดต่อเรา
if($this->uri->segment(1) == "contacts"){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ทันตกรรมความงาม ทำฟัน จัดฟัน ดัดฟัน รักษารากฟันเทียม ติดต่อ DR.Tooth Dental Clinic";
	$description = "บริการสอบถามข้อมูลทันตกรรมความงามในด้านต่างๆ ได้ เช่น จัดฟันโดยไม่ต้องผ่า จัดฟันแบบใสไร้เหล็ก จัดฟันแบบเซรามิก ดัดฟัน รักษารักฟันเทียม ฯลฯ";
	$keywords = "ทำฟัน, ดัดฟัน, รากฟันเทียม, ทันตกรรมความงาม, จัดฟัน";
}

// ภาพกิจกรรม
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$content_language = "th";
	$robots = "index, follow";
	$title = "ภาพกิจกรรมร้านทำฟัน บริการทำฟัน จัดฟัน รากฟันเทียม";
	$description = "รูปภาพกิจกรรมของ DR.tooth ร้านทำฟัน บริการทำฟัน ดัดฟัน รากฟันเทียม";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// ภาพกิจกรรม (รายละเอียด)
if($this->uri->segment(1) == "galleries" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 71){
	$content_language = "th";
	$robots = "index, follow";
	$title = "คลินิกทันตกรรม DR.tooth บริการทำฟัน จัดฟัน รากฟันเทียม ฯลฯ";
	$description = "ภาพบรรยากาศคลินิกทันตกรรม DR.tooth บริการทันตกรรมความงามด้วยคุณภาพ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

// เครื่องมือของเรา
//if($this->uri->segment(1) == "tools" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
if($this->uri->segment(1) == "tools" && $this->uri->segment(2) == "view" && $this->uri->segment(3) == 4){
	$content_language = "th";
	$robots = "index, follow";
	$title = "เครื่องมือ XIOS XG ทำฟัน จัดฟัน รากฟันเทียม ฯลฯ";
	$description = "เครื่องมือของคลินิก DR.tooth บริการทันตกรรมความงามด้วยคุณภาพ";
	$keywords = "จัดฟัน, ดัดฟัน, ทำฟัน, รากฟันเทียม, ทันตกรรมความงาม";
}

?>



<meta http-equiv="content-language" content="<?=@$content_language?>">
<meta name="robots" content="<?=@$robots?>">
<meta name="description" content="<?=@$description?>"> 
<meta name="keywords" content="<?=@$keywords?>">
<title><?=@$title?></title> 