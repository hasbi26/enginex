<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>List Barang</title>
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" media="all">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.dataTables.min.css" media="all">


  <style>
.editTable td {
  white-space: nowrap;
  width: 100px; /* atur lebar elemen td */
  min-width: 100px; /* atur lebar minimum elemen td */
}

.editTable td p {
  overflow: hidden;
  text-overflow: ellipsis;
}

#editTable table {
  border-collapse: collapse;
}

#editTable table td {
  border: 1px solid black;
  width: 80px;
  height: 80px;
  text-align: center;
  vertical-align: middle;
}

#editTable table td img {
  max-width: 100%;
  max-height: 100%;
}

  </style>
	
</head>
<body>

<a href="<?= site_url('auth/logout') ?>">Logout</a>
<a href="<?= site_url('Motor/Index') ?>">motor</a>



<div class="container">
	
    <!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Data
                <small>Barang</small>
            </h1>
        </div>
		<div class="row"> 
			<div class="col-3">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
		  tambah barang
		</button>

			</div>

		</div>
    <div class="row">
        <table class="table table-striped" id="mydata">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="show_data">
                 
            </tbody>
        </table>
    </div>
</div>
 

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
	  <form method="post" id="form" accept-charset="multipart/form-data">
	
    <div class="container">
      <div class="row"> 

    <div class="col-8">
    <div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="namabarang" aria-label="First name" name="namabarang" >
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="tahun" aria-label="tahun" name="tahun" >
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="harga" aria-label="harga" name="harga">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="merk" aria-label="merk" name="merk">
  </div>
</div>

<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="jenis" aria-label="jenis" name="jenis"> -->
  <select class="form-select" aria-label="Default select example" name="jenis">
  <option selected>Pilih Jenis</option>
  <option value="Sedan">Sedan</option>
  <option value="Hatchback">Hatchback</option>
  <option value="citycar">citycar</option>
  <option value="MPV">MPV</option>
  <option value="SUV">SUV</option>
  <option value="Convertible">Convertible</option>
  <option value="Station Wagon">Station Wagon</option>
  <option value="Pick up">Pick up</option>
  <option value="Low MPV">Low MPV</option>
  <option value="Low SUV">Low SUV</option>
  <option value="Micro Car">Micro Car</option>
  <option value="Box">Box</option>
  <option value="Truck">Truck</option>

</select>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="model" aria-label="model" name="model">
  </div>
</div>

<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="volume_mesin" aria-label="volume_mesin" name="volume_mesin">
  </div>
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="bahanbakar" aria-label="bahanbakar" name="bahanbakar"> -->
    <select class="form-select" aria-label="Default select example" name="bahanbakar">
  <option selected>Pilih Bahan Bakar</option>
  <option value="Bensin">Bensin</option>
  <option value="Solar">Solar</option>
  <option value="Listrik">Listrik</option>
</select>
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="transmisi" aria-label="transmisi" name="transmisi"> -->
    <select class="form-select" aria-label="Default select example" name="transmisi">
  <option selected>Pilih Transmisi</option>
  <option value="Manual Transmision">Manual Transmision</option>
  <option value="Automatic Transmision">Automatic Transmision</option>
  <option value="Automatic CVT">Automatic CVT</option>
  <option value="AMT">AMT</option>
  <option value="DCT">DCT</option>
</select>

  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="warna" aria-label="warna" name="warna">
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="nopol" aria-label="nopol" name="nopol">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="kilometer" aria-label="kilometer" name="kilometer">
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="ac" aria-label="ac" name="ac"> -->
    <select class="form-select" aria-label="Default select example" name="ac">
  <option selected>Pilih Ac</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="powersteering" aria-label="powersteering" name="powersteering"> -->
    <select class="form-select" aria-label="Default select example" name="powersteering">
  <option selected>Pilih Power Steering</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="powerwindow" aria-label="powerwindow" name="powerwindow"> -->
    <select class="form-select" aria-label="Default select example" name="powerwindow">
  <option selected>Pilih Power Window</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="centrallock" aria-label="centrallock" name="centrallock"> -->
    <select class="form-select" aria-label="Default select example" name="centrallock">
  <option selected>Pilih Central lock</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="alarm" aria-label="alarm" name="alarm"> -->
    <select class="form-select" aria-label="Default select example" name="alarm">
  <option selected>Pilih Alarm</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="kondisi" aria-label="kondisi" name="kondisi">
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="status" aria-label="status" name="status">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="deskripsi" aria-label="deskripsi" name="deskripsi">
  </div>
</div>



    </div>

    <!-- <div class="col-4">
    <label>Image : </label>                     
            <input type="file" multiple="" name="images[]">     
</div> -->

    <div class="col-4">
<div class="row g-3 my-2">
  <div class="col">
  <label for="fotodepan" class="form-label">foto depan</label>
  <input class="form-control form-control-sm" id="fotodepan" name="fotodepan" type="file">
</div>
</div>

<div class="row g-3 my-2">
<div class="col">
  <label for="fotobelakang" class="form-label">foto belakang</label>
  <input class="form-control form-control-sm" id="fotobelakang" name="fotobelakang" type="file">
</div>
</div>


<div class="row g-3 my-2">
<div class="col">
  <label for="fotokanan" class="form-label">foto kanan</label>
  <input class="form-control form-control-sm" id="fotokanan" name="fotokanan" type="file">
</div>
</div>
<div class="row g-3 my-2">
<div class="col">
  <label for="fotokiri" class="form-label">foto kiri</label>
  <input class="form-control form-control-sm" id="fotokiri" name="fotokiri" type="file">
</div>
</div>

<div class="row g-3 my-2">
<div class="col">
  <label for="fotodalam1" class="form-label">foto Dalam 1</label>
  <input class="form-control form-control-sm" id="fotodalam1" name="fotodalam1" type="file">
</div>
</div>
<div class="row g-3 my-2">
<div class="col">
  <label for="fotodalam2" class="form-label">foto Dalam 2</label>
  <input class="form-control form-control-sm" id="fotodalam2" name="fotodalam2" type="file">
</div>
</div>

<div class="row g-3 my-2">
<div class="col">
  <label for="fotomesin1" class="form-label">foto Mesin 1</label>
  <input class="form-control form-control-sm" id="fotomesin1" name="fotomesin1" type="file">
</div>
</div>
<div class="row g-3 my-2">
<div class="col">
  <label for="fotomesin2" class="form-label">foto Mesin 2</label>
  <input class="form-control form-control-sm" id="fotomesin2" name="fotomesin2" type="file">
</div>
</div>



</div>

    </div>
    </div>




	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="tombol_tambah" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


<!-- form edit  -->



<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
	  <form method="post" id="formEdit" accept-charset="multipart/form-data">
	
    <div class="container">
      <div class="row"> 

    <div class="col-6">
    <div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="namabarang" aria-label="First name" name="enamabarang" >
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="tahun" aria-label="tahun" name="etahun" >
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="harga" aria-label="harga" name="eharga">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="merk" aria-label="merk" name="emerk">
  </div>
</div>

<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="jenis" aria-label="jenis" name="jenis"> -->
  <select class="form-select" aria-label="Default select example" name="ejenis" id="ejenis">
  <option selected>Pilih Jenis</option>
  <option value="Sedan">Sedan</option>
  <option value="Hatchback">Hatchback</option>
  <option value="citycar">citycar</option>
  <option value="MPV">MPV</option>
  <option value="SUV">SUV</option>
  <option value="Convertible">Convertible</option>
  <option value="Station Wagon">Station Wagon</option>
  <option value="Pick up">Pick up</option>
  <option value="Low MPV">Low MPV</option>
  <option value="Low SUV">Low SUV</option>
  <option value="Micro Car">Micro Car</option>
  <option value="Box">Box</option>
  <option value="Truck">Truck</option>

</select>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="model" aria-label="model" name="emodel">
  </div>
</div>

<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="volume_mesin" aria-label="volume_mesin" name="evolume_mesin">
  </div>
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="bahanbakar" aria-label="bahanbakar" name="bahanbakar"> -->
    <select class="form-select" aria-label="Default select example" name="ebahanbakar" id="ebahanbakar">
  <option selected>Pilih Bahan Bakar</option>
  <option value="Bensin">Bensin</option>
  <option value="Solar">Solar</option>
  <option value="Listrik">Listrik</option>
</select>
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="transmisi" aria-label="transmisi" name="transmisi"> -->
    <select class="form-select" aria-label="Default select example" name="etransmisi" id="etransmisi">
  <option selected>Pilih Transmisi</option>
  <option value="Manual Transmision">Manual Transmision</option>
  <option value="Automatic Transmision">Automatic Transmision</option>
  <option value="Automatic CVT">Automatic CVT</option>
  <option value="AMT">AMT</option>
  <option value="DCT">DCT</option>
</select>

  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="warna" aria-label="warna" name="ewarna">
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="nopol" aria-label="nopol" name="enopol">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="kilometer" aria-label="kilometer" name="ekilometer">
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="ac" aria-label="ac" name="ac"> -->
    <select class="form-select" aria-label="Default select example" name="eac" id="eac">
  <option selected>Pilih Ac</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="powersteering" aria-label="powersteering" name="powersteering"> -->
    <select class="form-select" aria-label="Default select example" name="epowersteering" id="epowersteering">
  <option selected>Pilih Power Steering</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="powerwindow" aria-label="powerwindow" name="powerwindow"> -->
    <select class="form-select" aria-label="Default select example" name="epowerwindow" id="epowerwindow">
  <option selected>Pilih Power Window</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="centrallock" aria-label="centrallock" name="centrallock"> -->
    <select class="form-select" aria-label="Default select example" name="ecentrallock" id="ecentrallock">
  <option selected>Pilih Central lock</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <!-- <input type="text" class="form-control" placeholder="alarm" aria-label="alarm" name="alarm"> -->
    <select class="form-select" aria-label="Default select example" name="ealarm" id="ealarm">
  <option selected>Pilih Alarm</option>
  <option value="Ada">Ada</option>
  <option value="Tidak Ada">Tidak Ada</option>
  <option value="Rusak">Rusak</option>
</select>
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="kondisi" aria-label="kondisi" name="ekondisi">
  </div>
</div>


<div class="row g-3 my-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="status" aria-label="status" name="estatus">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="deskripsi" aria-label="deskripsi" name="edeskripsi">
  </div>
</div>



    </div>

    <div class="col-3">
<div class="row g-3 my-2">
  <div class="col">
  <label for="fotodepan" class="form-label">foto depan</label>
  <input class="form-control form-control-sm" id="efotodepan" name="efotodepan" type="file">
</div>
</div>

<div class="row g-3 my-2">
<div class="col">
  <label for="fotobelakang" class="form-label">foto belakang</label>
  <input class="form-control form-control-sm" id="efotobelakang" name="efotobelakang" type="file">
</div>
</div>


<div class="row g-3 my-2">
<div class="col">
  <label for="fotokanan" class="form-label">foto kanan</label>
  <input class="form-control form-control-sm" id="efotokanan" name="efotokanan" type="file">
</div>
</div>
<div class="row g-3 my-2">
<div class="col">
  <label for="fotokiri" class="form-label">foto kiri</label>
  <input class="form-control form-control-sm" id="efotokiri" name="efotokiri" type="file">
</div>
</div>

<div class="row g-3 my-2">
<div class="col">
  <label for="fotodalam1" class="form-label">foto Dalam 1</label>
  <input class="form-control form-control-sm" id="efotodalam1" name="efotodalam1" type="file">
</div>
</div>
<div class="row g-3 my-2">
<div class="col">
  <label for="fotodalam2" class="form-label">foto Dalam 2</label>
  <input class="form-control form-control-sm" id="efotodalam2" name="efotodalam2" type="file">
</div>
</div>

<div class="row g-3 my-2">
<div class="col">
  <label for="fotomesin1" class="form-label">foto Mesin 1</label>
  <input class="form-control form-control-sm" id="efotomesin1" name="efotomesin1" type="file">
</div>
</div>
<div class="row g-3 my-2">
<div class="col">
  <label for="fotomesin2" class="form-label">foto Mesin 2</label>
  <input class="form-control form-control-sm" id="efotomesin2" name="efotomesin2" type="file">
</div>
</div>



</div>

<div class="col-3">


<table class="table table-bordered" id="editTable">
  <!-- <tr>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 1
    </td>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 2
    </td>
  </tr>
  <tr>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 3
    </td>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 4
    </td>
  </tr>
  <tr>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 5
    </td>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 6
    </td>
  </tr>
  <tr>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 7
    </td>
    <td>
      <img src="https://picsum.photos/200" width="80" height="80">
      <br> Caption 8
    </td>
  </tr> -->
</table>




</div>


    </div>





    </div>






	</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-bs-dismiss="modal" >Close</button>
        <button type="button" id="tombol_tambah" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>






<!-- akir modal edit  -->


<script src="<?= base_url(); ?>assets/js/jquery-3.6.3.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>



<script type="text/javascript"> 
    $(document).ready(function(){
        tampil_data_barang();   //pemanggilan fungsi tampil barang.
         
        $('#mydata').dataTable();

          
        //fungsi tampil barang
    });

    $("#tombol_tambah").click(function(){

        var form_data = $('#form').serializeArray();
        var finalForm = new FormData(document.getElementById("form"));

        console.log("datafrom", form_data)

        for (var pair of finalForm.entries()) {
            console.log(pair[0]+ ', ' + pair[1]); 
        }

        $.ajax({
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            type    : 'POST',
            url     : "AddItem/create",
            data    : finalForm,
            cache   : false,
            success : function(data){
                $('#staticBackdrop').modal('toggle');
                tampil_data_barang(); 
            }
        });
    });


    function closeModal(){
      console.log("edit modal close")
      $('#editModal').modal('toggle');
      
      $('#editTable').html("");
      
    }

//     $('#editModal').on('hidden.bs.modal', function () {
//   // do something…

//   console.log("testing")
// })

$('#editModal').on("hide.bs.modal", function() {
	// alert("clesn up!")
  $('#editTable').html("");

})


    function tampil_data_barang(){
        $.ajax({
            type  : 'ajax',
            url   : 'GetItem',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.Item.length; i++){
                    html += '<tr>'+
                            '<td>'+data.Item[i].namaItem+'</td>'+
                            '<td>'+data.Item[i].tahun+'</td>'+
                            '<td>'+data.Item[i].harga+'</td>'+
                            '<td><button type="button" class="btn btn-warning" onclick="detail('+data.Item[i].id+')">Edit</button> <button type="button" class="btn btn-danger" onclick="del('+data.Item[i].id+')">Delete</button> </td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }
        });
    }

    function del(id){
    $.ajax({
    url: 'DeleteItem/delete',
    data: {id: id},
    type: 'POST',
    dataType: 'json',
    success: function(response) {
      location.reload();
      tampil_data_barang();
        // if (response == "success") {
        //     alert(response);
        //     // reload halaman
        //     location.reload();
        // } else {
        //     alert(response);
        // }
    }
    // error: function() {
    //         alert('Terjadi kesalahan saat menghapus data mobil');
    //     }
    });
    }

    function detail(id) {
        console.log("detail", id) 

        $.ajax({
                url:'GetItem/getDetail',
                method: 'post',
                data: {id: id},
                dataType: 'json',
                success: function(response){ 

                  console.log("Data", response)

                  $('#editModal').modal('toggle');

                  $("input[name='enamabarang']").val(response[0].namaItem);
                  $("input[name='etahun']").val(response[0].tahun);
                  $("input[name='eharga']").val(response[0].harga);
                  $("input[name='emerk']").val(response[0].merk);
                  $("#ejenis").val(response[0].jenis).change();
                  $("input[name='emodel']").val(response[0].model);
                  $("input[name='evolume_mesin']").val(response[0].volume_mesin);
                  $("#ebahanbakar").val(response[0].bahanbakar).change();
                  $("#etransmisi").val(response[0].transmisi).change();
                  
                  $("input[name='ewarna']").val(response[0].warna);
                  $("input[name='enopol']").val(response[0].nopol);
                  $("input[name='ekilometer']").val(response[0].kilometer);
                  $("#eac").val(response[0].ac).change();
                  $("#epowersteering").val(response[0].powersteering).change();
                  $("#epowerwindow").val(response[0].powerwindow).change();
                  $("#ecentrallock").val(response[0].centrallock).change();
                  $("#ealarm").val(response[0].alarm).change();
                  
                  $("input[name='ekondisi']").val(response[0].kondisi);
                  $("input[name='estatus']").val(response[0].status);
                  $("input[name='edeskripsi']").val(response[0].deskripsi);
                  // ealarm



                  var table = document.getElementById("editTable");


                          var row1 = table.insertRow();

                          var cell1 = row1.insertCell();
                          var cell2 = row1.insertCell();

                          var img1 = document.createElement("img");

                          img1.src = "./assets/images/"+response[0].fotodepan;
                          img1.width = 80;
                          img1.height = 80;
                          cell1.appendChild(img1);

                          var caption1 = document.createElement("p");
                          caption1.id = "caption1"; 
                          var captionText1 = document.createTextNode(response[0].fotodepan);
                          caption1.appendChild(captionText1);
                          cell1.appendChild(caption1);


                          var img2 = document.createElement("img");
                          img2.src = "./assets/images/"+response[0].fotobelakang;
                          img2.width = 80;
                          img2.height = 80;
                          cell2.appendChild(img2);

                          var caption2 = document.createElement("p");
                          var captionText2 = document.createTextNode(response[0].fotobelakang);
                          caption2.appendChild(captionText2);
                          cell2.appendChild(caption2);
                        
                          var row2 = table.insertRow();
                          
                          var cell3 = row2.insertCell();
                          var cell4 = row2.insertCell();

                          var img3 = document.createElement("img");
                          img3.src = "./assets/images/"+response[0].fotokiri;
                          img3.width = 80;
                          img3.height = 80;
                          cell3.appendChild(img3);

                          var caption3 = document.createElement("p");
                          var captionText3 = document.createTextNode(response[0].fotokiri);
                          caption3.appendChild(captionText3);
                          cell3.appendChild(caption3);

                          var img4 = document.createElement("img");
                          img4.src = "./assets/images/"+response[0].fotokanan;
                          img4.width = 80;
                          img4.height = 80;
                          cell4.appendChild(img4);

                          var caption4 = document.createElement("p");
                          var captionText4 = document.createTextNode(response[0].fotokanan);
                          caption4.appendChild(captionText4);
                          cell4.appendChild(caption4);


                          var row3 = table.insertRow();

                          var cell5 = row3.insertCell();
                          var cell6 = row3.insertCell();

                          var img5 = document.createElement("img");
                          img5.src = "./assets/images/" + response[0].fotodalam1;
                          img5.width = 80;
                          img5.height = 80;
                          cell5.appendChild(img5);

                          var caption5 = document.createElement("p");
                          var captionText5 = document.createTextNode(response[0].fotodalam1);
                          caption5.appendChild(captionText5);
                          cell5.appendChild(caption5);

                          var img6 = document.createElement("img");
                          img6.src = "./assets/images/" + response[0].fotodalam2;
                          img6.width = 80;
                          img6.height = 80;
                          cell6.appendChild(img6);

                          var caption6 = document.createElement("p");
                          var captionText6 = document.createTextNode(response[0].fotodalam2);
                          caption6.appendChild(captionText6);
                          cell6.appendChild(caption6);

                          var row4 = table.insertRow();

                          var cell7 = row4.insertCell();
                          var cell8 = row4.insertCell();

                          var img7 = document.createElement("img");
                          img7.src = "./assets/images/" + response[0].fotomesin1;
                          img7.width = 80;
                          img7.height = 80;
                          cell7.appendChild(img7);

                          var caption7 = document.createElement("p");
                          var captionText7 = document.createTextNode(response[0].fotomesin1);
                          caption7.appendChild(captionText7);
                          cell7.appendChild(caption7);

                          var img8 = document.createElement("img");
                          img8.src = "./assets/images/" + response[0].fotomesin2;
                          img8.width = 80;
                          img8.height = 80;
                          cell8.appendChild(img8);

                          var caption8 = document.createElement("p");
                          // $("p:first").addClass("h6");
                          var captionText8 = document.createTextNode(response[0].fotomesin2);
                          caption8.appendChild(captionText8);
                          cell8.appendChild(caption8);

                        

                // }
              }

      });
    }





</script>


</body>
</html>
