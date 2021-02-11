 <div class ="container-fluid">
    <div class ="row">';
<?php
    foreach($shows as $key => $value ){?>
        <div class ="col-2">
            <div class="card" style="width: 19rem;">
                <div class="card-body">
                <h5 class="card-title"><?=$value->id?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?=$value->title?></h6>
                <p class="card-text">Interprete :<?= $value->performer?></p>
                <p class="card-text">Debut du spectacle :<?=$value->startTime?></p>
                <p class="card-text"> durée :<?= $value->duration?></p>
            </div>
        </div>
      </div>
<?php
    }
    ?>
    </div>
        </div>