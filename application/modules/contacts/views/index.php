<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.6890410383444!2d100.64058031462251!3d13.857694990279002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62c825643fd7%3A0x44a4edf8451be915!2z4LiU4LmK4Lit4LiB4LmA4LiV4Lit4Lij4LmM4LiX4Li54LiY4LiE4Lil4Li04LiZ4Li04LiB4LiX4Lix4LiZ4LiV4LiB4Lij4Lij4Lih!5e0!3m2!1sth!2sth!4v1447919558983" width="990" height="298" frameborder="0" style="border:2px solid #d2cad6;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<div class="section" id="bg-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div style="clear:both; margin-top:20px;">&nbsp;</div>
        <p>ทีมผู้ช่วยทันตแพทย์และเจ้าหน้าที่ที่มีคุณภาพและประสิทธิภาพในการดูแลคนไข้ เอาใจใส่ต่อคนไข้ทุกคนพร้อมให้คำปรึกษาและการบริการที่พึงพอใจสูงสุดต่อผู้รับการรักษาทุกท่าน</p>
        
        <div class="title-page2" style="margin-top:20px; margin-bottom:20px;">ส่งข้อความถึงเรา</div>
        
      		<form class="form-inline" method="post" action="contacts/save">
	              <div class="form-contact_">
	                <input type="text" class="form-contact" placeholder="Name (required) " name="name">
	              </div>
	              <div class="form-contact_">
	                <input type="email" class="form-contact" placeholder="Email Address (required)" name="email">
	              </div>
	              <br>
	              <textarea class="area-contact" rows="3" name="detail"></textarea>
	              <button type="submit" class="btn-send">
			</form>
            
        <div style="clear:both;">&nbsp;</div>
      </div>

      <!------------------------------------------------------END Col1--------------------------------------------------->
      <div class="col-md-4" style="float: right;">
        <div style="clear:both; margin-top:20px;">&nbsp;</div>
        <span class="title-page2">เวลาทำการ</span>
        <div class="open">เปิดทุกวัน
          <br>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td height="27">จันทร์ - ศุกร์</td>
                <td height="27" align="right">09.00 น. - 19.30 น.</td>
              </tr>
              <tr>
                <td height="27">เสาร์</td>
                <td height="27" align="right">09.00 น. - 19.30 น.</td>
              </tr>
              <tr>
                <td height="27">อาทิตย์</td>
                <td height="27" align="right">09.00 น. - 17.00 น.</td>
              </tr>
            </tbody>
          </table>
          <?//=lang_decode($address->detail)?>
        </div>
        <div class="contact-Dentist">
          <ul>
            <li class="icon-Dentist1">
              <span class="text1-Dentist">อีเมล :</span>
              <br>
              <a href="mailto:<?=$address->email?>" target="_blank"><?=$address->email?></a>
            </li>
            <li class="icon-Dentist2">
              <span class="text1-Dentist">โทร.</span>
              <br><?=lang_decode($address->email)?></li>
            <li class="icon-Dentist3">
              <span class="text1-Dentist">Facebook :</span>
              <br>
              <a href="<?=lang_decode($address->facebook)?>">Dr.toothdentalclinicWatcharapol</a>
            </li>
          </ul>
        </div>
        <!------------------------------------------------------END Col2--------------------------------------------------->
      </div>
    </div>
  </div>
</div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>