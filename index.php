<?php
$message = '';
$t=time();
if(isset($_POST['name'])) {
	$arr = array(
		'properties' => array(
			array(
				'property' => 'firstname',
				'value' => $_POST['name']
			),
			array(
				'property' => 'phone',
				'value' => $_POST['phone']
			),
			array(
				'property' => 'address',
				'value' => $_POST['address']
			),
			array(
				'property' => 'quantity',
				'value' => $_POST['quantity']
			),
			array(
				'property' => 'ghi_chu',
				'value' => $_POST['ghi_chu']
			),
			array(
				'property' => 'hs_lead_status',
				'value' => "NEW"
			),
			array(
				'property' => 'ten_san_pham',
				'value' => "Titan gel Nga"
			)
		)
	);

	$post_json = json_encode($arr);
	$endpoint = "https://api.hubapi.com/contacts/v1/contact/?hapikey=e988575f-7359-4f0a-a128-4a9e0b9c3fa4";
	$ch = @curl_init();
	@curl_setopt($ch, CURLOPT_POST, true);
	@curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
	@curl_setopt($ch, CURLOPT_URL, $endpoint);
	@curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	@curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = @curl_exec($ch);
	$status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
	$curl_errors = curl_error($ch);
	@curl_close($ch);
	if ($status_code == 200) {
		header('Location: thank.php');
		die();
	}else{
		$message = 'Lỗi hệ thống';
	}
}
?>

<!DOCTYPE html>
<!-- saved from url=(0020)http://titangel.com/ -->
<html class="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="Titan Gel, Gel Titan, tăng kích thước Dương Vật, làm to và dài Dương Vật, kéo dài thời gian quan hệ">
	<meta name="description" content="Titan Gel kem làm Dương Vật to và dài, Titan Gel tăng kích thước Dương Vật, kéo dài thời gian quan hệ một cách tự nhiên, Nhà cung cấp Titan Gel Nga ở Việt Nam">
	<meta name="viewport" content="width=device-width">
	<title>Titan Gel làm to, dài Dương Vật và kéo dài thời gian quan hệ một cách tự nhiên</title>
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 -->
 	<script type="text/javascript" async="" src="./index_files/watch.js"></script><script src="./index_files/jquery.min.js"></script>
	<link rel="stylesheet" href="./index_files/slick.css" type="text/css" media="screen">
	<link rel="stylesheet" href="./index_files/slick-theme.css" type="text/css" media="screen">
	<script type="text/javascript" src="./index_files/slick.min.js"></script>
	<script type="text/javascript" src="./index_files/jquery.validate.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./index_files/jquery.countdown.css">
	<script type="text/javascript" src="./index_files/jquery.countdown.js"></script>
    <script type="text/javascript" src="./index_files/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="./index_files/jquery.fancybox.css" media="screen">
	<link rel="stylesheet" type="text/css" href="./index_files/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="./index_files/style.css">
	<link type="text/css" rel="stylesheet" href="./index_files/style(1).css">

	<script type="text/javascript" src="./index_files/init.js"></script>
    <!--[if IE 9]>
	<link rel="stylesheet" type="text/css" href="css/ie9.css">
	<script type="text/javascript" src="js/placeholder.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="oldbrowser/css/jquery.reject.css"/>
	<script type="text/javascript" src="oldbrowser/jquery.reject.js"></script>
	<script type="text/javascript" src="oldbrowser/old.js"></script>
	<![endif]-->
	<style type="text/css">.fancybox-margin{margin-right:15px;}</style>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-86937922-1', 'auto');
		ga('require', 'linkid', 'linkid.js');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
			n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
			document,'script','https://connect.facebook.net/en_US/fbevents.js');
		fbq('init', '1840988602805891', {
			em: 'insert_email_variable,'
		});
		fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
				   src="https://www.facebook.com/tr?id=1840988602805891&ev=PageView&noscript=1"
		/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->
</head>

	<!-- Google Code for Gel Titan Conversion Page -->
	<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 1020901928;
		var google_conversion_language = "en";
		var google_conversion_format = "3";
		var google_conversion_color = "ffffff";
		var google_conversion_label = "4O-JCOTeum0QqPTm5gM";
		var google_remarketing_only = false;
		/* ]]> */
	</script>
	<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
	</script>
	<noscript>
		<div style="display:inline;">
			<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1020901928/?label=4O-JCOTeum0QqPTm5gM&amp;guid=ON&amp;script=0"/>
		</div>
	</noscript>

<body>
<div class="wrapper">
	<div class="head_top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="head_top_right">
						<div class="tell_top"></div>
						<div class="slogan_bott select_no"> Titan Gel - Kem №1 làm tăng kích thước Dương Vật, kéo dài thời gian quan hệ một cách tự nhiên</div>
					</div>
					<div class="row_logo">
						<a href="http://titangelrussia.com/" class="logo_top">
							<img src="./index_files/logo_top.png" alt="Tăng kích thước Dương Vật tại nhà, kéo dài thời gian quan hệ">
						</a>
					</div>
					<div class="timer_wrap timer_hidd">
						<div class="timer_block">
							<div class="title_timer">Thời gian còn lại để mua:</div>
							<div class="timer timer_top">
								<div id="countdown" class="countdownHolder">
									<span class="countDays">
										<span class="position">
										<span class="digit static" style="top: 0px; opacity: 1;">1</span>
										</span>
										<span class="position">
											<span class="digit static" style="top: 0px; opacity: 1;">3</span>
										</span>
									</span>
									<span class="countDiv countDiv0">

								</span>
								</div>
							</div>
							<div class="title_timer_bott">Để được giảm giá 50%</div>
						</div>
					</div>
				</div>
			</div> <!--row-->
		</div>  <!--container-->
	</div><!--head_top-->
	<div class="wrap_head_menu">
		<div class="head_menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="block-menu_nav">
							<div class="block-toggle_nav">
								<div class="toggle_nav">
									<div class="toggle" id="toggle">
										<div class="one"></div>
										<div class="two"></div>
										<div class="three"></div>
									</div>
								</div>
								<div class="togle-name">Thực đơn</div>
							</div><!--block-toggle_nav-->
							<ul class="menu  menu_top" id="menu1" style="display: block;">
								<li class="opened">
									<a href="#item1">Thành phần và tác dụng</a>
								</li>
								<li>
									<a href="#item2">Hướng dẫn sử dụng</a>
								</li>
								<li>
									<a href="#item3">Ý kiến chuyên gia</a>
								</li>
								<li>
									<a href="#item0">Đặt hàng</a>
								</li>
							</ul>
						</div>
					</div>
				</div> <!--row-->
			</div>  <!--container-->
		</div><!--head_menu-->
	</div><!--wrap_head_menu-->
	
	<div class="banner_wrap">
		<div class="container">
			<div class="row">

				<div class="col-xs-12 block_product_top">
					<div class="timer_r timer_block timer_top">
						<div class="title_timer">Thời gian còn lại để mua:</div>
						<div class="timer">
							<div id="countdown3" class="countdownHolder">
								<span class="countDays">
									<span class="position">
									<span class="digit static" style="top: 0px; opacity: 1;">8</span>
								</span>
									<span class="position">
										<span class="digit static" style="top: 0px; opacity: 1;">8</span>
									</span>
								</span>
								<span class="countDiv countDiv0">
								</span>

							</div>
						</div>
						<div class="title_timer_bott">Để được giảm giá 50%</div>
					</div>
					<div class="product_top"><img src="./index_files/product.png" alt="/"></div>
				</div>

				<div class="col-xs-12 col-md-6 banner-right">
					<div class="form_wrap_bann">
					<div class="title_form" id="item0">Để đặt hàng chỉ cần điền vào mẫu đơn</div>
							<!--noindex-->

						<form action="index.php#item0" method="post" id="feedback" class="feedback orderformcdn orderformcdn_nonds" name="feedback">
							<div class="order_form" style="color:#000 !important;">
								<?php if(isset($message)){ ?>
									<p style="color: red; text-align: center;"> <?php echo $message; ?></p>
								<?php } ?>

								<div class="block_form">
									<input name="name" value="" placeholder="Họ và tên *" required="" oninvalid="setCustomValidity('Họ và tên không để trống')" oninput="setCustomValidity('')" type="text">
								</div>

								<div class="block_form">
									<input id="phone" name="phone" value="" placeholder="Số điện thoại *" required="" pattern="^[0-9]{10,12}$" oninvalid="setCustomValidity('Số điện thoại không đúng')" oninput="setCustomValidity('')" type="text">
								</div>

								<div class="block_form">
									<textarea id="address" name="address" rows="2" cols="0" placeholder="Địa chỉ *" style="width: 100%;padding: 10px;border: #888 1px solid; border-radius: 5px;" required="" oninvalid="setCustomValidity('Địa chỉ không để trống')" oninput="setCustomValidity('')"></textarea>
								</div>

								<div class="block_form">
									<select name="quantity" id="quantity" style="height:35px; width: 100%; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 1px solid rgb(136, 136, 136); border-radius: 5px;">
										<option value="1">
											1 Tuýp
										</option>
										<option value="2">
											2 Tuýp
										</option>
										<option value="3">
											3 Tuýp
										</option>
										<option value="4">
											4 Tuýp
										</option>
										<option value="5">
											5 Tuýp
										</option>
										<option value="6">
											Mua sỉ
										</option>
									</select>
								</div>
								<p>Hotline: <strong style="font-size: 23px;">01635 243 892</strong></p>
								<p>Giá: <span style="font-size: 20px;color: red; text-decoration: line-through;">1.500.000</span> - <b>750.000 đ</b></p>
								<button class="btn btn_sm" type="submit">ĐẶT HÀNG</button>
								<div class="clear"></div>
							</div>
						</form>

					</div>
			    </div>
					
				<div class="col-xs-12 col-md-6 banner-left">
					<div class="banner_title-l1">
						Cam kết 100% hiệu quả:
					</div>
					<ul class="banner_ul select_no">
						<li><i class="icon icon1"></i>Một lần duy nhất trong ngày</li>
						<li><i class="icon icon2"></i>Phát triển một cách tự nhiên</li>
						<li><i class="icon icon3"></i>Kéo dài thời gian quan hệ</li>
						<li><i class="icon icon4"></i>Cải thiện độ cương cứng</li>
						<li><i class="icon icon5"></i>Tăng ham muốn tình dục</li>
						<li><i class="icon icon6"></i>Tăng kích thước lên 5-7 см</li>
						<li><i class="icon icon7"></i>Phê duyệt bởi поpнo-звездами</li>
					</ul>
					<div class="banner_title-l2">
						<span class="number_bann">Mua 2/</span>
						<span class="garant_bann"> Tặng 1</span>
					</div>
				</div>
			</div>
		</div>
	</div>   <!--banner_wrap-->
	<div class="section_middle">
		<div class="section1">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="wrap_slider_decript clearfix">
							<div class="slider_decript"><div class="media">
									<div class="img_media">
										<img src="./index_files/descript1.png" alt="/">
									</div>
									<div class="media-body select_no">
										Kéo dài thời gian yêu 1 cách rõ rệt
									</div>
								</div><div class="media">
									<div class="img_media">
										<img src="./index_files/descript2.png" alt="/">
									</div>
									<div class="media-body select_no">
										Tăng chiều dài và chu vi dương vật
									</div>
								</div><div class="media">
									<div class="img_media">
										<img src="./index_files/descript3.png" alt="/">
									</div>
									<div class="media-body select_no">
										Tăng khả năng cương cứng
									</div>
								</div><div class="media">
									<div class="img_media">
										<img src="./index_files/descript4.png" alt="/">
									</div>
									<div class="media-body select_no">
										Đem lại cảm giác về độ cực khoái
									</div>
								</div><div class="media">
									<div class="img_media select_no">
										<img src="./index_files/descript5.png" alt="/">
									</div>
									<div class="media-body select_no">
										Sử dụng thường xuyên làm tăng số lần yêu
									</div>
								</div></div><!--slider_decript-->
						</div>
					</div>
				</div>
			</div>
		</div><!--section1-->
		<div class="section2">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="wrap_shad_block">
							<div class="shad_block shad_block_mob">
								<div class="att_block_imag">
									<div class="att_block_icon"><img src="./index_files/icon_att.png"></div>
								</div>
								<div class="att_block_text">
									<div class="att_title">Cảnh báo!</div>
									<p class="select_no">
										Trang web của chúng tôi là nhà cung cấp Titan Gel Nga ở Việt Nam. Cảnh báo các sản phẩm Titan Gel bên ngoài - nó không phải là hoàn toàn phù hợp với các Bạn, Nó không những làm bạn mất tiền mà còn ảnh hưởng đến sức khỏe của bạn, nói cách khác đó là hàng kém chất lượng, không cho kết quả mong muốn.
									</p>
									<p class="select_no">
										Sự nhầm lẫn của đa số khách hàng là mua nhầm phải Titan Gel giả, kém chất lượng mà nghĩ đó là Titan Gel, khi sử dụng không hiệu quả lại nghĩ Titan Gel lừa
									</p>
									<p class="str-font select_no">
										Hãy coi chừng hàng giả và chỉ có thể được đặt trên trang web của chúng tôi để có được một chất lượng 100% với giá cả phải chăng!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--section2-->
		<div class="section3">
			<div class="container">

				<div class="row">
					<div class="col-xs-12">
					<h2 id="item1" style="border-bottom: 3px solid #eaeaea;">TITAN GEL - biện pháp tự nhiên cho sức mạnh nam tính</h2>
					<p class="str-font select_no">
						<strong>Titan Gel</strong> dẫn đầu thị trường công nghệ tăng thời gian quan hệ tình dục và kích thước dương vật, đảm bảo tăng kích thước của nó lên đến 3-5 cm. Nó là một sản phẩm an toàn mà không gây phản ứng phụ và dị ứng, không dẫn đến sự xuất hiện của tác dụng gây nghiện, vì trong thành phần của nó - có các nguyên liệu tự nhiên đã được phê duyệt bởi các bác sĩ.
					</p>
						<div class="wrap_compos_block">
							<div class="comp_center"><img src="./index_files/compos_center.png" alt="/"></div>
							<div class="slider_compos"><div class="block_comp block_comp1">
									<div class="img_comp">
										<img src="./index_files/compos1.png" alt="/">
									</div>
									<div class="body_comp">
										<div class="title_comp">Thistle</div>
										<p>Tăng mức testosterone</p>
									</div>
								</div><div class="block_comp block_comp2">
									<div class="img_comp">
										<img src="./index_files/compos2.png" alt="/">
									</div>
									<div class="body_comp">
										<div class="title_comp">Extract juice lichen</div>
										<p>Tăng cường cơ bắp</p>
									</div>
								</div><div class="block_comp block_comp3">
									<div class="img_comp">
										<img src="./index_files/compos3.png" alt="/">
									</div>
									<div class="body_comp">
										<div class="title_comp">Peruvian Maca</div>
										<p>Trị chứng yếu sinh lý</p>
									</div>
								</div><div class="block_comp block_comp4">
									<div class="img_comp">
										<img src="./index_files/compos4.png" alt="/">
									</div>
									<div class="body_comp">
										<div class="title_comp">Goryanka</div>
										<p>Có các tính chất của <span>Viagra</span></p>
									</div>
								</div></div><!--slider_compos-->
						</div>
						<div class="block_text">
							<p class="select_no">
								Mua Titan Gel - là bước đầu tiên trong việc giải quyết một vấn đề mà nhiều phụ nữ than phiền(cụ thể là kích thước không đủ để mang đến cực khoái của đối tác của bạn). Kem Titan gel sẽ giúp tăng đáng kể kích thước dương vật và mang đến cho bạn cơ hội để làm cho cuộc sống tình dục của bạn sáng hơn nhiều, quan hệ tình dục sẽ đem lại cho bạn sự hài lòng đến kinh ngạc và đạt độ cực khoái với cường độ cao nhất, bền và độc đáo, có thể thay đổi cuộc sống của bạn mãi mãi!
							</p>
							<div class="hidden_text" id="hidd1" style="display: inline;">
							<p class="select_no">
								Titan Gel Nó sẽ mang đến cho bạn sự tự tin, luôn sẵn sàng để yêu và làm đối tác hài lòng! Loại kem này sẽ cho một kết quả mà chắc chắn sẽ là một nguyên nhân của nam giới tự hào. Kích thước mới sẽ ở lại với bạn cho cuộc sống, ngay cả sau khi chấm dứt việc sử dụng nó. Để chở thành một người đàn ông thực thụ hãy đặt hàng trên trang web của chúng tôi. Chúc may mắn và kích thước lớn!
							</p>
							<p>
							
							</p>
							</div>
						</div>
						<h2>Kem<span> Titan Gel</span> Nga cho kết quả 100% </h2>
						<div class="font-title3"></div>
						<div class="block_text">
							<p>
							
							</p>
						</div>
					</div>
				</div>

				<div class="row wrap_imems_doc">
					<div class="col-md-4 shad_block_t">
						<div class="wrap_shad_block">
							<div class="shad_block">
								<div class="imem_doc_ins select_no">
									<span class="str-font">Triethanolamine</span> <br>- làm cho quan hệ tình dục kéo dài, trì hoãn xuất tinh.
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 shad_block_t">
						<div class="wrap_shad_block">
							<div class="shad_block">
								<div class="imem_doc_ins select_no">
									<span class="str-font">Thủy phân protein và axit amin</span> <br>- củng cố, tăng trưởng các mô và lưu thông máu.
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 shad_block_t">
						<div class="wrap_shad_block">
							<div class="shad_block">
								<div class="imem_doc_ins select_no">
									<span class="str-font">Hỗn hợp Elastin-collagen</span> <br>- làm tăng tính nhạy cảm, linh hoạt và độ cực khoái.
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<h2 id="item2" style="border-bottom: 3px solid #eaeaea;">Hướng dẫn sử dụng</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="item_ins">
							<div class="left_ins"><img src="./index_files/ins1.png"></div>
							<div class="right_ins">
								<div class="wr_inst_text">
									<div class="inst_text select_no">
										<span>1. Dầu mỡ: </span>
										Đầu tiên cho Titan gel vào lòng bàn tay sau đó bôi trơn Titan gel đều lên toàn bộ dương vật.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="item_ins">
							<div class="left_ins"><img src="./index_files/ins2.png"></div>
							<div class="right_ins">
								<div class="wr_inst_text">
									<div class="inst_text select_no">
										<span>2. Mức độ cương cứng:</span>
										Vuốt chậm và nhẹ từ đầu đến một nửa dương vật, cách tốt nhất để lưu thông máu.
									</div>
									<div class="inst_text select_no">
										<span>3. Tạo hình - "OK": </span>
										Trong khi Titan Gel kích thích sự lưu thông máu từ bên trong, tay bạn nắm chặt dương vật sao cho ngón cái và ngón trỏ tạo thành hình "OK" như trong hình
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-6">
						<div class="item_ins">
							<div class="left_ins"><img src="./index_files/ins3.png"></div>
							<div class="right_ins">
								<div class="wr_inst_text">
									<div class="inst_text select_no">
										<span>4. Bắt đầu:</span>
										Bắt đầu từ đầu dương vật bạn đưa tay về phía xương mu qua thân dương vật tới cuối.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="item_ins">
							<div class="left_ins"><img src="./index_files/ins4.png"></div>
							<div class="right_ins">
								<div class="wr_inst_text">
									<div class="inst_text select_no">
										<span>5. Di chuyển lên:</span>
										Siết vòng ngón tay, di chuyển và chậm dọc trục lên phía đầu dương vật,  điều quan trọng là để cung cấp áp suất tối ưu cho dương vật - theo hình, nhưng đồng thời không gây đau.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-6">
						<div class="item_ins">
							<div class="left_ins"><img src="./index_files/ins5.png"></div>
							<div class="right_ins">
								<div class="wr_inst_text">
									<div class="inst_text select_no">
										<span>6. Dừng ở phía trước của đầu:</span>
										Vươn tay tới đầu của dương vật, bạn cần phải dừng lại - đây là một bài tập lặp lại, mà nên kéo dài khoảng ba giây.
									</div>
									<div class="inst_text select_no">
										<span>7. Lặp lại:</span>
										Sau khi hoàn thành một chu kỳ, bạn lặp lại toàn bộ chuỗi các hành động trên kích thích thêm lưu lượng máu trong dương vật.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="block_inl_center">
							<a href="#item0" class="btn btn_sm">Đặt hàng</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<div class="w_font6"><h3>Tại sao Titanium Gel lại kết hợp tập thể dục?</h3></div>
						<div class="block_text_content">
							<p class="select_no">
							Cơ chế hoạt động là gì? Kem Titan gel có chứa các thành phần hoàn toàn an toàn mà được hấp thu qua da vào sâu bên trong dương vật, để thâm nhập sâu hơn mức độ tế bào, kích thích tiềm năng, tăng độ nhạy cảm và quan trọng nhất, thúc đẩy căng cơ quan hang của dương vật phát triển.
							</p>
							<div class="img_ins_center"><img src="./index_files/center_img.jpg"></div>
							<p class="select_no">
								Quá trình này - sự mở rộng của cơ hang, đẩy mạnh quá trình chao đổi chất tăng lưu lượng máu lưu thông trong dương vật, mà là chịu trách nhiệm cho các hoạt chất bằng Titan gel. Một mục tiêu tương tự như đã mô tả các bài tập.
							</p>
						</div>
						<div class="block_text_content  clearfix">
							<div class="foto_left"><img src="./index_files/ins4.jpg" alt=""></div>
							<p class="select_no">
								Nhưng chú ý là một bài tập riêng biệt(Tập không dùng Titan gel) kém hiệu quả, bài tập cung cấp một kết quả thấp.
							</p>
							<p class="select_no">
								Đặc biệt, để đạt được một hiệu ứng mà Titanium gel có thể cung cấp trong vài tuần bằng bạn để mất khoảng một năm. Vì vậy, lựa chọn khả thi nhất - để kết hợp hai kỹ thuật này là cách phát triển tốt nhất, nói theo nghĩa bóng, một cú đúp.
							</p>
							<p class="select_no">
								Thứ nhất, sử dụng Titan Gel kem cùng với bài tập thể dục bạn làm tăng kích thước dương vật và tạo thêm sức bền cho các thành phần trong dương vật.  Thứ hai, việc mở rộng các hang của dương vật có thể kiểm soát xuất tinh sớm, cải thiện độ nhạy cảm, tăng độ cương cứng đem lại cảm giác mạnh về độ cực khoái.
							</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 content">
						<h2 id="item3"  style="border-bottom: 3px solid #eaeaea;">Ý kiến chuyên gia</h2>
						<div class="block_text_doctor">
							<div class="block_doc">
								<div class="img_doc"><img src="images/work2.png" alt=""></div>
								<div class="doc_name">Dmitry Nazarenko</div>
								<div class="doc_titl">niếu học</div>
							</div>
							<div class="text_doc">
								<p class="select_no">
									"Đối với một người đàn ông, kích thước và sức mạnh của dương vật - .. Một chỉ số của sức mạnh, phẩm giá của nó và là niềm tự hào và là một tiêu chí quan trọng cho sự hình thành của lòng tự trọng Ngay cả đối với phụ nữ là quan trọng kích thước của dương vật nam và chất lượng kiểm soát bóng, những gì chúng ta có thể nói về những người đàn ông không may, không phải lúc nào thiên nhiên mang lại cho nó, tôi muốn, vì vậy thống kê hiện nay cho thấy có nhiều người đàn ông được rút ra để các bác sĩ phẫu thuật về kích thước dương vật.
								</p>
								<p class="select_no">
									Trước đây, tôi sẽ không ngăn cản họ khỏi nó, bởi vì tôi không thấy bất kỳ thay thế. Nhưng các chuyên gia đã phát triển các Titan Gel - phương tiện cho thấy kết quả ấn tượng. Do đó người bệnh của mình ngày hôm nay, tôi khuyên bạn nên dùng thuốc này. "
								</p>
							</div>
						</div>

						<div class="block_text_doctor">
							<div class="block_doc">
								<div class="img_doc"><img src="images/work3.png" alt=""></div>
								<div class="doc_name">Nikolai Sokolov</div>
								<div class="doc_titl">Tiết niệu, bác sĩ phẫu thuật</div>
							</div>
							<div class="text_doc">
								<p class="select_no">
									"Tôi đã thực hành phẫu thuật cho kích thước dương vật và nó là không có bí mật với tôi rằng nhiều người đàn ông trải qua một phức tạp thế kỷ 21 do kích thước nhỏ và muốn tăng dương vật của bạn thông qua việc sử dụng phẫu thuật.
								</p>
								<p class="select_no">
									Ngày càng có nhiều khách hàng của tôi đã bắt đầu sử dụng gel titan, ghi nhận những hiệu quả đáng kể trong một thời gian tương đối ngắn. Ngoài ra cho chúng nó không mang theo bất kỳ căng thẳng tinh thần (như phẫu thuật), mặc dù phải mất lâu hơn một chút. Tôi phải thừa nhận rằng phẫu thuật đã xuất hiện một đối thủ xứng đáng. "
								</p>

							</div>
						</div>

						<div class="block_text_doctor">
							<div class="block_doc">
								<div class="img_doc"><img src="images/work5.png" alt=""></div>
								<div class="doc_name">Roman Emelyanov</div>
								<div class="doc_titl">Tiết niệu, Andrology</div>
							</div>
							<div class="text_doc">
								<p class="select_no">
									"Tôi làm việc một bác sĩ tiết niệu trong hơn 30 năm. Và không bao giờ khuyên bệnh nhân của mình với các loại thuốc, thuốc mỡ và thuốc tăng dương vật. Ngay cả khi có một Gel Titan, tôi từ chối để chấp nhận nó. Hôm nay, 48% số bệnh nhân của tôi đã sử dụng gel này. Và khoảng một nửa . số đó - trên đề nghị của tôi, tôi đã làm sai, giống như nhiều đồng nghiệp của Titan của tôi - một tính năng bảo mật mà sẽ sớm thay thế hoạt động cũng có thể được lưu ý rằng các đồng nghiệp của tôi và tôi ghi lại các chỉ số hoạt động sau đây: "
								</p>
								<div class="st_li select_no"><p><span>1.</span>Nó được ghi nhận một sự gia tăng trong thể hang của dương vật</p></div>
								<div class="st_li select_no"><p><span>2.</span>Cố định dương vật đàn hồi của da tăng cường bằng 70-80%</p></div>
								<div class="st_li select_no"><p><span>3.</span>Nâng cao chất lượng cương cứng và tăng độ nhạy cảm</p></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div><!--section3-->
	</div><!--section_middle-->
	<div class="section4">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="block_inl_center">
						<div class="text_bann_center">
							Hơn 1,000,000 khách hàng hài lòng!
							<span>Kết quả lý tưởng trong 4 tuần!</span>
						</div>
					</div>
					<div class="block_inl_center">
						<a href="#item0" class="btn btn_sm">Đặt hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div><!--section4-->
	<div class="section5">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
				<h3>Kết quả sau khi sử dụng titan gel?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 graff">
					<div class="block_imag_gr">
						<div class="imag_gr">
							<img src="./index_files/gr1.png">
						</div>
						<div class="imag_gr">
							<img src="./index_files/gr2.png">
						</div>
						<div class="imag_gr">
							<img src="./index_files/gr3.png">
						</div>
					</div>
				</div>
				<div class="col-md-6 graff">
					<div class="item_gr">
						<span class="gr_v">2 tuần</span>
						<span class="gr_g select_no">
							Sự cương cứng sẽ trở nên vững chắc hơn và bền, độ nhạy dương vật tăng gấp đôi. Đường kính và chiều dài được tăng thêm 2 cm trong 2 tuần đầu tiên.
						</span>
					</div>
					<div class="item_gr">
						<span class="gr_v">3 tuần</span>
						<span class="gr_g select_no">
							Dương vật được gia tăng đáng kể về kích thước, nhận được một hình dạng giải phẫu chính xác. Quan hệ tình dục kéo dài lâu hơn 70%.
						</span>
					</div>
					<div class="item_gr">
						<span class="gr_v">4 tuần</span>
						<span class="gr_g select_no">
							Chiều cao 3-5 cm! Sex trở nên tốt hơn. Thời hạn của một cực khoái đang phát triển và nó đến nhanh hơn, trong khi duy trì kiểm soát.
						</span>
					</div>
				</div>
			</div>
		</div>
	</div><!--section5-->
	<div class="wrap_footer">
		<div class="container">
			<div class="prod_foot"><img src="./index_files/product_foot.png"></div>
			<div class="row">
				<div class="col-md-6 col-lg-5 col_foot foot_menu">
					<div class="slog_foot"><span class="sp_b">Một lần và cho tất cả!</span>
						<span class="font_b">Kết quả rõ rệt trong 4 tuần</span>
					</div>
					<div class="block-menu_nav">
						<div class="block-toggle_nav">
							<div class="toggle_nav">
								<div class="toggle" id="toggle2">
									<div class="one"></div>
									<div class="two"></div>
									<div class="three"></div>
								</div>
							</div>
							<div class="togle-name">Thực đơn</div>
						</div><!--block-toggle_nav-->
						<ul class="menu_bottom" id="menu2" style="display: block;">
							<li class="opened"><a href="#item1">Thành phần, tác dụng</a></li>
							<li><a href="#item2">Hướng dẫn sử dụng</a></li>
							<li><a href="#item3">Ý kiến chuyên gia</a></li>
							<li><a href="#item0">718 Đường Láng - HN</a></li>
							<li><a href="https://www.facebook.com/titangelrussia.comm/"  target="_blank">Facebook</a></li>
							<li><a href="https://www.youtube.com/watch?v=9Ci-noZzgqo" target="_blank">Bt1 - Stretching</a></li>
							<li><a href="https://www.youtube.com/watch?v=8s8KZx11M7E" target="_blank">Bt2 - jelqing</a></li>
							<li><a href="https://www.youtube.com/watch?v=2ozo7nv4Axg" target="_blank">Bt3 - Kegel</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-lg-5 col-lg-offset-2 col_foot">
					<div class="timer_wrap_foot">
						<div class="timer_block">
							<div class="title_timer">Thời gian còn lại để mua:</div>
							<div class="timer">
								<div id="countdown2" class="countdownHolder">
									<span class="countDays">
										<span class="position">
											<span class="digit static" style="top: 0px; opacity: 1;">9</span>
										</span>				<span class="position">
										<span class="digit static" style="top: 0px; opacity: 1;">0</span>
									</span></span>
									<span class="countDiv countDiv0"></span>

								</div>
							</div>
						</div>
					</div><!--timer_wrap_foot-->
					<div class="wrap_btn_foot">
						<a href="#item0" class="btn btn_bg">Đặt hàng</a>
					</div>
				</div>
				<div class="col-xs-12">
			
				</div>
		
				<div class="col-xs-6 col-md-6 bott_soc">
					<div class="social">
						<a href="https://www.facebook.com/titangelrussia.comm/" class="icon_f" target="_blank"></a>
						<a href="#item0" class="icon_tw"></a>
						<a href="#item0" class="icon_vk"></a>
						<a href="#item0" class="icon_ok"></a>
					</div>
				</div>
				<div class="col-xs-6 col-md-6  bott_copy">
					<div class="copy">
						© «Titan Gel» - Tăng kích thước Dương Vật
						<span>Trang web cung cấp Titan Gel ở Việt Nam</span>
					</div>
				</div>
	
			</div><!--row-->
		</div>	
	</div><!--wrap_footer-->

</div> <!-- wrapper -->
<!--noindex-->	
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34762115 = new Ya.Metrika({
                    id:34762115,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>&lt;div&gt;&lt;img src="https://mc.yandex.ru/watch/34762115" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript>
<!-- /Yandex.Metrika counter -->

<!--LiveInternet counter--><script type="text/javascript"><!--
new Image().src = "//counter.yadro.ru/hit?r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random();//--></script><!--/LiveInternet-->
<!--/noindex-->

</body>

</html>