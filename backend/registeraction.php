<?php
$randomnumber=rand();
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$status = 'non';

include 'koneksi.php';


// Check if username already exists.
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$checkrows = mysqli_num_rows($result);

if($checkrows > 0) {
    $output = array(
        'status'		    =>	'error',
    );
} else {
    if ($_POST['pass']==$_POST['pass1'] ) {
 $sql = "INSERT INTO users (name, 
                          email, 
                          pass,status,date) 
                    VALUES('$name', 
                        '$email',
                        '$pass','$status', NOW())";
    if(mysqli_query($conn, $sql)){
        $output = array(
            'status'        => 'success',
            'success'       =>  'New user successfully created.'
        );
            header("location:loginsuccess.php");

    }
}else {
echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
}
   
}
?>