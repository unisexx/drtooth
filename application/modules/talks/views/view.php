 <div class="section" id="bg-page">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
   	  
   	  		<img src="uploads/talks/<?=$rs->image?>" class="picDentistTalk"><br>
   	  		
	        <span class="title-page2"><?=lang_decode($rs->title)?></span>
	        <div class="by">By <span class="text-by"><?=lang_decode($rs->category->name)?></span> - <?=mysql_to_th($rs->created)?></div>
	        <div><?=lang_decode($rs->detail)?></div><br>
	        <div class="by" style="margin-top:40px;">&nbsp;</div>
	    
	    <div style="clear:both;">&nbsp;</div>
        <div class="lineDentistTalk1">&nbsp;</div>
   	  
        <div style="clear:both;">&nbsp;</div>
</div>
<!------------------------------------------------------END Col1---------------------------------------------------> 

<?=modules::run('home/sidebar'); ?>

</div>
</div>
</div>
<div style="clear:both; margin-bottom:40px;">&nbsp;</div>