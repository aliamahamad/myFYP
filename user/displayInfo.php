<?php
include_once("../inc/dbconn.php");
include_once("../inc/header_user.php");

//session_start();
if(!isset($_SESSION['nama'])){
    header('location: index.php');
}
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
        <div class="card mb-5">
          <div class="card-header">
            <i class="fa fa-table"></i>
            <b>Maklumat Pelajar</b>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable">
                <tbody>
                        <tr>
							<th width="30%">Sesi Sekolah</th>
							<td>
								<?php 
								while ($row = mysqli_fetch_array($query)){
								//$row['sesisekolah'];

								echo '<tr>
									<td>'.$row['sesisekolah'].'</td>
        						</tr>';
								}
								?>
							</td>
						</tr>
						<tr>
							<th width="30%">Nama Penuh</th>
							<td>
								<?php echo $row['std_name']?>
							</td>
						</tr>
                        <tr>
							<th>Tarikh Lahir</th>
							<td>
								<?php echo $row['std_dob']?>
							</td>
						</tr>
						<tr>
							<th>No. Sijil Lahir</th>
							<td>
								<?php echo $row['std_nolahir']?>
							</td>
						</tr>
						<tr>
							<th>Kewarganegaraan</th>
							<td>
								<?php echo $row['std_warga']?>
							</td>
						</tr>
						<tr>
							<th>Jantina</th>
							<td>
								<?php echo $row['std_jantina']?>
							</td>
						</tr>
						<tr>
							<th>Penyakit</th>
							<td>
								<?php echo $row['std_penyakit']?>
							</td>
						</tr>
                        <tr>
							<th>Sekolah Kebangsaan</th>
							<td>
								<?php echo $row['std_sk']?>
							</td>
						</tr>
              </table>
            </div>
          </div>
          <!--<div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>-->
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>

	<div class="content-wrapper">
      <div class="container-fluid">
        <!-- Example Tables Card -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-table"></i>
            Maklumat Bapa/Penjaga
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover" id="dataTable">
                <tbody>						
				<table class="table table-bordered table-hover">
					<tbody>
						<tr>
							<th width="30%">Nama Bapa/Penjaga</th>
							<td>
								<?php echo $row['fname']?>
							</td>
						</tr>
						<tr>
							<th>No. Kad Pengenalan</th>
							<td>
								<?php echo $row['fic']?>
							</td>
						</tr>
                        <tr>
							<th>Tarikh Lahir</th>
							<td>
								<?php echo $row['fdob']?>
							</td>
						</tr>
						<tr>
							<th>Kewarganegaraan</th>
							<td>
								<?php echo $row['fwarga']?>
							</td>
						</tr>
						<tr>
							<th>Pekerjaan </th>
							<td>
								<?php echo $row['fkerja']?>
							</td>
						</tr>
						<tr>
							<th>Pendapatan Bulanan</th>
							<td>
								<?php echo $row['fgaji']?>
							</td>
						</tr>
						<tr>
							<th>Taraf Jawatan</th>
							<td>
								<?php echo $row['fjawatan']?>
							</td>
						</tr>
						<tr>
							<th>Alamat Majikan</th>
							<td>
								<?php
                                #poskod fofcposkod
                                #bandar fofcbandar
                                #negeri fofcnegeri
                                echo $row['fofcaddr']?>
							</td>
						</tr>
						<tr>
							<th>No.Telefon Pejabat</th>
							<td>
								<?php echo $row['fnopejabat']?>
							</td>
						</tr>
	                    <tr>
							<th>No.Telefon Bimbit</th>
							<td>
								<?php echo $row['fnofon']?>
							</td>
						</tr>
					</tbody>
              </table>
            </div>
          </div>
          <!--<div class="card-footer small text-muted">
            Updated yesterday at 11:59 PM
          </div>-->
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

<!--
    mom_name
    mom_ic
    mom_dob
    mom_warga
    mom_kerja
    mom_gaji
    mom_jawatan
    mom_ofcaddr
    mom_poskod
    mom_bandar
    mom_negeri
    mom_nopejabat
    mom_nofon
    mom_homeaddr
    mom_homeposkod
    mom_homebandar
    mom_homenegeri
    mom_norumah -->