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
  <!-- End Container -->
  
  <div class="why-us container" data-aos="fade-up">
    <div class="section-title mt-5">
      <p>Visi Misi</p>
    </div>
    
    <div class="row">
      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="content">
          <h3>Visi</h3>
          <p>
          “Terwujudnya insan pelajar yang berakhlakul karimah, sehat, cerdas, berprestasi dan memiliki daya saing tinggi menuju keberhasilan cita-cita visioner SMANDA Baru Era Baru di Tahun 2025”. 
          </p>
        
        </div>
      </div>
      <div class="col-lg-6 d-flex align-items-stretch">
        <div class="content bg-light text-dark">
          <h3>Misi</h3>
          
              <p>Meningkatkan pembinaan dan pengamalan nilai-nilai keimanan dan ketaqwaan terhadap Tuhan Yang Maha Esa</p>
              <p>Mengembangkan lingkungan sekolah yang sehat, bersih, rapih, tertib, aman dan nyaman</p>
              <p>Meningkatkan profesionalisme Pendidik dan Tenaga Kependidikan, serta akuntabilitas sekolah sebagai pusat pengembangan pendidikan berdasarkan standar nasional.</p>
              <p>Membangun watak dan kepribadian warga sekolah yang jujur, disiplin, bertanggung jawab dan berwawasan kebangsaan.</p>
              <p>Meningkatkan kualitas dan kuantitas lulusan yang diterima diperguruan tinggi terbaik.</p>
              <p>Meningkatkan kualitas dan daya saing melalui penguasaan dan penerapan ICT.</p>
              <p>Memberdayakan peran serta stakeholders dalam penyelenggaraan pendidikan yang berkualitas berdasarkan prinsip Manajemen Berbasis Sekolah.</p>      
        </div>
      </div>
    </div>
  </div>
  
  <div class="features container" data-aos="fade-up">

    <div class="section-title mt-5">
      <p>Paket Keahlian</p>
    </div>

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-lg-4 col-md-6 mt-0">
        <div class="icon-box">
          <i class="bx bx-code-alt" style="color: #ffbb2c;"></i>
          <h3><a href="">Rekayasa Perangkat Lunak</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-0">
        <div class="icon-box">
          <i class="bx bx-cog" style="color: #5578ff;"></i>
          <h3><a href="">Teknik Mesin</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-0">
        <div class="icon-box">
          <i class="bx bxs-car-mechanic" style="color: #e80368;"></i>
          <h3><a href="">Teknik Kendaraan Ringan</a></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-4">
        <div class="icon-box">
          <i class="bx bxs-factory" style="color: #ffa76e;"></i>
          <h3><a href="">Teknik Mekanik Industri</a></h3>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 mt-4">
        <div class="icon-box">
          <i class="bx bxs-flame" style="color: #e80368;"></i>
          <h3><a href="">Teknik Pengelasan</a></h3>
        </div>
      </div>
        
    </div>

  </div>

</section><!-- End Contact Section -->

</main><!-- End #main -->