<?php
session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM tbl_users WHERE userID=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title><?php echo $row['userEmail']; ?></title>
        <!-- Bootstrap -->
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
    <link rel="stylesheet" href="css/style.css">

        
    </head>
    
    <body>
        
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Member Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
    <ul class="navbar-nav mr-0">
      
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <?php echo $row['userEmail']; ?> <i class="caret"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <a tabindex="-1" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
        
          <div class="container" id="std-reg">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-8 offset-md-3 align-self-center">
                
               <div class="card align">
                <div class="card-header">
                   <h5>Student Registration</h5>
                </div>  
                <div class="card-body">
                    
                   <form id="stud-form" name="stud-form" action="submit.php" method="post">
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Student Id</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-id" name="std-id" placeholder="Id" >
                </div>
              </div>
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Student Name</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-name" name="std-name" placeholder="Name" >
                </div>
              </div>
                
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Student Age</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-age" name="std-age" placeholder="Age" >
                </div>
              </div>
                
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Student Gender</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-gender" name="std-gender" placeholder="Gender" >
                </div>
              </div>
                
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Registration Number</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-number" name="std-number" placeholder="Registration Number" >
                </div>
              </div>
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Street Name</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-street" name="std-street" placeholder="Street Name" >
                </div>
              </div>
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">City</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-city" name="std-city" placeholder="City" >
                </div>
              </div>
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Country</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-country" name="std-country" placeholder="Country" >
                </div>
              </div>
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Poastal Code</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-poastal" name="std-poastal" placeholder="Postal Code" >
                </div>
              </div>
                
             <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Department</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-department" name="std-department" placeholder="Department" >
                </div>
              </div>
                
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Semester</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-semester" name="std-semester" placeholder="Semester" >
                </div>
              </div>
                
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Major Subject</label>
                <div class="col-auto">
                  <input type="text" class="form-control" id="std-major" name="std-major" placeholder="Major Subject" >
                </div>
              </div>
                       
                       
             <div class="form-group row">
                <div class="col-auto">
                  <button type="submit" class="btn btn-success" name="submit">Submit</button>
                </div>
                 <div class="col-auto">
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
                
            </form>
                </div>
                </div> 
                
            
            </div>
        </div>  
    </div>

        
         <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
    </body>

</html>