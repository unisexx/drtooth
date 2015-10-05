<link href="themes/fundv2/css/template.css" type="text/css" rel="stylesheet"/>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="themes/fundv2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="themes/fundv2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="themes/fundv2/css/topmenu.css">

<link rel="stylesheet" href="media/font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="media/css/pagination.css">
<link rel="stylesheet" href="media/css/img.css">

<!-- <link rel="stylesheet" href="themes/fundv2/css/calendar.css"> -->

  <!-- <script src="themes/fundv2/js/jquery-latest.min.js" type="text/javascript"></script>-->
   <!-- <script type="text/javascript" src="themes/fundv2/js/jquery-1.11.3.min.js"></script> -->
   <script type="text/javascript" src="themes/fundv2/js/jquery.js"></script>
   <!-- <script type="text/javascript" src="themes/fundv2/js/jquery2.0.0.js"></script> -->
   
   
   <script src="media/bootstrap-3.3.4/js/bootstrap.js" type="text/javascript"></script>
   
   <script src="themes/fundv2/js/script.js"></script>
   
   <link rel="stylesheet" href="media/js/colorbox/example5/colorbox.css" />
   <script type="text/javascript" src="media/js/colorbox/jquery.colorbox.js"></script>
   
<script type="text/javascript">

$(document).ready(function() {
	$('#tab1').fadeIn('slow'); //tab pertama ditampilkan
	$('ul#navtab li a').click(function() { // jika link tab di klik
		$('ul#navtab li a').removeClass('active'); //menghilangkan class active (yang tampil)
		$(this).addClass("active"); // menambahkan class active pada link yang diklik
		$('.tab_konten').hide(); // menutup semua konten tab
		var aktif = $(this).attr('href'); // mencari mana tab yang harus ditampilkan
		$(aktif).fadeIn('slow'); // tab yang dipilih, ditampilkan
		return false;
	});

});

</script>

<script type="text/javascript">
	$(document).ready(function(){
	
		//	Load	Statistics
		$("div#statistic").html("<img src='media/images/ajax-loader.gif' />").load(" ");
	
		// hide #back-top first
		$("#back-top").hide();
		
		// fade in #back-top
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 1500) {
					$('#back-top').fadeIn();
				} else {
					$('#back-top').fadeOut();
				}
			});
	
			// scroll body to 0px on click
			$('#back-top').click(function () {
				$('body,html').animate({
					scrollTop: 0
				}, 800);
				return false;
			});
		});
	
	});
</script>

<script>
	$(document).ready(function(){


/*		$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		
		$(".ajax").colorbox();
		
		$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});

		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});*/
		
		$(".inline").colorbox({inline:true, width:"50%"});

	});
</script>