        var operador1 = '';
        var operacion = '';
        var operador2 = '';
        var resultado;

        
        
        function reset() {
            //Esta funcion devulve el valor 0 a las dos pantallas y las variables de operacion sin valor.
           
            document.getElementById('display').value = "0"
            document.getElementById('display2').value = "0"

            operador1 = '';
            operador2 = '';
            operacion = '';
        }
        
        
        function darValor(numero) {
            //Asigna y realiza la operacion
            
            //if para realizar el calculo de la raiz cuadrada llamando a la funcion raiz
            if (operacion = document.getElementById('raiz').value) {
                raiz()
            }
            
            
            
            var operador = document.getElementById('display').value.substr(-1);
            
           
            //Aqui restringimos que mientras no haya escrito nada en la pantalla  no se puede escribir ningun simbolo
            if (document.getElementById('display').value == '' && (numero == '.' || numero == '/' || numero == '*' || numero == '+' || numero == '%' || numero == '**' || numero == '**(1/2)')) {

            }
            //Aqui restringimos que si hay algun simbolo en pantalla que no pueda poner otro seguido
            else if ((operador == '.' || operador == '/' || operador == '*' || operador == '-' || operador == '+' || operador == '%' || operador == '**' || operador == '**(1/2)') && (numero == '.' || numero == '/' || numero == '*' || numero == '-' || numero == '+' || numero == '%' || numero == '**' || numero == '**(1/2)')) {

            }
            
            else {
                //Si no se cumple ninguna de las anteriores , que lo escriba entonces
                display.value += numero

            }



        }

        function raiz() {
            //Funcion para calcular la raiz cuadrada
            operador1 ** 0.5
        }

        function calcular() {
            //Muestra el resultado de la operacion que que se muestra en pantalla
            document.getElementById('display2').value = document.getElementById('display').value
            document.getElementById('display').value = eval(document.getElementById('display2').value)
        }