<div id="title-blank">ข่าวประชาสัมพันธ์</div>
<div id="breadcrumb"><a href="/home/index">หน้าแรก</a> > <span class="b1">ข่าวประชาสัมพันธ์</span></div>
<div id="page">
	<?php 
	$this->load->helper('html');
		foreach($rs as $row){
			  dbConvert($row); 
			 
	?>
		<div class="media col-lg-6">
		  <div class="media-left media-middle">
		    
		    <a href="infos/view_mso/<?php echo $row['id']; ?>" target="_blank" >
		    
		    <?php
		   		$file = "http://intranet.m-society.go.th/upload/newsletters/".$row['img_title'];

				//$file = 'http://www.domain.com/somefile.jpg';
				$file_headers = @get_headers($file);
				if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
			?>		
				    <img src="themes/fundv2/images/NoImg.jpg" width="158" height="110" class="img-pr-news">	
				
				
			<?php 	}else {	?>
					
				    <img src="http://intranet.m-society.go.th/upload/newsletters/<?php echo $row['img_title']; ?>" width="158" height="110" class="img-pr-news">
			
			<?php 	}  ?>
		     	  
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 class="media-heading"><?php echo $row['title']; ?></h4>
		    <span><?php echo mysql_to_th($row['create_date']); ?></span>
		  </div>
		</div>
	<?php } ?>
<br clear="all">
<?php //echo $rs->pagination(); ?>
</div>