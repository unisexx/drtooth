<link rel="stylesheet" href="media/js/colorbox/example1/colorbox.css">
<script src="media/js/colorbox/jquery.colorbox-min.js" type="text/javascript"></script>

<div id="title-blank">ภาพกิจกรรม / วีดีโอ</div>
<div id="breadcrumb"><a href="">หน้าแรก</a> > <span class="b1"><a href="vdos/lists">ภาพกิจกรรม / วีดีโอ</a></span></div>
<div id="page">
	<h1><?=$rs->name?></h1>
	<?foreach($rs->gallery->get() as $item):?>
	<div class="col-md-3" style="margin-bottom: 10px;">
		<a class="colorbox" href="uploads/gallery/<?=$item->image?>">
			<img class="img-responsive" src="media/timthumb/timthumb.php?src=uploads/gallery/<?=$item->image?>&w=214&h=160"/>
		</a>
	</div>
	<?endforeach;?>
	<div class="clearfix"></div>
</div>


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