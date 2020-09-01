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

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		
		<p>为了丰富校园图书，唤醒师生手中“沉睡的书籍”，让更多人共享读书的快乐、成长的幸福，我们本着“自愿分享、共同参与”的原则，向全校广大师生发出“书香满校园”图书捐赠倡议。

捐一份书香，留一份真情。涓涓细流汇集在一起，将掀起惊人的波浪。我们期待着广大师生踊跃捐献出饱含自己浓浓爱心的书籍，让爱的暖流在菁菁校园永远传递！</p>
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="https://phpmysql.oss-cn-shanghai.aliyuncs.com/bdms/1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="https://phpmysql.oss-cn-shanghai.aliyuncs.com/bdms/2.jpeg" />
  	    		</li>
  	    		<li>
  	    	    <img src="https://phpmysql.oss-cn-shanghai.aliyuncs.com/bdms/3.jpg"/>
  	    		</li>
  	    		<li>
  	    	    <img src="https://phpmysql.oss-cn-shanghai.aliyuncs.com/bdms/4.jpeg" />
  	    		</li>
  	    		
          </ul>
        </div>
      </section>
	<div class="ribben">
	   <div class="l-triangle-top"></div>
	   <div class="l-triangle-bottom"></div>
		   <div class="rectangle"></div>
	      <div class="r-triangle-top"></div>
	   <div class="r-triangle-bottom"></div>
	   <div class="clear"></div>
	</div>
<div class="main">
	<div class="content">		
			<h4>倡议书</h4>
			<p>尊敬的老师、亲爱的同学们：

也许您读过这样一本书，它启迪了您的灵感，使您倍感开卷有益，您是否愿意与他人分享？也许您读过这样一本书，它开拓了您的思维，成为您智慧的泉眼，您是否愿意与他人分享？也许您读过这样一本书，它如同您前行道路上的一盏明灯，使您常常在内心深处品味它的芬芳，您是否愿意与他人分享？也许您读过这样一本书，它如同欢快的音乐，给您以欢乐，您是否愿意与他人分享？为了丰富校园共享图书，唤醒一些同学、老师家中“沉睡的书籍”，让更多的老师、同学能够共享读书的快乐、成长的幸福，我们本着“自愿分享、共同参与”的原则，向全校广大师生发出“共享书香、情满校园”图书捐赠活动倡议，深入推动我校“书香墨韵”校园建设和师生大阅读活动。请您将已经阅读完，并对大家有益的图书捐赠出来，让更多的读者汲取知识营养，我们将妥善地安排和使用这些捐赠图书资源</p>
	</div>

	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<?php require('footer.php');?>
</div>
</div>
</body>
</html>