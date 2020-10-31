  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3><?= setting()->nama_sekolah; ?></h3>
            <p>
              <?= setting()->alamat; ?> <br>
              <?= setting()->kecamatan; ?>, <?= setting()->kota; ?> 41381<br>
              <?= ucfirst(setting()->provinsi); ?> <br><br>
              <strong>Phone:</strong> <?= setting()->telp; ?><br>
              <strong>Email:</strong> <?= setting()->email; ?><br>
            </p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://dapo.dikdasmen.kemdikbud.go.id/sekolah/ba547c2955a042d08b06" target="_blank">Dapodik Sekolah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://ult.kemdikbud.go.id/" target="_blank">Layanan Kemdikbud</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://pgri.or.id/" target="_blank">PGRI Nasional</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://psmk.kemdikbud.go.id/" target="_blank">Direktorat SMK</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Rule Breaker</span></strong>. All Rights Reserved
        </div>
        
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/web'); ?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('assets/web'); ?>/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/web'); ?>/js/main.js"></script>

</body>

</html>