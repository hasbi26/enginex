<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Single Product</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Colo Shop Template">
	<meta name="viewport" content="width=device-width, initial-scale=1">




	<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/bootstrap4/bootstrap.min.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/animate.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/categories_styles.css" media="all">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/styles/categories_responsive.css" media="all">


	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/single_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/styles/single_responsive.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/carousel-vertical.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/custom.css">

	<style>
		.owl-carousel .owl-item {
			transform: translateY(-50%) !important;
		}

		.owl-carousel {
			display: block !important;
			position: relative !important;
			overflow: hidden !important;
		}

		.owl-carousel .owl-stage {
			display: block !important;
			position: relative !important;
			width: 100% !important;
			height: 100% !important;
		}

		.owl-carousel .owl-stage-outer {
			position: relative !important;
			overflow: hidden !important;
			height: 100% !important;
		}

		.owl-carousel .owl-nav {
			position: absolute !important;
			top: 50% !important;
			transform: translateY(-50%) !important;
			width: 100% !important;
		}

		.owl-carousel .owl-nav button.owl-prev {
			position: absolute !important;
			left: 0 !important;
		}

		.owl-carousel .owl-nav button.owl-next {
			position: absolute !important;
			right: 0 !important;
		}
	</style>


</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header trans_300">

			<!-- Top Navigation -->

			<!-- <div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">free shipping on all u.s orders over $50</div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<li class="currency">
									<a href="#">
										usd
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="currency_selection">
										<li><a href="#">cad</a></li>
										<li><a href="#">aud</a></li>
										<li><a href="#">eur</a></li>
										<li><a href="#">gbp</a></li>
									</ul>
								</li>
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">French</a></li>
										<li><a href="#">Italian</a></li>
										<li><a href="#">German</a></li>
										<li><a href="#">Spanish</a></li>
									</ul>
								</li>
								<li class="account">
									<a href="#">
										My Account
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> -->

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

		<!-- Hamburger Menu -->

		<div class="hamburger_menu">
			<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="hamburger_menu_content text-right">
				<ul class="menu_top_nav">
					<li class="menu_item has-children">
						<a href="#">
							usd
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">cad</a></li>
							<li><a href="#">aud</a></li>
							<li><a href="#">eur</a></li>
							<li><a href="#">gbp</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							English
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#">French</a></li>
							<li><a href="#">Italian</a></li>
							<li><a href="#">German</a></li>
							<li><a href="#">Spanish</a></li>
						</ul>
					</li>
					<li class="menu_item has-children">
						<a href="#">
							My Account
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="menu_selection">
							<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
							<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
						</ul>
					</li>
					<li class="menu_item"><a href="#">home</a></li>
					<li class="menu_item"><a href="#">shop</a></li>
					<li class="menu_item"><a href="#">promotion</a></li>
					<li class="menu_item"><a href="#">pages</a></li>
					<li class="menu_item"><a href="#">blog</a></li>
					<li class="menu_item"><a href="#">contact</a></li>
				</ul>
			</div>
		</div>

		<div class="container single_product_container">
			<div class="row">
				<div class="col">

					<!-- Breadcrumbs -->

					<div class="breadcrumbs d-flex flex-row align-items-center">
						<ul>
							<li><a href="<?= base_url(); ?>">Home</a></li>
							<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"> <?= $item[0]['merk'] . ' ' . $item[0]['namaItem']; ?></i></a></li>
						</ul>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="row">
						<div class="col-sm-3">
							<div class="cv-carousel d-none d-sm-block">
								<?php $param = $this->uri->segment('4'); ?>
								<div class="item">
									<?php if ($param == 'Aksesoris') : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>">
									<?php else : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotobelakang'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotobelakang'] ?>">
									<?php endif; ?>

								</div>
								<div class="item">
									<!-- <img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>"> -->
									<?php if ($param == 'Aksesoris') : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto2'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto2'] ?>">
									<?php else : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>">
									<?php endif; ?>
								</div>
								<div class="item">
									<!-- <img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokiri'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokiri'] ?>"> -->
									<?php if ($param == 'Aksesoris') : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto3'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto3'] ?>">
									<?php else : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokiri'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokiri'] ?>">
									<?php endif; ?>

								</div>
								<div class="item">
									<?php if (isset($item[0]['fotokanan'])) : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokanan'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokanan'] ?>">
									<?php endif; ?>
								</div>
								<div class="item">
									<?php if (isset($item[0]['fotodalam1'])) : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodalam1'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodalam1'] ?>">
									<?php endif; ?>
								</div>
								<div class="item">
									<?php if (isset($item[0]['fotodalam2'])) : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodalam2'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodalam2'] ?>">
									<?php endif; ?>
								</div>
								<div class="item">
									<?php if (isset($item[0]['fotomesin1'])) : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotomesin1'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotomesin1'] ?>">
									<?php endif; ?>
								</div>

								<div class="item">
									<?php if (isset($item[0]['fotomesin2'])) : ?>
										<img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotomesin2'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotomesin2'] ?>">
									<?php endif; ?>
								</div>

							</div>
						</div>
						<div class="col-sm-9">
							<div class="single_product_image">

								<?php if ($param == 'Aksesoris') : ?>
									<!-- <img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>"> -->
									<div class="single_product_image_background d-none d-sm-block" style="background-image:url(<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>)"></div>
								<?php else : ?>
									<div class="single_product_image_background d-none d-sm-block" style="background-image:url(<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>)"></div>
								<?php endif; ?>


								<div id="carouselExampleIndicators" class="carousel slide d-sm" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<?php if ($param == 'Aksesoris') : ?>
												<!-- <img src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>" class="detail-img" data-image="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>"> -->
												<!-- <div class="single_product_image_background d-none d-sm-block" style="background-image:url(<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto1'] ?>)"></div> -->
												<img class="d-block w-100" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto2'] ?>" alt="First slide">
											<?php else : ?>
												<img class="d-block w-100" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotobelakang'] ?>" alt="First slide">
											<?php endif; ?>
										</div>
										<div class="carousel-item">
											<?php if ($param == 'Aksesoris') : ?>
												<img class="d-block w-100" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['namaItem'] ?>/<?= $item[0]['foto3'] ?>" alt="First slide">
											<?php else : ?>
												<img class="d-block w-100" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>" alt="Second slide">
											<?php endif; ?>
										</div>
										<div class="carousel-item">
											<?php if (isset($item[0]['fotokiri'])) : ?>
												<img class="d-block w-100" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokiri'] ?>" alt="Third slide">
											<?php endif; ?>
										</div>

										<div class="carousel-item">
											<?php if (isset($item[0]['fotokanan'])) : ?>
												<img class="d-block w-100" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokanan'] ?>" alt="Third slide">
											<?php endif; ?>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="single_product_pics">
						<div class="row">
							<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
								<div class="single_product_thumbnails">
									<ul class="owl-carousel owl-theme">
										<li><img src="<?= base_url(); ?>assets/images/<?= $item[0]['fotobelakang'] ?>" alt="" data-image="<?= base_url(); ?>assets/images/<?= $item[0]['fotobelakang'] ?>"></li>
										<li class="active"><img src="<?= base_url(); ?>assets/images/<?= $item[0]['fotodepan'] ?>" alt="" data-image="<?= base_url(); ?>assets/images/<?= $item[0]['fotodepan'] ?>"></li>
										<li><img src="<?= base_url(); ?>assets/images/<?= $item[0]['fotokiri'] ?>" alt="" data-image="<?= base_url(); ?>assets/images/<?= $item[0]['fotokiri'] ?>"></li>
										<li><img src="<?= base_url(); ?>assets/images/<?= $item[0]['fotokanan'] ?>" alt="" data-image="<?= base_url(); ?>assets/images/<?= $item[0]['fotokanan'] ?>"></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-9 image_col order-lg-2 order-1">

							</div>
						</div>
					</div> -->
				</div>
				<div class="col-lg-5">
					<div class="product_details">
						<div class="product_details_title">
							<!-- <h2>Pocket cotton sweatshirt</h2> -->
							<h2><?= $item[0]['merk'] . ' ' . $item[0]['namaItem']; ?></h2>

							<div class="product_price">Rp. <?= gettype($item[0]['harga']) === 'string' ? number_format((int) $item[0]['harga'], 0, ',', '.')  : $item[0]['harga'] ?></div>
							<!-- <?= print_r($item[0]) ?> -->
							<!-- <p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p> -->


							<div class="row mt-3">
								<div class="col-sm-12">
									<table class="table table-sm">

										<?php if (isset($item[0]['jenis'])) : ?>
											<tr>
												<td width="30%">Jenis</td>
												<td width="2">:</td>
												<td><?= $item[0]['jenis'] ?></td>
											</tr>
										<?php endif; ?>
										<tr>
											<td>Merk</td>
											<td>:</td>
											<td><?= $item[0]['merk'] ?></td>
										</tr>
										<?php if (isset($item[0]['model'])) : ?>
											<tr>
												<td>Model</td>
												<td>:</td>
												<td><?= $item[0]['model'] ?></td>
											</tr>
										<?php endif; ?>
										<?php if (isset($item[0]['volume_mesin'])) : ?>
											<tr>
												<td>Volume Mesin</td>
												<td>:</td>
												<td><?= $item[0]['volume_mesin'] ?></td>
											</tr>
										<?php endif; ?>

										<?php if (isset($item[0]['transmisi'])) : ?>
											<tr>
												<td width="30%">transmisi</td>
												<td width="2">:</td>
												<td><?= $item[0]['transmisi'] ?></td>
											</tr>
										<?php endif; ?>
										<!-- <tr>
											<td>Bahan Bakar</td>
											<td>:</td>
											<td><?= $item[0]['bahanbakar'] ?></td>
										</tr> -->
										<?php if (isset($item[0]['bahanbakar'])) : ?>
											<tr>
												<td width="30%">Bahan Bakar</td>
												<td width="2">:</td>
												<td><?= $item[0]['bahanbakar'] ?></td>
											</tr>
										<?php endif; ?>
										<?php if (isset($item[0]['warna'])) : ?>
											<tr>
												<td>Warna</td>
												<td>:</td>
												<td><?= $item[0]['warna'] ?></td>
											</tr>
										<?php endif; ?>
										<?php if (isset($item[0]['tahun'])) : ?>

											<tr>
												<td>Tahun</td>
												<td>:</td>
												<td><?= $item[0]['tahun'] ?></td>
											</tr>
										<?php endif; ?>

										<?php if (isset($item[0]['kilometer'])) : ?>
											<tr>
												<td>KM</td>
												<td>:</td>
												<td><?= $item[0]['kilometer'] ?></td>
											</tr>
										<?php endif; ?>

										<?php if (isset($item[0]['deskripsi'])) : ?>
											<tr>
												<td>deskripsi</td>
												<td>:</td>
												<td><?= $item[0]['deskripsi'] ?></td>
											</tr>
										<?php endif; ?>

										<?php if (isset($item[0]['keterangan'])) : ?>
											<tr>
												<td>keterangan</td>
												<td>:</td>
												<td><?= $item[0]['keterangan'] ?></td>
											</tr>
										<?php endif; ?>
									</table>
								</div>

								<div class="col-sm-12">

									<!-- Button trigger modal -->
									<?php if ($param == 'Mobil') : ?>
										<button type="button" class="btn btn-outline-dark btn-sm" data-toggle="modal" data-target="#exampleModal">
											Selengkapnya
										</button>
									<?php endif; ?>


									<a href="" class="btn btn-sm btn-warning ml-2">Pesan di sini</a>

									<!-- Modal -->
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">
														<h4><?= $item[0]['merk'] . ' ' . $item[0]['namaItem']; ?></h4>
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<table class="table table-sm">
														<tr>
															<td width="30%">Jenis</td>
															<td width="2">:</td>
															<td><?= $item[0]['jenis'] ?></td>
														</tr>
														<tr>
															<td>Merk</td>
															<td>:</td>
															<td><?= $item[0]['merk'] ?></td>
														</tr>
														<tr>
															<td>Model</td>
															<td>:</td>
															<td><?= $item[0]['model'] ?></td>
														</tr>
														<tr>
															<td>Volume Mesin</td>
															<td>:</td>
															<td><?= $item[0]['volume_mesin'] ?></td>
														</tr>
														<tr>
															<td>Transmisi</td>
															<td>:</td>
															<td><?= $item[0]['transmisi'] ?></td>
														</tr>
														<tr>
															<td>Bahan Bakar</td>
															<td>:</td>
															<td><?= $item[0]['bahanbakar'] ?></td>
														</tr>
														<tr>
															<td>Warna</td>
															<td>:</td>
															<td><?= $item[0]['warna'] ?></td>
														</tr>
														<tr>
															<td>Tahun</td>
															<td>:</td>
															<td><?= $item[0]['tahun'] ?></td>
														</tr>
														<tr>
															<td>KM</td>
															<td>:</td>
															<td><?= $item[0]['kilometer'] ?></td>
														</tr>
														<tr>
															<td width="30%">AC</td>
															<td width="2">:</td>
															<td><?= $item[0]['ac'] ?></td>
														</tr>
														<tr>
															<td>Power Steering</td>
															<td>:</td>
															<td><?= $item[0]['powersteering'] ?></td>
														</tr>
														<tr>
															<td>Power Window</td>
															<td>:</td>
															<td><?= $item[0]['powerwindow'] ?></td>
														</tr>
														<tr>
															<td>Central Lock</td>
															<td>:</td>
															<td><?= $item[0]['centrallock'] ?></td>
														</tr>
														<tr>
															<td>Alarm</td>
															<td>:</td>
															<td><?= $item[0]['alarm'] ?></td>
														</tr>
														<tr>
															<td>Kondisi</td>
															<td>:</td>
															<td><?= $item[0]['kondisi'] ?></td>
														</tr>
														<tr>
															<td>Deskripsi</td>
															<td>:</td>
															<td><?= $item[0]['deskripsi'] ?></td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col additional_info_col">
									<!-- <p>nopol:<span><?= $item[0]['nopol'] ?></span></p> -->
								</div>

							</div>


						</div>
						<!-- <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>free delivery</span>
					</div> -->
						<!-- <div class="original_price">$629.99</div> -->

						<!-- <ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
					</ul> -->
						<!-- <div class="product_color">
						<span>Select Color:</span>
						<ul>
							<li style="background: #e54e5d"></li>
							<li style="background: #252525"></li>
							<li style="background: #60b3f3"></li>
						</ul>
					</div> -->
						<!-- <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<span>Quantity:</span>
						<div class="quantity_selector">
							<span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
							 <span id="quantity_value">1</span> 
							<span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
						</div>
						 <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div> 
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div> -->
					</div>
				</div>
			</div>

		</div>

		<!-- carousel -->




		<!-- end carousel -->




		<!--  reviews test -->

		<div id="rivie" class="tab_container">
			<div class="row">

				<!-- User Reviews -->

				<div class="col-lg-6 reviews_col">
					<div class="tab_title reviews_title">
						<h4>Reviews (2)</h4>
					</div>

					<!-- User Review -->

					<div class="user_review_container d-flex flex-column flex-sm-row">
						<div class="user">
							<div class="user_pic"></div>
							<div class="user_rating">
								<ul class="star_rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="review">
							<div class="review_date">27 Aug 2016</div>
							<div class="user_name">Brandon William</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>

					<!-- User Review -->

					<div class="user_review_container d-flex flex-column flex-sm-row">
						<div class="user">
							<div class="user_pic"></div>
							<div class="user_rating">
								<ul class="star_rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
						</div>
						<div class="review">
							<div class="review_date">27 Aug 2016</div>
							<div class="user_name">Brandon William</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>

				<!-- Add Review -->

				<div class="col-lg-6 add_review_col">

					<div class="add_review">
						<form id="review_form" action="post">
							<div>
								<h1>Add Review</h1>
								<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
								<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
							</div>
							<div>
								<h1>Your Rating:</h1>
								<ul class="user_star_rating">
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
							</div>
							<div class="text-left text-sm-right">
								<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
							</div>
						</form>
					</div>

				</div>

			</div>
		</div>


		<!-- end reviews test -->
		<!-- Tabs -->



		<!-- <div class="tabs_section_container">

			<div class="container">
				<div class="row">
					<div class="col">
						<div class="tabs_container">
							<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
								<li class="tab active" data-active-tab="tab_1"><span>Description</span></li>
								<li class="tab" data-active-tab="tab_2"><span>Additional Information</span></li>
								<li class="tab active" data-active-tab="tab_3"><span>Reviews (2)</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">


						<div id="tab_1" class="tab_container active">
							<div class="row">
								<div class="col-lg-5 desc_col">
									<div class="tab_title">
										<h4>Description</h4>
									</div>
									<div class="tab_text_block">
										<h2>Pocket cotton sweatshirt</h2>
										<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
									</div>
									<div class="tab_image">
										<img src="images/desc_1.jpg" alt="">
									</div>
									<div class="tab_text_block">
										<h2>Pocket cotton sweatshirt</h2>
										<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
									</div>
								</div>
								<div class="col-lg-5 offset-lg-2 desc_col">
									<div class="tab_image">
										<img src="images/desc_2.jpg" alt="">
									</div>
									<div class="tab_text_block">
										<h2>Pocket cotton sweatshirt</h2>
										<p>Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...</p>
									</div>
									<div class="tab_image desc_last">
										<img src="images/desc_3.jpg" alt="">
									</div>
								</div>
							</div>
						</div>


						<div id="tab_2" class="tab_container">
							<div class="row">
								<div class="col additional_info_col">
									<div class="tab_title additional_info_title">
										<h4>Additional Information</h4>
									</div>
									<p>COLOR:<span>Gold, Red</span></p>
									<p>SIZE:<span>L,M,XL</span></p>
								</div>
							</div>
						</div>


						<div id="tab_3" class="tab_container">
							<div class="row">


								<div class="col-lg-6 reviews_col">
									<div class="tab_title reviews_title">
										<h4>Reviews (2)</h4>
									</div>


									<div class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<div class="review_date">27 Aug 2016</div>
											<div class="user_name">Brandon William</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>


									<div class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<div class="review_date">27 Aug 2016</div>
											<div class="user_name">Brandon William</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>


								<div class="col-lg-6 add_review_col">

									<div class="add_review">
										<form id="review_form" action="post">
											<div>
												<h1>Add Review</h1>
												<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
												<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
											</div>
											<div>
												<h1>Your Rating:</h1>
												<ul class="user_star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
												<textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
											</div>
											<div class="text-left text-sm-right">
												<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
											</div>
										</form>
									</div>

								</div>

							</div>
						</div>

					</div>
				</div>
			</div>

		</div> -->

		<!-- Benefit -->

		<!-- <div class="benefit">
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
						<form action="post">
							<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
								<input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
								<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
							</div>
						</form>
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
							<div class="cr">©2023 All Rights Reserverd. Rideline</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

	</div>


	<script src="<?= base_url(); ?>assets/js/jquery-3.6.3.min.js"></script>

	<script src="<?= base_url(); ?>assets/js/categories_custom.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/Isotope/isotope.pkgd.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
	<!-- <script src="<?= base_url(); ?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script> -->
	<script src="<?= base_url(); ?>assets/plugins/easing/easing.js"></script>
	<script src="<?= base_url(); ?>assets/plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
	<script src="<?= base_url(); ?>assets/styles/bootstrap4/popper.js"></script>
	<script src="<?= base_url(); ?>assets/styles/bootstrap4/bootstrap.min.js"></script>

	<script src="<?= base_url(); ?>assets/plugins/easing/easing.js"></script>
	<script src="<?= base_url(); ?>assets/js/single_custom.js"></script>
	<script src="<?= base_url(); ?>assets/js/carousel-vertical.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->
	<script>
		$(document).ready(function() {

			$('.cv-carousel').carouselVertical();
			$('.cv-carousel').on('click', '.detail-img', function() {
				const gambar = $(this).data('image');
				$('.single_product_image_background').css('background-image', 'url(' + gambar + ')')

			});
		});
		// $(document).ready(function() {
		//   $('.owl-carousel').owlCarousel({
		//     loop: true,
		//     margin: 10,
		//     nav: true,
		//     responsive: {
		//       0: {
		//         items: 1
		//       },
		//       600: {
		//         items: 3
		//       },
		//       1000: {
		//         items: 5
		//       }
		//     }
		//   });
		// });
	</script>



</body>

</html>
