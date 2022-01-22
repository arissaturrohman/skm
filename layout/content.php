

<?php

$page = $_GET['page'];
$action = $_GET['action'];

if ($page == 'survei') {
  if ($action == '') {
    include "../admin/page/survei/survei.php";
  }
} elseif ($page == 'kritik_saran') {
  if ($action == '') {
    include "../admin/page/kritik_saran/kritik_saran.php";
  }
} elseif ($page == 'pernyataan') {
  if ($action == '') {
    include "../admin/page/pernyataan/pernyataan.php";
  } elseif ($action == 'add') {
    include "../admin/page/pernyataan/add.php";
  } elseif ($action == 'edit') {
    include "../admin/page/pernyataan/edit.php";
  } elseif ($action == 'delete') {
    include "../admin/page/pernyataan/delete.php";
  }
} elseif ($page == 'responden') {
  if ($action == '') {
    include "../admin/page/responden/responden.php";
  }
} elseif ($page == 'survei') {
  if ($action == '') {
    include "../admin/page/survei/survei.php";
  }
} elseif ($page == 'user') {
  if ($action == '') {
    include "../admin/page/user/user.php";
  } elseif ($action == 'add') {
    include "../admin/page/user/add.php";
  } elseif ($action == 'edit') {
    include "../admin/page/user/edit.php";
  } elseif ($action == 'delete') {
    include "../admin/page/user/delete.php";
  }
} else {
  include "dashboard.php";
}

?>