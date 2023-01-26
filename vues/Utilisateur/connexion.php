<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Connexion</title>
      <link rel="stylesheet" href="../Css/connexion.css">
      <script src="../Js/connexion.js"></script>
</head>
<body>
      <div id="contenu">

      <form name="fo" method="Post">
            <h1>Authentification</h1>
            <div class="input">
                  <input type="email" name="login" placeholder="Login" />                 
            </div>
            <div class="input">
                  <input  type="password" id="password" name="password" placeholder="Password" />          
                  <img src="../images/redEye.png" id="eye" onclick="changer()" />       
            </div>
            <div class="input submit" type="submit" >S'authentifier</div>
      </form>

      </div>
  
</body>
</html>



