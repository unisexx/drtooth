<div class="col-md-6">
    <span class="reson">
        <img src="themes/drtooth/images/icon-tech.png" width="26" height="42">
        <?=lang("modern")?></span>
    <br>
    <?=lang_decode($rs->detail)?>
</div>

<div class="col-md-6">
<div class="row">
	<div class="col-md-12">
        <div class="arrow" style="float:right; margin: 15px 10px 0 0;">
			<a class="left" href="#carousel-tools" data-slide="prev"><img src="themes/drtooth/images/arrow-left.png"></a>
			&nbsp;&nbsp;
		    <a class="right" href="#carousel-tools" data-slide="next"><img src="themes/drtooth/images/arrow-right.png"></a>
		</div>
    </div>
</div>

<div id="carousel-tools" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  	
    <div class="item active">
     <?$item = 4?>
     <?php foreach($tools as $key=>$row):?>
	  <?=(($key%$item)==0 && ($key != 0))? '</div><div class="item">' : '' ;?>
	  	<?if(($key % 2) == 0):?><div class="col-md-6" style="margin-top:30px;"><?endif;?>
      <div class="imgteaser"> 
	    <a href="tools/view/<?=$row->id?>" class="bg-tech">
	    <div class="title-tech"><?=lang_decode($row->name)?></div>
	    <img src="uploads/tools/<?=$row->image?>" width="220" height="223">
	    <span class="desc">
	    	<div style="overflow: hidden; height: 60px; padding:5px;">
	    	<?=strip_tags(lang_decode($row->detail))?>
	    	</div>
	    	<br><b>อ่านต่อ</b>
	    </span>
	    </a> 
	</div>
	<?if(($key % 2) == 1):?></div><?endif;?>
    <?php endforeach;?> 	
    </div>
    
</div>
</div>
</div>