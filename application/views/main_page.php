<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<title>RideLine</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?=base_url()?>assets\logo\favicon.ico">


	<style>

.image-wrapper {
  width: 100%;
  height: 0;
  padding-bottom: 100%;
  position: relative;
  overflow: hidden;
}

.image-wrapper img {
  /* width: 100%;
  height: 100%; */
  object-fit: cover;
  object-position: center;

}


		.product_image img {
			max-width: 100%;
			max-height: 200px;
			object-fit: contain;
		}

		.btn-custom {
  background-color: #F8981E;
  color: #000;
  font-weight:bold;
}
	</style>

<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/main.css" media="all">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all"> -->

<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/bootstrap4/bootstrap.min.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/animate.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/categories_styles.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/categories_responsive.css" media="all">


</head>

<body>


	<div class="super_container">

		<!-- Header -->

		<header class="header trans_300">


			<!-- Main Navigation -->

			<div class="main_nav_container">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-right">
							<div class="logo_container">
								<!-- <a href="#">colo<span>shop</span></a> -->
								<img src="<?= base_url(); ?>assets/logo/rideline.png" alt="..." height="36">
							</div>
							<nav class="navbar">
								<ul class="">
									<li class="">
									<a href="" class="btn btn-sm btn-warning"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</header>

		<div class="fs_menu_overlay"></div>

		<div class="container product_section_container">
			<div class="row">
				<div class="col product_section clearfix">

					<!-- Breadcrumbs -->

					<div class="breadcrumbs d-flex flex-row align-items-center">
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>
						</ul>
					</div>



					<div class="sidebar">
  <div class="sidebar_section">
    <div class="sidebar_title">
      <h5>Product Category</h5>
    </div>
    <ul class="sidebar_categories">
      <li class="sidebar_category active"><a href="#" id="default" onclick="tampil_data_barang('Mobil', this)">Mobil</a></li>
      <li class="sidebar_category"><a href="#" onclick="tampil_data_barang('Motor', this)">Motor</a></li>
      <li class="sidebar_category"><a href="#" onclick="tampil_data_barang('Aksesoris', this)">Accessories</a></li>
    </ul>
  </div>
</div>


					<!-- Main Content -->

					<div class="main_content">

						<!-- Products -->

						<div class="products_iso">
							<div class="row">
								<div class="col">

									<!-- Product Sorting -->

									<div class="product_sorting_container product_sorting_container_top">
										<ul class="product_sorting">
											<li>
												<span class="type_sorting_text">Default Sorting</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_type" id="sorting_options">
													<li class="type_sorting_btn" data-sort="" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
													<li class="type_sorting_btn" data-sort="price" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
													<li class="type_sorting_btn" data-sort="Tahun_Asc" data-isotope-option='{ "sortBy": "Tahun_Asc" }'><span>Tahun Terendah</span></li>
													<li class="type_sorting_btn" data-sort="Tahun_Desc" data-isotope-option='{ "sortBy": "Tahun_Desc" }'><span>Tahun Tertinggi</span></li>
												</ul>
											</li>
											<li>
												<span>Show</span>
												<span class="num_sorting_text">6</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_num">
													<li class="num_sorting_btn"><span>6</span></li>
													<li class="num_sorting_btn"><span>12</span></li>
													<li class="num_sorting_btn"><span>24</span></li>
												</ul>
											</li>
										</ul>
										<div class="pages d-flex flex-row align-items-center">
											<div class="page_current">
												<span>1</span>
												<ul class="page_selection">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
												</ul>
											</div>
											<div class="page_total"><span>of</span> 3</div>
											<div id="next_page" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
										</div>

									</div>

									<!-- Product Grid -->

									<div class="container">
  <div class="row" id="grid-product">
    
</div>	


									<div class="product_sorting_container product_sorting_container_bottom clearfix">
										<ul class="product_sorting">
											<li>
												<span>Show:</span>
												<span class="num_sorting_text">04</span>
												<i class="fa fa-angle-down"></i>
												<ul class="sorting_num">
													<li class="num_sorting_btn"><span>01</span></li>
													<li class="num_sorting_btn"><span>02</span></li>
													<li class="num_sorting_btn"><span>03</span></li>
													<li class="num_sorting_btn"><span>04</span></li>
												</ul>
											</li>
										</ul>
										<span class="showing_results">Showing 1–3 of 12 results</span>
										<div class="pages d-flex flex-row align-items-center">
											<div class="page_current">
												<span>1</span>
												<ul class="page_selection">
													<li><a href="#">1</a></li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li>
												</ul>
											</div>
											<div class="page_total"><span>of</span> 3</div>
											<div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Benefit -->
		<!--
	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

		<!-- Newsletter -->

		<!-- <div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
						<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
						<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
					</div>
				</div>
			</div>
		</div>
	</div> -->

		<!-- Footer -->

		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
							<!-- <ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul> -->
						</div>
					</div>
					<div class="col-lg-6">
						<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="footer_nav_container">
							<div class="cr">©2023 All Rights Reserverd. RidelLine</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>


</body>



<script src="<?= base_url(); ?>assets/js/jquery-3.6.3.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url(); ?>assets/js/categories_custom.js"></script>
<script src="<?= base_url(); ?>assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url(); ?>assets/plugins/easing/easing.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?= base_url(); ?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?= base_url(); ?>assets/styles/bootstrap4/bootstrap.min.js"></script>


<script>

	function test(){

		console.log("aduh")
	}

	tampil_data_barang("Mobil",$("#default")[0]);


	$(document).ready(function() {
  $('.type_sorting_btn').click(function() {
    const dataSort = $(this).data('sort');
    if (dataSort === 'name') {
      let result = $('.product-item').sort(function(a, b) {
        let contentA = $(a).data('name');
        let contentB = $(b).data('name');
        return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
      });

      $('.product-grid').empty();
      $('.product-grid').append(result);
    } else if (dataSort === 'price') {
      let result = $('.product-item').sort(function(a, b) {
        let contentA = parseInt($(a).data('price'));
        let contentB = parseInt($(b).data('price'));
        return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
      });

      $('.product-grid').empty();
      $('.product-grid').append(result);
    }
  });
});

	// $(document).ready(function() {
	// 	$('.type_sorting_btn').click(function() {
	// 		const dataSort = $(this).data('sort');
	// 		// $('.product-grid').html('');
	// 		if (dataSort === 'name') {
	// 			let result = $('.product-item').sort(function(a, b) {
	// 				let contentA = $(a).data('name');
	// 				let contentB = $(b).data('name');
	// 				return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
	// 			});

	// 			$('.product-grid').html(result);

	// 		} else if (dataSort === 'price') {
	// 			let result = $('.product-item').sort(function(a, b) {
	// 				let contentA = parseInt($(a).data('price'));
	// 				let contentB = parseInt($(b).data('price'));
	// 				return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
	// 			});

	// 			$('.product-grid').html(result);
	// 		}

	// 	});
	// });

	function tampil_data_barang(param, elem, kategori, sort) {

		// console.log("elem",elem)


		var urlAll = 'GetItem'


		$('.sidebar_categories li').removeClass('active');
  		$('.sidebar_categories li span').remove(); // hapus elemen yang ada sebelumnya
  		$(elem).parent().addClass('active');
  		$(elem).prepend('<span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>');


		console.log("test", param)
		$.ajax({
			type: 'POST',
			url: urlAll,
			async: false,
			data : {postdata : param},
			dataType: 'json',
			success: function(data) {
				var products = data.Item;
console.log("products",products)

			var productItems = "";
$('#grid-product').empty(); // menghapus data sebelumnya
$.each(products, function(index, product) {
    var productBubble = "";
    // if (product.isNew) {
    //     productBubble = '<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>';
    // }

	var productItem =  '<div class="col-sm"> ' +
					'<div class="card" style="width: 16rem; margin-top : 2rem;">' +
	'<div class="image-wrapper">'+
					'<img class="img-fluid rounded thumbnail-image" src="<?= base_url(); ?>assets/images/'+param+'/'+ ((param=="Aksesoris") ? product.namaItem : product.nopol) + '/' + ((param=="Aksesoris") ? product.foto1 : product.fotodepan) + '" alt="' + product.namaItem + '">' +	
'</div>'+
					'<div class="card-body"> ' +
    '<h5 class="card-title"><span class="new-price">Rp. ' + formatRupiah(product.harga) + '</span></h5> ' +
    '<p class="card-text"><h5 class="dress-name">' + product.merk + ' ' + product.namaItem + ' ' + product.namaItem + (product.tahun ? ' ' + product.tahun : '') + '</h5></p> ' +
    '<a href="#" class="btn btn-primary">Go somewhere</a>' +
  '</div>' +
  '</div>' +
'</div>' ;


    // var productItem = '<div class="col-md-3">' +
    //     '<div class="card">' +
    //     '<div class="image-container">' +
    //     '<div class="first">' +
    //     '<div class="d-flex justify-content-between align-items-center">' +
    //     '</div>' +
    //     '</div>' +
    //     // '<img src="https://i.imgur.com/8JIWpnw.jpg" class="img-fluid rounded thumbnail-image">' +
	// 	'<img class="img-fluid rounded thumbnail-image" src="<?= base_url(); ?>assets/images/'+param+'/'+ ((param=="Aksesoris") ? product.namaItem : product.nopol) + '/' + ((param=="Aksesoris") ? product.foto1 : product.fotodepan) + '" alt="' + product.namaItem + '">' +
    //     '</div>' +
    //     '<div class="product-detail-container p-2">' +
    //     '<div class="d-flex justify-content-between align-items-center">' +
    //     '<h5 class="dress-name">' + product.merk + ' ' + product.namaItem + ' ' + product.namaItem + (product.tahun ? ' ' + product.tahun : '') + '</h5>' +
    //     '<div class="d-flex flex-column mb-2">' +
    //     '<span class="new-price">Rp. ' + formatRupiah(product.harga) + '</span>' +
    //     '<small class="old-price text-right">$5.99</small>' +
    //     '</div>' +
    //     '</div>' +
    //     '<div class="d-flex justify-content-between align-items-center pt-1">' +
    //     '</div>' +
    //     '<div class="d-flex justify-content-center align-items-center pt-1">' +
    //     '<div>' +
    //     '<a href="welcome/detailProduct/' + product.id + '/' + param + '" class="btn btn-sm btn-warning ml-2">Detail</a>' +
    //     '</div>' +
    //     '</div>' +
    //     '</div>' +
    //     '</div>' +
    //     '</div>';

    productItems += productItem;
});

$('#grid-product').append(productItems);

			},
			error: function(error) {
				console.log(error);
			}
		});
	}


	function formatRupiah(angka) {
        var reverse = angka.toString().split('').reverse().join('');
        var ribuan = reverse.match(/\d{1,3}/g);
        ribuan = ribuan.join('.').split('').reverse().join('');
        return ribuan;
    }


	$('#sorting_options').on('click', '.type_sorting_btn', function() {
    var sortingOption = $(this).data('sort'); // Ambil nilai data-sort dari elemen yang diklik



	var str = "Tahun_Asc";
	var parts = sortingOption.split("_");

	var kat = parts[0]
	var sort = 	parts[1]
	console.log(parts[0]); // Output: "Tahun"
	console.log(parts[1]); // Output: "Asc"



	console.log("Sorting", sortingOption)
    // Kirim data sorting ke controller menggunakan AJAX
    $.ajax({
        url: 'GetItem/MobilSorting',
        type: 'POST',
        data: {
            kat : kat,
			sort : sort
        },
        success: function(response) {
            // Lakukan tindakan setelah menerima respons dari controller
        },
        error: function(xhr, status, error) {
            // Tangani error jika terjadi
        }
    });
});





</script>

