<div class="section" id="bg-page">
  <div class="container">
    <div class="row">
      <div class="col-md-4_">
        <span class="title-page1"><?=lang_decode($aboutus->title)?></span>
        <?=lang_decode($aboutus->detail)?>
        <div class="title2-page"><?=lang_decode($service->title)?></div>
		<?=lang_decode($service->detail)?>
      
      <div class="row">
        <div class="col-md-4">
          <a href="themes/drtooth/images/about/about-pic001.jpg"><img src="themes/drtooth/images/about/about-pic01.jpg" width="98" height="98" class="img-gall"></a>
        </div>
        <div class="col-md-4">
          <a href="themes/drtooth/images/about/about-pic002.jpg"><img src="themes/drtooth/images/about/about-pic02.jpg" width="98" height="98" class="img-gall"></a>
        </div>
        <div class="col-md-4">
          <a href="themes/drtooth/images/about/about-pic003.jpg"><img src="themes/drtooth/images/about/about-pic03.jpg" width="98" height="98" class="img-gall"></a>
        </div>
        <div class="col-md-4">
          <a href="themes/drtooth/images/about/about-pic004.jpg"><img src="themes/drtooth/images/about/about-pic04.jpg" width="98" height="98" class="img-gall"></a>
        </div>
        <div class="col-md-4">
          <a href="themes/drtooth/images/about/about-pic005.jpg"><img src="themes/drtooth/images/about/about-pic05.jpg" width="98" height="98" class="img-gall"></a>
        </div>
        <div class="col-md-4">
          <a href="themes/drtooth/images/about/about-pic006.jpg"><img src="themes/drtooth/images/about/about-pic06.jpg" width="98" height="98" class="img-gall"></a>
        </div>
        <a href="services"><?=lang("view_all")?></a>
    </div>
    
    <div class="title2-page"><?=lang_decode($reason->title)?></div>
    <?=lang_decode($reason->detail)?>
    
    <div class="person">
      <!-- <img src="themes/drtooth/images/about/person-01.png" width="102" height="102"> -->
      <img class="img-circle" src="uploads/patients/<?=$patient->image?>" width="102" height="102">
	</div>
	  <p class="patient-talk">
	    <img src="themes/drtooth/images/about/icon-talk-left.png" width="11" height="10" style="margin-top:-15px;margin-right:5px;">
	    <?=lang_decode($patient->detail)?>
	    <img src="themes/drtooth/images/about/icon-talk-right.png" width="11" height="10" style="margin-top:-15px;margin-left:5px;">
	  </p>
  <div style="clear:both;">&nbsp;</div>
  <a href="patients"><?=lang("view_all")?></a>
</div>

<div class="col-md-7" style="float: right;">
      <div id="img-about">
          <ul>
            <li><a href="galleries/view/48"><img src="themes/drtooth/images/about/about-pic07.jpg" width="290"></a></li>
            <li><img src="themes/drtooth/images/about/about-pic08.jpg" width="290" style="margin-left:-4px;"></li>
            <li><img src="themes/drtooth/images/about/about-pic09.jpg" width="290"></li>
            <li><a href="galleries/view/71"><img src="themes/drtooth/images/about/about-pic10.jpg" width="290" style="margin-left:-4px;"></a></li>
          </ul>
      </div>
      
      <div class="techno" >
          <div class="title2-page" style="margin-bottom:20px;margin-top:40px;"><?=lang("modern2")?></div>
          <p><?=lang("modern2_detail")?></p>
			
            <ul class="nav nav-tabs" id="tabTech">
            	<?foreach($tools as $key=>$row):?>
            		<li <?if($key==0){echo'class="active"';}?>><a data-toggle="tab" href="#menu_<?=$key?>"><?=lang_decode($row->name)?></a></li>
            	<?endforeach;?>
            </ul>
            
            <div class="tab-content">
            	<?foreach($tools as $key=>$row):?>
				<div id="menu_<?=$key?>" class="tab-pane <?if($key==0){echo'in active';}?>">
	                <?=lang_decode($row->detail)?>
				    <div style="text-align:center;">
				    	<img src="uploads/tools/<?=$row->image?>" width="396">
				    </div>
	              </div>
            	<?endforeach;?>
            </div>
           <!------------------------------------------------------END TAB---------------------------------------------------> 
      </div>
</div>
</div>
</div>
</div>
<div style="clear:both; margin-bottom:40px;">&nbsp;</div>