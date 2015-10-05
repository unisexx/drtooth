<div class="breadcrumbs" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home home-icon"></i>
			<a href="#">หน้าแรก</a>

			<span class="divider">
				<i class="icon-angle-right arrow-icon"></i>
			</span>
		</li>
		<li class="active">ข่าวประชาสัมพันธ์<br>(Auto feed from Intranet)</li>
	</ul><!--.breadcrumb-->

</div>

<div class="page-content">

	<div class="row-fluid">
		<div class="span12">
			<!--PAGE CONTENT BEGINS-->
			
			<div class="row-fluid">
				<!-- <h3 class="header smaller lighter blue">jQuery dataTables</h3> -->
				<div class="table-header">
					ข่าวประชาสัมพันธ์<br>(Auto feed from Intranet)
				</div>

				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th width="70">แสดง</th>
							<th>หัวข้อ</th>
							
							<th width="105">
								<!--
								<a class="btn btn-mini btn-info" href="infos/admin/infos/form?module=<?=$_GET['module']?>">เพิ่มรายการ</a>
								<a href="/get_news.php" target="_blank"><i class="fa fa-rss-square fa-2x" style="color:orange; vertical-align: middle;"></i></a>
								-->
							</th>
							
						</tr>
					</thead>

					<tbody>
						<?php 
							$this->load->helper('html');
							foreach($rs as $row): 
							dbConvert($row); 
						?>
						<tr>
							<td>
							
								<label>
									<input class="ace-switch" type="checkbox" name="status" value="<?php echo $row['id']; ?>" <?php echo ($row['status']=="1")?'checked="checked"':'' ?>/>
									<span class="lbl"></span>
								</label>
							
							</td>
							<td>
								
								<?=$row['title']?> 
								
								
							</td>
							<!-- <td><?=$row->category->name?></td> -->
							<td class="td-actions">
								
								
								<div class="hidden-phone visible-desktop action-buttons">
									
									<a class="green" href="infos/admin/infos/form/<?php echo $row['id']; ?>?module=<?=$_GET['module']?>">
										<i class="icon-pencil bigger-130"></i>
									</a>
<!--
									<a class="red" href="infos/admin/infos/delete/<?php echo $row->id?>?module=<?=$_GET['module']?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">
										<i class="icon-trash bigger-130"></i>
									</a>
-->									
								</div>

								
								
								
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>

			<!--PAGE CONTENT ENDS-->
		</div>
	</div>
</div>


<!--page specific plugin scripts-->
<script src="themes/ace_admin/assets/js/jquery.colorbox-min.js"></script>
<script src="themes/ace_admin/assets/js/jquery.dataTables.min.js"></script>
<script src="themes/ace_admin/assets/js/jquery.dataTables.bootstrap.js"></script>

<script type="text/javascript">
$(function() {
	$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
	
	var oTable1 = $('#sample-table-2').dataTable( {
	"aoColumns": [
      { "bSortable": false },
      null,
	  // null,
	  { "bSortable": false }
	] } );
	
	
	$('table th input:checkbox').on('click' , function(){
		var that = this;
		$(this).closest('table').find('tr > td:first-child input:checkbox')
		.each(function(){
			this.checked = that.checked;
			$(this).closest('tr').toggleClass('selected');
		});
			
	});


	$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
	function tooltip_placement(context, source) {
		var $source = $(source);
		var $parent = $source.closest('table')
		var off1 = $parent.offset();
		var w1 = $parent.width();

		var off2 = $source.offset();
		var w2 = $source.width();

		if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
		return 'left';
	}
	
})
</script>