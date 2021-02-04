<?php 
    echo '<div class ="container-fluid">
    <div class ="row">';
    foreach($clients as $key => $value ){
      $firstLetter = substr($value['firstName'] , 0 ,1);
        if($firstLetter == "M"){
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
            echo "<p class ='notNumber p-0'> Cet personne n'a pas de carte </p>";
          }  
          
       echo '</div>
        </div>
      </div>';
        }
    }

    echo '</div>
    </div>';