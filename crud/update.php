<?php
require_once 'pdo.php';
require_once 'helper.php';

$id =$_POST['id'];
$data = $_POST['name'];
echo $id;

echo $data;
update($id,$data);
redirectHome();

