<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Beyond World</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Niconne&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<!-- Fixed navbar -->
        <nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">Beyond World</a>
                </div>
                <div id="brand" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="#">Home</a></li>
                        <li><a href="#sobrenos">Sobre nosotros</a></li>
                        <li><a href="#social">Social</a></li>
                    </ul>
                </div><!-- /.nav-collapse -->
            </div><!-- /.container -->
        </nav><!-- /.navbar -->

        <div class="container">

            <div class="row row-offcanvas row-offcanvas-right">

                <div class="col-xs-12 col-sm-9">
                    <p class="pull-right visible-xs">
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
                    </p>
                    <div class="text-center sobrenos" id="sobrenos">
                        <h2>Recorre el extenso mundo de Beyond</h2>
                        <br>
                        <p style="color: white; background-image: url(Maps/world.jpg);"">This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                    </div>
                    <div class="row">
                    <hr>
                        <div class="text-center">
                            <h2>Explora el mundo</h2>
                            <p><a class="btn btn-default" href="login.php" role="button">View details »</a></p>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="text-center">
                            <h2>Sumate a tus amigos</h2>
                            <p>Sistema de hermandad implementado</p>
                            <p><a class="btn btn-default" href="login.php" role="button">View details »</a></p>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="text-center" id="social">
                            <h2>Redes sociales</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
                        </div>
                        <br>
                    </div><!--/row-->
                </div><!--/.col-xs-12.col-sm-9-->

                <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                    </div>
                </div><!--/.sidebar-offcanvas-->
            </div><!--/row-->

            <hr>

            <footer>
                <p>© Company 2014</p>
            </footer>

        </div><!--/.container-->
        <script type="text/javascript" src="js/app.js"></script>
	<script
  src="https://code.jquery.com/jquery-3.1.1.js"
  integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
  crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>