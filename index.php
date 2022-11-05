<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BOLETT</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="icon/style.css">
</head>
    <style>
        
        body{
                background-image:url(image/p3.jpg);
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}
         
        
        
        .welcome{
            width: 100%;
            max-width:1100px;
            margin: auto;
            margin-top: 45px;
            background: rgba(0,0,0,0.6);
            text-align: center;
            padding: 20px;
        }
    

        .welcome h1{
            font-size: 50px;
            color: white;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .welcome a{
            display: inline-flex;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .welcome a:botton{
            color: black;
            background: white;
        }
		.welcome label{
    font-size: 20px;
			left: -3px;
    position: relative;
    top: 0px;
    color: #0076ff;
}
        
    
    </style>
    

<body>
	
	
   <div class="welcome">
        <h1>Bienvenidos a BOLETT</h1>

        <a href="../cerrar.php"  class="waves-effect waves-light btn-large"><i class="material-icons">add_circle_outline</i> <span>Reservar boleto</span></a>
        <a href="../cerrar.php"  class="waves-effect waves-light btn-large"><i class="material-icons">cancel</i> <span>Cancelar boleto</span></a>
        <a href="destino/destino.php"  class="waves-effect waves-light btn-large"><i class="material-icons">place</i> <span>Destinos</span></a>
	   	<a href="sesion/login.php" class="waves-effect waves-light btn-large"><i class="material-icons">power_settings_new</i> Iniciar sesión</a>
	    
   </div>
   
</body>
</html>