<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        div.container{
            padding-left: 100px;
            padding-right: 100px;
            padding-bottom: 25px;
            padding-top: 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card w-50 m-auto">
            <div class="card-body ">
                <h5 class="card-title text-center mb-3">Register</h5>
                <form action="/registerprocess" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" required>
                        @error('name')      
                        <div class="invalid-feedback">Name is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" class="form-select form-control @error('gender') is-invalid @enderror" name="gender" aria-label="Choose your gender" required>
                            <option value="man">Man</option>
                            <option value="woman">Woman</option>
                        </select>
                        @error('gender')      
                        <div class="invalid-feedback">Gender is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required>
                        @error('email')      
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Your Password" required>
                        @error('password')      
                        <div class="invalid-feedback">Password is required.</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password-confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control @error('password2') is-invalid @enderror" id="password-confirmation" name="password2" placeholder="Your Password Confirmation" required>
                        @error('password2')      
                        <div class="invalid-feedback">Confirmation Password is required.</div>
                        @enderror
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="mb-3">
                        <input type="submit" value="Register" class="btn btn-primary mb-3 w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>