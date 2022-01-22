<?php
error_reporting(0);
include("inc/config.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Jumbotron Template · Bootstrap v4.6</title>
  <!-- Custom fonts for this template-->
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="asset/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Sweetalert-->
  <link href="asset/css/sweetalert.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

  <main role="main">
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <p class="text-center">Aplikasi Survei Kepuasan Masyarakat dalam Hal Pelayanan di Kecamatan Gajah</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <form action="proses-survei.php" method="post" onSubmit="validasi()">
        <table>
          <tr>
            <td>I.</td>
            <td>PELAYANAN</td>
            <td>:</td>
            <td class="font-weight-bold">Kecamatan Gajah</td>
          </tr>
          <tr>
            <td>II.</td>
            <td>IDENTITAS RESPONDEN</td>
            <td>:</td>
            <td>Pilih salah satu sesuai pilihan Anda</td>
          </tr>
          <tr>
            <td></td>
            <td>Nama Responden</td>
            <td>:</td>
            <td>
              <input type="text" class="form-control" name="nama" id="nama" value="<?= $_POST['nama']; ?>" required>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>Pendidikan</td>
            <td>:</td>
            <td>
              <select name="pendidikan" value="<?= $_POST['pendidikan']; ?>" id="pendidikan" class="form-control" required>
                <option value="">--Pilih--</option>
                <option value="1">Tidak Lulus SD</option>
                <option value="2">SD</option>
                <option value="3">SMP/MTs</option>
                <option value="4">SMA/SMK</option>
                <option value="5">S1</option>
                <option value="6">S2/S3</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>Pekerjaan</td>
            <td>:</td>
            <td>
              <select name="pekerjaan" value="<?= $_POST['pekerjaan']; ?>" id="pekerjaan" class="form-control" required>
                <option value="">--Pilih--</option>
                <option value="1">Pelajar/Mahasiswa</option>
                <option value="2">PNS/TNI/POLRI</option>
                <option value="3">Swasta</option>
                <option value="4">Wiraswasta</option>
                <option value="5">Tidak bekerja</option>
              </select>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>Usia</td>
            <td>:</td>
            <td>
              <input type="text" class="form-control" name="usia" id="usia" value="<?= $_POST['usia']; ?>" required>
            </td>
            <td>tahun</td>
          </tr>
          <tr>
            <td></td>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
              <select name="jk" id="jk" value="<?= $_POST['jk']; ?>" class="form-control" required>
                <option value="">--Pilih--</option>
                <option value="1">Laki-laki</option>
                <option value="2">Perempuan</option>
              </select>
            </td>
          </tr>
        </table>
        <div class="mt-5">
          <p class="font-weight-bold font-italic">Petunjuk :</p>
          <p>Berilah penilaian terhadap pertanyaan di bawah ini dengan memilih salah satu jawaban pada kotak pilihan sesuai dengan penilaian anda terhadap kenyataan yang ada.</p>
          <hr>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
              <th class="text-center">JAWABAN</th>
              <th class="text-center" width="20%">NILAI</th>
            </tr>
            <tr>
              <td class="ml-3">Tidak Puas</td>
              <td class="text-center">1</td>
            </tr>
            <tr>
              <td>Kurang Puas</td>
              <td class="text-center">2</td>
            </tr>
            <tr>
              <td>Puas</td>
              <td class="text-center">3</td>
            </tr>
            <tr>
              <td>Sangat Puas</td>
              <td class="text-center">4</td>
            </tr>
          </table>
        </div>
        <div class="mt-5">
          <table>
            <tr>
              <td>III.</td>
              <td>PERTANYAAN KINERJA PELAYANAN</td>
            </tr>
          </table>
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="align-middle text-center">No</th>
                <th class="align-middle text-center">PERTANYAAN</th>
                <th width=25% class="align-middle text-center">NILAI</th>
              </tr>
            <tbody>
              <?php
              $no = 1;
              $pernyataan = $conn->query("SELECT * FROM tb_pernyataan");
              while ($dataPernyataan = $pernyataan->fetch_assoc()) {


              ?>
                <tr>
                  <td width="5%" class="align-middle text-center"><?= $no++; ?></td>
                  <td><?= $dataPernyataan['pernyataan']; ?></td>
                  <td class="text-center">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="nilai <?= $no . $dataPernyataan['id_pernyataan']; ?>" name="nilai[<?= $dataPernyataan['id_pernyataan'] ?>]" value="1" required>
                      <label class="form-check-label">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="nilai <?= $no . $dataPernyataan['id_pernyataan']; ?>" name="nilai[<?= $dataPernyataan['id_pernyataan'] ?>]" value="2" required>
                      <label class="form-check-label">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="nilai <?= $no . $dataPernyataan['id_pernyataan']; ?>" name="nilai[<?= $dataPernyataan['id_pernyataan'] ?>]" value="3" required>
                      <label class="form-check-label">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" id="nilai <?= $no . $dataPernyataan['id_pernyataan']; ?>" name="nilai[<?= $dataPernyataan['id_pernyataan'] ?>]" value="4" required>
                      <label class="form-check-label">4</label>
                    </div>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
            </thead>
          </table>
          <p class="font-weight-bold text-center">TERIMA KASIH</p>
          <hr>
          <div class="form-group">
            <label>SARAN</label>
            <textarea class="form-control" rows="4" name="saran"></textarea>
          </div>
          <div class="form-group">
            <label>KRITIK</label>
            <textarea class="form-control" rows="4" name="kritik"></textarea>
          </div>
          <div class="form-group">
            <label>KELEBIHAN PELAYANAN</label>
            <textarea class="form-control" rows="4" name="kelebihan"></textarea>
          </div>
          <div class="form-group text-center">
            <button type="submit" name="kirim" class="btn btn-success btn-sm kirim">KIRIM</button>
          </div>
        </div>
      </form>

      <hr>

    </div> <!-- /container -->

  </main>

  <footer class="container">
    <p>&copy; Kecamatan Gajah 2022</p>
  </footer>

  <!-- Bootstrap core JavaScript-->
  <script src="asset/vendor/jquery/jquery.min.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="asset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="asset/js/sb-admin-2.min.js"></script>

  <!-- Sweetalert js-->
  <script src="asset/js/sweetalert.min.js"></script>

  <!-- Page level plugins -->
  <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="asset/js/demo/datatables-demo.js"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>

  <script>
    function validasi() {
      if (document.getElementById("nama").value == "") {
        alert("Nama Tidak Boleh Kosong");
        document.getElementById("nama").focus();
        return false;
      }
      if (document.getElementById("pendidikan").value == "") {
        alert("Pendidikan Tidak Boleh Kosong");
        document.getElementById("pendidikan").focus();
        return false;
      }
      if (document.getElementById("usia").value == "") {
        alert("Usia Tidak Boleh Kosong");
        document.getElementById("usia").focus();
        return false;
      }
      if (document.getElementById("pekerjaan").value == "") {
        alert("Pekerjaan Tidak Boleh Kosong");
        document.getElementById("pekerjaan").focus();
        return false;
      }
      return true;
    }
  </script>
</body>

</html>