<?php
// CONNEXION A LA BASE DE DONNEE 
    $dsn='mysql:dbname=colyseum;host=127.0.0.1';
    $user ='colyseum';
    $password ='Lulutho29@';
    
    try{
        $BDD = new PDO($dsn,$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        $query= $BDD->query('SELECT * FROM `clients`');
        $clients = $query->fetchAll();
    }catch(PDOException $e){
        echo 'Connexion echouée : '.$e->getMessage();
    }

    // EXO1
    try{
        $sql ='SELECT * FROM `clients`';
        $query = $BDD->query($sql);
        $cutomers = $query->fetchAll();
    }catch(PDOException $e){
        echo 'la requete a échouée : '.$e ->getMessage();
    }