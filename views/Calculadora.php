<!DOCTYPE html>
<html lang="en">
<head>
  <title>CALCULADORA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
  <h2>CALCULADORA</h2>
  <table class="table">
    <thead>
      <tr>
        <th><i class="fa fa-solid fa-hashtag"></i>NUMERO 1</th>
        <th><i class="fa fa-solid fa-share"></i>OPERACIÓN</th>
        <th><i class="fa fa-solid fa-hashtag"></i>NUMERO 2</th>        
        <th>ACCIÓN</th>
        <th><i class="fa fa-solid fa-calculator"></i>RESULTADO</th>
      </tr>
    </thead>
    <tbody>        
            <tr>
              <td><input type="number" id="numero1" name="numero1"/></td>
              <td>
              <select id="operacion" name="operacion" >
                <option value="sumar"  selected>➕</option>
                <option value="restar">➖</option>
                <option value="multiplicar">✖</option>
                <option value="dividir">➗</option>
              </select>
              </td>
              <td><input type="number" id="numero2" name="numero2"/></td>
              <td>
                <div class="d-grid gap-2 d-md-block">
                  <a id="btnCalcular" class="btn btn-primary" role="button" data-bs-toggle="button"></i> CALCULAR</a>
                </div>
              </td>
              <td><h3 id="resultado" name="resultado"></h3></td>
            </tr>
    </tbody>
  </table>
</div>
</body>
</html>

<script>

  $('#btnCalcular').on('click', function(event) {    
  var message = "";

  if(document.getElementById("numero1").value == null || document.getElementById("numero1").value == ""){
    message += "<br>-Debe indicar el numero1 de la operación."; 
  }
  
  if(document.getElementById("numero2").value == null || document.getElementById("numero2").value == ""){
    message += "<br>-Debe indicar el numero2 de la operación."; 
  }


  if(message != ""){
    $('html, body').animate({ scrollTop: 0 }, 'fast');

    console.log("MESSAGE => ",$('#area option:selected').val() )
    document.getElementById("alertDiv").innerHTML = "<strong>¡Atención!</strong>"+message; 
    var element = document.getElementById("alertDiv");
    element.classList.remove("fade");
    message = "";
    }
    else{
      var numero1 = $('#numero1').val();
      var numero2 = $('#numero2').val();
      
      $ruta = "";

      switch (document.getElementById("operacion").value) {
        case "sumar":
          $ruta = "sumar";
        break;
                
        case "restar":
          $ruta = "restar";
        break;
              
        case "multiplicar":
          $ruta = "multiplicar";
        break;

        case "dividir":
          $ruta = "dividir";
        break;

        default:
        break;
      }
      
      console.log("ruta => ",$ruta)
      $.ajax({
        method: "POST",
        url: "?c=Calculadora&a="+$ruta,        
        data: JSON.stringify({ numero1: numero1, numero2: numero2 }),
        contentType: "application/json",
      success: function(data) { 
        //console.log("DATA SUCCESS ",data)
        document.getElementById("resultado").innerText = data;
      }
      });
      
    }    
  });

</script>

<style>
table , td, th {
	border: 2px solid #000000;
	border-collapse: collapse;
}
td, th {
	padding: 3px;
	width: 30px;
	height: 25px;
}
th {
	background: #B2BABB;
}
.even {
	background: #7F8C8D;
}
.odd {
	background: #B2BABB;
}
</style>
