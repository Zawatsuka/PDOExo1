<?php   
    // CONNEXION A LA BASE DE DONNEE 
    $dsn='mysql:dbname=colyseum;host=127.0.0.1';
    $user ='root';
    $password ='';
    
    try{
        $connectToDB = new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $query= $connectToDB->query('SELECT * FROM `clients`');
        $clients = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Connexion echouée : '.$e->getMessage();
    }
    include('views/template/header.php');


    // EXO1 
    //  AFFICHER LES CLIENTS 
    include('views/template/visualEx1.php');
    


    // EXO2 
    // AFFICHER LES DIFFERENTS SPECTACLES 

    // $query= $connectToDB->query('SELECT*FROM shows');
    // if($query === false){
    //     var_dump($connectToDB->error());
    //     die('Erreur SQL');
    // }
    // $shows = $query->fetchAll();
    // include('views/template/visualEx2.php');

    // include('views/template/footer.php');



    // EXO3 
    //  AFFICHER LES 20 PREMIERS CLIENTS 

    // $query= $connectToDB->query('SELECT*FROM clients');
    // if($query === false){
    //     var_dump($connectToDB->error());
    //     die('Erreur SQL');
    // }
    // $clients = $query->fetchAll();
    // include('views/template/visualEx3.php');


    
    // EXO4
    //  AFFICHER LES CLIENTS QUI ONT UNE CARTES

    // $query= $connectToDB->query('SELECT*FROM clients');
    // if($query === false){
    //     var_dump($connectToDB->error());
    //     die('Erreur SQL');
    // }
    // $clients = $query->fetchAll();
    // include('views/template/visualEx4.php');



      // EXO5
    //  AFFICHER LES CLIENTS qui ont la lettre qui commence par M

    // $query= $connectToDB->query('SELECT*FROM clients');
    // if($query === false){
    //     var_dump($connectToDB->error());
    //     die('Erreur SQL');
    // }
    // $clients = $query->fetchAll();
    // include('views/template/visualEx5.php');
    

