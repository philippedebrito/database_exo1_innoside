	<a href="<?php echo route('client.create') ?>">Créer</a>
	<br>
	<br>
	<br>

<table border="1">
	<tr>
		<th>Id</th>
		<th>Nom</th>
		<th>Prenom</th>
		<th>E.Mail</th>
		<th>Date Inscription</th>
		<th>Action</th>
	</tr>
	<?php
	$id = 1;
	foreach ($client as $key => $value) {
	  	?>
	<tr>
		<td><?php echo $id++;?></td>
		<td><?php echo $value->nom;?></td>
		<td><?php echo $value->prenom;?></td>
		<td><?php echo $value->email;?></td>
		<td><?php echo $value->dateinscription;?></td>
		<td>
			<a href="<?php echo route('client.edite',$value->id); ?>">Editer</a>
			&nbsp; &nbsp;
			<a href="">Effacer</a>
			
		
		</td>
	</tr>
	<?php 
	} 
	 ?>
</table>