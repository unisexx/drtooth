
 <style>
 	
 	.txt_title{
 		font-weight: bold; 
 		color: #C36000;
 	}
 	
 </style>
    	
    	<div style="clear::both; margin-top:55px;"></div>
    	
        <div id="breadcrumb">
		
		<a href="home/index">หน้าแรก</a> 
		> 
		<span class="b1"><a href="calendars/calendar_mso">ปฏิทินกิจกรรม</a></span> 
		> 
		<span class="b1"><a href="calendars/calendar_mso?actcalendar_type_id=1"><?=$rs->title?></a></span>
		
		</div>
		
		<div style="clear::both; margin-bottom:10px;"></div>
		
		<div id="title-blank"><?=$rs->title?></div>
		
	    <div id="page">
	
        	<p>
			
				<h3 class="txt_title">ชื่องาน :<?=$rs->title?></h3><br />
                <p><span class="txt_title">สถานที่ :</span><?=$rs->place?></p><br /> 
				<p><span class="txt_title">วัน เวลา :</span><?=mysql_to_th($rs->start_date)?> ถึง  <?=mysql_to_th($rs->end_date)?></p><br /> 
				<p><span class="txt_title">รายละเอียด :</span><?=$rs->detail?></p><br /> 
				<p><span class="txt_title">เจ้าของงาน(ชื่อหน่วยงาน) :</span>
                
                				<?php
				
				$uname = 'Admin';
				$uid = $rs->user_id;
				$users = new User($uid);
				$uname = $users->name;
				
				echo $uname;
				
				?>
                </p><br /> 
				<p><span class="txt_title">ผู้สร้างรายการ :</span><?=$uname?></p><br />  

				<br />
				<br />
				
<!-- 
	
	//show details etc
	
	
-->
	
	         <div id="download">
         	
       
        	
            <div id="tab">
            	
                <div id="tabkm1">
                	
                    <ul id="navtab">
                    	
                        <li><a href="#tab1" class="active">ภาพกิจกรรม</a></li>
                        <li><a href="#tab2">ไฟล์แนบ</a></li>
                        
                    </ul>
                    
                    <div class="clearfix" style="line-height:0;">&nbsp;</div>
                    
                <div id="konten">
                	
                        <div style="display: none;" id="tab1" class="tab_konten">
                        	
                  		<table width="100%" class="tb1">
                  			
                              <tr>
                                <td width="100%" style="padding-left:6px;">
                                 <?php if($rs->image){ ?>
                                
                                <img class="img" style="width:300px;" src="uploads/calendar/<?php echo $rs->image; ?>"  />
                                
                                 <br><br>
                             
			                    <?php }else{ ?>
                            
                                	<p>ไม่มีภาพกิจกรรม</p>
                                    
                                <?php } ?>  
                                </td>
	      					  </tr>


						</table>
						<!--
                    	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                        -->    
               			</div>
                        
                        <div style="display: none;" id="tab2" class="tab_konten">
                        	
                           <table width="100%" class="tb1">
                           	
                              <tr>
                                <td width="100%" style="padding-left:6px;">
                                <?php if($rs->url){ ?>
                                
                                <a href="uploads/calendar/<?php echo $rs->url; ?>" target="_blank"  />
                                ดาวน์โหลด : <?php echo $rs->url; ?>
                                
                                </a>
                                
                                 <br><br>
                             
			                    <?php }else{ ?>
                            
                                	<p>ไม่มีไฟล์แนบ</p>
                                    
                                <?php } ?>  
                                </td>
	      					  </tr>


						</table>
        				<!--
                        	<div class="viewall-tb1"><a href="#">ดูทั้งหมด</a></div>
                       		--> 	
                        </div>
                        

                    </div>
                </div>
            </div>
         </div>

	
<!-- end detail -->				
				
			</p>
			
        </div>
        