<style>
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff609 !important;	
  border:1px solid #000;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff !important;
  border: 1px solid #000 !important;
  border-radius: 10px;
}
.carousel-indicators {
  position: absolute;
  bottom: -5px !important;
  left: 92%  !important;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
</style>

<div id="highlight" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
      <? foreach($rs as $key=>$item):?>
    <li data-target="#highlight" data-slide-to="<?=$key;?>"  <?=$key==0?'class="active"':'';?>></li>
     <? endforeach;?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <?foreach($rs as $key=>$item):?>
    <div class="item <?=$key==0?'active':''?>">
	 <a href="<?=$item->url?>">
      <img src="uploads/hilight/<?=$item->image?>">
      <!-- <div class="carousel-caption">
        ...
      </div> -->
     </a>
    </div>
    <?endforeach;?>
    
  </div>

  <!-- Controls -->
  <!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('.carousel').carousel({
	  interval: 5000
	});
});
</script>
