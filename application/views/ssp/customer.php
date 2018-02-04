<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("common/header");?>
  </head>
  <body>

  <section id="container">
      <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <i class="fa fa-bars"></i>
              </div>
            <!--logo start-->
            <?php $this->load->view("common/logo");?>
            <!-- <a href="index.html" class="logo" >Flat<span>lab</span></a> -->
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <!-- <?php //$this->load->view("common/notification");?> -->
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li> -->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">张勇</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" fa fa-suitcase"></i>账号管理</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> 设置</a></li>
                            <li><a href="#"><i class="fa fa-bell-o"></i> 通知</a></li>
                            <li><a href="user"><i class="fa fa-key"></i> 退出登录</a></li>
                        </ul>
                    </li>
                    <!-- <li class="sb-toggle-right">
                        <i class="fa  fa-align-right"></i>
                    </li> -->
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <?php $this->load->view("common/sidebar");?>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

          <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             添加搜索SSP用户 
                          </header>
                          <div class="panel-body">
                              <form class="form-inline" role="form">
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputEmail2">公司名称</label>
                                      <input type="email" class="form-control" id="exampleInputEmail2" placeholder="公司名称">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputPassword2">SSP名称</label>
                                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="SSP名称">
                                  </div>
                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputPassword2">邮箱</label>
                                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="邮箱">
                                  </div>
                                  <button type="submit" class="btn btn-success">搜索</button>
                                  <button type="submit" class="btn btn-success">添加</button>
                              </form>

                          </div>
                      </section>

                  </div>
              </div>

          <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              SSP用户列表
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th class="fa fa-bullhorn"><i class="fa"></i> SSP_ID</th>
                                  <th><i class="hidden-phone"></i> 公司名称</th>
                                  <th><i class="fa"></i> SSP名称</th>
                                  <th class="hidden-phone"><i class="fa"></i> SSP_TOKEN</th>
                                  <th class="hidden-phone"><i class="fa"></i> 邮箱</th>
                                  <th><i class="fa"></i> 联系人</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td class="hidden-phone">1</td>
                                  <td><a href="#">新义互联科技有限公司</a></td>
                                  <td><a href="#">新义互联</a></td>
                                  <td class="hidden-phone">u89zsdjjkxyTIxm</td>
                                  <td class="hidden-phone">923048755@qq.com</td>
                                  <td>张勇</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>

                              <?php for ($i=2;$i<11;$i++) {?>
                                <tr>
                                  <td class="hidden-phone"><?php echo $i;?></td>
                                  <td><a href="#">新义互联科技有限公司</a></td>
                                  <td><a href="#">新义互联</a></td>
                                  <td class="hidden-phone">u89zsdjjkxyTIxm</td>
                                  <td class="hidden-phone">923048755@qq.com</td>
                                  <td>张勇</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
          </section>
      </section>
      <!--main content end-->

      <!--footer start-->
      <?php $this->load->view("common/footer");?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <!--right slidebar-->
    <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      $(window).on("resize",function(){
          var owl = $("#owl-demo").data("owlCarousel");
          owl.reinit();
      });

  </script>

  </body>
</html>
