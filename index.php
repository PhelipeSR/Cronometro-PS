<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Processo Seletivo</title>
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="custon.css" rel="stylesheet">

	</head>
	<body>
		
		<div class="container-fluid">
			<div class="row">
				<h1 class="text-center">Processo Seletivo EngNet</h1>
				
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="text-center">Tempo Decorrido</h4>
								</div>

								<div class="panel-body">
									<div class="painel" id="clock">00:00</div>
								</div>

								<div class="panel-footer">
									<center>
										<button class="btn btn-info hide" id="btn-retomar">
											<i class="glyphicon glyphicon-play"></i> Retomar
										</button>
										<button class="btn btn-info " id="btn-play">
											<i class="glyphicon glyphicon-play"></i> Iniciar
										</button>
										<button class="btn btn-danger" id="btn-reset">
											<i class="glyphicon glyphicon-pause"></i> Pausar
										</button>
									</center>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="text-center">Semana</h4>
								</div>
								<div class="panel-body">
									<div class="progress">
										<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%;min-width: 2em;">
											0%
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Coluna do meio -->

				<div class="col-sm-8">
					
					<table class="table table-bordered" id="calendario">
						<thead>							
							<tr class="cabecalho"><th colspan="7" id="mes">1º Mês</th></tr>							
							<tr class="cabecalho">
								<th>D</th>
								<th>S</th>
								<th>T</th>
								<th>Q</th>
								<th>Q</th>
								<th>S</th>
								<th>S</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td id="1">1</td>
								<td id="2">2</td>
								<td id="3">3</td>
								<td id="4">4</td>
								<td id="5">5</td>
								<td id="6">6</td>
								<td id="7">7</td>
							</tr>
							<tr>
								<td id="8">8</td>
								<td id="9">9</td>
								<td id="10">10</td>
								<td id="11">11</td>
								<td id="12">12</td>
								<td id="13">13</td>
								<td id="14">14</td>
							</tr>
							<tr>
								<td id="15">15</td>
								<td id="16">16</td>
								<td id="17">17</td>
								<td id="18">18</td>
								<td id="19">19</td>
								<td id="20">20</td>
								<td id="21">21</td>
							</tr>
							<tr>
								<td id="22">22</td>
								<td id="23">23</td>
								<td id="24">24</td>
								<td id="25">25</td>
								<td id="26">26</td>
								<td id="27">27</td>
								<td id="28">28</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div> <!-- Row -->

			<div class="row">
				<div class="col-sm-12">
					<div id="tabela">
						<table class="table " id="meses">
							<tr class="cabecalho"><th colspan="11" id="mes">Meses Percorridos</th></tr>	
							<tr>
								<td id="mes1">1º Mês</td>
								<td id="mes2">2º Mês</td>
								<td id="mes3">3º Mês</td>
								<td id="mes4">4º Mês</td>
								<td id="mes5">5º Mês</td>
								<td id="mes6">6º Mês</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script src="jquery/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="countup/moment.js"></script>
		<script src="countup/countimer.js"></script>
		<script src="custon.js"></script>
	</body>
</html>