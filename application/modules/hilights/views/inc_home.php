<div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
<div class="container" id="highlight">
    <div class="carousel-inner">
        <? foreach($rs as $key=>$item):?>
        <div class="item <?if($key==0){echo"active";}?>">
        	<a href="<?=$item->url?>">
    		<?if(@$this->session->userdata('lang') == "th"):?>
		            <?=thumb($item->image_th,1050,414,1,'class="img-highlight"')?>
			<?elseif(@$this->session->userdata('lang') == "en"):?>
		            <?=thumb($item->image_en,1050,414,1,'class="img-highlight"')?>
		    <?endif;?>
            </a>
        </div>
        <? endforeach;?>
    </div>
</div>
<a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
<a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
</div>
<div class="container">
<div class="picmenu">
    <div>
        <ul>
            <li>
                <a href="contacts" class="picmenu01"><?=lang("make_appointment")?></a>
            </li>
            <li>
                <a href="talks" class="picmenu02"><?=lang("talk_with_dentists")?></a>
            </li>
            <li>
                <a href="talks/category/49" class="picmenu03"><?=lang("orthodontic_dentistry")?></a>
            </li>
            <li>
                <a href="talks/category/6" class="picmenu04"><?=lang("aesthetic_dentistry")?></a>
            </li>
        </ul>
    </div>
</div>
</div>