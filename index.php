<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('./uploadVendas/uploadVendas.php');
require_once('./apiTotvs.php');


$apiTotvs = new ApiTotvs();
$repository = new InMemoryRepositoryVendas(); //RepositoryVendas();
$uploadVendas = new UploadVendas($apiTotvs, $repository);

echo $uploadVendas->execute();

?>