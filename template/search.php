<?php
  $db = new PDO ( 'sqlite:contacts.db' );
  $output ='';
  if(isset($_POST['searchVal'])){
    $searchq = $_POST['searchVal'];
    $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);
    $query = $db->prepare("SELECT * FROM Contacts WHERE name LIKE '%$searchq%'");
    $query->execute();
    $count = $query->fetchAll();
    if($count==0 || $searchq==''){
      $output = 'Nao existem resultados a apresentar';
    }
    else{ 
      foreach ($count as $row) {
        $output = '<p><strong>'.$row['name'].'   |   '. $row['email'].'   |   '.$row['phonenumber'].'</strong></p>';
        echo($output);
      }
    }
  }
  

?>