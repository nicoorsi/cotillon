<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2 class="text-center">Clientes</h2>
<div class="row">
<a href="<?php echo base_url('/clientes/crear');?>" class="btn btn-primary pull-right" title="Agregar un nuevo cliente"><i class="fa fa-plus"></i></a>
</div>
<hr>
<table class="table table-striped">
<thead>
<tbody>
<tr class="info">
<th>#</th>
<th>Clientes</th>
<th>Telefono</th>
<th>Direcccion</th>
<th>Correo electronico</th>
<th>Tipo de Cliente</th>
<th>Localidad</th>
<th>Opciones</th>
</tr>
</thead>
</tbody>
<?php
foreach($clientes as $c):  ?>

<tr>
<td><?php echo $c['id_cliente']; ?> </td>
<td><?php echo $c['nombre_cliente']; ?> </td>
<td><?php echo $c['telefono']; ?> </td>
<td><?php echo $c['direccion']; ?></td>
<td><?php echo $c['mail_cliente']; ?></td>
<td><?php echo $c['tipo_cliente']; ?> </td>
<td><?php echo $c['nombre_localidad']; ?> </td>
<td>
<div class="btn-group btn-group-sm">
<a href="<?php echo base_url("clientes/ver/".$c['id_cliente']); ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
<?php if($es_admin_usuario_logueado): ?>
<a href="<?php echo base_url("clientes/actualizar/".$c['id_cliente'] ); ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>


<?php endif; ?>
</td>
</tr>
<?php    endforeach;  ?>
</table>
