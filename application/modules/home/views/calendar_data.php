	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="<?php echo base_url()?>media/fancyBox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo base_url()?>media/fancyBox/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>media/fancyBox/source/jquery.fancybox.css?v=2.1.5" media="screen" />


	<script type="text/javascript">
		$(document).ready(function() {

            $('.fancybox').fancybox({
                modal:true,
                overlayShow:true,
                closeBtn: false,
                hideOnOverlayClick: false,
                hideOnContentClick: false,
                enableEscapeButton: false,
                showCloseButton:false

            });

		});
	</script>


<table width="250px">
<tr>
<td colspan="3" align="center">

       <div id="calendar">
	   		

            
       	   <div class="calendartitle">ปฏิทินกิจกรรม</div>
		   
                       <div class="control_calendar">

                        <table width="100%" cellpadding="0" cellspacing="0">
                        
                        <tr bgcolor="#FF99CC">
                        
                        <td style="text-align:left;">
                        
                        <script>
                        
                            function per_month()
                            {
                                <?php
                                    $seMonth--;
                                ?>
                                
                                var jMonth = '<?php echo $seMonth; ?>';
                                var jYear = '<?php echo $seYear; ?>';
                                
                                $("#showData").load("<?php echo base_url()?>home/show_calendar/"+jYear+"/"+jMonth);
                        
                                return true;
                            }
                        
                        
                            
                        </script>
                        
                            <a href="javascript:void(0);" onClick="per_month();" class="pre-month">&lt;&lt;</a>
                            
                        </td>
                        
                        <td align="center">
                        
                            <?php
                             //echo date("M Y"); 
                             $month['th'] = array('','1'=>'มกราคม','2'=>'กุมภาพันธ์','3'=>'มีนาคม','4'=>'เมษายน','5'=>'พฤษภาคม',
                             '6'=>'มิถุนายน','7'=>'กรกฏาคม','8'=>'สิงหาคม','9'=>'กันยายน','10'=>'ตุลาคม','11'=>'พฤศจิกายน','12'=>'ธันวาคม');
                             
							 echo "<span style='font-weight:bold; color: #FFF;'>";
                             echo $month['th'][$seMonth]." ".($seYear+543);
                             echo "</span>";
							 
							 
                             ?>
                             
                        </td>
                        
                        <td>
                        
                        <script>
                        
                            function nexts_months()
                            {
                                <?php
                                    $seMonth2++;
                                ?>
                                
                                var jMonth2 = '<?php echo $seMonth2; ?>';
                                var jYear2 = '<?php echo $seYear2; ?>';
                                
                                $("#showData").load("<?php echo base_url()?>home/show_calendar/"+jYear2+"/"+jMonth2);
                        
                                return true;
                            }
                            
                        </script>
                        
                            <a href="javascript:void(0);" onClick="nexts_months();" class="next-month">&gt;&gt;</a>
                        
                        
                        </td>
                        
                        </tr>
                        </table>     
            </div>
		   
			<?php echo $rs_calendar;?>
            
         </div>

</td>
</tr>
</table>
                

         


               
                           
                     
        
       