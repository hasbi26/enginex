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

</head>

<body>

<a href="<?= site_url('auth/logout') ?>">Logout</a>
<a href="<?= site_url('dashboard') ?>">Mobil</a>
<a href="<?= site_url('Motor/Index') ?>">motor</a>

<h1> Aksesoris</h1>

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
                    <th>Id</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Merk</th>
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
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title tambah</h5>
      </div>
      <div class="modal-body">
        <form method="post" id="form" accept-charset="multipart/form-data" name="form">
          <div class="container">
            <div class="row">
              <div class="col-8">
                <div class="row g-3 my-2">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="namaItem" aria-label="First name" name="namaItem">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="qty" aria-label="qty" name="qty">
                  </div>
                </div>
                <div class="row g-3 my-2">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="harga" aria-label="harga" name="harga">
                  </div>
                  <div class="col">
                      <input type="text" class="form-control" placeholder="merk" aria-label="merk" name="merk">
                    </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="jenis" aria-label="jenis" name="jenis">
                  </div>
                </div>
                    <div class="row g-3 my-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="keterangan" aria-label="keterangan" name="keterangan">
                      </div>
                    </div>
                    <div class="row g-3 my-2">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="deskripsi" aria-label="deskripsi" name="deskripsi">
                      </div>
                    </div>
                  <div class="col-4">
                    <div class="row g-3 my-2">
                      <div class="col">
                        <label for="foto1" class="form-label">foto1</label> <input class="form-control form-control-sm" id="foto1" name="foto1" type="file">
                      </div>
                    </div>
                    <div class="row g-3 my-2">
                      <div class="col">
                        <label for="foto2" class="form-label">foto2</label> <input class="form-control form-control-sm" id="foto2" name="foto2" type="file">
                      </div>
                    </div>
                    <div class="row g-3 my-2">
                      <div class="col">
                        <label for="foto3" class="form-label">foto3</label> <input class="form-control form-control-sm" id="foto3" name="foto3" type="file">
                      </div>
                    </div>


                  </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" id="tombol_tambah" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>



<!-- akhir modal tambah -->

<!-- form edit  -->
<div class="modal fade" id="editModalMotor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editModalMotorLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalMotorLabel">Modal Edit</h5>
      </div>
      <div class="modal-body">
        <!-- <form method="post" id="formEdit" enctype="multipart/form-data" name="formEdit"> -->
        <?= form_open_multipart(base_url('Motor/update'), ['id' => 'uploader']); ?>
        <!-- <form id="myform" action="<?php base_url('Motor/update'); ?>" method="post"> -->

          <div class="container">
            <div class="row">
              <div class="col-6">
                <div class="row g-3 my-2">
                  <div class="col">
                  <input type="text" class="form-control" placeholder="namabarang" aria-label="First name" name="enamabarang">
                    <input type="hidden" class="form-control" placeholder="id" aria-label="First name" name="eid">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="qty" aria-label="qty" name="eqty">
                  </div>
                  <div class="row g-3 my-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="harga" aria-label="harga" name="eharga">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="merk" aria-label="merk" name="emerk">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="jenis" aria-label="jenis" name="ejenis">
                    </div>
                  </div>
                  <div class="row g-3 my-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="keterangan" aria-label="keterangan" name="eketerangan">
                    </div>
                  </div>
                  <div class="row g-3 my-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="deskripsi" aria-label="deskripsi" name="edeskripsi">
                    </div>
                  </div> 
                </div>
                <div class="col-3">
                  <div class="row g-3 my-2">
                    <div class="col">
                      <label for="foto1" class="form-label">foto 1</label> <input class="form-control form-control-sm" id="efoto1" name="efoto1" type="file">
                    </div>
                  </div>
                  <div class="row g-3 my-2">
                    <div class="col">
                      <label for="foto2" class="form-label">foto 2</label> <input class="form-control form-control-sm" id="efoto2" name="efoto2" type="file">
                    </div>
                  </div>
                  <div class="row g-3 my-2">
                    <div class="col">
                      <label for="foto3" class="form-label">foto 3</label> <input class="form-control form-control-sm" id="efoto3" name="efoto3" type="file">
                    </div>
                  </div>


                </div>
                <div class="col-3">
                  <table class="table table-bordered" id="editTable"></table>
                </div>
              </div>
            </div>
          </div>
        <!-- </form> -->
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" id="tombol_edit" class="btn btn-primary">Understood</button> -->
        <p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" value="Upload">
        </p>
      </div>
      <?php echo form_close() ?>
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

    
    $('#uploader').submit(function (event) {



      var a = new FormData(this)

                event.preventDefault();
                
                $.ajax({

                    // url: window.location.href + '/post',
                    url: '<?php echo base_url('UpdateItem/Aksesoris'); ?>',

                    type: "POST",
                    dataType: 'json',
                    data: new FormData(this),
                    processData: false,
                    contentType: false,
                    success: function (data) {

                      $('#editModalMotor').modal('toggle');
                      tampil_data_barang(); 
                        console.log(data);
                        $("#message").append(data.message);
                    }
                });
            });

    $("#tombol_tambah").click(function(){

        var form_data = $('#form').serializeArray();
        var finalForm = new FormData(document.getElementById("form"));

        
        for (var pair of finalForm.entries()) {
          console.log(pair[0]+ ', ' + pair[1]); 
        }
        
        // console.log("datafrom", finalForm)
        // return;
        
        $.ajax({
            processData: false,
            contentType: false,
            enctype: 'multipart/form-data',
            type    : 'POST',
            url     : '<?= base_url()?>'+ "AddItem/createAksesoris",
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
      // $('#editModalMotor').modal('toggle');
      
      $('#editTable').html("");
      
    }

//     $('#editModalMotor').on('hidden.bs.modal', function () {
//   // do something…

//   console.log("testing")
// })

$('#editModalMotor').on("hide.bs.modal", function() {
	// alert("clesn up!")
  $('#editTable').html("");

})


    function tampil_data_barang(){

      console.log("getItem", '<?php echo base_url();?>')
        $.ajax({
            type  : 'ajax',
            url   :  '<?php echo base_url();?>'+'GetItem/Aksesoris',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.Item.length; i++){
                    html += '<tr>'+
                            '<td>'+data.Item[i].id+'</td>'+
                            '<td>'+data.Item[i].namaItem+'</td>'+
                            '<td>'+data.Item[i].harga+'</td>'+
                            '<td>'+data.Item[i].merk+'</td>'+
                            // '<td><button type="button" class="btn btn-warning" onclick="detail('+data.Item[i].id_motor+')">Edit</button> <button type="button" class="btn btn-danger" onclick="del('+data.Item[i].id_motor+','+data.Item[i].nopol+')">Delete</button> </td>'+
                            '<td><button type="button" class="btn btn-warning" onclick="detail('+data.Item[i].id+')">Edit</button> <button type="button" class="btn btn-danger" onclick="del(`'+data.Item[i].id+'`,`'+data.Item[i].namaItem+'`)">Delete</button> </td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }
        });
    }

    function del(id, nopol){




    $.ajax({
    url   :  '<?php echo base_url();?>'+'DeleteItem/deleteAksesoris',
    data: {id: id, nopol : nopol},
    type: 'POST',
    // dataType: 'json',
    success: function(response) {
      console.log("del", response)
      // location.reload();
      tampil_data_barang();
        
    }
    // error: function() {
    //         alert('Terjadi kesalahan saat menghapus data mobil');
    //     }
    });
    }

    function detail(id) {
        console.log("detail", id) 

        $.ajax({
                url   :  '<?php echo base_url();?>'+'GetItem/AksesorisDetail',
                method: 'post',
                data: {id: id},
                dataType: 'json',
                success: function(response){ 

                  console.log("Data", response)

                  $('#editModalMotor').modal('toggle');

                  // $('#editModalMotor').modal('show')
                  

                  $("input[name='eid']").val(response[0].id);
                  $("input[name='enamabarang']").val(response[0].namaItem);
                  $("input[name='eqty']").val(response[0].qty);
                  $("input[name='eharga']").val(response[0].harga);
                  $("input[name='emerk']").val(response[0].merk);
                  $("input[name='ejenis']").val(response[0].jenis);
                  $("input[name='eketerangan']").val(response[0].keterangan);
                  $("input[name='edeskripsi']").val(response[0].deskripsi);
                  


                  var table = document.getElementById("editTable");


                          var row1 = table.insertRow();

                          var cell1 = row1.insertCell();
                          var cell2 = row1.insertCell();

                          var img1 = document.createElement("img");

                          img1.src = '<?php echo base_url();?>'+"/assets/images/Aksesoris/"+response[0].namaItem+"/"+response[0].foto1;
                          img1.width = 80;
                          img1.height = 80;
                          cell1.appendChild(img1);

                          var caption1 = document.createElement("p");
                          caption1.id = "caption1"; 
                          var captionText1 = document.createTextNode(response[0].foto1);
                          caption1.appendChild(captionText1);
                          cell1.appendChild(caption1);


                          var img2 = document.createElement("img");
                          img2.src = '<?php echo base_url();?>'+"/assets/images/Aksesoris/"+response[0].namaItem+"/"+response[0].foto2;
                          img2.width = 80;
                          img2.height = 80;
                          cell2.appendChild(img2);

                          var caption2 = document.createElement("p");
                          var captionText2 = document.createTextNode(response[0].foto2);
                          caption2.appendChild(captionText2);
                          cell2.appendChild(caption2);
                        
                          var row2 = table.insertRow();
                          
                          var cell3 = row2.insertCell();
                          var cell4 = row2.insertCell();

                          var img3 = document.createElement("img");
                          img3.src = '<?php echo base_url();?>'+"/assets/images/Aksesoris/"+response[0].namaItem+"/"+response[0].foto3;
                          img3.width = 80;
                          img3.height = 80;
                          cell3.appendChild(img3);

                          var caption3 = document.createElement("p");
                          var captionText3 = document.createTextNode(response[0].foto3);
                          caption3.appendChild(captionText3);
                          cell3.appendChild(caption3);
          
              }

      });
    }







</script>

</body>

</html>