<?php

include 'header.php';
?>

<?php
include 'sidebar.php';

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
	  <div class="col-md-12"><h4>Reports</h4></div>
        <div class="col-lg-2 col-xs-6">
		<a href="#">
          <div class="media-box">
            <div class="media-icon "><i class="icon-envelope"></i> </div>
            <div class="media-info">
              <h5>Today's Sent Sms</h5>
              <h3>153023</h3>
            </div>
          </div>
		  </a>
        </div>
        <div class="col-lg-2 col-xs-6">
		<a href="#">
          <div class="media-box bg-sea">
            <div class="media-icon"><i class="fa fa-money"></i> </div>
            <div class="media-info">
              <h5>Total Sms In Q</h5>
              <h3>8,530</h3>
            </div>
          </div>
		  </a>
        </div>
        <div class="col-lg-2 col-xs-6">
		<a href="#">
          <div class="media-box bg-blue">
            <div class="media-icon"><i class="fa fa-mail-reply"></i> </div>
            <div class="media-info">
              <h5>Awaited Reports</h5>
              <h3>935</h3>
            </div>
          </div>
		  </a>
        </div>
        <div class="col-lg-2 col-xs-6">
		<a href="#">
          <div class="media-box bg-green">
            <div class="media-icon "><i class="fa fa-envelope"></i> </div>
            <div class="media-info">
              <h5>Sms In Week</h5>
              <h3>5324</h3>
            </div>
          </div>
		  </a>
        </div>
		
		
		 <div class="col-lg-2 col-xs-6">
		 <a href="#">
          <div class="media-box bg-blue">
            <div class="media-icon "><i class="fa fa-envelope-o"></i> </div>
            <div class="media-info">
              <h5>Sms In Month</h5>
              <h3>935</h3>
            </div>
          </div>
		  </a>
        </div>
        <div class="col-lg-2 col-xs-6">
		<a href="#">
          <div class="media-box bg-green">
            <div class="media-icon "><i class="fa fa-users"></i> </div>
            <div class="media-info">
              <h5>Total Bind</h5>
              <h3>5324</h3>
            </div>
          </div>
		  </a>
        </div>
		
      </div>
      <div class="row">
        <div class="col-lg-7">
          <div class="chart-box">
            <h4>SMS Latency Summary</h4>
            <div class="chart">
              <div id="container"></div>
              <!--for values check "Product Sales" chart on char-function.js--> 
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="chart-box">
            <h4>Quick Starts</h4>
            <div class="chart">
              <div id="container1"></div>
              <!--for values check "Sales Overview" chart on char-function.js--> 
            </div>
          </div>
        </div>
		</div>
		</section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 
  
  <?php
include 'footer.php';

?>
