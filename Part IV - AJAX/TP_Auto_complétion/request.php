<?php
    $towns = unserialize(file_get_contents('towns.txt'));
    $found = array();
    $reponse = '';
    if(isset($_POST['ville'])) {
        $chaine = htmlspecialchars($_POST['ville']);

        foreach($towns as $ville) {
            if (stripos($ville, $chaine) === 0)
                array_push($found, $ville);
        }

        sort($found);

        while(count($found) > 5)
            array_pop($found);

        $reponse = implode('|', $found);
    }


    echo $reponse;

