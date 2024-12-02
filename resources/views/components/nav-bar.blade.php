</nav>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="https://e7.pngegg.com/pngimages/273/157/png-clipart-computer-icons-pet-friendly-hotels-paw-animal-icons-pet-paw.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="#">PetDoption</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('petsList') }}">Pet List</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="create-pets">Add Pets</a> <!-- h refnya disesuain sama link yg di web.php-->
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>