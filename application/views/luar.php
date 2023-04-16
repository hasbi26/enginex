<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<html lang="en">

<head>
	<title>Colo Shop Categories</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<style>
		.product_image img {
			max-width: 100%;
			max-height: 200px;
			object-fit: contain;
		}
	</style>


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
								<a href="#">colo<span>shop</span></a>
							</div>
							<nav class="navbar">
								<ul class="">
									<li class="">
										<a href="" class="btn btn-sm btn-danger"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a>
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
							<li><a href="index.html">Home</a></li>
						</ul>
					</div>

					<!-- Sidebar -->

					<div class="sidebar">
						<div class="sidebar_section">
							<div class="sidebar_title">
								<h5>Product Category</h5>
							</div>
							<ul class="sidebar_categories">
								<li><a href="#">Mobil</a></li>
								<li class="active"><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>Motor</a></li>
								<li><a href="#">Accessories</a></li>
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
												<ul class="sorting_type">
													<li class="type_sorting_btn" data-sort="" data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span></li>
													<li class="type_sorting_btn" data-sort="price" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
													<li class="type_sorting_btn" data-sort="name" data-isotope-option='{ "sortBy": "name" }'><span>Product Name</span></li>
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

									<div class="product-grid">

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
							<ul class="footer_nav">
								<li><a href="#">Blog</a></li>
								<li><a href="#">FAQs</a></li>
								<li><a href="contact.html">Contact us</a></li>
							</ul>
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
							<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>


</body>



<script src="<?= base_url(); ?>assets/js/jquery-3.6.3.min.js"></script>

<script src="<?= base_url(); ?>assets/js/categories_custom.js"></script>
<script src="<?= base_url(); ?>assets/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?= base_url(); ?>assets/plugins/easing/easing.js"></script>
<script src="<?= base_url(); ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="<?= base_url(); ?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?= base_url(); ?>assets/styles/bootstrap4/bootstrap.min.js"></script>


<script>
	tampil_data_barang();

	$(document).ready(function() {
		$('.type_sorting_btn').click(function() {
			const dataSort = $(this).data('sort');
			// $('.product-grid').html('');
			if (dataSort === 'name') {
				let result = $('.product-item').sort(function(a, b) {
					let contentA = $(a).data('name');
					let contentB = $(b).data('name');
					return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
				});
				
				$('.product-grid').html(result);

			} else if (dataSort === 'price') {
				let result = $('.product-item').sort(function(a, b) {
					let contentA = parseInt($(a).data('price'));
					let contentB = parseInt($(b).data('price'));
					return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
				});

				$('.product-grid').html(result);
			}

		});
	});

	function tampil_data_barang() {
		$.ajax({
			type: 'ajax',
			url: 'GetItem',
			async: false,
			dataType: 'json',
			success: function(data) {

				console.log("hehe", data.Item)

				var products = data.Item;
				var productItems = "";
				// <img src="<?= base_url(); ?>assets/test/images/product_2.png" alt="">

				$.each(products, function(index, product) {
					var productBubble = "";
					if (product.isNew) {
						productBubble = '<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>';
					}

					var productItem = '<div class="product-item women" data-name="' + product.merk + ' ' + product.namaItem + '" data-price="' + product.harga + '">' +
						'<div class="product product_filter">' +
						'<div class="product_image">' +
						'<img src="<?= base_url(); ?>assets/images/' + product.fotodepan + '" alt="' + product.namaItem + '">' +
						'</div>' +
						'<div class="favorite"></div>' +
						productBubble +
						'<div class="product_info">' +
						'<h6 class="product_name"><a href="welcome/detailProduct/' + product.id + '">' + product.merk + ' ' + product.namaItem + ' ' + product.tahun + '</a></h6>' +
						'<div class="product_price">Rp. ' + (product.harga / 1000).toFixed(3) + '</div>' +
					'</div>' +
					'</div>' +
					'<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>' +
					'</div>';

					productItems += productItem;
				});

				// Append product items to the product grid container
				$('.product-grid').append(productItems);




			},
			error: function(error) {
				console.log(error);
			}
		});
	}




	// $.ajax({
	//   url: "url-to-your-api",
	//   method: "GET",
	//   success: function(response) {
	//     var products = response.products;
	//     var productItems = "";

	//     $.each(products, function(index, product) {
	//       var productBubble = "";
	//       if (product.isNew) {
	//         productBubble = '<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>';
	//       }

	//       var productItem = '<div class="product-item women">' +
	//         '<div class="product product_filter">' +
	//         '<div class="product_image">' +
	//         '<img src="' + product.image + '" alt="' + product.name + '">' +
	//         '</div>' +
	//         '<div class="favorite"></div>' +
	//         productBubble +
	//         '<div class="product_info">' +
	//         '<h6 class="product_name"><a href="single.html">' + product.name + '</a></h6>' +
	//         '<div class="product_price">' + product.price + '</div>' +
	//         '</div>' +
	//         '</div>' +
	//         '<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>' +
	//         '</div>';

	//       productItems += productItem;
	//     });

	//     // Append product items to the product grid container
	//     $('.product-grid').append(productItems);
	//   },
	//   error: function(error) {
	//     console.log(error);
	//   }
	// });
</script>
