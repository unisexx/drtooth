<div class="section" id="bg-page">
    <div class="container">
        <div class="row">
			<div class="col-md-8" style="float:left;">
				
			<?foreach($rs as $row):?>
			<div class="col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="uploads/talks/<?=$row->image?>" width="300" height="188">
                    <div class="caption">
                        <h4><?=lang_decode($row->title)?></h4>
                        <div style="overflow: hidden; height:180px;"><?=strip_tags(lang_decode($row->detail),'<br>')?></div><br>
                       <a href="talks/view/<?=$row->id?>" class="btn btn-primary" id="btn-more">อ่านต่อ</a>
                    </div>
                </div>
            </div>
			<?endforeach;?>
			
            <?=$rs->pagination();?>
            </div>
           
<!------------------------------------------------------END Col1---------------------------------------------------> 

<?=modules::run('home/sidebar'); ?>

</div>
</div>
</div>
<div style="clear:both; margin-bottom:40px;">&nbsp;</div>