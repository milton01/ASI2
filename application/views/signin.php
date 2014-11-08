<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Altuve | Iniciar sesión</title>

  <link href="css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <img src="images/logo-login.png"/>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Bienvenido al sistema de distribución</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Control de usuarios</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Control de transporte</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Registro de clientes</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Pedidos</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Estado de pedidos</li>
                    </ul>
                    <div class="mb20"></div>
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="http://themepixels.com/demo/webpage/bracket/index.html">
                    <h4 class="nomargin">Iniciar sesión</h4>
                    <p class="mt5 mb20">Inicia sesión para acceder a su cuenta.</p>
                
                    <input type="text" class="form-control uname" placeholder="Nombre de usuario" />
                    <input type="password" class="form-control pword" placeholder="Contraseña" />
                    <a href="#"><small>Olvido su contraseña?</small></a> | <a href="<?php base_url().'user/dat'?>" title ='Registrarse'><small>Registrate</small></a>
                    <button class="btn btn-success btn-block">Iniciar sesión</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. Derechos reservados. Altuve
            </div>
            <div class="pull-right">
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/retina.min.js"></script>

<script src="js/custom.js"></script>

</body>
</html>
