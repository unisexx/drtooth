<div class="breadcrumbs" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="#">หน้าแรก</a>

			<span class="divider">
				<i class="icon-angle-right arrow-icon"></i>
			</span>
		</li>
		<li class="active">ฟอร์ม</li>
	</ul><!--.breadcrumb-->

	<!-- <div class="nav-search" id="nav-search">
		<form class="form-search" />
			<span class="input-icon">
				<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
				<i class="icon-search nav-search-icon"></i>
			</span>
		</form>
	</div> -->
	<!--#nav-search-->
</div>

<div class="page-content">
	<div class="page-header position-relative">
		<h1>
			ที่อยู่
			<!-- <small>
				<i class="icon-double-angle-right"></i>
				<?=@$_GET['category']?>
			</small> -->
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" method="post" action="addresses/admin/addresses/save/<?php echo $rs->id ?>" enctype="multipart/form-data">
					
					<div class="control-group">
					    <label class="control-label" for="name">ภาษา</label>
					    <div class="controls lang">
					      <a href="th" class="active flag th">ไทย</a>
					      <a href="en" class="flag en">อังกฤษ</a>
					    </div>
					</div>
					
					<!-- <div class="control-group">
			            <label class="control-label" for="id-input-file-1">ภาพไฮไลท์</label>
			            <div class="controls">
			                <?php if($rs->image):?>
			                <img class="img" style="width:300px;" src="<?php echo (is_file('uploads/hilight/'.$rs->image))? 'uploads/hilight/'.$rs->image : 'media/images/webboard/noavatar.gif' ?>"  /> <br><br>
			                <?php endif;?>
			                <div class="input-xxlarge" style="width:544px;">
			                    <input type="file" id="id-input-file-1" name="image"/> รูปภาพขนาด 698x249 px
			                </div>
			            </div>
			        </div> -->
			        
			        <!-- <div class="control-group">
						<label class="control-label">ลิ้งค์ไปยัง</label>
						<div class="controls">
							<input class="input-xxlarge" type="text" name="url" value="<?php echo $rs->url?>" placeholder="http://www.m-society.go.th"/>
						</div>
					</div> -->
					
					<!-- <div class="control-group">
						<label class="control-label">หัวข้อ</label>
						<div class="controls">
							<input class="input-xxlarge" type="text" name="title" value="<?php echo $rs->title?>"/>
						</div>
					</div> -->
					
					<!-- <div class="control-group">
			            <label class="control-label" for="form-field-9">รายละเอียด</label>
			            <div class="controls">
			                <textarea class="input-xxlarge" rows="5" id="form-field-9" name="detail"><?php echo $rs->detail?></textarea>
			            </div>
			        </div> -->
					
					<!-- <div class="control-group">
						<label class="control-label">ไฟล์แนบ</label>
						<div class="controls">
							<input class="input-xxlarge" type="text" name="files" value="<?php echo $rs->files?>"/>
							<input class="btn btn-mini btn-info" type="button" name="browse" value="เลือกไฟล์" onclick="browser($(this).prev(),'file')" />
						</div>
					</div> -->
					
					<!-- <div class="control-group">
						<label class="control-label">หมวดหมู่</label>
						<div class="controls">
							<?php// echo form_dropdown('category_id',$rs->category->get_option(),$rs->category_id,'');?>
						</div>
					</div> -->
					
					<div class="control-group">
						<label class="control-label">ชื่อ</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="name[th]" value="<?php echo lang_decode($rs->name,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="name[en]" value="<?php echo lang_decode($rs->name,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">ที่อยู่</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="address[th]" value="<?php echo lang_decode($rs->address,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="address[en]" value="<?php echo lang_decode($rs->address,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">โทร</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="tel[th]" value="<?php echo lang_decode($rs->tel,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="tel[en]" value="<?php echo lang_decode($rs->tel,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">อีเมล์</label>
						<div class="controls">
							<input class="input-xxlarge" type="text" name="email" value="<?php echo $rs->email?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">facebook</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="facebook[th]" value="<?php echo lang_decode($rs->facebook,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="facebook[en]" value="<?php echo lang_decode($rs->facebook,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">twitter</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="twitter[th]" value="<?php echo lang_decode($rs->twitter,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="twitter[en]" value="<?php echo lang_decode($rs->twitter,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">google+</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="googleplus[th]" value="<?php echo lang_decode($rs->googleplus,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="googleplus[en]" value="<?php echo lang_decode($rs->googleplus,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">เวลาทำการ #1</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="open[th]" value="<?php echo lang_decode($rs->open,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="open[en]" value="<?php echo lang_decode($rs->open,'en')?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">เวลาทำการ #2</label>
						<div class="controls">
							<div rel="th"><textarea name="open2[th]" class="full tinymce"><?php echo lang_decode($rs->open2,'th')?></textarea></div>
							<div rel="en"><textarea name="open2[en]" class="full tinymce"><?php echo lang_decode($rs->open2,'en')?></textarea></div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">รายละเอียด</label>
						<div class="controls">
							<div rel="th"><textarea name="detail[th]" class="full tinymce"><?php echo lang_decode($rs->detail,'th')?></textarea></div>
							<div rel="en"><textarea name="detail[en]" class="full tinymce"><?php echo lang_decode($rs->detail,'en')?></textarea></div>
						</div>
					</div>
					
					
					<div class="control-group">
						<label class="control-label">แผนที่</label>
						<div class="controls">
							<style type="text/css">
							/* css กำหนดความกว้าง ความสูงของแผนที่ */
							#map_canvas { 
								width:550px;
								height:300px;
							}
							#map_frm{margin-top:5px;}
							#map_frm label{float:left; width:70px; text-align:right; margin-right:5px;}
							</style>
							<div id="map_canvas"></div>
								<div id="map_frm">
							</div>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Latitude</label>
						<div class="controls">
							<input id="lat_value" class="input-xxlarge" type="text" name="latitude" value="<?php echo $rs->latitude?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Longitude</label>
						<div class="controls">
							<input id="lon_value" class="input-xxlarge" type="text" name="longitude" value="<?php echo $rs->longitude?>"/>
						</div>
					</div>
					
					<div class="control-group">
						<label class="control-label">Zoom</label>
						<div class="controls">
							<input id="zoom_value" class="input-xxlarge" type="text" name="zoom" value="<?php echo $rs->zoom?>"/>
						</div>
					</div>
					
					
					<div class="form-actions">
						<?php echo form_referer() ?>
						<button class="btn btn-large btn-info" type="submit">
							<i class="icon-ok bigger-110"></i>บันทึก
						</button>

						&nbsp; &nbsp; &nbsp;
						<button class="btn btn-large" type="reset">
							<i class="icon-undo bigger-110"></i>รีเซ็ต
						</button>
					</div>
				
				</form>
				
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div>

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
tiny('detail[th],detail[en],open2[th],open2[en]');
$(function() {
	$("[rel=en]").hide();
	$(".lang a").click(function(){
		$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
		$(this).addClass('active').siblings().removeClass('active');
		return false;
	})
	
	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file:'ไม่มีไฟล์แนบ...',
		btn_choose:'แนบไฟล์',
		btn_change:'เปลี่ยน',
		droppable:false,
		onchange:null,
		thumbnail:false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});
});
</script>
<script type="text/javascript">
var map; // กำหนดตัวแปร map ไว้ด้านนอกฟังก์ชัน เพื่อให้สามารถเรียกใช้งาน จากส่วนอื่นได้
var GGM; // กำหนดตัวแปร GGM ไว้เก็บ google.maps Object จะได้เรียกใช้งานได้ง่ายขึ้น
function initialize() { // ฟังก์ชันแสดงแผนที่
	GGM=new Object(google.maps); // เก็บตัวแปร google.maps Object ไว้ในตัวแปร GGM
	// กำหนดจุดเริ่มต้นของแผนที่
	var my_Latlng  = new GGM.LatLng(<?php echo $rs->latitude?>,<?php echo $rs->longitude?>);
	var my_mapTypeId=GGM.MapTypeId.ROADMAP; // กำหนดรูปแบบแผนที่ที่แสดง
	// กำหนด DOM object ที่จะเอาแผนที่ไปแสดง ที่นี้คือ div id=map_canvas
	var my_DivObj=$("#map_canvas")[0]; 
	// กำหนด Option ของแผนที่
	var myOptions = {
		zoom: <?php echo $rs->zoom?>, // กำหนดขนาดการ zoom
		center: my_Latlng , // กำหนดจุดกึ่งกลาง
		mapTypeId:my_mapTypeId // กำหนดรูปแบบแผนที่
	};
	map = new GGM.Map(my_DivObj,myOptions);// สร้างแผนที่และเก็บตัวแปรไว้ในชื่อ map
	
	var my_Marker = new GGM.Marker({ // สร้างตัว marker
		position: my_Latlng,  // กำหนดไว้ที่เดียวกับจุดกึ่งกลาง
		map: map, // กำหนดว่า marker นี้ใช้กับแผนที่ชื่อ instance ว่า map
		draggable:true, // กำหนดให้สามารถลากตัว marker นี้ได้
		title:"คลิกลากเพื่อหาตำแหน่งจุดที่ต้องการ!" // แสดง title เมื่อเอาเมาส์มาอยู่เหนือ
	});
	
	// กำหนด event ให้กับตัว marker เมื่อสิ้นสุดการลากตัว marker ให้ทำงานอะไร
	GGM.event.addListener(my_Marker, 'dragend', function() {
		var my_Point = my_Marker.getPosition();  // หาตำแหน่งของตัว marker เมื่อกดลากแล้วปล่อย
        map.panTo(my_Point);  // ให้แผนที่แสดงไปที่ตัว marker		
        $("#lat_value").val(my_Point.lat());  // เอาค่า latitude ตัว marker แสดงใน textbox id=lat_value
        $("#lon_value").val(my_Point.lng()); // เอาค่า longitude ตัว marker แสดงใน textbox id=lon_value 
        $("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value
	});		
	// กำหนด event ให้กับตัวแผนที่ เมื่อมีการเปลี่ยนแปลงการ zoom
	GGM.event.addListener(map, 'zoom_changed', function() {
		$("#zoom_value").val(map.getZoom()); // เอาขนาด zoom ของแผนที่แสดงใน textbox id=zoom_value 	
	});
}
$(function(){
	// โหลด สคริป google map api เมื่อเว็บโหลดเรียบร้อยแล้ว
	// ค่าตัวแปร ที่ส่งไปในไฟล์ google map api
	// v=3.2&sensor=false&language=th&callback=initialize
	//	v เวอร์ชัน่ 3.2
	//	sensor กำหนดให้สามารถแสดงตำแหน่งทำเปิดแผนที่อยู่ได้ เหมาะสำหรับมือถือ ปกติใช้ false
	//	language ภาษา th ,en เป็นต้น
	//	callback ให้เรียกใช้ฟังก์ชันแสดง แผนที่ initialize
	$("<script/>", {
	  "type": "text/javascript",
	  src: "http://maps.google.com/maps/api/js?v=3.2&sensor=false&language=th&callback=initialize"
	}).appendTo("body");	
});
</script>