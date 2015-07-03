<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hebo! - Responsive HTML5 Theme</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Simpson Moyo - Webapplicationthemes.com">
	
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
	
    <!-- the styles -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css">
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Pontano+Sans'>
    <link rel="stylesheet" type="text/css" href="js/nivo-slider/themes/default/default.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="js/nivo-slider/nivo-slider.css" >
    <link rel="stylesheet" type="text/css" href="js/lightbox/css/lightbox.css" />
    <link rel="stylesheet" type="text/css" href="css/template.css">   
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="css/style2.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="css/style3.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="css/style4.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="css/style5.css" />
    <link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="css/style6.css" />
    
    
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="js/swfobject/swfobject.js"></script>
	<script type="text/javascript" src="js/lightbox/js/lightbox.js"></script>
    <!-- style switcher -->
    <script type="text/javascript" src="js/styleswitcher.js"></script>
    

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    

    <!-- The fav and touch icons -->
    <link rel="shortcut icon" href="img/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
  </head>

<body>
<section id="header">
<!-- Include the header bar -->
    <?php include_once('header.php');?>
<!-- /.container -->  
</section><!-- /#header -->
 
<section id="navigation-main">   
	<!-- get page from url -->
    <?php
    	if(isset($_GET['page']))
		{
			$page = $_GET['page'];	
		}else
		{
			$page = '';	
		}
	
	?>
    <!-- Include the navigation bar -->
   <?php include_once('navigation.php');?>
</section><!-- /#navigation-main -->

<!-- Include the content pages -->
    <?php 
	
	switch ($page)
	{
	case 'about':
	  include_once('about.php');
	  break;
	case 'portfolio':
	  include_once('portfolio-4-cols.php');
	  break;
	case 'portfolio-3-cols':
	  include_once('portfolio-3-cols.php');
	  break;
	case 'portfolio-2-cols':
	  include_once('portfolio-2-cols.php');
	  break;
	case 'portfolio-1-col':
	  include_once('portfolio-1-col.php');
	  break;
	case 'homepage2':
	  include_once('home2.php');
	  break;
	case 'homepage3':
	  include_once('home3.php');
	  break;  
	case 'homepage4':
	  include_once('home4.php');
	  break;
	case 'homepage5':
	  include_once('home5.php');
	  break;
	case 'homepage6':
	  include_once('home6.php');
	  break;
	case 'columns':
	  include_once('columns.php');
	  break;  
	case 'elements':
	  include_once('elements.php');
	  break; 
	case 'pricing-tables':
	case 'pricing-tables2':
	  include_once('pricing-tables.php');
	  break;
	case 'blog':
	  include_once('blog.php');
	  break;
	case 'blog-small-picture':
	  include_once('blog-small-picture.php');
	  break;
	case 'blog-item':
	  include_once('blog-item.php');
	  break;
	case 'contact':
	  include_once('contact.php');
	  break;
	default:
	  include_once('home.php');
	}
	?>
    
    

<footer>
    <div class="footer">
        <div class="container">
        	Copyright &copy; 2012. Designed by webapplicationthemes.com - High quality HTML Theme
        </div>
	</div>
</footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>   
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>


  </body>
</html>
