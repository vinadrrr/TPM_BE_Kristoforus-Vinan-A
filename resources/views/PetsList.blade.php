<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetDoption</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <x-nav-bar/>

  @forelse ($pets as $pet)
      <div class="card" style="width: 18rem;">
    <img src="{{ $pet->PetsImage }}" class="card-img-top" alt="{{$pet->PetsImage}}">
    <div class="card-body">
      <h5 class="card-title">{{ $pet->id.'. '.$pet->PetsName }}</h5>
      <p class="card-text">Age: {{ $pet->PetsAge }}</p>
      <p class="card-text">Category: {{ $pet->category->CategoryName }}</p>
      <a href="{{ route('getEditPetsPage', $pet->id) }}" class="btn btn-primary">Edit Info</a>
    </div>
  </div>
      @empty
      <div>
        No data to be shown.
      </div>
  @endforelse

    {{ $pets->links() }}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>