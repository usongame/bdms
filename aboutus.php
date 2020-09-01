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
  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">
<div class="s_bg">
<div class="wrap">
<div class="cont_main">
	<div class="content">
	 
			<h4><span class="bold">图书捐助平台</span></h4>
			<p><img src="Images/123.jpg" height="200px" style="margin-bottom:40px" /></a></p>
			<p class="top">你们好，为了使您闲置的图书能够发挥更大的价值，图书馆倡议全校各院系、各部门师生伸出奉献之手踊跃参加图书捐赠活动，把它作为珍贵的礼物捐赠给学校，我们会让您的爱心接力下去，让书籍焕发出新的生命!  

图书馆将对您的爱心进行登记留存、集中管理，并向捐赠者发放捐赠证明。同时将通过多种方式公布图书捐赠情况，以示感谢。

    一册图书一份情，一缕书香一片心!图书馆与您因书而结缘，您所捐献的每一册图书也会使这份情缘得以延续!“予人玫瑰，手留余香”，您的慷慨捐赠定将惠泽师生，使更多的读者享受阅读的快乐；您奉献的爱心也将通过图书馆永久传递，为母校留下新的佳话和记忆!</p>
		<p class="top">感谢您的捐助</p>	
        <p class="top">捐书地点</p>
<p>图书馆2楼206室</p>
        <p class="top">联系电话 0512-123456</p>
       
	</div>
	<div class="sidebar">
			<div>  
<br /><br /><br /><br /><br />
			       <div>
                       
						<br /><br />
                           
                            
				  </div>
				 
					 <div class="clear"></div>	
				</div>	
	</div>
	
</div>
</div>
		
</form>
</div>

       
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<?php require('footer.php');?>
</div>
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
	echo "<script>alert('Record Save');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</body>
</html>