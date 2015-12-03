<div class="section" id="bg-page">
    <div class="container">
        <div class="row">
			<div class="col-md-8" style="float:left;">
				
			<?foreach($rs as $row):?>
			<div class="col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="uploads/talks/<?=$row->image?>" width="300" height="188">
                    <div class="caption">
                        <h4><?=lang_decode($row->title)?></h4>
                        <div style="overflow: hidden; height:180px;"><?=strip_tags(lang_decode($row->detail),'<br>')?></div><br>
                       <a href="talks/view/<?=$row->id?>" class="btn btn-primary" id="btn-more">อ่านต่อ</a>
                    </div>
                </div>
            </div>
			<?endforeach;?>
			
            <!-- <div class="col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/DentalImplants/DentalImplants-pic01.jpg" width="300" height="188">
                    <div class="caption">
                        <h4>ทันตกรรมรากเทียม</h4>
                        <strong><u>ประเภทของการปลูกรากฟันเทียม</u></strong>
                        <p><strong>1. การปลูกรากฟันเทียมลงในกระดูก (Endosteal)</strong> เป็นวิธีการปลูกรากฟันเทียมแบบทั่วไปและเป็นที่นิยมใช้กัน โดยปลูกลงในกระดูกขากรรไกรซึ่งสามารถรักษาร่วมกับการทำสะพานฟันและการทำฟันปลอมได้</p>
                        <p><strong>2. การปลูกรากฟันเทียมลงบนกระดูก (Subperiousteal)</strong> เป็นการปลูกรากฟันเทียมที่บริเวณด้านบนสุดของกระดูกขากรรไกร โดยส่วนที่เป็นรากจะยื่นออกมา และมีเหงือกเป็นตัวยึดรากไว้ซึ่งวิธีนี่เหมาะกับผู้ที่ไม่สามารถใส่ฟันปลอมแบบทั่วไปได้หรือผู้ที่มีฟันขนาดเล็ก</p>
                       <a href="#" class="btn btn-primary" id="btn-more">อ่านต่อ</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/DentalImplants/DentalImplants-pic02.jpg" width="300" height="188">
            		<div class="caption">
                        <h4>การรักษารากฟัน</h4>
                        <p>การรักษารากฟันเป็นทันตกรรมแขนงหนึ่งที่มุ่งเน้นด้านการรักษารากฟันและเนื้อเยื่อภายในโพรงประสาทฟันซึ่งสาเหตุโดยทั่วไปเกิดเนื่องมาจากการติดเชื้อบริเวณปลายรากฟัน</p>
                        <a href="#" class="btn btn-primary" id="btn-more">อ่านต่อ</a>
                  </div>
              </div>
            </div>
            
            <div style="clear:both;">&nbsp;</div>
            
             <div class="col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="images/DentalImplants/DentalImplants-pic03.jpg" width="300" height="188">
            		<div class="caption">
                        <h4>ฟันแตก ฟันหัก ทำอย่างไรดี</h4>
                        <p><strong>ครอบฟัน</strong> การทำครอบฟันเป็นการบูรณะและปกป้องฟันที่ได้รับความเสียหาย แตกหักหรือได้ผ่านการรักษารากฟัน โดยทันตแพทย์จะทำการครอบฟันซี่นั้นด้วยวัสดุประเภทต่างๆเพื่อให้ฟันซี่นั้นมีรูปร่างและประสิทธิภาพการใช้งานที่ดีดังเดิม</p>
                        <a href="#" class="btn btn-primary" id="btn-more">อ่านต่อ</a>
                  </div>
              </div>
            </div> -->
            
            
            
            
            </div>
           
<!------------------------------------------------------END Col1---------------------------------------------------> 

<?=modules::run('home/sidebar'); ?>

</div>
</div>
</div>
<div style="clear:both; margin-bottom:40px;">&nbsp;</div>