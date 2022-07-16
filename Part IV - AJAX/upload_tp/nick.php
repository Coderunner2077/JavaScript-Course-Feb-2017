<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test 2</title>
</head>
<body>
    <script>
        window.top.window.receiveData("<?php echo htmlentities($_POST['nick']); ?>");
    </script>
</body>
</html>
