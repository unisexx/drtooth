<link rel="stylesheet" href="media/js/colorbox/example1/colorbox.css">
<script src="media/js/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>


<div class="section">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
   		<span class="title-page2"><?=lang_decode($rs->name)?></span>
   		<div class="clearfix"></div>
		<?foreach($rs->gallery->get() as $item):?>
		<div class="col-md-3" style="margin-bottom: 10px;">
			<a class="colorbox" href="uploads/gallery/<?=$item->image?>">
				<?=thumb('uploads/gallery/'.$item->image,'214','160','1','class="border-dr-pic img-responsive img-thumbnail"')?>
			</a>
		</div>
		<?endforeach;?>
	<div class="clearfix"></div>
    </div></div></div></div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>



<script>
	$(document).ready(function(){
		//Examples of how to assign the Colorbox event to elements
		$(".colorbox").colorbox({
			rel:'colorbox',
			maxWidth: '75%',
			maxHeight: '75%'
		});
		
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>