<?php   
    // CONNEXION A LA BASE DE DONNEE 
    $dsn='mysql:dbname=colyseum;host=127.0.0.1';
    $user ='colyseum';
    $password ='Lulutho29@';
    

    // Connexion à la bdd
    try{
        $BDD = new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ]);

        // $BDD = new PDO($dsn,$user,$password);
        // $BDD->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        // $BDD->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);


        $query= $BDD->query('SELECT * FROM `clients`');
        $clients = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Connexion echouée : '.$e->getMessage();
    }

    // EXO1
    try{
        $query= $BDD->query('SELECT * FROM `clients`');
        $clients = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Problème de requete : '.$e->getMessage();
    }

      // EXO2
      try{
        $query= $BDD->query('SELECT * FROM `shows`');
        $shows = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Problème de requete : '.$e->getMessage();
    }

     // EXO3
     try{
        $query= $BDD->query('SELECT * FROM `clients` LIMIT 20');
        $clientsLimit = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Problème de requete : '.$e->getMessage();
    }

    // EXO4

    try{
        $PDO_Statement= $BDD->query('SELECT * FROM `clients` WHERE `card`= 1');
        $FidelityCustomers = $PDO_Statement->fetchAll();
    }catch(PDOException $e){
        echo 'Problème de requete : '.$e->getMessage();
    }

    // EXO5
    try{
        $sql = 'SELECT * FROM `clients` WHERE `lastName` LIKE \'M%\' ORDER BY `lastName`';
        $PDO_Statement = $BDD->query($sql);
        $clientsByM = $PDO_Statement->fetchAll();


    }catch(PDOException $e){
        echo 'Problème de requete : '.$e->getMessage();
    }
    include('views/template/header.php');

    // EXO1 
    //  AFFICHER LES CLIENTS 

    // include('views/template/visualEx1.php');
    
    // EXO2 
    // AFFICHER LES DIFFERENTS SPECTACLES

    // include('views/template/visualEx2.php');

   
    // EXO3 
    //  AFFICHER LES 20 PREMIERS CLIENTS 

    include('views/template/visualEx3.php');


    // EXO4
    //  AFFICHER LES CLIENTS QUI ONT UNE CARTES

    // include('views/template/visualEx4.php');


      // EXO5
    //  AFFICHER LES CLIENTS qui ont la lettre qui commence par M

    // include('views/template/visualEx5.php');

    // EXO6
    // AFFICHER LES SPECTACLES Spectacle par artiste, le date à heure

    // include('views/template/visualEx6.php');

     // EXO7
    // AFFICHER LES CLIENTS :NOM,PRENOM,DATE DE NAISSANCE,CARTE,NUMERO DE CARTE
    // include('views/template/visualEx7.php');
    
    include('views/template/footer.php');
