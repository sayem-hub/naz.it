<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{asset('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" > 

    <title>{{config('app.name')}} : Login</title>
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-4"></div>
            <div class="col-md-4">

            <h3 class="text-center">Admin Login</h3>
            <form action="{{route('admin.login')}}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
            
            </div>
        
        </div>
    </div>
</body>
</html>