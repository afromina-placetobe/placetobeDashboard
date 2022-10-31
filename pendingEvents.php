
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
        <link style type="text/css" href="./CSS/index.css" rel="styleSheet"/>
    </head>
    
    <body>
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
        <button type="button" class="btn btn-link btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
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
        <button type="button" class="btn btn-link btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
          Edit
        </button>
      </td>
    </tr>
  </tbody>
</table>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Event Detail</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container imgcontainer" >
        <img src="./asset/portuguese.jpg" width="70%" height="70%"/>
        </div>
        <br/>
        <p class="mt-5 "><span class="text-warning fw-bold" >Event Name:</span> <span >Hiking trip to wenchi</span></p>
        <p><span class="text-warning fw-bold" >Event Status: </span><span>Approved</span></p>
        <p><span class="text-warning fw-bold" >Event Description: </span><span>jahfuhualkgkchkuruey4r8iushfcbaikuhelrueyri3wyrl83yhfbajfgauetr</span></p>
        <p><span class="text-warning fw-bold" >Start Date:</span> <span>10/31/2022</span></p>
        <p><span class="text-warning fw-bold" >End Date: </span><span>10/31/2022</span></p>
        <p><span class="text-warning fw-bold" >Start Time: </span><span>10:00 am</span></p>
        <p><span class="text-warning fw-bold" >End Time: </span><span>04:00 pm</span></p>
        <p><span class="text-warning fw-bold" >Category: </span><span>Travel</span></p>
        <p><span class="text-warning fw-bold" >Event Organizer: </span><span>Enqu Hiking</span></p>
        <p><span class="text-warning fw-bold" >Event Address: </span><span>Wonchi</span></p>
        <p><span class="text-warning fw-bold" >Event Entrance Fee: </span><span>1000 birr</span></p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Approve</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Disapprove</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>