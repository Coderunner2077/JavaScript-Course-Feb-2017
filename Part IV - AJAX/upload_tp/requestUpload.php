<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploader un fichier via iframe</title>
</head>
<body>
<?php
    $error = NULL;
    $filename = NULL;
    if(isset($_FILES['uploadFile']) && $_FILES['uploadFile']['error'] === 0) {
        $filename = $_FILES['uploadFile']['name'];
        $targetpath = getcwd() .'/'. $filename;
        if(@move_uploaded_file($_FILES['uploadFile']['tmp_name'], $targetpath))
            $error = 'OK';
        else
            $error = "Echec de l'enregistrement";
    } else
        $error = 'Aucun fichier réceptionné !';
?>
    <script>
        window.top.window.uploadEnd('<?php echo $error; ?>', '<?php echo $filename; ?>');
    </script>
</body>
</html>