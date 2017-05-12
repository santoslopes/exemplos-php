<html>
<head>
<title>Trabalho prático </title>
<link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/extensions/export/bootstrap-table-export.js"></script>
<script src="http://rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
</head>
<body>
<?php
//ligação à base de dados
$mysql_id = mysql_connect('localhost', "root", "");
mysql_select_db('gesplica',$mysql_id);
$resultados_query = mysql_query("SELECT * FROM disciplinas");
?>
<div class="container">
<div class="row">
<div class="col-md-8">
<div id="toolbar">
            <select class="form-control">
                <option value="">Exportar Visiveis</option>
                <option value="all">Exportar Todos</option>                
            </select>
        </div>	
		<table id="table" data-toggle="table"		
		data-sort-name="id"
		data-sort-order="desc"
		data-sort-name="descricao"		
		data-show-columns="true"	
		data-show-export="true"	
		data-toolbar="#toolbar"
		>
 <thead>			  
		<tr>				
		<th data-field="id" data-sortable="true">Id</th>
		<th data-field="codigo">Codigo</th>
		<th data-field="descricao" data-sortable="true">Descricao</th>
		<th data-field="preco">Preco</th>
		<th data-field="iva">Iva</th>
		<th data-field="total">Total</th>
		</tr>
 </thead>
		<?php
		while($row=mysql_fetch_array($resultados_query)){
		?>
		<tr>
		<td><?php echo $row['id'] ?></td>
		<td><?php echo $row['codigo'] ?></td>
		<td><?php echo $row['descricao'] ?></td>
		<td><?php echo $row['preco'] ?></td>
		<td><?php echo $row['iva'] ?></td>
		<td><?php echo $row['total'] ?></td>
		</tr>
		<?php } 
		?>
		</table>
</div>
<div class="col-md-4">
<p>Coluna de Tamanho 4</p>
</div>
</div>
</div>
</body>
</html>