<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/" style="font-family: cursive;font-weight:bold">BDS</a>
    <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
      <ul class="navbar-nav  mb-2 mb-lg-0" style="margin-left: auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about_section">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('user.registration') }}">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('donor.registration') }}">Donor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact_section">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
