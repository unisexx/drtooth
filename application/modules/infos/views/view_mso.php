       <?php 
       		 $this->load->helper('html');
       		 foreach($rs as $row){
       		 dbConvert($row); 
       	?>

<div id="title-blank">ข่าวประชาสัมพันธ์</div>
<div id="breadcrumb"><a href="/home/index">หน้าแรก</a> > <span class="b1"><a href="infos/lists">ข่าวประชาสัมพันธ์</a></span></div>
<div id="page">
	
		<h1><?php echo $row['title']; ?></h1>
		<br>
		
		<img src="http://intranet.m-society.go.th/upload/newsletters/<?php echo $row['img_title']; ?>" width="158" height="110" class="img-pr-news">
		
		<br>
	
	    <?php echo $row['detail']; ?>
	    
	            วันที่ : <?php echo mysql_to_th($row['create_date']); ?>
</div>

	<?php } ?>