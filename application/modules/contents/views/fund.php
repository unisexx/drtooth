<div id="download">
	<div class="downloadtitle"><?=$_GET['module']?></div>
    <div id="tab">
        <div id="tabkm1">
            <ul id="navtab">
            	<li><a href="#tab1" class="active">เกี่ยวกับกองทุน</a></li>
            	<li><a href="#tab2">การขอรับเงิน<br>สนับสนุน</a></li>
            	<li><a href="#tab3">เกณฑ์การ<br>พิจารณา</a></li>
            	<li><a href="#tab4">แบบฟอร์ม<br>ที่เกี่ยวกับกองทุน</a></li>
            	<li><a href="#tab5">ระเบียบและ<br>ประกาศที่เกี่ยวข้อง</a></li>
            	<li><a href="#tab6">การเงินและ<br>การบริหารงบประมาณ</a></li>
            	<li><a href="#tab7">ผลการดำเนินงาน<br>กองทุน</a></li>
            </ul>
            <div class="clearfix" style="line-height:0;">&nbsp;</div>
        <div id="konten">
        		<!-- tab1 -->
        		<div style="display: none;" id="tab1" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "เกี่ยวกับกองทุน"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab2 -->
            	<div style="display: none;" id="tab2" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "การขอรับเงินสนับสนุน"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab3 -->
            	<div style="display: none;" id="tab3" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "เกณฑ์การพิจารณา"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab4 -->
            	<div style="display: none;" id="tab4" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "แบบฟอร์มที่เกี่ยวกับกองทุน (ดาวน์โหลดแบบฟอร์ม)"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab5 -->
            	<div style="display: none;" id="tab5" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "ระเบียบและประกาศที่เกี่ยวข้อง"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab6 -->
            	<div style="display: none;" id="tab6" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "การเงินและการบริหารงบประมาณ"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            	
            	<!-- tab7 -->
            	<div style="display: none;" id="tab7" class="tab_konten">
        			<?
        				$rs = $this->db->query('SELECT detail FROM contents where module = "'.$_GET['module'].'" and category = "ผลการดำเนินงานกองทุน"')->row_array();
						echo $rs['detail'];
        			?>
            	</div>
            </div>
        </div>
    </div>
<!--------------------------------------------------------END TAB---------------------------------------------------> 
</div>