<?php
	
	$this->load->helper('html'); 
	
	foreach($rs as $row)
	{
		
	
	dbConvert($row);
							
?>
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
			ข่าวประชาสัมพันธ์<br>(Auto feed from Intranet)
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" method="post" action="infos/admin/infos/save/<?php echo $row['id']; ?>" enctype="multipart/form-data">
					
					<div class="control-group">
			            <label class="control-label" for="id-input-file-1">ภาพประกอบข่าว</label>
			            <div class="controls">
			                <?php if($row['img_title']):?>
			                <img class="img" style="width:100px;" src="<?php echo (is_file('http://intranet.m-society.go.th/upload/newsletters/'.$row['img_title']))? 'http://intranet.m-society.go.th/upload/newsletters/'.$row['img_title'] : 'media/images/webboard/noavatar.gif' ?>"  /> <br><br>
			                <?php endif;?>
			                <div class="input-xxlarge" style="width:544px;">
			                    <input type="file" id="id-input-file-1" name="image"/>
			                </div>
			            </div>
			        </div>
					
					<div class="control-group">
						<label class="control-label">หัวข้อ</label>
						<div class="controls">
							<input class="input-xxlarge" type="text" name="title" value="<?php echo $row['title'];?>"/>
						</div>
					</div>
					
					<div class="control-group">
			            <label class="control-label" for="form-field-9">รายละเอียด</label>
			            <div class="controls">
            <textarea id="detail" name="detail">
            	<?php echo $rs->detail?>
            </textarea>
            
             
            <script type="text/javascript" src="media/ckeditor/ckeditor.js"></script>
            <script type="text/javascript" src="media/cke_config.js"></script>		
            <script type="text/javascript">
			
            var editorObj=CKEDITOR.replace( 'detail',cke_config); 
			
			

            </script>
			            </div>
			        </div>
					
					
					<div class="form-actions">
						<?php echo form_referer() ?>
						
						<!-- 
						
						<input type="hidden" name="module" value="<?=$_GET['module']?>"> 
						
						<button class="btn btn-large btn-info" type="submit">
							<i class="icon-ok bigger-110"></i>บันทึก
						</button>
						-->
						
                        &nbsp; &nbsp; &nbsp;
						<a class="btn btn-large" href="infos/admin/infos?module=<?=@$_GET['module']?>" >กลับ</a>

					</div>
				
				</form>
				
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div>

<?php } ?>

<!-- Load TinyMCE -->
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
//tiny('detail');
$(function() {
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