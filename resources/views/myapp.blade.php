<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Belgrano Explorer</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <style>

    body{
      height: 170px;
      background-color: #763030;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    .color-container{
      width: 16px;
      height: 16px;
      display: inline-block;
      border-radius: 4px;
    }
    a{
      text-decoration:none;
    }
    .center-button {
      text-align: center;
    }
    #offcanvasExample{
      background-color: darkslategrey;
    }
    #title{
      font-size: 50px;
      font-weight: bold;
      font-family: Times, sans-serif;
      color: black;
      text-decoration: underline;
    }
    #sub-title{
      font-weight: bold;
      font-family: Times, sans-serif;
      color: black;
    }
    .nav-item{
      margin: 5px;
      border: 1px solid black;
      border-radius: 10px;
    }

  </style>

</head>
<body>
    

@yield('content')

</body>
</html>
