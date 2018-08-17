function regf(){
	var u = _("uname").value;
	var  f= _("fullname").value;
	var e = _("email").value;
	var p = _("pword").value;
	var status = _("err");
	var btn = _("reg");
	if(u == "" || f == "" || e == "" || p == "" ){
status.style.display = "block";
status.innerHTML = "Please fill out your details";
}else{
	     btn.value = "Loading . . .";
		var ajax = ajaxObj("POST", "functions/process.php");
        ajax.onreadystatechange = function(){
	        if(ajaxReturn(ajax) == true ) {
			    if (ajax.responseText == "taken"){
					status.style.display = "block";
					status.innerHTML = "Invalid username format";
					btn.value = "Register";		  
					}else if(ajax.responseText == "characters"){
					status.style.display = "block";
					status.innerHTML = "Invalid email format";
					btn.value = "Register";	
					}
	        }
			}
        ajax.send("fullname"+f+"&username="+u+"&email="+e+"&password="+p);
	}
}