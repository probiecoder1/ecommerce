<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>
    Create Ad
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<?php include_once "header.php"; ?>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
          <li>
           <a class="nav-link" href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
           </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="bg-success p-2" style="--bs-bg-opacity: .35;">
  <div class="container">
  <div class="box">
    <section class="form create-ad">
      <header>Add Product Ad</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Product Name</label>
            <input type="text" name="productname" placeholder="Ad Title" required>
          </div>
        </div>
        <div class="name-details">
          <div class="field input">
            <label>Product Details</label>
            <input type="text" name="details" placeholder="About Product" required>
          </div>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Create Ad">
        </div>
      </form>
    </section>
  </div>
  </div>
</div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/additem.js"></script>
</body>
</html>

