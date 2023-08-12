<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @auth

          <p>Congrates!!. You have logged in successfully</p>
          <form action="/logout" method="post">
              @csrf
              <button class="btn btn-secondary">Logout</button>
          </form>
    @else
            <div class="container mt-5 border p-3">
                <h2 class="text-center">Register</h2>
                <form action="/register" method="POST">
                @csrf 
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                        <label>Name</label>
                        <input name="name" type="text" class="form-control">
                        </div>
                        <div class="col-lg-12 mb-3">
                        <label>Email</label>
                        <input name="email" type="text" class="form-control">
                        </div>
                        <div class="col-lg-12 mb-3">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control">
                        </div>
                        <button class="btn btn-secondary">Register</button>
                    </div>
                </form> 
        </div>
    @endauth
  
</body>
</html>