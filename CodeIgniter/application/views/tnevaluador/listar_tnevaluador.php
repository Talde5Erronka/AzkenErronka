<div>
<?php
		printf('Gestión de evaluadores');
		if ($tnevaluadores){
			printf('<table>
				<thead>			
				<tr>
					<td>
						<label for="select_all"></label>
						<input id="select_all" type="checkbox">
					</td>
				');
			
			$primertnevaluador = $tnevaluadores->result()[0];
			foreach ($primertnevaluador as $key => $value) {
				printf('<th id="%s">
						<span>%s</span>
					</th>',$key,$key);
			}
			printf('<th>Acciones</th></tr>
			</thead>
			<tbody>');

			foreach ($tnevaluadores->result() as $tnevaluador) {
				printf('<tr>
					<th>
					<label for="select_%d"></label>
					<input id="select_%d" type="checkbox">
					</th>',$tnevaluador->ID_TNEvaluador,$tnevaluador->ID_TNEvaluador);

				foreach ($tnevaluador as $detalle) {
					printf('<td>
					<a href="Tnevaluador/editar/%s">%s</a>
					</td>',$tnevaluador->ID_TNEvaluador,$detalle);
				}

				$url = "'Tnevaluador/borrar/".$tnevaluador->ID_TNEvaluador."'"; 
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