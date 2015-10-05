<div id="title-blank"><?=$_GET['module']?></div>
<div id="breadcrumb"><a href="home/index">หน้าแรก</a> > <span class="b1"><?=$_GET['module']?></span></div>
<div id="page">
	<?foreach($rs as $row):?>
		<div class="media col-lg-6">
		  <div class="media-left media-middle">
		    <a href="infos/view/<?=$row->id?>">
		      
              
              <?php //if($row->url == ""):?>
		      	<!--<img class="media-object" src="uploads/info/<?=$row->image?>" width="139" height="96">-->
		      <?php //else:?>
		      	<!--<img class="media-object" src="<?=$row->image?>" width="139" height="96">-->
		      <?php // endif;?>
              
              <?php if($row->image){ ?>
              
              <?php if($row->slug == 'mso'){ ?>
              <img class="media-object" src="http://intranet.m-society.go.th/upload/newsletters/<?=$row->image?>" width="139" height="96">
              <?php }else{ ?>
              <img class="media-object" src="uploads/info/<?=$row->image?>" width="139" height="96">
              <?php } ?>
              
              <?php }else{ ?>
              <img src="themes/fundv2/images/megaphone.png" />
              <?php } ?>
              
		    </a>
		  </div>
		  <div class="media-body">
		    <h3 style="font-size: 14px; margin-top: 0px; line-height: 1.5;">
			
			<?php 
			
				//echo $row->title;
				$text =  $row->title;
				$text1 = "";
				
				if(strlen($text)>126)
				{
					$str_data = html_entity_decode($text);
					$str_data = strip_tags($str_data);
					$text1 =  iconv_substr($str_data, 0,126, "UTF-8").".."; 
				}
				else
				{
					$text1 = $row->title;	
				}
				
				echo $text1;
				
			
			?>
            
            </h3>
		  </div>
		</div>
	<?endforeach;?>
<br clear="all">
<?=$rs->pagination();?>
</div>