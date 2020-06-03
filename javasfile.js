function myFunction() {
        document.getElementById("btn").innerHTML = "It clicked!";
}

function myFunction2() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
}
function CheckPassword() { 
	var text;
	if (confirm("Password NOT correct!! Try again")) {
		text = "You pressed OK";
	} else {
		text = "You pressed Cancel!"
	}
  }

  function myFunction3() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}