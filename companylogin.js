function validate()
{
  var email=document.getElementById('email').value;
  var password=document.getElementById('password').value;
  var pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  if(email.match(pattern) && password=="company")
  {
    alert("login succesfully");
    return false;
  }
  else
  {
      alert("login failed");
  }
}
