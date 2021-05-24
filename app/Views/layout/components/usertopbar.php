<!-- top bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-purple fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/"> 
      <img style="height:30px" src="/assets/img/<?= $profil['logoTopbar'] ?>" alt="" srcset=""> 
      <span>
      </span>
    </a>
    <button class="navbar-toggler p-0" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-box-seam"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Artikel</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-book-half"></i>
            Program Belajar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Pemrograman</a></li>
            <li><a class="dropdown-item" href="#">Desain UI UX</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Freelancer</a>
        </li>
        <li class="nav-item">
          <!-- <button class="nav-link btn btn-light text-dark ms-md-4" aria-current="page" href="#login" class="tblogin">Login</button> -->
        </li>
        <li class="nav-item ms-md-4" data-bs-toggle="modal" data-bs-target="#cari">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
            <i class="bi bi-search"></i>
          </a>
        </li>
      </ul>
      <!-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>


<!-- Modal -->
<div class="modal fade" id="cari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content border-0 bg-transparent">
      <div class="modal-body bg-transparent">
        <form action="">
          <input type="q" placeholder="Kata Kunci Pencarian" class="form-control rounded-pill px-4 py-3">
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
//modal auto load
  $(window).on('load', function() {
    // $('#exampleModal').modal('show');
  });
</script>