<?php 
session_start();
if(isset($_SESSION['user'])&& isset($_SESSION['pass']))
{
	include("cls/clslogin.php");
	$q=new login();
	$q->confirmlogin1($_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location:logingiaovien.php');
}
include("cls/cls.php");
$p=new tmdt();
$layid=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
     <link rel="stylesheet" href="login.css">
   <style>
		  #nut1
{
	margin-right:50px;
	height:40px;
	float:right;
	width:100px;
	border-radius:10px;
	color: var;(--color-danger);
	font-size:15px;
}	  
#tt
{
	margin-top:20px;
	padding:20px;
	background:#E5E5E5;
	height:auto;
	width:90%;
	border-radius:10px;
	margin-bottom:20px;
}
#tt:hover
{
	margin-left: 1rem;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
	transition:all 300ms ease;
}
a:hover
{
	color:#00F;
}
.w-100 {
    width: 30% !important;
	margin-top:20px;
	margin-bottom:20px;
}
.profile-ds-info {
    height:auto;
    overflow: hidden;
} 
</style>
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./img/github.png">
                    <h2>VIE<span class="danger">EDU</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>

           <div class="sidebar">
                 <a href="index1.php" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a><a href="thongtinchitietgv.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Xem th??ng tin chi ti???t</h3>
                </a><a href ="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Th??ng b??o</h3>
                    <span class="message-count">27</span>
                </a><a href="guigopygv.php">
                    <span class="material-icons-sharp">add_circle_outline</span>
                    <h3>????ng g??p ?? ki???n</h3>
                </a>
                <a href="thaydoipassgv.php">
                    <span class="material-icons-sharp">add_circle_outline</span>
                    <h3>Thay ?????i m???t kh???u</h3>
                </a>
                <a href ="#">
                 <form action="" method="POST">
     <span class="material-icons-sharp">logout</span>
     <button class="form-control" type="submit" id="nut1" name="nut1" value="????ng xu???t">Log out</button>
       <?php
         switch($_POST['nut1'])
         {
	        case '????ng xu???t':
	          {
		         session_destroy();
		         header("location:index.php");
	          }
          }
       ?>
       </a>
                    </form>
            </div>
        </aside>
        <!------------------- END OF ASIDE --------------------> 
        <main>
            <div class=title><h1>THAY ?????I M???T KH???U</h1></div>

            <div class="main-section-content" id="contnet">
                <div class="row" style="display:block">
                                           <div class="row" style="display:block">
                        <div class="box-df profile-ds-info">
                            <div class="portlet">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <span class="caption-subject bold" lang="db-thongtinsinhvien">Thay ?????i m???t kh???u</span>
                                    </div>
                                </div>

                                <div class="porlet-body">
                                    
				<div class="form-horizontal">
                                                <div class="form-body">
                                                    <div class="form-group">
                                            <form id="formAuthentication" class="mb-3" action="" method="POST">
                                                    <?php
													$p->loadpasscu("select pass from taikhoangv where magiaovien=".$layid." ");
													?>
                                                                               <label for="email" class="form-label">Nh???p m???t kh???u c??:</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="txtpasscure"
                                    name="txtpasscure"
                                    placeholder="M???t kh???u c??"
                                    autofocus
                                    style="margin-bottom:30px;"
                                  />
                                                         <label for="email" class="form-label">Nh???p m???t kh???u m???i:</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    id="txtpass"
                                    name="txtpass"
                                    placeholder="M???t kh???u m???i"
                                    autofocus
                                    style="margin-bottom:30px;"
                                  />
                                  <label for="email" class="form-label">Nh???p l???i m???t kh???u m???i:</label>
                                   <input
                                    type="text"
                                    class="form-control"
                                    id="txtrepass"
                                    name="txtrepass"
                                    placeholder="Nh???p l???i m???t kh???u m???i"
                                    autofocus
                                  />
                                                        <button class="btn btn-primary d-grid w-100" type="submit" name="button" id="button" value="X??c nh???n">X??c nh???n</button>
                                                            <?php
                   switch($_POST['button'])
                        {
	                      case 'X??c nh???n':
                          {
							  $passcu=$_REQUEST['txtpasscu'];
							  $passcure=$_REQUEST['txtpasscure'];
							  $passcuremd5=md5($passcure);
							  $pass=$_REQUEST['txtpass'];
		                    $pass1=$_REQUEST['txtrepass'];
							$pass2=md5($pass1);
					if($passcuremd5==$passcu)
					{
						if($pass1==$pass)
						{	
				        	if($p->themxoasua("UPDATE taikhoangv SET pass= '$pass2' WHERE magiaovien ='$layid' LIMIT 1 ;")==1)
			                    {
			              	      echo '<script> alert("Thay ?????i m???t kh???u th??nh c??ng!"); </script>'; 
			                    }
			                 else
			                    {
				                   echo '<script> alert("Thay ?????i m???t kh???u kh??ng th??nh c??ng!"); </script>';
								}
                         }
						else
						{
							echo'M???t kh???u nh???p l???i kh??ng tr??ng kh???p!';
						}
					}
				    else
						{
							echo'M???t kh???u c?? kh??ng ????ng!';
						}
						  }
						}
                 ?>
                 </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
											 </div>
                            </div>
                        </div>
                </div>
            </div>

        </main>
        <!-------------------- END OF MAIN ------------------->
        
        <div class="right">
           

            <div class="theme-toggler">
                <span class="material-icons-sharp active">light_mode</span>
                <span class="material-icons-sharp">dark_mode</span>
            </div>

            <div class="featured">
                <div class="row">
                    <div class="col-xs-6">
                    <div class="featured-item">
                        <a href="#" title="L???ch theo tu???n" langid="Lichtheotuan">
                            <div class="box-df">
                                <div class="icon">
                                    <span class="material-icons-sharp">calendar_month</span>
                                </div>
                                <span lang="menusinhvien-8-vt">L???ch gi???ng d???y</span>
                            </div>
                        </a>
                    </div>
                    </div>
                     <div class="col-xs-6">
                    <div class="featured-item">
                         <a  href="xemdiemhs.php" title="L???ch theo tu???n" langid="Lichtheotuan">
                            <div class="box-df">
                                <div class="icon">
                                    <span class="material-icons-sharp">calendar_month</span>
                                </div>
                                <span lang="menusinhvien-8-vt">Xem ??i???m h???c sinh</span>
                            </div>
                        </a>
                    </div>
                    </div>
                     <div class="row">
                    <div class="col-xs-12">
                    <div class="featured-item">
                        <a href="dangtailieu.php" title="Tin t???c" langid="Tintuc">
                            <div class="box-df">
                                <div class="icon">
                                    <span class="material-icons-sharp">description</span>
                                </div>
                                <span lang="menusinhvien-8-vt">????ng t??i li???u</span>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>
                </div>

       

                <div class="row" style="box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993); margin-top:10px; border-radius:10px">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"><h5>Tin t???c</h5>
                                                    <?php
						$p->loadtintucgv("select * from tintuc");
						?>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
