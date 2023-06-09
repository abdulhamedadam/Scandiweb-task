<?php

namespace delete;

require __DIR__ . '/../vendor/autoload.php';

use BackEnd\BakendFunctions\Product;

$row = new Product();
$users = $row->getAll();
$product = $row->find('sku');

if (isset($_POST['checkedIds']) && isset($_POST['deleteAll'])) {
  $checkedIds = $_POST['checkedIds'];
  $deleteMsg = $row->Massdelete($checkedIds);
  if ($deleteMsg) {
    header('location:productlist.php');
    exit();
  }
}
