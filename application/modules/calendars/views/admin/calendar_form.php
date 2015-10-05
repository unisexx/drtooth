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
			ปฎิทินปฎิบัติงาน
			<!-- <small>
				<i class="icon-double-angle-right"></i>
				<?=@$_GET['category']?>
			</small> -->
		</h1>
	</div><!--/.page-header-->

	<div class="row-fluid">
		<div class="span12">
			
			<!-- PAGE CONTENT BEGINS HERE -->
		    <form id="validation-form" class="form-horizontal" method="post" action="calendars/admin/calendars/save/<?php echo $calendar->id ?>" enctype="multipart/form-data">
		    	
		        
		        <div class="control-group">
		            <label class="control-label" for="form-field-1">หัวข้อ</label>
		            <div class="controls">
		                <input type="text" id="form-field-1" class="input-xxlarge" name="title" value="<?php echo $calendar->title?>">
		            </div>
		        </div>
		        
		        <div class="control-group">
					<label class="control-label">ประเภท</label>
		
					<div class="controls">
						<label class="inline">
							<input name="className" type="radio" value="label-important" <?php echo ($calendar->className == "label-important" or $calendar->className == "")?"checked":"";?>>
							<span class="lbl"> <span class="label label-important">ประชุม</span></span>
						</label>
		
						<label class="inline">
							<input name="className" type="radio" value="label-success" <?php echo ($calendar->className == "label-success")?"checked":"";?>>
							<span class="lbl"> <span class="label label-success">สัมนา</span></span>
						</label>
		
						<label class="inline">
							<input name="className" type="radio" value="label-info" <?php echo ($calendar->className == "label-info")?"checked":"";?>>
							<span class="lbl"> <span class="label label-info">อบรม</span></span>
						</label>
		
						<label class="inline">
							<input name="className" type="radio" value="label-yellow" <?php echo ($calendar->className == "label-yellow")?"checked":"";?>>
							<span class="lbl"> <span class="label label-yellow">อื่นๆ</span></span>
						</label>
					</div>
				</div>      
														
		        <div class="control-group">
		            <label class="control-label">เริ่มวันที่</label>
		            <div class="input-append date date-picker" style="margin-left: 20px;">
					    <input size="16" type="text" name="start" value="<?php echo ($calendar->start)?DB2Date_th($calendar->start):DB2Date(@$_GET['date']); ?>">
					    <span class="add-on"><i class="icon-calendar"></i></span>
					</div>
		        </div>
		        
		        <div class="control-group">
		            <label class="control-label">ถึงวันที่</label>
		            <div class="input-append date date-picker" style="margin-left: 20px;">
		                <input size="16" type="text" name="end" value="<?php echo ($calendar->end)?DB2Date_th($calendar->end):DB2Date(@$_GET['date']); ?>">
		                <span class="add-on"><i class="icon-calendar"></i></span>
		            </div>
		        </div>
		                      
		        <div class="control-group">
		            <label class="control-label" for="form-field-9">รายละเอียด</label>
		            <div class="controls">
		                <textarea class="input-xxlarge" rows="5" id="form-field-9" name="detail"><?php echo $calendar->detail?></textarea>
		            </div>
		        </div>
		        
		        <div class="form-actions">
		        	<?php echo form_referer() ?>
		            <button class="btn btn-info" type="submit"><i class="icon-ok"></i> Submit</button>
		            &nbsp; &nbsp; &nbsp;
		            <button class="btn" type="reset"><i class="icon-undo"></i> Reset</button>
		        </div>
		        
		    </form>
		<!-- PAGE CONTENT ENDS HERE -->
		
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div>

<!-- Load TinyMCE -->
<script type="text/javascript" src="themes/ace_admin/assets/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="media/tiny_mce/config.js"></script>
<script type="text/javascript">
    tiny('detail');
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.date-picker').datepicker({
        language: 'th',
        format: 'dd/mm/yyyy',
        autoclose: true
    });
	
	$('#id-date-range-picker-1').daterangepicker();
});
</script>