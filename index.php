<?php
require_once('bdd.php');


$sql = "SELECT id, title, start, end, color FROM events ";

$req = $bdd->prepare($sql);
$req->execute();

$events = $req->fetchAll();

?>

<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Inicio</title>

	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FullCalendar -->
	<link href='css/fullcalendar.css' rel='stylesheet' />


	<!-- Custom CSS -->
	<style>
		body {
			padding-top: 70px;

		}

		#calendar {
			max-width: 800px;
		}

		.col-centered {
			float: none;
			margin: 0 auto;
		}

		.navbar{
			background-color: #337ab7;
			color: #FFFFFF ;
		}

		.navbar-header{

		}
		
		.navbar-toggle{

		}

		.navbar-brand{
			color: #ffff
		}

		.dropdown{
			
		}
	</style>



</head>

<body>

	<nav class="navbar" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">ÍNDICES</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="equipo.html">Equipo</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>

	<!-- Page Content -->
	<div class="container">

		<div class="row">
			<div class="col-lg-12 text-center">
				<h1>AGENDA DE CITAS</h1>
				<div id="calendar" class="col-centered">
				</div>
			</div>

		</div>
		<!-- /.row -->

		<!-- Modal -->
		<div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<form class="form-horizontal" method="POST" action="addEvent.php">

						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Agregar Evento</h4>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">Titulo</label>
								<div class="col-sm-10">
									<input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
								</div>
							</div>
							<div class="form-group">
								<label for="color" class="col-sm-2 control-label">Color</label>
								<div class="col-sm-10">
									<select name="color" class="form-control" id="color">
										<option value="">Seleccionar</option>
										<option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
										<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
										<option style="color:#008000;" value="#008000">&#9724; Verde</option>
										<option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
										<option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
										<option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
										<option style="color:#000;" value="#000">&#9724; Negro</option>

									</select>
								</div>
							</div>
							<div class="form-group">
								<label for="start" class="col-sm-2 control-label">Fecha Inicial</label>
								<div class="col-sm-10">
									<input type="text" name="start" class="form-control" id="start" readonly>
								</div>
							</div>


							<div class="form-group">
							<div class="col-sm-10">
								<label for="hour" class="col-sm-2 control-label">Cita</label>
									<select name="hour" class="form-control" id="color">
										<option  value="Seleccionar">Seleccionar</option>
										<option  value="09:30">09:30</option>
										<option  value="10:00">10:00</option>
										<option  value="10:30">10:30</option>
										<option  value="11:00">11:00</option>
										<option  value="11:30">11:30</option>
										<option  value="12:00">12:00</option>
										<option  value="12:30">12:30</option>
										<option  value="13:00">13:00</option>
										<option  value="13:30">13:30</option>
										<option  value="14:00">14:00</option>
										<option  value="14:30">14:30</option>
										<option  value="15:00">15:00</option>
										<option  value="15:30">15:30</option>
										<option  value="16:00">16:00</option>
										<option  value="16:30">16:30</option>
										<option  value="17:00">17:00</option>
										<option  value="17:30">17:30</option>
										<option  value="18:00">18:00</option>
										<option  value="18:30">18:30</option>
										<option  value="19:00">19:00</option>

									</select>
								</div>
							</div>



							<div class="form-group">
								<label for="end" class="col-sm-2 control-label">Fecha Final</label>
								<div class="col-sm-10">
									<input type="text" name="end" class="form-control" id="end" readonly>
								</div>
							</div>



							<div class="form-group">
								<label for="end-time" class="col-sm-2 control-label">Duración: </label>
								<div class="col-sm-10">
									<select name="end-time" class="form-control" id="end-time">

										<option value="1 hora">&#9724; 1 hora</option>
										<option value="30 min">&#9724; 30 min</option>
									</select>
								</div>
							</div>




						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-info" data-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>



		<!-- Modal -->
		<div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<form class="form-horizontal" method="POST" action="editEventTitle.php">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Modificar Cita</h4>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<label for="title" class="col-sm-2 control-label">Titulo</label>
								<div class="col-sm-10">
									<input type="text" name="title" class="form-control" id="title" placeholder="Titulo">
								</div>
							</div>
							<div class="form-group">
								<label for="color" class="col-sm-2 control-label">Color</label>
								<div class="col-sm-10">
									<select name="color" class="form-control" id="color">
										<option value="">Seleccionar</option>
										<option style="color:#0071c5;" value="#0071c5">&#9724; Azul oscuro</option>
										<option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquesa</option>
										<option style="color:#008000;" value="#008000">&#9724; Verde</option>
										<option style="color:#FFD700;" value="#FFD700">&#9724; Amarillo</option>
										<option style="color:#FF8C00;" value="#FF8C00">&#9724; Naranja</option>
										<option style="color:#FF0000;" value="#FF0000">&#9724; Rojo</option>
										<option style="color:#000;" value="#000">&#9724; Negro</option>

									</select>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<div class="checkbox">
										<label class="text-danger"><input type="checkbox" name="delete"> Eliminar Evento</label>
									</div>
								</div>
							</div>

							<input type="hidden" name="id" class="form-control" id="id">


						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary">Guardar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->

	<!-- jQuery Version 1.11.1 -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- FullCalendar -->
	<script src='js/moment.min.js'></script>
	<script src='js/fullcalendar/fullcalendar.min.js'></script>
	<script src='js/fullcalendar/fullcalendar.js'></script>
	<script src='js/fullcalendar/locale/es.js'></script>


	<script>
		$(document).ready(function() {

			var date = new Date();
			var yyyy = date.getFullYear().toString();
			var mm = (date.getMonth() + 1).toString().length == 1 ? "0" + (date.getMonth() + 1).toString() : (date.getMonth() + 1).toString();
			var dd = (date.getDate()).toString().length == 1 ? "0" + (date.getDate()).toString() : (date.getDate()).toString();

			$('#calendar').fullCalendar({
				header: {
					language: 'es',
					left: 'prev,next today',
					center: 'title',
					right: 'month,basicWeek,basicDay',

				},
				defaultView: 'month',
				showNonCurrentDates: false,
				editable: true,
				eventLimit: true,
				selectable: true,
				selectHelper: true,
				// select: function(start, end) {

				// 	$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
				// 	$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
				// 	$('#ModalAdd').modal('show');
				// },



				select: function(start, end) {
					$('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD'));
					$('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD'));
					$('#ModalAdd #start-time').val(moment(start).format('HH:mm'));
					$('#ModalAdd #end-time').val(moment(end).format('HH:mm'));
					$('#ModalAdd').modal('show');
				},




				eventRender: function(event, element) {
					var doubleClickTimeout = null;

					// Agregar un controlador de eventos para el doble clic en la cita
					element.on('click', function() {
						if (doubleClickTimeout != null) {
							// Se hizo doble clic, cancelar el temporizador y mostrar el modal de edición
							clearTimeout(doubleClickTimeout);
							doubleClickTimeout = null;
							$('#ModalEdit #id').val(event.id);
							$('#ModalEdit #title').val(event.title);
							$('#ModalEdit #color').val(event.color);
							$('#ModalEdit').modal('show');
						} else {
							// Configurar un temporizador para detectar el doble clic
							doubleClickTimeout = setTimeout(function() {
								doubleClickTimeout = null;
								var endTimeOption = $('#end-time option:selected').text();
								var eventDataStr =
									'TITULO: ' + event.title + '\n' +
									'DIA CITA: ' + event.start.format() + '\n' +
									'DIA SIGUIENTE: ' + event.end.format() + '\n' +
									'DURACION: ' + endTimeOption + '\n' +
									'HORA CITA: ' + event.start.format('h:mm A');
								alert("INFORMACIÓN DE LA CITA: \n\n" + eventDataStr);
							}, 250); // Ajusta este valor según tus necesidades
						}
					});
				},
				eventDrop: function(event, delta, revertFunc) { // si changement de position

					edit(event);

				},
				eventResize: function(event, dayDelta, minuteDelta, revertFunc) { // si changement de longueur

					edit(event);

				},
				events: [
					<?php foreach ($events as $event) :

						$start = explode(" ", $event['start']);
						$end = explode(" ", $event['end']);
						if ($start[1] == '00:00:00') {
							$start = $start[0];
						} else {
							$start = $event['start'];
						}
						if ($end[1] == '00:00:00') {
							$end = $end[0];
						} else {
							$end = $event['end'];
						}
					?> {
							id: '<?php echo $event['id']; ?>',
							title: '<?php echo $event['title']; ?>',
							start: '<?php echo $start; ?>',
							end: '<?php echo $end; ?>',
							color: '<?php echo $event['color']; ?>',
						},
					<?php endforeach; ?>
				]
			});

			function edit(event) {
				start = event.start.format('YYYY-MM-DD HH:mm:ss');
				if (event.end) {
					end = event.end.format('YYYY-MM-DD HH:mm:ss');
				} else {
					end = start;
				}

				id = event.id;

				Event = [];
				Event[0] = id;
				Event[1] = start;
				Event[2] = end;

				$.ajax({
					url: 'editEventDate.php',
					type: "POST",
					data: {
						Event: Event
					},
					success: function(rep) {
						if (rep == 'OK') {
							alert('Evento se ha guardado correctamente');
						} else {
							alert('No se pudo guardar. Inténtalo de nuevo.');
						}
					}
				});
			}

		});
	</script>

</body>

</html>