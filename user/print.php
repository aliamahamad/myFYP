<?php include_once("../inc/header_user.php"); ?>
<body>

    <div class="content-wrapper">

      <div class="container-fluid">

        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Maklumat Pelajar
          </div>
          <div class="card-body">
            <div class="table-responsive" align="center">

            <script LANGUAGE="JavaScript">
  			    if (window.print) {
  			        document.write('<form> '
  			            + '<input type=button name=print value="Cetak" '
  			            + 'onClick="javascript:window.print()"> Untuk mencetak maklumat ini!</form>');
  			    }
			    // End -->
			</script>

            </div>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>

      </div>
    </div>



	<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <?php
	include_once("../inc/footer.php");
	include_once("../inc/logoutmodal.php");
	?>