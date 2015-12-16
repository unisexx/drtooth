<div class="reson"><?=lang("TESTIMONIAL")?></div>
<div class="arrow" style="float:right;">
	<a class="left" href="#carousel-patients" data-slide="prev"><img src="themes/drtooth/images/arrow-left.png"></a>
	&nbsp;&nbsp;
    <a class="right" href="#carousel-patients" data-slide="next"><img src="themes/drtooth/images/arrow-right.png"></a>
</div>
<br>
<div class="icon-talk"></div>

<div id="carousel-patients" class="carousel slide" data-ride="carousel" style="margin-top:-31px;">
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  	<?foreach($rs as $key=>$row):?>
  	<div class="item <?if($key==0){echo'active';}?>">
      <p class="talk"><?=lang_decode($row->detail)?>
		    <br>
		    <span style="float:right; color:#555555;"><?=lang_decode($row->name)?></span>
		</p>
		<br>
    </div>
  	<?endforeach;?>
  </div>
  
</div>