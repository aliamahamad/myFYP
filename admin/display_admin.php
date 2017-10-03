<?php
include_once("../inc/dbconn.php");
include_once("../inc/header_admin.php");

$sql = 'SELECT * FROM student';

$query = mysqli_query($db, $sql);

if (!$query){
	die('SQL Error: ' . mysqli_error($db));
}
?>

<html>
  <body>
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Mother Info
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable">
                <tr align="center">
                  <tr>
                    <th>Nama Pelajar</th>
                    <th>No Lahir</th>
                    <th>Jantina</th>
                    <th>Sekolah Kebangsaan</th>
                    <th>Tindakan</th>
                  </tr>
                </tr>
                <tbody>
                <?php
                $no = 1;
                $total = 0;

                while ($row = mysqli_fetch_array($query)) {
                	# code...
                	#$amount = $row['amount'] == 0 ? '' : number_format($row['amount']);
                	echo '<tr>
                			<td>'.$row['std_name'].'</td>
        							<td>'.$row['std_nolahir'].'</td>
        							<td>'.$row['std_jantina'].'</td>
        							<td>'.$row['std_sk'].'</td>
                      <td align="center" >
                      <a href="../admin/displayInfo.php">
                        <i class="fa fa-info-circle"></i>
                      </a>
                      <a href="../user/std_allinfo.php">
                        <i class="fa fa-check-circle"></i>
                      </a>
                      <a href="../user/std_allinfo.php">
                        <i class="fa fa-times-circle"></i>
                      </a>
                      </td>
        						</tr>';
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>

    <?php
    include_once("../inc/logoutmodal.php");
    include_once("../inc/footer.php");
    ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>