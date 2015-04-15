<?php
	session_start();
	if (!isset($_SESSION['qwee'])) {
		header('location: login.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Data Minyak Kelapa Sawit</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
  

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="index.php" class="logo">STIKOM<span>lab</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                   
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="img/avatar1_small.jpg">
                            <span class="username">Andhika Maheva</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                            <li><a href="login.php?keluar"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
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
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a  href="index.php">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="icon-th"></i>
                          <span>Data</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="produksi.php">Data Produksi</a></li>
                          <li><a  href="areal.php">Data Luas Areal</a></li>
                          <li><a  href="perusahaan.php">Data Jumlah Perusahaan</a></li>
                          <li><a href="karet.php">Data Pohon Karet</a></li>
                          <li><a  href="kelapa.php">Data Pohon Kelapa</a></li>
                          <li class="active"><a  href="sawit.php">Data Minyak Kelapa Sawit</a></li>
                      </ul>
                  </li>
            
                  
                  <li>
                      <a  href="login.php?keluar">
                          <i class="icon-user"></i>
                          <span>Log Out</span>
                      </a>
                  </li>

                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!--state overview start-->
           
              <!--state overview end-->

               <div class="row">
              	
                  <div class="col-lg-12">
                  	<div id="chartA" class="col-md-8" style="height:600px"></div>
                      <section class="panel">
                          
                          <div class="panel-body" class="col-md-4">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" style="width:330px;" id="example">
                                     <thead>
                                        <tr>
                                            <th>Tahun</th>
                                            <th>Produksi</th>
                                            <th>Luas Areal</th>
                                            <th>Jumlah Perusahaan</th>
                                           
                                        </tr>
                                    </thead>
                                   <tbody>
                                        <tr class="odd gradeX">
                                            <td>2000</td>
                                            <td>1977,8</td>
                                            <td>1190,20</td>
                                            <td class="center">693</td>                       
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2001</td>
                                            <td>2800,7</td>
                                            <td>1566,00</td>
                                            <td class="center">714</td>
                                           
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>2002</td>
                                            <td>3426,7</td>
                                            <td>1808,40</td>
                                            <td class="center">882</td>
                                        
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>2003</td>
                                            <td>3517,3</td>
                                            <td>1854,40</td>
                                            <td class="center">882</td>
                                            
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>2004</td>
                                            <td>3847,2</td>
                                            <td>2220,30</td>
                                            <td class="center">885</td>
                                            
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>2005</td>
                                            <td>4500,8</td>
                                            <td>2356,90</td>
                                            <td class="center">890</td>
                                            
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2006</td>
                                            <td>5608,2</td>
                                            <td>2536,50</td>
                                            <td class="center">958</td>
                                            
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2007</td>
                                            <td>5811,0</td>
                                            <td>2571,20</td>
                                            <td class="center">965</td>
                                        
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2008</td>
                                            <td>6923,0</td>
                                            <td>2881,90</td>
                                            <td class="center">1146</td>
                                            
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2009</td>
                                            <td>7517,7</td>
                                            <td>3061,40</td>
                                            <td class="center">1151</td>
                                            
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2010</td>
                                            <td>8458,7</td>
                                            <td>3387,30</td>
                                            <td class="center">1176</td>
                                            
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2011</td>
                                            <td>8797,9</td>
                                            <td>3752,50</td>
                                            <td class="center">1217</td>
                                           
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2012</td>
                                            <td>9197,7</td>
                                            <td>4137,60</td>
                                            <td class="center">1510</td>
                                            
                                        </tr>
                                        <tr class="gradeA">
                                            <td>2013</td>
                                            <td>9505,0</td>
                                            <td>4415,80</td>
                                            <td class="center">1605</td>
                                            
                                        </tr>
                                    </tbody>
                          </table>
                                </div>
                          </div>

                      </section>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-4">
                      
                  </div>
                  <div class="col-lg-8">
                      
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8">
                     
                  </div>
                  <div class="col-lg-4">
                     
                     
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-8">
                                      </div>
                  <div class="col-lg-4">
					</div>
					</div>
                      <div class="row">
                          <div class="col-xs-6">
                                                      </div>
                          <div class="col-xs-6">
                             
                  </div>
              </div>

          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; FlatLab by VectorLab.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>
		<script src="js/jquery-1.8.3.min.js" ></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/highcharts.js"></script>
		<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
		
		<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="js/respond.min.js" ></script>

    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

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

  </script>

		
		<script type="text/javascript">
$(function () {
    $('#chartA').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Data Kelapa Sawit',
            
            
            
            
        },
        subtitle: {
            text: 'Source: bps.go.id'
        },
        xAxis: {
            categories: [
            	'2000',
            	'2001',
            	'2002',
            	'2003',
            	'2004',
            	'2005',
            	'2006',
            	'2007',
            	'2008',
            	'2009',
            	'2010',
                '2011',
                '2012',
                '2013'
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Produksi',
            data: [1977.8, 2800.7, 3426.7, 3517.3, 3847.2, 4500.8, 5608.2, 5811, 6923, 7517.7, 8458.7, 8797.9, 9197.7, 9505]

        }, {
            name: 'Luas Areal',
            data: [1190.20, 1566, 1808.40, 1854.40, 2220.30, 2356.90, 2536.50, 2571.20, 2881.90, 3061.40, 3387.30, 3752.50, 4137.60, 4415.80]

        }, {
            name: 'Jumlah Perusahaan',
            data: [693, 714, 882, 882, 885, 890, 958, 965, 1146, 1151, 1176, 1217, 1510, 1605]

        }]
    });
});
		</script>
			<!-- END CHART 1 --></body>
</html>
