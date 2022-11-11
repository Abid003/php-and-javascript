function addToCart(){

  var flag = 1;
   

  if(document.querySelector("#cart_notif").value != flag){
    alert("added to cart");
    document.querySelector("#cart_notif").innerHTML =flag;
  }else{
   
    alert("cart already full");
  }

}


  function passvalue() {
    $(document).ready(function() {
      var MyDiv1 = document.getElementById("box1").innerHTML;
      localStorage.setItem("textvalue", MyDiv1.innerHTML);
  }

  



