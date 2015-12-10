<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            
            <ul class="nav nav-tabs" id="tab-team">
              <li class="active"><a data-toggle="tab" href="#home"><?=lang("all_dentists")?><i class="arrow_p"><i></i></i></a></li>
              <?foreach($rs as $key=>$row):?>
              <li><a data-toggle="tab" href="#menu<?=$key+1?>" <?if($row->id==55 || $row->id==56){echo'style="line-height: 15px; padding-top:5px;"';}?>><?=lang_decode($row->name)?><i class="arrow_p"><i></i></i></a></li>
              <?endforeach;?>
            </ul>
            
            <div class="tab-content-team" style="position:relative;">
              <div id="home" class="tab-pane fade in active">
              			<?foreach($dentists as $key=>$row):?>
              			<div class="col-md-3">
                            <div class="dr-pic" style="text-align:center;">
                                <a href="dentists/view/<?=$row->id?>"><?=thumb('uploads/dentists/'.$row->image,'180','220','1','class="border-dr-pic"')?></a>
                            </div>
                            <span class="label"><?=lang_decode($row->name)?></span>
                            <div class="position"><?=lang_decode($row->experience)?></div>
                        </div>
                        <?if(($key+1)%4 == 0):?>
                        	<div style="clear:both; padding-top:40px;">&nbsp;</div>
                        <?endif;?>
              			<?endforeach;?>
              </div>
             
              <?foreach($rs as $key=>$row):?>
              <div id="menu<?=$key+1?>" class="tab-pane fade" style="position:absolute; top:0;">
              			<div class="row">
              				<?foreach($row->dentist->order_by('id','asc')->get() as $item):?>
                            <div class="col-md-3" style="width:257.5px;">
	                           <div class="dr-pic" style="text-align:center;">
	                                <a href="dentists/view/<?=$item->id?>"><?=thumb('uploads/dentists/'.$row->image,'180','220','1','class="border-dr-pic"')?></a>
	                            </div>
	                            <span class="label"><?=lang_decode($item->name)?></span>
	                            <div class="position"><?=lang_decode($item->experience)?></div>
	                        </div>
                            <?endforeach;?>
                        </div>
              </div>
              <?endforeach;?>
            </div>
           <!------------------------------------------------------END TAB---------------------------------------------------> 
            </div>
        </div>
    </div>
</div>


<div style="clear:both; margin-bottom:80px;">&nbsp;</div>