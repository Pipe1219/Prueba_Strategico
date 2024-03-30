$('#btnCalcular').on('click', function(event) {    
  var message = "";

  if(document.getElementById("numero1").value == null || document.getElementById("numero1").value == ""){
    message += "<br>-Debe indicar el numero1 de la operación.";
    document.getElementById('resultado').innerText = "";
  }
  
  if(document.getElementById("numero2").value == null || document.getElementById("numero2").value == ""){
    message += "<br>-Debe indicar el numero2 de la operación.";
    document.getElementById('resultado').innerText = "";
  }

  if(document.getElementById("numero2").value == 0 && document.getElementById("operacion").value == "dividir"){
    message += "<br>-No se puede dividir por cero (Valide la operacion).";
    document.getElementById('resultado').innerText = "";
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

      document.getElementById('alertDiv').innerHTML = "";

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