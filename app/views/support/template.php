<html>
<head>
    <title>Simply Rugby User Support Documentation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../static/css/font-awesome.min.css">
    <link href="../../../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../static/css/mdb.min.css" rel="stylesheet">
    <link href="../../../static/css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="https://<?php echo $_SERVER['SERVER_NAME']; ?>">Simply Rugby User Support
            Documentation</a>
    </div>
</nav>
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <hr>
                <?php include('./app/views/support/' . $data . '.php'); ?>
                <hr>
                <a href="https://<?php echo $_SERVER['SERVER_NAME']; ?>" class="btn btn-primary center">Return to support home page</a>
                <hr>
            </div>
        </div>
    </div>
</article>

<!--<footer class="py-5 bg-dark">-->
<!--    <div class="container">-->
<!--        <p class="m-0 text-center text-white">Simply Rugby User Support Documentation</p>-->
<!--    </div>-->
<!--</footer>-->
</body>
<script type="text/javascript" src="../../../static/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../../static/js/popper.min.js"></script>
<script type="text/javascript" src="../../../static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../../static/js/mdb.min.js"></script>
</html>