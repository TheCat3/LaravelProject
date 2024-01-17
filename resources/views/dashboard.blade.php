<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dash Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">logout</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td><a href="logout" >logout</a></td>
          </tr>

          <div class="alert alert-primary" role="alert">
            <a href="#" class="alert-link"></a>. This Is a laravel example of login and sign up page
          </div>
</body>
</html>