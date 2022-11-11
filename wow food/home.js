function addToCart(){

  var flag = 1;
   

  if(document.querySelector("#cart_notif").value != flag){
    document.querySelector("#cart_notif").innerHTML =flag;
  }else{
   
    alert("cart already full");
  }

}


  function passvalue() {

      var MyDiv1 = document.getElementById("box1").innerHTML;
      localStorage.setItem("textvalue", MyDiv1.innerHTML);
  
}


  
