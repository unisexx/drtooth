<div class="col-md-4" style="float: right;">
          <div class="title2-Dentist">หมวดหมู่</div>
          <div class="menu-Dentist ">
          	<ul>
          		<?foreach($categories as $item):?>
          		<li><a href="talks/category/<?=$item->id?>"><?=lang_decode($item->name)?></a></li>
          		<?endforeach;?>
            </ul>
		  </div>
          <div style="clear:both; margin-top:20px;">&nbsp;</div>
         <span class="title-page2">นัดหมายตรวจสุขภาพฟัน</span>
         <p class="team-talk">ทีมผู้ช่วยทันตแพทย์และเจ้าหน้าที่ที่มีคุณภาพและประสิทธิภาพในการดูแลคนไข้ เอาใจใส่ต่อคนไข้ทุกคน พร้อมให้คำปรึกษาและการบริการที่พึงพอใจสูงสุดต่อผู้รับการรักษาทุกท่าน</p>
         	<div class="contact-Dentist">
            <ul>
                 <li class="icon-Dentist1"><span class="text1-Dentist">อีเมล :</span><br><a href="mailto:<?=$address->email?>" target="_blank"><?=$address->email?></a></li>
                 <li class="icon-Dentist2"><span class="text1-Dentist">โทร.</span><br><?=lang_decode($address->tel)?></li>
                 <li class="icon-Dentist3"><span class="text1-Dentist">Facebook :</span><br><a href="<?=lang_decode($address->facebook)?>">Dr.toothdentalclinicWatcharapol</a></li>
          	</ul>
            </div>
         
           <!------------------------------------------------------END Col2---------------------------------------------------> 
</div>