<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>



<body>

<div class="wrapper">
  <a href="pregunta1.php">
  	<button id="miBoton1" onclick="ocultarBoton()">
    1 
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</a>
<a href="pregunta3.php">
    <button id="miBoton2" onclick="ocultarBoton2()">
    2 
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</a>
<a href="pregunta2.php">
    <button id="miBoton3" onclick="ocultarBoton3()">
    3 
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
  </a>
<a href="pregunta3.php">
    <button id="miBoton4" onclick="ocultarBoton4()">
    4 
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</a>
<a href="pregunta2.php">
    <button id="miBoton5" onclick="ocultarBoton5()">
    5 
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</a>
<a href="pregunta1.php">
    <button id="miBoton6" onclick="ocultarBoton6()">
    6 
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </button>
</a>
</div>

<script>
        function ocultarBoton() {
            document.getElementById("miBoton").style.display = "none";
        }
        function ocultarBoton2() {
            document.getElementById("miBoton2").style.display = "none";
        }
        function ocultarBoton3() {
            document.getElementById("miBoton3").style.display = "none";
        }
        function ocultarBoton4() {
            document.getElementById("miBoton4").style.display = "none";
        }
        function ocultarBoton5() {
            document.getElementById("miBoton5").style.display = "none";
        }
        function ocultarBoton6() {
            document.getElementById("miBoton6").style.display = "none";
        }
        
    </script>
</body>
</html>