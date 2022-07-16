<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
<?php
    $tablo = array('Sebastien', 'Paul', 'Vernier');
?>
    <script>
        window.top.window.trigger(['<?php echo implode("','", $tablo); ?>']);
    </script>
</body>
</html>