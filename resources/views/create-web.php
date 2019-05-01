<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Create Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
    <link href="../../css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

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
    <div  style="margin-bottom:0">
        <img  src="../images/h_banner.gif" alt="First slide" style="width:100%;">
    </div>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                รู้จักองค์กร
             </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">ประวัติภาควิชา</a>
                    <a class="dropdown-item" href="#">รายนามหัวหน้าภาค</a>
                    <a class="dropdown-item" href="#">พันธกิจ/วิสัยทัศน์</a>
                    <a class="dropdown-item" href="#">รายละเอียดสาขาวิชา</a>
                    
                </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">กรรมการบริหารภาควิชา</a>
        </li>
       
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                บุคลากร
             </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
                <a class="nav-link " href="#">เกียรติยศอายุรศาสตร์</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                วิจัยวิชาการ
             </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
                <a class="nav-link " href="#">บริการประชาชน</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                งานพัฒนาคุณภาพ
             </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="#">Action</a>
                 <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
        <li class="nav-item">
                <a class="nav-link " href="#">การศึกษาก่อนปริญญา</a>
        </li>
        <li class="nav-item">
                <a class="nav-link " href="#">การศึกษาหลังปริญญา</a>
        </li>
       
    </ul>


    <form class="form-inline my-4 my-lg-0">
        <i class="fas fa-user cus-icon py-2" id="myBtn" title="User Login"></i>
    </form>
  </div>
</nav>

<br>

<!--  Start body content -->
<div class="container">
  <!-- h3>Navbar With Dropdown</h3>
  <p>This example adds a dropdown menu in the navbar.</p -->

    <center>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color:darkblue">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img  src="../images/imgslide1.jpg" alt="First slide" style="width:40%; height=40%;">
                </div>
                <div class="carousel-item">
                    <img  src="../images/imgslide2.jpg" alt="Second slide" style="width:40%; height=40%;">
                </div>
                <div class="carousel-item">
                    <img  src="../images/imgslide3.jpg" alt="Third slide" style="width:40%; height=40%;">
                </div>
                <div class="carousel-item">
                    <img  src="../images/imgslide4.jpg" alt="fouth slide" style="width:40%; height=40%;">
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
        </div>
    </center>

 

<!-- test collapse-->
<br>

<div class="container" style="margin-top:20px; width:90%" >
  <div class="row">
        <div class="col-sm-3">
            <h2>About Me</h2>
            <p>Some text about .....................................</p>
            
            
            <h3>Links</h3>
            <div class="form-group">
                <!--label for="exampleFormControlSelect1">Example select</label -->
                <select class="form-control" id="exampleFormControlSelect1">
                <option>link Intranet</option>
                <option>download แบบฟอร์ม</option>
                <option><a href="http://10.7.2.201/sec/" target="_blank">E-Lerning</a></option>
                <option>E-Meeting</option>
                <option>E-Training</option>
                </select>
            </div>
            
            <ul class="nav nav-pills flex-column">
                <!-- li class="nav-item">
                <a class="nav-link active" href="#">Active</a>
                </li -->
                <li class="nav-item">
                    <a class="nav-link" href="http://www.facebook.com/simedicine" target="_blank">Facebook</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="http://www.medlib.si.mahidol.ac.th/siriraj/index.php">หอสมุดศิริราช</a>
                </li>
                <!-- li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
                </li-->
                <li class="nav-item">
                    <a class="nav-link " href="#"> <img class="card-img-top" src="../images/102year.png" alt="Card image" style="width:100%"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#"> <img class="card-img-top" src="../images/medcon_list.png" alt="Card image" style="width:100%"></a>
                </li>
            </ul>
            <hr class="d-sm-none">
        </div>
        <div class="col-sm-9">
            <div>
                <h4>ข่าวประชาสัมพันธ์ </h>
            </div>

                <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"  aria-controls="collapseOne">
                        ประกาศรับสมัครงาน
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
                        ประกาศขายหนังสือ
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
                        ประกาศรับสมัครแพทย์ประจำบ้านต่อยอด
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

                <br>
                <h4>Photo Grallery</h2>
                <div class="card-deck">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/gallery1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพบรรยากาศดูงานของ รพ.จุฬา เมื่อวันที่ 23 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/op.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพงานขบวนแห่กัณฑ์เทศมหาชาติ เมื่อวันที่ 18 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/op1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพบรรยากาศงานรดน้ำขอพรผู้ใหญ่ ในวันสงกรานต์ 2562 เมื่อวันที่ 9 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/op1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพบรรยากาศงานรดน้ำขอพรผู้ใหญ่ ในวันสงกรานต์ 2562 เมื่อวันที่ 9 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                </div>

                <div class="card-deck">
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/gallery1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพบรรยากาศดูงานของ รพ.จุฬา เมื่อวันที่ 23 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/op.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพงานขบวนแห่กัณฑ์เทศมหาชาติ เมื่อวันที่ 18 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/op1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพบรรยากาศงานรดน้ำขอพรผู้ใหญ่ ในวันสงกรานต์ 2562 เมื่อวันที่ 9 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
                <div class="card" style="width:200px">
                    <img class="card-img-top" src="../images/op1.png" alt="Card image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <p class="card-text">ภาพบรรยากาศงานรดน้ำขอพรผู้ใหญ่ ในวันสงกรานต์ 2562 เมื่อวันที่ 9 เมษายน พ.ศ.2562 ......</p>
                            <a href="#" class="btn btn-primary">See Pictures</a>
                        </div>
                </div>
        </div>
   </div>
</div>

<div class="container"  style="margin-bottom:0; background-color: #469cdb;">
  <p>ภาควิชาอายุรศาสตร์ รพ.ศิริราช ตึกอัษฎางค์ ชั้น4 แขวงศิริราช เขตบางกอกน้อย กรุงเทพมหานคร 10700 โทร.02-419-7767-69</p>
    <p>Copyright @ Faculty of Medicine Siriraj Hospital, Mahidol University All rights reserved.</p>
</div>


<!-- test popup user login -->
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

                <button type="submit" class="btn btn-success "><span class="glyphicon glyphicon-off"></span> Login</button>
                <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button> 
                </form>
            </div>
            <div class="modal-footer">                
                <!--button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button --> 
                <a href="#">!ตรวจสอบสิทธิการใช้งาน</a><br>
                 <a href="#">!ลืมรหัสผ่าน</a><br>
                 <a href="#">!แบบฟอร์มกู้รหัสผ่าน</a><br>
                 <a href="#">!แบบประเมิน</a>
            </div>
           
        </div>
    </div>

</div>

<script src="../../js/jquery-3.4.0.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script type="text/javascript">
$(function(){
 
});

$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });


});
</script>
</body>
</html>
