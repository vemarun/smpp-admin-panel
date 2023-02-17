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
        <li class="active"> Edit Reseller</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
	
      <div class="row">
	 
	  <div class="col-md-12">
	  <header role="heading">
									<ul class="nav nav-tabs pull-left in">
										<li class="active" id="accountinfo1">
											<a data-toggle="tab" href="#accountinfo" aria-expanded="true"> <i class="fa fa-lg fa-user"></i> <span class="hidden-mobile hidden-tablet"> User Account </span> </a>
										</li>
										<li id="personalinfo1" class="">
											<a data-toggle="tab" href="#personalinfo" aria-expanded="false"> <i class="fa fa-lg fa-info-circle"></i> <span class="hidden-mobile hidden-tablet"> User Info </span> </a>
										</li>
										
										<li id="otherinfo1">
											<a data-toggle="tab" href="#otherinfo" aria-expanded="true"> <i class="fa fa-lg fa-indent"></i> <span class="hidden-mobile hidden-tablet"> Other </span> </a>
										</li>
										
									</ul>
								</header>
								</div>
								
        <div class="col-md-12">
		
          <div class="chart-box">

             <form action="" method="post" id="contact-form" novalidate="novalidate" onsubmit="verify();">
										<div class="tab-content">
											<div class="tab-pane active" id="accountinfo">
												<div class="tabbable tabs-below">
													<div class="tab-content padding-10">
														<div class="tab-pane active" id="AA">
															<div class="smart-form">
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-3">
																			<label class="label">User ID</label>
																			<label class="input">
																				<i class="icon-append fa fa-info-circle"></i>
																				<input type="text" name="smppUserId" value="" id="smppUserId" placeholder="User ID" maxlength="19">
													 							<input type="hidden" value="UserIdField" name="field" id="UserField">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Password</label>
																			<label class="input">
																				<i class="icon-append fa fa-lock" data-container="body" rel="popover-hover" data-placement="top" data-original-title="   Password Generator    " data-content="Auto generate password, click here." onclick="getPasswordGenerator();"></i>
																				<input type="password" name="password" value="Arun2255" placeholder="Password" id="txtpassword" maxlength="90">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Account Type</label>
																			<label class="select">
																		
																				<select name="acctype">
																					<option value="0">Select Account Type</option>
																		
		    																		<option value="Promo">Promo</option>
		    															
		    																		<option value="Trans">Trans</option>
		    															
		    																		<option value="TransPromo">TransPromo</option>
		    															
																				</select>
																		
																				 <i></i>
																				 <div style="color: #FF0000;"></div> 
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Balance</label>
																			<div class="input-group">
																			<span class="input-group-addon"><i class="fa fa-inr"></i></span>
																			<label class="input">
																				<input name="balance" value="100" id="balance" type="text" placeholder="Account Balance" maxlength="18">
																			</label>
																			<span class="input-group-addon">.00</span>
																		</div>
																		<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																	<div class="row">
																		<section class="col col-md-3">
																			<label class="label">Validity</label>
																			<div class="input-group">
																			<label class="input">
																			<i class="icon-append fa fa-calendar"></i>
																			<input type="text" name="validity" class="form-control datepicker hasDatepicker" id="validity" value="2017-02-18" placeholder="Account Validity" style="z-index: 100;" data-dateformat="yy-mm-dd">
																		</label>
																		
																		</div>
																		<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Gateway</label>
																			<label class="select">
																		
																				<select name="gateway">
																					<option value="0">None</option>
		    																		<option value="HB-IDEA">HB-IDEA</option>
		    															
		    																		<option value="HB-BSNLOTP">HB-BSNLOTP</option>
		    															
																				</select>
																		
																				 <i></i> 
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Limit Sms Per Day</label>
																			<label class="input">
																				<i class="icon-append fa fa-history"></i>
																				<input type="text" name="limitSmsPerDay" value="-1" id="limitSmsPerDay" placeholder="N/A" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Limit Sms Per Hour</label>
																			<label class="input">
																				<i class="icon-append fa fa-history"></i>
																				<input type="text" name="LimitSmsPerHour" value="-1" id="LimitSmsPerHour" placeholder="N/A" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="col-sm-12 col-md-12 col-lg-6">
																		<div class="well1">
																			<header>TPS</header>
																			<div class="row">
																				<div class="col-md-12">&nbsp;</div>
																					<label class="label col col-md-3">
																						<span>Total TPS</span> 
																					</label>
																					<div class="col col-md-8">
																						<div class="input" id="totalTps">
																							<i class="icon-append fa fa-exchange"></i>
																							<input placeholder="Total TPS" type="text" name="totalTps" value="100" readonly="readonly">
																						</div>
																					</div>
																				</div>
																			<div class="col-md-12">&nbsp;</div>
    																		</div>
																	</div>
																	<div class="col-sm-12 col-md-12 col-lg-6">
																		<div class="well1">
																			<header>Session</header>
																			<div class="row">
																				<div class="col-md-12">&nbsp;</div>
																				<label class="label col col-md-5">
																					<span>Any(TX/RX/TRX)</span>
																				</label>
																				<div class="col col-md-7">
																					<div class="input" id="totalTps">
																						<i class="icon-append fa fa-exchange"></i>
																						<input placeholder="Bind Any" type="text" name="bindAny" value="4" readonly="readonly">
																					</div>
																				</div>
																			</div>
																			<div class="col-md-12">&nbsp;</div>
    																	</div>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="col-sm-12 col-md-12 col-lg-6">
																		<div class="well1">
																			<header>Sender</header>
																			<div class="row">
																				<div class="col-md-11">&nbsp;</div>
																				<label class="label col col-12 col-md-12">
																					<input type="radio" class="radiobox style-0" name="Sender" id="fxdSender" disabled="disabled">
																					<span>Fixed Sender</span> 
																				</label>
																				<label class="label col col-12 col-md-12">
																					<input type="radio" class="radiobox style-0" name="Sender" id="dynamicSender" disabled="disabled">
																					<span>Dynamic</span> 
																				</label>
																				<label class="label col col-12 col-md-12">
																					<input type="radio" class="radiobox style-0" name="Sender" id="approvedSender" value="" checked="checked">
																					<span>Approved</span> 
																				</label>
																				
																					
																							<label class="label col col-12 col-md-12">
																							  <input type="checkbox" class="checkbox style-0" name="checkDnd" id="CheckDnd">
																							  <span>DND Filter</span>
																							</label>
																					
																				<div class="col-md-7">&nbsp;&nbsp;</div>
																				<div class="col-md-7">&nbsp;&nbsp;</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-12 col-md-12 col-lg-6">
																		<div class="well1">
																			<header>Validation</header>
																			<div>
																				<div class="col-md-11">&nbsp;</div>
																				<div class="row">
																					<label class="label col col-md-6">
																					  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaAllow" id="senderIdAlphaAllow" disabled="disabled" checked="checked">
																					  <span>Allow Alpha Sender</span>
																					</label>
																					<section class="col-md-6 col" id="senderIdAlphaAlength">
																						<label class="select">
																							<select name="senderIdAlphaAlength" disabled="disabled">
																							
																								<option value="1">1</option>
																							
																								<option value="2">2</option>
																							
																								<option value="3">3</option>
																							
																								<option value="4">4</option>
																							
																								<option value="5">5</option>
																							
																								<option value="6" selected="selected">6</option>
																							
																								<option value="7">7</option>
																							
																								<option value="8">8</option>
																							
																								<option value="9">9</option>
																							
																								<option value="10">10</option>
																							
																								<option value="11">11</option>
																							
																								<option value="12">12</option>
																							
																								<option value="13">13</option>
																							
																								<option value="14">14</option>
																							
																								<option value="15">15</option>
																							
																							</select> 
																							<i></i>
																							<span>Alpha Length </span>
																						 </label>
																					</section>
																				</div>
																				<div class="row">
																					<label class="label col col-md-6">
																					  <input type="checkbox" class="checkbox style-0" name="senderIdAlNumAllow" id="senderIdAlNumAllow" disabled="disabled" checked="checked">
																					  <span>Allow Numeric Sender</span>
																					</label>
																					<section class="col-md-6 col" id="senderIdANumLength">
																						<label class="select">
																							<select name="senderIdANumLength" disabled="disabled">
																							
																								<option value="1">1</option>
																							
																								<option value="2">2</option>
																							
																								<option value="3">3</option>
																							
																								<option value="4">4</option>
																							
																								<option value="5">5</option>
																							
																								<option value="6" selected="selected">6</option>
																							
																								<option value="7">7</option>
																							
																								<option value="8">8</option>
																							
																								<option value="9">9</option>
																							
																								<option value="10">10</option>
																							
																								<option value="11">11</option>
																							
																								<option value="12">12</option>
																							
																								<option value="13">13</option>
																							
																								<option value="14">14</option>
																							
																								<option value="15">15</option>
																							
																							</select> 
																							<i></i>
																							<span>Numeric Length </span>
																						 </label>
																					</section>
																				</div>
																				<div class="row">
																					<label class="label col col-md-6">
																					  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaNumAllow" id="senderIdAlphaNumAllow" disabled="disabled" checked="checked">
																					  <span>Allow AlphaNumeric Sender</span>
																					</label>
																					<section class="col-md-6 col" id="senderIdAlphaNumLength">
																						<label class="select">
																							<select name="senderIdAlphaNumLength" disabled="disabled">
																							
																								<option value="1">1</option>
																							
																								<option value="2">2</option>
																							
																								<option value="3">3</option>
																							
																								<option value="4">4</option>
																							
																								<option value="5">5</option>
																							
																								<option value="6" selected="selected">6</option>
																							
																								<option value="7">7</option>
																							
																								<option value="8">8</option>
																							
																								<option value="9">9</option>
																							
																								<option value="10">10</option>
																							
																								<option value="11">11</option>
																							
																								<option value="12">12</option>
																							
																								<option value="13">13</option>
																							
																								<option value="14">14</option>
																							
																								<option value="15">15</option>
																							
																							</select> 
																							<i></i>
																							<span>AlphaNumeric Length </span>
																						 </label>
																					</section>	
																				</div>																						
																				<div class="col-md-7">&nbsp;&nbsp;</div>	
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																	<div class="col-md-12"><header>Error Code</header>	</div>
																	<div class="row">&nbsp;</div>
																		<section class="col col-md-4">
																			<label class="label">DND ErrorCode</label>
																			<label class="input">
																				<i class="icon-append fa fa-warning"></i>
																				<input type="text" name="dndErrorCode" value="900" id="dndErrorCode" placeholder="DND ErrorCode" readonly="readonly">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Day Balance Error Code</label>
																			<label class="input">
																				<i class="icon-append fa fa-dollar"></i>
																				<input type="text" name="dayBalErrorCode" value="88" id="dayBalErrorCode" placeholder="Day Balance Error Code" readonly="readonly">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Hour Balance Error Code</label>
																			<label class="input">
																				<i class="icon-append fa fa-dollar"></i>
																				<input type="text" name="hourBalErrorCode" value="88" id="hourBalErrorCode" placeholder="Hour Balance Error Code" readonly="readonly">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-4">
																			<label class="label">No Balance Error Code</label>
																			<label class="input">
																				<i class="icon-append fa fa-dollar"></i>
																				<input type="text" name="nobalErrorCode" value="1035" id="nobalErrorCode" placeholder="No Balance Error Code" readonly="readonly">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Blocked Content Error Code</label>
																			<label class="input">
																				<i class="icon-append fa fa-filter"></i>
																				<input type="text" name="blockContentErrorCode" value="102" id="blockContentErrorCode" placeholder="Blocked Content Error Code" readonly="readonly">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Blocked Sender ID Error Code</label>
																			<label class="input">
																				<i class="icon-append fa fa-info-circle"></i>
																				<input type="text" name="blocSenderIderrorCode" value="10" id="blocSenderIderrorCode" placeholder="Blocked Sender ID Error Code" readonly="readonly">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																<div class="col-md-12 text-right">
																	<div class="col-lg-12">
																		<a data-toggle="tab" href="#personalinfo" class="btn btn-danger btn-sm" onclick="getTab('personalinfo1');" aria-expanded="true">&nbsp;&nbsp;Next&nbsp;&nbsp;</a>
									              					</div>
																</div>
																</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="personalinfo">
												<div class="tabbable tabs-below">
													<div class="tab-content padding-10">
														<div class="tab-pane active" id="AA11">
															<div class="smart-form">
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Name</label>
																			<label class="input">
																				<i class="icon-append fa fa-user"></i>
																				<input type="text" name="name" value="Arun" id="name" placeholder="Name" maxlength="49">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Company Name</label>
																			<label class="input">
																				<i class="icon-append fa fa-briefcase"></i>
																				<input type="text" name="companyName" value="Arun verma Company ltd" id="companyName" placeholder="Company Name" maxlength="49">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Email ID</label>
																			<label class="input">
																				<i class="icon-append fa fa-envelope"></i>
																				<input type="text" name="email" value="vemarun@gmail.com" id="email" placeholder="User Email ID" maxlength="50">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Domain/Host</label>
																			<label class="input">
																				<i class="icon-append fa fa-globe"></i>
																				<input type="text" name="web" value="sanchika.co.in" id="web" placeholder="Domain/Host" maxlength="49">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Mobile Number</label>
																			<div class="input">
																				<span class="icon-prepend">+91</span>
																				<input type="text" class="form-control" name="mobileNo" value="" id="mobileNo" placeholder="Mobile Number">
																				<i class="icon-append fa fa-phone"></i>
																				<div style="color: #FF0000;"></div>
																			</div>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Other Number</label>
																			<div class="col-sm-12">
																				<div class="input-group1">
																					<div class="col-md-3">
																						<div class="input-group-btn">
																							<label class="input">
																								<input type="text" name="code" value="" id="code" data-mask="999" aria-required="true" aria-invalid="true" placeholder="Std Code">
																							</label>
																						</div>
																					</div>
																					<div class="col-md-1">&nbsp;</div>
																					<div class="col-md-8">
																						<label class="input">
																							<i class="icon-append fa fa-phone"></i>
																							<input type="text" name="otherNo" value="" id="otherNo" placeholder="Phone No">
																						</label>
																						<div style="color: #FF0000;"></div>
																					</div>
																				</div>
																				<div style="color: #FF0000;"></div>
																			</div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Support Name</label>
																			<label class="input">
																				<i class="icon-append fa fa-user"></i>
																				<input type="text" name="supportname" value="" id="email" placeholder="Support Name" maxlength="90">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Support Email ID</label>
																			<label class="input">
																				<i class="icon-append fa fa-envelope"></i>
																				<input type="text" name="supportemail" value="" id="supportemail" placeholder="Support Email ID" maxlength="90">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Support Number</label>
																			<label class="input">
																				<span class="icon-prepend">+91</span>
																				<input type="text" name="supportnumber" value="" id="web" placeholder="Support Number">
																				<i class="icon-append fa fa-phone"></i>
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		
																		<section class="col col-6">
																			<label class="label">&nbsp;&nbsp;</label>
																			
																	
																			<label>
																			  <input type="checkbox" class="checkbox style-0" name="checkIsDownload" id="checkIsDownload">
																			  <span>Report Via Mail &nbsp;&nbsp;</span>
																			</label>
																	
																		</section>
																		
																	</div>
																</div>
																<!-- <div class="fieldset">
																	<div class="row">
																		<section class="col col-6">
																			<label class="label">Logo</label>
																			<div class="input input-file">
																				<span class="button"><input id="txtlogofile" type="file" name="txtlogofile" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include logo" readonly="">
																			</div>
																		</section>
																	</div>
																</div> -->
																<footer>
																	<button type="submit" name="submit" class="btn btn-danger">Cancel</button>
																	
																	<button type="submit" name="submit" class="btn btn-primary" id="updatereseller">Update</button>
																	<!-- <button type="button" class="btn btn-primary" id="processAdd" style="display: none;">
											                                                <i class="fa fa-spinner fa-spin"></i> Processing</button> -->
																</footer>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="tab-pane" id="otherinfo">
											<div class="tabbable tabs-below">
												<div class="tab-content padding-10">
													<div class="tab-pane active" id="AA21">
														<form action="dosmppresuserupdatelogoprocess" method="post" enctype="multipart/form-data" id="contact-form" class="smart-form" novalidate="novalidate">
															<div class="smart-form">
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Logo</label>
																			<div class="well well-lg product-image" style="min-height: 300px;">
																				<img alt="" src="image?txtUserId=222208" class="img-responsive">
																			</div>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Logo</label>
																			<div class="input input-file">
																				<span class="button"><input id="txtlogofile" type="file" name="txtlogofile" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Upload logo" readonly="">
																			</div>
																			<footer>
																				<button type="submit" name="submit" class="btn btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin' ></i> Processing">Update</button>
																			</footer>
																			<input type="hidden" name="txtaction" value="OtherInfoTab">
																			<input type="hidden" name="editUserId" value="222208">
																		</section>
																		
																	</div>
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
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
