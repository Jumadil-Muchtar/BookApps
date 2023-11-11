<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        div.container{
            padding: 100px
        }
    </style>
</head>
<body>
    <div class="container">
        @if (Session::has('success'))
            <div class="pt-1 w-50 m-auto" id="success">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="pt-1 w-50 m-auto" id="error">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>    
            @endif

        <div class="card w-50 m-auto">
            <div class="card-body ">
                <h5 class="card-title text-center mb-5">Login</h5>

                <form action="/loginprocess" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" >
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login" class="btn btn-primary mb-3 w-100">
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script>
        var successMessage = document.getElementById('success');
        if (successMessage) {
            successMessage.style.display = 'block';

            // Sembunyikan pesan sukses setelah 2 detik
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 2000); // 2000 milidetik = 2 detik
        }

        // Tampilkan pesan kesalahan
        var errorMessage = document.getElementById('error');
        if (errorMessage) {
            errorMessage.style.display = 'block';

            // Sembunyikan pesan kesalahan setelah 2 detik
            setTimeout(function() {
                errorMessage.style.display = 'none';
            }, 2000); // 2000 milidetik = 2 detik
        }
    </script>
    
</body>
</html>