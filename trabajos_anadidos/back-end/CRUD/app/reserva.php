<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
        integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS interno -->
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        body{
            background-image:url('img/terraza.jpg');
        }
        form{
            background:rgb(255,255,255,0.7);
        }
        textarea{
            width: 90% !important;
            position: center;
        }
        h1{
            background:rgb(255,255,255,0.7);
        }
        label{
            font-weight:bold !important;
        }
    </style>
</head>

<body>
    <main class="container contenedor">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <h1 class="text-primary text-center mb-3 mt-5">Nuevo Registro</h1>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="guarda.php" method="post" autocomplete="off" class="p-3 rounder">
                        
                      <div class="row">
                            <div class="col-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control " required autofocus>
                            </div>
                            <div class="col-6">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                            </div>
                        
                      </div>

                        <div class="row mt-4">
                              <div class="col-3">
                                <label for="turno" class="form-label">Turno:</label>
                                <select id="turno" name="turno" class="form-control">
                                  <option value="Mañana">Mañana</option>
                                  <option value="Tarde">Tarde</option>
                                  <option value="Noche">Noche</option>
                                </select>

                              </div>

                          <div class="col-3">
                                <label for="npersonas" class="form-label">Numero de personas:</label>
                                <input type="number" name="npersonas" id="npersonas" class="form-control" min="1">
                          </div>

                          <div class="col-3">
                                <label for="fecha" class="form-label">Fecha:</label>
                                <input type="date" name="fecha" id="fecha" class="form-control" min="2023/05/17">
                          </div>

                          <div class="col-3">
                                <label for="hora" class="form-label">Hora:</label>
                                <input type="time" name="hora" id="hora" class="form-control" >
                          </div>
                      
                      </div>

                      <div class="row mt-4">
                        <h5 class="text-center">¿Necesitas parking?</h5>
                        <div class="col-md-12">
                            <div class="form-check d-flex justify-content-center">
                                <input type="checkbox" name="parking" id="parking" class="form-check-input"
                                    value="1" checked>
                                <label for="parking" class="form-check-label">Parking</label>
                            </div>
                        </div>
                      </div>  
                        

                      <div class="row d-flex justify-content-center flex-column align-items-center">

                        <label for="observaciones" class="form-label">Déjanos tu comentario/observación:</label>
                        <textarea name="observaciones" id="observaciones" cols="15" rows="7"></textarea>
                      </div>
                      
                      <div class="col-md-12 my-3">
                            <a href="index.php" class="btn btn-secondary"><i class="fa-solid fa-left-long"></i>
                                Regresar</a>
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>
                                Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>