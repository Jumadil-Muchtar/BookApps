<nav class="navbar bg-primary navbar-expand-lg fixed-top" data-bs-theme="light">
    <div class="container">
        <a class="navbar-brand"  style="font-weight: 1000;" href="/"><i class="fa-solid fa-school fa-xl" style="color: #000000;"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-start" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Menu Utama -->
                <li class="nav-item">
                    <a class="nav-link active text-light" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active text-light " href="/book">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  active text-light" href="/account">Account</a>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-end">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <p class="nav-link  active text-light" >Hello, {{ $username }}</p>
                </li>
                <li class="nav-item">
                    <a href="/logout" class="nav-link  active text-light">Logout</a>
                </li>
                
            </ul>

        </div>
    </div>
</nav>