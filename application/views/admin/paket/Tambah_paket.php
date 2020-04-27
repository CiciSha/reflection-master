<div
    class="collapse navbar-collapse"
    id="navbarSupportedContent">
    <p style="text-align: right !important;">Tambah Paket</p>
</div>
</div>
</nav>

<form method="post" enctype="multipart/form-data"> 
<div class="form-group"> 
	<label>Paket</label> 
    <input type="text" name="nama_paket" placeholder="Example:Graduation " class="form-control">
        <?php echo form_error('nama_paket', '<div class="text-danger"><i>**', '</i></div>'); ?> </div> 
    <div class="form-group"> 
        <label>Foto</label> 
	<input type="file" name="foto_paket" class="form-control"> 
</div> 
	<button class="btn btn-primary">Simpan</button> 
</form> 

</div> 