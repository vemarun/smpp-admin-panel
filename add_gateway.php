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
											<a data-toggle="tab" href="#accountinfo_tab"> <i class="fa fa-lg fa-user"></i> <span class="hidden-mobile hidden-tablet"> Client Account </span> </a>
										</li>
										<li id="other_tab1">
											<a data-toggle="tab" href="#other_tab"> <i class="fa fa-lg fa-indent"></i> <span class="hidden-mobile hidden-tablet"> Other </span> </a>
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
															<div class="smart-form">
																<div class="fieldset">
																	<div class="row">
																		<section class="col col-md-3">
																			<label class="label">OutBound Connection</label>
																			<label class="input">
																				<i class="icon-append fa fa-code"></i>
																				<input type="text" name="connectionName" id="connectionName" value="" placeholder="OutBound Connection" maxlength="25">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">User Name</label>
																			<label class="input">
																				<i class="icon-append fa fa-user"></i>
																				<input type="text" name="userId" value="" id="user" placeholder="User Name" maxlength="95">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Password</label>
																			<label class="input">
																				<i class="icon-append fa fa-lock"></i>
																				<input type="password" name="password" id="password" value="" placeholder="Password" maxlength="95">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Host</label>
																			<label class="input">
																				<i class="icon-append fa fa-rss"></i>
																				<input type="text" name="host" value="" placeholder="Host" maxlength="90">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																	<div class="row">
																	<section class="col col-md-3">
																			<label class="label">Port</label>
																			<label class="input">
																				<i class="icon-append fa fa-sort-numeric-asc"></i>
																				<input type="text" name="port" value="" placeholder="Port" maxlength="9">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Max Throughput</label>
																			<label class="input">
																				<i class="icon-append fa fa-windows"></i>
																				<input type="text" name="windowSize" value="" placeholder="Max Throughput" maxlength="5">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">Max Queue Buffer</label>
																			<label class="input">
																				<i class="icon-append fa fa-lock"></i>
																				<input type="text" name="maxQueueCount" value="" placeholder="Max Queue Count" maxlength="5">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																		<section class="col col-md-3">
																			<label class="label">System Type</label>
																			<label class="input">
																				<i class="icon-append fa fa-cogs"></i>
																				<input type="text" name="systemType" value="" placeholder="System Type" maxlength="4">
																			</label>
																			<div style="color: #FF0000;"></div>
																		</section>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row form-horizontal1">
																		<div class="col-sm-12 col-md-12 col-lg-6">
																			<section class="col col-md-6 no_padding2">
																				<label class="label">Service Type</label>
																				<label class="input">
																					<i class="icon-append fa fa-cog"></i>
																					<input type="text" name="serviceType" value="cmt" placeholder="Service Type" maxlength="10">
																				</label>
																				<div style="color: #FF0000;"></div>
																			</section>
																		
																			<section class="col col-md-6 no_padding1">
																				<label class="label">Alternate Gateway</label>
																				<label class="select">
																					<select name="route" onchange="getRouteName();" id="txtselectroutename">
																						<option value="0" selected="selected">None</option>
																     			
																     					<option value="HB-IDEA">HB-IDEA</option>
																     			
																     					<option value="HB-BSNLOTP">HB-BSNLOTP</option>
																     			
    																				</select>
																					<i></i> 
																				</label>
																			</section>
																		
																			<div class="form-group1">
																				<div class="col-md-12">
																					<label class="label col col-md-3" style="padding-right: 8px;">
																					
																						  <input type="checkbox" class="checkbox style-0" name="AnyOutBound">
																						  <span>AnyOutBound</span>
																					
																					</label>
																					<label class="label col col-md-3">
																					
																						  <input type="checkbox" class="checkbox style-0" name="dlr" checked="checked">
																						  <span>Forced DLR</span>
																					
																					</label>
																					<label class="label col col-md-3">
																					
																						  <input type="checkbox" class="checkbox style-0" name="checkDnd">
																						  <span>DND Filter</span>
																					
																					</label>
																					<label class="label col col-md-md-3">
																					
																						  <input type="checkbox" class="checkbox style-0" name="active" checked="checked">
																						  <span>Active</span>
																					
																					</label>
																				</div>
																			</div>
																		</div>
																		<div class="col-sm-12 col-md-12 col-lg-6 ">
																			<div class="well1">
																				<div class="form-group1">
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
																							
																								<option value="1" selected="selected">1</option>
																							
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
																			</div>
																		</div>
																	</div>
																</div>
																<div class="fieldset">
																	<div class="row form-horizontal">
																		<div class="col-sm-12 col-md-12 col-lg-6">
																			<div class="row1">
																				<header>Sender</header>
																				<div class="form-group1">
																					<div class="">
																						<div class="col-md-11">&nbsp;</div>
																				
																						<input type="hidden" name="dynamicAddress" id="dynamicSourceAddress" value="senderIdOverWrite">
																						<div class="label col col-5 col-md-5">
																							<div class="radio1">
																								<label>
																									<input type="radio" class="radiobox style-0" name="Sender" id="fxdSender" checked="checked">
																									<span>Fixed Sender</span> 
																								</label>
																							</div>
																						</div>
																						
																						<div class="col-md-7 col" id="fixedSender">
																							<div class="input">
																								<i class="icon-append fa fa-info-circle"></i>
																								<input placeholder="Fixed Sender" type="text" name="senderIdToOverWrite" value="" maxlength="6">
																							</div>
																						</div>
																						
																						<div class="label col col-12 col-md-12">
																							<div class="radio1">
																								<label>
																									<input type="radio" class="radiobox style-0" name="Sender" id="dynamicSender">
																									<span>Dynamic</span> 
																								</label>
																							</div>
																						</div>
																						<div class="label col col-12 col-md-12">
																							<div class="radio1">
																								<label>
																									<input type="radio" class="radiobox style-0" name="Sender" id="approvedSender">
																									<span>Approved</span> 
																								</label>
																							</div>
																						</div>
																					
																					
<style type="text/css">
#checkBlockSenderIdGpId{
    display:block;
}
</style>
																						<div class="label col col-5 col-md-5">
																							<div class="checkbox1">
																								<label>
																								  <input type="checkbox" class="checkbox style-0" name="checkBlockSenderId" id="checkBlockSenderId" checked="checked">
																								  <span>Check Blocked Sender ID</span>
																								</label>
																							</div>
																							<input type="hidden" name="checkblockedsender" id="checkblockedsender" value="checkblockedsender">
																						</div>
																					
																						<div class="label col col-5 col-md-5">
																							<div class="checkbox1">
																								<label>
																								  <input type="checkbox" class="checkbox style-0" name="specialChaSenderId" id="specialChaSenderId">
																								  <span>Special Char In Sender ID</span>
																								</label>
																							</div>
																						</div>
																					
																						<div class="col-md-11 no_padding">
																							<div class="label col col-5 col-md-5">
																								<div class="checkbox1">
																									<label>
																										<input type="checkbox" class="checkbox style-0" name="putSenderPrefix" id="putSenderPrefix">
																										<span>Sender Prefix</span> 
																									</label>
																								</div>
																							</div>
																							<div class="col-md-7 col" id="senderPrefix" style="display:none;">
																								<div class="input">
																									<i class="icon-append fa fa-info-circle"></i>
																									<input placeholder="Sender Prefix" type="text" name="senderPrefix" maxlength="5">
																									<label>Sender Prefix</label>
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
																				<header>Validation</header>
																				<div class="form-group1">
																					<div class="">
																						<div class="col-md-11">&nbsp;</div>
																					
																							<div class="col-md-11">
																								<div class="label col col-md-6">
																									<div class="checkbox1">
																										<label>
																										  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaAllow" id="senderIdAlphaAllow" disabled="disabled">
																										  <span>Allow Alpha Sender</span>
																										</label>
																									</div>
																								</div>
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
																							<div class="col-md-11">
																								<div class="label col col-md-6">
																									<div class="checkbox1">
																										<label>
																										  <input type="checkbox" class="checkbox style-0" name="senderIdAlNumAllow" id="senderIdAlNumAllow" disabled="disabled">
																										  <span>Allow Numeric Sender</span>
																										</label>
																									</div>
																								</div>
																								<section class="col-md-6 col" id="senderIdANumLength">
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
																										<span>SenderId Numeric Length </span>
																									 </label>
																								</section>
																							</div>
																							<div class="col-md-11">
																								<div class="label col col-md-6">
																									<div class="checkbox1">
																										<label>
																										  <input type="checkbox" class="checkbox style-0" name="senderIdAlphaNumAllow" id="senderIdAlphaNumAllow" disabled="disabled">
																										  <span>Allow AlphaNumeric Sender</span>
																										</label>
																									</div>
																								</div>
																								<section class="col-md-6 col" id="senderIdAlphaNumLength">
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
																										<span>SenderId AlphaNumeric Length </span>
																									 </label>
																								</section>
																							</div>
																							<div class="col-md-11">
																								<div class="label col col-md-6">
																									<div class="checkbox1">
																										<label>
																										  <input type="checkbox" class="checkbox style-0" name="checkDefaultsenderId" id="checkDefaultsenderId" disabled="disabled">
																										  <span>Default Sender</span>
																										</label>
																									</div>
																								</div>
																								<section class="col-md-6 col" id="defaultSenderIdTab">
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
																<div class="fieldset smart-form">
																<div class="row form-horizontal1">
																<div class="col-sm-12 col-md-12 col-md-9">
			<div class="well1">
																		<div class="form-group">
																	
																			<div class="row">
																			
																				<label class="label col col-md-2">
																				  <input type="checkbox" class="checkbox style-0" name="CheckTime" id="CheckTime">
																				  <span>Check Time</span>
																				</label>
																				<div class="col col-md-10" id="TimeInterval" style="display: none;">
																					<div class="col col-md-5">
																						<label class="label">Start Time</label>
																						<div class="has-feedback">
																							<div class="col-md-6">
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
																							
																							<div class="col-md-6">
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
																							<div class="col-md-6">
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
																							<div class="col-md-6">
																									<i class="icon-append fa">MM</i>
																			                    <select class="form-control sf-step-last" name="txtminute" id="txtminute" style="padding-right: 20px;">
																		                    	
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
																<!--	<div class="col-sm-12 col-md-12 col-md-9">
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
																					<div class="col col-5">
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
																	</div>-->
																</div>
															</div>
															
															<div class="fieldset">
																	<div class="row">
																<div class="col-md-12 text-right">
																	<div class="col-lg-12">
															<a data-toggle="tab" href="#other_tab" class="btn btn-danger btn-sm" onclick="getTab('other_tab1');" aria-expanded="true">&nbsp;&nbsp;Next&nbsp;&nbsp;</a>
									              			
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
											<div class="tab-pane" id="other_tab">
												<div class="tabbable tabs-below">
													<div class="tab-content padding-10">
														<div class="tab-pane active" id="AA12">
															<div class="smart-form1">
																<div class="fieldset">
																	<div class="row">
																		<div class="smart-form">
																			<div class="col-md-12"><header>Content Management</header></div>
																			<div class="col-md-12">&nbsp;</div>
																		</div>
																		
																			<div class="col-sm-12 col-md-12 col-lg-6">
																				<div class="row">
																					<div class="col-md-4">
																						<div class="checkbox">
																							<label>
																							  <input type="checkbox" class="checkbox style-0" name="ContentFilter" id="ContentFilter">
																							  <span>Content Filter</span>
																							</label>
																						</div>
																					</div>
																					<section class="col-md-8" id="BlockedContentCate">
																							<select name="BlockedContentCate" multiple="" class="select2 select2-hidden-accessible" style="width: 100%" tabindex="-1" aria-hidden="true">
																							
    																								<option value="1">Property</option>
																							
    																								<option value="3">Relegious</option>
																							
    																								<option value="0">Global</option>
																							
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
																							<label class="label1 smart-form">Blocked Content Category</label>
																						</section>
																					</div>
																				</div>
																				<div class="col-sm-12 col-md-12 col-lg-6 smart-form">
																					<div class="row">
																						<section class="col col-md-12" id="ContentBlockDegree" style="display:none;">
																							
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
																						
																									<option value="Idea">Idea</option>
																						
																									
																						
																								</select>
																								<i></i> 
																							</label>
																							<div style="color: #FF0000;"></div> 
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
																			
																				<section class="col col-6 col-md-6">
																					<label class="label1">No Retry ErrorCode</label>
																					<select name="NoRetryErrorCodeId" multiple="" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																				
																					</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																				</section>
																			
																					<section class="col col-6 col-md-6" style="padding-top: 2px;">
																						<label class="label1">Retry Immediate ErrorCode</label>
																						<select name="NonRetryErrorCodeId" multiple="" class="select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">
																					
																						</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																					</section>
																				
																					<section class="col col-6 col-md-6" style="padding-top: 17px;">
																						<label class="label1">Retry Alternate Route ErrorCode</label>
																						<select name="RetryAlternateGatewayErrorCodeId" multiple="" class="select2 select2-hidden-accessible" disabled="" id="RetryAlternateGatewayErrorCodeId" tabindex="-1" aria-hidden="true">
																					
																						</select><span class="select2 select2-container select2-container--default select2-container--disabled" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" disabled="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
																					</section>
																				
																					<section class="col col-3 col-md-3 smart-form" style="padding-top: 15px;">
																						<label class="label">Sms Retry Delay</label>
																						<label class="select">
																							<select name="smsRetryDelay">
																						
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
																						
																							</select>
																							 <i></i> 
																						</label>
																					</section>
																				
																		</div></div>
																		<div class="col-sm-12 col-md-12 col-lg-6 smart-form">
																			<div class="row">
																				<header>Connection Setting</header>
																				<div class="col-md-11">&nbsp;</div>
																				
																			
																				<section class="col col-md-4">
																						<label class="label">Connection TimeOut</label>
																						<label class="select">
																							<select name="connectionTimeOut">
																						
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
																						<label class="label">Transaction TimeOut</label>
																						<label class="select">
																							<select name="transactionTimeOut">
																						
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
																<div class="fieldset smart-form">
																	<div class="row form-horizontal1">
																		<div class="col-sm-12 col-md-12 col-lg-12">
																			<div class="well1">
																				<header>TON/NPI</header>
																				<div class="col-md-12">&nbsp;</div>
																				
																					<div class="col-md-12">
																						<div class="form-group">
																					
																						<label class="label col col-md-3">
																							<input type="checkbox" class="checkbox style-0" name="overwriteTonNpi" id="overwriteTonNpi">
																						  	<span>Overwrite TON/NPI</span>
																						</label>
																						<div class="col-md-9" >
																							<section class="col col-md-3" id="destinationTon" style="display:none;">
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
																							<section class="col col-md-3" id="destinationNpi" style="display:none;">
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
																							<section class="col col-md-3" id="sourceTon" style="display:none;">
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
																						<section class="col col-md-3" id="sourseNpi" style="display:none;">
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
																<div class="row">&nbsp;</div>
																<div class="smart-form">
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
										</div>
									</form>

  </div>
      </div>
   
	
	
	</section>
    <!-- content --> 
  </div>
  <!-- content-wrapper --> 

</div>
<!-- wrapper --> 
<?php

include 'footer.php';
?>

