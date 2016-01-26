<div class="section">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
   		<span class="title-page2"><?=lang("gallery")?></span>
   		<div class="clearfix"></div>
		<?foreach($rs as $item):?>
		<div class="col-md-3" style="margin-bottom: 10px;">
			<a href="galleries/view/<?=$item->id?>">
				<?=thumb('uploads/gallery/'.$item->gallery->image,'214','160','1','class="border-dr-pic img-responsive img-thumbnail"')?>
			</a>
			<div class="position"><?=lang_decode($item->name)?></div>
			<div class="position">(<?=$item->gallery->count();?> รูป)</div>
		</div>
		<?endforeach;?>
	<div class="clearfix"></div>
    </div></div></div></div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>