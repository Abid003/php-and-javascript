<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="DIV1">
     <h2>Some content goes here.</h2> 

    </div>
    
    <div id="DIV2">
    </div>
    <script type="text/javascript">

$(document).ready(function() {
    var MyDiv2 = document.getElementById('DIV2');
   
   MyDiv2.innerHTML =  localStorage.getItem("textvalue");
  }

    
    </script>
    </body>
</html>