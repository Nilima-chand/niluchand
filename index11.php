<?php
  $insert = false;
   if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
   
    if(!$con){
      die("connection to this database failed due to". mysqli_connect_error());
    }
    //echo "success connecting to the db";
    $name = $_POST['name']; 
    $gender = $_POST['gender']; 
    $age = $_POST['age'];   
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `icoder`.`icoder` ( `name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ( '".$name."', '".$age."', '".$gender."', '".$email."', '".$phone."','".$other."')";
    //echo "$sql";

    if($con->query($sql) == true){
       //echo "Successfully inserted";
    
       $insert = true;
    }
    else{
      echo "ERROR: $sql <br> $con->error";
      
    }

    $con->close(); 
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="style111.css">
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">iCoder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="boot2.html">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact1.html">Contact us</a>
                    </li>
                   
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <img class="bg" src="b4.jpg" alt="Icoder form">
    <div class="container">
        <h1>Welcome to iCoder Registration Form</h1>
        <p>Enter you details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert == true){
         echo "<p class='submitmsg'>thanks for submitting your form.we are happy to see your joining us</p>";
        }
        ?>
    <form action="index11.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone" >
        <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information">
        </textarea>
         <button class="btn">submit</button>
         
    </div>
    </form> 

    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2022–2023 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
        crossorigin="anonymous"></script>
</body>

</html>



