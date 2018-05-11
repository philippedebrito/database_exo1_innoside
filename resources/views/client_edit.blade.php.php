	<form action="<?php echo route('client.store',$client->id) ?>" method="post" >
<!-- 	ecouteur -->
	<?php echo csrf_field() ?>
	<?php echo method_field('PATCH') ?>
	Nom <input type="text" name="client_nom" value="<?php echo $client->nom  ?>" />
	<br>
	Prenom <input type="text" name="client_prenom" value="<?php echo $client->prenom ?>" />
	<br>
	E.Mail <input type="text" name="client_email" value="<?php echo $client->email ?>" />
	<br>
	Date d'Inscription <input type="int" name="client_datecreation" value="<?php echo $client->dateinscription ?>" />
	<br>
	<input type="submit" value="valider"/>

</form>