<a id="btnNumCita" style="float: right;-webkit-border-radius: 40px 40px 40px 40px;padding: 15px;font-size: 15px;" class="breadcrumbnotBefore btn btn-custom2" href="tel:+5541655050" onclick="changetxtbtncita();">Agenda tu cita</a>

<script>
	function changetxtbtncita(){
		$("#btnNumCita").html('<i class="fa fa-phone"></i> 55 4165 5050');
		setTimeout('$("#btnNumCita").html("Agenda tu cita");',10000);
	}
</script>