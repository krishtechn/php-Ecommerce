<?Php 

$localhost = "localhost";
$username = "root";
$password = "";
$database = "ecommerce";

$con = mysqli_connect($localhost,$username,$password,$database);

if($con){
    echo "connected success";
}

?>