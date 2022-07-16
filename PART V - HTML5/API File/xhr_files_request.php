<?php
echo 'nom du fichier : '. $_FILES['file']['name'] .', emplacement temp : ' . $_FILES['file']['tmp_name']
    .', empl : '. getcwd().'\\'.$_FILES['file']['name'];