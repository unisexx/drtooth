<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>งานบริหารกองทุน สำนักงานปลัดกระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์</title>
<link href="<?php echo base_url(); ?>themes/fundv2/css/template.css" type="text/css" rel="stylesheet"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/fundv2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/fundv2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/fundv2/css/topmenu.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>themes/fundv2/css/calendar.css">

   <script src="<?php echo base_url(); ?>themes/fundv2/jquery-latest.min.js" type="text/javascript"></script>
   <script src="<?php echo base_url(); ?>themes/fundv2/js/script.js"></script>
   
   <link rel='stylesheet' href='<?php echo base_url(); ?>media/fullcalendar/demos/cupertino/theme.css' />
<link href='<?php echo base_url(); ?>media/fullcalendar/fullcalendar/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url(); ?>media/fullcalendar/fullcalendar/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='<?php echo base_url(); ?>media/fullcalendar/fullcalendar/fullcalendar.min.js'></script>
<script type="text/javascript" src="<?php echo base_url(); ?>media/calendarDateInput.js"></script>
   
   
<script type="text/javascript">
$(document).ready(function() {
	$('#tab1').fadeIn('slow'); //tab pertama ditampilkan
	$('ul#navtab li a').click(function() { // jika link tab di klik
		$('ul#navtab li a').removeClass('active'); //menghilangkan class active (yang tampil)
		$(this).addClass("active"); // menambahkan class active pada link yang diklik
		$('.tab_konten').hide(); // menutup semua konten tab
		var aktif = $(this).attr('href'); // mencari mana tab yang harus ditampilkan
		$(aktif).fadeIn('slow'); // tab yang dipilih, ditampilkan
		return false;
	});

});

</script>
<script type="text/javascript">
	$(document).ready(function(){
	
		//	Load	Statistics
		$("div#statistic").html("<img src='media/images/ajax-loader.gif' />").load(" ");
	
		// hide #back-top first
		$("#back-top").hide();
		
		// fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 1500) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});
	
			// scroll body to 0px on click
			$('#back-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
	
	});
</script>





<style>

	
    #calendar1 {
        width: 95%;
        margin: 0 auto;
    }
	
	.fc-event-title{ 
			background-color:transparent; font-size:small; color:#FFF;	
	}

    .fc-wed, .fc-tue {
        background:  #FFF2F2;
    }
	.fc-event fc-event-hori fc-event-draggable fc-event-start fc-event-end{ height:5px;}

    html, body, div, span, strong {
        font-weight: normal;
        color: black;
    }


</style>

<script>

    $(document).ready(function () {

        var d = new Date();
        var c_year = d.getFullYear();
        var c_year_th = c_year + 543;
        var p_month = d.getMonth();
        var d1 = d.getDate();

        var date = new Date();
        var dd = date.getDate();
        var mm = date.getMonth();
        var yy = date.getFullYear();


        $('#calendar1').fullCalendar({



            defaultView: 'month',
            year: c_year_th,
            month: p_month,

            header: {
                left: 'prev,next',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            titleFormat: {
                month: 'MMMM yyyy',
                week: "d MMM [yyyy]{ '&#8212;'d [MMM] yyyy}",
                day: 'dddd, d MMM, yyyy'
            },
            columnFormat: {
                month: 'ddd',
                week: 'ddd d/M',
                day: 'dddd d/M'
            },

            monthNames: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
            monthNamesShort: ['มค.', 'กพ.', 'มค..', 'มย.', 'พค.', 'มย.', 'กค.', 'สค.', 'กย.', 'ตค.', 'พย.', 'ธค.'],
            dayNames: ['พฤหัสบดี', 'ศุกร์', 'เสาร์', 'อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ'],
            dayNamesShort: ['พฤ.', 'ศ.', 'ส.', 'อา.', 'จ.', 'อ.', 'พ.'],
            buttonText: {
                today: 'วันนี้',
                month: 'เดือน',
                week: 'สัปดาห์',
                day: 'วัน'
            },
            editable: true,

            firstDay: 3,
            events: [
			
			<?php
						//include('themes/msosocial/odbc_connect.php');
						$this->load->helper('html'); 
						
						foreach($rs as $row):
					
						dbConvert($row);
							
						$bg = "#77c705";

						$cat_type = $row['actcalendar_type_id'];
						$s_date = $row['startdate'];
						$e_date = $row['enddate'];
						$calendar_id = $row['id'];
						$calendar_title = $row['title'];
						
						
							
						if(strlen($calendar_title)>14)
						{
							$str_data = html_entity_decode($calendar_title);
							$str_data = strip_tags($str_data);
							$calendar_title =  iconv_substr($str_data, 0,14, "UTF-8").".."; 
						}
						
						
						$sd = explode(" ", $s_date); 
						$sd1 = explode("-", $sd[0]); 
						
						$ed = explode(" ", $e_date); 
						$ed1 = explode("-", $ed[0]); 			
						
						
						if ($cat_type == '7')
						{
				
							$bg = "#029DF0";
						}
						else if ($cat_type == '8')
						{
							$bg = "#F79528";
						}
						else if ($cat_type == '9')
						{
				
							$bg = "#79dc16";
						}
						
						
			
						    $s_m = $sd1[1]-1;
							$e_m = $ed1[1]-1;
						
							$strChkDate = $sd1[0];
							$strChkMonth = $s_m;
							$strChkYear = $sd1[2];
						
							$all_dateY = $strChkDate."_".$strChkMonth."_".$strChkYear;
						
							$count_act = 0;
							$chKShow = 0;
							$array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10",
							 "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", 
							 "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
							
							
							if ($chKShow == 0)
							{
								$all_dateY_details = $strChkDate."_".($strChkMonth + 1)."_".$strChkYear;
								$syear_th = $sd1[0] + 543;
								$eyear_th = $ed1[0] + 543;
								
								$str_show_time = explode(":", $sd[1]);
								$strTime = $str_show_time[0].":".$str_show_time[1];
								
								if($count_act == 0){$count_act = 1; }
						?>		
									{
			
										title: '<?php echo $strTime."  ".$calendar_title; ?>',
										start: new Date('<?php echo $syear_th; ?>', '<?php echo $s_m; ?>', '<?php echo $sd1[2]; ?>'),
										end: new Date('<?php echo $eyear_th; ?>', '<?php echo $e_m; ?>', '<?php echo $ed1[2]; ?>'),
										url: 'calendars/calendar_mso_detail/<?php echo $calendar_id; ?>',
										backgroundColor: '<?php echo $bg; ?>'
			
									},
				<?php
				
							}
				endforeach;
				
			?>

            ],
			eventClick: function(event) {
				
				alert(event);
				
					if (event.url) {
						//window.open(event.url);
						var x = screen.width/2 - 700/2;
						var y = screen.height/2 - 450/2;
						
						myWindow=window.open(event.url,'','width=800,height=250,left='+x+',top='+y);
						//myWindow.document.write("<p>This is 'myWindow'</p>")
						myWindow.focus();
						return false;
					}
			},
			
			eventDrop: function(event, delta) {
				alert(event.title + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
        });  // end calendar1






    });

</script>


</head>
<body>

<div class="row" id="bgtop">
	 <div id="top">
       <img src="themes/fundv2/images/user.png" width="13" height="14" style="margin-bottom:3px;"/>&nbsp;
       <span id="userlogin"><a href="#">เข้าสู่ระบบ</a></span> 
       <img src="themes/fundv2/images/line-user.jpg" width="2" height="42"> 
       <span id="userregis"><a href="#">สมัครสมาชิก</a></span>
        <div id="icon">
        	<a href="#"><img src="themes/fundv2/images/facebook.png" width="14" height="16" title="Facebook" style="margin-right:12px;"></a>
        				<img src="themes/fundv2/images/line-user.jpg" width="2" height="42">
            <a href="#"><img src="themes/fundv2/images/twitter.png" width="18" height="12" title="Twitter" style="margin-left:12px; margin-right:12px;"></a>
            			<img src="themes/fundv2/images/line-user.jpg" width="2" height="42">
        </div>
       <input name="searchbox" id="searchbox" maxlength="50" value="ค้นหา..." type="text" />
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
           <li class='active has-sub'><a href='#'><span>เกี่ยวกับ กบท.</span></a>
              <ul>
                 <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=เกี่ยวกับกองทุน'><span>เกี่ยวกับกองทุน</span></a>
                 <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=โครงสร้างหน่วยงาน'><span>โครงสร้างหน่วยงาน</span></a></li>
                 <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=การดำเนินงานตามนโยบาย'><span>การดำเนินงานตามนโยบาย</span></a></li>
                 <li class='last'><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=กฏหมาย/คำสั่งที่เกี่ยวข้อง'><span>กฎหมาย/คำสั่งที่เกี่ยวข้อง</span></a></li>
              </ul>
		   </li>
           <li class='active has-sub'><a href='#'>ข้อมูลข่าวสาร</a>
              <ul>
                 <li><a href='infos/lists?module=ข่าวประชาสัมพันธ์'>ข่าวประชาสัมพันธ์</a>
                 <li><a href='infos/lists?module=ข่าวจัดซื้อจัดจ้าง'>ข่าวจัดซื้อจัดจ้าง</a></li>
                 <li class='last'><a href='infos/lists?module=ข่าวประกาศรับสมัครงาน'>ข่าวประกาศรับสมัครงาน</a></li>
              </ul>
           </li>
           <li><a href='downloads/lists'>ดาวน์โหลดแบบฟอร์ม</a></li>
           <li><a href='contents/act?module=พรบ.%20กฏหมาย%20ระเบียบ%20ข้อบังคับ%20มติ%20ครม.%20และหนังสือเวียน'>พ.ร.บ./กฎหมาย/ระเบียบ</a></li>
           <li><a href='contents/view?module=เกี่ยวกับ%20กบท.&category=ติดต่อ%20กบท.'>ติดต่อสอบถาม</a></li>
           <li class='last'><a href='calendars/calendar_mso'>ปฏิทินกิจกรรม</a></li>
        </ul>
    </div>            
	<div class="clearfix">&nbsp;</div>


<div id="blank">

  <div id="download">
  	

            <div id="tab">
                <div id="tabkm1">
                
                    <ul id="navtab">
                    
                        <li><a href="#tab1" class="active">ปฏิทินกิจกรรม</a></li>
                    
                    </ul>
                    
                    <div class="clearfix" style="line-height:0;">&nbsp;</div>
                	
                    <div id="konten">
                    
                        <div style="display: none;" id="tab1" class="tab_konten">


            
			                <div class="" id="">
			
			                   <form id="frmCalendar" name="frmCalendar" method="get" action="calendar/lists" class="form-horizontal" >
			                      
			                      <table class="table table-bordered" style="background-color:#ffffcd; border:none;">
			                      <tbody>
			                            <tr>
			                            
			                                <td style="text-align:left; width:160px;">
			                                
													  <div class="form-group">
			                                            <div class="col-sm-10">
			                                            			
			                                          		<script>DateInput('searchDate', true, 'YYYY-MM-DD')</script>  
			                                          
			                                            </div>
			                                          </div>
			                                
			                                </td>
			                             
			                              <td style="text-align:  left; width:100%;">
			                              
			                                <div class="form-group" style="margin-left:20px;">
			                                    
			                                      <button type="submit" class="btn btn-default">ค้นหา</button>
			                                   
			                                  </div>
			              
			                              </td>
			                          
			                          </tr>
			                            
			                      </tbody>
			                  </table>
			                  
			                   </form>           
			                    
			                </div><!--#nav-search-->
                            
                            <div style="clear:both; margin-top:15px; margin-bottom:5px;">&nbsp;</div>

							<div id='loading' style='display:none;' align="center"><img src="media/images/ajax-loader.gif" /></div>
							<div id='calendar1'></div>
                            
						  <div style="clear:both; margin-top:15px; margin-bottom:5px;">&nbsp;</div>
                            <?php 
                            
								$bg_bulet = "#77c705";
								
								foreach($rs_type as $row_type){
							
								dbConvert($row_type);
									
								$bg_bulet = $row_type['color'];
								
				        	?>
							
							<div style="float:left; background-color:<?php echo $bg_bulet; ?>; width:74px; height:24px;border-radius:4px;
-webkit-border-radius:4px;-moz-border-radius:4px;
padding:15px 15px 30px 15px; margin-left:15px;  text-align:center; font-weight:normal; color:#FFF;">
								
								<?php echo $row_type['name']; ?>
								
							</div>
                            
                            <?php } ?>
                            
                            <div style="clear:both; margin-top:15px; margin-bottom:5px;">&nbsp;</div>
                            
                        </div>         
                  </div>
                </div>
          </div>
          
        </div>
        
 </div> <!-- end div page -->
       
</div>
<!-------------------------------------------------------END wrap-------------------------------------------------------->  

<div class="clearfix">&nbsp;</div>
	<div id="footer">
    	<div id="text-footer">
          <div id="textAddress">
              <a href="#"><img src="themes/fundv2/images/map.jpg" width="123" height="123" class="map"></a> 
    		  <div class="text-namefooter">งานบริหารกองทุน</div>
              <div class="text-namefooter2">สำนักปลัดกระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์</div>
              <p><img src="themes/fundv2/images/icon-location.png" width="20" height="25" /> อาคาร ซี.พี. ทาวเวอร์ 3 อาคาร A ชั้น 6 เลขที่ 34 ถ.พญาไท<br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แขวงทุ่งพญาไท เขตราชเทวี กรุงเทพมหานคร 10400<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โทรศัพท์ 0 2202 9024 -35, โทรสาร 0 2202 9034 -35, E-mail : <a href="mailto:fad@m-society.go.th" target="_blank">fad@m-society.go.th</a></p>
              <div class="btn-social"> <a href="#"><img src="themes/fundv2/images/btn-fb2.png" width="125" height="35" /></a> <a href="#"><img src="themes/fundv2/images/btn-tw2.png" width="125" height="35" style="margin-left:20px;"></a>
              </div>
		    
          </div>
            
        <div id="stat">
    		<div class="title-stat">จำนวนผู้เข้าเยี่ยมชมเว็บไซต์</div>
            <table width="200">
              <tr>
                <td width="102">วันนี้	</td>
                <td width="86">900</td>
              </tr>
              <tr>
                <td>เดือนนี้</td>
                <td>123456</td>
              </tr>
              <tr>
                <td> ปีนี้</td>
                <td>4500000</td>
              </tr>
              <tr>
                <td>รวมทั้งหมด	</td>
                <td>456789012</td>
              </tr>
              <tr>
                <td>เริ่มนับตั้งแต่วันที่  </td>
                <td>5 / 02 / 2557</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
            </table>   
            <a href="#" class="link-stat">ดูสถิติอย่างละเอียดทั้งหมด</a> 
    	</div>
        <div class="clearfix">&nbsp;</div>
      <div class="copy">Copyright © 2014 www.envocc.org &nbsp;&nbsp;&nbsp;All Rights Reserved. </div>
        <div id="back-top"><a href="#wrap"><img src="themes/fundv2/images/a-top.png" width="79" height="39"></a></div>
    </div>
</div>

<!-------------------END FOOTER--------------------->
        
</body>
</html>        
