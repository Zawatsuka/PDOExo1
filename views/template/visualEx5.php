<?php 
  
    echo '<div class ="container-fluid">
    <div class="row">';
    $request = $BDD->prepare('SELECT * FROM clients WHERE lastName LIKE :search');  
    $request->execute(array(':search'=>'M%'));
    $clients = $request->fetchAll(PDO::FETCH_ASSOC);
    foreach($clients as $key => $value){
      // var_dump($clients);
      //   echo '<hr width="100%"/>';
      // var_dump($key);
      // echo '<hr width="100%"/>';
      // var_dump($value);
       echo' <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">'.$clients[$key]['id'].'</h5>
                    <h6 class="card-subtitle mb-2 text-muted">'.$clients[$key]['firstName'].' '.$clients[$key]['lastName'].'</h6>
                    <p class="card-text">Date de Naissance = '.$clients[$key]['birthDate'].'</p>';
          if($clients[$key]['cardNumber'] != NULL){
            echo "Numero de carte : ".$clients[$key]['cardNumber'];
          }else{
            echo "<p class ='notNumber p-0'> Cet personne n'a pas de carte </p>";
          }  
         echo '</div>
        </div>
      </div>';
    }

    echo '</div>
    </div>';