<div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
<div class="container" id="highlight">
    <div class="carousel-inner">
        <? foreach($rs as $key=>$item):?>
        <div class="item <?if($key==0){echo"active";}?>">
        	<a href="<?=$item->url?>">
            <img src="uploads/hilight/<?=$item->image?>" class="img-highlight">
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
                <a href="contacts" class="picmenu01">นัดหมายตรวจสุขภาพฟัน</a>
            </li>
            <li>
                <a href="talks" class="picmenu02">คุยกับหมอฟัน</a>
            </li>
            <li>
                <a href="talks/category/49" class="picmenu03">ทันตกรรมเพื่อความงาม</a>
            </li>
            <li>
                <a href="talks/category/6" class="picmenu04">ทันตกรรมเด็ก</a>
            </li>
        </ul>
    </div>
</div>
</div>