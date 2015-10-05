<div id="title-blank">เว็บไซต์แนะนำ</div>
<div id="breadcrumb"><a href="#">หน้าแรก</a> > <span class="b1"><a href="weblinks/lists">เว็บไซต์แนะนำ</a></span></div>

<div id="page">
	<!-- <table class="table table-striped table-bordered">
	<tr>
		<th>หน่วยงาน</th>
		<th>จำนวนเว็บไซต์ในหน่วยงานย่อย</th>
	</tr>
	<?foreach($rs as $row):?>
	<tr>
		<td><a href='weblinks/view/<?=$row->id?>'><?=$row->name?></a></td>
		<td><?=$row->weblink->result_count();?></td>
	</tr>
	<?endforeach;?>
	</table>
	 -->
	
	
	
	
	
	
	
<div class="bs-example">
    <div class="panel-group" id="accordion">
    	
    	<?foreach($rs as $key=>$row):?>
    	<div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$key?>"><?=$row->name?></a>
                </h4>
            </div>
            <div id="collapse_<?=$key?>" class="panel-collapse collapse <?=$key==0?'in':'';?>">
                <div class="panel-body">
                    <div class="row">
                      <?foreach($row->weblink->get() as $item):?>
                      <div class="col-md-6">- <a href="<?=$item->url?>" target="_blank"><?=$item->title?></a></div>
                      <?endforeach;?>
					</div>
                </div>
            </div>
        </div>
    	<?endforeach;?>
    	
    </div>
</div>
	

	
</div>
