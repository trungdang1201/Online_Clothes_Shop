<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?=$data['page_title'] .'-'. WEBSITE_TITLE?></title>

    <link href="<?=ASSETS . THEME ?>admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    
    <link href="<?=ASSETS . THEME ?>admin/css/style.css" rel="stylesheet">
    <link href="<?=ASSETS . THEME ?>admin/css/style-responsive.css" rel="stylesheet">
    <link href="<?=ASSETS . THEME ?>admin/css/main.css" rel="stylesheet">
    <link href="<?=ASSETS . THEME ?>admin/css/footer.css" rel="stylesheet">

    
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?=ROOT?>admin" class="logo"><b>D&C | ADMIN</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                     <li><a class="logout" href="<?=ROOT?>">Website</a></li>
                    <li><a class="logout" href="<?=ROOT?>logout">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
