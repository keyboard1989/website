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
                             添加搜索广告位ID 
                          </header>
                          <div class="panel-body">
                              <form class="form-inline" role="form">
                                  <div class="form-group">
                                    <select class="form-control">
                                            <option>SSP名称</option>
                                            <option>今日头条</option>
                                            <option>网上厨房</option>
                                            <option>360</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <select class="form-control">
                                            <option>APP名称</option>
                                            <option>今日头条</option>
                                            <option>网上厨房</option>
                                            <option>王者荣耀</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                    <select class="form-control">
                                            <option>广告类型</option>
                                            <option>banner</option>
                                            <option>插屏</option>
                                            <option>开屏</option>
                                            <option>原生</option>
                                            <option>视频</option>
                                    </select>
                                  </div>
                                  
                                  <div class="form-group">
                                    <select class="form-control">
                                            <option>系统类型</option>
                                            <option>android</option>
                                            <option>ios</option>
                                    </select>
                                  </div>

                                  <div class="form-group">
                                      <label class="sr-only" for="exampleInputPassword2">广告位ID</label>
                                      <input type="text" class="form-control" id="exampleInputPassword2" placeholder="广告位ID">
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
                              广告位列表
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="hidden-phone"></i> APP名称</th>
                                  <th><i class="fa"></i> SSP名称</th>
                                  <th class="fa"><i class="fa"></i> 广告位ID</th>
                                  <th class="hidden-phone"><i class="fa"></i> 系统类型</th>
                                  <th class="hidden-phone"><i class="fa"></i> 广告类型</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td><a href="#">王者荣耀</a></td>
                                  <td><a href="#">腾讯</a></td>
                                  <td class="hidden-phone">1</td>
                                  <td class="hidden-phone">android</td>
                                  <td class="hidden-phone">banner</td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>

                              <?php for ($i=2;$i<11;$i++) {?>
                                <tr>
                                  <td><a href="#">王者荣耀</a></td>
                                  <td><a href="#">腾讯</a></td>
                                  <td class="hidden-phone"><?php echo $i;?></td>
                                  <td class="hidden-phone">android</td>
                                  <td class="hidden-phone">插屏</td>
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

                      <!--pagination start-->
                    <div>
                        <ul class="pagination pagination-sm pull-right">
                            <li><a href="#">«</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
                    </div>
                      <!--pagination end-->
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
