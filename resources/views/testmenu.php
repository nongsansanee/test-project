<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <title>Document</title> 
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@4.1.0/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">   
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
    </style>
</head>
<body>
  
<!-- ส่วนของการใช้งาน navbar-->
 <nav class="navbar navbar-light bg-warning">
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
      <button type="button" class="navbar-toggler border-0 px-2">
      <i class="fas fa-user cus-icon py-1"></i>
      </button>
    </div>  
  
<!-- เนื้อหาเมนูเพิ่มเติม เมื่อกดที่ปุ่มด้านบน เพื่อซ่อนหรือแสดง-->
  <div class="collapse navbar-collapse" id="navbaCollapseContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
<!--      ส่วนของเมนูที่แสดงแบบ dropdown-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
        role="button" data-toggle="dropdown">
          Dropdown
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
 <nav class="navbar navbar-light sticky-top collapse"  id="subnavbar"  style="background-color:#f9ffbc;">
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
  
 <div class="container-fluid m-0 p-0"> <!--container-fluid-->
    <div class="row no-gutters px-1"> <!--row-->
    <?php for($i=1;$i<=3;$i++){?>
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
        <?php } ?>
    </div> <!--row-->
 </div> <!--container-fluid-->
  
  
   
<script src="https://unpkg.com/jquery@3.3.1/dist/jquery.min.js"></script>
<script src="https://unpkg.com/bootstrap@4.1.0/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
 
});
</script>
</body>
</html>