<?php include "phpqrcode/qrlib.php"; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>@media (max-width: 580px){.qr{padding-left: 35%;}}</style>

</head>


<body>
<div class="qr col-sm-3 mx-auto  mt-5">
<?php 

if(isset($_POST['generat'])){
    
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['addres'])){
    $imgpath = 'img/';
    $file = $imgpath.uniqid().".png";
    $data ="Name: ". $_POST['name']. "\n";
    $data .="E-Mail: ". $_POST['email']. "\n";
    $data .="Phone: ". $_POST['phone']. "\n";
    $data .="Addres: ". $_POST['addres'];
    //QRcode::png('data' , name , 'size' , width , height);
   QRcode::png($data , $file , 'L' , 6 , 0);
   
echo "<img src='".$file."' class='mx-auto'> <br>";
echo "<a href='".$file."' class=' mt-2 btn btn-primary' download> Download QRCODE </a>";
}else{
    echo '<h3>Fields Is empty</h3>';
}

}

?>

</div>


</body>

</html>



