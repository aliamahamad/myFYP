<?php 
include_once("../inc/header_user.php");
include_once("../inc/dbconn.php");
?>

<!-- Mother Information -->
  <div class="content-wrapper">

      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header" align="center">
            <h4><b>Maklumat Pelajar</b></h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable">
                <form name="" action="" method="GET" role="form">
                
                <!-- STUDENT info -->
                <div class="form-group">
                  <label for="sesisekolah"> Sesi Persekolahan </label>
                  <select name="sesisekolah" required>
                      <option value="pagi"> Pagi (7.45am - 10.30am) </option>
                      <option value="petang"> Petang (2.30pm - 5.30pm) </option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="std_name">Nama Penuh</label>
                  <input type="text" class="form-control" name="std_name">
                </div>
                <div class="form-group">
                  <label for="std_dob">Tarikh Lahir</label>
                  <input type="date" class="form-control" name="std_dob">
                </div>
                <div class="form-group">
                  <label for="std_nolahir">No Sijil Lahir</label>
                  <input type="text" class="form-control" name="std_nolahir">
                </div>
                <div class="form-group">
                  <label for="std_warga">Kewarganegaraan</label>
                  <input type="text" class="form-control" name="std_warga">
                </div>
                <div class="form-group">
                  <label for="std_jantina">Jantina</label>
                  <select type="text" class="form-control" name="std_jantina">
                    <option value="Lelaki"> Lelaki </option>
                    <option value="Perempuan"> Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="std_penyakit">Penyakit (Jika ada)</label>
                  <input type="text" class="form-control" name="std_penyakit">
                </div>
                <div class="form-group">
                  <label for="std_sk">Sekolah Kebangsaan</label>
                  <input type="text" class="form-control" name="std_sk">
                </div><br>

                <div align="center">
                  <hr>
                  <h4><b>Maklumat Bapa</b></h4>
                  <hr>
                </div>

              <!-- father info -->

                <div class="form-group">
                  <label for="fname">Nama Penuh</label>
                  <input type="text" class="form-control" name="fname">
                </div>
                <div class="form-group">
                  <label for="fic">No. Kad Pengenalan Baru</label>
                  <input type="text" class="form-control" name="fic">
                </div>
                <div class="form-group">
                  <label for="fdob">Tarikh Lahir</label>
                  <input type="date" class="form-control" name="fdob">
                </div>
                <div class="form-group">
                  <label for="fwarga">Kewarganegaraan</label>
                  <input type="text" class="form-control" name="fwarga">
                </div>
                <div class="form-group">
                  <label for="fkerja">Pekerjaan</label>
                  <input type="text" class="form-control" name="fkerja">
                </div>
                <div class="form-group">
                  <label for="fgaji">Pendapatan Bulanan</label>
                  <input type="text" class="form-control" name="fgaji">
                </div>
                <div class="form-group">
                  <label for="fjawatan"> Taraf Jawatan </label>
                    <select name="fjawatan" required>
                      <option value="tetap"> Tetap </option>
                      <option value="kontrak"> Kontrak </option>
                      <option value="sambilan"> Sambilan </option>
                    </select>
                </div>
                <div class="form-group">
                  <label for="fofcaddr">Alamat Majikan</label>
                  <input type="text" class="form-control" name="fofcaddr">
                </div>
                <div class="form-group">
                  <label for="fofcposkod">Poskod</label>
                  <input type="text" class="form-control" name="fofcposkod" maxlength="5">
                </div>
                <div class="form-group">
                  <label for="fofcbandar">Bandar</label>
                  <input type="text" class="form-control" name="fofcbandar">
                </div>
                <div class="form-group">
                  <label for="fofcnegeri"> Negeri </label>
                    <select name="fofcnegeri" requireds>
                    <div>
                      <option value="Kuala Lumpur"> W.P Kuala Lumpur </option>
                      <option value="Selangor"> Selangor </option>
                      <option value="Perlis"> Perlis </option>
                      <option value="Kelantan"> Kelantan </option>
                      <option value="Perak"> Perak </option>
                      <option value="Kedah"> Kedah </option>
                      <option value="Pulau Pinang"> Pulau Pinang </option>
                      <option value="Terengganu"> Terengganu </option>
                      <option value="Pahang"> Pahang </option>
                      <option value="Johor"> Johor </option>
                      <option value="Negeri Sembilan"> Negeri Sembilan </option>
                      <option value="Melaka"> Melaka </option>
                      <option value="Sabah"> Sabah </option>
                      <option value="Sarawak"> Sarawak </option>
                      <option value="Putrajaya"> W.P Putrajaya </option>
                      <option value="Labuan"> W.P Labuan </option>
                      </div>
                    </select>
                </div>
                <div class="form-group">
                  <label for="fnopejabat">No. Tel Pejabat</label>
                  <input type="text" class="form-control" name="fnopejabat" maxlength="10">
                </div>
                <div class="form-group">
                  <label for="fnofon">Tel. Bimbit</label>
                  <input type="text" class="form-control" name="fnofon" maxlength="11">
                </div>
                <br>

                <div align="center">
                  <hr>
                  <h4><b>Maklumat Ibu</b></h4>
                  <hr>
                </div>

                  <!-- Mother info -->
                <div class="form-group">
                  <label for="mom_name">Full Name</label>
                  <input type="text" class="form-control" name="mom_name" required>
                </div>

                <div class="form-group">
                  <label for="mom_ic">No. Kad Pengenalan Baru</label>
                  <input type="text" class="form-control" name="mom_ic">
                </div>

                <div class="form-group">
                  <label for="mom_dob">Tarikh Lahir</label>
                  <input type="date" class="form-control" name="mom_dob">
                </div>

                <div class="form-group">
                  <label for="mom_warga">Kewarganegaraan</label>
                  <input type="text" class="form-control" name="mom_warga">
                </div>

                <div class="form-group">
                  <label for="mom_kerja">Pekerjaan</label>
                  <input type="text" class="form-control" name="mom_kerja">
                </div>

                <div class="form-group">
                  <label for="mom_gaji">Pendapatan Bulanan</label>
                  <input type="text" class="form-control" name="mom_gaji">
                </div>

                <div class="form-group">
                  <label for="mom_jawatan"> Taraf Jawatan </label>
                    <select name="mom_jawatan" required>
                      <option value="tetap"> Tetap </option>
                      <option value="kontrak"> Kontrak </option>
                      <option value="sambilan"> Sambilan </option>
                    </select>
                </div>

                <div class="form-group">
                  <label for="mom_ofcaddr">Alamat Majikan</label>
                  <input type="text" class="form-control" name="mom_ofcaddr">
                </div>

                <div class="form-group">
                  <label for="mom_poskod">Poskod</label>
                  <input type="text" class="form-control" name="mom_poskod" maxlength="5">
                </div>

                <div class="form-group">
                  <label for="mom_bandar">Bandar</label>
                  <input type="text" class="form-control" name="mom_bandar">
                </div>

                <div class="form-group">
                  <label for="mom_negeri"> Negeri </label>
                    <select name="mom_negeri" required>
                    <div>
                      <option value="KL"> W.P Kuala Lumpur </option>
                      <option value="Selangor"> Selangor </option>
                      <option value="Perlis
                      "> Perlis </option>
                      <option value="Kelantan"> Kelantan </option>
                      <option value="Perak"> Perak </option>
                      <option value="Kedah"> Kedah </option>
                      <option value="Pulau Pinang"> Pulau Pinang </option>
                      <option value="Terengganu"> Terengganu </option>
                      <option value="Pahang"> Pahang </option>
                      <option value="Johor"> Johor </option>
                      <option value="Negeri Sembilan"> Negeri Sembilan </option>
                      <option value="Melaka"> Melaka </option>
                      <option value="Sabah"> Sabah </option>
                      <option value="Sarawak"> Sarawak </option>
                      <option value="Putrajaya"> W.P Putrajaya </option>
                      <option value="Labuan"> W.P Labuan </option>
                      </div>
                    </select>
                </div>

                <div class="form-group">
                  <label for="mom_nopejabat">No. Tel Pejabat</label>
                  <input type="text" class="form-control" name="mom_nopejabat" maxlength="10">
                </div>

                <div class="form-group">
                  <label for="mom_nofon">Tel. Bimbit</label>
                  <input type="text" class="form-control" name="mom_nofon" maxlength="11">
                </div>

                <div class="form-group">
                  <label for="mom_homeaddr">Alamat Rumah</label>
                  <input type="text" class="form-control" name="mom_homeaddr">
                </div>

                <div class="form-group">
                  <label for="mom_homeposkod">Poskod</label>
                  <input type="text" class="form-control" name="mom_homeposkod" maxlength="5">
                </div>

                <div class="form-group">
                  <label for="mom_homebandar">Bandar</label>
                  <input type="text" class="form-control" name="mom_homebandar">
                </div>

                <div class="form-group">
                  <label for="mom_homenegeri"> Negeri </label>
                    <select name="mom_homenegeri" required>
                    <div>
                      <option value="Kuala Lumpur"> W.P Kuala Lumpur </option>
                      <option value="Selangor"> Selangor </option>
                      <option value="Perlis"> Perlis </option>
                      <option value="Kelantan"> Kelantan </option>
                      <option value="Perak"> Perak </option>
                      <option value="Kedah"> Kedah </option>
                      <option value="Pulau Pinang"> Pulau Pinang </option>
                      <option value="Terengganu"> Terengganu </option>
                      <option value="Pahang"> Pahang </option>
                      <option value="Johor"> Johor </option>
                      <option value="Negeri Sembilan"> Negeri Sembilan </option>
                      <option value="Melaka"> Melaka </option>
                      <option value="Sabah"> Sabah </option>
                      <option value="Sarawak"> Sarawak </option>
                      <option value="Putrajaya"> W.P Putrajaya </option>
                      <option value="Labuan"> W.P Labuan </option>
                      </div>
                    </select>
                </div>

                <div class="form-group">
                  <label for="mom_norumah">Tel. Rumah</label>
                  <input type="text" class="form-control" name="mom_norumah" maxlength="11">
                </div>

              </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit" value="Hantar"> Hantar </button>

            </form>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

    <?php
      // Check staff name input by the user of null
      if (!isset($_GET['fic'])) {
        # code...
      }

      else{

        //Create SQL query
        # STUDENT INFO
        $sesisekolah = $_GET['sesisekolah'];
        $std_name = $_GET['std_name'];
        $std_dob = $_GET['std_dob'];
        $std_nolahir = $_GET['std_nolahir'];
        $std_warga = $_GET['std_warga'];
        $std_jantina = $_GET['std_jantina'];
        $std_penyakit = $_GET['std_penyakit'];
        $std_sk = $_GET['std_sk'];
        # FATHER INFO
        $fname = $_GET['fname'];
        $fic = $_GET['fic'];
        $fdob = $_GET['fdob'];
        $fwarga = $_GET['fwarga'];
        $fkerja = $_GET['fkerja'];
        $fgaji = $_GET['fgaji'];
        $fjawatan = $_GET['fjawatan'];
        $fofcaddr = $_GET['fofcaddr'];
        $fofcposkod = $_GET['fofcposkod'];
        $fofcbandar = $_GET['fofcbandar'];
        $fofcnegeri = $_GET['fofcnegeri'];
        $fnopejabat = $_GET['fnopejabat'];
        $fnofon = $_GET['fnofon'];
        # MOTHER INFO
        $mom_name = $_GET['mom_name'];
        $mom_ic = $_GET['mom_ic'];
        $mom_dob = $_GET['mom_dob'];
        $mom_warga = $_GET['mom_warga'];
        $mom_kerja = $_GET['mom_kerja'];
        $mom_gaji = $_GET['mom_gaji'];
        $mom_jawatan = $_GET['mom_jawatan'];
        $mom_ofcaddr = $_GET['mom_ofcaddr'];
        $mom_poskod = $_GET['mom_poskod'];
        $mom_bandar = $_GET['mom_bandar'];
        $mom_negeri = $_GET['mom_negeri'];
        $mom_nopejabat = $_GET['mom_nopejabat'];
        $mom_nofon = $_GET['mom_nofon'];
        $mom_homeaddr = $_GET['mom_homeaddr'];
        $mom_homeposkod = $_GET['mom_homeposkod'];
        $mom_homebandar = $_GET['mom_homebandar'];
        $mom_homenegeri = $_GET['mom_homenegeri'];
        $mom_norumah = $_GET['mom_norumah'];

        //$confirmpass = $_GET['confirmpass']
        $query = "INSERT INTO student (sesisekolah, std_name, std_dob, std_nolahir, std_warga, std_jantina, std_penyakit, std_sk, fname, fic, fdob, fwarga, fkerja, fgaji, fjawatan, fofcaddr, fofcposkod, fofcbandar, fofcnegeri, fnopejabat, fnofon, mom_name, mom_ic, mom_dob, mom_warga, mom_kerja, mom_gaji, mom_jawatan, mom_ofcaddr, mom_poskod, mom_bandar, mom_negeri, mom_nopejabat, mom_nofon, mom_homeaddr, mom_homeposkod, mom_homebandar, mom_homenegeri, mom_norumah) values ('$sesisekolah', '$std_name','$std_dob', '$std_nolahir', '$std_warga', '$std_jantina', '$std_penyakit', '$std_sk', '$fname', '$fic', '$fdob', '$fwarga', '$fkerja', '$fgaji', '$fjawatan', '$fofcaddr', '$fofcposkod', '$fofcbandar', '$fofcnegeri', '$fnopejabat', '$fnofon', '$mom_name', '$mom_ic','$mom_dob', '$mom_warga', '$mom_kerja', '$mom_gaji', '$mom_jawatan', '$mom_ofcaddr', '$mom_poskod', '$mom_bandar', '$mom_negeri', '$mom_nopejabat', '$mom_nofon', '$mom_homeaddr', '$mom_homeposkod', '$mom_homebandar', '$mom_homenegeri', '$mom_norumah')";

        //execute the query
        $qr = mysqli_query($db, $query);
        if($qr == false){
          echo ("Query cannot be executed!<br>");
          echo ("SQL Error : " . mysqli_error($db));
        }
        else{//insert successfull
          //echo "The new user has been registered...<br>";
          //echo "<a href='success_reg.php'</a>";
          //buat template baru!!!
        }
      }
      ?>

      <?php
      include_once("../inc/scroolup.php");
      include_once("../inc/footer.php");
      include_once("../inc/logoutmodal.php");
      ?>
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/popper/popper.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.min.js"></script>