<div id="news">

	<div class="newstitle">ข่าวประชาสัมพันธ์
    
     <span>
    <a href="infos/lists?module=ข่าวประชาสัมพันธ์" class="viewall">ดูทั้งหมด</a>
    </span>
    
    </div>
    
       <?php foreach($rs as $key=>$row):?>
       
		   <p class="<?=($key==2 || $key==5)?'p-news2':'p-news';?>">
           <!--<p class="p-news">-->
		   	
            
              <?php if($row->slug == 'mso'){ ?>
              <img src="http://intranet.m-society.go.th/upload/newsletters/<?=$row->image?>" width="158" height="110" class="img-pr-news">
              <?php }else{ ?>
              <img src="uploads/info/<?=$row->image?>" width="158" height="110" class="img-pr-news">
              <?php } ?>
            
            
		   <br>
	       <a href="infos/view/<?=$row->id?>"><?=$row->title?></a></p>
           
       <?php endforeach;?>
</div>