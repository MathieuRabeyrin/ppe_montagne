<?php
    try {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=vacances', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));
        
        $response = $bdd->query('SELECT * FROM offre');

        foreach ($response->fetchAll() as $data) {
            echo '<article>
                    <img src="'.$data['image'].'" alt="illumnations noel">
                    <h3>'.$data['titre'].'</h3>
                    <p>'.$data['contenu'].'</p>
                </article>';
        }
        $response->closeCursor();
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
?>