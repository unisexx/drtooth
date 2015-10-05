<div id="download">
	<div class="downloadtitle"><?=$_GET['module']?></div>
    <div id="tab">
        <div id="tabkm1">
            <ul id="navtab">
            	<li><a href="#tab1" class="active">การลา</a></li>
            	<li><a href="#tab2">ค่าศึกษาบุตร</a></li>
            	<li><a href="#tab3">ค่าเช่าบ้าน</a></li>
            	<li><a href="#tab4">ค่ารักษาพยาบาล</a></li>
            	<li><a href="#tab5">ค่าล่วงเวลา</a></li>
            	<li><a href="#tab6">ค่าล่วงเวลา</a></li>
            	<li><a href="#tab7">แนวปฏิบัติกระทรวงการคลัง</a></li>
            	<li><a href="#tab8">แนวปฏิบัติของสำนักนายกรัฐมนตรี</a></li>
            </ul>
            <div class="clearfix" style="line-height:0;">&nbsp;</div>
        <div id="konten">
        		<!-- tab1 -->
        		<div style="display: none;" id="tab1" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "การลา"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab2 -->
            	<div style="display: none;" id="tab2" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "ค่าการศึกษาบุตร"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab3 -->
            	<div style="display: none;" id="tab3" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "ค่าเช่าบ้าน"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab4 -->
            	<div style="display: none;" id="tab4" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "ค่ารักษาพยาบาล"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab5 -->
            	<div style="display: none;" id="tab5" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "ค่าล่วงเวลา"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab6 -->
            	<div style="display: none;" id="tab6" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "เดินทางไปราชการ"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab7 -->
            	<div style="display: none;" id="tab7" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "แนวปฏิบัติกระทรวงการคลัง"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab8 -->
            	<div style="display: none;" id="tab8" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "แนวปฏิบัติของสำนักนายกรัฐมนตรี"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            </div>
        </div>
    </div>
<!--------------------------------------------------------END TAB---------------------------------------------------> 
</div>