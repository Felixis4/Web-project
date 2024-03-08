@extends('myapp')
@section('content')
@section('title','Chat')

<div id="back-button" class="container py-2 m-2">
    <a href="/" class="btn btn-danger btn-sm">Back</a>
</div>
<br><br>

<div id="content-box" class="container-fluid ">

</div>
<div class="container-fluid p-2"> 
  <div class="form-floating">
    <input id="floatingInput" autofocus type="text" name="input" class="form-control" placeholder="ask">
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
    $('#content-box').append('<div class="p-4 l-flex mb-2"> <div class="float-right p-3" style="background: hsl(225,100%,40%);border-radius: 10px;float: right;font-size 85%;"> ' + $value + ' </div> <div style="clear:both;"></div> </div>');
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
@endsection