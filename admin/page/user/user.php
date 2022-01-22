<!-- Page Heading -->
<!-- <h1 class="h3 mb-4 text-gray-800">Data Pernyataan</h1> -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      Data Pengguna
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Username</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $sql = $conn->query("SELECT * FROM tb_user");
          while ($data = $sql->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $data['nama']; ?></td>
              <td><?= $data['username']; ?></td>
              <td>
                <a href="?page=user&action=edit&id=<?= $data['id_user']; ?>" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>