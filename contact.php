<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>校园图书捐助平台</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>
<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>
    <div>
<div style="height:500px; width:100%; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">


  <div   class="col span_2_of_3"> <div class="contact-form" style="padding-left:100px;">
				  	<h1>联系我们</h1>
  
    <table  cellspacing="0" cellpadding="0"  width="500px" height="300px">               

<tr><td class="lefttd"  style="vertical-align:middle"> 姓名:</td><td><input type="text" name="t1"  required="required"/></td></tr>



<tr><td class="lefttd"  style="vertical-align:middle">邮箱</td><td><input type="email" name="t2" required="required" /></td></tr>
<tr><td class="lefttd"  style="vertical-align:middle">联系电话</td><td><input type="number" name="t3"   pattern="[0-9]{10,12}" title="请输入11位手机号码" /></td></tr>

<tr><td class="lefttd"  style="vertical-align:middle">内容</td><td><textarea name="t4"></textarea></td></tr>

<tr><td>&nbsp;</td><td><input type="submit" value="发送" name="sbmt"></td></tr></table>

</div>
</div>
		
		  </div>
</form>
        </div>
         </div> 
         </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<?php require('footer.php');?>
</div>
</div>

<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('发送成功');</script>";
	}
	else
	{echo "<script>alert('发送失败');</script>";
	}
		
		}	
	

?> 
</body>
</html>