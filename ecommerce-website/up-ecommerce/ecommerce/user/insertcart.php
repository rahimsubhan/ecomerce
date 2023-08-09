<?php
session_start();
$product_name = $_Post['PName'];
$product_price = $_Post['Pprice'];
$product_quantity = $_Post['PQauntity'];



if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();

}
if(isset($_post['addcart'])){
    $chcek_product= array_column($_SESSION['cart'],'productname');
    if (in_array($product_name,$chcek_product)){
        echo "
        <script>
        alert('product already added');
        window.location.href ='index.php';
        </script>
        ";

    }
    else{
        $_SESSION['cart'][] = array('productname' => $product_name,
        'productprice' =>
        $product_price,
        'productQuitity'=>
        $product_quantity );
        ;
        header("location:viewcart.php");


    }
}



?>
