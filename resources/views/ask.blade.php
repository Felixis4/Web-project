<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>laravel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
  <style>
    body {

      height: 160px;
      background-color: #383F42;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    .color-container {
      width: 16px;
      height: 16px;
      display: inline-block;
      border-radius: 4px;
    }

    a {

      text-decoration: none;
    }

    .center-button {
      text-align: center;
    }

  </style>

</head>

<body>
  <div class="container py-2 m-2 align-items-center" style="width: 100px;background: #000;border-radius: 10px;float:left;">
      <a href="/" class="btn btn-danger btn-sm">Back</a>
  </div>
  <br><br>
  <div class="container fluid center-button w-100 px-3 py-2">
    
    <div class="form-floating mb-3">
      <input id="floatingInput" type="text" name="input" class="form-control" placeholder="ask">
      <label for="question" class="form-label">Ask Me!</label>
    </div>

    <div id="button-submit" class="text-center">
      <i class="btn btn-success" aria-hidden="true">Send</i>
    </div>
    
  </div>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script>
    $('#button-submit').on('click', function () {
      var $value = $('#floatingInput').val();
      $('#content-box').append('<div class="mb-2 p-4"> <div class="float-right px-3 py-2" style="width: 270px;background: hsl(225,100%,40%);border-radius: 10px;float: right;font-size 85%;"> ' + $value + ' </div> <div style="clear:both;"></div> </div>');
      
      $.ajax({
        type:'post',
        url: '{{ url('send') }}',
        data: {
          'input': $value
        },
        beforeSend: function(xhr){
          xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
        },
        success:function(data){
          $('#content-box').append('<div class="p-4 d-flex mb-2"> <div class="p-3 text-primary-emphasis rounded-2" style="background: hsl(195,75%,75%);" > '+data+' </div> </div>');
          $value = $('#floatingInput').val('');
        }
      });
    });
  </script>
  
</body>

</html>
