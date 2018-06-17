<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title><?= \App\App::getInstance()->title; ?></title>

</head>

<body>

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href=".">Home Page</a>
            </div>
        </div>
    </nav>

    <main class="container">

        <div class="starter-template" style="padding-top: 100px;">
            <?php echo $content; ?>
            
        </div>

    </main>
    <!-- /.container -->

</body>

</html>