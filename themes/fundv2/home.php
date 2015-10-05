<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $template['title']; ?></title> 
<?include('_inc.php')?>
<?php echo $template['metadata']; ?>
</head>
<body>
<?include('_header.php')?>
    		
<!------------------------------------------------------------END Header and TopMenu----------------------------------------------------------->           
	<div id="wraphilight">
		<?=modules::run('hilights/inc_home'); ?>
    	<!-- <div id="highlight">
            <ul>
              <li><a href="#"><img src="themes/fundv2/images/highlight-pic01.jpg" width="698" height="249" /></a></li>
            </ul>
                 <div id="run">
                    <ol>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                        <li><a href="#" class="active">&nbsp;</a></li>
                        <li><a href="#">&nbsp;</a></li>
                    </ol>
                </div>
        </div> -->
        <div id="menuright">
        	<ul>
            	<a href="contents/fund_more2?module=กองทุนเพื่อการป้องกันและปราบปรามการค้ามนุษย์"><li class="menuright01">&nbsp;</li></a>
                <a href="contents/fund_more3?module=กองทุนส่งเสริมการจัดการสวัสดิการสังคม"><li class="menuright02">&nbsp;</li></a>
                <a href="contents/fund_more1?module=กองทุนคุ้มครองเด็ก"><li class="menuright03">&nbsp;</li></a>
            </ul>
        </div>
    </div>  
    <div class="clearfix">&nbsp;</div>
<!------------------------------------------------------------END HighLight----------------------------------------------------------->  
  	<div id="marquee">
    	<marquee  align="middle" scrollamount="5" scrolldelay="91" onmouseover="this.stop();" onmouseout="this.start();"><?=modules::run('contents/inc_home_maquee'); ?></marquee>
    </div>
<!------------------------------------------------------------END Marquee-----------------------------------------------------------> 
<div id="col1">
		<?=modules::run('infos/inc_home_3'); ?>
    	
        <div class="clearfix">&nbsp;</div>
        <!---------------------------------------------END News------------------------------------------>
        
        <?=modules::run('infos/inc_home_1'); ?>
		
        <!---------------------------------------------END Porcument------------------------------------------>
    
        
	</div>
<!------------------------------------------------------------END Col1----------------------------------------------------------->  
    <div id="col2"> 
    	<a href="#"><img src="themes/fundv2/images/banner01.png" width="436" height="149" class="banner01"/></a>
        <br>
        <?=modules::run('vdos/inc_home');?>
      <div class="clearfix">&nbsp;</div>
        <!---------------------------------------------END VDO------------------------------------------>
        
        <?=modules::run('infos/inc_home_2'); ?>
        
    </div>
<!------------------------------------------------------------END Col2----------------------------------------------------------->  
<div class="clearfix">&nbsp;</div>

     <div id="col3">
         <?=modules::run('downloads/inc_home')?>  
     </div>
	 <!-------------------------------------------------------END Col3-------------------------------------------------------->  
     <div id="col4">

         <?php //include('_calendar.php')?>
         
        <div id="showData"></div>
        
        <script type="text/javascript">
            $(function(){
                
                
                var jMonth = '<?php echo $seMonth; ?>';
                var jYear = '<?php echo $seYear; ?>';
                
                $("#showData").load("<?php echo base_url()?>home/show_calendar/"+jYear+"/"+jMonth);
        
        
                
            });
        </script>
         
         
         <!-------------------END Calendar---------------------> 
   	    <a href="weblinks/lists"><img src="themes/fundv2/images/banner-weblink.jpg" width="287" height="137" /></a>
        <a href="#"><img src="themes/fundv2/images/banner-contract.jpg" width="287" height="96" style="margin-top:25px;"></a>
        
     </div> 
     <!-------------------------------------------------------END Col4-------------------------------------------------------->
     

<?=modules::run('log/statvisits'); ?>	 

</body>
</html>
