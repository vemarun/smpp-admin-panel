$("#ContentFilter").click(function(){

    if($(this).is(":checked")){
    $("#checkContentFilter").val("noncontent");
       $("#ContentBlockDegree").show();
       $("#BlockedContentCate").show();
       
    }else{
    	$("#checkContentFilter").val("content");
        $("#ContentBlockDegree").hide();
		$("#BlockedContentCate").hide();        
    }
});

$("#enbdiscount").click(function(){
	if($(this).is(":checked")){
		$("#discountvaluetab").show();
		$("#whitelistdiscattab").show();
		$("#whitelistdisconttab").show();
	}else{
		$("#discountvaluetab").hide();
		$("#whitelistdiscattab").hide();
		$("#whitelistdisconttab").hide();
	}
});



/***************table select*************/

	$('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box1").not(targetBox).hide();
        $(targetBox).show();
    });


/****************new js************/

$(document).ready(function()
{
	$("#rollbackMode").attr('disabled', true);
});

$(document).ready(function()
{
	$("#senderIdAlphaAllow").click(function(){

    if($(this).is(":checked")){
       $("#senderIdAlphaAlength").show();
       
    }else{
        $("#senderIdAlphaAlength").hide();
        
    }
});

$("#senderIdAlNumAllow").click(function(){

    if($(this).is(":checked")){
       $("#senderIdANumLength").show();
       
    }else{
        $("#senderIdANumLength").hide();
        
    }
});

$("#senderIdAlphaNumAllow").click(function(){

    if($(this).is(":checked")){
       $("#senderIdAlphaNumLength").show();
       
    }else{
        $("#senderIdAlphaNumLength").hide();
        
    }
});

$("#senderIdAlphaNumAllow").click(function(){

    if($(this).is(":checked")){
       $("#senderIdAlphaNumLength").show();
       
    }else{
        $("#senderIdAlphaNumLength").hide();
        
    }
});
	$("#ContentFilter").click(function(){

    if($(this).is(":checked")){
       $("#ContentBlockDegree").show();
       $("#BlockedContentCate").show();
       
    }else{
    	if($("#globalContFilter").is(":checked")){
    		$("#ContentBlockDegree").show();
    		$("#BlockedContentCate").hide();
    	}
    	else{
    		$("#ContentBlockDegree").hide();
       		$("#BlockedContentCate").hide();
    	}
         
    }
});

$("#globalContFilter").click(function(){

    if($(this).is(":checked")){
    	$("#globalhiddenContFilter").val("global");
       $("#ContentBlockDegree").show();
       
       
    }else{
    		$("#globalhiddenContFilter").val("ac");
    		if($("#ContentFilter").is(":checked")){
    		$("#ContentBlockDegree").show();
    		}
    		else{
    			$("#ContentBlockDegree").hide();	
    		}
        
       	 
    }
});	
$("#txtRollback").click(function(){
	    if($(this).is(":checked")){
	       $("#rollbackMode").attr('disabled', false);
	       
	    }else{
	        $("#rollbackMode").attr('disabled', true);
	    }
	});
	$('input[type="radio"]').click(function(){
		if($(this).attr("id")=="bindType"){
		$("#bind").val("bindType");
		$("#other").hide();
        $("#any").show();
        //$("#any1").removeClass('fa fa-circle-o').addClass('fa fa-circle-o checked');
       //$('#other1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
	}
    if($(this).attr("id")=="other1"){
    	$("#bind").val("other1");
	    $("#any").hide();
        $("#other").show();
        //$("#any1").removeClass('fa fa-circle-o').addClass('fa fa-circle-o checked');
        //$('#other1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
    }
		
		if($(this).attr("id")=="tps"){
    	$("#tpsName").val("tps");
    	$("#tpsPerSession").hide();
        $("#totalTps").show();
        //$("#tps1").removeClass('fa fa-circle-o').addClass('fa fa-circle-o checked');
        //$('#tpsper1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
    }
    if($(this).attr("id")=="tpsper"){
    	$("#tpsName").val("tpsper");
        $("#totalTps").hide();
        $("#tpsPerSession").show();
        //$('#tps1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#tpsper1').removeClass('fa fa-circle-o ').addClass('fa fa-circle-o checked');
    }
    if($(this).attr("id")=="fxdSender"){
	    $("#dynamicSourceAddress").val("senderIdOverWrite");
        $("#fixedSender").show();
        if($("#senderIdAlphaAllow").is(":checked")){
        	$("#senderIdAlphaAllow").removeAttr('checked');
        	$("#senderIdAlphaAlength").hide();
        }
        else{
        	$("#senderIdAlphaAlength").hide();
        }
        if($("#senderIdAlNumAllow").is(":checked")){
        	$("#senderIdAlNumAllow").removeAttr('checked');
        	$("#senderIdANumLength").hide();
        }
        else{
        	$("#senderIdANumLength").hide();
        }
        if($("#senderIdAlphaNumAllow").is(":checked")){
        	$("#senderIdAlphaNumAllow").removeAttr('checked');
        	$("#senderIdAlphaNumLength").hide();
        }
        else{
        	$("#senderIdAlphaNumLength").hide();
        }
        if($("#checkDefaultsenderId").is(":checked")){
        	$("#checkDefaultsenderId").removeAttr('checked');
        	$("#defaultSenderIdTab").hide();
        }
        else{
        	$("#defaultSenderIdTab").hide();
        }
        $("#senderIdAlphaAllow").attr('disabled', true);
        $("#senderIdAlNumAllow").attr('disabled', true);
        $("#senderIdAlphaNumAllow").attr('disabled', true);
        $("#checkDefaultsenderId").attr('disabled', true);
        //$('#approvedSender1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#dynamicSender1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#fxdSender1').removeClass('fa fa-circle-o ').addClass('fa fa-circle-o checked');
    }
    if($(this).attr("id")=="dynamicSender"){
    	//$("#senderIdOverWrite").val();
    	$("#dynamicSourceAddress").val("dynamice");
    	$("#fixedSender").hide();
        $("#senderIdAlphaAllow").attr('disabled', false);$("#senderIdAlphaAllow").prop('checked', true);$("#senderIdAlphaAlength").show();
        $("#senderIdAlNumAllow").attr('disabled', false);$("#senderIdAlNumAllow").prop('checked', true);$("#senderIdANumLength").show();
        $("#senderIdAlphaNumAllow").attr('disabled', false);$("#senderIdAlphaNumAllow").prop('checked', true);$("#senderIdAlphaNumLength").show();
        $("#checkDefaultsenderId").attr('disabled', false);$("#checkDefaultsenderId").prop('checked', true);$("#defaultSenderIdTab").show();
        //$('#fxdSender1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#approvedSender1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#dynamicSender1').removeClass('fa fa-circle-o ').addClass('fa fa-circle-o checked');
    }
    if($(this).attr("id")=="approvedSender"){
    	//$("#senderIdOverWrite").val();
    	$("#dynamicSourceAddress").val("approved");
        $("#fixedSender").hide();
       	$("#senderIdAlphaAllow").attr('disabled', false);$("#senderIdAlphaAllow").prop('checked', true);$("#senderIdAlphaAlength").show();
        $("#senderIdAlNumAllow").attr('disabled', false);$("#senderIdAlNumAllow").prop('checked', true);$("#senderIdANumLength").show();
        $("#senderIdAlphaNumAllow").attr('disabled', false);$("#senderIdAlphaNumAllow").prop('checked', true);$("#senderIdAlphaNumLength").show();
        $("#checkDefaultsenderId").attr('disabled', false);$("#checkDefaultsenderId").prop('checked', true);$("#defaultSenderIdTab").show();
        //$('#fxdSender1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#dynamicSender1').removeClass('fa fa-circle-o checked').addClass('fa fa-circle-o');
        //$('#approvedSender1').removeClass('fa fa-circle-o ').addClass('fa fa-circle-o checked');
    }
	});
	$("#checkDefaultsenderId").click(function(){

	    if($(this).is(":checked")){
	       $("#defaultSenderIdTab").show();
	       
	    }else{
	        $("#defaultSenderIdTab").hide();
	        
	    }
	});
	
	
	$("#checkrouting").click(function(){
	    if($(this).is(":checked")){
	       $("#altseriesroutetab").show();
	       
	    }else{
	        $("#altseriesroutetab").hide();
	    }
	});
	$("#enbexpiry").click(function(){
	    if($(this).is(":checked")){
	       $("#validityperiodtab").show();
	       
	    }else{
	        $("#validityperiodtab").hide();
	    }
	});

	
	
	$("#txtCheckTime").click(function(){
	    if($(this).is(":checked")){
	       $("#txtTimeInterval").show();
	       
	    }else{
	        $("#txtTimeInterval").hide();
	    }
	});
	
	$('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
	
	$("#putSenderPrefix").click(function(){

    if($(this).is(":checked")){
       $("#senderPrefix").show();
       
    }else{
        $("#senderPrefix").hide();
        
    }
	});

$("#overwriteTonNpi").click(function(){
	
    if($(this).is(":checked")){
    
       $("#destinationTon").show();
       $("#destinationNpi").show();
       $("#sourceTon").show();
       $("#sourseNpi").show();
       
    }
    else{
    
        $("#destinationTon").hide();
       	$("#destinationNpi").hide();
       	$("#sourceTon").hide();
       	$("#sourseNpi").hide();
        
    }
});


	
});
function getTab(id){
	if(id=="personalinfo1"){
		$("#accountinfo1").removeClass('active').addClass('');
		$("#personalinfo1").addClass('active');
	}
	else if(id=="otherinfo1"){
		$("#personalinfo1").removeClass('active').addClass('');
		$("#otherinfo1").addClass('active');
	}
}
function getPasswordGenerator(){
	$.ajax({
			type: "POST",
			url: "getautopassword",
			data: "",
			dataType:"html",
			cache: false,
			success: function(data){
				$("#txtpassword").attr('type', 'text');
				$("#txtpassword").val(data);
			},
  			error: function(html){
  				$("#txtpassword").val('');
  			} 
		});
}
function verify(){
	$("#createuser").hide();
	$("#processAdd").show();
}
function getBalanceMode(){
	var balanceMode=$("#balanceMode").val();
	if(balanceMode=="PREPAID"){
		$("#txtBalDiv").text('Balance');
		$("#balance").attr("placeholder", "Account Balance");
	}
	else if(balanceMode=="POSTPAID"){
		$("#txtBalDiv").text('Credit Limit');
		$("#balance").attr("placeholder", "Account Credit Limit");
	}
}

$(document).ready(function() {
    $("input[name$='radio']").click(function() {
        var test = $(this).val();

        $("div.desc").hide();
        $("#tps" + test).show();
    });
	
	
		$("#CheckTime").click(function(){
	    if($(this).is(":checked")){
	       $("#TimeInterval").show();
	       
	    }else{
	        $("#TimeInterval").hide();
	    }
	});

$('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
	
});

/*****************content and global filter***********************/	

$("#ContentFilter").click(function(){

    if($(this).is(":checked")){
       $("#ContentBlockDegree").show();
       $("#BlockedContentCate").show();
       
    }else{
    	if($("#globalContFilter").is(":checked")){
    		$("#ContentBlockDegree").show();
    		$("#BlockedContentCate").hide();
    	}
    	else{
    		$("#ContentBlockDegree").hide();
       		$("#BlockedContentCate").hide();
    	}
         
    }
});

$("#globalContFilter").click(function(){

    if($(this).is(":checked")){
    	$("#globalhiddenContFilter").val("global");
       $("#ContentBlockDegree").show();
       
       
    }else{
    		$("#globalhiddenContFilter").val("ac");
    		if($("#ContentFilter").is(":checked")){
    		$("#ContentBlockDegree").show();
    		}
    		else{
    			$("#ContentBlockDegree").hide();	
    		}
        
       	 
    }
});	

/*****************other page******************/
/***************add multiple un==input*************/
$('select[multiple].multiple').chosen();
    var MY_SELECT = $($('select[multiple].multiple').get(0));
function getVerify1(){
	
    var selection = MY_SELECT.getSelectionOrder();
            $(selection).each(function(i)
            {
                //$('#s1-order-list').append("<li>"+selection[i]+"</li>");
				alert(selection[i]);
            });
}
function getVerify(){
	var routeString="";
    var selection = MY_SELECT.getSelectionOrder();
	$(selection).each(function(i)
    {
    	routeString+=selection[i]+","       
    });
    if(routeString.length>0){
    	routeString=routeString.substring(0,routeString.length-1);
    	$("#route").val(routeString);
    }
}


/******************popup*******************/
$(document).ready(function() {
	$('#attachsenderfile').click(function(){
	    $(this).val("");
	})  
	$('#attachsenderfile').change(function(){
	    console.log("0");    
	})
});