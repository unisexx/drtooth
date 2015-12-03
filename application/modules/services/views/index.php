<div class="section" id="bg-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
            <span class="title-page2">บริการทั้งหมด</span>
         	<div style="clear:both;">&nbsp;</div>
         
		       <?foreach($rs as $key=>$row):?>
		       <div class="col-left1">
		            <div class="center-itemservice">
		            <div class="item1">
		            	<div class="img-service2">&nbsp;</div>
		                <div class="title-service1"><?=lang_decode($row->name)?></div>
		                <div class="list-service">
		                    <ul>
		                    	<?foreach($row->service->get() as $item):?>
		                    	<li><?=lang_decode($item->title);?></li>
		                    	<?endforeach;?>
		                    </ul>
		                </div>
		                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
		             </div>
		         	</div>
		        </div>
		        <?if((($key+1)%2) == 0):?>
		        	<div style="clear:both; margin-bottom:40px;">&nbsp;</div>
		        <?endif;?>
		       <?endforeach;?>
          
   	  <!-- <div class="col-left1">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service2">&nbsp;</div>
                <div class="title-service1">รักษาโรคเหงือก</div>
                <div class="list-service">
                    <ul>
                        <li>รักษาโรคเหงือก</li>
                        <li>ศัลยกรรมตกแต่งเหงือก</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div>
        
   	  <div class="col-left2">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service1">&nbsp;</div>
                <div class="title-service1">ขูดหินปูน</div>
                <div class="list-service">
                    <ul>
                        <li>ขูดหินปูนทำความสะอาดช่องปาก</li>
                        <li>ขูดหินปูนโดยแพทย์เฉพาะทางด้านโรคเหงือก</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div>
        	<div style="clear:both; margin-bottom:40px;">&nbsp;</div>
            
		<div class="col-left1">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service3">&nbsp;</div>
                <div class="title-service1">เคลือบฟัน</div>
                <div class="list-service">
                    <ul>
                        <li>เคลือบผิวฟัน</li>
                        <li>เคลือบฟลูออไรด์</li>
                        <li>เคลือบฟัน นีเวียร์</li>
                        <li>ฟอกสีฟัน</li>
                        <li>ฟอกสีฟัน แบบ ZOOM (@ คลีนิก)</li>
                        <li>ฟอกสีฟัน (@ บ้านคนไข้)</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div>
        
   	  <div class="col-left2">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service4">&nbsp;</div>
                <div class="title-service1">ถอนฟัน และ ผ่าฟันคุด</div>
                <div class="list-service">
                    <ul>
                        <li>ถอนฟันน้ำนม</li>
                        <li>ถอนฟันปกติ</li>
                        <li>ถอนฟันร่วมกับการกรอฟัน แบ่งฟันหรือกระดูก</li>
                        <li>ผ่าฟันคุด</li>
                        <li>ฝังฟันคุดในเพดานหรือตำแหน่งอื่น</li>
                        <li>&nbsp;</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div>
 
             	<div style="clear:both; margin-bottom:40px;">&nbsp;</div>
            
		<div class="col-left1">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service5">&nbsp;</div>
                <div class="title-service1">X-Ray</div>
                <div class="list-service">
                    <ul>
                        <li>X-Ray ฟิล์มเล็ก</li>
                        <li>X-Ray ฟิล์มใหญ่</li>
                        <li>X-Ray เพื่อการจัดฟัน2ฟิล์ม</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div>
        
   	  <div class="col-left2">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service6">&nbsp;</div>
                <div class="title-service1">การจัดฟัน</div>
                <div class="list-service">
                    <ul>
                        <li>จัดธรรมดา</li>
                        <li>จัดแบบ Damon</li>
                        <li>จัดแบบ Invisalign</li>
                        <li>จัดแบบเซรามิค</li>
                        <li>การจัดฟันร่วมกับการผ่าตัด</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div>
       
         	<div style="clear:both; margin-bottom:40px;">&nbsp;</div>
            
		<div class="col-left1">
            <div class="center-itemservice">
            <div class="item1">
            	<div class="img-service7">&nbsp;</div>
                <div class="title-service1">อุดฟัน และ ครอบฟัน</div>
                <div class="list-service">
                    <ul>
                        <li>อุดฟันสีเหมือนฟัน</li>
                        <li>อุดอมัลกัม</li>
                        <li>อุดปิดช่องห่างระหว่างฟัน</li>
                        <li>ครอบฟัน</li>
                    </ul>
                </div>
                <div><button type="button" class="btn-readmore">&nbsp;</button></div>
             </div>
         	</div>
        </div> -->
               
     
        <div style="clear:both;">&nbsp;</div>
</div>
<!------------------------------------------------------END Col1---------------------------------------------------> 

<?=modules::run('home/sidebar'); ?>

</div>
</div>
</div>
<div style="clear:both; margin-bottom:40px;">&nbsp;</div>