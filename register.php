<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>SB Admin - Register</title>

   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin.css" rel="stylesheet">

   <!-- include the style -->
   <link rel="stylesheet" href="alertifyjs/css/alertify.min.css" />
   <!-- include a theme -->
   <link rel="stylesheet" href="alertifyjs/css/themes/default.min.css" />

</head>

<body class="bg-dark">

   <div class="container">
      <br>
      <a role="button" class="btn btn-danger" alt="Salir" href="index.php"> X </a>
      <div class="card card-register mx-auto mt-5">
         <div class="card-header">Nueva Resevación</div>
         <div class="card-body">
            <form action="register.php" method="post">
               <div class="form-group">
                  <div class="form-row">
                     <div class="col-md-6">
                        <div class="form-label-group">
                           <input type="date" id="date" name="date" class="form-control" placeholder="Fecha de reservación" required="required" autofocus="autofocus">
                           <label for="date">Fecha</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-label-group">
                           <select name="time" id="time" class="form-control">
                               <option value="8:00am">8:00am</option>
                               <option value="9:00am">9:00am</option>
                               <option value="10:00am">10:00am</option>
                               <option value="11:00am">11:00am</option>
                               <option value="12:00am">12:00am</option>
                               <option value="1:00pm">1:00pm</option>
                               <option value="2:00pm">2:00pm</option>
                               <option value="3:00pm">3:00pm</option>
                               <option value="4:00pm">4:00pm</option>
                               <option value="5:00pm">5:00pm</option>
                               <option value="6:00pm">6:00pm</option>
                               <option value="7:00pm">7:00pm</option>
                               <option value="8:00pm">8:00pm</option>
                               <option value="9:00pm">9:00pm</option>
                           </select>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="form-group">
                  <div class="form-row">
                     <div class="col-md-6">
                        <div class="form-label-group">
                           <input type="text" id="typeEvent" name="typeEvent" class="form-control" placeholder="Tipo de Evento" required="required">
                           <label for="typeEvent">Tipo de Evento</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-label-group">
                           <input type="text" id="nit" name="nit" class="form-control" placeholder="NIT" required="required">
                           <label for="nit">NIT</label>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="form-group">
                  <div class="form-label-group">
                     <input type="text" id="nameReservation" name="nameReservation" class="form-control" placeholder="Nombre de Reservación" required="required">
                     <label for="nameReservation">Nombre de Reservación</label>
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-row">
                     <div class="col-md-6">
                        <div class="form-label-group">
                           <input type="text" id="noPersons" name="noPersons" class="form-control" placeholder="No. de Personas" required="required">
                           <label for="noPersons">No. de Personas</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-label-group">
                           <select name="noTable" id="noTable" class="form-control">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                              <option value="11">11</option>
                              <option value="12">12</option>
                              <option value="13">13</option>
                              <option value="14">14</option>
                              <option value="15">15</option>
                              <option value="16">16</option>
                              <option value="17">17</option>
                              <option value="18">18</option>
                              <option value="19">19</option>
                              <option value="20">20</option>
                              <option value="21">21</option>
                              <option value="22">22</option>
                              <option value="23">23</option>
                              <option value="24">24</option>
                              <option value="25">25</option>   
                           </select>
                        </div>
                     </div>
                  </div>
               </div>
               <input class="btn btn-primary btn-block" type="submit" name="save">
            </form>
            <div class="text-center">
            </div>
         </div>
      </div>
   </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
   <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- include the script -->
   <script src="alertifyjs/alertify.min.js"></script>

   <?php
    if (isset($_POST['save'])) {
       
       include 'connection.php';
       

         $date = $_POST['date'];
         $time = $_POST['time'];
         $event = $_POST['typeEvent'];
         $nit = $_POST['nit'];
         $name = $_POST['nameReservation'];
         $noPersons = $_POST['noPersons'];
         $noTable = $_POST['noTable'];

         $insert = "INSERT INTO reservaciones (fecha, hora, tipo_evento, nit, nombre, no_personas, no_mesa) VALUES ('$date', '$time', '$event', '$nit', '$name', '$noPersons', '$noTable')";

         $add = mysqli_query($connection, $insert);

         if($add){
   ?>
      <script>
         var notification = alertify.notify('Exelente! Resrvación realizada', 'success', 6, function() {
            console.log('dismissed');
         });

      </script>
      <?php 
        }
      else{
      ?>
      <script>
         alertify.error('Error no se an podido guardar la reservación....');

      </script>
      <?php      
       }
    }
    ?>

</body>

</html>
