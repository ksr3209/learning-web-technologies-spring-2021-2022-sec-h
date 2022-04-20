function loginValidate() {
    var type = document.getElementById('usertype').value;
    var id = document.getElementById('username').value;
	  var pass = document.getElementById('password').value;
	  if ((type == null || type == "") &&(id == null || id == "") && (pass == null || pass == "")){
        alert("ID and Pasword both must be filled out");
        return false;
    }
    else if (id == null || id == "") {
        alert("ID must be filled out");
        return false;
    }
	  else if(pass == null || pass == ""){
        alert("Password must be filled out");
        return false;
    }
	  else{
		    return true;
	}
}
