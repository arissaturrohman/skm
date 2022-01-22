<!-- Page Heading -->
<h1 class="h4 mb-4 text-gray-800">Data Pernyataan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">
      <a href="?page=pernyataan&action=add" class="btn btn-sm btn-success">Tambah</a>
    </h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th width="5%">No</th>
            <th class="text-center">Pernyataan</th>
            <th width="10%">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          $query = $conn->query("SELECT * FROM tb_pernyataan");
          while ($dataQuery = $query->fetch_assoc()) {
          ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $dataQuery['pernyataan']; ?></td>
              <td>
                <a href="?page=pernyataan&action=edit&id=<?= $dataQuery['id_pernyataan']; ?>" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                <a href="?page=pernyataan&action=delete&id=<?= $dataQuery['id_pernyataan']; ?>" onclick="return confirm('Anda Yakin akan menghapus data ini...?')" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>