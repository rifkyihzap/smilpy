<nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav col-10">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
        </div>
    </ul>
    <ul class="navbar-nav ml-auto">
        <form action="/logout" method="post">
            @csrf
            <li class="nav-item">
                <button type="submit" class="nav-link bg-dark text-white border-0">
                    <i class="bi bi-box-arrow-left me-2"></i>Log out
                </button>
            </li>
        </form>
    </ul>
</nav>