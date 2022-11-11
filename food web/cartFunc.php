
<?php



function cartFunction()
{
    echo "hello ";
    include "db_connector.php";

    if (isset($_SESSION['username'])) {

      $email = $_SESSION['email'];
        echo $_SESSION['email']." ";
        $name = $_SESSION['username'];
        echo "hello ";
        echo $name." ";
        $q =  "SELECT * FROM orders WHERE email = '$email'";
        $q1 = mysqli_query($connect, $q);

        $orderSatus = 1;
        if(!is_null(mysqli_fetch_array($q1))){
            $orderSatus = 0;
        }
        
        if($orderSatus == 1){
        if (isset($_POST['submit'])) {
            $phoneStatus = 0;
            $quantity = $_POST['quantity'];
            $itemName =  $_POST['itemName'];
            $totalPrice = $quantity * $_POST['price'];
            $phone = $_POST['mobile'];
            $items = $itemName . " quantity = " . $quantity . " total price =  " . $totalPrice;
    

            if (strlen($phone) != 11 || !str_contains(substr($phone, 0, 2), '01')) {

                $phoneStatus = 1;
                echo "invalid phone number";
            }

            if($phoneStatus != 1 ) {
                $querry =  "INSERT INTO orders(email, items, phone ) VALUES('$email','$items','$phone') ";
              
                $go = mysqli_query($connect, $querry);
    
                if(!$go){
                    echo "error ocurs!";
    
                }else{
                    echo "order has been placed";
                    exit();
                }
            }
           
        }
    }else{
        echo "<br><h3>can't order, your previous order isnt delevered yet..<h3>";
    }
}

}

?>