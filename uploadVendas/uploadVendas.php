<?php
class UploadVendas{
  private ApiTotvs $apiTotvs;
  private IRepositoryVendas $repositoryVendas;

  public function __construct($apiTotvs, $repositoryVendas) {
    $this->apiTotvs = $apiTotvs;
    $this->repositoryVendas = $repositoryVendas;
  }

  function execute(){
    $this->apiTotvs->execute();

    $this->repositoryVendas->select(01);

echo '</br>';
    echo 'teste';
  }


}

?>