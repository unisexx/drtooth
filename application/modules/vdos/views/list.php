<div id="title-blank">ภาพกิจกรรม / วีดีโอ</div>
<div id="breadcrumb"><a href="">หน้าแรก</a> > <span class="b1">ภาพกิจกรรม / วีดีโอ</span></div>
<div id="page">
	<?foreach($rs as $row):?>
		<div class="media col-lg-6" style="position: relative;">
		<div class="vdoplay" style="top:76px;"><a href="vdos/view/<?=$rs->id?>">&nbsp;</a></div>
		  <div class="media-left media-middle">
		    <a href="vdos/view/<?=$row->id?>">
		      <img class="media-object imgvdo" src="media/timthumb/timthumb.php?src=uploads/vdo/<?=$row->image?>&w=139&h=96" width="139" height="96">
		    </a>
		  </div>
		  <div class="media-body">
		  	<a href="vdos/view/<?=$row->id?>">
		    	<h4 class="media-heading"><?=$row->title?></h4>
		    </a>
		    <i class="fa fa-youtube-play"></i>
		  </div>
		</div>
	<?endforeach;?>
	
	<div class="clearfix"></div>
	<hr style="width:70%;">
	
	<?foreach($rs2 as $row):?>
		<div class="media col-lg-6" style="position: relative;">
		  <div class="media-left media-middle">
		    <a href="galleries/view/<?=$row->id?>">
		      <img class="media-object imgvdo" src="media/timthumb/timthumb.php?src=uploads/gallery/<?=$row->gallery->image?>&w=139&h=96" width="139" height="96">
		    </a>
		  </div>
		  <div class="media-body">
		  	<a href="galleries/view/<?=$row->id?>">
		    	<h4 class="media-heading"><?=$row->name?></h4>
		    </a>
		    (<?=$row->gallery->count();?> รูป)
		    <i class="fa fa-picture-o"></i>
		  </div>
		</div>
	<?endforeach;?>
<br clear="all">
</div>