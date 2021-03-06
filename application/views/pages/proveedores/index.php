<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2 class="text-center">Proveedores</h2>
<div class="row">
<a href="<?php echo base_url('/proveedores/crear');?>" class="btn btn-primary pull-right" title="Agregar un nuevo proveedor"><i class="fa fa-plus"></i></a>
</div>
<hr>
<table class="table table-striped">
<thead>
<tbody>
<tr class="info">
<th>#</th>
<th>Nombre</th>
<th>Localidad</th>
<th>Contacto</th>
<th>Opciones</th>
</tr>
</thead>
</tbody>
<?php
foreach($proveedores as $prov):  ?>
<tr>
<td>
<?php echo $prov['id_proveedor']; ?> </td>
<td>
<?php echo $prov['nombre_proveedor'] ?> </td>
<td>
<?php echo $prov['nombre_localidad']; ?> </td>
<td>
<?php echo $prov['contacto']; ?> </td>
<td>
<div class="btn-group btn-group-sm">
<a href="<?php echo base_url("proveedores/ver/".$prov['id_proveedor'] ); ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
<?php if($es_admin_usuario_logueado): ?>
<a href="<?php echo base_url("proveedores/actualizar/".$prov['id_proveedor'] ); ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<?php endif; ?>
</div>
</td>
</tr>
<?php    endforeach;  ?>
</table>
