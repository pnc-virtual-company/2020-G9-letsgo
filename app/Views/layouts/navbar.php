<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>


<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top float-right mt-3">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  mr-auto float-sm-right" >
      <li class="nav-item active" >
        <a class="nav-link" href="">Explor event<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Your event</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Events</a>
          <a class="dropdown-item" href="#">Categories</a>
      </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sreyleng
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="/logout">Logout</a>
      </div>
      </li>
    </ul>
    
  </div>
</nav>


<?= $this->endSection() ?>