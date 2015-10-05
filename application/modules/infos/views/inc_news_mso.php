<div id="news">
	<div class="newstitle">ข่าวประชาสัมพันธ์ <span><a href="infos/lists?module=ข่าวประชาสัมพันธ์" class="viewall">ดูทั้งหมด</a></span></div>
       
       <?php 
       		 $this->load->helper('html');
       		 foreach($rs as $row){
       		 dbConvert($row); 
       	?>
		 
		 <p class="p-news">
		 

		   		<img src="http://intranet.m-society.go.th/upload/newsletters/<?php echo $row['img_title']; ?>" width="158" height="110" class="img-pr-news">
		 
		   		<br>
	   
	       		<a href="infos/view_mso/<?php echo $row['id']; ?>" target="_blank"><?php echo $row['title']; ?></a>
	       
	       </p>
       
       <?php } ?>
       
</div>