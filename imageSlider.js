

var photos = ["img/1.png","img/2.png","img/3.png"];
var imgTag = document.querySelector('img');

var count = 0;

p

function prev(){
    count--;
    if(count <0){
        count = photos.length()-1;
        imgTag.src = photos[count];
        document.getElementById("demo").innerHTML = count;
    }else{
        imgTag.src = photos[count];
        document.getElementById("demo").innerHTML = count;
    }
}

function next(){
    count++;
    if(count >= photos.length()){
        count = 0;
        imgTag.src = photos[count];
        document.getElementById("demo").innerHTML = count;
    }else{
        imgTag.src = photos[count];
        document.getElementById("demo").innerHTML = count;
    }
   
}