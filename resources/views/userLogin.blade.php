<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<div class="container">
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