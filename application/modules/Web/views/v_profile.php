<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Profile Sekolah</h2>
    <p><?= setting()->nama_sekolah; ?></p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div data-aos="fade-up">
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.801787195472!2d107.38881001413826!3d-6.289763563312461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6970ae0bf0fd93%3A0xb54538bbe394e8b9!2sSMK%20PGRI%20TELAGASARI!5e0!3m2!1sid!2sid!4v1604058466677!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>
    
  </div>

  <div class="container" data-aos="fade-up">
    <div class="section-title mt-5">
      <p>Identitas Sekolah</p>
    </div>
    <div class="row">
        
      <div class="col-lg-4">
        <div class="info">
          <div class="address">
            <i class="icofont-bar-code"></i>
            <h4>NPSN</h4>
            <p><?= setting()->kode_sekolah; ?></p>
          </div>

          <div class="email">
            <i class="icofont-cubes"></i>
            <h4>Kelompok</h4>
            <p>
                Teknologi & Rekayasa<br> 
                Teknik Komputer & Informatika
            </p>
          </div>

          <div class="phone">
            <i class="icofont-calendar"></i>
            <h4>Tahun Pendirian</h4>
            <p>18 September 2000</p>
          </div>
          

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">

        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Alamat:</h4>
            <p>
              <?= setting()->alamat; ?>,
              <?= setting()->kecamatan; ?>, <?= setting()->kota; ?> 41381, 
              <?= ucfirst(setting()->provinsi); ?>
            </p>
          </div>

          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p><?= setting()->email; ?></p>
          </div>

          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Telp:</h4>
            <p><?= setting()->telp; ?></p>
          </div>

        </div>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->