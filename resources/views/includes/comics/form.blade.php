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
@if($comic->exists)
<form action="{{ route('comics.update', $comic) }}" method="POST" class="row g-3">
@method('PUT')
@else
<form action="{{ route('comics.store') }}" method="POST" class="row g-3">
@endif
@csrf
<div class="col-md-6">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
  </div>
  <div class="col-md-6">
    <label for="series" class="form-label">Serie</label>
    <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}" required>
  </div>
  <div class="col-md-9">
    <label for="thumb" class="form-label">Thumbnail</label>
    <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>
  </div>
  <div class="col-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}" required>
  </div>
  <div class="col-12">
    <label for="description" class="form-label">Descrizione</label>
    <textarea class="form-control" name="description" id="description" value="{{ old('description', $comic->description) }}" required></textarea>
  </div>
  <div class="col-md-6">
    <label for="sale_date" class="form-label">Data di vendita</label>
    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
  </div>
  <div class="col-md-2">
    <label for="type" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="type" name="type" value="{{ old('type', $comic->type) }}"required>
  </div>
  <div class="col-12">
  @if($comic->exists)
    <button type="submit" class="btn btn-primary">SAVE</button>
  @else
  <div class="col-12">
    <button type="submit" class="btn btn-primary">UPLOAD</button>
  </div>
  @endif
  </div>
</form>
</div>


</body>
</html>