<?php
session_start();
if(isset($_SESSION['user'])&& isset($_SESSION['pass']))
{
	include("cls/clslogin.php");
	$q=new login();
	$q->confirmlogin($_SESSION['user'],$_SESSION['pass']);
}
else
{
	header('location:login.php');
}
include("cls/cls.php");
$p=new tmdt();
$layid=$_SESSION['user'];
 $laybm=$_REQUEST['bm'];
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
    <link rel="stylesheet" href="ketquahoctap.css">
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
.profile-ds-info {
    height: auto;
    overflow: hidden;
	padding:30px;
}
#tt
{
	margin-top:20px;
	padding:20px;
	background:#E5E5E5;
	height: auto;
	width:90%;
	border-radius:10px;
	margin-bottom:20px;
	transition:all 300ms ease;
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
#tailieu
{
	margin-top:20px;
	margin-left:20px;
	padding:20px;
	background:#DADADA;
	height: auto;
	width:250px;
	border-radius:10px;
	margin:2px solid #000;
	float:left;
	transition:all 300ms ease;
}
#tailieu:hover
{
		margin-left: 1rem;
	box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993);
	transition:all 300ms ease;
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
                <a href="index.php" class="active">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a><a href="thongtinchitiet.php">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Xem th??ng tin chi ti???t</h3>
                </a><a href="doingugv.php">
                    <span class="material-icons-sharp">school</span>
                    <h3>?????i ng?? gi??o vi??n</h3>
                </a><a href ="#">
                    <span class="material-icons-sharp">mail_outline</span>
                    <h3>Th??ng b??o</h3>
                    <span class="message-count">27</span>
                </a><a href="guigopy.php">
                    <span class="material-icons-sharp">add_circle_outline</span>
                    <h3>????ng g??p ?? ki???n</h3>
                </a>
                <a href="thaydoipass.php">
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
            <div class=title><h1>Th??ng tin t??i li???u</h1></div>

            <div class="main-section-content" id="contnet">
                <div class="row" style="display:block">
                 <div class="box-df profile-ds-info">
               <?php
			   $p->loadtailieu("select * from tailieu ");
			   ?>
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
                                <span lang="menusinhvien-8-vt">Th???i kho?? bi???u</span>
                            </div>
                        </a>
                    </div>
                    </div>

                    <div class="col-xs-6">
                    <div class="featured-item">
                        <a href="ketquahoctap.php" title="K???t qu??? h???c t???p" langid="Ketquahoctap">
                            <div class="box-df">
                                <div class="icon">
                                    <span class="material-icons-sharp">leaderboard</span>
                                </div>
                                <span lang="menusinhvien-8-vt">K???t qu??? h???c t???p</span>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                    <div class="featured-item">
                        <a href="xemtailieu.php" title="Tin t???c" langid="Tintuc">
                            <div class="box-df">
                                <div class="icon">
                                    <span class="material-icons-sharp">description</span>
                                </div>
                                <span lang="menusinhvien-8-vt">T??i li???u tr???c tuy???n</span>
                            </div>
                        </a>
                    </div>
                    </div>

                    <div class="col-xs-6">
                    <div class="featured-item">
                        <a href="congno.php" title="C??ng n???" langid="Congno">
                            <div class="box-df">
                                <div class="icon">
                                    <span class="material-icons-sharp">attach_money</span>
                                </div>
                                <span lang="menusinhvien-8-vt">C??ng n???</span>
                            </div>
                        </a>
                    </div>
                    </div>
                </div>

                <div class="row" style="box-shadow: 0 2px 10px 0 rgba(114, 109, 109, 0.993); margin-top:10px; border-radius:10px">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"><h5>Tin t???c</h5>
                                  <?php
						$p->loadtintuc("select * from tintuc");
						?></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="index.js"></script>
</body>
</html>
