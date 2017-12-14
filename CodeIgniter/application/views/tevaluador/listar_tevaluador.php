<div>
<?php
		printf('Gestión de evaluadores');
		if ($tevaluadores){
			printf('<table>
				<thead>			
				<tr>
					<td>
						<label for="select_all"></label>
						<input id="select_all" type="checkbox">
					</td>
				');
			
			$primertevaluador = $tevaluadores->result()[0];
			foreach ($primertevaluador as $key => $value) {
				printf('<th id="%s">
						<span>%s</span>
					</th>',$key,$key);
			}
			printf('<th>Acciones</th></tr>
			</thead>
			<tbody>');

			foreach ($tevaluadores->result() as $tevaluador) {
				printf('<tr>
					<th>
					<label for="select_%d"></label>
					<input id="select_%d" type="checkbox">
					</th>',$tevaluador->ID_TEvaluador,$tevaluador->ID_TEvaluador);

				foreach ($tevaluador as $detalle) {
					printf('<td>
					<a href="Tevaluador/editar/%s">%s</a>
					</td>',$tevaluador->ID_TEvaluador,$detalle);
				}

				$url = "'Tevaluador/borrar/".$tevaluador->ID_TEvaluador."'"; 
				printf('<td><input type="button" onclick="location.href=%s" value="Borrar"></td>',$url);
				printf('</tr>');
			}	
			printf('</tbody></table>');
		}
		else{
				printf('No hay Registros');
		}
		?>		
</div>