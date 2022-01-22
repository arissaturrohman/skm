<?php
session_start();
include('../inc/config.php');
?>
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  </div>

  <!-- Content Row -->
  <div class="row">
    <?php
    $tahun = $_SESSION['tahun'];
    $sqlResponden = $conn->query("SELECT COUNT(*) AS jumlahResponden FROM tb_responden WHERE created_at = '$_SESSION[tahun]'");
    $dataResponden = $sqlResponden->fetch_assoc();
    $jumlahResponden = $dataResponden['jumlahResponden'];
    ?>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                jumlah responden</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahResponden; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    $tahun = $_SESSION['tahun'];
    $sqlSurvei = $conn->query("SELECT COUNT(*) AS jumlahSurvei FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataSurvei = $sqlSurvei->fetch_assoc();
    $jumlah = $dataSurvei['jumlahSurvei'];
    ?>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                jumlah survei</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    $queryN1 = $conn->query("SELECT AVG (n1) 'rataN1'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN1 = $queryN1->fetch_assoc();
    $tampilN1 = $dataN1['rataN1'];
    ?>
    <?php
    $queryN2 = $conn->query("SELECT AVG (n2) 'rataN2'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN2 = $queryN2->fetch_assoc();
    $tampilN2 = $dataN2['rataN2'];
    ?>
    <?php
    $queryN3 = $conn->query("SELECT AVG (n3) 'rataN3'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN3 = $queryN3->fetch_assoc();
    $tampilN3 = $dataN3['rataN3'];
    ?>
    <?php
    $queryN4 = $conn->query("SELECT AVG (n4) 'rataN4'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN4 = $queryN4->fetch_assoc();
    $tampilN4 = $dataN4['rataN4'];
    ?>
    <?php
    $queryN5 = $conn->query("SELECT AVG (n5) 'rataN5'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN5 = $queryN5->fetch_assoc();
    $tampilN5 = $dataN5['rataN5'];
    ?>
    <?php
    $queryN6 = $conn->query("SELECT AVG (n6) 'rataN6'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN6 = $queryN6->fetch_assoc();
    $tampilN6 = $dataN6['rataN6'];
    ?>
    <?php
    $queryN7 = $conn->query("SELECT AVG (n7) 'rataN7'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN7 = $queryN7->fetch_assoc();
    $tampilN7 = $dataN7['rataN7'];
    ?>
    <?php
    $queryN8 = $conn->query("SELECT AVG (n8) 'rataN8'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN8 = $queryN8->fetch_assoc();
    $tampilN8 = $dataN8['rataN8'];
    ?>
    <?php
    $queryN9 = $conn->query("SELECT AVG (n9) 'rataN9'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
    $dataN9 = $queryN9->fetch_assoc();
    $tampilN9 = $dataN9['rataN9'];
    ?>
    <?php
    $NRR1 = round(($tampilN1 * 0.11), 2);
    $NRR2 = round(($tampilN2 * 0.11), 2);
    $NRR3 = round(($tampilN3 * 0.11), 2);
    $NRR4 = round(($tampilN4 * 0.11), 2);
    $NRR5 = round(($tampilN5 * 0.11), 2);
    $NRR6 = round(($tampilN6 * 0.11), 2);
    $NRR7 = round(($tampilN7 * 0.11), 2);
    $NRR8 = round(($tampilN8 * 0.11), 2);
    $NRR9 = round(($tampilN9 * 0.11), 2);

    $jumlahNRR = [
      'NRR1' => $NRR1,
      'NRR2' => $NRR2,
      'NRR3' => $NRR3,
      'NRR4' => $NRR4,
      'NRR5' => $NRR5,
      'NRR6' => $NRR6,
      'NRR7' => $NRR7,
      'NRR8' => $NRR8,
      'NRR9' => $NRR9
    ];
    $sumNRR = array_sum($jumlahNRR);
    ?>
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                nilai ikm
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $IKMPelayanan = round(($sumNRR * 25), 2); ?></div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
    $IKMPelayanan = round(($sumNRR * 25), 2);
    if ($IKMPelayanan >= 81.26) {
      $tampilIKM = "A / SANGAT BAIK";
    } elseif ($IKMPelayanan >= 62.51) {
      $tampilIKM = "B / BAIK";
    } elseif ($IKMPelayanan >= 43.76) {
      $tampilIKM = "C / KURANG BAIK";
    } else {
      $tampilIKM = "D / TIDAK BAIK";
    }
    ?>
    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                status</div>
              <div class=" text-sm mb-0 font-weight-bold text-gray-800"><?= $tampilIKM; ?></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Chart -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="true">Pendidikan</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="pekerjaan-tab" data-toggle="tab" href="#pekerjaan" role="tab" aria-controls="pekerjaan" aria-selected="false">Pekerjaan</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="usia-tab" data-toggle="tab" href="#usia" role="tab" aria-controls="usia" aria-selected="false">Usia</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="jk-tab" data-toggle="tab" href="#jk" role="tab" aria-controls="jk" aria-selected="false">Jenis Kelamin</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="ikm-tab" data-toggle="tab" href="#ikm" role="tab" aria-controls="ikm" aria-selected="false">Tingkat Pelayanan</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
    <div class="row my-3">
      <div class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th width="3%">No</th>
              <th class="text-center">Tingkat Pendidikan</th>
              <th width="5%">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $queryTidakLulus = $conn->query("SELECT COUNT(*) AS jumlahTidakLulus FROM tb_responden WHERE pendidikan = 1 AND created_at = '$_SESSION[tahun]'");
            $dataTidakLulus = $queryTidakLulus->fetch_assoc();
            $tidakLulus = $dataTidakLulus['jumlahTidakLulus'];
            ?>
            <?php
            $querySD = $conn->query("SELECT COUNT(*) AS jumlahSD FROM tb_responden WHERE pendidikan = 2 AND created_at = '$_SESSION[tahun]'");
            $dataSD = $querySD->fetch_assoc();
            $tampilSD = $dataSD['jumlahSD'];
            ?>
            <?php
            $querySMP = $conn->query("SELECT COUNT(*) AS jumlahSMP FROM tb_responden WHERE pendidikan = 3 AND created_at = '$_SESSION[tahun]'");
            $dataSMP = $querySMP->fetch_assoc();
            $tampilSMP = $dataSMP['jumlahSMP'];
            ?>
            <?php
            $querySMA = $conn->query("SELECT COUNT(*) AS jumlahSMA FROM tb_responden WHERE pendidikan = 4 AND created_at = '$_SESSION[tahun]'");
            $dataSMA = $querySMA->fetch_assoc();
            $tampilSMA = $dataSMA['jumlahSMA'];
            ?>
            <?php
            $queryS1 = $conn->query("SELECT COUNT(*) AS jumlahS1 FROM tb_responden WHERE pendidikan = 5 AND created_at = '$_SESSION[tahun]'");
            $dataS1 = $queryS1->fetch_assoc();
            $tampilS1 = $dataS1['jumlahS1'];
            ?>
            <?php
            $queryS2 = $conn->query("SELECT COUNT(*) AS jumlahS2 FROM tb_responden WHERE pendidikan = 6 AND created_at = '$_SESSION[tahun]'");
            $dataS2 = $queryS2->fetch_assoc();
            $tampilS2 = $dataS2['jumlahS2'];
            ?>
            <?php
            $queryTotalPendidikan = $conn->query("SELECT COUNT(*) AS jumlahPendidikan FROM tb_responden WHERE created_at = '$_SESSION[tahun]'");
            $dataPendidikan = $queryTotalPendidikan->fetch_assoc();
            $tampilPendidikan = $dataPendidikan['jumlahPendidikan'];
            ?>

            <tr>
              <td>1</td>
              <td>Tidak Tamat SD</td>
              <td class="text-center"><?= $tidakLulus; ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td>SD</td>
              <td class="text-center"><?= $tampilSD; ?></td>
            </tr>
            <tr>
              <td>3</td>
              <td>SMP/MTs</td>
              <td class="text-center"><?= $tampilSMP; ?></td>
            </tr>
            <tr>
              <td>4</td>
              <td>SMA/SMK</td>
              <td class="text-center"><?= $tampilSMA; ?></td>
            </tr>
            <tr>
              <td>5</td>
              <td>DIPLOMA/S1</td>
              <td class="text-center"><?= $tampilS1; ?></td>
            </tr>
            <tr>
              <td>6</td>
              <td>S2/S3</td>
              <td class="text-center"><?= $tampilS2; ?></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center font-weight-bold">Total</td>
              <td class="text-center font-weight-bold"><?= $tampilPendidikan; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <canvas id="chartPendidikan" width="100%" height="100%"></canvas>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pekerjaan" role="tabpanel" aria-labelledby="pekerjaan-tab">
    <div class="row my-3">
      <div class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th width="3%">No</th>
              <th class="text-center">Pekerjaan</th>
              <th width="5%">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $queryPelajar = $conn->query("SELECT COUNT(*) AS jumlahPelajar FROM tb_responden WHERE pekerjaan = 1 AND created_at = '$_SESSION[tahun]'");
            $dataPelajar = $queryPelajar->fetch_assoc();
            $Pelajar = $dataPelajar['jumlahPelajar'];
            ?>
            <?php
            $queryPNS = $conn->query("SELECT COUNT(*) AS jumlahPNS FROM tb_responden WHERE pekerjaan = 2 AND created_at = '$_SESSION[tahun]'");
            $dataPNS = $queryPNS->fetch_assoc();
            $tampilPNS = $dataPNS['jumlahPNS'];
            ?>
            <?php
            $querySwasta = $conn->query("SELECT COUNT(*) AS jumlahSwasta FROM tb_responden WHERE pekerjaan = 3 AND created_at = '$_SESSION[tahun]'");
            $dataSwasta = $querySwasta->fetch_assoc();
            $tampilSwasta = $dataSwasta['jumlahSwasta'];
            ?>
            <?php
            $queryWiraswasta = $conn->query("SELECT COUNT(*) AS jumlahWiraswasta FROM tb_responden WHERE pekerjaan = 4 AND created_at = '$_SESSION[tahun]'");
            $dataWiraswasta = $queryWiraswasta->fetch_assoc();
            $tampilWiraswasta = $dataWiraswasta['jumlahWiraswasta'];
            ?>
            <?php
            $queryLainnya = $conn->query("SELECT COUNT(*) AS jumlahLainnya FROM tb_responden WHERE pekerjaan = 5 AND created_at = '$_SESSION[tahun]'");
            $dataLainnya = $queryLainnya->fetch_assoc();
            $tampilLainnya = $dataLainnya['jumlahLainnya'];
            ?>
            <?php
            $queryTotalpekerjaan = $conn->query("SELECT COUNT(*) AS jumlahpekerjaan FROM tb_responden WHERE created_at = '$_SESSION[tahun]'");
            $datapekerjaan = $queryTotalpekerjaan->fetch_assoc();
            $tampilpekerjaan = $datapekerjaan['jumlahpekerjaan'];
            ?>

            <tr>
              <td>1</td>
              <td>Pelajar / Mahasiswa</td>
              <td class="text-center"><?= $Pelajar; ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td>PNS / TNI / POLRI</td>
              <td class="text-center"><?= $tampilPNS; ?></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Swasta</td>
              <td class="text-center"><?= $tampilSwasta; ?></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Wiraswasta</td>
              <td class="text-center"><?= $tampilWiraswasta; ?></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Lainnya</td>
              <td class="text-center"><?= $tampilLainnya; ?></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center font-weight-bold">Total</td>
              <td class="text-center font-weight-bold"><?= $tampilpekerjaan; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <canvas id="chartPekerjaan" width="100%" height="100%"></canvas>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="usia" role="tabpanel" aria-labelledby="usia-tab">
    <div class="row my-3">
      <div class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th width="3%">No</th>
              <th class="text-center">Usia Responden</th>
              <th width="5%">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query30 = $conn->query("SELECT COUNT(*) AS jumlah30 FROM tb_responden WHERE usia BETWEEN 0 AND 30 AND created_at = '$_SESSION[tahun]'");
            $data30 = $query30->fetch_assoc();
            $usia30 = $data30['jumlah30'];
            ?>
            <?php
            $query40 = $conn->query("SELECT COUNT(*) AS jumlah40 FROM tb_responden WHERE usia BETWEEN 31 AND 40 AND created_at = '$_SESSION[tahun]'");
            $data40 = $query40->fetch_assoc();
            $tampil40 = $data40['jumlah40'];
            ?>
            <?php
            $query50 = $conn->query("SELECT COUNT(*) AS jumlah50 FROM tb_responden WHERE usia BETWEEN 41 AND 50 AND created_at = '$_SESSION[tahun]'");
            $data50 = $query50->fetch_assoc();
            $tampil50 = $data50['jumlah50'];
            ?>
            <?php
            $queryLansia = $conn->query("SELECT COUNT(*) AS jumlahLansia FROM tb_responden WHERE usia > 50 AND created_at = '$_SESSION[tahun]'");
            $dataLansia = $queryLansia->fetch_assoc();
            $tampilLansia = $dataLansia['jumlahLansia'];
            ?>
            <?php
            $queryTotalusia = $conn->query("SELECT COUNT(*) AS jumlahusia FROM tb_responden WHERE created_at = '$_SESSION[tahun]'");
            $datausia = $queryTotalusia->fetch_assoc();
            $tampilusia = $datausia['jumlahusia'];
            ?>

            <tr>
              <td>1</td>
              <td>
                < 30</td>
              <td class="text-center"><?= $usia30; ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td>31 - 40</td>
              <td class="text-center"><?= $tampil40; ?></td>
            </tr>
            <tr>
              <td>3</td>
              <td>41 - 50</td>
              <td class="text-center"><?= $tampil50; ?></td>
            </tr>
            <tr>
              <td>4</td>
              <td>> 51 Keatas</td>
              <td class="text-center"><?= $tampilLansia; ?></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center font-weight-bold">Total</td>
              <td class="text-center font-weight-bold"><?= $tampilusia; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <canvas id="chartUsia" width="100%" height="100%"></canvas>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="jk" role="tabpanel" aria-labelledby="jk-tab">
    <div class="row my-3">
      <div class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th width="3%">No</th>
              <th class="text-center">Jenis Kelamin</th>
              <th width="5%">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $queryL = $conn->query("SELECT COUNT(*) AS jumlahL FROM tb_responden WHERE jk = 1 AND created_at = '$_SESSION[tahun]'");
            $dataL = $queryL->fetch_assoc();
            $tampilL = $dataL['jumlahL'];
            ?>
            <?php
            $queryP = $conn->query("SELECT COUNT(*) AS jumlahP FROM tb_responden WHERE jk = 2 AND created_at = '$_SESSION[tahun]'");
            $dataP = $queryP->fetch_assoc();
            $tampilP = $dataP['jumlahP'];
            ?>
            <?php
            $queryTotaljk = $conn->query("SELECT COUNT(*) AS LP FROM tb_responden WHERE created_at = '$_SESSION[tahun]'");
            $datajk = $queryTotaljk->fetch_assoc();
            $tampiljk = $datajk['LP'];
            ?>

            <tr>
              <td>1</td>
              <td>Laki-laki</td>
              <td class="text-center"><?= $tampilL; ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Perempuan</td>
              <td class="text-center"><?= $tampilP; ?></td>
            </tr>
            <tr>
              <td colspan="2" class="text-center font-weight-bold">Total</td>
              <td class="text-center font-weight-bold"><?= $tampiljk; ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <canvas id="chartJK" width="100%" height="100%"></canvas>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="ikm" role="tabpanel" aria-labelledby="ikm-tab">
    <div class="row my-3">
      <div class="col-md-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th width="3%">No</th>
              <th class="text-center">Tingkat Pelayanan</th>
              <th width="5%">Jumlah</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $queryN1 = $conn->query("SELECT AVG (n1) 'rataN1' FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN1 = $queryN1->fetch_assoc();
            $tampilN1 = $dataN1['rataN1'];
            ?>
            <tr>
              <td>1</td>
              <td>Persyaratan pelayanan</td>
              <td class="text-center"><?= round($tampilN1, 2); ?></td>
            </tr>
            <?php
            $queryN2 = $conn->query("SELECT AVG (n2) 'rataN2'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN2 = $queryN2->fetch_assoc();
            $tampilN2 = $dataN2['rataN2'];
            ?>
            <tr>
              <td>2</td>
              <td>Kemudahan prosedur pelayanan</td>
              <td class="text-center"><?= round($tampilN2, 2); ?></td>
            </tr>
            <?php
            $queryN3 = $conn->query("SELECT AVG (n3) 'rataN3'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN3 = $queryN3->fetch_assoc();
            $tampilN3 = $dataN3['rataN3'];
            ?>
            <tr>
              <td>3</td>
              <td>Ketepatan waktu pelayanan</td>
              <td class="text-center"><?= round($tampilN3, 2); ?></td>
            </tr>
            <?php
            $queryN4 = $conn->query("SELECT AVG (n4) 'rataN4'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN4 = $queryN4->fetch_assoc();
            $tampilN4 = $dataN4['rataN4'];
            ?>
            <tr>
              <td>4</td>
              <td>Kejelasan / kesesuaian biaya pelayanan</td>
              <td class="text-center"><?= round($tampilN4, 2); ?></td>
            </tr>
            <?php
            $queryN5 = $conn->query("SELECT AVG (n5) 'rataN5'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN5 = $queryN5->fetch_assoc();
            $tampilN5 = $dataN5['rataN5'];
            ?>
            <tr>
              <td>5</td>
              <td>Kepastian produk layanan</td>
              <td class="text-center"><?= round($tampilN5, 2); ?></td>
            </tr>
            <?php
            $queryN6 = $conn->query("SELECT AVG (n6) 'rataN6'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN6 = $queryN6->fetch_assoc();
            $tampilN6 = $dataN6['rataN6'];
            ?>
            <tr>
              <td>6</td>
              <td>Kompetensi petugas pelayanan</td>
              <td class="text-center"><?= round($tampilN6, 2); ?></td>
            </tr>
            <?php
            $queryN7 = $conn->query("SELECT AVG (n7) 'rataN7'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN7 = $queryN7->fetch_assoc();
            $tampilN7 = $dataN7['rataN7'];
            ?>
            <tr>
              <td>7</td>
              <td>Perilaku petugas layanan</td>
              <td class="text-center"><?= round($tampilN7, 2); ?></td>
            </tr>
            <?php
            $queryN8 = $conn->query("SELECT AVG (n8) 'rataN8'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN8 = $queryN8->fetch_assoc();
            $tampilN8 = $dataN8['rataN8'];
            ?>
            <tr>
              <td>8</td>
              <td>Kejelasan maklumat pelayanan</td>
              <td class="text-center"><?= round($tampilN8, 2); ?></td>
            </tr>
            <?php
            $queryN9 = $conn->query("SELECT AVG (n9) 'rataN9'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN9 = $queryN9->fetch_assoc();
            $tampilN9 = $dataN9['rataN9'];
            ?>
            <tr>
              <td>9</td>
              <td>Penanganan pengaduan, saran dan masukan pelayanan</td>
              <td class="text-center"><?= round($tampilN9, 2); ?></td>
            </tr>
            <?php
            $tahun = $_SESSION['tahun'];
            $queryRataIKM = $conn->query("SELECT * FROM tb_survei WHERE created_at = '$tahun'");
            $dataRataIKM = $queryRataIKM->fetch_assoc();
            $arrayRataIKM = [
              'n1' => $dataRataIKM['n1'],
              'n2' => $dataRataIKM['n2'],
              'n3' => $dataRataIKM['n3'],
              'n4' => $dataRataIKM['n4'],
              'n5' => $dataRataIKM['n5'],
              'n6' => $dataRataIKM['n6'],
              'n7' => $dataRataIKM['n7'],
              'n8' => $dataRataIKM['n8'],
              'n9' => $dataRataIKM['n9']
            ];
            $sumNilai = array_sum($arrayRataIKM);
            $rata_rataIKM = $sumNilai / 9;

            ?>
            <tr>
              <td colspan="2" class="text-right font-weight-bold">NRR</td>
              <td class="text-center font-weight-bold"><?= round($rata_rataIKM, 2); ?></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <canvas id="chartIKM" width="100%" height="100%"></canvas>
      </div>
    </div>
  </div>
</div>

<!-- Chart Pendidikan -->
<script>
  var ctx = document.getElementById("chartPendidikan").getContext('2d');
  var chartPendidikan = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Tidak Lulus", "SD", "SMP/MTs", "SMA/SMK", "S1", "S2/S3"],
      datasets: [{
        label: 'Tingkat Pendidikan Responden',
        data: [
          <?php
          echo $tidakLulus = $dataTidakLulus['jumlahTidakLulus'];
          ?>,
          <?php
          echo $tampilSD = $dataSD['jumlahSD'];
          ?>,
          <?php
          echo $tampilSMP = $dataSMP['jumlahSMP'];
          ?>,
          <?php
          echo $tampilSMA = $dataSMA['jumlahSMA'];
          ?>,
          <?php
          echo $tampilS1 = $dataS1['jumlahS1'];
          ?>,
          <?php
          echo $tampilS2 = $dataS2['jumlahS2'];
          ?>
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<!-- Chart Pekerjaan -->
<script>
  var ctx = document.getElementById("chartPekerjaan").getContext('2d');
  var chartPekerjaan = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Pelajar/Mahasiswa", "PNS/TNI/POLRI", "Swasta", "Wiraswasta", "Lainnya"],
      datasets: [{
        label: 'Pekerjaan',
        data: [
          <?php
          echo $Pelajar = $dataPelajar['jumlahPelajar'];
          ?>,
          <?php
          echo $tampilPNS = $dataPNS['jumlahPNS'];
          ?>,
          <?php
          echo $tampilSwasta = $dataSwasta['jumlahSwasta'];
          ?>,
          <?php
          echo $tampilWiraswasta = $dataWiraswasta['jumlahWiraswasta'];
          ?>,
          <?php
          echo $tampilLainnya = $dataLainnya['jumlahLainnya'];
          ?>
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<!-- Chart Usia -->
<script>
  var ctx = document.getElementById("chartUsia").getContext('2d');
  var chartUsia = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["< 30", "31 - 40", "41 - 50", "> 51 Keatas"],
      datasets: [{
        label: 'Usia Responden',
        data: [
          <?php
          echo $usia30;
          ?>,
          <?php
          echo $tampil40;
          ?>,
          <?php
          echo $tampil50;
          ?>,
          <?php
          echo $tampilLansia;
          ?>
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<!-- Chart JK -->
<script>
  var ctx = document.getElementById("chartJK").getContext('2d');
  var chartJK = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["Laki-laki", "Perempuan"],
      datasets: [{
        label: 'Jenis Kelamin',
        data: [
          <?php
          echo $tampilL;
          ?>,
          <?php
          echo $tampilP;
          ?>
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<!-- Chart IKM -->
<script>
  var ctx = document.getElementById("chartIKM").getContext('2d');
  var chartIKM = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Persyaratan pelayanan", "Kemudahan prosedur pelayanan", "Ketepatan waktu pelayanan", "Kejelasan / kesesuaian biaya pelayanan", "Kepastian produk layanan", "Kompetensi petugas pelayanan", "Perilaku petugas layanan", "Kejelasan maklumat pelayanan", "Penanganan pengaduan, saran dan masukan pelayanan"],
      datasets: [{
        label: 'Grafik Tingkat Pelayanan',
        data: [
          <?php
          echo round($tampilN1, 2);
          ?>,
          <?php
          echo round($tampilN2, 2);
          ?>,
          <?php
          echo round($tampilN3, 2);
          ?>,
          <?php
          echo round($tampilN4, 2);
          ?>,
          <?php
          echo round($tampilN5, 2);
          ?>,
          <?php
          echo round($tampilN6, 2);
          ?>,
          <?php
          echo round($tampilN7, 2);
          ?>,
          <?php
          echo round($tampilN8, 2);
          ?>,
          <?php
          echo round($tampilN9, 2);
          ?>
        ],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>