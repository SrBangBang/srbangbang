<?php 
$now = date("Y-m-d"); // or your date as well
$date2 = new DateTime($now);
$your_date = "2020-08-25";
$date1 = new DateTime($your_date);
//$datediff = $now - $your_date;//obtenemos diferencia a la fecha inicial
$diff = $date1->diff($date2);
$diff = $diff->days;
$num = $diff/3;//dividimos entre 3, se suma cada tercer dia


$countLentes = 0;
$countEsLa = 0;
$countMeEn = 0;
$countTra = 0;
$countConMe = 0;
$countClient = 0;
if($num > 0){//si es entero, por esto se multiplica
	$countLentes = 250 * $num;
	$countEsLa = 1000 * $num;
	$countMeEn = 10000 * $num;
	$countTra = 500 * $num;
	$countConMe = 7000 * $num;
	$countClient = 8750 * $num;
}
$countLentes = 150000 + $countLentes;
$countEsLa = 12000000 + $countEsLa;
$countMeEn = 50000000 + $countMeEn;
$countTra = 200000 + $countTra;
$countConMe = 500000 + $countConMe;
$countClient =  12850000 + $countClient;
?>

				<div class="container">
                    <h2 class="title custom mb25">Nuestras metas</h2>
                    <div class="row">
                        <div class="col-md-2 col-sm-4 col-xs-6 count-container">
                            <i class="fa fa-eye count-icon"></i>
                            <!--<span class="count" data-from="0" data-to="150000" data-speed="3000" data-refresh-interval="50">0</span>-->
                            <span class="count"><?=number_format($countLentes)?></span>
                            <h4 class="count-title">Lentes realizados</h4>
                        </div><!-- End .col-md-2 -->
                        <div class="col-md-2 col-sm-4 col-xs-6 count-container">
                            <i class="fa fa-file-text-o count-icon"></i>
                            <!--<span class="count" data-from="0" data-to="12000000" data-speed="3000" data-refresh-interval="60">0</span>-->
                            <span class="count"><?=number_format($countEsLa)?></span>
                            <h4 class="count-title">Estudios de laboratorio procesados</h4>
                        </div><!-- End .col-md-2 -->
                        <div class="col-md-2 col-sm-4 col-xs-6 count-container">
                            <i class="fa fa-medkit count-icon"></i>
                            <!--<span class="count" data-from="0" data-to="500000000" data-speed="3000" data-refresh-interval="70">0</span>-->
                            <span class="count"><?=number_format($countMeEn)?></span>
                            <h4 class="count-title">Medicamentos entregados</h4>
                        </div><!-- End .col-md-2 -->
                        <div class="col-md-2 col-sm-4 col-xs-6 count-container">
                            <i class="fa fa-gratipay  count-icon"></i>
                            <!--<span class="count" data-from="0" data-to="200000" data-speed="3000" data-refresh-interval="55">0</span>-->
                            <span class="count"><?=number_format($countTra)?></span>
                            <h4 class="count-title">Tratamientos dentales realizados</h4>
                        </div><!-- End .col-md-2 -->

                        <div class="col-md-2 col-sm-4 col-xs-6 count-container">
                            <i class="fa fa-heartbeat count-icon"></i>
                            <!--<span class="count" data-from="0" data-to="500000" data-speed="3000" data-refresh-interval="65">0</span>-->
                            <span class="count"><?=number_format($countConMe)?></span>
                            <h4 class="count-title">Consultas médicas otorgadas</h4>
                        </div><!-- End .col-md-2 -->

                        <div class="col-md-2 col-sm-4 col-xs-6 count-container">
                            <i class="fa fa-users  count-icon"></i>
                            <!--<span class="count" data-from="0" data-to="1000000" data-speed="3000" data-refresh-interval="75">0</span>-->
                            <span class="count"><?=number_format($countClient)?></span>
                            <h4 class="count-title">Clientes satifechos</h4>
                        </div><!-- End .col-md-2 -->
                    </div><!-- End .row -->
                    <div class="mb20"></div><!-- margin -->
                </div><!-- End .container -->