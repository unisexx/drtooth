<footer class="section section-primary" id="bg-footer"> 
<div class="container"> 
	<div class="row">
		<div class="col-sm-10">
            <p style='margin-top:30px;'><b><?=lang_decode($rs->name)?></b> : <?=lang_decode($rs->address)?> <?=lang("tel")?>. <?=lang_decode($rs->tel)?> <br>
            <span style="font-size:12px;">Copyright ©2015  Dr. Tooth Dental Clinic</span></p>
        </div>
        <div class="col-sm-2">
         	<p class="text-info text-right"> <br></p><div class="row"> 
         	<div class="col-md-12 hidden-lg hidden-md hidden-sm text-left"> 
                 <a href="<?=lang_decode($rs->facebook)?>" target="_blank"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a> 
                 <a href="<?=lang_decode($rs->twitter)?>" target="_blank"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a> 
                 <a href="<?=lang_decode($rs->googleplus)?>" target="_blank"><i class="fa fa-2x fa-google-plus-square text-inverse"></i></a> 
         	</div>
         </div>
         <div class="row"> 
             <div class="col-md-12 hidden-xs text-right"> 
                 <a href="<?=lang_decode($rs->facebook)?>" target="_blank"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a> 
                 <a href="<?=lang_decode($rs->twitter)?>" target="_blank"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                 <a href="<?=lang_decode($rs->googleplus)?>" target="_blank"><i class="fa fa-2x fa-google-plus-square text-inverse"></i></a> 
             </div>
         </div>
         </div>
   </div>
</div>
</footer>