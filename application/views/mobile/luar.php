<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/mobile/style.css">
	<link rel="preload" href="NATS.woff2" as="font" type="<?= base_url(); ?>/font/woff2" crossorigin>

	<title>Hello, world!</title>
</head>

<body>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


	<section class="container">
		<h1 id="header_line">rideline</h1>

		<ul class="kategori_menu">
			<li class="active">
				<a href="#" onclick="tampil_data_barang('Mobil', this)">Mobile</a>
			</li>
			<li>
				<a href="#" onclick="tampil_data_barang('Motor', this)">Motor</a>
			</li>
			<li>
				<a href="#" onclick="tampil_data_barang('Aksesoris', this)">Aksesoris</a>
			</li>
		</ul>

		<div class="row mt-4 mb-4">
			<div class="col-6">
				<a href="" class="ms-2">
					<box-icon name='slider' class="ikon" onclick="openFilter(event)"></box-icon>
				</a>
			</div>
			<div class="col-6">
				<a href="" class="float-end">
					<box-icon class="ikon me-2" name='search-alt'></box-icon>
				</a>
			</div>
		</div>

		<div class="row product-grid"></div>
	</section>

	<footer>
		<a href=""><img src="<?= base_url(); ?>/assets/logo/home.png"></a>
		<a href=""><img src="<?= base_url(); ?>/assets/logo/whatsapp.png"></a>
		<a href=""><img src="<?= base_url(); ?>/assets/logo/facebook-logo.png"></a>
		<a href=""><img src="<?= base_url(); ?>/assets/logo/youtube.png"></a>
	</footer>

	<!-- Modal -->
	<div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="filterModalLabel">Filter</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<select name="sorting_options" id="sorting_options" class="form-select">
						<option value="">Default Sorting</option>
						<option value="price">Price</option>
						<option value="Tahun_Asc">Tahun Terendah</option>
						<option value="Tahun_Desc">Tahun Tertinggi</option>
					</select>

				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url(); ?>assets/js/jquery-3.6.3.min.js"></script>
	<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


	<script>
		tampil_data_barang("Mobil", $("#default")[0]);

		function tampil_data_barang(param, elem, kategori, sort) {
			var urlAll = 'GetItem'

			if (typeof elem !== 'undefined') {
				$('.kategori_menu li').removeClass('active');
			}

			$(elem).parent().addClass('active');
			$(elem).prepend('<span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>');

			$.ajax({
				type: 'POST',
				url: urlAll,
				async: false,
				data: {
					postdata: param
				},
				dataType: 'json',
				success: function(data) {
					var products = data.Item;

					// Sorting berdasarkan harga (dari terendah ke tertinggi)
					products.sort(function(a, b) {
						return a.harga - b.harga;
					});

					var productItem = "";
					$('.product-grid').empty(); // menghapus data sebelumnya
					$.each(products, function(index, product) {
						
						var productBubble = "";
						if (product.isNew) {
							productBubble = '<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>';
						}

						productItem += `<div class="col-6 mb-3">
											<div class="card">
												<div class="card-body">
													<img src="<?= base_url(); ?>assets/images/${param}/${param == 'Aksesoris' ? product.namaItem : product.nopol}/${param == 'Aksesoris' ? product.foto1 : product.fotodepan}" class="img-fluid">
													<h5 class="card-title mt-2">${product.merk + ' ' + product.namaItem + ' ' + product.namaItem + (product.tahun ? ' ' + product.tahun : '')}</h5>
													<div class="price">Rp. ${formatRupiah(product.harga)}</div>
													<a href="welcome/detailProduct/${product.id}/${param}" class="btn btn-warning btn-xs btn-block text-white">Detail</a>
												</div>
											</div>
										</div>`;

						// var productItem = '<div class="product-item women" data-name="' + product.merk + ' ' + product.namaItem + '" data-price="' + product.harga + '">' +
						// 	'<div class="product product_filter">' +
						// 	'<div class="product_image">' +
						// 	'<img src="<?= base_url(); ?>assets/images/' + param + '/' + ((param == "Aksesoris") ? product.namaItem : product.nopol) + '/' + ((param == "Aksesoris") ? product.foto1 : product.fotodepan) + '" alt="' + product.namaItem + '">' +
						// 	'</div>' +
						// 	'<div class="favorite"></div>' +
						// 	productBubble +
						// 	'<div class="product_info">' +
						// 	'<h6 class="product_name"><a href="welcome/detailProduct/' + product.id + '/' + param + '">' + product.merk + ' ' + product.namaItem + ' ' + product.namaItem + (product.tahun ? ' ' + product.tahun : '') + '</a></h6>' +
						// 	'<div class="product_price">Rp. ' + formatRupiah(product.harga) + '</div>' +
						// 	'</div>' +
						// 	'</div>' +
						// 	'<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>' +
						// 	'</div>';

						// productItems += productItem;
					});


					$('.product-grid').append(productItem);

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

		function openFilter(e) {
			e.preventDefault();
			$('#filterModal').modal('show');
		}

		$('#sorting_options').change(function() {
			var sortingOption = $(this).val(); // Ambil nilai data-sort dari elemen yang diklik
			var str = "Tahun_Asc";
			var parts = sortingOption.split("_");

			var kat = parts[0]
			var sort = parts[1]
			console.log(parts[0]); // Output: "Tahun"
			console.log(parts[1]); // Output: "Asc"

			console.log("Sorting", sortingOption)
			// Kirim data sorting ke controller menggunakan AJAX
			$.ajax({
				url: 'GetItem/MobilSorting',
				type: 'POST',
				data: {
					kat: kat,
					sort: sort
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


</body>

</html>
