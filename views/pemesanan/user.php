

<div class="container">

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
            <div class="card-header">
                  <!--  Form Add Data Product -->
        </div>
     <div class="card-body">
          
    
     <form action="<?php echo base_url('pemesanan/adduser') ?>" method="post">
        <div class="form-group">
             <label for="noproduct">Nama</label>
             <input type="text" name="namauser"class="form-control" id="namauser" placeholder="Masukkan Nama Anda">
        </div>
        <button type="submit" name="addnama" class="btn btn-primary">Add Nama</button>
    </form>
</div>

