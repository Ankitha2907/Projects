
<?php include 'header.php' ?>
<?php include 'config.php'?>
<!-- Page content -->
<div class="content">
<p>
  <!--<a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href-->
  </a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
<form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="ExampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="ExampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea class="form-control" id="JobDesc" cols="30" rows="10" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="post">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "jobs";
    $conn = new mysqli($server, $user, $password, $database);
    $sql="SELECT `cname`,`position`,`skills`,`CTC` from `jobs`";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo'
            <tbody>
            <tr>
                  <td>'.++$i.'</td>
                  <td>'.$row['cname'].'</td>
                  <td>'.$row['position'].'</td>
                  <td>'.$row['CTC'].'</td>;
            </tr>
            </tbody>';
            
        }}
        else{
            echo"";
        }
   
    ?>
</table>
</div>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>