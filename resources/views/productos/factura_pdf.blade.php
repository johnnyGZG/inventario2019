<!DOCTYPE html>
<html>
<head>
	<title>Factura</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>Nombre Producto</th>
				<th>Precio U/D</th>
				<th>Cantidad</th>
				<th>Total</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td>
					{{ $producto->nom_producto }}
				</td>
				<td>
					$ {{ number_format($producto->precio,0,',','.') }}
				</td>
				<td>
					{{ $inventario->cantidad }}
				</td>
				<td>
					$ {{ number_format($inventario->total,0,',','.') }}
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>