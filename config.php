<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "jobs";
    
    // Create connection
    $conn = new mysqli($server, $user, $password, $database);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo"";
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $phone_no=$_POST['phone_no'];
        $sql ="INSERT INTO `user`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$phone_no')";
        if(mysqli_query($conn,$sql)){
            echo "Records inserted successfully.";
        }
        else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
    session_start();
    if(isset($_POST['Login'])){
        $email=$_POST['email1'];
        $password=$_POST['password1'];
        $query="SELECT * FROM `user` WHERE `email`='$email' AND `password`='$password'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
        if(mysqli_num_rows($result)==1){
            header("location:index.php");
        }
        else{
            $error='EmailID or Password is incorrect';
        }
    }
    if(isset($_POST['post'])){
        $cname=$_POST['cname'];
        $pos=$_POST['pos'];
        $Jdesc=$_POST['Jdesc'];
        $skills=$_POST['skills'];
        $CTC=$_POST['CTC'];
        $sql="INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
        if(mysqli_query($conn,$sql)){
            echo "New Job Posted";
        }
        else{
            echo "ERROR:Failed to post the job $sql. " . mysqli_error($conn);
        }
    }
    if(isset($_POST['applyjob'])){
        $name=$_POST['name'];
        $qual=$_POST['qual'];
        $apply=$_POST['apply'];
        $year=$_POST['year'];
        $sql="INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
        if(mysqli_query($conn,$sql)){
            echo "New Job Applied";
        }
        else{
            echo "ERROR:Failed to apply the job $sql. " . mysqli_error($conn);
        }
    }
    ?>