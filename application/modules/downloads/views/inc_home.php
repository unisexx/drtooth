<div id="download">
	<div class="downloadtitle">ดาวน์โหลดแบบฟอร์ม</div>
    <div id="tab">
        <div id="tabkm1">
            <ul id="navtab">
            	<?foreach($rs as $key=>$row):?>
            	<li><a href="#tab<?=$key+1?>" <?=$key==0?"class='active'":"";?>><?=nl2br($row->name)?></a></li>
            	<?endforeach;?>
            </ul>
            <div class="clearfix" style="line-height:0;">&nbsp;</div>
        <div id="konten">
        		<?foreach($rs as $key=>$row):?>
        		<div style="display: none;" id="tab<?=$key+1?>" class="tab_konten">
        			<table width="100%" class="tb1">
                      <tr>
                        <th width="100" style="padding-left:6px;">วันที่</th>
                        <th width="400">เรื่อง</th>
                        <th width="148" style="text-align:center;">จำนวนดาวน์โหลด</th>
  					  </tr>
  					  <?foreach($row->download->order_by('id desc')->get(10) as $item):?>
  					  <tr>
                        <td class="tb1-date"><?=DB2Date($item->created)?></td>
                        <td valign="top"><a href="downloads/download/<?=$item->id?>"><?=$item->title?></a></td>
                        <td align="center"><?=$item->counter?></td>
                      </tr>
  					  <?endforeach;?>
  				</table>
            	<div class="viewall-tb1"><a href="downloads/lists">ดูทั้งหมด</a></div>
            	</div>
        		<?endforeach;?>
            </div>
        </div>
    </div>
<!--------------------------------------------------------END TAB---------------------------------------------------> 
</div>