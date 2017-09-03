$(document).ready( function() {


});

$( document ).ready(function() {

	var barra   =  0;
	var contDia =  0;
	var mes     =  0;

	$('#clock').countimer({
		autoStart : false,
		enableEvents: true,
	}).on('second', function(evt, time){

		var hora = time.original.hours;
		var minuto = time.original.minutes;
		var segundo = time.original.seconds;

		// Controla a barra de progresso
		$('.progress-bar').css('width',Math.round( (barra*100) / 900 ) + '%');
		$('.progress-bar').html(Math.round( (barra*100) / 900 ) + '%');
		barra += 1;

		// Se o clock for igual a um dia
		if (
			(minuto == 2  && segundo == 8)  || (minuto == 4  && segundo == 17) ||
			(minuto == 6  && segundo == 25) || (minuto == 8  && segundo == 34) ||
			(minuto == 10 && segundo == 42) || (minuto == 12 && segundo == 51) ||
			(minuto == 15 && segundo == 0)  || (minuto == 17 && segundo == 8)  ||
			(minuto == 19 && segundo == 17) || (minuto == 21 && segundo == 25) ||
			(minuto == 23 && segundo == 34) || (minuto == 25 && segundo == 42) ||
			(minuto == 27 && segundo == 51) || (minuto == 30 && segundo == 0)  ||
			(minuto == 32 && segundo == 8)  || (minuto == 34 && segundo == 17) ||
			(minuto == 36 && segundo == 25) || (minuto == 38 && segundo == 34) ||
			(minuto == 40 && segundo == 42) || (minuto == 42 && segundo == 51) ||
			(minuto == 45 && segundo == 0)  || (minuto == 47 && segundo == 8)  ||
			(minuto == 49 && segundo == 17) || (minuto == 51 && segundo == 25) ||
			(minuto == 53 && segundo == 34) || (minuto == 55 && segundo == 42) ||
			(minuto == 57 && segundo == 51) || (minuto == 60 && segundo == 0)
			){

			contDia += 1; // Incrementa o dia
			$('#'+contDia).addClass('passou');
		}

		// Organiza as semanas
		if ((minuto == 15  || minuto  == 30  || minuto  == 45) && segundo  == 0) {
			barra = 0; // Zera a barra de progresso
		}

		// Organiza os meses
		if ((hora == 1 || hora == 2 || hora == 3 || hora == 4 || hora == 5 || hora == 6)  && segundo == 0 && minuto == 0){
				
				contDia = 0; // Zera o contador de dia passado
				barra = 0;   // Zera a barra de progresso
				$('#mes'+time.original.hours).addClass('passouMes');
				$('#mes').html((time.original.hours+1) + 'º Mes');
				$('#calendario').find('.passou').removeClass('passou');
		}

		// Interrmpe o contador no terceiro mês
		if (hora == 3 && minuto == 0 && segundo == 0) {
			$('#btn-reset').addClass('disabled');
			$('#btn-retomar').removeClass('disabled');
			$('#clock').countimer('stop');
		}
	});

	$('#btn-play').click(function(){
		$('#btn-play').addClass('hide');
		$('#btn-retomar').removeClass('hide').addClass('disabled');		
		$('#clock').countimer('start');
	});
	
	$('#btn-reset').click(function(){
		$('#btn-reset').addClass('disabled');
		$('#btn-retomar').removeClass('disabled');
		$('#clock').countimer('stop');
	});

	$('#btn-retomar').click(function(){
		$('#btn-retomar').addClass('disabled');
		$('#btn-reset').removeClass('disabled');
		$('#clock').countimer('resume');
	});
});
