<?php
if($this->uri->segment(1) == "aboutus"){
	$title_page = "เกี่ยวกับเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>เกี่ยวกับเรา</li></ul>";
}

if($this->uri->segment(1) == "services"){
	$title_page = "บริการทางทันตกรรม";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>บริการทางทันตกรรม</li></ul>";
}

if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$title_page = "คุยกับหมอฟัน";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>คุยกับหมอฟัน</li></ul>";
}

if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "category" && is_numeric($this->uri->segment(3))){
	$title_page = "คุยกับหมอฟัน";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li><a href='talks'>คุยกับหมอฟัน</a></li><li class='active'>".category_name($this->uri->segment(3))."</li></ul>";
}

if($this->uri->segment(1) == "talks" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$title_page = "คุยกับหมอฟัน";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li><a href='talks'>คุยกับหมอฟัน</a></li>".category_name_by_talking_view($this->uri->segment(3))."</ul>";
}

if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$title_page = "ทีมทันตแพทย์ของเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>ทีมทันตแพทย์ของเรา</li></ul>";
}

if($this->uri->segment(1) == "dentists" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$title_page = "ทีมทันตแพทย์ของเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li><a href='dentists'>ทีมทันตแพทย์ของเรา</a></li>".dentist_name($this->uri->segment(3))."</ul>";
}

if($this->uri->segment(1) == "staffs"){
	$title_page = "ทีมงานของเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>ทีมงานของเรา</li></ul>";
}

if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "" && $this->uri->segment(3) == ""){
	$title_page = "คนไข้ของเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>คนไข้ของเรา</li></ul>";
}

if($this->uri->segment(1) == "patients" && $this->uri->segment(2) == "view" && is_numeric($this->uri->segment(3))){
	$title_page = "คนไข้ของเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li><a href='patients'>คนไข้ของเรา</a></li>".patient_name($this->uri->segment(3))."</ul>";
}

if($this->uri->segment(1) == "contacts"){
	$title_page = "ติดต่อเรา";
	$breadcrumb = "<li><a href='home'>หน้าแรก</a></li><li class='active'>ติดต่อเรา</li></ul>";
}
?>

<div class="section" id="path-page">
  <div class="container">
    <div class="line-hilight">&nbsp;</div>
    <div class="row">
      <div class="col-md-3">
        <span class="title-page"><?=$title_page?></span>
      </div>
      <div class="col-md-9">
        <ul class="breadcrumb">
          <?=$breadcrumb?>
        </ul>
      </div>
    </div>
  </div>
</div>