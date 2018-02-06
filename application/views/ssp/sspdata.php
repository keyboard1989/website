<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("common/header");?>
    <link href="assets/morris.js-0.4.3/morris.css" rel="stylesheet" />
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
                             ssp数据详情 
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
              
              <!-- page start-->
              <div class="tab-pane" id="chartjs">
                  <div class="row">

                    <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  ssp数据详情
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="line" height="300" width="450"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6">
                          <section class="panel">
                              <header class="panel-heading">
                                  各主要ssp流量占比
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="doughnut" height="300" width="400"></canvas>
                              </div>
                          </section>
                      </div>
                      
                  </div>

                  <div class="row">
                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Radar
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="radar" height="200" width="200"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Polar Area
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="polarArea" height="200" width="200"></canvas>
                              </div>
                          </section>
                      </div>

                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Bar
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="bar" height="200" width="200"></canvas>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-3">
                          <section class="panel">
                              <header class="panel-heading">
                                  Pie
                              </header>
                              <div class="panel-body text-center">
                                  <canvas id="pie" height="200" width="200"></canvas>
                              </div>
                          </section>
                      </div>
                  </div>
                  
                 
              </div>
              <!-- page end-->

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              SSP详细数据
                          </header>
                          <div class="panel-body">
                              <section id="flip-scroll">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>SSP名称</th>
                                          <th>请求数</th>
                                          <th class="numeric">填充数</th>
                                          <th class="numeric">展示数</th>
                                          <th class="numeric">点击数</th>
                                          <th class="numeric">填充率</th>
                                          <th class="numeric">点击率</th>
                                          <th class="numeric">流水</th>
                                          <th class="numeric">收益</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr>
                                          <td>网上厨房</td>
                                          <td>9999</td>
                                          <td class="numeric">8888</td>
                                          <td class="numeric">2222</td>
                                          <td class="numeric">1111</td>
                                          <td class="numeric">2%</td>
                                          <td class="numeric">3%</td>
                                          <td class="numeric">￥1000</td>
                                          <td class="numeric">￥400</td>
                                      </tr>
                                      <tr>
                                          <td>世纪佳缘</td>
                                          <td>9999</td>
                                          <td class="numeric">8888</td>
                                          <td class="numeric">2222</td>
                                          <td class="numeric">1111</td>
                                          <td class="numeric">2%</td>
                                          <td class="numeric">3%</td>
                                          <td class="numeric">￥1000</td>
                                          <td class="numeric">￥400</td>
                                      </tr>
                                      <tr>
                                          <td>小鬼当家</td>
                                          <td>9999</td>
                                          <td class="numeric">8888</td>
                                          <td class="numeric">2222</td>
                                          <td class="numeric">1111</td>
                                          <td class="numeric">2%</td>
                                          <td class="numeric">3%</td>
                                          <td class="numeric">￥1000</td>
                                          <td class="numeric">￥400</td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </section>
                          </div>
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
    <!--<script src="js/jquery-1.8.3.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/chart-master/Chart.js"></script>
    <script src="js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!-- script for this page only-->
    <script src="js/all-chartjs.js"></script>

  </body>
</html>
