{{-- resources/views/components/navbar.blade.php --}}
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ route('home') }}">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
    <a class="nav-link" href="product">Product</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
        Categories
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('product', ['category' => 'pria']) }}">Pria</a></li>
        <li><a class="dropdown-item" href="{{ route('product', ['category' => 'wanita']) }}">Wanita</a></li>
        <li><a class="dropdown-item" href="{{ route('product', ['category' => 'anak-anak']) }}">Anak-Anak</a></li>
    </ul>
</li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>