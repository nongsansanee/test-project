<html>
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
     

    </style>
</head>
   <body>
 
   <div class="container">

<form class="form-signin">
  <h2 class="form-signin-heading">Form Register</h2>
  <input type="text" class="input-block-level" placeholder="Username">
  <input type="text" class="input-block-level" placeholder="Email address">
  <input type="password" class="input-block-level" placeholder="Password">
  <div class="radio">
      <label><input type="radio" name="optradio" checked>Male</label>
   </div>
   <div class="radio">
       <label><input type="radio" name="optradio">Female</label>
   </div>

   <!--div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Nationality
  <span class="caret"></span></button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
    <li role="presentation"><a role="menuitem" href="#">Thai</a></li>
    <li role="presentation"><a role="menuitem" href="#">Laos</a></li>
    <li role="presentation"><a role="menuitem" href="#">Chinese</a></li>
   
  </ul>
</div>




<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div-->


<div class="form-group">
  <label for="sel1">Nationality:</label>
  <select class="form-control" id="nat">
    <option value="1">Thai</option>
    <option value="2">Laos</option>
    <option value="3">Chinese</option>
    <option value="4">American</option>
  </select>
</div>

<!--div>
   <label for="photo">Your Photo:</label>
   
<div-->


  <div class="form-group">
    <label for="exampleFormControlFile1">Your Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>


  <div>
  <button class="btn btn-large btn-primary" type="submit">Save</button>
  <button type="button" class="btn btn-secondary">Cancel</button>
  </div>

 
  
  
</form>

</div>

   
<div class="container">   
<form class="form-signin">
      <?php
         echo Form::open(array('url' => 'foo/bar'));
            echo "<form class='form-signin'>";
            echo 'Username:';
            echo Form::text('username','Username');
            echo '<br/>';
            
            echo 'Email:';
            echo Form::text('email', 'example@gmail.com');
            echo '<br/>';
     
            echo 'Password:';
            echo Form::password('password');
            echo '<br/>';
            
           //echo Form::checkbox('name', 'value');
           // echo '<br/>';
            
            echo Form::radio('name', '1');
            echo 'Male';
            echo '<br/>';

            echo Form::radio('name', '2');
            echo 'Female';
            echo '<br/>';
            
            echo 'Your Photo:';
            echo Form::file('image');
            echo '<br/>';
            
            echo 'Your Nationality:';
            echo Form::select('nat', array('1' => 'ไทย', '2' => 'พม่า', '3' => 'ลาว'));
            echo '<br/>';
            
            echo Form::submit('SAVE');
         echo Form::close();
         echo "</form>";
      ?>
   </form>
</div>
     <script src="../../js/bootstrap.min.js"></script>
     <script src="../../js/bootstrap.bundle.js"></script>
     <script src="../../js/bootstrap.bundle.min.js"></script>
     <script src="../../js/jquery-3.4.0.js"></script>
     
   </body>
</html>