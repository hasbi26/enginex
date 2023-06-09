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

	<title>Single Product</title>
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

	<?php $param = $this->uri->segment('4'); ?>


	<div class="imageBox">
		<div class="swiper mySwiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodepan'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokanan'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotokiri'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotobelakang'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodalam1'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotodalam2'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotomesin1'] ?>" alt="First slide"></div>
				<div class="swiper-slide"><img class="d-block w-100 image-modal-trigger" src="<?= base_url(); ?>assets/images/<?= $param ?>/<?= $item[0]['nopol'] ?>/<?= $item[0]['fotomesin2'] ?>" alt="First slide"></div>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>


	<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="modalImage" src="" alt="Modal Image" class="img-fluid">
      </div>
    </div>
  </div>
</div>

	<section class="container detailBox">
	<!-- <h1 class="detailHeading">Mazda Vantrend 1995</h1> -->
		<h1 class="detailHeading"><?= $item[0]['merk'].' '.$item[0]['namaItem'].' '.$item[0]['tahun']  ?></h1>
		<!-- <h3 class="detailPrice">Rp.12.xxx.xxx</h3> -->
		<h3 class="detailPrice"><?= $item[0]['harga'] ?></h3>

		<div class="row ">
			<div class="col-6">
				<table class="table table-sm">
					<tr>
						<td width="30%">Jenis</td>
						<td width="2">:</td>
						<td><?= $item[0]['jenis'] ?></td>
					</tr>
					<tr>
						<td>Model</td>
						<td>:</td>
						<td><?= $item[0]['model'] ?></td>
					</tr>
					<tr>
						<td>Transmisi</td>
						<td>:</td>
						<td><?= $item[0]['transmisi'] ?></td>
					</tr>
					<tr>
						<td>Warna</td>
						<td>:</td>
						<td><?= $item[0]['warna'] ?></td>
					</tr>
					<!-- <tr>
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
						<td>Kondisi</td>
						<td>:</td>
						<td><?= $item[0]['kondisi'] ?></td>
					</tr> -->
				</table>
			</div>
			<div class="col-6">
				<table class="table table-sm">
					<tr>
						<td>Merk</td>
						<td>:</td>
						<td><?= $item[0]['merk'] ?></td>
					</tr>
					<tr>
						<td>Volume Mesin</td>
						<td>:</td>
						<td><?= $item[0]['volume_mesin'] ?></td>
					</tr>
					<tr>
						<td>Bahan Bakar</td>
						<td>:</td>
						<td><?= $item[0]['bahanbakar'] ?></td>
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
					<!-- <tr>
						<td width="30%">AC</td>
						<td width="2">:</td>
						<td><?= $item[0]['ac'] ?></td>
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
					<tr> -->
						<!-- <td>Deskripsi</td>
						<td>:</td>
						<td><?= $item[0]['deskripsi'] ?></td>
					</tr> -->
				</table>
			</div>
		</div>

		<table class="table table-sm">
		<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td><textarea class="form-control" rows="5" disabled><?= $item[0]['deskripsi'] ?></textarea></td>
					</tr>

</table>

		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<!-- <a href="#" class="btn btn-xs btn-block">Pesan</a> -->
				<a href="https://wa.me/+6281324962776?text=Saya%20ingin%20pesan%20:%0A<?= $item[0]['merk'] ?>%20<?= $item[0]['namaItem'] ?>%20<?= $item[0]['tahun'] ?>%0AHarga:%20<?= $item[0]['harga'] ?>" class="btn btn-xs btn-block">Pesan</a>
			</div>
		</div>
	</section>


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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<script>
		var swiper = new Swiper(".mySwiper", {
			pagination: {
				el: ".swiper-pagination",
			},
		});
	</script>

	<script>
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


		
		// Dapatkan semua elemen gambar yang menjadi trigger modal
var modalTriggers = document.querySelectorAll('.image-modal-trigger');

// Tambahkan event listener pada setiap elemen gambar
modalTriggers.forEach(function(trigger) {
  trigger.addEventListener('click', function() {
    var imageSrc = this.getAttribute('src'); // Dapatkan URL gambar dari atribut src

    // Update gambar pada modal dengan URL yang dipilih
    var modalImage = document.getElementById('modalImage');
    modalImage.src = imageSrc;

    // Tampilkan modal
    $('#imageModal').modal('show');
  });
});



// Tambahkan event listener pada tombol "Close" pada modal
var closeButton = document.querySelector('.modal .close');
closeButton.addEventListener('click', function() {
  // Tutup modal
  $('#imageModal').modal('hide');
});


	</script>


</body>

</html>
