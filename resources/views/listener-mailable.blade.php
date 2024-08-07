<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <div>
          <div class="row justify-content-center">
            <h1 class="text-center">Listener Mailable!</h1>

            <div class="col-md-5 mt-3">
                <div class="mb-3">
                    <a href="{{ url('/') }}" class="btn btn-sm btn-danger">Back</a>
                </div>

                <form action="{{ route('listener.mailable.form') }}" method="POST">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
