<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

   <div class="container-fluid">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Dashboard');?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/about');?>">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Dashboard/contact');?>">contact</a>
      </li>
      
    </ul>
  </div>
</nav>         
</div> 
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="mt-3 mb-3">
        <span>tambah data</span>
        <a href="<?= base_url('Crud/tambah_data');?>"><button type="button" class="btn btn-primary">+</button></a>
        

      </div>

    </div>
  </div>
</div>


<!-- ini awal tabel -->
<div class="container"><table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Email</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">tanggal lahir</th>
      <th scope="col">No telepon</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $row){
       ?>
    
    <tr>
      <th scope="row">1</th>
      <td ><?= $row['email']; ?></td>
      <td ><?= $row['nama']; ?></td>
      <td ><?= $row['alamat']; ?></td>
      <td ><?= $row['tanggal_lahir']; ?></td>
      <td ><?= $row['no_telepon']; ?></td>
      <td>
        <button data-id="<?= $row['id_siswa'] ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" id="btnModal" >ubah</button>
    </td>
      
      
    </tr>
    <?php } ?>
    
  </tbody>
</table>
  <div class="row">
    <div class="col-12">

    </div>
  </div>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
$(document).ready(function() {
$(function(){

  $('#btnModal').click(function() {
      var data = $('#data-tex').val();
      let btn = $(e.relatedTarget);
      let id = btn.data('id');
  })

  $('save').click(function() {
    var id = $(this).data(id);
    var data = $('#data-text').val();
    console.log(data);
    $.ajax({
      url:"<?= base_url('Crud/ubah/') ?>",
      type: "post",
      datatype:"JSON",
      data: {
        'id' : id,
        'value' : data
      },
      success: function(response){
        console.log(response.status);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus, errorThrown);
      }
    });
  })
})
})
    </script>
<!-- akhir tabel -->

</body>
</html>