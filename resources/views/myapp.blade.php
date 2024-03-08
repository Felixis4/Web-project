<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'Belgrano Explorer')</title>
  <link rel="stylesheet" href="normalize.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
  <style>
    *{
      font-family: "DM Serif Display", serif;
    }
    body{
      background-color: #763030;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
    .center-button {
      text-align: center;
    }
    .nav-item{

      margin: 5px;
      border: 1px solid black;
      border-radius: 10px;
    }
    .nav-link{
      line-height: 1;
    }
    .form-floating {
      display: flex; 
      justify-content: space-between; 
      align-items: center; 
      width: 100%; 
    }
    #offcanvasExample{
      background-color: darkslategrey;
    }
    #title{
      font-size: 3em;
      font-weight: bold;
      color: black;
      text-decoration: underline;
    }
    #sub-title{
      font-weight: bold;
      font-family: Times, sans-serif;
      color: black;
    }
    #back-button{
      width: 5em;
      background: #000;
      border-radius: 10px;
      float:left;
    }
    #back-button a {
      width: 4em;
    }
    #file-container{
      background: #000;
      border-radius: 10px;
      float: centers;
    }
    #floatingInput {
      flex-grow: 1;
      margin-right: 10px; 
    }
    #button-submit {
      white-space: nowrap;
    }
    #content-box{
      background: #1F1B3C;
      height: calc(100vh - 138px);
      overflow-y: scroll;
    }
  </style>
</head>
<body>
    

@yield('content')

</body>
</html>
