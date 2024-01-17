<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login Page</title>
</head>
<body>
    <h1>Simple Login Page By Laravel</h1>
    <form action="{{ route('reallogin') }}" method="post">
        @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger">{{ Session::get('error') }}</div>
        @endif
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control" placeholder="Enter username" name="name">
            <span class="text-danger">@error('name') {{ $message }}@enderror</span>

          </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          <span class="text-danger">@error('password') {{ $message }}@enderror</span>
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>