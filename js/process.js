function run(){
var id = _("sch-id").value;
var sc = _("class").value;
var t = _("term").value;
var p = _("pin").value;
var status = _("status");
var btn  = _("r_cek_but");
var result  = _("rck");
var show  = _("this");
if(id == "" || sc == "Select Class" || t == "Select Term" || p == "" ){
status.style.display = "block";
status.innerHTML = "Please fill out your details";
}else{
       btn.value = "Checking ...";
       var ajax = ajaxObj("POST", "config/checkfunc.php");
        ajax.onreadystatechange = function() {
        if(ajaxReturn(ajax) == true){
      		if (ajax.responseText == "no"){
			status.style.display = "block";
            status.innerHTML = "Please fill out your details";
            btn.value = "Check";		   
            }else if (ajax.responseText == "bad reg"){
			status.style.display = "block";
            status.innerHTML = "Reg number must contain only Alphabets, Numbers and Forward slashes";
            btn.value = "Check";		  
			}else if (ajax.responseText == "Invalid pin format"){
			status.style.display = "block";
            status.innerHTML = ajax.responseText;
            btn.value = "Check";		  
			}else if (ajax.responseText == "Incorrect pin"){
			status.style.display = "block";
            status.innerHTML = ajax.responseText;
            btn.value = "Check";		  
			}else if (ajax.responseText == "wrong"){
			status.style.display = "block";
            status.innerHTML = "Pin has already been used";
            btn.value = "Check";		  
			}else{
			result.style.display = "block";
            result.innerHTML = ajax.responseText;
			window.print();
			}
        }
     }
  ajax.send("reg="+id+"&sclass="+sc+"&sterm="+t+"&scratchpin="+p);
  }
}