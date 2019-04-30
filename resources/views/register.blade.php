<body>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../../css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="../../js/jquery-3.4.0.js"></script>
<script src="../../js/popper.min.js"></script>

<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 400px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      @font-face {
         font-family: 'Glyphicons Halflings';
        src: url('../../public/fonts/glyphicons-halflings-regular.eot');
        src: url('../../public/fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../../public/fonts/glyphicons-halflings-regular.woff') format('woff'), url('../../public/fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../../public/fonts/glyphicons-halflings-regular.svg#glyphicons-halflingsregular') format('svg');
      }

    </style>
</head>


<div class="container">

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light warning-color lighten-5 navbar-fixed-top">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Website Name</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login.blade.php">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    <!-- Links -->

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

  <!-- div class="title">Hello <?php if(isset($name)) echo $name; ?></div -->
  <div class="content">
 
    <form class="form-signin" action="register" method="get">
    <div class="title">Hello>> <?php if(isset($name)) echo $name."  ".$lname." gender_code:".$gender;  ?></div>
      <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
      <!-- p>Envelope icon: <span class="glyphicon glyphicon-search"></span></p -->  
      <img src="../../images/icons8-user-male-48.png">
      <br>
      <input type="text" name="name" value="" class="input-block-level" placeholder="Firstname">
      <input type="text" name="lname" value="" class="input-block-level" placeholder="Lastname">
      
      <div class="radio">
             <label><input type="radio" name="gender" value="1">Male</label>
      </div>
      <div class="radio">
             <label><input type="radio" name="gender" value="2">Female</label>
      </div>

    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email">
    </div>

      <div class="form-group">
        <label for="sel1">Group Blood:</label>
         <select class="form-control" id="blood" name="blood">
          <option value="1">A</option>
         <option value="2">B</option>
         <option value="3">O</option>
         <option value="4">AB</option>
        </select>
     </div>

     <div class="form-group">
        <label for="exampleFormControlFile1">Your Photo</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
    </div>

   

      <br>

      <input class="btn btn-large btn-primary" type="submit" value="สมัครสมาชิก">     
    </form>
  </div>
</div>

<script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/bootstrap.bundle.js"></script>
     <script src="../../js/bootstrap.bundle.min.js"></script>
     <script src="../../js/jquery-3.4.0.js"></script>
</body>