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
        <li class="active"> Add User</li>
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
											<a data-toggle="tab" href="#personalinfo"> <i class="fa fa-lg fa-info-circle"></i> <span class="hidden-mobile hidden-tablet"> Personal Info </span> </a>
										</li>
										
										<li id="otherinfo1" class="">
											<a data-toggle="tab" href="#otherinfo" aria-expanded="false"> <i class="fa fa-lg fa-indent"></i> <span class="hidden-mobile hidden-tablet"> Other </span> </a>
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
																			<label class="label">User ID<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-info-circle"></i>
																				<input type="text" name="smppUserId" value="" id="smppUserId" placeholder="User ID" maxlength="25">
													 							<input type="hidden" value="UserIdField" name="field" id="UserField">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Password<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-lock" data-container="body" rel="popover-hover" data-placement="top" data-original-title="   Password Generator    " data-content="Auto generate password, click here." onclick="getPasswordGenerator();"></i>
																				<input type="password" name="password" value="" placeholder="Password" id="txtpassword" maxlength="8">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">System Type</label>
																			<label class="input">
																				<i class="icon-append fa fa-cogs"></i>
																				<input type="text" name="systemType" value="" id="systemType" placeholder="System Type" maxlength="3">
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
																			</label>
																		</section>
																		
																	</div>
																	<div class="row">
																		<section class="col col-md-3">
																			<label class="label">Account Manager</label>
																			<label class="select">
																		
																				<select name="managerName">
																					<option value="0">Select Manager</option>
																		
																				</select>
																		
																				 <i></i> 
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Gateway<font color="red">*</font></label>
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
																				<input type="text" name="limitSmsPerDay" value="N/A" id="limitSmsPerDay" placeholder="N/A" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Limit Sms Per Hour</label>
																			<label class="input">
																				<i class="icon-append fa fa-history"></i>
																				<input type="text" name="LimitSmsPerHour" value="N/A" id="LimitSmsPerHour" placeholder="N/A" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																	</div>
																	<div class="row">
																		<section class="col col-md-3">
																			<label class="label">Validity<font color="red">*</font></label>
																			<div class="input-group">
																				<label class="input">
																					<input name="validity" value="" id="validity" type="text" placeholder="Account Validity" maxlength="4">
																				</label>
																				<span class="input-group-addon">Days</span>
																			</div>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Balance Type</label>
																			<label class="select">
																		
																				<select name="balanceMode" onchange="getBalanceMode();" id="balanceMode">
																					<option value="PREPAID" selected="selected">PREPAID</option>
																					<option value="POSTPAID">POSTPAID</option>
																				</select>
																		
																				 <i></i> 
																			</label>
																		</section>
																		<section class="col col-md-3">
																			<label class="label" id="txtBalDiv">Balance</label>
																			<div class="input-group">
																			<!-- <span class="input-group-addon"><i class="fa fa-inr"></i></span> -->
																			<label class="input">
																				<input name="balance" value="" id="balance" type="text" placeholder="Account Balance" maxlength="9">
																			</label>
																			<span class="input-group-addon">.00</span>
																		</div>
																		<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Client Name</label>
																
																			<label class="select">
																				<select name="txtSmppClientName" id="txtSmppClientName">
																					<option value="-1">Select Client Name</option>
																				
																							<option value="TCL">TCL</option>
																				
																					</select>
																					<i></i>
																			</label>
																			<div style="color: #FF0000;"></div>
																
																		</section>
																
																	</div>
																</div>
																<div class="fieldset">
																	<div class="col-sm-12 col-md-12 col-lg-5">
																		<div class="well1">
																			<header>TPS</header>
																	
																			<div class="row">
																				<div class="col-md-12">&nbsp;</div>
																				<label class="label col col-md-4">
																					<input type="radio" class="radiobox style-0" name="tps" id="tpsper">
																					<span>TPS Per Session</span> 
																				</label>
																				<div class="col col-7 col-md-7">
																					<div class="input" id="tpsPerSession">
																						<i class="icon-append fa fa-exchange"></i>
																						<input placeholder="TPS Per Session" type="text" name="tpsPerSession" maxlength="5">
																					</div>
																				</div>
																			</div>
																			<div class="row">
																				<label class="label col col-md-4">
																					<input type="radio" class="radiobox style-0" name="tps" checked="checked" id="tps">
																					<span>Total TPS</span> 
																				</label>
																				<div class="col col-7 col-md-7">
																					<div class="input" id="totalTps">
																						<i class="icon-append fa fa-exchange"></i>
																						<input placeholder="Total TPS" type="text" name="totalTps" value="10" maxlength="5">
																						<input type="hidden" name="tpsName" value="tps" id="tpsName">
																					</div>
																				</div>
																			</div>
																	
    																			
    																			
																		<div class="col-md-12">&nbsp;</div>
     																		<div class="row">
																				<label class="label col col-md-4">
																					<span>Keep Alive</span> 
																				</label>
																				<div class="col col-7 col-md-7">
																					<label class="select">
																				
																						<select name="keepAlive">
																							<option value="" disabled="disabled">--Select Value--</option>
																						
													 										<option value="5">5</option>
																						
													 										<option value="10">10</option>
																						
													 										<option value="15">15</option>
																						
													 										<option value="20">20</option>
																						
													 										<option value="25">25</option>
																						
													 										<option value="30">30</option>
																						
													 										<option value="35">35</option>
																						
													 										<option value="40">40</option>
																						
													 										<option value="45">45</option>
																						
													 										<option value="50">50</option>
																						
													 										<option value="55">55</option>
																						
																							<option value="60" selected="selected">60</option>
																						
													 										<option value="65">65</option>
																						
													 										<option value="70">70</option>
																						
													 										<option value="75">75</option>
																						
													 										<option value="80">80</option>
																						
													 										<option value="85">85</option>
																						
													 										<option value="90">90</option>
																						
													 										<option value="95">95</option>
																						
													 										<option value="100">100</option>
																						
													 										<option value="105">105</option>
																						
													 										<option value="110">110</option>
																						
													 										<option value="115">115</option>
																						
													 										<option value="120">120</option>
																						
																						</select>
																						 <i></i>
																				 
																					</label>
																				</div>
																			</div>
																			<div class="col-md-12" style="margin-top: -10px;">&nbsp;</div>
																		</div>
																	</div>
																	<div class="col-sm-12 col-md-12 col-lg-7">
																		<div class="well1">
																			<div class="row">
																				<div class="col-sm-4">
																					<header>&nbsp;&nbsp;&nbsp;Session</header>
																				</div>
																				<div class="col col-4">
																					<label class="control-label col-md-2"></label>
																					<div class="input-group">
																						<span class="input-group-addon">
																							<span class="radio">
																								<label>
																									<input type="radio" class="radiobox style-0" name="bindType" id="bindType" onchange="showhidediv(1)"  checked="checked">
																									<span> Bind Type</span> 
																								</label>
																							</span>
																						</span>
																						<!-- <input class="form-control" placeholder="" type="text"> -->
																						<span class="input-group-addon">
																							<span class="radio">
																								<label>
																									<input type="radio" class="radiobox style-0" name="bindType" onchange="showhidediv(2)" id="other1">
																									<span> Other</span> 
																								</label>
																							</span>
																						</span>
																					</div>
																				</div>
																				<div class="col-sm-4"></div>
																			</div>
																			<div class="form-group">&nbsp;</div>
																			<div class="row1">
																	
    																				<input type="hidden" name="bind" id="bind" value="bindType">
																				<div id="any">
																					<!-- <section class="col col-1"></section> -->
																					<section class="col col-md-5">
																						<label class="label">Any(TX/RX/TRX)</label>
																						<label class="select">
																							<select name="bindAny">
																							
														 										<option value="0">0</option>
																							
														 										<option value="1">1</option>
																							
														 										<option value="2">2</option>
																							
														 										<option value="3">3</option>
																							
																								<option value="4" selected="selected">4</option>
																							
														 										<option value="5">5</option>
																							
														 										<option value="6">6</option>
																							
														 										<option value="7">7</option>
																							
														 										<option value="8">8</option>
																							
														 										<option value="9">9</option>
																							
														 										<option value="10">10</option>
																							
														 										<option value="11">11</option>
																							
														 										<option value="12">12</option>
																							
														 										<option value="13">13</option>
																							
														 										<option value="14">14</option>
																							
														 										<option value="15">15</option>
																							
														 										<option value="16">16</option>
																							
														 										<option value="17">17</option>
																							
														 										<option value="18">18</option>
																							
														 										<option value="19">19</option>
																							
														 										<option value="20">20</option>
																							
														 										<option value="21">21</option>
																							
														 										<option value="22">22</option>
																							
														 										<option value="23">23</option>
																							
														 										<option value="24">24</option>
																							
														 										<option value="25">25</option>
																							
														 										<option value="26">26</option>
																							
														 										<option value="27">27</option>
																							
														 										<option value="28">28</option>
																							
														 										<option value="29">29</option>
																							
														 										<option value="30">30</option>
																							
														 										<option value="31">31</option>
																							
														 										<option value="32">32</option>
																							
														 										<option value="33">33</option>
																							
														 										<option value="34">34</option>
																							
														 										<option value="35">35</option>
																							
														 										<option value="36">36</option>
																							
														 										<option value="37">37</option>
																							
														 										<option value="38">38</option>
																							
														 										<option value="39">39</option>
																							
														 										<option value="40">40</option>
																							
														 										<option value="41">41</option>
																							
														 										<option value="42">42</option>
																							
														 										<option value="43">43</option>
																							
														 										<option value="44">44</option>
																							
														 										<option value="45">45</option>
																							
														 										<option value="46">46</option>
																							
														 										<option value="47">47</option>
																							
														 										<option value="48">48</option>
																							
														 										<option value="49">49</option>
																							
														 										<option value="50">50</option>
																							
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																				</div>
																				<div id="other" style="display:none">
																					<!-- <section class="col col-1"></section> -->
																					<section class="col col-md-4">
																						<label class="label">Transmitter</label>
																						<label class="select">
																							<select name="TransmitterSession">
																							
																								<option value="0">0</option>
																							
																								<option value="1">1</option>
																							
																								<option value="2">2</option>
																							
																								<option value="3">3</option>
																							
																								<option value="4">4</option>
																							
																								<option value="5">5</option>
																							
																								<option value="6">6</option>
																							
																								<option value="7">7</option>
																							
																								<option value="8">8</option>
																							
																								<option value="9">9</option>
																							
																								<option value="10">10</option>
																							
																								<option value="11">11</option>
																							
																								<option value="12">12</option>
																							
																								<option value="13">13</option>
																							
																								<option value="14">14</option>
																							
																								<option value="15">15</option>
																							
																								<option value="16">16</option>
																							
																								<option value="17">17</option>
																							
																								<option value="18">18</option>
																							
																								<option value="19">19</option>
																							
																								<option value="20">20</option>
																							
																								<option value="21">21</option>
																							
																								<option value="22">22</option>
																							
																								<option value="23">23</option>
																							
																								<option value="24">24</option>
																							
																								<option value="25">25</option>
																							
																								<option value="26">26</option>
																							
																								<option value="27">27</option>
																							
																								<option value="28">28</option>
																							
																								<option value="29">29</option>
																							
																								<option value="30">30</option>
																							
																								<option value="31">31</option>
																							
																								<option value="32">32</option>
																							
																								<option value="33">33</option>
																							
																								<option value="34">34</option>
																							
																								<option value="35">35</option>
																							
																								<option value="36">36</option>
																							
																								<option value="37">37</option>
																							
																								<option value="38">38</option>
																							
																								<option value="39">39</option>
																							
																								<option value="40">40</option>
																							
																								<option value="41">41</option>
																							
																								<option value="42">42</option>
																							
																								<option value="43">43</option>
																							
																								<option value="44">44</option>
																							
																								<option value="45">45</option>
																							
																								<option value="46">46</option>
																							
																								<option value="47">47</option>
																							
																								<option value="48">48</option>
																							
																								<option value="49">49</option>
																							
																								<option value="50">50</option>
																								
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																					<section class="col col-md-4">
																						<label class="label">Receiver</label>
																						<label class="select">
																							<select name="receiver_Session">
																							
																								<option value="0">0</option>
																							
																								<option value="1">1</option>
																							
																								<option value="2">2</option>
																							
																								<option value="3">3</option>
																							
																								<option value="4">4</option>
																							
																								<option value="5">5</option>
																							
																								<option value="6">6</option>
																							
																								<option value="7">7</option>
																							
																								<option value="8">8</option>
																							
																								<option value="9">9</option>
																							
																								<option value="10">10</option>
																							
																								<option value="11">11</option>
																							
																								<option value="12">12</option>
																							
																								<option value="13">13</option>
																							
																								<option value="14">14</option>
																							
																								<option value="15">15</option>
																							
																								<option value="16">16</option>
																							
																								<option value="17">17</option>
																							
																								<option value="18">18</option>
																							
																								<option value="19">19</option>
																							
																								<option value="20">20</option>
																							
																								<option value="21">21</option>
																							
																								<option value="22">22</option>
																							
																								<option value="23">23</option>
																							
																								<option value="24">24</option>
																							
																								<option value="25">25</option>
																							
																								<option value="26">26</option>
																							
																								<option value="27">27</option>
																							
																								<option value="28">28</option>
																							
																								<option value="29">29</option>
																							
																								<option value="30">30</option>
																							
																								<option value="31">31</option>
																							
																								<option value="32">32</option>
																							
																								<option value="33">33</option>
																							
																								<option value="34">34</option>
																							
																								<option value="35">35</option>
																							
																								<option value="36">36</option>
																							
																								<option value="37">37</option>
																							
																								<option value="38">38</option>
																							
																								<option value="39">39</option>
																							
																								<option value="40">40</option>
																							
																								<option value="41">41</option>
																							
																								<option value="42">42</option>
																							
																								<option value="43">43</option>
																							
																								<option value="44">44</option>
																							
																								<option value="45">45</option>
																							
																								<option value="46">46</option>
																							
																								<option value="47">47</option>
																							
																								<option value="48">48</option>
																							
																								<option value="49">49</option>
																							
																								<option value="50">50</option>
																							
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																					<section class="col col-md-4">
																						<label class="label">Trans Receiver</label>
																						<label class="select">
																							<select name="trans_receiver_session">
																							
																								<option value="0">0</option>
																							
																								<option value="1">1</option>
																							
																								<option value="2">2</option>
																							
																								<option value="3">3</option>
																							
																								<option value="4">4</option>
																							
																								<option value="5">5</option>
																							
																								<option value="6">6</option>
																							
																								<option value="7">7</option>
																							
																								<option value="8">8</option>
																							
																								<option value="9">9</option>
																							
																								<option value="10">10</option>
																							
																								<option value="11">11</option>
																							
																								<option value="12">12</option>
																							
																								<option value="13">13</option>
																							
																								<option value="14">14</option>
																							
																								<option value="15">15</option>
																							
																								<option value="16">16</option>
																							
																								<option value="17">17</option>
																							
																								<option value="18">18</option>
																							
																								<option value="19">19</option>
																							
																								<option value="20">20</option>
																							
																								<option value="21">21</option>
																							
																								<option value="22">22</option>
																							
																								<option value="23">23</option>
																							
																								<option value="24">24</option>
																							
																								<option value="25">25</option>
																							
																								<option value="26">26</option>
																							
																								<option value="27">27</option>
																							
																								<option value="28">28</option>
																							
																								<option value="29">29</option>
																							
																								<option value="30">30</option>
																							
																								<option value="31">31</option>
																							
																								<option value="32">32</option>
																							
																								<option value="33">33</option>
																							
																								<option value="34">34</option>
																							
																								<option value="35">35</option>
																							
																								<option value="36">36</option>
																							
																								<option value="37">37</option>
																							
																								<option value="38">38</option>
																							
																								<option value="39">39</option>
																							
																								<option value="40">40</option>
																							
																								<option value="41">41</option>
																							
																								<option value="42">42</option>
																							
																								<option value="43">43</option>
																							
																								<option value="44">44</option>
																							
																								<option value="45">45</option>
																							
																								<option value="46">46</option>
																							
																								<option value="47">47</option>
																							
																								<option value="48">48</option>
																							
																								<option value="49">49</option>
																							
																								<option value="50">50</option>
																							
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																				</div>
																																							
																				<div class="col-md-12">
																					<!-- <label class="label col col-1"></label> -->
																					
																							<label class="label col col-md-3">
																							  <input type="checkbox" class="checkbox style-0" name="checkDnd" id="CheckDnd" checked="checked">
																							  <span>DND Filter</span>
																							</label>
																					
																					
																							<label class="label col col-md-2">
																							  <input type="checkbox" class="checkbox style-0" name="active" id="active" checked="checked">
																							  <span>Active</span>
																							</label>
																					
																					
																					
													     									<label class="label col col-md-3">
																							  <input type="checkbox" class="checkbox style-0" name="checkdlr" id="checkdlr" checked="checked">
																							  <span>Forced DLR</span>
																							</label>
													     							
																					
																					
																					
																							<label class="label col col-md-4">
																							  <input type="checkbox" class="checkbox style-0" name="txtRollback" id="txtRollback">
																							  <span>Credit Rollback</span>
																							</label>
																					
																				</div>
																				<div class="col-md-12">&nbsp;</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fieldset smart-form">
																<div class="row form-horizontal1">
																	<div class="col-sm-12 col-md-12 col-md-9">
																		<div class="form-group">
																	
																			<div class="row1">
																				<label class="label col col-md-2">
																				  <input type="checkbox" class="checkbox style-0" name="txtCheckTime" id="txtCheckTime">
																				  <span>Check Time</span>
																				</label>
																				<div class="col col-md-10" id="txtTimeInterval" style="display: none;">
																					<div class="col col-md-5">
																						<label class="label">Start Time</label>
																						<div class="has-feedback">
																							<div class="col-md-6">
																								<i class="icon-append fa icon-app">HH</i>
																								<select class="form-control" name="txtfromhour" id="txtfromhour" style="padding-right: 20px;">
																		                    	
																            						<option value="00">00</option>
																            					
																            						<option value="01">01</option>
																            					
																            						<option value="02">02</option>
																            					
																            						<option value="03">03</option>
																            					
																            						<option value="04">04</option>
																            					
																            						<option value="05">05</option>
																            					
																            						<option value="06">06</option>
																            					
																            						<option value="07">07</option>
																            					
																            						<option value="08">08</option>
																            					
																            						<option value="09">09</option>
																            					
																             						<option value="10">10</option>
																           						
																             						<option value="11">11</option>
																           						
																             						<option value="12">12</option>
																           						
																             						<option value="13">13</option>
																           						
																             						<option value="14">14</option>
																           						
																             						<option value="15">15</option>
																           						
																             						<option value="16">16</option>
																           						
																             						<option value="17">17</option>
																           						
																             						<option value="18">18</option>
																           						
																             						<option value="19">19</option>
																           						
																             						<option value="20">20</option>
																           						
																             						<option value="21">21</option>
																           						
																             						<option value="22">22</option>
																           						
																             						<option value="23">23</option>
																           						
																		                    	</select>
																							</div>
																							
																							<div class="col-md-6">
																									<i class="icon-append fa icon-app">MM</i>
																			                    <select class="form-control" name="txtfromminute" id="txtfromminute" style="padding-right: 20px;">
																		                    	
																            						<option value="00">00</option>
																            					
																            						<option value="01">01</option>
																            					
																            						<option value="02">02</option>
																            					
																            						<option value="03">03</option>
																            					
																            						<option value="04">04</option>
																            					
																            						<option value="05">05</option>
																            					
																            						<option value="06">06</option>
																            					
																            						<option value="07">07</option>
																            					
																            						<option value="08">08</option>
																            					
																            						<option value="09">09</option>
																            					
																             						<option value="10">10</option>
																           						
																             						<option value="11">11</option>
																           						
																             						<option value="12">12</option>
																           						
																             						<option value="13">13</option>
																           						
																             						<option value="14">14</option>
																           						
																             						<option value="15">15</option>
																           						
																             						<option value="16">16</option>
																           						
																             						<option value="17">17</option>
																           						
																             						<option value="18">18</option>
																           						
																             						<option value="19">19</option>
																           						
																             						<option value="20">20</option>
																           						
																             						<option value="21">21</option>
																           						
																             						<option value="22">22</option>
																           						
																             						<option value="23">23</option>
																           						
																             						<option value="24">24</option>
																           						
																             						<option value="25">25</option>
																           						
																             						<option value="26">26</option>
																           						
																             						<option value="27">27</option>
																           						
																             						<option value="28">28</option>
																           						
																             						<option value="29">29</option>
																           						
																             						<option value="30">30</option>
																           						
																             						<option value="31">31</option>
																           						
																             						<option value="32">32</option>
																           						
																             						<option value="33">33</option>
																           						
																             						<option value="34">34</option>
																           						
																             						<option value="35">35</option>
																           						
																             						<option value="36">36</option>
																           						
																             						<option value="37">37</option>
																           						
																             						<option value="38">38</option>
																           						
																             						<option value="39">39</option>
																           						
																             						<option value="40">40</option>
																           						
																             						<option value="41">41</option>
																           						
																             						<option value="42">42</option>
																           						
																             						<option value="43">43</option>
																           						
																             						<option value="44">44</option>
																           						
																             						<option value="45">45</option>
																           						
																             						<option value="46">46</option>
																           						
																             						<option value="47">47</option>
																           						
																             						<option value="48">48</option>
																           						
																             						<option value="49">49</option>
																           						
																             						<option value="50">50</option>
																           						
																             						<option value="51">51</option>
																           						
																             						<option value="52">52</option>
																           						
																             						<option value="53">53</option>
																           						
																             						<option value="54">54</option>
																           						
																             						<option value="55">55</option>
																           						
																             						<option value="56">56</option>
																           						
																             						<option value="57">57</option>
																           						
																             						<option value="58">58</option>
																           						
																             						<option value="59">59</option>
																           						
																		                    	</select>
																			                </div>
													              						 </div>
																					</div>
																					<div class="col col-md-5">
																						<label class="label">End Time</label>
																						<div class="has-feedback">
																							<div class="col-md-6">
																								<i class="icon-append fa icon-app">HH</i>
																								<select class="form-control" name="txthour" id="txthour" style="padding-right: 20px;">
																		                    	
																            						<option value="00">00</option>
																            					
																            						<option value="01">01</option>
																            					
																            						<option value="02">02</option>
																            					
																            						<option value="03">03</option>
																            					
																            						<option value="04">04</option>
																            					
																            						<option value="05">05</option>
																            					
																            						<option value="06">06</option>
																            					
																            						<option value="07">07</option>
																            					
																            						<option value="08">08</option>
																            					
																            						<option value="09">09</option>
																            					
																             						<option value="10">10</option>
																           						
																             						<option value="11">11</option>
																           						
																             						<option value="12">12</option>
																           						
																             						<option value="13">13</option>
																           						
																             						<option value="14">14</option>
																           						
																             						<option value="15">15</option>
																           						
																             						<option value="16">16</option>
																           						
																             						<option value="17">17</option>
																           						
																             						<option value="18">18</option>
																           						
																             						<option value="19">19</option>
																           						
																             						<option value="20">20</option>
																           						
																             						<option value="21">21</option>
																           						
																             						<option value="22">22</option>
																           						
																             						<option value="23">23</option>
																           						
																		                    	</select>
																							</div>
																							<div class="col-md-6">
																									<i class="icon-append fa icon-app">MM</i>
																			                    <select class="form-control" name="txtminute" id="txtminute" style="padding-right: 20px;">
																		                    	
																            						<option value="00">00</option>
																            					
																            						<option value="01">01</option>
																            					
																            						<option value="02">02</option>
																            					
																            						<option value="03">03</option>
																            					
																            						<option value="04">04</option>
																            					
																            						<option value="05">05</option>
																            					
																            						<option value="06">06</option>
																            					
																            						<option value="07">07</option>
																            					
																            						<option value="08">08</option>
																            					
																            						<option value="09">09</option>
																            					
																             						<option value="10">10</option>
																           						
																             						<option value="11">11</option>
																           						
																             						<option value="12">12</option>
																           						
																             						<option value="13">13</option>
																           						
																             						<option value="14">14</option>
																           						
																             						<option value="15">15</option>
																           						
																             						<option value="16">16</option>
																           						
																             						<option value="17">17</option>
																           						
																             						<option value="18">18</option>
																           						
																             						<option value="19">19</option>
																           						
																             						<option value="20">20</option>
																           						
																             						<option value="21">21</option>
																           						
																             						<option value="22">22</option>
																           						
																             						<option value="23">23</option>
																           						
																             						<option value="24">24</option>
																           						
																             						<option value="25">25</option>
																           						
																             						<option value="26">26</option>
																           						
																             						<option value="27">27</option>
																           						
																             						<option value="28">28</option>
																           						
																             						<option value="29">29</option>
																           						
																             						<option value="30">30</option>
																           						
																             						<option value="31">31</option>
																           						
																             						<option value="32">32</option>
																           						
																             						<option value="33">33</option>
																           						
																             						<option value="34">34</option>
																           						
																             						<option value="35">35</option>
																           						
																             						<option value="36">36</option>
																           						
																             						<option value="37">37</option>
																           						
																             						<option value="38">38</option>
																           						
																             						<option value="39">39</option>
																           						
																             						<option value="40">40</option>
																           						
																             						<option value="41">41</option>
																           						
																             						<option value="42">42</option>
																           						
																             						<option value="43">43</option>
																           						
																             						<option value="44">44</option>
																           						
																             						<option value="45">45</option>
																           						
																             						<option value="46">46</option>
																           						
																             						<option value="47">47</option>
																           						
																             						<option value="48">48</option>
																           						
																             						<option value="49">49</option>
																           						
																             						<option value="50">50</option>
																           						
																             						<option value="51">51</option>
																           						
																             						<option value="52">52</option>
																           						
																             						<option value="53">53</option>
																           						
																             						<option value="54">54</option>
																           						
																             						<option value="55">55</option>
																           						
																             						<option value="56">56</option>
																           						
																             						<option value="57">57</option>
																           						
																             						<option value="58">58</option>
																           						
																             						<option value="59">59</option>
																           						
																		                    	</select>
																			                </div>
													              						 </div>
																					</div>
																				</div>
																				</div>
																	
																			<div class="col-md-12">&nbsp;</div>
																		</div>
																	</div>
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
																<!-- <footer>&nbsp;</footer> -->
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
																			<label class="label">Name<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-user"></i>
																				<input type="text" name="name" value="" id="name" placeholder="Name" maxlength="49">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Company Name</label>
																			<label class="input">
																				<i class="icon-append fa fa-briefcase"></i>
																				<input type="text" name="companyName" value="" id="companyName" placeholder="Company Name" maxlength="49">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Email ID<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-envelope"></i>
																				<input type="text" name="email" value="" id="email" placeholder="User Email ID" maxlength="49">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-6">
																			<label class="label">Web</label>
																			<label class="input">
																				<i class="icon-append fa fa-globe"></i>
																				<input type="text" name="web" value="" id="web" placeholder="Web" maxlength="49">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-6">
																			<label class="label">Mobile Number<font color="red">*</font></label>
																			<div class="input">
																				<span class="icon-prepend">+91</span>
																				<input type="text" class="form-control" name="mobileNo" value="" id="mobileNo">
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
																								<input type="text" name="code" value="" id="code" data-mask="999" aria-required="true" aria-invalid="true" placeholder="Std Code" maxlength="6">
																							</label>
																						</div>
																					</div>
																					<div class="col-md-1">&nbsp;</div>
																					<div class="col-md-8">
																						<label class="input">
																							<i class="icon-append fa fa-phone"></i>
																							<input type="text" name="otherNo" value="" id="otherNo" placeholder="Phone No" maxlength="9">
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
																		<div class="col-md-12 text-right">
																	<div class="col-lg-12">
															<a data-toggle="tab" href="#otherinfo" class="btn btn-danger btn-sm" onclick="getTab('otherinfo1');" aria-expanded="false">&nbsp;&nbsp;Next&nbsp;&nbsp;</a>
									              			
														</div>
																</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="otherinfo">
												<div class="tabbable tabs-below">
													<div class="tab-content padding-10">
														<div class="tab-pane active" id="AA12">
															<fieldset>
																<div class="row">
																	<div class="smart-form">
                                                                     <div class="col-md-12"><header>Content Management</header></div>	
																	<div class="col-md-11">&nbsp;</div>
															
																	<div class="col-sm-12 col-md-12 col-lg-6 smart-form">
																		<div class="row1">
																			<label class="label col col-md-5">
																				<input type="checkbox" class="checkbox style-0" name="globalContFilter" id="globalContFilter" checked="checked">
																			  	<span>Global Content Filter</span>
																			  	<input type="hidden" name="globalhiddenContFilter" value="global" id="globalhiddenContFilter">
																			</label>
																			<div class="col col-md-7" id="ContentBlockDegree">
																				<label class="select">
																					<select name="ContentBlockDegree">
																					
																						<option value="1">1</option>
																					
																						<option value="2">2</option>
																					
																						<option value="3" selected="selected">3</option>
																					
																						<option value="4">4</option>
																					
																						<option value="5">5</option>
																					
																						<option value="6">6</option>
																					
																						<option value="7">7</option>
																					
																						<option value="8">8</option>
																					
																						<option value="9">9</option>
																					
																						<option value="10">10</option>
																					
																						<option value="11">11</option>
																					
																						<option value="12">12</option>
																					
																						<option value="13">13</option>
																					
																						<option value="14">14</option>
																					
																						<option value="15">15</option>
																					
																						<option value="16">16</option>
																					
																						<option value="17">17</option>
																					
																						<option value="18">18</option>
																					
																						<option value="19">19</option>
																					
																						<option value="20">20</option>
																					
																						<option value="21">21</option>
																					
																						<option value="22">22</option>
																					
																						<option value="23">23</option>
																					
																						<option value="24">24</option>
																					
																						<option value="25">25</option>
																					
																						<option value="26">26</option>
																					
																						<option value="27">27</option>
																					
																						<option value="28">28</option>
																					
																						<option value="29">29</option>
																					
																						<option value="30">30</option>
																					
																						<option value="31">31</option>
																					
																						<option value="32">32</option>
																					
																						<option value="33">33</option>
																					
																						<option value="34">34</option>
																					
																						<option value="35">35</option>
																					
																						<option value="36">36</option>
																					
																						<option value="37">37</option>
																					
																						<option value="38">38</option>
																					
																						<option value="39">39</option>
																					
																						<option value="40">40</option>
																					
																						<option value="41">41</option>
																					
																						<option value="42">42</option>
																					
																						<option value="43">43</option>
																					
																						<option value="44">44</option>
																					
																						<option value="45">45</option>
																					
																						<option value="46">46</option>
																					
																						<option value="47">47</option>
																					
																						<option value="48">48</option>
																					
																						<option value="49">49</option>
																					
																						<option value="50">50</option>
																					
																					</select> 
																					<i></i>
																				 </label>
																				 <label class="label">Content BlockDegree</label>
																			</div>
																		</div>
																	</div>
															
															
<style type="text/css">
#BlockedContentCate{
    display:none;
}
</style>
																		<div class="col-sm-12 col-md-12 col-lg-6">
																			<div class="row">
																				<div class="col-md-5">
																					<div class="checkbox">
																						<label>
																						  <input type="checkbox" class="checkbox style-0" name="ContentFilter" id="ContentFilter">
																						  <span>Content Filter</span>
																						</label>
																					</div>
																				</div>
																				<section class="col-md-7" id="BlockedContentCate">
																						<select name="BlockedContentCate" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" tabindex="-1" aria-hidden="true">
																						<option value="" disabled="">Select Category</option>
																					
																						<option value="1">Property</option>
																					
																						<option value="3">Relegious</option>
																					
																						<option value="4">Spam</option>
																					
																						<option value="5">Lottery</option>
																					
																						<option value="7">Porn</option>
																					
																						<option value="8">Uncategorised </option>
																					
																						<option value="12">Jyotish</option>
																					
																						<option value="13">Election</option>
																					
																						<option value="14">Terrorism</option>
																					
																						<option value="39">Violance</option>
																					
																						<option value="42">Customized</option>
																					
																						<option value="44">STOCK</option>
																					
																						<option value="45">SPA</option>
																					
																						<option value="46">PORT</option>
																					
																						<option value="47">White-List-DCS</option>
																					
																					</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
																					<i></i>
																				<label class="label">Blocked Content Category1</label>
																			</section>
																		</div>
																	</div>
															
  																	
																</div>
																<div class="row">
																	<div class="col-sm-12 col-md-6 col-lg-6">
																		<div class="row1">
																			<div class="col-md-5">
																				<div class="checkbox1">
																					<label>
																					  <span>Blacklist Filter</span>
																					</label>
																				</div>
																			</div>
																	
																			<section class="col-md-7">
																				<select name="blacklistNumberCategory" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" tabindex="-1" aria-hidden="true">
																				
																					<option value="0">GLOBAL</option>
																				
																					<option value="3">Gray Listing</option>
																				
																					<option value="4">VVIPs</option>
																				
																					<option value="5">Goverment</option>
																				
																					<option value="6">Service Providers</option>
																				
																					<option value="7">clinic</option>
																				
																					<option value="8">Cutomzed</option>
																				
																					<option value="10">Nfilter</option>
																				
																					<option value="11">Jainie</option>
																				
																				</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
																			</section>
																		
																		</div>
																	</div>
																	<div class="col-sm-12 col-md-6 col-lg-6">
																		<div class="row1">
																			<div class="col-md-5">
																				<div class="checkbox1">
																					<label>
																					  <span>Whitelist Filter</span>
																					</label>
																				</div>
																			</div>
																	
																			<section class="col-md-7">
																				<select name="whitelistNumberCategory" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" tabindex="-1" aria-hidden="true">
																				
																					<option value="0">GLOBAL</option>
																				
																					<option value="1">GSM</option>
																				
																					<option value="2">mst</option>
																				
																				</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
																			</section>
																		
																		</div>
																	</div>
																</div>
															</fieldset>
															<fieldset>
																<div class="smart-form">
																	<div class="row form-horizontal1">
																		<div class="col-sm-12 col-md-12 col-lg-6">
																			<div class="well1">
																				<header>Sender</header>
																				<div class="row1">
																					<div class="col-md-11">&nbsp;</div>
																			
																					<label class="label col col-md-5">
																						<input type="radio" class="radiobox style-0" name="Sender" id="fxdSender" checked="checked">
																						<span>Fixed Sender</span> 
																						<input type="hidden" name="dynamicAddress" id="dynamicSourceAddress" value="senderIdOverWrite" maxlength="6">
																					</label>
																					
																					<div class="col col-7 col-md-7" id="fixedSender">
																						<div class="input">
																							<i class="icon-append fa fa-info-circle"></i>
																							<input placeholder="Fixed Sender" type="text" name="senderIdToOverWrite" value="" maxlength="6">
																						</div>
																					</div>
																					
																					<label class="label col col-12 col-md-12">
																						<input type="radio" class="radiobox style-0" name="Sender" id="dynamicSender">
																						<span>Dynamic</span> 
																					</label>
																					<label class="label col col-12 col-md-12">
																						<input type="radio" class="radiobox style-0" name="Sender" id="approvedSender" value="">
																						<span>Approved</span> 
																					</label>
																			
																					<label class="label col col-5 col-md-5">
																					
																							<input type="checkbox" class="checkbox style-0" name="specialChaSenderId">
																							<span>Special Char In Sender ID</span>
																					
																					</label>
																					<div class="col-md-7">&nbsp;&nbsp;</div>
																					<div class="col-md-7">&nbsp;&nbsp;</div>
																					
																				</div>
																			</div>
																		</div>
																		<div class="col-sm-12 col-md-12 col-lg-6">
																			<div class="well1">
																				<header>Validation</header>
																				<div class="form-group1">
																					<div>
																						<div class="col-md-11">&nbsp;</div>
																				
													 									<div class="row" style="margin: 0 0;">
																							<label class="label col col-md-5">
																								<input type="checkbox" class="checkbox style-0" name="senderIdAlphaAllow" id="senderIdAlphaAllow" disabled="disabled">
																							  	<span>Allow Alpha Sender</span>
																							</label>
																							<section class="col-md-7 col" id="senderIdAlphaAlength">
																								<label class="select">
																									<select name="senderIdAlphaAlength">
																									
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
																						<div class="row" style="margin: 0 0;">
																							<label class="label col col-md-5">
																							  <input type="checkbox" class="checkbox style-0" name="senderIdAlNumAllow" id="senderIdAlNumAllow" disabled="disabled">
																							  <span>Allow Numeric Sender</span>
																							</label>
																							<section class="col-md-7 col" id="senderIdANumLength">
																								<label class="select">
																									<select name="senderIdANumLength">
																									
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
																						<div class="row" style="margin: 0 0;">
																							<label class=" label col col-md-5">
																							  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaNumAllow" id="senderIdAlphaNumAllow" disabled="disabled">
																							  <span>Allow AlphaNum Sender</span>
																							</label>
																							<section class="col-md-7 col" id="senderIdAlphaNumLength">
																								<label class="select">
																									<select name="senderIdAlphaNumLength">
																									
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
																						<div class="row" style="margin: 0 0;">
																							<label class=" label col col-md-5">
																							  <input type="checkbox" class="checkbox style-0" name="checkDefaultsenderId" id="checkDefaultsenderId" disabled="disabled">
																							  <span>Default Sender</span>
																							</label>
																							<section class="col-md-7 col" id="defaultSenderIdTab">
																								<div class="input">
																										<i class="icon-append fa fa-info-circle"></i>
																										<input placeholder="Fixed Sender" type="text" name="defaultSenderId" value="" maxlength="6">
																									</div>
																									<div style="color: #FF0000;"></div>
																							</section>
																						</div>																						
																				
																						
																					<div class="col-md-7">&nbsp;&nbsp;</div>	
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</fieldset>
															<div class="smart-form">
																<div class="fieldset">
																	<div class="row">
																	<div class="col-md-12"><header>Error Code</header>	</div>
																	<div class="row">&nbsp;</div>
																		<section class="col col-md-4">
																			<label class="label">DND ErrorCode<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-warning"></i>
																				<input type="text" name="dndErrorCode" value="900" id="dndErrorCode" placeholder="DND ErrorCode" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Day Balance Error Code<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-dollar"></i>
																				<input type="text" name="dayBalErrorCode" value="88" id="dayBalErrorCode" placeholder="Day Balance Error Code" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Hour Balance Error Code<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-dollar"></i>
																				<input type="text" name="hourBalErrorCode" value="88" id="hourBalErrorCode" placeholder="Hour Balance Error Code" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-4">
																			<label class="label">No Balance Error Code<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-dollar"></i>
																				<input type="text" name="nobalErrorCode" value="1035" id="nobalErrorCode" placeholder="No Balance Error Code" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Blocked Content Error Code<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-filter"></i>
																				<input type="text" name="blockContentErrorCode" value="102" id="blockContentErrorCode" placeholder="Blocked Content Error Code" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																		<section class="col col-md-4">
																			<label class="label">Blocked Sender ID Error Code<font color="red">*</font></label>
																			<label class="input">
																				<i class="icon-append fa fa-info-circle"></i>
																				<input type="text" name="blocSenderIderrorCode" value="10" id="blocSenderIderrorCode" placeholder="Blocked Sender Id Error Code" maxlength="10">
																				<div style="color: #FF0000;"></div>
																			</label>
																		</section>
																	</div>
																</div>
																<footer>
																	<button type="submit" name="submit" class="btn btn-danger">Cancel</button>
																	
																	<button type="submit" name="submit" class="btn btn-primary" id="createuser">Create</button>
																	<button type="button" class="btn btn-primary" id="processAdd" style="display: none;">
											                                                <i class="fa fa-spinner fa-spin"></i> Processing</button>
																</footer>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</form>	  </div>
    


	  </div>
      </div>
   
	
	
	</section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 
  
 
</div>

<?php

include 'footer.php';
?>