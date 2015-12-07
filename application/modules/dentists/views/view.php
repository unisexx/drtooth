<div class="section">
 <div class="container">
  <div class="row">
   <div class="col-md-3">
   		<div class="dr-pic" style="text-align:center;"> 
            <?=thumb('uploads/dentists/'.$rs->image,'180','220','1','class="border-dr-pic"')?>
        </div>
    </div>
   <div class="col-md-9"> <span class="text1-Personal"><?=lang_decode($rs->name)?></span> 
           <div class="list-Personal" style="padding-top:10px;">
                <?=lang_decode($rs->detail)?>
        	</div>
   </div></div></div></div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>