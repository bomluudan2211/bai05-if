<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ngon ngu lap trinh PHP</h1>
    <?php echo 'Hello World'; ?>
    <?php
    $langue = 'PHP';
    var_dump($langue);
    ?>
    <!-- Header -->
    <?php include_once './inc/header.php' ?>

    <!-- Content -->
    <?php include './inc/content.php' ?>
    <?php include './inc/footer.php' ?>

    <?php include_once './inc/footer.php' ?>
    <!-- Footer -->
    <footer>Footer</Footer>

</body>
</html>