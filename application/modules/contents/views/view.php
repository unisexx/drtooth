<?
if($rs->module == 'เกี่ยวกับ กบท.'){
	$module = "เกี่ยวกับงานบริหารกองทุน";
}else{
	$module = $rs->module;
}
?>

<div id="title-blank"><?=$_GET['category']?></div>
<div style="clear:both; margin-bottom:25px;" ></div>
<div id="breadcrumb"><a href="#"><?=$module?></a> > <span class="b1"><?=$_GET['category']?></span></div>
<div id="page">
	<?=$rs->detail?>
</div>