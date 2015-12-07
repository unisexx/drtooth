<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="title3-Dentist">เจ้าหน้าที่และผู้ช่วยทันตแพทย์</div>
            	
            	<div class="row">
            		<?foreach($rs as $row):?>
            		<div class="col-md-3" style="margin-bottom:40px;">
                        <div class="dr-pic" style="text-align:center;">
                            <?=thumb('uploads/staffs/'.$row->image,'180','220','1','class="border-dr-pic"')?>
                        </div>
                        <span class="label"><?=lang_decode($row->name)?></span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div>
            		<?endforeach;?>
          			 
                 </div>
               
     			
           <!------------------------------------------------------END ---------------------------------------------------> 
            </div>
            <!-- <div id="pagination" style="margin-right:3%; margin-top:30px;">
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
        </div>
    </div>
</div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>