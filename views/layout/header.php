<html> 
<head>  
    <title> Iniciar Sesión </title>
    <link rel="stylesheet" type="text/css" href="assets/css/style-login.css">   
</head>
    <body>           
    <div class="login-box">
    <img src="assets/img/profile-user.png" class="avatar">
        <h1>Iniciar Sesión</h1>
            <form name="formlogin" id= "formlogin" action = "admin.html">
            <p>Nombre de usuario</p>
            <input id = "user" type="text" name="user" placeholder="Usuario">
            <p>Contraseña</p>
            <input id = "password" type="password" name="password" placeholder="Contraseña">
            <input id = "btnLogin" type="submit" name="btnLogin" value="Login">
            <a href="#">¿Olvidaste tu contraseña?</a>    
            </form>
        
        
        </div>
       <script type="text/javascript" src="../js/inicioSesion.js"></script>
    </body>
</html>