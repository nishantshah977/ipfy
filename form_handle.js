function generate_tracking_code(){
const char = "Aa1Bb2Cc3Dd4Ee5Ff6Gg7Hh8Ii9Jj10Kk11Ll12Mm13Nn14Oo15Pp16Qq17Rr18Ss19Tt20Uu21Vv22Ww23Xx24Yy25Zz26";
let output="";

for(i=1;i<=4;i++){
    var random = char.charAt(Math.floor(Math.random() *  char.length));
    output += random;
}
document.getElementById("tracking_code").value = output;
return code;
}
    

let form = document.querySelector("form");

form.addEventListener("submit",(e)=>{
    e.preventDefault();
   
 let tracking_code =  generate_tracking_code();
   
  const formData = new FormData(form);  
  // Create a new fetch request
  fetch('/form_handle.php', {
    method: 'POST',
    body: formData,
  })
  .then(response => {
    // Handle the response
    document.write(`/collect.php?code=${tracking_code} \n \n /retrieve.php?code=${tracking_code}`);
  })
  .catch(error => {
    // Handle errors
    document.write(error);
  });
})

