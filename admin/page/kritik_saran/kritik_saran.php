<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800">Data Pernyataan</h1> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      Data Kritik & saran
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Kritik</th>
            <th class="text-center">Saran</th>
            <th class="text-center">Kelebihan Pelayanan</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $querySaran = $conn->query("SELECT * FROM tb_kritik_saran, tb_responden WHERE tb_kritik_saran.id_responden = tb_responden.id_responden");
          while ($dataSaran = $querySaran->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $dataSaran['nama']; ?></td>
              <td><?= $dataSaran['kritik']; ?></td>
              <td><?= $dataSaran['saran']; ?></td>
              <td><?= $dataSaran['kelebihan']; ?></td>
              <td>
                <a href="#" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>