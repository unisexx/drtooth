<div class="row" id="bgtop">
	 <div id="top">
       <img src="themes/fundv2/images/user.png" width="13" height="14" style="margin-bottom:3px;"/>&nbsp;
       <span id="userlogin">
       
       <!--<a href="#">เข้าสู่ระบบ</a>-->
        		<?php if($this->session->userdata('id')==true):?>
        			<a href="org/logout">ออกจากระบบ</a>
        		<?php else:?>
        			<a class="inline" href="#loginform">เข้าสู่ระบบ</a>
        		<?php endif?>
       </span> 
       
       <img src="themes/fundv2/images/line-user.jpg" width="2" height="42"> 
       
       <span id="userregis">
       
       <!--<a href="#">สมัครสมาชิก</a>-->
       
       <a class="inline" href="#register">สมัครสมาชิก</a>
       
       </span>
       
        <div id="icon">
        	<a href="#"><img src="themes/fundv2/images/facebook.png" width="14" height="16" title="Facebook" style="margin-right:12px;"></a>
        				<img src="themes/fundv2/images/line-user.jpg" width="2" height="42">
            <a href="#"><img src="themes/fundv2/images/twitter.png" width="18" height="12" title="Twitter" style="margin-left:12px; margin-right:12px;"></a>
            			<img src="themes/fundv2/images/line-user.jpg" width="2" height="42">
        </div>
        
<!--       <input name="searchbox" id="searchbox" maxlength="50" value="ค้นหา..." type="text" onkeydown="if (event.keyCode == 13 || event.which == 13) { location='http://www.google.com/search?q=' + encodeURIComponent(document.getElementById('searchbox').value);}" />-->
       

<INPUT TYPE='text' name='searchbox' id='searchbox' maxlength='50' value='ค้นหา...' onClick="document.getElementById('searchbox').value=''" onkeydown="if (event.keyCode == 13 || event.which == 13) { location='http://www.google.com/search?q=' + encodeURIComponent(document.getElementById('searchbox').value)+'&sa=' + encodeURIComponent(document.getElementById('searchbox').value)+'&domains=fund.m-society.go.th&sitesearch=fund.m-society.go.th'; }">

       
     </div>
</div>

<div class="clearfix">&nbsp;</div>
     
<!-------------------------------------------------------OPEN wrap--------------------------------------------------------> 
<div id="wrap">
	
	
<div id="bgArt">&nbsp;</div>
<div id="logo">&nbsp;</div>   
	<div class="clearfix">&nbsp;</div>
	<div id='cssmenu'>
        <ul>
           <li><a href='home/index'>หน้าแรก</a></li>
           <!-- <li class='active has-sub'><a href='#'><span>เกี่ยวกับ กบท.</span></a>
              <ul>
                 <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=เกี่ยวกับกองทุน'><span>เกี่ยวกับกองทุน</span></a>
                 <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=โครงสร้างหน่วยงาน'><span>โครงสร้างหน่วยงาน</span></a></li>
                 <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=การดำเนินงานตามนโยบาย'><span>การดำเนินงานตามนโยบาย</span></a></li>
                 <li class='last'><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=กฏหมาย/คำสั่งที่เกี่ยวข้อง'><span>กฎหมาย/คำสั่งที่เกี่ยวข้อง</span></a></li>
              </ul>
		   </li> -->
           <li class='active has-sub'><a href='#'>ข้อมูลข่าวสาร</a>
              <ul>
                 <li><a href='infos/lists?module=ข่าวประชาสัมพันธ์'>ข่าวประชาสัมพันธ์</a>
                 <li><a href='infos/lists?module=ข่าวจัดซื้อจัดจ้าง'>ข่าวจัดซื้อจัดจ้าง</a></li>
                 <li class='last'><a href='infos/lists?module=ข่าวประกาศรับสมัครงาน'>ข่าวประกาศรับสมัครงาน</a></li>
              </ul>
           </li>
           <li><a href='downloads/lists'>ดาวน์โหลดแบบฟอร์ม</a></li>
           <!-- <li><a href='contents/act?module=พรบ.%20กฏหมาย%20ระเบียบ%20ข้อบังคับ%20มติ%20ครม.%20และหนังสือเวียน'>พ.ร.บ./กฎหมาย/ระเบียบ</a></li> -->
           <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=ติดต่อสอบถาม'>ติดต่อสอบถาม</a></li>
           <li class='last'><a href='calendars/calendar_mso'>ปฏิทินกิจกรรม</a></li>
        </ul>
    </div>            
	<div class="clearfix">&nbsp;</div>
 
 
 <div style='display:none'>
	<div id='loginform' style='padding:15px; background:#fff;'>
		<h3>เข้าสู่ระบบ</h3>
		<form class="form-horizontal">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">ยูสเซอร์เนม </label>
		    <div class="col-sm-9">
		      <input name="username" type="input" class="form-control">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">รหัสผ่าน </label>
		    <div class="col-sm-9">
		      <input name="password" type="password" class="form-control">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-3 col-sm-9">
		      <input type="hidden" name="status" value="อนุมัติ">
		      <button id="lobin_btn" type="button" class="btn btn-default">ตกลง</button>
		      <span class="login_fail"></span>
		    </div>
		  </div>
		</form>
	</div>
</div>

<div style='display:none'>
	<div id='register' style='padding:15px; background:#fff;'>
		<h3>สมัครสมาชิกออนไลน์</h3>
		<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">กรุณากรอกชื่อองค์กรเพื่อตรวจสอบ</label>
		    <input type="text" name="organ_name" class="form-control" id="exampleInputEmail1">
		  </div>
		  <button id="register_btn" type="button" class="btn btn-default">ตรวจสอบ</button>
		  <span class="check_fail"></span>
		</form>
	</div>
</div>

   
<script type="text/javascript">
$(document).ready(function(){
	$('#lobin_btn').click(function(){
		$('.login_fail').html('<img src="themes/fundv2/images/loading.gif">');
		$.post('org/ajax_login',{
			'username' : $('input[name=username]').val(),
			'password' : $('input[name=password]').val(),
			'status' : $('input[name=status]').val()
		},function(data){
			if(data == 'ล้อกอินสำเร็จ'){
				window.location.href = 'org/member';
			}else{
				$('.login_fail').html(data);
			}
		});
	});
	
	$('#register_btn').click(function(){
		$('.check_fail').html('<img src="themes/fundv2/images/loading.gif">');
		$.post('org/ajax_register',{
			'organ_name' : $('input[name=organ_name]').val()
		},function(data){
			if(data == 'success'){
				$.post('org/ajax_register_success', {
					'organ_name' : $('input[name=organ_name]').val()
				}, function(data){
					//$('body').html(data);
					 window.location.href = 'org/reg_member';
				});
				// window.location.href = 'org/reg_member';
			}else{
				$('.check_fail').html(data);
			}
		});
	});
});
</script>