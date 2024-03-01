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
    .form-floating {
      display: flex; 
      justify-content: space-between; 
      align-items: center; 
      width: 100%; 
    }

    #floatingInput {
      flex-grow: 1;
      margin-right: 10px; 
    }

    #button-submit {
      white-space: nowrap;
    }


  </style>

</head>

<body>
  
  <div class="container py-2 m-2 align-items-center" style="width: 100px;background: #000;border-radius: 10px;float:left;">
      <a href="/" class="btn btn-danger btn-sm">Back</a>
  </div>

  <br><br>

  <div id="content-box" class="container-fluid " style=" background: #1F1B3C; height: calc(100vh - 130px); overflow-y: scroll;">
  
  </div>
  <div class="container-fluid center-button w-100 px-3" style=""> 
    <div class="form-floating mb-3">
      <input id="floatingInput" type="text" name="input" class="form-control" placeholder="ask">
      <label for="floatingInput" class="form-label">Ask Me!</label>
      <button class="btn btn-success" id="button-submit" aria-hidden="true">Send</button>
    </div>
  </div>
  <script>
    document.addEventListener('keydown',function (evento) {
      if (evento.keyCode === 13) {
        var boton = document.getElementById('button-submit');
        boton.click();
      }
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
  <script>
    $('#button-submit').on('click', function () {
      var $value = $('#floatingInput').val();
      $('#content-box').append('<div class="p-4 l-flex mb-2"> <div class="float-right p-3" style="width: 270px;background: hsl(225,100%,40%);border-radius: 10px;float: right;font-size 85%;"> ' + $value + ' </div> <div style="clear:both;"></div> </div>');
      $('#content-box').scrollTop($('#content-box').prop('scrollHeight'));

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
          var chatBox = $('#content-box')

          chatBox.append('<div class="p-4 d-flex mb-2"> <div class="float-left p-3 text-primary-emphasis rounded-2" style="background: hsl(195,75%,75%);float: left;" > '+data+' </div> </div>');
          $value = $('#floatingInput').val('');
          chatBox.scrollTop(chatBox.prop('scrollHeight'));

        }
      });
    });
  </script>
  
</body>

</html>