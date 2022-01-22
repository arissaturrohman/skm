<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Survei</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="align-middle text-center" rowspan="2">No</th>
            <th class="align-middle text-center" colspan="6">Pendidikan</th>
            <th class="align-middle text-center" colspan="5">Pekerjaan</th>
            <th class="align-middle text-center" rowspan="2">Usia</th>
            <th class="align-middle text-center" colspan="2">Jenis Kelamin</th>
            <th class="align-middle text-center" rowspan="2">U1</th>
            <th class="align-middle text-center" rowspan="2">U2</th>
            <th class="align-middle text-center" rowspan="2">U3</th>
            <th class="align-middle text-center" rowspan="2">U4</th>
            <th class="align-middle text-center" rowspan="2">U5</th>
            <th class="align-middle text-center" rowspan="2">U6</th>
            <th class="align-middle text-center" rowspan="2">U7</th>
            <th class="align-middle text-center" rowspan="2">U8</th>
            <th class="align-middle text-center" rowspan="2">U9</th>
            <th class="align-middle text-center" rowspan="2">IKM</th>
          </tr>
          <tr>
            <th class="align-middle text-center">Tidak Lulus SD</th>
            <th class="align-middle text-center">SD</th>
            <th class="align-middle text-center">SMP/MTs</th>
            <th class="align-middle text-center">SMA/SMK</th>
            <th class="align-middle text-center">S1</th>
            <th class="align-middle text-center">S2/S3</th>
            <th class="align-middle text-center">Pelajar/MHS</th>
            <th class="align-middle text-center">PNS/TNI/POLRI</th>
            <th class="align-middle text-center">Swasta</th>
            <th class="align-middle text-center">Wiraswasta</th>
            <th class="align-middle text-center">Lainnya</th>
            <th class="align-middle text-center">Laki-laki</th>
            <th class="align-middle text-center">Perempuan</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th class="text-center">JML</th>

            <?php
            $queryTidakLulus = $conn->query("SELECT COUNT(*) AS jumlahTidakLulus FROM tb_responden WHERE pendidikan = 1 AND created_at = '$_SESSION[tahun]'");
            $dataTidakLulus = $queryTidakLulus->fetch_assoc();
            $tidakLulus = $dataTidakLulus['jumlahTidakLulus'];
            ?>
            <th class="text-center"><?= $tidakLulus; ?></th>

            <?php
            $querySD = $conn->query("SELECT COUNT(*) AS jumlahSD FROM tb_responden WHERE pendidikan = 2 AND created_at = '$_SESSION[tahun]'");
            $dataSD = $querySD->fetch_assoc();
            $tampilSD = $dataSD['jumlahSD'];
            ?>
            <th class="text-center"><?= $tampilSD; ?></th>

            <?php
            $querySMP = $conn->query("SELECT COUNT(*) AS jumlahSMP FROM tb_responden WHERE pendidikan = 3 AND created_at = '$_SESSION[tahun]'");
            $dataSMP = $querySMP->fetch_assoc();
            $tampilSMP = $dataSMP['jumlahSMP'];
            ?>
            <th class="text-center"><?= $tampilSMP; ?></th>

            <?php
            $querySMA = $conn->query("SELECT COUNT(*) AS jumlahSMA FROM tb_responden WHERE pendidikan = 4 AND created_at = '$_SESSION[tahun]'");
            $dataSMA = $querySMA->fetch_assoc();
            $tampilSMA = $dataSMA['jumlahSMA'];
            ?>
            <th class="text-center"><?= $tampilSMA; ?></th>

            <?php
            $queryS1 = $conn->query("SELECT COUNT(*) AS jumlahS1 FROM tb_responden WHERE pendidikan = 5 AND created_at = '$_SESSION[tahun]'");
            $dataS1 = $queryS1->fetch_assoc();
            ?>
            <th class="text-center"><?= $dataS1['jumlahS1']; ?></th>

            <?php
            $queryS2 = $conn->query("SELECT COUNT(*) AS jumlahS2 FROM tb_responden WHERE pendidikan = 6 AND created_at = '$_SESSION[tahun]'");
            $dataS2 = $queryS2->fetch_assoc();
            $tampilS2 = $dataS2['jumlahS2'];
            ?>
            <th class="text-center"><?= $tampilS2; ?></th>

            <?php
            $queryPelajar = $conn->query("SELECT COUNT(*) AS jumlahPelajar FROM tb_responden WHERE pekerjaan = 1 AND created_at = '$_SESSION[tahun]'");
            $dataPelajar = $queryPelajar->fetch_assoc();
            $tampilPelajar = $dataPelajar['jumlahPelajar'];
            ?>
            <th class="text-center"><?= $tampilPelajar; ?></th>

            <?php
            $queryASN = $conn->query("SELECT COUNT(*) AS jumlahASN FROM tb_responden WHERE pekerjaan = 2 AND created_at = '$_SESSION[tahun]'");
            $dataASN = $queryASN->fetch_assoc();
            $tampilASN = $dataASN['jumlahASN'];
            ?>
            <th class="text-center"><?= $tampilASN; ?></th>

            <?php
            $querySwasta = $conn->query("SELECT COUNT(*) AS jumlahSwasta FROM tb_responden WHERE pekerjaan = 3 AND created_at = '$_SESSION[tahun]'");
            $dataSwasta = $querySwasta->fetch_assoc();
            $tampilSwasta = $dataSwasta['jumlahSwasta'];
            ?>
            <th class="text-center"><?= $tampilSwasta; ?></th>

            <?php
            $queryWiraswasta = $conn->query("SELECT COUNT(*) AS jumlahWiraswasta FROM tb_responden WHERE pekerjaan = 4 AND created_at = '$_SESSION[tahun]'");
            $dataWiraswasta = $queryWiraswasta->fetch_assoc();
            $tampilWiraswasta = $dataWiraswasta['jumlahWiraswasta'];
            ?>
            <th class="text-center"><?= $tampilWiraswasta; ?></th>

            <?php
            $queryLainnya = $conn->query("SELECT COUNT(*) AS jumlahLainnya FROM tb_responden WHERE pekerjaan = 5 AND created_at = '$_SESSION[tahun]'");
            $dataLainnya = $queryLainnya->fetch_assoc();
            $tampilLainnya = $dataLainnya['jumlahLainnya'];
            ?>
            <th class="text-center"><?= $tampilLainnya; ?></th>

            <?php
            $queryUsia = $conn->query("SELECT usia, COUNT(*) AS jumlahUsia FROM tb_responden WHERE created_at = '$_SESSION[tahun]'");
            $dataUsia = $queryUsia->fetch_assoc();
            $tampilUsia = $dataUsia['jumlahUsia'];
            ?>
            <th class="text-center"><?= $tampilUsia; ?></th>

            <?php
            $queryJK = $conn->query("SELECT COUNT(*) AS jumlahJK FROM tb_responden WHERE jk = 1 AND created_at = '$_SESSION[tahun]'");
            $dataJK = $queryJK->fetch_assoc();
            $tampilJK = $dataJK['jumlahJK'];
            ?>
            <th class="text-center"><?= $tampilJK; ?></th>

            <?php
            $queryJK = $conn->query("SELECT COUNT(*) AS jumlahJK FROM tb_responden WHERE jk = 2 AND created_at = '$_SESSION[tahun]'");
            $dataJK = $queryJK->fetch_assoc();
            $tampilJK = $dataJK['jumlahJK'];
            ?>
            <th class="text-center"><?= $tampilJK; ?></th>

            <?php
            $queryN1 = $conn->query("SELECT SUM(n1) AS jumlahN1 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN1 = $queryN1->fetch_assoc();
            $tampilN1 = $dataN1['jumlahN1'];
            ?>
            <th class="text-center"><?= $tampilN1; ?></th>

            <?php
            $queryN2 = $conn->query("SELECT SUM(n2) AS jumlahN2 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN2 = $queryN2->fetch_assoc();
            $tampilN2 = $dataN2['jumlahN2'];
            ?>
            <th class="text-center"><?= $tampilN2; ?></th>

            <?php
            $queryN3 = $conn->query("SELECT SUM(n3) AS jumlahN3 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN3 = $queryN3->fetch_assoc();
            $tampilN3 = $dataN3['jumlahN3'];
            ?>
            <th class="text-center"><?= $tampilN3; ?></th>

            <?php
            $queryN4 = $conn->query("SELECT SUM(n4) AS jumlahN4 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN4 = $queryN4->fetch_assoc();
            $tampilN4 = $dataN4['jumlahN4'];
            ?>
            <th class="text-center"><?= $tampilN4; ?></th>

            <?php
            $queryN5 = $conn->query("SELECT SUM(n5) AS jumlahN5 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN5 = $queryN5->fetch_assoc();
            $tampilN5 = $dataN5['jumlahN5'];
            ?>
            <th class="text-center"><?= $tampilN5; ?></th>

            <?php
            $queryN6 = $conn->query("SELECT SUM(n6) AS jumlahN6 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN6 = $queryN6->fetch_assoc();
            $tampilN6 = $dataN6['jumlahN6'];
            ?>
            <th class="text-center"><?= $tampilN6; ?></th>

            <?php
            $queryN7 = $conn->query("SELECT SUM(n7) AS jumlahN7 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN7 = $queryN7->fetch_assoc();
            $tampilN7 = $dataN7['jumlahN7'];
            ?>
            <th class="text-center"><?= $tampilN7; ?></th>

            <?php
            $queryN8 = $conn->query("SELECT SUM(n8) AS jumlahN8 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN8 = $queryN8->fetch_assoc();
            $tampilN8 = $dataN8['jumlahN8'];
            ?>
            <th class="text-center"><?= $tampilN8; ?></th>

            <?php
            $queryN9 = $conn->query("SELECT SUM(n9) AS jumlahN9 FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN9 = $queryN9->fetch_assoc();
            $tampilN9 = $dataN9['jumlahN9'];
            ?>
            <th class="text-center"><?= $tampilN9; ?></th>
            <th class="text-center"></th>
          </tr>
          <tr>
            <th class="text-center" colspan="15">NRR per unsur = Jumlah nilai per unsur : Jumlah kuesioner yang terisi</th>
            <?php
            $queryN1 = $conn->query("SELECT AVG (n1) 'rataN1' FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN1 = $queryN1->fetch_assoc();
            $tampilN1 = $dataN1['rataN1'];
            ?>
            <th class="text-center"><?= round($tampilN1, 2); ?></th>

            <?php
            $queryN2 = $conn->query("SELECT AVG (n2) 'rataN2'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN2 = $queryN2->fetch_assoc();
            $tampilN2 = $dataN2['rataN2'];
            ?>
            <th class="text-center"><?= round($tampilN2, 2); ?></th>

            <?php
            $queryN3 = $conn->query("SELECT AVG (n3) 'rataN3'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN3 = $queryN3->fetch_assoc();
            $tampilN3 = $dataN3['rataN3'];
            ?>
            <th class="text-center"><?= round($tampilN3, 2); ?></th>

            <?php
            $queryN4 = $conn->query("SELECT AVG (n4) 'rataN4'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN4 = $queryN4->fetch_assoc();
            $tampilN4 = $dataN4['rataN4'];
            ?>
            <th class="text-center"><?= round($tampilN4, 2); ?></th>

            <?php
            $queryN5 = $conn->query("SELECT AVG (n5) 'rataN5'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN5 = $queryN5->fetch_assoc();
            $tampilN5 = $dataN5['rataN5'];
            ?>
            <th class="text-center"><?= round($tampilN5, 2); ?></th>

            <?php
            $queryN6 = $conn->query("SELECT AVG (n6) 'rataN6'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN6 = $queryN6->fetch_assoc();
            $tampilN6 = $dataN6['rataN6'];
            ?>
            <th class="text-center"><?= round($tampilN6, 2); ?></th>

            <?php
            $queryN7 = $conn->query("SELECT AVG (n7) 'rataN7'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN7 = $queryN7->fetch_assoc();
            $tampilN7 = $dataN7['rataN7'];
            ?>
            <th class="text-center"><?= round($tampilN7, 2); ?></th>

            <?php
            $queryN8 = $conn->query("SELECT AVG (n8) 'rataN8'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN8 = $queryN8->fetch_assoc();
            $tampilN8 = $dataN8['rataN8'];
            ?>
            <th class="text-center"><?= round($tampilN8, 2); ?></th>

            <?php
            $queryN9 = $conn->query("SELECT AVG (n9) 'rataN9'  FROM tb_survei WHERE created_at = '$_SESSION[tahun]'");
            $dataN9 = $queryN9->fetch_assoc();
            $tampilN9 = $dataN9['rataN9'];
            ?>
            <th class="text-center"><?= round($tampilN9, 2); ?></th>

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
            <th class="text-center"><?= round($rata_rataIKM, 2); ?></th>
          </tr>
          <tr>
            <th class="text-center" colspan="15">NRR tertimbang Per unsur = NRR per unsur x 0.11</th>
            <th class="text-center"><?= $NRR1 = round(($tampilN1 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR2 = round(($tampilN2 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR3 = round(($tampilN3 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR4 = round(($tampilN4 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR5 = round(($tampilN5 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR6 = round(($tampilN6 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR7 = round(($tampilN7 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR8 = round(($tampilN8 * 0.11), 2); ?></th>
            <th class="text-center"><?= $NRR9 = round(($tampilN9 * 0.11), 2); ?></th>

            <?php
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
            <th class="text-center"><?= $sumNRR; ?></th>
          </tr>
          <tr>
            <th class="text-center" colspan="15">IKM Unit Pelayanan</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th class="text-center">
              <?= $IKMPelayanan = round(($sumNRR * 25), 2); ?>
            </th>
          </tr>
          <tr>
            <th class="text-center" colspan="15">Kategori Mutu Pelayanan</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <?php
            $IKMPelayanan = round(($sumNRR * 25), 2);
            if ($IKMPelayanan >= 81.26) {
              $tampilIKM = "A";
            } elseif ($IKMPelayanan >= 62.51) {
              $tampilIKM = "B";
            } elseif ($IKMPelayanan >= 43.76) {
              $tampilIKM = "C";
            } else {
              $tampilIKM = "D";
            }
            ?>
            <th class="text-center"><?= $tampilIKM; ?></th>
          </tr>
          <tr>
            <th class="text-center" colspan="15">Kinerja</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <?php
            $IKMPelayanan = round(($sumNRR * 25), 2);
            if ($IKMPelayanan >= 81.26) {
              $kinerja = "SANGAT BAIK";
            } elseif ($IKMPelayanan >= 62.51) {
              $kinerja = "BAIK";
            } elseif ($IKMPelayanan >= 43.76) {
              $kinerja = "KURANG BAIK";
            } else {
              $kinerja = "TIDAK BAIK";
            }
            ?>
            <th class="text-center" colspan="2"><?= $kinerja; ?></th>
          </tr>
        </tfoot>
        <tbody>
          <!-- Data dari database -->
          <?php
          $no = 1;
          $query = $conn->query("SELECT * FROM tb_survei WHERE created_at = '$tahun'");
          while ($data = $query->fetch_assoc()) {
          ?>
            <tr>
              <td class="text-center"><?= $no++; ?></td>

              <?php
              $id_responden = $data['id_responden'];
              $sqlResponden = $conn->query("SELECT * FROM tb_responden WHERE id_responden = '$id_responden' AND created_at = '$tahun'");
              while ($dataResponden = $sqlResponden->fetch_assoc()) {
                $pendidikan = $dataResponden['pendidikan'];
                $pekerjaan = $dataResponden['pekerjaan'];
                $jk = $dataResponden['jk'];
                // var_dump($dataResponden);
                // die;

                if ($pendidikan == 1) {
                  $nilaiPendidikan = 1;
                } else {
                  $nilaiPendidikan = "-";
                }
              ?>
                <td class="text-center"><?= $nilaiPendidikan; ?></td>
                <?php
                if ($pendidikan == 2) {
                  $nilaiPendidikan = 1;
                } else {
                  $nilaiPendidikan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaiPendidikan; ?></td>
                <?php
                if ($pendidikan == 3) {
                  $nilaiPendidikan = 1;
                } else {
                  $nilaiPendidikan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaiPendidikan; ?></td>
                <?php
                if ($pendidikan == 4) {
                  $nilaiPendidikan = 1;
                } else {
                  $nilaiPendidikan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaiPendidikan; ?></td>
                <?php
                if ($pendidikan == 5) {
                  $nilaiPendidikan = 1;
                } else {
                  $nilaiPendidikan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaiPendidikan; ?></td>
                <?php
                if ($pendidikan == 6) {
                  $nilaiPendidikan = 1;
                } else {
                  $nilaiPendidikan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaiPendidikan; ?></td>
                <?php
                if ($pekerjaan == 1) {
                  $nilaipekerjaan = 1;
                } else {
                  $nilaipekerjaan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaipekerjaan; ?></td>
                <?php
                if ($pekerjaan == 2) {
                  $nilaipekerjaan = 1;
                } else {
                  $nilaipekerjaan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaipekerjaan; ?></td>
                <?php
                if ($pekerjaan == 3) {
                  $nilaipekerjaan = 1;
                } else {
                  $nilaipekerjaan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaipekerjaan; ?></td>
                <?php
                if ($pekerjaan == 4) {
                  $nilaipekerjaan = 1;
                } else {
                  $nilaipekerjaan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaipekerjaan; ?></td>
                <?php
                if ($pekerjaan == 5) {
                  $nilaipekerjaan = 1;
                } else {
                  $nilaipekerjaan = "-";
                }
                ?>
                <td class="text-center"><?= $nilaipekerjaan; ?></td>
                <td class="text-center"><?= $dataResponden['usia']; ?></td>
                <?php
                if ($jk == 1) {
                  $nilaijk = 1;
                } else {
                  $nilaijk = "-";
                }
                ?>
                <td class="text-center"><?= $nilaijk; ?></td>
                <?php
                if ($jk == 2) {
                  $nilaijk = 1;
                } else {
                  $nilaijk = "-";
                }
                ?>
                <td class="text-center"><?= $nilaijk; ?></td>
                <td class="text-center"><?= $data['n1']; ?></td>
                <td class="text-center"><?= $data['n2']; ?></td>
                <td class="text-center"><?= $data['n3']; ?></td>
                <td class="text-center"><?= $data['n4']; ?></td>
                <td class="text-center"><?= $data['n5']; ?></td>
                <td class="text-center"><?= $data['n6']; ?></td>
                <td class="text-center"><?= $data['n7']; ?></td>
                <td class="text-center"><?= $data['n8']; ?></td>
                <td class="text-center"><?= $data['n9']; ?></td>
                <td class="text-center"></td>
            </tr>
        <?php }
            } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>