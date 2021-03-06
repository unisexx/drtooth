<div class="breadcrumbs" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="#">หน้าแรก</a>

			<span class="divider">
				<i class="icon-angle-right arrow-icon"></i>
			</span>
		</li>
		<li class="active">บริการทางทันตกรรม</li>
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
			บริการทั้งหมด
			<!-- <small>
				<i class="icon-double-angle-right"></i>
				<?=@$_GET['category']?>
			</small> -->
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" method="post" action="services/admin/services/save/<?php echo $rs->id ?>" enctype="multipart/form-data">
					
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
						<label class="control-label">หมวดหมู่</label>
						<div class="controls">
							<input rel="th" class="input-xxlarge" type="text" name="name[th]" value="<?php echo lang_decode($rs->name,'th')?>" />
							<input rel="en" class="input-xxlarge" type="text" name="name[en]" value="<?php echo lang_decode($rs->name,'en')?>" />
							<a href="#" class="btn btn-primary btn-mini addans"><i class="icon-pencil"></i> เพิ่มรายการ</a>
						</div>
					</div>
					
					<?php foreach($rs->service as $row): ?>
		            <div class="control-group lists">
			            <label class="control-label" for="form-field-2">รายการ</label>
			            <div class="controls">
			                <input rel="th" type="text" id="form-field-2" class="input-xxlarge" name="title[th][]" value="<?=lang_decode($row->title,'th')?>">
			                <input rel="en" type="text" id="form-field-2" class="input-xxlarge" name="title[en][]" value="<?=lang_decode($row->title,'en')?>">
			                <input type="hidden" name="sub_id[]" value="<?=$row->id?>">
			                <a href="#" class="btn btn-danger btn-mini delans" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')"><i class="fa fa-times"></i></a>
			            </div>
			        </div>
		        	<?php endforeach; ?>
        
					<div class="control-group lists">
			            <label class="control-label" for="form-field-2">รายการ</label>
			            <div class="controls">
			                <input rel="th" type="text" id="form-field-2" class="input-xxlarge" name="title[th][]" value="">
			                <input rel="en" type="text" id="form-field-2" class="input-xxlarge" name="title[en][]" value="">
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
tiny('detail');
$(function() {
	$("[rel=en]").hide();
	$(".lang a").click(function(){
		$("[rel=" + $(this).attr("href") + "]").show().siblings().hide();
		$(this).addClass('active').siblings().removeClass('active');
		$('.addans,.delans').show();
		return false;
	})
	
	$(".addans").click(function(){			
		$('.lists:last').clone().find("input:text").val("").end().insertBefore($('.form-actions'));
		return false;
	})
	
	$(".delans").click(function(){			
		$this = $(this);
	    $.post('services/admin/services/delete_list/' + $this.prev('input[type=hidden]').val(),
        function(data){
            $this.closest('.control-group').fadeOut();
        })
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