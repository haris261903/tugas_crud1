<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h3 class="mb-4">Edit Users</h3>
          <form action="{{ route('users.update', $cari->id) }}" method="POST">
              @csrf
              @method("PUT")
              <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ $cari->name }}">
                  @error('name')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="{{ $cari->email }}">
                  @error('email')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
                  @error('password')
                      <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
              </div>
              <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
