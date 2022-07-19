
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?=ASSETS . THEME ?>admin/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$data['user_data']->name?></h5>
                  
                  <li class="sub-menu">
                      <a href="<?=ROOT?>admin/products" >
                          <i class="fa fa-barcode"></i>
                          <span>Products</span>
                      </a>
                    
                  </li>

                  <li class="sub-menu">
                      <a href="<?=ROOT?>admin/categories" >
                          <i class="fa fa-list-alt"></i>
                          <span>Categories</span>
                      </a>
                     
                  </li>

                  <li class="sub-menu">
                      <a href="<?=ROOT?>admin/orders" >
                          <i class="fa fa-reorder"></i>
                          <span>Order List</span>
                      </a>
                  </li>


                  <!-- <li class="sub-menu">
                      <a href="<?=ROOT?>admin/users" >
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?=ROOT?>admin/users/customers">Customers</a></li>
                          <li><a  href="<?=ROOT?>admin/users/admin">Admin</a></li>

                      </ul>
                  </li> -->


              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i><?=ucwords($data['page_title'])?></h3>
          	<div class="row mt">
          		<div class="col-lg-12">
