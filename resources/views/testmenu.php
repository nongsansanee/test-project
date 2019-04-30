<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Document</title> 
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">   
   
    <script src="../../js/jquery-3.4.0.js"></script>
    <script src="../../js/popper.min.js"></script>

    <link href="../../css/bootstrap.min.css" rel="stylesheet" >
    <script src="../../public/js/bootstrap.min.js"></script>
    <style type="text/css">
    body{
        font-family: system-ui,-apple-system,BlinkMacSystemFont,Helvetica Neue,Helvetica,sans-serif;
        font-size: 14px;
    }
    .pic_preview{height:auto;padding-bottom:100%;background-size:cover;background-position:center;}
    .price{font-size: 18px;font-weight: 500;color: #f57224;}
    .discount_price{font-size: 10px;color: #9e9e9e;}
    .cus-icon:before {
        width: 30px;
        height: 30px;
    }   
  
    .modal-header, h4, .close {
    background-color: #5cb85c;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color: #f9f9f9;
  }
    </style>
</head>
<body>
  
<!-- ส่วนของการใช้งาน navbar-->
 <nav class="navbar navbar-light" style="background-color: #3cabfc;">
<!-- ปุมด้านซ้าย แสดงเมนู-->
  <button class="navbar-toggler border-0 px-0" type="button" data-toggle="collapse" data-target="#navbaCollapseContent">
    <i class="fas fa-bars cus-icon fa-fw py-1"></i>
  </button> 
<!--  ส่วนแสดงชื่อโปรเจ็ค หรือหัวข้อที่ต้องการ-->
<!--  <a class="navbar-brand" href="#">Navbar</a>-->
<!-- ปุมด้านขวา แสดงเมนู  -->
    <div class="btn-group">
      <button type="button" class="navbar-toggler border-0 px-2" onClick="$('#subnavbar').toggle()">
      <i class="fas fa-search cus-icon py-1"></i>
      </button>
      <button type="button" class="navbar-toggler border-0 px-2" class="btn btn-default btn-lg" id="myBtn">
      <i class="fas fa-user cus-icon py-1"></i>
      </button>
    </div>  
  
<!-- เนื้อหาเมนูเพิ่มเติม เมื่อกดที่ปุ่มด้านบน เพื่อซ่อนหรือแสดง-->
  <div class="collapse navbar-collapse" id="navbaCollapseContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" style="font-color: #3cabfc;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
<!--      ส่วนของเมนูที่แสดงแบบ dropdown-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
        role="button" data-toggle="dropdown">
          Sub Menu1
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="./register.blade.php" id="act1">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <!--      ส่วนของเมนูที่แสดงแบบ dropdown-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
        role="button" data-toggle="dropdown">
          Sub Menu2
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

 <nav class="navbar navbar-light sticky-top collapse"  id="subnavbar"  style="background-color:#6ff291;">
   <form class="w-100">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search">
      <div class="input-group-append">
        <button class="btn btn-outline-warning" type="button">
        <i class="fas fa-search cus-icon py-1"></i>
        </button>
      </div>
    </div>      
    </form>
</nav>
  
  <!--container-fluid-->
 <!-- div class="container-fluid m-0 p-0"> 
    <div class="row no-gutters px-1"> 
    <?php //for($i=1;$i<=3;$i++){?>
        <div class="col-6 col-sm-4 col-md-3 bg-light px-1">
        <br>
            <a href="javascript:void(0);">
            <div class="bg-warning pic_preview" style="background-image:url('https://www.ninenik.com/images/')">
  
            </div>
            <div class="bg-white mb-2 shadow-sm">
                <div>หัวเรื่องรายการทดสอบ This is test title</div>
                <div class="price">฿1,500</div>
                <div class="discount_price">฿2,500 <span>-50%</span></div>
            </div>    
            </a>        
        </div>
        <?php //} ?>
    </div> 
 </div --> 
<!--container-fluid-->

<!-- test carousel-->

<!-- div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 h-80" src="../images/kkt1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-80" src="../images/vector-6.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-80" src="../images/maxresdefault.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div -->

  
  
  <!-- test popup user -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:15px 40px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="">Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>


<!-- test collapse-->
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>

   
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>



<script type="text/javascript">
$(function(){
 
});

$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });

  $("#act1").click(function(){
    $("#accordion").modal();
  });
});
</script>
</body>
</html>