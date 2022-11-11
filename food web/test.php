<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div id="box1">
        hello
    </div>
    <div class="box" id="box">
        <span class="discount"></span>
        <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-share"></a>
            <a href="#" class="fas fa-eye"></a>
        </div>
        <img src="images/product-4.png" alt="">
        <h3>egg , rice , vagitable meal</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <div class="price"> 60tk <span> 65tk </span> </div>
        <div class="quantity">
            <span>quantity : </span>
            <input type="number" min="1" max="1000" value="1">
            <span> /plate </span>
        </div>
        <a href="test1.php" class="btn" onclick="passvalue()">add to cart</a>
    </div>
    <div id="div1"></div>
    <script>

function passvalue() {
    $(document).ready(function() {
      var MyDiv1 = document.getElementById("box1").innerHTML;
      localStorage.setItem("textvalue", MyDiv1.innerHTML);
  }

}

    </script>
</body>

</html>