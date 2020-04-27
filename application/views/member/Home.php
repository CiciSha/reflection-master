    <!-- bagian konten -->
       <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url('<?php echo base_url("./assets/image/slider/Family.jpg") ?>');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade-up">
              <h1>Welcome to Reflection Photography</h1>
            </div>
          </div>
        </div>
      </div>
   
   
   <!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./assets/image/slider/Family.jpg" alt="First slide" style="width: 100%;height: 600px;">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/image/slider/Family.jpg" alt="Second slide" style="width: 100%;height: 600px;">
      </div>
 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->

    <div class="site-block-profile-pic" data-aos="fade" data-aos-delay="200">
      <a href="about.html"><img src="<?php echo base_url("assets/image/blog/tourist.png") ?>" alt="Image"></a>
    </div>

    <div class="site-section" data-aos="fade">
      <div class="container">

        <div class="row mb-5">
          <div class="col-12">
            <h5 class="site-section-heading text-center">Mengapa Reflection Photography?</h5>
          </div>
        </div><br><br>

        <div class="row">
          <div class="col-md-3">
            <img class="mx-auto d-block" style="max-width: 65px;" src="<?php echo base_url('./assets/image/blog/photographer.png') ?>">
            <div class="text-center"><br>
              <h5>Pengalaman</h5>
              <h5>Profesional</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3">
            <img class="mx-auto d-block" style="max-width: 65px;" src="<?php echo base_url('./assets/image/blog/photo-camera.png') ?>">
            <div class="text-center"><br>
              <h5>Fotographer</h5>
              <h5>Berpengalaman</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3">
            <img class="mx-auto d-block" style="max-width: 65px;" src="<?php echo base_url('./assets/image/blog/studio.png') ?>">
            <div class="text-center"><br>
              <h5>Studio Foto</h5>
              <h5>Premium</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3">
            <img class="mx-auto d-block" style="max-width: 65px;" src="<?php echo base_url('./assets/image/blog/offer.png') ?>" >
            <div class="text-center"><br>
              <h5>Harga</h5>
              <h5>Ekonomis</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ================================================ -->



    <!-- ========================================================= -->


    <div class="site-section border-bottom">
      <div class="container">
        <div class="row text-center justify-content-center mb-5">
          <div class="col-md-7" data-aos="fade-up">
            <h2>Paket Foto</h2>
          </div>
        </div>

        <div class="row">
          <?php foreach ($paket as $key => $value): ?>
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
              <a class="image-gradient" href="<?php echo base_url("member/detail_paket/$value[id_paket]") ?>" >
                <figure style="align-content: center;">
                  <img src="<?php echo base_url("./assets/image/paket/$value[foto_paket]") ?>" alt="" class="img-fluid">
                </figure>
                <div class="text">
                  <h3><?php echo $value['nama_paket'] ?></h3>
                </div>
              </a>
            </div>
          <?php endforeach ?>  
        </div>
      </div>
    </div>

    <!-- ==================================================================== -->
    <div class="py-5 site-block-testimonial" style="background-image: url('./assets/image/camera.jpg');" data-stellar-background-ratio="0.5">
     <div class="container">
       <div class="row block-13 mb-5">
         <div class="col-md-12 text-center" data-aos="fade">
           <div class="nonloop-block-13 owl-carousel">
           <?php foreach ($testimoni as $key => $value): ?>
             <div class="block-testimony">
              <p class="small">Testimonial</p>
              <img src="<?php echo base_url("assets/image/blog/woman.png") ?>" alt="Image" class="img-fluid">
              <p>&ldquo;<?php echo $value['isi_testimoni'] ?>.&rdquo;</p>
              <p class="small">&mdash; <?php echo $value['nama_member'] ?></p>
            </div>
             
           <?php endforeach ?>
          
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- 
  <div class="py-3 mb-5 mt-5">
   <div class="container">
     <div class="row">
       <div class="col-md-12 d-md-flex align-items-center" data-aos="fade">
         <h2 class="text-black mb-5 mb-md-0 text-center text-md-left">Need a photographer?</h2>
         <div class="ml-auto text-center text-md-left">
          <a href="contact.html" class="btn btn-danger py-3 px-5 rounded">Contact Me</a>
        </div>
      </div>
    </div>
  </div>
</div> -->