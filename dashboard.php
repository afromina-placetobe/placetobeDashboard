<!doctype html>
<html lang="en">
    <head>
        <title>Place to be Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/app/assets/css/app.css" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link style type="text/css" href="./CSS/index.css" rel="styleSheet"/>
    </head>
    
    <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
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

<div class="container bg-warning">
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="#"
          class="list-group-item list-group-item-action py-2 ripple"
          aria-current="true"
        >
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple ">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Events</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Feedback</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-chart-line fa-fw me-3"></i><span>Gallery</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>Featured Events</span>
        </a>
      </div>
    </div>
  </nav>
</div>

<!--main activity section -->
<div class="container">
<div class="row bg-info" >status counts</div>
<div class="row ">
    <div class="col-sm-8 bg-success">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Events</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Upcoming</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
    <!-- Events Tab-->

  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Event Name</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Status</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  
 
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
   
 
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
  </div>

  <!--upcoming event-->

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Event Name</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Status</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  
 
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
  </div>

  <!--? event-->
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Event Name</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Status</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  
 
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
      <p class="fw-normal mb-1">10-30-2022</p>
      </td>
      <td>
      <span class="badge badge-success rounded-pill d-inline">Active</span>
      <p>Approved</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
</div>


<div class="col-sm-4 bg-secondary">
    <p class="fw-bolder align-middle fs-3">Pending Events</p>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Event Name</th>
      <th>Published Date</th>
      <th>Edit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div class="ms-3">
            <p class="fw-bold mb-1">Hiing trip to wenchi</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">10-29-2022</p>
      </td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>

</div>
<!-- users-->
<div class="container-fluid bg-success">
sfdhgs
</div>
    </body>
</html>