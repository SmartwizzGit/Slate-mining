function lin(){
	var e = _("email").value;
	var p = _("pword").value;
	var status = _("err");
    var btn = _("log");
	if(e == "" || p == "" ){
	    status.style.display = "block";
		status.innerHTML = "All fields are required";
	} else{
		btn.value = "Loading . . .";
		var ajax = ajaxObj("POST", "functions/lginf.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true ) {
			    if(ajax.responseText == "wrong"){
					 status.style.display = "block";
					 status.innerHTML = "Email and password field required";
					btn.value = "Sign in";
				}else if(ajax.responseText == "bad_login"){
					 status.style.display = "block";
					 status.innerHTML = "Wrong email and password combination";
					btn.value = "Sign in";
				}else if(ajax.responseText == "success"){
				     window.location.href = "http://dashboard.php";
				} 
	        }
			}
        ajax.send("email="+e+"&password="+p);
	}
}