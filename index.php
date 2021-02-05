<?php   
    // CONNEXION A LA BASE DE DONNEE 
    $dsn='mysql:dbname=colyseum;host=127.0.0.1';
    $user ='root';
    $password ='';
    
    try{
        $BDD = new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $query= $BDD->query('SELECT * FROM `clients`');
        $clients = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Connexion echouée : '.$e->getMessage();
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

    // include('views/template/visualEx3.php');


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
    include('views/template/visualEx7.php');
    
    include('views/template/footer.php');
