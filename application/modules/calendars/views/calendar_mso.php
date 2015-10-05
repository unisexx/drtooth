<script type="text/javascript" src="media/calendarDateInput.js"></script>
<style>


/*    html, body, div, span, strong {
        font-weight: normal;
        color: black;
    }*/

.show_sub1 { float:left; background-color:#77c705; width:74px; height:24px;border-radius:4px;
-webkit-border-radius:4px;-moz-border-radius:4px;
padding:15px 15px 30px 15px; margin-left:15px;  text-align:center; font-weight:normal; color:#FFF;}

.show_sub2 {float:left;background-color:#027ac6; width:74px; height:24px;border-radius:4px;
-webkit-border-radius:4px;-moz-border-radius:4px;
padding:15px 15px 30px 15px;margin-left:15px; text-align:center;font-weight:normal; color:#FFF;}

.show_sub3 {float:left;background-color:#ce9a5e; width:74px; height:24px;border-radius:4px;
-webkit-border-radius:4px;-moz-border-radius:4px; 
padding:15px 15px 30px 15px;margin-left:15px; text-align:center;font-weight:normal; color:#FFF;}

</style>

  <style>




    table {
      background: #fff;
      border-collapse: collapse;
      color: #222;
      font-family: 'PT Sans', sans-serif;
      font-size: 13px;
      width: 100%;
	  border-radius: 5px;
      box-sizing: border-box;
      padding: 15px 15px 15px 15px;
	  
    }

    td {
      border: 1px solid #ccc;
      color: #444;
      line-height: 22px;
      text-align: center;
    }

    tr:first-child td {
      color: #222;
      font-weight: 700;
    }



  </style>
  
  <div id="download">
        	<div class="download-title">ปฏิทินกิจกรรม</div>
            
                <div class="" id="">

                   <form id="frmCalendar" name="frmCalendar" method="get" action="calendar/calendar_mso" class="form-horizontal" >
                      
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
            <div id="tab">
                <div id="tabkm1">
                
                    <ul id="navtab">
                    
                        <li><a href="#tab1" class="active">ปฏิทินกิจกรรม</a></li>
                    
                    </ul>
                    
                    <div class="clearfix" style="line-height:0;">&nbsp;</div>
                	
                    <div id="konten">
                    
                        <div style="display: none;" id="tab1" class="tab_konten">

       <div id="calendar">
	   
       	   <div class="calendartitle">ปฏิทินกิจกรรม</div>
		   
		   
			<?php echo $rs_calendar;?>
            
         </div>
                            
						  <div style="clear:both; margin-top:15px; margin-bottom:5px;">&nbsp;</div>
              
       
                            
                            
                            <div class="show_sub1">อบรม</div>
                            <div class="show_sub2">ประชุม</div>
                            <div class="show_sub3">กิจกรรม</div>
                            
                            <div style="clear:both; margin-top:15px; margin-bottom:5px;">&nbsp;</div>
                            
                        </div>         
                  </div>
                </div>
          </div>
        </div>
        
