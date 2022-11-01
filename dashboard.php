<!doctype html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/app/assets/css/app.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="./js/main.js" rel="javascript"></script>
        <link style type="text/css" href="./CSS/index.css" rel="styleSheet"/>
    </head>
    
    <body>

    <nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="./asset/Favicon.png" alt="logo" width="50px" height="50px" class="d-inline-block align-text-top">
      Place to be Dashboard
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--left navigation bar-->
<div class="row tab-pane tab-content" role="tabpanel" id="event">
<div class="container ">
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="event-tab" onClick="" data-bs-toggle="tab" data-bs-target="#event" type="button" role="tab" aria-controls="event" aria-selected="false">Events</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="feedback-tab" onClick="" data-bs-toggle="tab" data-bs-target="#feedback" type="button" role="tab" aria-controls="feedback" aria-selected="false">Feedback</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="gallery-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="gallery" aria-selected="false">Gallery</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="featuredEvent-tab" data-bs-toggle="tab" data-bs-target="#featuredEvent" type="button" role="tab" aria-controls="featuredEvent" aria-selected="false">Featured Event</button>
  </li>
 </ul>
      </div>
      
    </div>
  </nav>
</div>

<!--main activity section -->
<div class="tab-content" id="myTabContent">


<!--close feedback-->
<!--the big close for page-->
</div >
<div id="hiddenElementContainer">
<div class="tab-pane fade show active" id="event" role="tabpanel" aria-labelledby="event-tab">
<div class="container ">
<div class="row bg-info" >status counts</div>
<?php 
include('events.php');
?>
<!--events tab-->
</div>
<!--pending events-->
<div class="col-sm-4 ">
    <p class="fw-bolder align-middle fs-3" id ="pending">Pending Events</p>
    <?php 
include('pendingEvents.php');
?>
</div>
<!-- users-->
<div class="container ">
<?php 
include('users.php');
?>
</div>
</div>
<!--closing the first event tab-->
</div>

<!--second feedback -->

<div class="tab-pane fade show active" id="feedback" role="tabpanel" aria-labelledby="feedback-tab" >
<?php 
include('feedback.php');
?>
<div>
</div>
    </body>
</html>