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
			<div class="card mb-3">
				<div class="card-header">
					<i class="fa fa-table"></i>
            		Maklumat Pelajar
				</div>
					<table class="table table-bordered table-hover">
						<tbody>
							<tr>
								<th>Sesi sekolah</th>
								<td>
								<?php
				                $no = 1;
				                $total = 0;

				                while ($row = mysqli_fetch_array($query)) {
				                	echo '<tr>
			                			<td>'.$row['sesisekolah'].'</td>
		        						</tr>';
				                }
				                ?>
								</td>
							</tr>
							<tr>
								<th>Nama Penuh</th>
								<td>
								<?php
				                $no = 1;
				                $total = 0;

				                while ($row = mysqli_fetch_array($query)) {
				                	echo '<tr>
			                			<td>'.$row['std_name'].'</td>
		        						</tr>';
				                }
				                ?>
								</td>
							</tr>
							<tr>
								<th>Tarikh Lahir</th>
								<td>
									<?php echo $row['std_dob']?>
								</td>
							</tr>
							<tr>
								<th>No Surat Beranak</th>
								<td>
									<?php echo $row['std_nolahir']?>
								</td>
							</tr>
							<tr>
								<th>Warganegara</th>
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
						</tbody>
					</table>
					
					<table class="table table-bordered table-hover">
						<tbody>
							<h4>Maklumat Bapa Penjaga</h4>
							<tr>
								<th>Nama Bapa/Penjaga</th>
								<td>
									<?php echo $row['fname']?>
								</td>
							</tr>
							<tr>
								<th>No.Kad Pengenalan</th>
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
								<th>Warganegara</th>
								<td>
									<?php echo $row['fwarga']?>
								</td>
							</tr>
							<tr>
								<th>Pekerjaan</th>
								<td>
									<?php echo $row['fkerja']?>
								</td>
							</tr>
							<tr>
								<th>Gaji</th>
								<td>
									<?php echo $row['fgaji']?>
								</td>
							</tr>
							<tr>
								<th>Jawatan</th>
								<td>
									<?php echo $row['fjawatan']?>
								</td>
							</tr>
		                    <tr>
								<th>Alamat Pejabat</th>
								<td>
									<?php echo $row['fofcaddr']?>
								</td>
							</tr>					
		                    <tr>
								<th>Poskod</th>
								<td>
									<?php echo $row['fofcposkod']?>
								</td>
							</tr>
		                    <tr>
								<th>Bandar</th>
								<td>
									<?php echo $row['fofcbandar']?>
								</td>
							</tr>
		                    <tr>
								<th>Negeri</th>
								<td>
									<?php echo $row['fofcnegeri']?>
								</td>
							</tr>
							<tr>
								<th>No. Telefon Pejabat</th>
								<td>  
									<?php echo $row['fnopejabat']?>
								</td>
							</tr>
							<tr>
								<th>No. Telefon Bimbit</th>
								<td>  
									<?php echo $row['fnofon']?>
								</td>
							</tr>
						</tbody>
					</table>

					<table class="table table-bordered table-hover">
						<tbody>
							<h4>Maklumat Ibu</h4>
							<tr>
								<th>Nama Ibu</th>
								<td>
									<?php echo $row['mom_name']?>
								</td>
							</tr>
							<tr>
								<th>No.Kad Pengenalan</th>
								<td>
									<?php echo $row['mom_ic']?>
								</td>
							</tr>
							<tr>
								<th>Tarikh Lahir</th>
								<td>
									<?php echo $row['mom_dob']?>
								</td>
							</tr>
							<tr>
								<th>Warganegara</th>
								<td>
									<?php echo $row['mom_warga']?>
								</td>
							</tr>
							<tr>
								<th>Pekerjaan</th>
								<td>
									<?php echo $row['mom_kerja']?>
								</td>
							</tr>
							<tr>
								<th>Gaji</th>
								<td>
									<?php echo $row['mom_gaji']?>
								</td>
							</tr>
							<tr>
								<th>Jawatan</th>
								<td>
									<?php echo $row['mom_jawatan']?>
								</td>
							</tr>
		                    <tr>
								<th>Alamat Pejabat</th>
								<td>
									<?php echo $row['mom_ofcaddr']?>
								</td>
							</tr>					
		                    <tr>
								<th>Poskod</th>
								<td>
									<?php echo $row['mom_poskod']?>
								</td>
							</tr>
		                    <tr>
								<th>Bandar</th>
								<td>
									<?php echo $row['mom_bandar']?>
								</td>
							</tr>
		                    <tr>
								<th>Negeri</th>
								<td>
									<?php echo $row['mom_negeri']?>
								</td>
							</tr>
							<tr>
								<th>No. Telefon Pejabat</th>
								<td>  
									<?php echo $row['mom_nopejabat']?>
								</td>
							</tr>
							<tr>
								<th>No. Telefon Bimbit</th>
								<td>  
									<?php echo $row['mom_nofon']?>
								</td>
							</tr>					
							<tr>
								<th>Alamat Rumah</th>
								<td>  
									<?php echo $row['mom_homeaddr']?>
								</td>
							</tr>
							<tr>
								<th>Poskod</th>
								<td>  
									<?php echo $row['mom_homeposkod']?>
								</td>
							</tr>
							<tr>
								<th>Bandar</th>
								<td>  
									<?php echo $row['mom_homebandar']?>
								</td>
							</tr>
							<tr>
								<th>Negeri</th>
								<td>  
									<?php echo $row['mom_homenegeri']?>
								</td>
							</tr>
							<tr>
								<th>No. Telefon Rumah</th>
								<td>  
									<?php echo $row['mom_norumah']?>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			</div>

			<?php
			include_once("../inc/footer.php");
			?>