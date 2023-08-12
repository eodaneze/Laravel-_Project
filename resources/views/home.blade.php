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


          <div class="border container mt-5 p-4">
              <h2>Create new post</h2>
              <form action="/create-post" method="POST">
                  @csrf

                 <div class="row">
                      <div class="col-lg-12">
                         <label>Title</label>
                          <input type="text" name="title" class="form-control">
                      </div>
                      <div class="col-lg-12">
                         <label>Body</label>
                          <textarea class="form-control" name="body" id="" cols="30" rows="10"></textarea>
                      </div>
                 </div>
                 <button class="btn btn-secondary">Post Blog</button>
              </form>
          </div>

          <div class="container">
               <div class="border">
                  <h2>All Posts</h2>
                  @foreach($posts as $post)
                      <div class="bg-white shadow p-4 shadow mb-4">
                          <h3>{{$post['title']}}</h3>
                          {{$post['body']}}
                      </div>
                  @endforeach
               </div>
          </div>
    @else
            <div class="container mt-5 border p-3">
               <div class="row">
                   <div class="col-lg-6">
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
                            </div>
                            <button class="btn btn-secondary">Register</button>
                        </form> 
                   </div>
                   <div class="col-lg-6">
                    <h2 class="text-center">Login</h2>
                    <form action="/login" method="POST">
                    @csrf 
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                            <label>Name</label>
                            <input name="loginname" type="text" class="form-control">
                            </div>
                            
                            <div class="col-lg-12 mb-3">
                            <label>Password</label>
                            <input name="loginpassword" type="password" class="form-control">
                            </div>
                        </div>
                        <button class="btn btn-secondary">Login</button>
                    </form> 
                   </div>
               </div>
        </div>
    @endauth
  
</body>
</html>