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
<script src="js/maskCPF.js"></script>
<body>
  <form action="gravar.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileName" accept="image/*" onchange="loadFile(event)"><br><br>
    <input type="submit" name="moveFile" value="Upload">
  </form>
     <img id="imgArmacao" name="imgArmacao" width="200" height="200" src="https://i.stack.imgur.com/akFTE.png"/><br>
</body>

</html>