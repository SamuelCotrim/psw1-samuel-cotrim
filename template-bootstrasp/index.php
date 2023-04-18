<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">redes</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://twitter.com/cotrim_samuel">tt</a></li>
            <li><a class="dropdown-item" href="https://www.instagram.com/_samuel_cotrim/">insta</a></li>
            <li><a class="dropdown-item" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Ftwitter.com%2Fqqrmeme%2Fstatus%2F1573046748938903553&psig=AOvVaw3JdaZ2Dd3NJCXg85QURglq&ust=1681321430568000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCNjm5ciwov4CFQAAAAAdAAAAABAE">supreça</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
   <div class="container mt-3">
  <h2>FORMULARIO PARA NAMORO
  </h2>
  <form action="dados.php">
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    
    <div class="container mt-3">
    <div class="mb-3 mt-3">
      <label for="comment">FAÇA UM REDAÇAO EXPLICANDO PQ VC É A PESSOA PERFEITA :</label>
      <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
      <br>
      <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
</div>
    <button type="submit" class="btn btn-primary">envia</button>
  </form>
</div> 
</body>
</html>