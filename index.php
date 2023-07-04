<!doctype html>
<html lang="es">

<head>
  <title>Agenda Web </title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css">
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"></script>

  <style>
    body {
      background-image: url(img/Rect\ Light.svg);
      background-size: cover;
      background-repeat: no-repeat;
    } 

    .navbar {
      background-color: #2c3e50;
      margin-bottom: 50px;
    }


    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .dropdown {
      margin-left: 28%;
      float: left;
      position: relative;
    }


    .dropdown select {
      display: none;
    }

    .dropdown-btn {
      display: block;
      background-color: inherit;
      color: #f2f2f2;
      padding: 14px 16px;
      border: none;
      cursor: pointer;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      z-index: 3;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    #btnGuardar {
      background-color: #2c3e50;
    }

    .container h1 {
      font-family:Verdana, Geneva, Tahoma, sans-serif;
      color: #f2f2f2;
      text-align: center;
      margin-bottom: 50px;
    }

    #calendar{
      background-color: #f9f9f9;
      border-radius: 5px;
      border:none;
      padding: 20px;
      color: #2c3e50;
      text-transform: uppercase;
    }
    

    
  </style>
</head>

<body>

  <!-- <div class="navbar">
    <div class="dropdown">
      <button class="dropdown-btn">Menu</button>
      <div class="dropdown-content">
        <a href="equipo.html">Equipo</a>
      </div>
    </div>
  </div> -->

  <script>
    // Obtener el botón del menú desplegable y el contenido del menú
    var dropdownBtn = document.querySelector('.dropdown-btn');
    var dropdownContent = document.querySelector('.dropdown-content');

    // Mostrar u ocultar el contenido del menú cuando se hace clic en el botón
    dropdownBtn.addEventListener('click', function() {
      dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
    });
  </script>


  <div class="container">

   
    <div class="col-md-8 offset-md-2 mt-5">

      <div id='calendar'></div>

    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="modalEvento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Datos del evento </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">

              <form action="" method="post">

                <div class="mb-3 visually-hidden ">
                  <label for="id" class="form-label">ID:</label>
                  <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
                </div>

                <div class="mb-3">
                  <label for="title" class="form-label">Título</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Título">

                </div>
                <div class="mb-3 visually-hidden">
                  <label for="" class="form-label">Fecha:</label>
                  <input type="text" class="form-control" name="fecha" id="fecha" aria-describedby="helpId" placeholder="Fecha:">

                </div>

                <div class="mb-3">
                  <label for="hora" class="form-label">Hora del evento:</label>
                  <select name="hora" class="form-control" id="hora">
                    <option value="Seleccionar">Seleccionar</option>
                    <option value="09:30">09:30</option>
                    <option value="10:00">10:00</option>
                    <option value="10:30">10:30</option>
                    <option value="11:00">11:00</option>
                    <option value="11:30">11:30</option>
                    <option value="12:00">12:00</option>
                    <option value="12:30">12:30</option>
                    <option value="13:00">13:00</option>
                    <option value="13:30">13:30</option>
                    <option value="14:00">14:00</option>
                    <option value="14:30">14:30</option>
                    <option value="15:00">15:00</option>
                    <option value="15:30">15:30</option>
                    <option value="16:00">16:00</option>
                    <option value="16:30">16:30</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="duracion" class="form-label">Duración del evento:</label>
                  <select name="duracion" class="form-control" id="duracion">
                    <option value="Seleccionar duracion">Seleccionar duracion</option>
                    <option value="Media hora">Media hora</option>
                    <option value="Una hora">Una hora</option>
                  </select>
                </div>

                <div class="mb-3">
                  <label for="descripcion" class="form-label">Descripción</label>
                  <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                </div>

                <div class="mb-3">
                  <label for="color" class="form-label">Color:</label>
                  <input type="color" class="form-control" name="color" id="color" aria-describedby="helpId" placeholder="Color:">

                </div>

                <div class="mb-3">
                  <label for="empresa" class="form-label">Empresa:</label>
                  <input type="text" class="form-control" name="empresa" id="empresa" aria-describedby="helpId" placeholder="Empresa">

                </div>

                <div class="mb-3">
                  <label for="telefono" class="form-label">Telefono</label>
                  <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Telefono">

                </div>

              </form>


            </div>
          </div>
          <div class="modal-footer">
            <button type="button" onclick="borrarEvento()" class="btn btn-danger" id="btnBorrar" data-bs-dismiss="modal">Borrar</button>
            <button type="button" onclick="agregarEvento()" id="btnGuardar" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </div>
    </div>



  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script>
    var modalEvento;

    modalEvento = new bootstrap.Modal(document.getElementById('modalEvento'), {
      keyboard: false
    });
    var calendar;

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: "es",
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        dateClick: function(informacion) {

          limpiarFormulario(informacion.dateStr);
          modalEvento.show();

        },
        eventClick: function(informacion) {
          console.log(informacion);
          modalEvento.show();
          recuperarDatosEvento(informacion.event);

        },
        events: "api.php"
      });
      calendar.render();
    });
  </script>
  <script>
    function recuperarDatosEvento(evento) {
      limpiarErrores();
      var fecha = evento.startStr.split("T");
      var hora = fecha[1].split(":");

      document.getElementById('id').value = evento.id;
      document.getElementById('titulo').value = evento.title;
      document.getElementById('fecha').value = fecha[0];
      document.getElementById('hora').value = hora[0] + ":" + hora[1];
      document.getElementById('duracion').value = evento.extendedProps.duracion;
      document.getElementById('descripcion').value = evento.extendedProps.descripcion;
      document.getElementById('color').value = evento.backgroundColor;
      document.getElementById("empresa").value = evento.extendedProps.empresa;
      document.getElementById("telefono").value = evento.extendedProps.telefono;
      // document.getElementById('empresa').value = evento.empresa;
      // document.getElementById('telefono').value = evento.telefono;

      document.getElementById('btnBorrar').removeAttribute('disabled', "");
      document.getElementById('btnGuardar').removeAttribute('disabled', "");


    }

    function borrarEvento() {
      enviarDatosApi("borrar");

    }

    function agregarEvento() {

      if (document.getElementById('titulo').value == "") {
        document.getElementById('titulo').classList.add('is-invalid');
        return true;
      }



      accion = (document.getElementById("id").value == 0) ? "agregar" : "actualizar";
      enviarDatosApi(accion);

    }

    function enviarDatosApi(accion) {
      fetch("api.php?accion=" + accion, {
          method: "POST",
          body: recolectarDatos()
        })
        .then(data => {
          console.log(data);
          calendar.refetchEvents();
          modalEvento.hide();
        })
        .catch(error => {
          console.log(error);
        });
    }

    function recolectarDatos() {
      var evento = new FormData();
      evento.append("title", document.getElementById('titulo').value);
      evento.append("fecha", document.getElementById('fecha').value);
      evento.append("hora", document.getElementById('hora').value);
      evento.append("duracion", document.getElementById('duracion').value);
      evento.append("descripcion", document.getElementById('descripcion').value);
      evento.append("color", document.getElementById('color').value);
      evento.append("id", document.getElementById('id').value);
      evento.append("empresa", document.getElementById('empresa').value);
      evento.append("telefono", document.getElementById('telefono').value);
      return evento;
    }

    function limpiarFormulario(fecha) {
      limpiarErrores();
      document.getElementById('titulo').value = "";
      document.getElementById('fecha').value = fecha;
      document.getElementById('hora').value = "12:00";
      document.getElementById('duracion').value = "";
      document.getElementById('descripcion').value = "";
      document.getElementById('color').value = "";
      document.getElementById('id').value = "";
      document.getElementById('empresa').value = "";
      document.getElementById('telefono').value = "";
      document.getElementById('btnBorrar').setAttribute('disabled', "disabled");
    }

    function limpiarErrores() {
      document.getElementById('titulo').classList.remove('is-invalid');
    }
  </script>

</body>

</html>