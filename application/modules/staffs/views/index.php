<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="title3-Dentist">เจ้าหน้าที่และผู้ช่วยทันตแพทย์</div>
            	
            	<div class="row">
            		<?foreach($rs as $row):?>
            		<div class="col-md-3">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="#"><img src="uploads/staffs/<?=$row->image?>" width="180" height="220" class="border-dr-pic"></a>
                        </div>
                        <span class="label"><?=lang_decode($row->name)?></span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div>
            		<?endforeach;?>
            		
          			 
                     
          			 <!-- <div class="col-md-3">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="#"><img src="images/staff-pic02.jpg" width="180" height="220" class="border-dr-pic"></a>
                        </div>
                        <span class="label">น.ส.พัทธรีย์ สุขสมบูรณ์(พี่พัท)</span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div>
                     
          			 <div class="col-md-3">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="#"><img src="images/staff-pic03.jpg" width="180" height="220" class="border-dr-pic"></a>
                        </div>
                        <span class="label">น.ส. ณหทัย บุญสุข (ขวัญ)</span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div>
          			 <div class="col-md-3">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="#"><img src="images/staff-pic04.jpg" width="180" height="220" class="border-dr-pic"></a>
                        </div>
                        <span class="label">น.ส. รำไพ ปิยะตุ้ย (แก้ว)</span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div>
                 </div> 
                     
                 <div style="clear:both; padding-top:40px;">&nbsp;</div>
                 
                 <div class="row">
         			 <div class="col-md-3">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="#"><img src="images/staff-pic05.jpg" width="180" height="220" class="border-dr-pic"></a>
                        </div>
                        <span class="label">น.ส.ภัทรพร ปลอดดี(พลอย)</span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div>
          			 <div class="col-md-3">
                        <div class="dr-pic" style="text-align:center;">
                            <a href="#"><img src="images/staff-pic06.jpg" width="180" height="220" class="border-dr-pic"></a>
                        </div>
                        <span class="label">น.ส. กรรณชนก แพงสุภา (ปลา)</span>
                        <div class="position">ผู้ช่วยทันตแพทย์</div>
                     </div> -->
          			 
                 </div>
               
     			
           <!------------------------------------------------------END ---------------------------------------------------> 
            </div>
            <div id="pagination" style="margin-right:3%; margin-top:30px;">
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
        	   </div>
        </div>
    </div>
</div>