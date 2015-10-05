<!--page specific plugin styles-->
<link rel="stylesheet" href="themes/ace_admin/assets/css/fullcalendar.css" />

<div class="breadcrumbs" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="#">หน้าแรก</a>

			<span class="divider">
				<i class="icon-angle-right arrow-icon"></i>
			</span>
		</li>
		<li class="active">ปฎิทินกิจกรรม</li>
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
	<!-- <div class="page-header position-relative">
		<h1>
			ภาพกิจกรรม
			<small>
				<i class="icon-double-angle-right"></i>
				ดาวน์โหลดแบบฟอร์ม &amp; Dynamic Tables
			</small>
		</h1>
	</div> -->
	<!--/.page-header-->
	
	
	
	
	
	
	
	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			
			<div class="row-fluid">
				<h3 class="header smaller lighter blue">ปฎิทินกิจกรรม</h3>

				
				
				<div id='calendar'></div>
				
				
				
			</div>

			
			
			<!--PAGE CONTENT ENDS-->
		</div>
	</div>
</div>

<script src="themes/ace_admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="themes/ace_admin/assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="themes/ace_admin/assets/js/fullcalendar.js"></script>
<script src="themes/ace_admin/assets/js/bootbox.min.js"></script>
		
<!-- !Calendar -->
<script>
	$(function(){	
	
		$.fullCalendar.parseDate( 'a' );		
		$('#calendar').fullCalendar({
			header: {
				left: 'today',
				center: 'title',
				right: 'prev,next'
			},
			theme: false,
			editable: true,
			eventDrop: function(event, start) {
				$.post('<?php echo base_url()?>calendars/admin/calendars/events_move',{id:event.id,start:start,end:start});
			},
			eventResize: function(event, end){
				$.post('<?php echo base_url()?>calendars/admin/calendars/events_move',{id:event.id,end:end});
			}, 
			dayClick: function(date) { 
				var month = (date.getMonth() + 1).toString();
				var dom = date.getDate().toString();
				if (month.length == 1) month = "0" + month;
				if (dom.length == 1) dom = "0" + dom;
				window.location = '<?php echo base_url()?>calendars/admin/calendars/form?date=' + date.getFullYear() + "-" + month + "-" + dom;
			},
				
			eventMouseover: function(){
				$(this).css('background-color', 'red');
			},
			eventClick: function(event){
				window.location = '<?php echo base_url()?>calendars/admin/calendars/form/' + event.id;
			},
			events: "<?php echo base_url()?>calendars/admin/calendars/events",
			loading: function(bool) {
			if (bool) $('#loading').show();
				else $('#loading').hide();
			}
		});
    });
</script>