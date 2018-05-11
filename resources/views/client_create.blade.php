<form action="<?php echo route('client.store') ?>" method="post" >
<!-- 	ecouteur -->
	<?php echo csrf_field() ?>
	Nom <input name="client_nom"/>
	<br>
	Prenom <input name="client_prenom"/>
	<br>
	E.Mail <input name="client_email"/>
	<br>
	Date d'Inscription <input name="client_datecreation"/>
	<br>
	<input type="submit" value="valider"/>

</form>