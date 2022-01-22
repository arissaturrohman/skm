<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800">Data Pernyataan</h1> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      Data Responden
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Pendidikan</th>
            <th class="text-center">Pekerjaan</th>
            <th class="text-center">Usia</th>
            <th class="text-center">Jenis Kelamin</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $queryResponden = $conn->query("SELECT * FROM tb_responden");
          while ($dataResponden = $queryResponden->fetch_assoc()) {
            $pendidikan = $dataResponden['pendidikan'];
            $pekerjaan = $dataResponden['pekerjaan'];
            $jk = $dataResponden['jk'];
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $dataResponden['nama']; ?></td>
              <?php
              if ($pendidikan == 1) {
                $tampilPendidikan = "Tidak Lulus SD";
              } elseif ($pendidikan == 2) {
                $tampilPendidikan = "SD";
              } elseif ($pendidikan == 3) {
                $tampilPendidikan = "SMP/MTs";
              } elseif ($pendidikan == 4) {
                $tampilPendidikan = "SMA/SMK";
              } elseif ($pendidikan == 5) {
                $tampilPendidikan = "S1";
              } elseif ($pendidikan == 6) {
                $tampilPendidikan = "S2/S3";
              }
              ?>
              <td><?= $tampilPendidikan; ?></td>
              <?php
              if ($pekerjaan == 1) {
                $tampilpekerjaan = "Pelajar/MHS";
              } elseif ($pekerjaan == 2) {
                $tampilpekerjaan = "PNS/TNI/POLRI";
              } elseif ($pekerjaan == 3) {
                $tampilpekerjaan = "Swasta";
              } elseif ($pekerjaan == 4) {
                $tampilpekerjaan = "Wiraswasta";
              } elseif ($pekerjaan == 5) {
                $tampilpekerjaan = "Lainnya";
              }
              ?>
              <td><?= $tampilpekerjaan; ?></td>
              <td><?= $dataResponden['usia']; ?></td>
              <?php
              if ($jk == 1) {
                $tampilJK = "Laki-laki";
              } else {
                $tampilJK = "Perempuan";
              }
              ?>
              <td><?= $tampilJK; ?></td>
              <td>
                <a href="?page=responden&action=edit&id=<?= $dataResponden['id_responden']; ?>" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a href="?page=responden&action=delete&id=<?= $dataResponden['id_responden']; ?>" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>