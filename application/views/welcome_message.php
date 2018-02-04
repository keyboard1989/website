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
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  0
                              </h1>
                              <p>SSP客户数</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  0
                              </h1>
                              <p>DSP客户数</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-shopping-cart"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>当日总请求</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>当日总流水</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->

              <div class="row">
                  <div class="col-lg-8">
                      <!--custom chart start-->
                      <div class="border-head">
                          <h3>各ssp请求数</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10000</span></li>
                              <li><span>8000</span></li>
                              <li><span>6000</span></li>
                              <li><span>4000</span></li>
                              <li><span>2000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">王者</div>
                              <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">4%</div>
                          </div>
                          <div class="bar">
                              <div class="title">撸啊</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">10%</div>
                          </div>
                          <div class="bar">
                              <div class="title">撸啊</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">90%</div>
                          </div>
                          <div class="bar">
                              <div class="title">撸撸</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">70%</div>
                          </div>
                          <div class="bar">
                              <div class="title">撸撸</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">50%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
                  </div>
                  <div class="col-lg-4">
                      <!--new earning start-->
                      <div class="panel terques-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span>请求数（今日）</span>
                                      <strong>58000</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">SSP汇总</span>
                              <span class="value">
                                  <a href="#" class="active">请求数</a>
                              </span>
                          </div>
                      </div>
                      <!--new earning end-->
                      <!--new earning start-->
                      <div class="panel green-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span>请求数（昨日）</span>
                                      <strong>58000</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">SSP汇总</span>
                              <span class="value">
                                  <a href="#" class="active">请求数</a>
                              </span>
                          </div>
                      </div>
                      <!--new earning end-->
                  </div>
              </div>    

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              SSP前三详细数据
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

              <div class="row">
                  <div class="col-lg-8">
                      <!--custom chart start-->
                      <div class="border-head">
                          <h3>各dsp填充数</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10000</span></li>
                              <li><span>8000</span></li>
                              <li><span>6000</span></li>
                              <li><span>4000</span></li>
                              <li><span>2000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">申米</div>
                              <div class="value tooltips" data-original-title="80%" data-toggle="tooltip" data-placement="top">8%</div>
                          </div>
                          <div class="bar">
                              <div class="title">互联</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">20%</div>
                          </div>
                          <div class="bar">
                              <div class="title">点入</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">70%</div>
                          </div>
                          <div class="bar">
                              <div class="title">非凡</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">30%</div>
                          </div>
                          <div class="bar">
                              <div class="title">品友</div>
                              <div class="value tooltips" data-original-title="50%" data-toggle="tooltip" data-placement="top">60%</div>
                          </div>
                      </div>
                      <!--custom chart end-->
                  </div>
                  <div class="col-lg-4">
                      <!--new earning start-->
                      <div class="panel terques-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span>填充数（今日）</span>
                                      <strong>58000</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">DSP汇总</span>
                              <span class="value">
                                  <a href="#" class="active">请求数</a>
                              </span>
                          </div>
                      </div>
                      <!--new earning end-->
                      <!--new earning start-->
                      <div class="panel green-chart">
                          <div class="panel-body chart-texture">
                              <div class="chart">
                                  <div class="heading">
                                      <span>填充数（昨日）</span>
                                      <strong>58000</strong>
                                  </div>
                                  <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,564,455]"></div>
                              </div>
                          </div>
                          <div class="chart-tittle">
                              <span class="title">DSP汇总</span>
                              <span class="value">
                                  <a href="#" class="active">填充数</a>
                              </span>
                          </div>
                      </div>
                      <!--new earning end-->
                  </div>
              </div>    

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              DSP前三详细数据
                          </header>
                          <div class="panel-body">
                              <section id="flip-scroll">
                                  <table class="table table-bordered table-striped table-condensed cf">
                                      <thead class="cf">
                                      <tr>
                                          <th>DSP名称</th>
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
                                          <td>申米</td>
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
                                          <td>品友</td>
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
                                          <td>非凡</td>
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
