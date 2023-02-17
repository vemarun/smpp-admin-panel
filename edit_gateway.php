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
        <li class="active"> Add Gateway</li>
      </ol>
    </section>
    
    <!-- Main content -->
    <section class="content container-fluid">
	
      <div class="row">
	 
	  <div class="col-md-12">

								
	 <header role="heading">

<ul class="nav nav-tabs pull-left in">
										<li class="active" id="accountinfo_tab1">
											<a data-toggle="tab" href="#accountinfo_tab" aria-expanded="true"> <i class="fa fa-lg fa-user"></i> <span class="hidden-mobile hidden-tablet"> Client Account </span> </a>
										</li>
										<li id="other_tab1" class="">
											<a data-toggle="tab" href="#other_tab" aria-expanded="false"> <i class="fa fa-lg fa-indent"></i> <span class="hidden-mobile hidden-tablet"> Other </span> </a>
										</li>
								
										<li id="routing_tab1" class="">
											<a data-toggle="tab" href="#routing_tab" aria-expanded="false"> <i class="fa fa-lg fa-link"></i> <span class="hidden-mobile hidden-tablet"> Series Routing </span> </a>
										</li>
								
									</ul>
								
								</header>							
								
								</div>
								
        <div class="col-md-12">
		
          <div class="chart-box">

              <form action="" method="post" id="contact-form" novalidate="novalidate" onsubmit="verify();">

                 <div class="tab-content">
									<div class="tab-pane active" id="accountinfo_tab">
										<div class="tabbable tabs-below">
											<div class="tab-content padding-10">
												<div class="tab-pane active" id="AA">
													<form action="" method="post" id="contact-form" class="smart-form1" novalidate="novalidate" onsubmit="return getVerify();">
														<input type="hidden" id="route" name="route" value="">
														<div class="fieldset smart-form">
															<div class="row">
																<section class="col col-md-3">
																	<label class="label">OutBound Connection</label>
																	<label class="input">
																		<i class="icon-append fa fa-info-circle"></i>
																		<input type="text" name="connectionName" id="connectionName" value="" disabled="disabled" placeholder="OutBound Connection" maxlength="25">
																	</label>
																	<input type="hidden" name="systemId" value="" id="systemId">
																	<input type="hidden" name="txtAction" value="AccountTab">
																</section>
															
																<section class="col col-md-3">
																	<label class="label">User Name</label>
																	<label class="input">
																		<i class="icon-append fa fa-user"></i>
																		<input type="text" name="txtuserIdtxt" value="" id="user" placeholder="User Name" maxlength="95">
																	</label>
																	<input type="hidden" value="UserIdField" name="field" id="UserField"><input type="hidden" value="" name="user" id="UserField">
																</section>
															
																<section class="col col-md-3">
																	<label class="label">Password</label>
																	<label class="input">
																		<i class="icon-append fa fa-cogs"></i>
																		<input type="text" name="txtpasswordedit" value="" placeholder="Password" maxlength="95">
																	</label>
																</section>
															
																<section class="col col-md-3">
																	<label class="label">Host</label>
																	<label class="input">
																		<i class="icon-append fa fa-rss"></i>
																		<input type="text" name="host" value="10.10.2.29" placeholder="Host" maxlength="90">
																	</label>
																</section>
															
															</div>
															<div class="row">
															
																<section class="col col-md-3">
																	<label class="label">Port</label>
																	<label class="input">
																		<i class="icon-append fa fa-sort-numeric-asc"></i>
																		<input type="text" name="port" value="4242" placeholder="Port" maxlength="9">
																	</label>
																</section>
															
																<section class="col col-md-3">
																	<label class="label">Max Throughput</label>
																	<label class="input">
																		<i class="icon-append fa fa-windows"></i>
																		<input type="text" name="windowSize" value="500" placeholder="Max Throughput" maxlength="5">
																	</label>
																</section>
															
																<section class="col col-md-3">
																	<label class="label">Max Queue Buffer</label>
																	<label class="input">
																		<i class="icon-append fa fa-lock"></i>
																		<input type="text" name="maxQueueCount" value="800" placeholder="Max Queue Count" maxlength="5">
																	</label>
																</section>
															
																<section class="col col-md-3">
																	<label class="label">System Type</label>
																	<label class="input">
																		<i class="icon-append fa fa-cogs"></i>
																		<input type="text" name="systemType" value="" placeholder="System Type" maxlength="4">
																	</label>
																</section>
															
															</div>
														</div>
														<div class="fieldset smart-form1">
															<div class="row form-horizontal">
																<div class="col-sm-12 col-md-12 col-lg-6">
																	<div class="row">
																
																	<section class="col col-6 col-md-6 smart-form">
																		<label class="label">Service Type</label>
																		<label class="input">
																			<i class="icon-append fa fa-cog"></i>
																			<input type="text" name="serviceType" value="cmt" placeholder="Service Type" maxlength="10">
																		</label>
																	</section>
																
																	<section class="col col-6 col-md-6">
																		<label class="label1">Alternate Gateway</label>
																		
																	
																			<select name="route1" multiple="" class="form-control multiple" style="width: 100%; display: none;" data-placeholder="None" onchange="getRouteName();" id="txtselectroutename">
																			
																		   		<option value="HB-IDEA" selected="selected">HB-IDEA</option>
																		   
																		      	<option value="BSNL-OTP">BSNL-OTP</option>
																		     
																		      	<option value="HB-BSNLOTP">HB-BSNLOTP</option>
																		     
																			</select>
                                       <div class="chosen-container chosen-container-multi" style="width: 244px;" title="" id="txtselectroutename_chosen">
<ul class="chosen-choices">
<li class="search-choice"><span>HB-IDEA</span><a class="search-choice-close" data-option-array-index="0"></a></li>
<li class="search-field"><input type="text" value="None" class="" autocomplete="off" style="width: 25px;"></li>
</ul>
<div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
																		</section>
																	
																		<!-- <div class="form-group"> -->
																			<div class="col-md-12 smart-form">
																			
																				<div class="col-md-3">
																					<div class="checkbox" style="padding-left: 0px;">
																						<label>
																						  <input type="checkbox" class="checkbox style-0" name="AnyOutBound">
																						  <span>AnyOutBound</span>
																						</label>
																					</div>
																				</div>
																			
																				<div class="col-md-3">
																					<div class="checkbox" style="padding-left: 0px;">
																						<label>
																						  <input type="checkbox" class="checkbox style-0" name="dlr">
																						  <span>Forced DLR</span>
																						</label>
																					</div>
																				</div>
																			
																				<div class="col-md-3">
																					<div class="checkbox" style="padding-left: 0px;">
																						<label>
																						  <input type="checkbox" class="checkbox style-0" name="checkDnd">
																						  <span>DND Filter</span>
																						</label>
																					</div>
																				</div>
																			
																				<div class="col-md-3">
																					<div class="checkbox" style="padding-left: 0px;">
																						<label>
																						  <input type="checkbox" class="checkbox style-0" name="active" checked="">
																						  <span>Active</span>
																						</label>
																					</div>
																				</div>
																			
																			<div class="col-md-2">
																				<div class="checkbox" style="padding-left: 0px;">
																			
																					<label>
																					  <input type="checkbox" class="checkbox style-0" name="log">
																					  <span>Log</span>
																					</label>
																			
																				</div>
																			</div>
																			<div class="col-md-2">
																				<div class="checkbox" style="padding-left: 0px;">
																			
																					<label>
																					  <input type="checkbox" class="checkbox style-0" name="stopSend">
																					  <span>Stop</span>
																					</label>
																			
																				</div>
																			</div>
																			<div class="col-md-3">
																				<div class="checkbox" style="padding-left: 0px;">
																			
																					<label>
																					  <input type="checkbox" class="checkbox style-0" name="fetchUserWise">
																					  <span>On User</span>
																					</label>
																			
																				</div>
																			</div>
																			<div class="col-md-5">
																				<div class="checkbox" style="padding-left: 0px;">
																			
																					<label>
																					  <input type="checkbox" class="checkbox style-0" name="dlrAlternate" checked="" id="dlrAlternate">
																					  <span>DlrFailedAlternateRoute</span>
																					</label>
																			
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div class="checkbox" style="padding-left: 0px;">
																			
																					<label>
																					  <input type="checkbox" class="checkbox style-0" name="enbchangecode">
																					  <span>Replace Error Code</span>
																					</label>
																			
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div class="checkbox" style="padding-left: 0px;">
																			
																					<label>
																					  <input type="checkbox" class="checkbox style-0" name="enbretrylongsms" checked="">
																					  <span>Retry Long Sms</span>
																					</label>
																			
																				</div>
																			</div>
																			</div>
																		</div>
																</div>
																<div class="col-sm-12 col-md-12 col-lg-6 smart-form">
																	<div class="well1">
																		<div class="form-group">
																			<header>Session</header>
																		</div>
																		<div class="form-group">&nbsp;</div>
																		<div class="form-group">
																		
																			<section class="col col-md-4">
																				<label class="label">Transmitter</label>
																				<label class="select">
																					<select name="TransmitterSession">
																					
																				     <option value="0" selected="selected">0</option>
																				     
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
																					
																				     <option value="0" selected="selected">0</option>
																				     
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
																				     
																				     <option value="10" selected="selected">10</option>
																				     
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
																		
																		</div><div style="color: #FF0000;"></div>
																	</div>
																</div>
															</div>
														</div>
														<div class="fieldset smart-form">
															<div class="row form-horizontal1">
																<div class="col-sm-12 col-md-12 col-lg-6">
																	<div class="row1">
																		<header>Sender</header>
																		<div class="form-group1">
																			<div class="">
																				<div class="col-md-11">&nbsp;</div>
																		
<style type="text/css">
#fixedSender{
    display:none;
}
</style>
																				<label class="label col col-md-5">
																					<input type="radio" class="radiobox style-0" name="Sender" id="fxdSender">
																					<span>Fixed Sender</span> 
																					<input type="hidden" name="dynamicAddress" id="dynamicSourceAddress" value="dynamice">
																				</label>
																				<div class="col-md-7 col" id="fixedSender">
																					<div class="input">
																						<i class="icon-append fa fa-info-circle"></i>
																						<input placeholder="Fixed Sender" type="text" name="senderIdToOverWrite" value="0" maxlength="6">
																					</div>
																				</div>
																				<label class="label col col-12 col-md-12">
																					<input type="radio" class="radiobox style-0" name="Sender" id="dynamicSender" checked="checked">
																					<span>Dynamic</span> 
																				</label>
																				<label class="label col col-12 col-md-12">
																					<input type="radio" class="radiobox style-0" name="Sender" id="approvedSender" value="">
																					<span>Approved</span> 
																				</label>
																		
																				<label class="label col col-md-5">
																				  <input type="checkbox" class="checkbox style-0" name="checkBlockSenderId" id="checkBlockSenderId" checked="">
																				  <span>Check Blocked Sender ID</span>
																				</label>
																		
																				<label class="label col col-md-5">
																				  <input type="checkbox" class="checkbox style-0" name="specialChaSenderId">
																				  <span>Special Char In Sender ID</span>
																				</label>
																		
<style type="text/css">
	#senderPrefix{
    	display:none;
	}
</style>
																				<div class="col-md-11">
																					<label class="label col col-md-5">
																						<input type="checkbox" class="checkbox style-0" name="putSenderPrefix" id="putSenderPrefix">
																						<span>Sender Prefix</span> 
																					</label>
																					<div class="col-md-7 col" id="senderPrefix">
																						<div class="input">
																							<i class="icon-append fa fa-info-circle"></i>
																							<input placeholder="Sender Prefix" type="text" name="senderPrefix" value="0" maxlength="5">
																							<label>Sender Prefix</label>
																						</div>
																						<input type="hidden" name="checkputSenderPrefix" id="checkputSenderPrefix" value="none">
																					</div>
																				</div>
																		
																		
<style type="text/css">
	#validityperiodtab{
    	display:none;
	}
</style>
																				<div class="col-md-11">
																					<label class="label col col-md-5">
																						<input type="checkbox" class="checkbox style-0" name="enbexpiry" id="enbexpiry">
																						<span>Expiry Message</span> 
																					</label>
																					<div class="col-md-7 col" id="validityperiodtab">
																						<div class="has-feedback">
																							<div class="col-md-4">
																								<i class="icon-append fa">HH</i>
																								<select class="form-control" name="expfromhour" id="expfromhour" style="padding-right: 20px;">
																		                    	
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
																							
																							<div class="col-md-4">
																									<i class="icon-append fa">MM</i>
																			                    <select class="form-control" name="expfromminute" id="expfromminute" style="padding-right: 20px;">
																		                    	
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
																			                <div class="col-md-4">
																									<i class="icon-append fa">SS</i>
																			                    <select class="form-control" name="expfromsec" id="expfromsec" style="padding-right: 20px;">
																		                    	
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
																			                <span>Expiry Validity Period </span>
													              						 </div>
																					</div>
																				</div>
																		
																				<div class="col-md-7">&nbsp;&nbsp;</div>
																				<div class="col-md-7">&nbsp;&nbsp;</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-lg-6">
																	<div class="row">
																		<header>Validation</header></div>
																		<div class="form-group1">
																			<div class="">
																				<div class="col-md-11">&nbsp;</div>
																		
																					<div class="row">
																						<label class="label col col-md-6">
																						  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaAllow" id="senderIdAlphaAllow" checked="">
																						  <span>Allow Alpha Sender</span>
																						</label>
																						<section class="col-md-6 col" id="senderIdAlphaAlength">
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
																								<span>SenderId Alpha Length </span>
																							 </label>
																						</section>
																					</div>
																					<div class="row">
																						<label class="label col col-md-6">
																						  <input type="checkbox" class="checkbox style-0" name="senderIdAlNumAllow" id="senderIdAlNumAllow">
																						  <span>Allow Numeric Sender</span>
																						</label>
																						<section class="col-md-6 col" id="senderIdANumLength" style="display:none;">
																							<label class="select">
																								<select name="senderIdANumLength">
																								
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
																								
																								</select> 
																								<i></i>
																								<span>SenderId Numeric Length </span>
																							 </label>
																						</section>
																					</div>
																					<div class="row">
																						<label class="label col col-md-6">
																						  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaNumAllow" id="senderIdAlphaNumAllow">
																						  <span>Allow AlphaNumeric Sender</span>
																						</label>
																						<section class="col-md-6 col" id="senderIdAlphaNumLength" style="display:none;">
																							<label class="select">
																								<select name="senderIdAlphaNumLength">
																								
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
																								
																								</select> 
																								<i></i>
																								<span>SenderId AlphaNumeric Length </span>
																							 </label>
																						</section>
																					</div>
																					<div class="row">
																						<label class="label col col-md-6">
																						  <input type="checkbox" class="checkbox style-0" name="checkDefaultsenderId" id="checkDefaultsenderId">
																						  <span>Default Sender</span>
																						</label>
																						<section class="col-md-6 col" id="defaultSenderIdTab" style="display:none;">
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
																	<!-- </div> -->
																	<div class="col-sm-12 col-md-12 col-md-3">&nbsp;</div>
																</div>
															</div>
														</div>
														<div class="fieldset smart-form">
																<div class="row form-horizontal1">
																	<div class="col-sm-12 col-md-12 col-md-9">
																		<div class="form-group">
																	
																			<div class="row1">
																				<label class="label col col-2">
																					<input type="checkbox" class="checkbox style-0" name="txtCheckTime" id="txtCheckTime">
																					<span>Check Time</span>
																				</label>
																				<div class="col col-10" id="txtTimeInterval" style="display: none;">
																					<div class="col col-md-5">
																						<label class="label">Start Time</label>
																						<div class="has-feedback">
																							<div class="col-md-4">
																								<i class="icon-append fa">HH</i>
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
																							
																							<div class="col-md-4">
																									<i class="icon-append fa">MM</i>
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
																							<div class="col-md-4">
																								<i class="icon-append fa">HH</i>
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
																							<div class="col-md-4">
																									<i class="icon-append fa">MM</i>
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
																	<div class="col-sm-12 col-md-12 col-md-3">&nbsp;</div>
																</div>
															</div>

                                                          <div class="fieldset smart-form">
                                                           <div class="row">
														<div class="col-sm-12 col-md-12 col-md-12">
															
															<footer>
																<button type="submit" name="submit" class="btn btn-danger">Cancel</button>
																<button type="submit" name="submit" class="btn btn-primary">Update</button>
															</footer>
														</div>
														</div>
														</div>
														
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="other_tab">
										<div class="tabbable tabs-below">
											<div class="tab-content padding-10">
												<div class="tab-pane active" id="AA12">
													<form action="" method="post" id="contact-form1" class="smart-form1" novalidate="novalidate">
														<div class="fieldset">
															<div class="row">
																<div class="smart-form">
																	<div class="col-md-12"><header>Content Management</header></div>
																</div>
																<div class="col-md-11">&nbsp;</div>
																<input type="hidden" name="systemId" value="">
																<input type="hidden" name="txtAction" value="OtherTab">
																
<style type="text/css">
#BlockedContentCate, #ContentBlockDegree{
    display:visible;
}
</style>
																<div class="col-sm-12 col-md-12 col-lg-6">
																	<div class="row">
																		<input type="hidden" name="checkContentFilter" id="checkContentFilter" value="noncontent">
																		<div class="col-md-4">
																			<div class="checkbox">
																				<label>
																				  <input type="checkbox" class="checkbox style-0" name="ContentFilter" id="ContentFilter" checked="">
																				  <span>Content Filter</span>
																				</label>
																			</div>
																		</div>
																		<section class="col-md-8" id="BlockedContentCate">
																			<select name="BlockedContentCate" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" tabindex="-1" aria-hidden="true">
																				<option value="-1">Select Category</option>
																				
																		     <option value="1">Property</option>
																		     
																		     <option value="3">Relegious</option>
																		     
																		     <option value="0">Global</option>
																		     
																		     <option value="4" selected="selected">Spam</option>
																		     
																		     <option value="5" selected="selected">Lottery</option>
																		     
																		     <option value="7" selected="selected">Porn</option>
																		     
																		     <option value="8">Uncategorised </option>
																		     
																		     <option value="12">Jyotish</option>
																		     
																		     <option value="13" selected="selected">Election</option>
																		     
																		     <option value="14" selected="selected">Terrorism</option>
																		     
																		     <option value="39" selected="selected">Violance</option>
																		     
																		     <option value="42">Customized</option>
																		     
																		     <option value="44">STOCK</option>
																		     
																		     <option value="45">SPA</option>
																		     
																		     <option value="46" selected="selected">PORT</option>
																		     
																		      <option value="47">White-List-DCS</option>
																		      
																			</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><span class="select2-selection__clear">×</span><li class="select2-selection__choice" title="Spam"><span class="select2-selection__choice__remove" role="presentation">×</span>Spam</li><li class="select2-selection__choice" title="Lottery"><span class="select2-selection__choice__remove" role="presentation">×</span>Lottery</li><li class="select2-selection__choice" title="Porn"><span class="select2-selection__choice__remove" role="presentation">×</span>Porn</li><li class="select2-selection__choice" title="Election"><span class="select2-selection__choice__remove" role="presentation">×</span>Election</li><li class="select2-selection__choice" title="Terrorism"><span class="select2-selection__choice__remove" role="presentation">×</span>Terrorism</li><li class="select2-selection__choice" title="Violance"><span class="select2-selection__choice__remove" role="presentation">×</span>Violance</li><li class="select2-selection__choice" title="PORT"><span class="select2-selection__choice__remove" role="presentation">×</span>PORT</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																			 <i></i>
																			 <label class="label1 smart-form">Blocked Content Category</label> 
																		</section>
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-lg-6 smart-form">
																	<div class="row">
																		<section class="col col-md-12" id="ContentBlockDegree">
																			<label class="select">
																				<select name="ContentBlockDegree">
																					
																			     <option value="0">0</option>
																			     
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
																		</section>
																	</div>
																</div>
																				
																
																</div>
																<div class="row">
																	<div class="col-sm-12 col-md-12 col-lg-6">
																		<div class="row">
																			<div class="col-md-4">
																				<div class="checkbox1">
																					<label>
																					  <span>Blacklist Filter</span>
																					</label>
																				</div>
																			</div>
																		
																			<section class="col-md-8">
																				<select name="blacklistNumberCategory" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" tabindex="-1" aria-hidden="true">
																				
																					<option value="0" selected="selected">GLOBAL</option>
																				
															      						<option value="3">Gray Listing</option>
																			      
															      						<option value="4">VVIPs</option>
																			      
															      						<option value="5">Goverment</option>
																			      
															      						<option value="6">Service Providers</option>
																			      
															      						<option value="7">clinic</option>
																			      
															      						<option value="8">Cutomzed</option>
																			      
															      						<option value="10">Nfilter</option>
																			      
															      						<option value="11">Jainie</option>
																			      
																				</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><span class="select2-selection__clear">×</span><li class="select2-selection__choice" title="GLOBAL"><span class="select2-selection__choice__remove" role="presentation">×</span>GLOBAL</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> 
																			</section>
																		
																		</div>
																	</div>
																	<div class="col-sm-12 col-md-12 col-lg-6">
																		<div class="row">
																			<div class="col-md-4">
																				<div class="checkbox1">
																					<label>
																					  <span>Smpp Provider</span>
																					</label>
																				</div>
																			</div>
																		
																			<section class="col-md-8 smart-form">
																				<label class="select">
																				<select name="txtSmppProviderName" id="txtSmppProviderName">
																					<option value="-1">Select Provider Name</option>
																					<option value="AIRCEL-TN">AIRCEL-TN</option>
																		
																					<option value="BSNL">BSNL</option>
																		
																					<option value="GupShup">GupShup</option>
																		
																				</select>
																				<i></i>
																				</label> 
																			</section>
																		
																		</div>
																	</div>
																</div>
														</div>
														<div class="fieldset">
															<div class="row">
																<div class="col-sm-12 col-md-12 col-lg-6">
																	<div class="smart-form">
																		<header>Retry Setting</header>
																		<div class="col-md-12">&nbsp;</div>
																	</div>
																	<div class="row">
																	
																		<section class="col col-6 col-md-6" style="padding-top: 2px;">
																			<label class="label1">No Retry ErrorCode</label>
																				<select name="noRetryErrorCodeId" multiple="" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																					<option value="" disabled="">--Select Value--</option>
																		     
																		      <option value="10">INVALID SENDER(10)</option>
																		      
																		      <option value="11">INVALID DESTINATION(11)</option>
																		      
																		      <option value="13">SERVICE BARRED(13)</option>
																		      
																		      <option value="20">SMPP SERVER Q FULL(20)</option>
																		      
																		      <option value="27">ABSENT SUBSCRIBER(27)</option>
																		      
																		      <option value="88">THROTTLING(88)</option>
																		      
																		      <option value="102">MESSAGE BLOCKED(102)</option>
																		      
																		      <option value="401">NETWORK CONGESTION(401)</option>
																		      
																		      <option value="402">NETWORK TIMEOUT(402)</option>
																		      
																		      <option value="403">Absent / Roaming Failed(403)</option>
																		      
																		      <option value="404">EQUIPMENT ERROR(404)</option>
																		      
																		      <option value="405">Invalid Scheduled Time(405)</option>
																		      
																		      <option value="900">NDNC(900)</option>
																		      
																		      <option value="901">Black Listed(901)</option>
																		      
																		      <option value="999">GENERAL ERROR(999)</option>
																		      
																		      <option value="1035">NO BALANCE(1035)</option>
																		      
																		      <option value="999">Other(999)</option>
																		      
																		      <option value="10">Content(10)</option>
																		      
																				</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																			</section>
																	
																			<section class="col col-6 col-md-6" style="padding-top: 2px;">
																				<label class="label1">Retry Immediate ErrorCode</label>
																					<select name="nonRetryErrorCodeId" multiple="" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																						<option value="" disabled="">--Select Value--</option>
																				     
																				      <option value="10">INVALID SENDER(10)</option>
																				      
																				      <option value="11">INVALID DESTINATION(11)</option>
																				      
																				      <option value="13">SERVICE BARRED(13)</option>
																				      
																				      <option value="20">SMPP SERVER Q FULL(20)</option>
																				      
																				      <option value="27">ABSENT SUBSCRIBER(27)</option>
																				      
																				      <option value="88">THROTTLING(88)</option>
																				      
																				      <option value="102">MESSAGE BLOCKED(102)</option>
																				      
																				      <option value="401">NETWORK CONGESTION(401)</option>
																				      
																				      <option value="402">NETWORK TIMEOUT(402)</option>
																				      
																				      <option value="403">Absent / Roaming Failed(403)</option>
																				      
																				      <option value="404">EQUIPMENT ERROR(404)</option>
																				      
																				      <option value="405">Invalid Scheduled Time(405)</option>
																				      
																				      <option value="900">NDNC(900)</option>
																				      
																				      <option value="901">Black Listed(901)</option>
																				      
																				      <option value="999">GENERAL ERROR(999)</option>
																				      
																				      <option value="1035">NO BALANCE(1035)</option>
																				      
																				      <option value="999">Other(999)</option>
																				      
																				      <option value="10">Content(10)</option>
																				      
																					</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																			</section>
																	
																			<section class="col col-6 col-md-6" style="padding-top: 4px;">
																				<div class="checkbox" style="margin-bottom: 5px;">
																					<label>
																				  		<input type="checkbox" class="checkbox style-0" name="retryallerrorcode" id="retryallerrorcode" checked="">
																				 	 	<span>Any</span>
																					</label>
																					<span>/</span><span>Retry Alternate Route</span>
																				</div>
																				<!-- <label class="label1">Retry Alternate Route ErrorCode</label> -->
																					<select name="RetryAlternateGatewayErrorCodeId" multiple="" class="select2 select2-hidden-accessible" id="RetryAlternateGatewayErrorCodeId" onchange="getDlrAlternateRoute();" disabled="" tabindex="-1" aria-hidden="true">
																						<option value="" disabled="">--Select Value--</option>
																				     
																				      <option value="10">INVALID SENDER(10)</option>
																				      
																				      <option value="11">INVALID DESTINATION(11)</option>
																				      
																				      <option value="13">SERVICE BARRED(13)</option>
																				      
																				      <option value="20">SMPP SERVER Q FULL(20)</option>
																				      
																				      <option value="27">ABSENT SUBSCRIBER(27)</option>
																				      
																				      <option value="88">THROTTLING(88)</option>
																				      
																				      <option value="102">MESSAGE BLOCKED(102)</option>
																				      
																				      <option value="401">NETWORK CONGESTION(401)</option>
																				      
																				      <option value="402">NETWORK TIMEOUT(402)</option>
																				      
																				      <option value="403">Absent / Roaming Failed(403)</option>
																				      
																				      <option value="404">EQUIPMENT ERROR(404)</option>
																				      
																				      <option value="405">Invalid Scheduled Time(405)</option>
																				      
																				      <option value="900">NDNC(900)</option>
																				      
																				      <option value="901">Black Listed(901)</option>
																				      
																				      <option value="999">GENERAL ERROR(999)</option>
																				      
																				      <option value="1035">NO BALANCE(1035)</option>
																				      
																				      <option value="999">Other(999)</option>
																				      
																				      <option value="10">Content(10)</option>
																				      
																					</select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" disabled="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																					<label class="label1">Retry Alternate Route ErrorCode</label>
																			</section>
																	
																			<section class="col col-3 col-md-3 smart-form" style="padding-top: 15px;">
																				<label class="label">Retry Delay</label>
																				<label class="select">
																					<select name="smsRetryDelay">
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
																				     
																				      <option value="125">125</option>
																				     
																				      <option value="130">130</option>
																				     
																				      <option value="135">135</option>
																				     
																				      <option value="140">140</option>
																				     
																				      <option value="145">145</option>
																				     
																				      <option value="150">150</option>
																				     
																				      <option value="155">155</option>
																				     
																				      <option value="160">160</option>
																				     
																				      <option value="165">165</option>
																				     
																				      <option value="170">170</option>
																				     
																				      <option value="175">175</option>
																				     
																				      <option value="180">180</option>
																				     
																				      <option value="185">185</option>
																				     
																				      <option value="190">190</option>
																				     
																				      <option value="195">195</option>
																				     
																				      <option value="200">200</option>
																				     
																				      <option value="205">205</option>
																				     
																				      <option value="210">210</option>
																				     
																				      <option value="215">215</option>
																				     
																				      <option value="220">220</option>
																				     
																				      <option value="225">225</option>
																				     
																				      <option value="230">230</option>
																				     
																				      <option value="235">235</option>
																				     
																				      <option value="240">240</option>
																				     
																				      <option value="245">245</option>
																				     
																				      <option value="250">250</option>
																				     
																				      <option value="255">255</option>
																				     
																				      <option value="260">260</option>
																				     
																				      <option value="265">265</option>
																				     
																				      <option value="270">270</option>
																				     
																				      <option value="275">275</option>
																				     
																				      <option value="280">280</option>
																				     
																				      <option value="285">285</option>
																				     
																				      <option value="290">290</option>
																				     
																				      <option value="295">295</option>
																				     
																				      <option value="300">300</option>
																				     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																			<section class="col col-3 col-md-3 smart-form" style="padding-top: 15px;">
																				<label class="label">Max Retry Count</label>
																				<label class="select">
																					<select name="maxSmsRetryCount">
																						<option value="" disabled="disabled">--Select Value--</option>
																				                  
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
																				     
																				      <option value="51">51</option>
																				     
																				      <option value="52">52</option>
																				     
																				      <option value="53">53</option>
																				     
																				      <option value="54">54</option>
																				     
																				      <option value="55">55</option>
																				     
																				      <option value="56">56</option>
																				     
																				      <option value="57">57</option>
																				     
																				      <option value="58">58</option>
																				     
																				      <option value="59">59</option>
																				     
																				     <option value="60" selected="selected">60</option>
																				     
																				      <option value="61">61</option>
																				     
																				      <option value="62">62</option>
																				     
																				      <option value="63">63</option>
																				     
																				      <option value="64">64</option>
																				     
																				      <option value="65">65</option>
																				     
																				      <option value="66">66</option>
																				     
																				      <option value="67">67</option>
																				     
																				      <option value="68">68</option>
																				     
																				      <option value="69">69</option>
																				     
																				      <option value="70">70</option>
																				     
																				      <option value="71">71</option>
																				     
																				      <option value="72">72</option>
																				     
																				      <option value="73">73</option>
																				     
																				      <option value="74">74</option>
																				     
																				      <option value="75">75</option>
																				     
																				      <option value="76">76</option>
																				     
																				      <option value="77">77</option>
																				     
																				      <option value="78">78</option>
																				     
																				      <option value="79">79</option>
																				     
																				      <option value="80">80</option>
																				     
																				      <option value="81">81</option>
																				     
																				      <option value="82">82</option>
																				     
																				      <option value="83">83</option>
																				     
																				      <option value="84">84</option>
																				     
																				      <option value="85">85</option>
																				     
																				      <option value="86">86</option>
																				     
																				      <option value="87">87</option>
																				     
																				      <option value="88">88</option>
																				     
																				      <option value="89">89</option>
																				     
																				      <option value="90">90</option>
																				     
																				      <option value="91">91</option>
																				     
																				      <option value="92">92</option>
																				     
																				      <option value="93">93</option>
																				     
																				      <option value="94">94</option>
																				     
																				      <option value="95">95</option>
																				     
																				      <option value="96">96</option>
																				     
																				      <option value="97">97</option>
																				     
																				      <option value="98">98</option>
																				     
																				      <option value="99">99</option>
																				     
																				      <option value="100">100</option>
																				     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																	</div>
																</div>
																<div class="col-sm-12 col-md-12 col-lg-6 smart-form">
																	<div class="row">
																		<header>Connection Setting</header>
																		<div class="col-md-11">&nbsp;</div>
																
																		<section class="col col-md-4">
																				<label class="label">Connection TimeOut</label>
																				<label class="select">
																					<select name="connectionTimeOut">
																						<option value="" disabled="disabled">--Select Value--</option>
																				                  
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
																				     
																				      <option value="51">51</option>
																				     
																				      <option value="52">52</option>
																				     
																				      <option value="53">53</option>
																				     
																				      <option value="54">54</option>
																				     
																				      <option value="55">55</option>
																				     
																				      <option value="56">56</option>
																				     
																				      <option value="57">57</option>
																				     
																				      <option value="58">58</option>
																				     
																				      <option value="59">59</option>
																				     
																				     <option value="60" selected="selected">60</option>
																				     
																				      <option value="61">61</option>
																				     
																				      <option value="62">62</option>
																				     
																				      <option value="63">63</option>
																				     
																				      <option value="64">64</option>
																				     
																				      <option value="65">65</option>
																				     
																				      <option value="66">66</option>
																				     
																				      <option value="67">67</option>
																				     
																				      <option value="68">68</option>
																				     
																				      <option value="69">69</option>
																				     
																				      <option value="70">70</option>
																				     
																				      <option value="71">71</option>
																				     
																				      <option value="72">72</option>
																				     
																				      <option value="73">73</option>
																				     
																				      <option value="74">74</option>
																				     
																				      <option value="75">75</option>
																				     
																				      <option value="76">76</option>
																				     
																				      <option value="77">77</option>
																				     
																				      <option value="78">78</option>
																				     
																				      <option value="79">79</option>
																				     
																				      <option value="80">80</option>
																				     
																				      <option value="81">81</option>
																				     
																				      <option value="82">82</option>
																				     
																				      <option value="83">83</option>
																				     
																				      <option value="84">84</option>
																				     
																				      <option value="85">85</option>
																				     
																				      <option value="86">86</option>
																				     
																				      <option value="87">87</option>
																				     
																				      <option value="88">88</option>
																				     
																				      <option value="89">89</option>
																				     
																				      <option value="90">90</option>
																				     
																				      <option value="91">91</option>
																				     
																				      <option value="92">92</option>
																				     
																				      <option value="93">93</option>
																				     
																				      <option value="94">94</option>
																				     
																				      <option value="95">95</option>
																				     
																				      <option value="96">96</option>
																				     
																				      <option value="97">97</option>
																				     
																				      <option value="98">98</option>
																				     
																				      <option value="99">99</option>
																				     
																				      <option value="100">100</option>
																				     
																				      <option value="101">101</option>
																				     
																				      <option value="102">102</option>
																				     
																				      <option value="103">103</option>
																				     
																				      <option value="104">104</option>
																				     
																				      <option value="105">105</option>
																				     
																				      <option value="106">106</option>
																				     
																				      <option value="107">107</option>
																				     
																				      <option value="108">108</option>
																				     
																				      <option value="109">109</option>
																				     
																				      <option value="110">110</option>
																				     
																				      <option value="111">111</option>
																				     
																				      <option value="112">112</option>
																				     
																				      <option value="113">113</option>
																				     
																				      <option value="114">114</option>
																				     
																				      <option value="115">115</option>
																				     
																				      <option value="116">116</option>
																				     
																				      <option value="117">117</option>
																				     
																				      <option value="118">118</option>
																				     
																				      <option value="119">119</option>
																				     
																				      <option value="120">120</option>
																				     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																			<section class="col col-4">
																				<label class="label">Transaction TimeOut</label>
																				<label class="select">
																					<select name="transactionTimeOut">
																						<option value="" disabled="disabled">--Select Value--</option>
																				                  
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
																				     
																				      <option value="51">51</option>
																				     
																				      <option value="52">52</option>
																				     
																				      <option value="53">53</option>
																				     
																				      <option value="54">54</option>
																				     
																				      <option value="55">55</option>
																				     
																				      <option value="56">56</option>
																				     
																				      <option value="57">57</option>
																				     
																				      <option value="58">58</option>
																				     
																				      <option value="59">59</option>
																				     
																				     <option value="60" selected="selected">60</option>
																				     
																				      <option value="61">61</option>
																				     
																				      <option value="62">62</option>
																				     
																				      <option value="63">63</option>
																				     
																				      <option value="64">64</option>
																				     
																				      <option value="65">65</option>
																				     
																				      <option value="66">66</option>
																				     
																				      <option value="67">67</option>
																				     
																				      <option value="68">68</option>
																				     
																				      <option value="69">69</option>
																				     
																				      <option value="70">70</option>
																				     
																				      <option value="71">71</option>
																				     
																				      <option value="72">72</option>
																				     
																				      <option value="73">73</option>
																				     
																				      <option value="74">74</option>
																				     
																				      <option value="75">75</option>
																				     
																				      <option value="76">76</option>
																				     
																				      <option value="77">77</option>
																				     
																				      <option value="78">78</option>
																				     
																				      <option value="79">79</option>
																				     
																				      <option value="80">80</option>
																				     
																				      <option value="81">81</option>
																				     
																				      <option value="82">82</option>
																				     
																				      <option value="83">83</option>
																				     
																				      <option value="84">84</option>
																				     
																				      <option value="85">85</option>
																				     
																				      <option value="86">86</option>
																				     
																				      <option value="87">87</option>
																				     
																				      <option value="88">88</option>
																				     
																				      <option value="89">89</option>
																				     
																				      <option value="90">90</option>
																				     
																				      <option value="91">91</option>
																				     
																				      <option value="92">92</option>
																				     
																				      <option value="93">93</option>
																				     
																				      <option value="94">94</option>
																				     
																				      <option value="95">95</option>
																				     
																				      <option value="96">96</option>
																				     
																				      <option value="97">97</option>
																				     
																				      <option value="98">98</option>
																				     
																				      <option value="99">99</option>
																				     
																				      <option value="100">100</option>
																				     
																				      <option value="101">101</option>
																				     
																				      <option value="102">102</option>
																				     
																				      <option value="103">103</option>
																				     
																				      <option value="104">104</option>
																				     
																				      <option value="105">105</option>
																				     
																				      <option value="106">106</option>
																				     
																				      <option value="107">107</option>
																				     
																				      <option value="108">108</option>
																				     
																				      <option value="109">109</option>
																				     
																				      <option value="110">110</option>
																				     
																				      <option value="111">111</option>
																				     
																				      <option value="112">112</option>
																				     
																				      <option value="113">113</option>
																				     
																				      <option value="114">114</option>
																				     
																				      <option value="115">115</option>
																				     
																				      <option value="116">116</option>
																				     
																				      <option value="117">117</option>
																				     
																				      <option value="118">118</option>
																				     
																				      <option value="119">119</option>
																				     
																				      <option value="120">120</option>
																				     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																			<section class="col col-md-4">
																				<label class="label">DlrTransaction TimeOut</label>
																				<label class="select">
																					<select name="dlrTransTimeOut">
																						<option value="" disabled="disabled">--Select Value--</option>
																				                  
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
																				     
																				      <option value="51">51</option>
																				     
																				      <option value="52">52</option>
																				     
																				      <option value="53">53</option>
																				     
																				      <option value="54">54</option>
																				     
																				      <option value="55">55</option>
																				     
																				      <option value="56">56</option>
																				     
																				      <option value="57">57</option>
																				     
																				      <option value="58">58</option>
																				     
																				      <option value="59">59</option>
																				     
																				     <option value="60" selected="selected">60</option>
																				     
																				      <option value="61">61</option>
																				     
																				      <option value="62">62</option>
																				     
																				      <option value="63">63</option>
																				     
																				      <option value="64">64</option>
																				     
																				      <option value="65">65</option>
																				     
																				      <option value="66">66</option>
																				     
																				      <option value="67">67</option>
																				     
																				      <option value="68">68</option>
																				     
																				      <option value="69">69</option>
																				     
																				      <option value="70">70</option>
																				     
																				      <option value="71">71</option>
																				     
																				      <option value="72">72</option>
																				     
																				      <option value="73">73</option>
																				     
																				      <option value="74">74</option>
																				     
																				      <option value="75">75</option>
																				     
																				      <option value="76">76</option>
																				     
																				      <option value="77">77</option>
																				     
																				      <option value="78">78</option>
																				     
																				      <option value="79">79</option>
																				     
																				      <option value="80">80</option>
																				     
																				      <option value="81">81</option>
																				     
																				      <option value="82">82</option>
																				     
																				      <option value="83">83</option>
																				     
																				      <option value="84">84</option>
																				     
																				      <option value="85">85</option>
																				     
																				      <option value="86">86</option>
																				     
																				      <option value="87">87</option>
																				     
																				      <option value="88">88</option>
																				     
																				      <option value="89">89</option>
																				     
																				      <option value="90">90</option>
																				     
																				      <option value="91">91</option>
																				     
																				      <option value="92">92</option>
																				     
																				      <option value="93">93</option>
																				     
																				      <option value="94">94</option>
																				     
																				      <option value="95">95</option>
																				     
																				      <option value="96">96</option>
																				     
																				      <option value="97">97</option>
																				     
																				      <option value="98">98</option>
																				     
																				      <option value="99">99</option>
																				     
																				      <option value="100">100</option>
																				     
																				      <option value="101">101</option>
																				     
																				      <option value="102">102</option>
																				     
																				      <option value="103">103</option>
																				     
																				      <option value="104">104</option>
																				     
																				      <option value="105">105</option>
																				     
																				      <option value="106">106</option>
																				     
																				      <option value="107">107</option>
																				     
																				      <option value="108">108</option>
																				     
																				      <option value="109">109</option>
																				     
																				      <option value="110">110</option>
																				     
																				      <option value="111">111</option>
																				     
																				      <option value="112">112</option>
																				     
																				      <option value="113">113</option>
																				     
																				      <option value="114">114</option>
																				     
																				      <option value="115">115</option>
																				     
																				      <option value="116">116</option>
																				     
																				      <option value="117">117</option>
																				     
																				      <option value="118">118</option>
																				     
																				      <option value="119">119</option>
																				     
																				      <option value="120">120</option>
																				     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																			<section class="col col-md-4">
																				<label class="label">Keep Alive</label>
																				<label class="select">
																					<select name="keepAlive">
																						<option value="">--Select Value--</option>
																				                  
																				      <option value="5">5</option>
																				     
																				      <option value="10">10</option>
																				     
																				      <option value="15">15</option>
																				     
																				      <option value="20">20</option>
																				     
																				      <option value="25">25</option>
																				     
																				     <option value="30" selected="selected">30</option>
																				     
																				      <option value="35">35</option>
																				     
																				      <option value="40">40</option>
																				     
																				      <option value="45">45</option>
																				     
																				      <option value="50">50</option>
																				     
																				      <option value="55">55</option>
																				     
																				      <option value="60">60</option>
																				     
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
																			</section>
																	
																			<section class="col col-md-4">
																				<label class="label">Connection Retry Delay</label>
																				<label class="select">
																					<select name="connectionRetrydelayed">
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
																				     
																				      <option value="125">125</option>
																				     
																				      <option value="130">130</option>
																				     
																				      <option value="135">135</option>
																				     
																				      <option value="140">140</option>
																				     
																				      <option value="145">145</option>
																				     
																				      <option value="150">150</option>
																				     
																				      <option value="155">155</option>
																				     
																				      <option value="160">160</option>
																				     
																				      <option value="165">165</option>
																				     
																				      <option value="170">170</option>
																				     
																				      <option value="175">175</option>
																				     
																				      <option value="180">180</option>
																				     
																				      <option value="185">185</option>
																				     
																				      <option value="190">190</option>
																				     
																				      <option value="195">195</option>
																				     
																				      <option value="200">200</option>
																				     
																				      <option value="205">205</option>
																				     
																				      <option value="210">210</option>
																				     
																				      <option value="215">215</option>
																				     
																				      <option value="220">220</option>
																				     
																				      <option value="225">225</option>
																				     
																				      <option value="230">230</option>
																				     
																				      <option value="235">235</option>
																				     
																				      <option value="240">240</option>
																				     
																				      <option value="245">245</option>
																				     
																				      <option value="250">250</option>
																				     
																				      <option value="255">255</option>
																				     
																				      <option value="260">260</option>
																				     
																				      <option value="265">265</option>
																				     
																				      <option value="270">270</option>
																				     
																				      <option value="275">275</option>
																				     
																				      <option value="280">280</option>
																				     
																				      <option value="285">285</option>
																				     
																				      <option value="290">290</option>
																				     
																				      <option value="295">295</option>
																				     
																				      <option value="300">300</option>
																				     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																			<section class="col col-md-4">
																				<label class="label">Pdu Processor Degree</label>
																				<label class="select">
																					<select name="pduProcessorDegree">
																						 <option value="">--Select Value--</option>
																			                  
																			      <option value="1">1</option>
																			     
																			     <option value="2" selected="selected">2</option>
																			     
																			      <option value="3">3</option>
																			     
																			      <option value="4">4</option>
																			     
																			      <option value="5">5</option>
																			     
																			      <option value="6">6</option>
																			     
																			      <option value="7">7</option>
																			     
																			      <option value="8">8</option>
																			     
																			      <option value="9">9</option>
																			     
																			      <option value="10">10</option>
																			     
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																	
																	</div>
																</div>
															</div>
														</div>
														<div class="smart-form">
														<div class="fieldset">
															<div class="row form-horizontal">
																<div class="col-sm-12 col-md-12 col-lg-12">
																	<div class="well1">
																		<header>Character Set</header>
																		<div class="col-md-6">
																			<div class="col-md-11">&nbsp;</div>
																			<section class="col col-md-4" style="padding-top: 8px;">
																				<label class="label">Character Set</label>
																			</section>
																			<section class="col col-md-8">
																				<!-- <label class="label">Character Set</label> -->
																				<label class="select">
																					<select name="chName">
																				
																						<option value="GSM-7" selected="selected">GSM-7</option>
																				
																						<option value="LATIN-1">LATIN-1</option>
																				
																						<option value="LATIN-9">LATIN-9</option>
																					
																					</select>
																					 <i></i> 
																				</label>
																			</section>
																			</div>
																			<div class="col-md-6">
																				<div class="col-md-11">&nbsp;</div>
																				<section class="col col-md-4" style="padding-top: 8px;">
																					<label class="label">Thread Pool Size</label>
																				</section>
																				<section class="col col-md-8">
																					<label class="input">
																				
																						<input type="text" name="txtThreadPoolSize" value="50" placeholder="Thread Pool Size" id="txtThreadPoolSize" class="form-control" maxlength="4">
																				
																					</label>
																				</section>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="smart-form">
														<div class="fieldset">
															<div class="row">
																<div class="col-sm-12 col-md-12 col-lg-12">
																	<div class="well1">
																		<header>TON/NPI</header>
																		<div class="form-group">
																			<div class="col-md-12">
																				<div class="col-md-11">&nbsp;</div>
																		
																			<label class="label col col-md-3">
																			  <input type="checkbox" class="checkbox style-0" name="overwriteTonNpi" id="overwriteTonNpi">
																			  <span>Overwrite TON/NPI</span>
																			</label>
																				<div class="col-md-9">
																					<section class="col col-md-3" id="destinationTon">
																						<label class="label">Destination TON</label>
																						<label class="select">
																							<select name="destinationTon">
																						
																								<option value="0">Unknown</option>
																						
																								<option value="1">International</option>
																						
																								<option value="2">National</option>
																						
																								<option value="3">Network Specific</option>
																						
																								<option value="4">Subscriber Number</option>
																						
																								<option value="5">Alphanumeric</option>
																						
																								<option value="6">Abbreviated</option>
																						
																								
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																					<section class="col col-md-3" id="destinationNpi">
																						<label class="label">Destination NPI</label>
																						<label class="select">
																							<select name="destinationNpi">
																						
																								<option value="0">Unknown</option>
																						
																								<option value="1">ISDN (E163/E164)</option>
																						
																								<option value="2">Data (X.121)</option>
																						
																								<option value="3">Telex (F.69)</option>
																						
																								<option value="6">Land Mobile (E.212)</option>
																						
																								<option value="8">National</option>
																						
																								<option value="9">Private</option>
																						
																								<option value="10">ERMES</option>
																						
																								<option value="13">Internet (IP)</option>
																						
																								<option value="18">WAP Client Id</option>
																						
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																					<section class="col col-md-3" id="sourceTon">
																					<label class="label">Source TON</label>
																					<label class="select">
																						<select name="sourceTon">
																					
																							<option value="0">Unknown</option>
																					
																							<option value="1">International</option>
																					
																							<option value="2">National</option>
																					
																							<option value="3">Network Specific</option>
																					
																							<option value="4">Subscriber Number</option>
																					
																							<option value="5">Alphanumeric</option>
																					
																							<option value="6">Abbreviated</option>
																						
																						</select>
																						 <i></i> 
																					</label>
																				</section>
																				<section class="col col-md-3" id="sourseNpi">
																					<label class="label">Source NPI</label>
																					<label class="select">
																						<select name="sourseNpi">
																					
																							<option value="0">Unknown</option>
																					
																							<option value="1">ISDN (E163/E164)</option>
																					
																							<option value="2">Data (X.121)</option>
																					
																							<option value="3">Telex (F.69)</option>
																					
																							<option value="6">Land Mobile (E.212)</option>
																					
																							<option value="8">National</option>
																					
																							<option value="9">Private</option>
																					
																							<option value="10">ERMES</option>
																					
																							<option value="13">Internet (IP)</option>
																					
																							<option value="18">WAP Client Id</option>
																					
																						</select>
																						 <i></i> 
																					</label>
																				</section>
																			</div>
																	
																				<div class="col-md-7">&nbsp;&nbsp;</div>
																				
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														</div>
														<div class="row">&nbsp;</div>
														<div class="smart-form">
														<footer>
															<button type="submit" name="submit" class="btn btn-danger">Cancel</button>
															<button type="submit" name="submit" class="btn btn-primary">Update</button>
														</footer>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									
									<div class="tab-pane" id="routing_tab">
										<div class="tabbable tabs-below">
											<div class="tab-content padding-10">
												<div class="tab-pane active" id="AA17">
													<div class="row">
														<form action="" method="post" id="contact-form2" novalidate="novalidate">
															<div class="fieldset">
													
															<div class="col-md-12">
																<div class="label col col-md-2 smart-form">
																	<label class="label ">
																		<input type="checkbox" class="checkbox style-0" name="checkrouting" id="checkrouting">
																		<span>Routing</span> 
																	</label>
																</div>
																<div class="col-md-3 col smart-form" id="altseriesoperatortab">
																	<div class="input">
																		<select name="operator" class="form-control" style="width: 100%" data-placeholder="None" id="operator">
																
																			<option value="Aircel">Aircel</option>
																
																			<option value="Airtel">Airtel</option>
																
																			<option value="BSNL">BSNL</option>
																
																			<option value="IDEA">IDEA</option>
																
																			<option value="MTNL">MTNL</option>
																
																			<option value="MTS">MTS</option>
																
																			<option value="Reliance CDMA">Reliance CDMA</option>
																
																			<option value="Reliance GSM">Reliance GSM</option>
																
																			<option value="Reliance Jio">Reliance Jio</option>
																
																			<option value="TATA Docomo">TATA Docomo</option>
																
																			<option value="TATA Docomo GSM">TATA Docomo GSM</option>
																
																			<option value="TATA Indicom CDMA">TATA Indicom CDMA</option>
																
																			<option value="Uninor">Uninor</option>
																
																			<option value="Videocon ">Videocon </option>
																
																			<option value="Vodafone">Vodafone</option>
																
																		</select>
																		<span>Select Operator </span>
																	</div>
																</div>
																<div class="col-md-3 col" id="altseriescircletab">
																	<div class="input">
																		<select name="circle" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" id="circle" tabindex="-1" aria-hidden="true">
																			<option value="ALL">All</option>
																
																			<option value=" ANDHRA PRADESH &amp; TE"> ANDHRA PRADESH &amp; TE</option>
																
																			<option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
																
																			<option value="ANDHRA PRADESH &amp; TEL">ANDHRA PRADESH &amp; TEL</option>
																
																			<option value="ASSAM">ASSAM</option>
																
																			<option value="BIHAR &amp; JHARKHAND">BIHAR &amp; JHARKHAND</option>
																
																			<option value="CHATTISGARH">CHATTISGARH</option>
																
																			<option value="CHENNAI">CHENNAI</option>
																
																			<option value="DELHI &amp; NCR">DELHI &amp; NCR</option>
																
																			<option value="GUJRAT">GUJRAT</option>
																
																			<option value="HARYANA">HARYANA</option>
																
																			<option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
																
																			<option value="JAMMU &amp; KASHMIR">JAMMU &amp; KASHMIR</option>
																
																			<option value="KARNATAKA">KARNATAKA</option>
																
																			<option value="KERALA">KERALA</option>
																
																			<option value="KOLKATA">KOLKATA</option>
																
																			<option value="MADHYA PRADESH &amp; CHH">MADHYA PRADESH &amp; CHH</option>
																
																			<option value="MAHARASHTRA">MAHARASHTRA</option>
																
																			<option value="MUMBAI">MUMBAI</option>
																
																			<option value="NORTH EAST">NORTH EAST</option>
																
																			<option value="ORISSA">ORISSA</option>
																
																			<option value="PUNJAB">PUNJAB</option>
																
																			<option value="RAJASTHAN">RAJASTHAN</option>
																
																			<option value="TAMILNADU">TAMILNADU</option>
																
																			<option value="TAMILNADU Including ">TAMILNADU Including </option>
																
																			<option value="UTTAR PRADESH EAST">UTTAR PRADESH EAST</option>
																
																			<option value="UTTAR PRADESH(EAST)">UTTAR PRADESH(EAST)</option>
																
																			<option value="UTTAR PRADESH(WEST) ">UTTAR PRADESH(WEST) </option>
																
																			<option value="WEST BENGAL &amp; ANDAMA">WEST BENGAL &amp; ANDAMA</option>
																
																		</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																		<span>Select Circle </span>
																	</div>
																</div>
																<div class="col-md-3 col smart-form" id="altseriesroutetab">
																	<div class="input">
																		<select name="alternateSeriesRoute" class="form-control" style="width: 100%" data-placeholder="None" id="alternateSeriesRoute">
																
																			<option value="HB-Bsnl-Promo">HB-Bsnl-Promo</option>
																
																			<option value="HB-BSNLOTP">HB-BSNLOTP</option>
																
																			<option value="HB-IDEA">HB-IDEA</option>
																
																		</select>
																		<span>Select Gateway </span>
																	</div>
																</div>
															</div>	
													
															</div>
															<div class="row">&nbsp;</div>
														<div class="smart-form">
                                                        <div class="col-md-12">
														<footer>
															<button type="submit" name="submit" class="btn btn-primary">Update</button>
														</footer>
														</div>
														</div>
														<input type="hidden" name="systemId" value="">
														<input type="hidden" name="txtAction" value="RoutingTab">
														</form>
													</div>
													<div class="row no-padding"></div>
													<div class="row">
														<div class="fieldset panel-body">
															<div class="table-responsive" style="overflow-x: visible;">
																<table id="datatable_fixed_column" class="table table-bordered">
																	<thead>
																		<tr>
														                    <th data-class="expand">Operator Name</th><th>Circle Name</th><th>Alternate Gateway</th><th data-hide="phone,tablet">Action</th>
															            </tr>
																	</thead>
																	<tbody>
																
																	</tbody>
																</table>
															</div>
														</div>
													</div>
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
  
</div>
<!-- wrapper --> 
<?php

include 'footer.php';
?>