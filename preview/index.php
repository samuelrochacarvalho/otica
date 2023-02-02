<script>
  var loadFile = function(event) {
    var output = document.getElementById('imgArmacao');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
    <input type="file" name="arquivo" id="arquivo" accept="image/*" onchange="loadFile(event)"><br><br>
     <img id="imgArmacao" width="200" height="200" src="https://i.stack.imgur.com/akFTE.png"/><br>