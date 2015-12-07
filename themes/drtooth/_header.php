<div class="section" id="top">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="top-text">
                <span class="mail">
                    <a href="mailto:info@drtoothdentalclinic.com" target="_blank">info@drtoothdentalclinic.com</a>
                </span>
                <span class="tel">+66 845401111</span>
                <span class="time">เปิดทุกวัน จันทร์- อาทิตย์, 8.00 - 20.00</span>
            </div>
        </div>
    </div>
</div>
</div>

<div class="navbar navbar-default navbar-static-top" id="bg-header">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="brand">&nbsp;</div>
    </div>
    <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <div id="cssmenu">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="home" <?if($this->uri->segment(1) == "home"){echo"class='active'";}?>>หน้าแรก</a>
                </li>
                <li>
                    <a href="aboutus" <?if($this->uri->segment(1) == "aboutus"){echo"class='active'";}?>>เกี่ยวกับเรา</a>
                </li>
                <li>
                    <a href="#" <?if($this->uri->segment(1) == "services"){echo"class='active'";}?>>บริการทางทันตกรรม</a>
                    <ul>
                        <li>
                            <a href="services">บริการทั้งหมด</a>
                        </li>
                        <li>
                            <a href="talks/category/4">ทันตกรรมทั่วไป</a>
                        </li>
                        <li>
                            <a href="talks/category/3">ทันตกรรมจัดฟัน</a>
                        </li>
                        <li>
                            <a href="talks/category/49">ทันตกรรมเพื่อความงาม</a>
                        </li>
                        <li>
                            <a href="talks/category/5">ทันตกรรมประดิษฐ์และรากเทียม</a>
                        </li>
                        <li>
                            <a href="talks/category/50">ศัลยกรรมช่องปากและโรคเหงือก</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" <?if($this->uri->segment(1) == "dentists" || $this->uri->segment(1) == "talks"){echo"class='active'";}?>>คุยกับหมอฟัน</a>
                    <ul>
                        <li>
                            <a href="dentists">ทีมทันตแพทย์ของเรา</a>
                        </li>
                        <li>
                            <a href="talks">คุยกับหมอฟัน</a>
                        </li>
                        <li>
                            <a href="staffs">ทีมงานของเรา</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="patients" <?if($this->uri->segment(1) == "patients"){echo"class='active'";}?>>คนไข้ของเรา</a>
                    <!-- <ul>
                        <li>
                            <a href="#">our cases</a>
                        </li>
                    </ul> -->
                </li>
                <li>
                    <a href="contacts" <?if($this->uri->segment(1) == "contacts"){echo"class='active'";}?>>ติดต่อเรา</a>
                    <!-- <ul>
                        <li>
                            <a href="#">work with us</a>
                        </li>
                    </ul> -->
                </li>
            </ul>
        </div>
    </div>
    <div style="margin-top:-30px;"><input type="text" class="form-search" placeholder="ค้นหา..."></div>
</div>
</div>