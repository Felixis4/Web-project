<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Belgrano Explorer')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
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
