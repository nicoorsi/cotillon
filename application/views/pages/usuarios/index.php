<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h2 class="text-center">Usuarios</h2>
<div class="row">
<a href="<?php echo base_url('/usuarios/crear');?>" class="btn btn-primary pull-right"><i class="fa fa-plus"></i></a>
</div>
<hr>
<table class="table table-striped">
<thead>
<tbody>
<tr class="info">
<th>ID</th>
<th>Nombre</th>
<th>DNI</th>
<th>Email</th>
<th>Administrador </th>
<?php if($es_admin_usuario_logueado): ?>  <th>Opciones</th> <?php endif; ?>
</thead>
</tbody>
<?php
foreach($usuarios as $user):  ?>
<tr>
<td>
<?php echo $user['id_usuario']; ?> </td>
<td>
<?php echo $user['nombre']." ".$user['apellido']; ?> </td>
<td>
<?php echo $user['dni']; ?> </td>
<td>
<?php echo $user['email']; ?> </td>
<?php    // evaluacion si es admin o no? ?>
<td><i class="fa <?php echo ( $user['es_admin'] ) ? " fa-check " : "fa-times ";?>" aria-hidden="true"></i></td>
<td>
<?php if($es_admin_usuario_logueado): ?>
<div class="btn-group">
<a href="<?php echo base_url("usuarios/ver/".$user['id_usuario'] ); ?>" class="btn btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
<a href="<?php echo base_url("usuarios/actualizar/".$user['id_usuario'] ); ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<a href="<?php echo base_url("usuarios/eliminar/".$user['id_usuario'] ); ?>" class="btn btn-primary"><i class="fa fa-trash" aria-hidden="true"></i></a>
<?php endif; ?>
</div>
</td>
</tr>
<?php    endforeach;  ?>
</table>
