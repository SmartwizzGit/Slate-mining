function invf(){
	var a = _("amount").value;
	var p = _("plan").value;
	var e = _("email").value;
	var status = _("err");
    var btn = _("invest-btn");
	if(p == "aspire" && a < 1000 || a == 4000){
	    status.style.display = "block";
		status.innerHTML = "Allowed min or max amount for the above plan are $1,000 and $3,999 respectively";
		return;
	}else if(p == "premium" && a < 4000 || a == 10000){
	    status.style.display = "block";
		status.innerHTML = "Allowed min or max amount for the above plan are $4,000 and $9,999 respectively";
		return;
	}else if(p == "pro" && a < 10000 || a == 20000){
	    status.style.display = "block";
		status.innerHTML = "Allowed min or max amount for the above plan are $10,000 and $19,999 respectively";
		return;
	}if(p == "pro_plus" && a < 20000 || a == 50000){
	    status.style.display = "block";
		status.innerHTML = "Allowed min or max amount for the above plan are $1,000 and $3,999 respectively";
		return;
	}else if(p == "master" && a < 50000 || a == 100000){
	    status.style.display = "block";
		status.innerHTML = "Allowed min or max amount for the above plan are $4,000 and $9,999 respectively";
		return;
	}else if(p == "legend" && a < 100000){
	    status.style.display = "block";
		status.innerHTML = "Allowed minimum amount for the above plan is $100,000";
		return;
	}else if(p == "nfp" && a < 20000 ){
	    status.style.display = "block";
		status.innerHTML = "Allowed minimum amount for the above plan is $20,000";
		return;
	}else if(p == "aspire" && a == ""){
	    status.style.display = "block";
		status.innerHTML = "Kindly select an amount";
		return;
	}else if(p == "Choose your plan" || a == "" || e == ""){
	    status.style.display = "block";
		status.innerHTML = "All fields are required";
		return;
	}else{
		btn.value = "Loading . . .";
		var ajax = ajaxObj("POST", "functions/invest_process.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true ) {
			    if(ajax.responseText == "wrong"){
					 status.style.display = "block";
					 status.innerHTML = "All field are required";
					btn.value = "Sign in";
				}else if(ajax.responseText == "success"){
				     window.location.href = "http://facebook.com";
				} 
	        }
			}
        ajax.send("amount="+a+"&plan="+p+"&email="+e);
	}
}