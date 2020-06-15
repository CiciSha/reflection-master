
<div class="site-blocks-cover overlay inner-page-cover"  id="tentang" style="background-image: url('./assets/image/blog/camera-gray.jpg'); " data-stellar-background-ratio="0.5;">
  <div class="container">
    <div class="row align-items-center justify-content-center" id="tentang">
      <div class="col-md-7 text-center" data-aos="fade-up">
        <h1>Tentang Kami</h1>
      </div>
    </div>
  </div>
</div>

<div class="site-section" data-aos="fade">
  <div class="container">
    <div class="row mb-6">
      <div class="col-md-6">
        <h3 class="text-center">Sejarah Reflection</h3><br>
        <p style="text-align: justify;">PT Gunawan Teguh Berkarya ini berdiri pada tahun 2015 tepatnya pada bulan September di Yogyakarta dengan nama CV Just Us Group . CV Just Us Group menaungi 3 perusahaan yaitu event meida, wedding organizer dan plesir.com. Event media itu sendiri menghandle semua kebutuhan multimedia maupun dokumentasi ataupun company profile. Wedding Organizer lebih fokus pada pesta pernikahan yang ada di Yogyakarta. Kemudian untuk plesir.com fokus pada semua kebutuhan traveller yang datang ke Yogyakarta dengan berbasis IT yang sudah modern. 
          <p>Berjalannya waktu dari 3 perusahaan tersebut yang berkembang pesat hanya di event medianya saja, kemudian dari nama Just Us Event Media lalu berubah branding menjadi Reflection Art Media. Reflection Art Media ini bergerak secara operasional secara utuh di luar wedding organizer dan plesir.com. Reflection Art Media berdiri sejak bulan Agustus 2016 dengan fokus usaha di studio foto dan multimedia ataupun dokumentasi pernikahan. Dua perusahaan wedding organizer dan plesir.com dinyatakan berhenti dan perusahaan hanya fokus pada 1 bidang yaitu Reflection Art Media </p>
          <p><a href="<?php echo base_url("sejarah") ?>">Continue Reading >></a></p>

        </div>
        <div class="col-md-6">
          <h3 class="text-center">Visi & Misi</h3><br>
          <p>Visi : “Menjadi jaringan studio foto dan event media terintegrasi yang terdepan dan menjadi acuan bagi industri photography, videography di Indonesia.</p>
          <p>Misi : </p>
          <p>1. Memastikan kepuasan customer dengan sebaik mungkin.</p>
          <p>2. Memberikan lingkungan kerja terbaik dan kesempatan karir kepada karyawan.</p>
          <p>3. Memberikan nilai terbaik kepada para owner, investor, dan supplier.</p>
          <p>4. Berinovasi dan meningkatkan nilai terhadap semua produk dan pelayanan.</p>
          <p>5. Memiliki formulasi tata kelola perusahaan yang baik.</p>

          <div class="col-md-6">
            <p class="mt-5 mb-3">Follow Me</p>
            <p>
              <a href="#" class="pr-2"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2"><span class="icon-instagram"></span></a>
              <a href="#" class="p-2"><span class="icon-facebook"></span></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- ================================================ -->
    <div class="container">
      <!-- <div class="row no-gutters" id="lightgallery"> -->
      <div class="site-section border-bottom">
        <div class="container">
          <div class="row text-center justify-content-center mb-5">
            <div class="col-md-7" data-aos="fade-up">
              <h2>Portofolio</h2>
            </div>
          </div>

          <div class="row">
            <?php foreach ($paket as $key => $value): ?>
              <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <a class="image-gradient" href="<?php echo base_url("member/detail_portofolio/$value[id_paket]") ?>" >
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
    </div>
  </div>
</div>

<h3 class="text-center">Google Maps</h3><br>
<div id="map"></div>
<script>
          // untuk setting lokasi, atau bagian lat dan lang
          var mymap = L.map('map').setView([-7.7543996,110.3822986], 13);

            // untuk menampilkan peta
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYXJkaGlhIiwiYSI6ImNqa2hyYTJiMjB4N2Mza3A5eXU2bm9yamMifQ.sRNMGGlKBK4HQuuQmhedVA', {
              attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
              maxZoom: 18,
              id: 'mapbox.streets',
              accessToken: 'pk.eyJ1IjoiYXJkaGlhIiwiYSI6ImNqa2hyYTJiMjB4N2Mza3A5eXU2bm9yamMifQ.sRNMGGlKBK4HQuuQmhedVA'
            }).addTo(mymap);

            // untuk menampilkan marker
            var marker = L.marker([-7.7543996,110.3822986]).addTo(mymap);

            // untuk menampilkan lingkaran merah
            var circle = L.circle([-7.7543996,110.3822986], {
              color: 'gray',
              fillColor: '#0000',
              fillOpacity: 0.5,
              radius: 500
            }).addTo(mymap);

            // untuk menampilkan tulisan dan gambar popup
            marker.bindPopup("<img src='<?php echo base_url('./assets/image/logo reflection.png') ?>' width='100px'> <br><br> <a href='https://www.google.com/maps/place/Reflection+Photography+Studio/@-7.7541528,110.3819982,19z/data=!4m5!3m4!1s0x2e7a59aa75f48cfd:0x8f5a2152e06c4de4!8m2!3d-7.7540314!4d110.3827036'>Studio Reflection!</a>").openPopup();
          </script>

          <br>
          <div class="py-5 site-block-testimonial" style="background-image: url('./assets/image/blog/camera-gray.jpg');" data-stellar-background-ratio="0.5">
           <div class="container">
             <div class="row block-13 mb-5">
               <div class="col-md-12 text-center" >
                <div class="block-testimony col-lg-3 ml-auto ">
                 <!--  <img src="<?php echo base_url("assets/image/blog/camera-gray.jpg") ?>" alt="Image" class="img-fluid"> -->
                 <p class="mb-0 font-weight-bold">Alamat</p>
                 <p class="mb-4">Jl. Ring Road Utara No.2, Manggung, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>

                 <p class="mb-0 font-weight-bold">Nomor Telepon</p>
                 <p class="mb-4"><!-- <a href="#"> -->(0274) 2831391<!-- </a> --></p>

                 <p class="mb-0 font-weight-bold">Email</p>
                 <p class="mb-0"><!-- <a href="#"> -->reflectionphotography@gmail.com<!-- </a> --></p>
               </div>
             </div>
           </div>
         </div>
       </div>
