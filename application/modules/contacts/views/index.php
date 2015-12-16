<div class="section">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.6890410383444!2d100.64058031462251!3d13.857694990279002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d62c825643fd7%3A0x44a4edf8451be915!2z4LiU4LmK4Lit4LiB4LmA4LiV4Lit4Lij4LmM4LiX4Li54LiY4LiE4Lil4Li04LiZ4Li04LiB4LiX4Lix4LiZ4LiV4LiB4Lij4Lij4Lih!5e0!3m2!1sth!2sth!4v1447919558983" width="990" height="298" frameborder="0" style="border:2px solid #d2cad6;" allowfullscreen></iframe> -->
                <iframe width="990" height="298" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?=$address->latitude?>,<?=$address->longitude?>&hl=es;z=<?=$address->zoom?>&output=embed"></iframe>
                <!-- <iframe width="990" height="298" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/place/ด๊อกเตอร์ทูธคลินิกทันตกรรม/@13.85832,100.643252,16z&output=embed"></iframe> -->
            </div>
        </div>
    </div>
</div>
<div class="section" id="bg-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div style="clear:both; margin-top:20px;">&nbsp;</div>
        <p><?=lang_decode($address->detail)?></p>
        
        <div class="title-page2" style="margin-top:20px; margin-bottom:20px;"><?=lang("Online_Appointment_Form")?></div>
        
      		<form class="form-inline" method="post" action="contacts/save">
	              <div class="form-contact_">
	                <input type="text" class="form-contact" placeholder="Name (required) " name="name">
	              </div>
	              <div class="form-contact_">
	                <input type="email" class="form-contact" placeholder="Email Address (required)" name="email">
	              </div>
	              <br>
	              <textarea class="area-contact" rows="3" name="detail"></textarea>
	              <!-- <button type="submit" class="btn-send"> -->
	              <br clear="all">
	              <button type="submit" style="background: #9a6fc2; border: none; color: #fff; padding: 10px 20px;"><?=lang("send_mail")?></button>
			</form>
            
        <div style="clear:both;">&nbsp;</div>
      </div>

      <!------------------------------------------------------END Col1--------------------------------------------------->
      <div class="col-md-4" style="float: right;">
        <div style="clear:both; margin-top:20px;">&nbsp;</div>
        <span class="title-page2"><?=lang("Working_Time")?></span>
        <div class="open">
        <!-- <?=lang("open2")?><br>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td height="27"><?=lang("mon_fri")?></td>
                <td height="27" align="right"><?=lang("open_time_1")?></td>
              </tr>
              <tr>
                <td height="27"><?=lang("Saturday")?></td>
                <td height="27" align="right"><?=lang("open_time_1")?></td>
              </tr>
              <tr>
                <td height="27"><?=lang("Sunday")?></td>
                <td height="27" align="right"><?=lang("open_time_2")?></td>
              </tr>
            </tbody>
          </table> -->
          <?=lang_decode($address->open2)?>
        </div>
        <div class="contact-Dentist">
          <ul>
            <li class="icon-Dentist1">
              <span class="text1-Dentist"><?=lang("email")?> :</span>
              <br>
              <a href="mailto:<?=$address->email?>" target="_blank"><?=$address->email?></a>
            </li>
            <li class="icon-Dentist2">
              <span class="text1-Dentist"><?=lang("tel")?>.</span>
              <br><?=lang_decode($address->tel)?></li>
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