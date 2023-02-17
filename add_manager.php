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
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <li class="active"> Add Manager</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
	
      <div class="row">
	 
	  <div class="col-md-12">

								
	 <header role="heading">
									<ul class="nav nav-tabs pull-left in">
										<li class="active" id="accountinfo1">
											<a data-toggle="tab" href="#" aria-expanded="true"> <i class="fa fa-lg fa-user"></i> <span class="hidden-mobile hidden-tablet"> Add Account Manager </span> </a>
										</li>
										
									</ul>
								</header>							
								
								</div>
								
        <div class="col-md-12">
		
          <div class="chart-box">

             <form action="doresusercreateprocess" method="post" id="contact-form" novalidate="novalidate" onsubmit="verify();">
			 
			 <div>
										<div class="form-horizontal">
										<fieldset>
											<div class="smart-form">
												<div class="fieldset">
													<div class="row">
														<section class="col col-md-6">
															<label class="label">UserId</label>
															<label class="input">
																<i class="icon-append fa fa-user"></i>
																<input type="text" name="actUserId" value="" id="actUserId" placeholder="Enter User ID" maxlength="49">
															</label>
															
															<div style="color: #FF0000;" id="errorActUserId"></div>
														</section>
														<section class="col col-md-6">
															<label class="label">Password</label>
															<label class="input">
																<i class="icon-append fa fa-lock"></i>
																<input type="password" name="actPass" value="" id="actPass" placeholder="Enter Password" maxlength="49">
															</label>
															
															<div style="color: #FF0000;" id="errorActPass"></div>
														</section>
													</div>
												</div>
												<div class="fieldset">
													<div class="row">
														<section class="col col-md-6">
															<label class="label">Manager Name</label>
															<label class="input">
																<i class="icon-append fa fa-envelope"></i>
																<input type="text" name="actManagerName" value="" id="actManagerName" placeholder="Enter Account Manager Name" maxlength="49">
															</label>
															
															<div style="color: #FF0000;" id="erroractManagerName"></div>
														</section>
														<section class="col col-md-6">
															<label class="label">Designation</label>
															<label class="input">
																<i class="icon-append fa fa-globe"></i>
																<input type="text" name="desiganation" value="" id="desiganation" placeholder="Enter Designation" maxlength="49">
															</label>
															
															<div style="color: #FF0000;" id="errorDesiganation"></div>
														</section>
													</div>
												</div>
												<div class="fieldset">
													<div class="row">
														<section class="col col-md-6">
															<label class="label">Email</label>
															<label class="input">
																<i class="icon-append fa fa-envelope"></i>
																<input type="text" name="email" value="" id="email" placeholder="Enter Account Manager Email ID" maxlength="49">
															</label>
															<div style="color: #FF0000;" id="errorEmail"></div>
														</section>
														<section class="col col-md-6">
															<label class="label">Mobile Number</label>
															<label class="input">
																<i class="icon-append fa fa-phone"></i>
																<input type="text" name="mobileNumber" value="" id="mobileNumber" placeholder="Enter Mobile Number" maxlength="49">
															</label>
															
															<div style="color: #FF0000;" id="errorMobileNumber"></div>
														</section>
													</div>
												</div>
												<div class="fieldset">
													
												</div>
											</div>
						
												
												<div class="row1">
													<div class="fieldset smart-form">
														<footer>
															<input class="btn btn-primary" placeholder="" type="button" id="create" value="Create" onclick="CreateAcountManager();">
															<button type="button" class="btn btn-primary" id="processAdd" style="display: none;">
	                                               					<i class="fa fa-spinner fa-spin"></i> Processing</button>
														</footer>
													</div>
												
												</div>
											</fieldset>
											<fieldset>
												<div class="row">
													
												<br></div>
		                            		</fieldset>
										</div>
									</div>
			 
			 
			 </form>

		  </div>
      </div>
   
	
	
	</section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 
  
  <!-- Main Footer -->
  <footer class="main-footer dark-bg">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2019 SMPP Admin. All rights reserved. </footer>
</div>
<!-- wrapper --> 
<?php

include 'footer.php';
?>



