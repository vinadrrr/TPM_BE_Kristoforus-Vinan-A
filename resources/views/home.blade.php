<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetDoption</title>
    <style>
    /* Center container */
    .button-container {
      display: flex;           /* Use flexbox */
      flex-direction: column;  /* Arrange buttons in a column */
      /*justify-content: center;*/ /* Center buttons vertically */
      align-items: center;     /* Center buttons horizontally */
      height: 100vh;           /* Full height of the viewport */
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <x-nav-bar/>

    <h1 style="text-align: center;">Welcome</h1>
    <h1 style="text-align: center;">to</h1>
    <h1 style="text-align: center; color:blueviolet;">PetDoption!</h1><br>
    <h4 style="text-align: center;">PetDoption is an animal shelter house where you can adopt kinds of animals!</h4>
    <h4 style="text-align: center;">Click here to:</h4><br>
  <div class="button-container">
    <a style="color: blueviolet; font-size: large;" href="pets-list">See List of Pets</a> <br>
    <a style="color: blueviolet; font-size: large;" href="create-pets">Add animals</a>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>