<?php
include_once("../inc/header_user.php");
include_once("../inc/dbconn.php");
?>

<!-- Mother Information -->
  <div class="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header" align="center">
            <b><h4> Status Permohonan </h4></b>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <div class="form-group" align="center">
              <label for="process">Permohonan anda sedang diproses. Sila tunggu keputusan selepas tarikh tutup.</label>
              <?php
              if ($tindakan == terima) {
                echo "Tahniah! Permohonan anda telah berjaya.";
                include_once("../admin/display_admin");
              }
              else{
                echo "Maaf. Permohonan anda tidak berjaya. Anda boleh membuat rayuan semula di sekolah.";
              }
              ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once("../inc/footer.php");
include_once("../inc/logoutmodal.php");
?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>