<!-- Footer -->
<footer class="bg-dark text-center text-lg-start bg-light text-white">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
    </div>
    <!-- Left -->
    <!-- Right -->
    <div>
      <a href="#/" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#/" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#/" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="#/" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#/" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="#/" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fa-solid fa-mountain-sun"></i>&nbsp;&nbsp;Japan Travel
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 footer-destinations-link">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Destinations
          </h6>
          <?php foreach ($places as $key => $value) {?>
          <p>
            <a href="<?=base_url()?>blog/list/<?=$value->name?>" class="text-reset"><?=$value->name?></a>
          </p>
          <?php }?>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Tokyo, Japan</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="#/">Nathaniel Rada</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<script src="<?=base_url()?>vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url()?>js/jquery-3.6.1.min.js"></script>
<?php 
if(array_key_exists('js_includes', $includes)){ 
  foreach ($includes['js_includes'] as $key => $value) {
    ?>
    <script src="<?=$value?>"></script>
    <?php
  }
}
?>

</html>