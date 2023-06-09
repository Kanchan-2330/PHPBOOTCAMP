<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>

    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Feedback Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">HOME</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4 border bg-light py-4 px-4 rounded" >
<form action="submit.php" method="post">
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="feedback" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Feedback</label>
</div><br>
<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">Submit</button>
  
</div>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>