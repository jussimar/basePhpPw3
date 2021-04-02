<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<main>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Idade</th>
			<th colspan="2">Ações</th>
		</tr>
		<?php
			foreach($data as $pessoa){
		?>
				<tr>
					<td> <?= $pessoa->id_pessoa ?> </td>
					<td> <?= $pessoa->nm_pessoa ?> </td>
					<td> <?= $pessoa->nr_idade ?> </td>
					<td> <a class="btn btn-primary" href="<?=base_url('editar/'.$pessoa->id_pessoa)?>"> Editar </a> </td>
					<td>
						<form method="delete" action="<?=base_url('deletar/'.$pessoa->id_pessoa)?>">
							<button class="btn btn-danger">Deletar</button>
						</form>
					</td>
				</tr>
		<?php		
			}
		?>
	</table>
</main>
