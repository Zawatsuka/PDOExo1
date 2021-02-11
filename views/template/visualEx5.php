<div class="container-fluid">
  <div class="row">
    <?php 
    foreach($clientsByM as $key => $value){?>


    <div class="col-2">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?= $value->id ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $value->firstName ?> <?= $value->lastName ?></h6>
        </div>
      </div>
    </div>
    <?php }
?>
  </div>
</div>