function myReset()
{
  document.getElementById("username").value="";
  document.getElementById("password").value="";
  document.getElementById("n_num").value="0";
  document.getElementById("d_num").value="0";
  document.getElementById("s_num").value="0";
  document.getElementById("r1").checked();

}
function validateForm() {
  var x = document.forms["myForm"]["username"].value;
  var y = document.forms["myForm"]["password"].value;
  var n = document.forms["myForm"]["necklace"].value;
  var d = document.forms["myForm"]["dress"].value;
  var s = document.forms["myForm"]["shirt"].value;
  if (x == "" || y=="" || n=="" || d=="" || s=="" || parseInt(n)<0 || parseInt(d)<0 || parseInt(s)<0) {
    alert("Blank or negative values are not accepted. Please try again.");
    return false;
  }

}
