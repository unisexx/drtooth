<div class="row">
	<div class="col-md-12">
    	<span class="reson"><?=lang("Our_Dentists")?></span>
        <div class="line1">&nbsp;</div>
        <div class="arrow" style="float:right;">
			<a class="left" href="#carousel-dentists" data-slide="prev"><img src="themes/drtooth/images/arrow-left.png"></a>
			&nbsp;&nbsp;
		    <a class="right" href="#carousel-dentists" data-slide="next"><img src="themes/drtooth/images/arrow-right.png"></a>
		</div>
    </div>
</div>

<script>
$(document).ready(function(){
	$('.carousel').carousel({
	  interval: 5000
	})
});
</script>
<div id="carousel-dentists" class="carousel slide" data-ride="carousel" style="margin-top:70px; margin-bottom:50px;">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  	
    <div class="item active">
     <?$item = 4?>
     <?php foreach($rs as $key=>$row):?>
	  <?=(($key%$item)==0 && ($key != 0))? '</div><div class="item">' : '' ;?>
      <div class="col-md-3">
    	<div class="dr-pic" style="text-align:center;">
        	<a href="dentists/view/<?=$row->id?>">
        		<?=thumb('uploads/dentists/'.$row->image,'180','220','1','class="border-dr-pic"')?>
        	</a>
        </div>
        <span class="label"><?=lang_decode($row->name)?></span>
        <div class="position"><?=lang_decode($row->experience)?></div>
    </div>
    <?php endforeach;?> 	
    </div>
    
</div>