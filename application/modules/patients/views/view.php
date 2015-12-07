<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="dr-pic" style="text-align:center;">
          <?=thumb('uploads/patients/'.$rs->image,'180','220','1','class="border-dr-pic"')?>
        </div>
      </div>
      <div class="col-md-9">
        <div class="text1-Personal" style="margin-bottom:7px;"><?=lang_decode($rs->name)?></div>
        <?=lang_decode($rs->detail);?>
      </div>
    </div>
  </div>
</div>
<div style="clear:both; margin-bottom:80px;">&nbsp;</div>