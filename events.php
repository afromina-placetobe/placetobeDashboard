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
<div class="row tab-pane tab-content" role="tabpanel" id="event">
    <div class="col-sm-8 ">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Happening</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Upcoming</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">This week Events</button>
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
</body>
</html>