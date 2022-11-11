
const len = document.querySelectorAll("button").length;
var  buttonText = document.querySelector('button');
console.log(buttonText);

var p = document.querySelector('p');
var ac = document.querySelector('.ac');
var clear = document.querySelector('.clear');

var text ="";
var input;


for(let i = 0 ; i<len; i++){
  document.querySelectorAll(".input")[i].addEventListener("click",function(){
      ac.addEventListener('click',() =>{
        input = "";
        text = ""
        p.innerHTML = input;
      })

      input = text + this.innerHTML;
      p.innerHTML = input;
      text = input;

});

clear.addEventListener('click',() =>{
   text =  text.slice(0, -1);
  p.innerHTML = text;
})

}



console.log(input)

