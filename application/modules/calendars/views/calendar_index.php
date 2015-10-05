<!-- Calendar -->
<link rel="stylesheet" href="themes/admin/media/css/fullcalendar.css" />
<link rel="stylesheet" href="themes/admin/media/css/ace.min.css" />
<script type="text/javascript" src="themes/admin/media/js/fullcalendar.js"></script>
<!-- !Calendar -->
<script type="text/javascript">
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
			disableDragging : true,
			disableResizing : true,
			eventClick: function(event){
			window.location = '<?php echo base_url()?>calendars/view/' + event.id + '/<?php echo $id ?>';
					},
					events: "<?php echo base_url()?>calendars/events/<?php echo $id ?><?php echo @$_GET['group_id'] ?>",
					loading: function(bool) {
					if (bool) $('#loading').show();
						else $('#loading').hide();
					}
				});
            });
        </script>

<div class="carendar">
	<div id="data">
	
	<div style="clear:left;display:inline-block;width:100%">
			<div style="height:30px;">&nbsp;
			<div id='loading' style='display:none;text-align:center;'><img src="media/images/ajax-loader.gif" /></div>
		</div>
		<div id='calendar'></div>
		<div style="clear:both;"></div></div>
	</div>
</div>
