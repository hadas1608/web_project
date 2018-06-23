<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RUBY</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/creative.min.css" rel="stylesheet">
  <link href="css/special.css" rel="stylesheet">


</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#cart">shopping cart</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.html#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="">Catalog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.html#stores">Find Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="index.html#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<section class="p-0" id="catalog">
  <div class="container">
    <br><br><br>
    <h2 class="section-heading text-center">Our Jewels</h2>
    <hr class="my-4">

    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('ring')"> Rings</button>
      <button class="btn" onclick="filterSelection('bracelet')"> Bracelets</button>
      <button class="btn" onclick="filterSelection('necklace')"> Necklaces</button>
    </div>
    <br>
    <div id="Color">
      <button class="btn" onclick="filterSelection('Gold')"> Gold</button>
      <button class="btn" onclick="filterSelection('Silver')"> Silver</button>
    </div>
    <br>
    <div id="Price">
      <button class="btn" onclick="filterSelection('550')"> Up to 550 </button>
      <button class="btn" onclick="filterSelection('1000')"> Up to 1000</button>
      <button class="btn" onclick="filterSelection('1500')"> Up to 1500</button>
    </div>

    <?php
        $servername = "localhost";
        $username = "id6282262_ruby";
        $password = "Ruby!234";
        $dbname = "id6282262_jewels";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection error: $conn->connection_error");
        }

        $sql = 'SELECT * FROM Jewels;';
        $result = $conn->query($sql);
        if (is_object($result)  && $result->num_rows > 0)
        {
          echo '<div class="row">';
          while ($row = $result->fetch_assoc())
          {
              echo '<div class="col-lg-3 col-md-6 text-center">
                <div class="filterDiv '. $row['type']. ' ' . $row['Material'] .'">
                  <div class="service-box mt-5 mx-auto">
                    <a href="product.php?name=' .$row['name']. '">
                      <img class="img-fluid" src="data:image/jpeg;base64,' .base64_encode($row['picture']). '>
                    </a>
                    <h4 class="mb-3">' .$row['name']. '&nbsp' .$row['type']. '</h4>
                    <p class="text-muted mb-0">' .$row['price']. '</p>
                  </div>
                </div>
              </div>';
          }
          echo '</div>';
        }
        else
        {
          echo '0 results';
        }
        $conn->close();
      ?>
  </div>
</section>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>
<script src="js/special.js"></script>


</body>

</html>
