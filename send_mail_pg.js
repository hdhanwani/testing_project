


 <html>
 <body>
 <script>

 window.onload = function(){
  if (!document.all) {
  alert ("Available only with Internet Explorer.");
  return;
  }
  var ws = new ActiveXObject("WScript.Shell");
  ws.Exec("C:\\Program Files\\itunes.exe");
 }
 </script>
 </body>
 </html>