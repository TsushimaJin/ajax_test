<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajax Sample2</title>
</head>
<body>
  <input type="text" name="name" id="name" size="30" maxlength="20">
  <button id="button">送信</button>
  <div><br></div>
  <div id="result">テキストボックスに閏年判定したい西暦を入力して「送信」ボタンをクリック！</div>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script>
  // jQuery
  $(function(){
    $("#button").click(function(event){
      $.ajax({
        type: "GET",
        url: "data_echo.php",
        data: { val: $('#name').val() },
        dataType : "html"
      })
      // Ajaxリクエストが成功した場合
      .done(function(data){
        $("#result").html(data);
      })
      // Ajaxリクエストが失敗した場合
      .fail(function(XMLHttpRequest, textStatus, errorThrown){
        alert(errorThrown);
      });
    });
  });
  </script>
</body>
</html>