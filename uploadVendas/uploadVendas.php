<?php
class UploadVendas{
  private ApiTotvs $apiTotvs;

  public function __construct($apiTotvs) {
    $this->apiTotvs = $apiTotvs;
  }

  function execute(){
    $this->apiTotvs->execute();

    

echo '</br>';
    echo 'teste';
  }


}

?>