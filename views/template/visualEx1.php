<?php 
    echo '<div class ="container-fluid">
    <div class ="row p-2">';
    foreach($clients as $key => $value ){
       echo '
        <div class ="col-2">
       <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">'.$value['id'].'</h5>
          <h6 class="card-subtitle mb-2 text-muted">'.$value['firstName'].' '.$value['lastName'].'</h6>
          <p class="card-text">Date de Naissance = '.$value['birthDate'].'</p>';
          if($value['cardNumber'] != NULL){
            echo "Numero de carte : ".$value['cardNumber'];
          }else{
            echo "<p class ='notNumber p-0'> Cet personne n'a pas de numero de carte </p>";
          }  
          
       echo '</div>
        </div>
      </div>';
    }
    echo '</div>
    </div>';