           <?php

            $id = $datos[0]['id'];
            $nombre = $datos[0]['Nombre'];
            $correo = $datos[0]['Correo'];
            $direccion = $datos[0]['Direccion'];
            $foto = $datos[0]['Foto'];
            $genero = $datos[0]['Genero'];

            ?>

           <!doctype html>
           <html lang="en">

           <head>
             <!-- Required meta tags -->
             <meta charset="utf-8">
             <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

             <!-- Bootstrap CSS -->
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

             <title>Actualiza un nombre</title>
           </head>

           <body>

             <div class="container">
               <h1>CRUD con Codeigniter 4</h1>

               <div class="row">
                 <div class="col-sm-12">
                   <form method="POST" action="<?php echo base_url() . '/actualizar' ?>">
                     <input type="text" id="id" name="id" hidden="" value="<?php echo $id  ?>">

                     <label for="nombre">Nombre</label>
                     <input type="text" name="Nombre" id="Nombre" class="form-control" value="<?php echo $nombre ?>">

                     <label for="paterno">Correo</label>
                     <input type="text" name="Correo" id="Correo" class="form-control" value="<?php echo $correo ?>">

                     <label for="materno">Direccion</label>
                     <input type="text" name="Direccion" id="Direccion" class="form-control" value="<?php echo $direccion ?>">

                     <label for="materno">Foto</label>
                     <input type="text" name="Foto2" id="Foto2" class="form-control" value="<?php echo $foto ?>">

                     <label for="materno">Genero</label>
                     <input type="text" name="Genero" id="Genero" class="form-control" value="<?php echo $genero ?>">
                     <br>
                     <button class="btn btn-warning">Guardar</button>
                   </form>
                 </div>
               </div>
             </div>

             <!-- Optional JavaScript -->
             <!-- jQuery first, then Popper.js, then Bootstrap JS -->
             <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
           </body>

           </html>