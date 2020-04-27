<div class="site-section border-bottom">
  <div class="container">
    <div class="row text-center justify-content-center mb-5">
      <div class="col-md-7" data-aos="fade-up">
        <h2><?php echo $detail_paket[0]['nama_paket']; ?></h2>
      </div>
    </div>
    <div class="site-section" data-aos="fade">
      <div class="container">
        <div class="row">
          <?php foreach ($detail_paket as $key => $value): ?>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">

              <div class="card text-center mb-4">
              <div class="card-header">
                <h3><?php echo $value['nama_tipe_paket'] ?></h3>
              </div>
              <div class="card-body">
                <img src="<?php echo base_url("./assets/image/tipe/$value[foto_tipe_paket]") ?>" alt="" class="img-fluid">
<!--                 <h5 class="card-title">Special title treatment</h5> -->
                <p class="card-text mt-3" style="min-height: 3rem; max-height: 3rem">
                  <span>
                    <?php echo $value['deskripsi_tipe_paket'] ?>
                    <hr width="40%" style="border: solid 1px #ccc;">
                    
                    Max Orang : <?php echo $value['max_jumlah_orang'] ?> Orang
                    <br>
                    Harga : Rp. <?php echo number_format($value['harga_tipe_paket']) ?>
                    <br>
                    Minimal DP : Rp. <?php echo number_format($value['min_dp_tipe_paket']) ?>
                  </span>
                </p>
              </div>
              <div class="card-footer text-muted">
                <?php if (isset($_SESSION['member'])): ?>
                     <a href="<?php echo base_url("pemesanan/paket/$value[id_tipe_paket]") ?>" class="btn btn-primary rounded">Pesan</a> 
                   <?php else: ?>
                    <a onclick="return confirm('Silahkan Lakukan Login!')" href="<?php echo base_url("login") ?>" class="btn btn-primary">Pesan</a> 
                  <?php endif ?>
              </div>
            </div>

              <!-- <div class="image-gradient">
                <figure style="align-content: center;">
                  <img src="<?php echo base_url("./assets/image/tipe/$value[foto_tipe_paket]") ?>" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3><?php echo $value['nama_tipe_paket'] ?></h3>
                  <span class="text-light">
                    <?php echo $value['deskripsi_tipe_paket'] ?>
                    <br>
                    Max Orang : <?php echo $value['max_jumlah_orang'] ?> Orang
                    <br>
                    Harga : Rp. <?php echo number_format($value['harga_tipe_paket']) ?>
                    <br>
                    Minimal DP : Rp. <?php echo number_format($value['min_dp_tipe_paket']) ?>
                  </span>
                  <br><br>
                    <?php if (isset($_SESSION['member'])): ?>
                     <a href="<?php echo base_url("pemesanan/paket/$value[id_tipe_paket]") ?>" class="btn btn-success rounded">Pesan</a> 
                   <?php else: ?>
                    <a title="Silahkan Login Sebelum Pesan" href="<?php echo base_url("pemesanan/paket/$value[id_tipe_paket]") ?>" class="btn btn-success disabled" disabled="disabled">Pesan</a> 
                  <?php endif ?>
                </div>
              </div> -->
            </div>
          <?php endforeach ?>  
        </div>
      </div>
    </div>
  </div>