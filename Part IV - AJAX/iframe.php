<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Upload via une iframe</title>
</head>
<body>
<?php
$error = NULL;
$filename = NULL;
if(isset($_FILES['uploadFile']) AND $_FILES['uploadFile']['error'] == 0) {
    $extension = pathinfo($_FILES['uploadFile']['name']);
    $allowed = array('JPG', 'PNG', 'JPEG', 'GIF');
    if(in_array(strtoupper($extension['extension']), $allowed)) {
        $filename = 'images/'. basename($_FILES['uploadFile']['name']);
        if(@move_uploaded_file($_FILES['uploadFile']['tmp_name'], $filename))
            $error = 'OK';
        else
            $error = 'Erreur d\'enregistrement';
    } else
        $error = 'Type de fichier incorrect';
} else
    $error = 'Aucun fichier réceptionné';
?>
<script>
    window.top.window.checkUpload('<?php echo $error; ?>', '<?php echo $filename; ?>');
</script>
</body>
</html>


