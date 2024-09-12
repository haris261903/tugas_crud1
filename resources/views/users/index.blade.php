<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-5">
      <div class="row">
        <div class="col-12">
          <h3 class="mb-4">Data Tabel User</h3>
          <a href="{{ route('users.create') }}" class="btn btn-success mb-3">ADD</a>
          <table class="table table-bordered table-hover">
              <thead class="table-primary">
                  <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Proses</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($users as $data)
                  <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data->name }}</td>
                      <td>{{ $data->email }}</td>
                      <td>
                          <a href="{{ route('users.edit', $data->id) }}" class="btn btn-info btn-sm">Edit</a>
                          <form action="{{ route('users.destroy', $data->id) }}" method="POST" style="display:inline-block;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                          </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
