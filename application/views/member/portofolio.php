<div class="container"><br><br>
  <div class="row no-gutters" id="lightgallery">
        <?php foreach ($portofolio as $key => $value): ?>
          <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="<?php echo base_url("assets/image/portofolio/$value[foto]") ?>" data-sub-html="<h4><?php echo $value['nama_paket'] ?></h4><p><?php echo $value['keterangan'] ?></p>">
          <a href="#"><img src="<?php echo base_url("assets/image/portofolio/$value[foto]") ?>" alt="IMage" class="img-fluid"></a>
        </div>
        <?php endforeach ?>
      </div>
</div><br>