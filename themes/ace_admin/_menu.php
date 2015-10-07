

<div class="sidebar" id="sidebar">
	<!-- <div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-small btn-success">
				<i class="icon-signal"></i>
			</button>

			<button class="btn btn-small btn-info">
				<i class="icon-pencil"></i>
			</button>

			<button class="btn btn-small btn-warning">
				<i class="icon-group"></i>
			</button>

			<button class="btn btn-small btn-danger">
				<i class="icon-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div> -->
	<!--#sidebar-shortcuts-->

<ul class="nav nav-list">
    
<li <?=@$this->uri->segment(1) == 'hilights'?'class="active"':'';?>>
	<a href="hilights/admin/hilights">
		<i class="fa fa-file-image-o"></i>
		<span class="menu-text"> ไฮไลท์ </span>
	</a>
</li>
		

<li <?=@$_GET['module'] == 'เกี่ยวกับเรา'?'class="active open"':'';?>>
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-file-pdf-o"></i>
		<span class="menu-text"> เกี่ยวกับเรา </span>

		<b class="arrow icon-angle-down"></b>
	</a>

	<ul class="submenu">
		<li <?=@$_GET['module'] == 'เกี่ยวกับเรา' && @$_GET['category'] == 'บริการของเรา'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=เกี่ยวกับเรา&category=บริการของเรา">
				<i class="icon-double-angle-right"></i>
				บริการของเรา
			</a>
		</li>

		<li <?=@$_GET['module'] == 'เกี่ยวกับเรา' && @$_GET['category'] == 'เหตุผลที่คุณควรเลือกเรา'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=เกี่ยวกับเรา&category=เหตุผลที่คุณควรเลือกเรา">
				<i class="icon-double-angle-right"></i>
				เหตุผลที่คุณควรเลือกเรา
			</a>
		</li>
		
		<li <?=@$_GET['module'] == 'เกี่ยวกับเรา' && @$_GET['category'] == 'เครื่องมือของเรา'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=เกี่ยวกับเรา&category=เครื่องมือของเรา">
				<i class="icon-double-angle-right"></i>
				เครื่องมือของเรา
			</a>
		</li>
	</ul>
</li>


<li <?=@$_GET['module'] == 'บริการทางทันตกรรม'?'class="active open"':'';?>>
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-file-pdf-o"></i>
		<span class="menu-text"> บริการทางทันตกรรม </span>

		<b class="arrow icon-angle-down"></b>
	</a>

	<ul class="submenu">
		<li <?=@$_GET['module'] == 'บริการทางทันตกรรม' && @$_GET['category'] == 'บริการทั้งหมด'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=บริการทางทันตกรรม&category=บริการทั้งหมด">
				<i class="icon-double-angle-right"></i>
				บริการทั้งหมด
			</a>
		</li>

		<li <?=@$_GET['module'] == 'บริการทางทันตกรรม' && @$_GET['category'] == 'ทันตกรรมทั่วไป'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=บริการทางทันตกรรม&category=ค่าการศึกษาบุตร">
				<i class="icon-double-angle-right"></i>
				ทันตกรรมทั่วไป
			</a>
		</li>
		
		<li <?=@$_GET['module'] == 'บริการทางทันตกรรม' && @$_GET['category'] == 'ทันตกรรมจัดฟัน'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=บริการทางทันตกรรม&category=ทันตกรรมจัดฟัน">
				<i class="icon-double-angle-right"></i>
				ทันตกรรมจัดฟัน
			</a>
		</li>
		
		<li <?=@$_GET['module'] == 'บริการทางทันตกรรม' && @$_GET['category'] == 'ทันตกรรมจัดฟัน'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=บริการทางทันตกรรม&category=ทันตกรรมเพื่อความงาม">
				<i class="icon-double-angle-right"></i>
				ทันตกรรมเพื่อความงาม
			</a>
		</li>
		
		<li <?=@$_GET['module'] == 'บริการทางทันตกรรม' && @$_GET['category'] == 'ทันตกรรมจัดฟัน'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=บริการทางทันตกรรม&category=ทันตกรรมประดิษฐ์และรากเทียม">
				<i class="icon-double-angle-right"></i>
				ทันตกรรมประดิษฐ์และรากเทียม
			</a>
		</li>
		
		<li <?=@$_GET['module'] == 'บริการทางทันตกรรม' && @$_GET['category'] == 'ทันตกรรมจัดฟัน'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=บริการทางทันตกรรม&category=ศัลยกรรมช่องปากและโรคเหงือก">
				<i class="icon-double-angle-right"></i>
				ศัลยกรรมช่องปากและโรคเหงือก
			</a>
		</li>
	</ul>
</li>


<li <?=@$this->uri->segment(1) == 'staffs' || @$this->uri->segment(1) == 'talks' ?'class="active open"':'';?>>
	<a href="#" class="dropdown-toggle">
		<i class="fa fa-file-pdf-o"></i>
		<span class="menu-text"> คุยกับหมอฟัน </span>

		<b class="arrow icon-angle-down"></b>
	</a>

	<ul class="submenu">
		<li <?=@$_GET['module'] == 'คุยกับหมอฟัน' && @$_GET['category'] == 'บริการทั้งหมด'?'class="active open"':'';?>>
			<a href="contents/admin/contents/form?module=คุยกับหมอฟัน&category=ทีมทันตแพทย์ของเรา">
				<i class="icon-double-angle-right"></i>
				ทีมทันตแพทย์ของเรา
			</a>
		</li>

		<li <?=@$this->uri->segment(1) == 'talks'?'class="active"':'';?>>
			<a href="talks/admin/talks">
				<i class="icon-double-angle-right"></i>
				คุยกับหมอฟัน
			</a>
		</li>
		
		<li <?=@$this->uri->segment(1) == 'staffs'?'class="active"':'';?>>
			<a href="staffs/admin/staffs">
				<i class="icon-double-angle-right"></i>
				ทีมงานของเรา
			</a>
		</li>
	</ul>
</li>


<li <?=@$this->uri->segment(1) == 'patients'?'class="active"':'';?>>
	<a href="patients/admin/patients">
		<i class="fa fa-globe"></i>
		<span class="menu-text"> คนไข้ของเรา </span>
	</a>
</li>


<li <?=@$this->uri->segment(1) == 'user_permission'?'class="active"':'';?>>
	<a href="users/admin/users">
		<i class="fa fa-globe"></i>
		<span class="menu-text"> ติดต่อเรา </span>
	</a>
</li>
		
        
		
	</ul><!--/.nav-list-->

	<div class="sidebar-collapse" id="sidebar-collapse">
		<i class="icon-double-angle-left"></i>
	</div>
</div>