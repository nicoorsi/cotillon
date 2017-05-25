<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2 class="text-center">Localidades</h2>
<div class="row">
<a href="<?php echo base_url('/localidades/crear');?>" class="btn btn-primary pull-right" title="Agregar una nueva localidad"><i class="fa fa-plus"></i></a>
</div>
<hr>
<table class="table table-striped">
<thead>
<tbody>
<tr class="info">
<th>#</th>
<th>Localidad</th>
<th>Opciones</th>
</tr>
</thead>
</tbody>
<?php
foreach($localidades as $loc):  ?>
<tr>
<td>
<?php echo $loc['id_localidad']; ?> </td>
<td>
<?php echo $loc['nombre_localidad'] ?> </td>
<td>
<div class="btn-group btn-group-sm">
<a href="<?php echo base_url("localidades/ver_clientes/".$loc['id_localidad']); ?>" class="btn btn-primary"><i class="fa fa-address-book" aria-hidden="true"></i></a>
<a href="<?php echo base_url("localidades/ver_proveedores/".$loc['id_localidad']); ?>" class="btn btn-primary"><i class="fa fa-id-card" aria-hidden="true"></i></a>
<?php if( $es_admin_usuario_logueado ): ?>
<a href="<?php echo base_url("localidades/actualizar/".$loc['id_localidad']); ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<?php endif; ?>
</div>
</td>
</tr>
<?php    endforeach;  ?>
</table>
