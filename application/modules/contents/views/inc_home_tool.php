<div class="col-md-6">
    <span class="reson">
        <img src="themes/drtooth/images/icon-tech.png" width="26" height="42">
        <span style="font-size:50px;">น</span>วัตกรรมสมัยใหม่ มาตราฐานระดับสากล</span>
    <br>
    <?=lang_decode($rs->detail)?>
</div>


<?foreach($tools as $key=>$item):?>
<?if(($key % 2) == 0):?><div class="col-md-3" style="margin-top:30px;"><?endif;?>
	<div class="imgteaser"> 
	    <a href="#" class="bg-tech">
	    <div class="title-tech"><?=lang_decode($item->name)?></div>
	    <img src="uploads/tools/<?=$item->image?>" width="220" height="223">
	    <span class="desc"><?=lang_decode($item->detail)?><br><b>อ่านต่อ</b></span>
	    </a> 
	</div>
<?if(($key % 2) == 1):?></div><?endif;?>
<?endforeach;?>