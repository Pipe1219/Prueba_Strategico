<!DOCTYPE html>
<html lang="en">
<head>
  <title>CALCULADORA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
  <div id="alertDiv"></div>
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
<script src="js/logica.js"></script>
</body>
</html>
