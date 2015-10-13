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
			<?=@$_GET['module']?>
			<small>
				<i class="icon-double-angle-right"></i>
				<?=@$_GET['category']?>
			</small>
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" method="post" action="contents/admin/contents/save/<?php echo $rs->id ?>" enctype="multipart/form-data">
					
					<!-- <div class="control-group">
						<label class="control-label">รูปภาพปก</label>
	
						<div class="controls">
							<div class="span4" style="margin-bottom:-15px;">
								<?php if($book->image != ""):?><img src="uploads/book/<?=$book->image?>" width="120"><?php endif;?>
								<input type="file" name="image" id="id-input-file-2" />
							</div>
						</div>
					</div> -->
					
					<div class="control-group">
					    <label class="control-label" for="name">ภาษา</label>
					    <div class="controls lang">
					      <a href="th" class="active flag th">ไทย</a>
					      <a href="en" class="flag en">อังกฤษ</a>
					    </div>
					</div>
					
					<div class="control-group">
						<label class="control-label">หัวข้อ</label>
	
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="title[th]" value="<?php echo lang_decode($rs->title,'th')?>"/>
							<input rel="en" class="input-xxlarge" type="text" name="title[en]" value="<?php echo lang_decode($rs->title,'en')?>"/>
						</div>
					</div>
					
					<!-- <div class="control-group">
						<label class="control-label">url</label>
	
						<div class="controls">
							<input class="input-xxlarge" type="text" name="url" value="<?php echo $book->url?>" placeholder="http://www.google.com"/>
						</div>
					</div> -->
					
					<div class="control-group">
						<label class="control-label">รายละเอียด</label>
	
						<div class="controls">
           					<div rel="th"><textarea name="detail[th]" class="tinymce input-xxlarge" rows="10"><?php echo lang_decode($rs->detail,'th')?></textarea></div>
							<div rel="en"><textarea name="detail[en]" class="tinymce input-xxlarge" rows="10"><?php echo lang_decode($rs->detail,'en')?></textarea></div>
			            </div>
					</div>
					
					<div class="form-actions">
						<?php echo form_current() ?>
						<input type="hidden" name="module" value="<?=@$_GET['module']?>">
						<input type="hidden" name="category" value="<?=@$_GET['category']?>">
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
tiny('detail[th],detail[en]');

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