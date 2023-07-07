document.addEventListener('DOMContentLoaded', genPassword);
document.getElementById("generateButton").addEventListener("click", genPassword);
document.getElementById("copyButton").addEventListener("click", copyPassword);

function genPassword() {
    var chars = "0123456789abcdefghijklmnopqrstuvwxyz!@#$%^&*()ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    var passwordLength = 32;
    var password = "";
    for (var i = 0; i <= passwordLength; i++) {
     var randomNumber = Math.floor(Math.random() * chars.length);
     password += chars.substring(randomNumber, randomNumber +1);
   }
   document.getElementById("password").value = password;
 }

 function copyPassword() {
  var copyText = document.getElementById("password");
  copyText.select();
  document.execCommand("copy");  
}
