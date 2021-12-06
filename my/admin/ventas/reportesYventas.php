<br><br>

<div class="row" style="margin-right:400px;  width: 1100px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-12">
		<div class="table-responsive">
        <h4>Reportes y ventas</h4>
        <caption><label>Ventas :)</label></caption>
			<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
				<tr>
					<td>Folio</td>
					<td>Fecha</td>
					<td>Cliente</td>
					<td>Total de compra</td>
					<td>Ticket</td>
					<td>Reporte</td>
				</tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
					<td>
						<a href="../procesos/ventas/crearTicketPdf.php?idventa=<?php echo $ver[0] ?>" class="btn btn-danger btn-sm">
							Ticket <span class="glyphicon glyphicon-list-alt"></span>
						</a>
					</td>
					<td>
						<a href="../procesos/ventas/crearReportePdf.php?idventa=<?php echo $ver[0] ?>" class="btn btn-danger btn-sm">
							Reporte <span class="glyphicon glyphicon-file"></span>
						</a>	
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>

 