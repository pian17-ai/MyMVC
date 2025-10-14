<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="<?= BASEURL; ?>">MyMVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="<?= BASEURL; ?>">Home</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Welcome to My MVC App</h1>
    <p class="lead mb-4">A clean and lightweight PHP MVC structure built with Bootstrap</p>
    <a href="#" class="btn btn-light btn-lg">Get Started</a>
  </div>
</section>

<!-- Features Section -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Our Features</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="text-primary mb-3 fs-1"><i class="bi bi-speedometer2"></i></div>
            <h5 class="card-title fw-bold">Fast Performance</h5>
            <p class="card-text">Bootstrap components and clean structure for fast rendering and performance.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="text-primary mb-3 fs-1"><i class="bi bi-braces"></i></div>
            <h5 class="card-title fw-bold">Clean Code</h5>
            <p class="card-text">Organized MVC pattern makes your code reusable and easy to maintain.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm">
          <div class="card-body">
            <div class="text-primary mb-3 fs-1"><i class="bi bi-layers"></i></div>
            <h5 class="card-title fw-bold">Modular Design</h5>
            <p class="card-text">Easily add new features or modules without touching the core files.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-light text-center">

<footer class="bg-white text-center py-4 border-top mt-5">
    <div class="container">
        <p class="mb-0 text-muted">© <?= date('Y'); ?> MyMVC Framework — Built with ❤️ using PHP & Bootstrap — by pian17-ai</p>
    </div>
</footer>
