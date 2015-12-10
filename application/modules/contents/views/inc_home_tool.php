<div class="col-md-6">
    <span class="reson">
        <img src="themes/drtooth/images/icon-tech.png" width="26" height="42">
        <?=lang("modern")?></span>
    <br>
    <?=lang_decode($rs->detail)?>
</div>


<?foreach($tools as $key=>$item):?>
<?if(($key % 2) == 0):?><div class="col-md-3" style="margin-top:30px;"><?endif;?>
	<div class="imgteaser"> 
	    <a href="tools/view/<?=$item->id?>" class="bg-tech">
	    <div class="title-tech"><?=lang_decode($item->name)?></div>
	    <img src="uploads/tools/<?=$item->image?>" width="220" height="223">
	    <span class="desc">
	    	<div style="overflow: hidden; height: 60px; padding:5px;">
	    	<?=strip_tags(lang_decode($item->detail))?>
	    	</div>
	    	<br><b>อ่านต่อ</b>
	    </span>
	    </a> 
	</div>
<?if(($key % 2) == 1):?></div><?endif;?>
<?endforeach;?>