<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="title3-Dentist">ความประทับใจในการรักษาและการบริการของคลินิก</div>
            	
            	<div class="row">
            		<?foreach($rs as $row):?>
            		<div class="col-md-3" style="margin-bottom:40px;">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="patients/view/<?=$row->id?>">
                            	<?=thumb('uploads/patients/'.$row->image,'180','220','1','class="border-dr-pic"')?>
                            </a>
                        </div>
                        <span class="label"><?=lang_decode($row->name)?></span>
                     </div>
            		<?endforeach;?>
            	</div>
     			
           <!------------------------------------------------------END ---------------------------------------------------> 
            </div>
            <?=$rs->pagination();?>
        </div>
    </div>
</div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>