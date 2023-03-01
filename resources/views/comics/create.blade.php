<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5">
<form action="" method="POST" class="row g-3">
<div class="col-md-6">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>
  <div class="col-md-6">
    <label for="series" class="form-label">Serie</label>
    <input type="text" class="form-control" id="series" name="series" required>
  </div>
  <div class="col-md-9">
    <label for="thumb" class="form-label">Thumbnail</label>
    <input type="url" class="form-control" id="thumb" name="thumb">
  </div>
  <div class="col-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="1.00" required>
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
  </div>
  <div class="col-md-6">
    <label for="sale_date" class="form-label">Data di vendita</label>
    <input type="date" class="form-control" id="sale_date" name="sale_date">
  </div>
  <div class="col-md-2">
    <label for="type" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Carica</button>
  </div>
</form>
</div>


</body>
</html>

