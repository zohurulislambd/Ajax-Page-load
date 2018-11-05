<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax page load</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul id="menu" class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="form1.php">form-1 <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="form2.php">form-1</a>
               </li>
               <li class="nav-item"><a class="nav-link" href="form3.php">form-3</a></li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </form>
       </div>
   </div>
</nav>

<section>
    <div class="container" id="content">

    </div>
    <div class="text-info">

    </div>
</section>
<script src="jQuery/jquery-3.3.1.js"></script>

<script src="jQuery/bootstrap.min.js"></script>

<script src="jQuery/script.js"></script>

</body>
</html>