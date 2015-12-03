 <div class="section" id="bg-page">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
   	  
   	  <?foreach($rs as $row):?>
   	  	<div class="col-left1">
	        <a href="talks/view/<?=$row->id?>"><span class="title-page2"><?=lang_decode($row->title)?></span></a>
	        <div class="by">By <span class="text-by"><?=lang_decode($row->category->name)?></span> - <?=mysql_to_th($row->created)?></div>
	        <div style="overflow: hidden; height:180px;"><?=strip_tags(lang_decode($row->detail),'<br>')?></div><br>
	        <a href="talks/view/<?=$row->id?>"><button type="button" class="btn-viewall3">&nbsp;</button></a>
	        <div class="by" style="margin-top:40px;">&nbsp;</div>
	    </div>
	    <div class="col-right1">
	   	 <img src="uploads/talks/<?=$row->image?>" width="280" height="280" class="picDentistTalk" style="margin-top:10px;">
	    </div>
	    
	    <div style="clear:both;">&nbsp;</div>
        <div class="lineDentistTalk1">&nbsp;</div>
   	  <?endforeach;?>
        
        <?=$rs->pagination();?>
        <!-- <div id="pagination">
        	 <ul class="pagination">
              <li>
                <a href="#">Prev</a>
              </li>
              <li>
                <a href="#">1</a>
              </li>
              <li>
                <a href="#">2</a>
              </li>
              <li>
                <a href="#">3</a>
              </li>
              <li>
                <a href="#">4</a>
              </li>
              <li>
                <a href="#">5</a>
              </li>
              <li>
                <a href="#">Next</a>
              </li>
            </ul>
        </div> -->
        <div style="clear:both;">&nbsp;</div>
</div>
<!------------------------------------------------------END Col1---------------------------------------------------> 

<?=modules::run('home/sidebar'); ?>

</div>
</div>
</div>
<div style="clear:both; margin-bottom:40px;">&nbsp;</div>