  <?php
  $id = $_POST['user_id'];
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $mac = $_POST['mac'];
        $status = $_POST['status'];
        $password = sha1($_POST['password']);

        if($_POST['password'] == ""){

            $sql = "UPDATE tbl_admin SET fullname = '$fullname',
                              username = '$username',
                              email = '$email',
                              gender = '$gender',
                              mac = '$mac',
                              status = '$status'
                              WHERE id = '$id'";

        } else {

            $sql = "UPDATE tbl_admin SET fullname = '$fullname',
                              username = '$username',
                              email = '$email',
                              gender = '$gender',
                              status = '$status',
                              password ='$password'
                              mac = '$mac',
                              WHERE id = '$id'";
        }

        if(mysqli_query($conn, $sql)){

            $output = array(
                'status'        => 'success',
                'success'		=>	'User has been updated successfully.',
            );

        }else{
            $output = array(
                'status'        => 'error'
            );
        }

        echo json_encode($output);
        ?>