<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Floreil-PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="http://localhost/FloreilPHP/css/hamburger.css" rel="stylesheet">
    <link href="http://localhost/FloreilPHP/css/index.css" rel="stylesheet">

</head>

<body>
    <?php include("./components/header.php"); ?>
    <main>
        <section class="intersection"></section>
        <?php include("./components/carousel.php"); ?>
        <section class="intersection"></section>
        <?php include("./components/commerce.php"); ?>
        <section class="intersection"></section>
        <?php include("./components/video.php"); ?>
        <section class="intersection"></section>
    </main>

    <?php include("./components/footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>