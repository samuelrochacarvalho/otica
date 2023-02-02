<!DOCTYPE Html>
<html>

<head>
  <title> PHP MOVE FILE </title>
</head>
<style>
  div {
    width: 200px;
    height: 200px;
  }
</style>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('myimg');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<body>
  <form action="gravar.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileName" accept="image/*" onchange="loadFile(event)"><br><br>
    <input type="submit" name="moveFile" value="Upload">
  </form>
     <img id="myimg" width="200" height="200" src="https://i.stack.imgur.com/akFTE.png"/><br>
</body>

</html>