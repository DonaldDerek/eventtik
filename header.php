<?php include('inc/config.php');?>
<!DOCTYPE html>
<html lang="en">
    <script id="tinyhippos-injected" style="color: rgb(0, 0, 0);">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head>
        <meta charset="utf-8">
        <title>Eventik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" media="screen">
        
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="lib/bootstrap/js/html5shiv.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="<?php echo BASE_URL;?>">Eventik</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">
                            <form id="signnForm" class='signin-form'>
                                
                                    <ul class='inline-signin'>
                                        <li><input type="text" placeholder="Username"></li>
                                    
                                        <li><input type="password" placeholder="Password"></li>
                                    
                                        <li><button class="btn primary" type="submit">Sign in</button>
                                            <button href="#signUpModal" class="btn primary" type="submit" data-toggle="modal" >Sign up</button>
                                        </li>
                                    
                                </ul>
                            </form>
                            
                            
                        </p>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
