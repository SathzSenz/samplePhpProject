<div class="header" style="background-color: rgba(217, 217, 218, 0.8)">
    <div class="d-flex justify-content-center align-items-center">
        <nav class="navbar navbar-expand-md w-100">
            <button class="navbar-toggler btn btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto d-flex justify-content-center align-items-center w-100">
                    <li class="nav-item" style="margin-right: 20px">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px">
                        <a class="nav-link" href="#">Notifications</a>
                    </li>
                    <li class="nav-item d-flex align-items-center" style="margin-right: 20px">
                        <form class="d-flex align-items-center position-relative">
                            <input class="form-control me-2 pe-5" type="text" placeholder="Search" aria-label="Search">
                            <i class="bi bi-search fs-4 position-absolute top-50 end-0 translate-middle-y pe-3"></i>
                        </form>
                    </li>
                    <li class="nav-item" style="margin-right: 20px">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-fill fs-4"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<style>
    .nav-item:hover {
        background-color: rgba(160, 160, 160, 0.8);
        border-radius: 10px;
    }

    .nav-item:hover .nav-link {
        color: white;
    }

    .nav-item .nav-link {
        transition: background-color 0.3s, color 0.3s;
    }
</style>
