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
    <h3 style="text-align: center; color: red; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">Fill this pet data below!</h3>
    <form action="{{route('createPets')}}" method="POST" enctype="multipart/form-data">
      @csrf

      <label for="PetsName" style="font-family:'Franklin Gothic Medium';">Pet Name :</label><br>
      <input id="PetsName" text" name="PetsName" value="{{ old("PetsName") }}"><br> <!--Sesuain sama nama kolom di model (Pets.php-->
      @error('PetsName')
        <p style="color: red;">{{$message}}</p>
      @enderror

      <label for="PetsAge" style="font-family:'Franklin Gothic Medium';">Age :</label><br>
      <input id="PetsAge" type="number" name="PetsAge" value="{{old("PetsAge")}}"><br>
      @error('PetsAge')
        <p style="color: red;">{{$message}}</p>
      @enderror

      <label for="PetsImage" style="font-family:'Franklin Gothic Medium';">Image :</label><br>
      <input id="PetsImage" type="file" name="PetsImage" value="{{old("PetsImage")}}"><br>
      @error('PetsImage')
        <p style="color: red;">{{$message}}</p>
      @enderror

      <label style="font-family:'Franklin Gothic Medium';">Category: </label>
      <select name="CategoryId">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
        @endforeach
      </select><br><br>

      <button type="submit">Add Pet!</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>