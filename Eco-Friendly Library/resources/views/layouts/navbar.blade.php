<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" style="color: var(--black);" href="#"><i class="uil uil-trees"></i></i> Eco-Friendly Library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}"><i class="uil uil-estate"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/books') }}"><i class="uil uil-book-open"></i> Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/books/manage') }}"><i class="uil uil-books"></i> Manage Books</a>
                </li>
            </ul>
        </div>
    </div>
</nav>