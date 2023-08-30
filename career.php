<?php include 'config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Career</title>
    <style>
        .navbar{
    overflow:hidden;
    position:fixed;
    top:0;
    width:100%;
    background: color #333;
  }
  h1,p{
    color:#fff;
  }
  .jobs{
    border:1px solid black;
    box-shadow:5px 5px 4px 5px grey;
    margin:10px;
    padding:10px;
  }
    </style>
</head>
<body style="margin:0; padding:0;">
   <div class="row mr-0">
    <div class="col-12">
    <div class="jumbotron jumbotron-fluid" style="background-image:url('backgroundImage1.jpg'); background-size:cover; height:200px;">
  <div class="container">
    <h1 class="display-4">Job Portal</h1>
    <p class="lead">Best Jobs available matching your skills</p>
  </div>
</div>
    </div>
   </div>
<div class="row">
    <?php
     $server = "localhost";
     $user = "root";
     $password = "";
     $database = "jobs";
     $conn = new mysqli($server, $user, $password, $database);
    $sql="SELECT `cname`,`position`,`Jdesc`,`skills`,`CTC` from `jobs`";
    $result=mysqli_query($conn,$sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo'
            <div class="col-md-4">
            <div class="jobs">
            <h3 style="text-align:center;">'.$rows['position'].'</h3>
            <h4 style="text-align:center;">'.$rows['cname'].'</h4>
            <p style="color:black; text-align:justify;">'.$rows['Jdesc'].'</p>
            <p style="color:black;"><b>Skills Required: </b>'.$rows['skills'].'</p>
            <p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Apply</button>
            </div>
            </div>';
        }
    }
    ?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Applying For jobs</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form action="config.php" method="POST">
         <div class="mb-3">
           <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="" name="name">
          </div>
          <div class="mb-3">
           <label for="ApplyFor" class="col-form-label">Applying For:</label>
            <input type="text" class="form-control" id="" name="apply">
          </div>
          <div class="mb-3">
           <label for="Qual" class="col-form-label">Qualification:</label>
            <input type="text" class="form-control" id="" name="qual">
          </div>
          <div class="mb-3">
           <label for="Year" class="col-form-label">Year Passout:</label>
            <input type="text" class="form-control" id="" name="year">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="applyjob">Apply</button>
        </div>
      </form>
      </div>
    </div>
  </div> 
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>