<?php

  require_once('koneksi.php');
  global $koneksi;

  if (isset($_POST['submit'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT into message (name,email,message) VALUES ('$name','$email','$message')";
      mysqli_query($koneksi,$query);
 
  
  }
 
  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <title>RIZALDO | WEB PORTO</title>
  </head>
  <body id="home">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">RIZALDO ABDULRACHMAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contacts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      </div>
    </div>
  </div>
</nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center">
      <img src="assets/profile.jpg" alt="profile" width="200" class="rounded-circle img-thumbnail">
      <h1 class="display-4 fw-normal">Rizaldo Abdulrachman</h1>
      <p class="lead fw-normal">IT Student</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="white" fill-opacity="1" d="M0,0L26.7,26.7C53.3,53,107,107,160,112C213.3,117,267,75,320,53.3C373.3,32,427,32,480,26.7C533.3,21,587,11,640,48C693.3,85,747,171,800,186.7C853.3,203,907,149,960,138.7C1013.3,128,1067,160,1120,165.3C1173.3,171,1227,149,1280,165.3C1333.3,181,1387,235,1413,261.3L1440,288L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path></svg>
    </section>
    <br>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container ">
        <div class="row mb-">
          <div class="col text-center"><h2>About Me</h2></div>
          <div class="row justify-content-center fs-5 mt-3">
            <div class="col-md-4">I'm a Informatics Engineering Students able to work in team and have a good communication skill. I consider English as my second language. </div>
            <div class="col-md-4">I'm also have a Website Developer Team Called Teratics, where we help people making a website or solve their website problem. </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,160L0,288L84.7,288L84.7,224L169.4,224L169.4,32L254.1,32L254.1,160L338.8,160L338.8,160L423.5,160L423.5,192L508.2,192L508.2,96L592.9,96L592.9,192L677.6,192L677.6,160L762.4,160L762.4,96L847.1,96L847.1,224L931.8,224L931.8,256L1016.5,256L1016.5,96L1101.2,96L1101.2,224L1185.9,224L1185.9,96L1270.6,96L1270.6,192L1355.3,192L1355.3,160L1440,160L1440,320L1355.3,320L1355.3,320L1270.6,320L1270.6,320L1185.9,320L1185.9,320L1101.2,320L1101.2,320L1016.5,320L1016.5,320L931.8,320L931.8,320L847.1,320L847.1,320L762.4,320L762.4,320L677.6,320L677.6,320L592.9,320L592.9,320L508.2,320L508.2,320L423.5,320L423.5,320L338.8,320L338.8,320L254.1,320L254.1,320L169.4,320L169.4,320L84.7,320L84.7,320L0,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->


    <!-- Projects -->
      <section id="projects" >
        <div class="container">
          <div class="row text-center">
            <div class="col">
              <h2>My Projects</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card" >
                <img src="assets/unreal.jpg" class="card-img-top" alt="Unreal Project">
                <div class="card-body">
                  <p class="card-text">I am involved in Unrealclub shopping website projects as a Projects Manager and Front-end programmer</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card" >
                <img src="assets/armilarako.PNG" class="card-img-top" alt="Unreal Project">
                <div class="card-body">
                  <p class="card-text">Maintaining armilarako web as a Front-end programmer in Aug 2020</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card" >
                <img src="assets/ServerRoomMonitoring.jpg" class="card-img-top" alt="Unreal Project">
                <div class="card-body">
                  <p class="card-text">Involved in IOT PROJECTS Called Server Room Monitoring and Warning System  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,128L21.8,149.3C43.6,171,87,213,131,208C174.5,203,218,149,262,117.3C305.5,85,349,75,393,69.3C436.4,64,480,64,524,64C567.3,64,611,64,655,101.3C698.2,139,742,213,785,208C829.1,203,873,117,916,90.7C960,64,1004,96,1047,117.3C1090.9,139,1135,149,1178,170.7C1221.8,192,1265,224,1309,224C1352.7,224,1396,192,1418,176L1440,160L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
      </section>
    <!-- Akhir Projects -->


  

    <!-- Contact -->
    <!-- <?php
    // pre_r($_POST);
    ?> -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="name" aria-describedby="name" value="">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" value="">
              </div>
              <div class="mb-3">
                <textarea class="form-control" name="message" placeholder="Leave a message here" id="Message" style="height: 100px"></textarea>
              </div>
              <button type="submit" name="submit" class="btn btn-primary" value="Submit">Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffc107" fill-opacity="1" d="M0,64L21.8,69.3C43.6,75,87,85,131,117.3C174.5,149,218,203,262,218.7C305.5,235,349,213,393,208C436.4,203,480,213,524,181.3C567.3,149,611,75,655,85.3C698.2,96,742,192,785,213.3C829.1,235,873,181,916,181.3C960,181,1004,235,1047,234.7C1090.9,235,1135,181,1178,144C1221.8,107,1265,85,1309,80C1352.7,75,1396,85,1418,90.7L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="bg-warning text-black text-center pb-5">
      <p>Created with passion by <a class="link-dark fw-bold" href="https://github.com/RizaldoAR">Rizaldo Abdulrachman</a></p>
    </footer>
    <!-- Akhir Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>

  <?php
    require_once "koneksi.php";
    global $koneksi;
    echo "ADALAH";
    if(isset($_POST['submit'])){
      mysqli_query($koneksi, "insert into message set
        Full Name = '$_POST[fullname]',
        Email = '$_POST[email]',
        Message = '$_POST[message]'");

      echo "Message has been sent";
    }
    
    // function pre_r( $array ) {
    //   echo '<pre>';
    //   print_r($array);
    //   echo '</pre>';
    // }
    // 
    
    ?>
</html>