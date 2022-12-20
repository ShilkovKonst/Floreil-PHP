<header id="header" class="py-0">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid bgc">
            <Link to="/" id="logo">
            <img src="http://localhost/FloreilPHP/images/Logos/logo_floreil_main_75x240.png" alt="logo"
                class="img-fluid d-none d-sm-block" />
            <img src="http://localhost/FloreilPHP/images/Logos/logo_floreil_main_50x160.png" alt="logo"
                class="img-fluid d-block d-sm-none " />
            </Link>
            <button class="navbar-toggler hamburger hamburger-collapse rounded-circle ms-auto huge px-1" type="button"
                data-bs-toggle="collapse" data-bs-target="#headerSupportedContent"
                aria-controls="headerSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                id=collapse_toggler_header>
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse gap-3" id="headerSupportedContent">
                <ul class="navbar-nav mt-2 my-md-auto justify-content-end gap-4 list-group-horizontal ms-auto"
                    id="list">
                    <li class="nav-item">
                        <Link to="/favorite"
                            class="active d-flex justify-content-center align-self-center rounded-circle"
                            aria-current="page">
                        <button
                            class="d-flex justify-content-center align-self-center btn btn-header rounded-circle flex-shrink-0 huge">
                            <i class="bi bi-heart-fill bi_big align-self-center text-shadow"></i>
                        </button>
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link to="/cart" class="active d-flex justify-content-center align-self-center rounded-circle"
                            aria-current="page">
                        <button
                            class="d-flex justify-content-center align-self-center btn btn-header rounded-circle flex-shrink-0 huge">
                            <i class="bi bi-cart-fill bi_big align-self-center text-shadow"></i>
                        </button>
                        </Link>
                    </li>
                    <li class="nav-item">
                        <Link to="#" class="active d-flex justify-content-center align-self-center rounded-circle"
                            aria-current="page">
                        <button
                            class="d-flex justify-content-center align-self-center btn btn-header rounded-circle flex-shrink-0 huge">
                            <i class="bi bi-person-fill bi_big align-self-center text-shadow"></i>
                        </button>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>