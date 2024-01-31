<?php
  require_once('./IRepositoryVendas.php');

  class InMemoryRepositoryVendas implements IRepositoryVendas {
    function create($name)
    {
      print_r('Do something doing creating on database');
    }

    function select($id)
    {
      print_r('Do something doing searching on database');
      
    }
  };

?>