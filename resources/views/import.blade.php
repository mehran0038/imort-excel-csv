<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel 11 Import Excel and CSV File To Database Example Tutorial - Tutsmake.com</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .card-header h2 {
      margin-bottom: 0;
    }
  </style>
</head>
<body>
<div class="container mt-5">
  @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif
  <div class="card">
    <div class="card-header">
      <h2 class="float-left">Import Excel, CSV File in database using Laravel 11 - Tutsmake.com</h2>
    </div>
    <div class="card-body">
      <form id="excel-csv-import-form" method="POST" action="{{ url('import') }}" accept-charset="utf-8" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="file" class="form-control" name="file" placeholder="Choose file">
            </div>
            @error('file')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>