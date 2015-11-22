<div class="row">
	<div class="col-md-12">
    	<span class="reson">ทีมทันตแพทย์ของเรา</span>
        <div class="line1">&nbsp;</div>
        <div class="arrow">
            <ul>
                <li class="arrow-right">
                    <a href="#">&nbsp;</a>
                </li>
                <li class="arrow-left">
                    <a href="#">&nbsp;</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row" style="margin-top:70px; margin-bottom:50px;">
	<?foreach($rs as $item):?>
	<div class="col-md-3">
    	<div class="dr-pic" style="text-align:center;">
        	<a href="#"><img src="themes/drtooth/images/dr-pic01.jpg" width="180" height="220" class="border-dr-pic"></a>
        </div>
        <span class="label"><?=lang_decode($item->name)?></span>
        <div class="position"><?=lang_decode($item->experience)?></div>
    </div>
	<?endforeach;?>
</div>