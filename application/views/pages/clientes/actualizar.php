<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="col-xm-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 well">
  <?php if ( isset($exito) and $exito ) {
    echo '
    <div class="alert alert-block alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>Genial!</h4>
    Se ha creado exitosamente el Cliente <strong>'.$cliente["nombre_cliente"].
    '</div>';
  }
  echo form_open("/clientes/actualizar/".$cliente['id_cliente'] )?>

  <div class="form-group">
    <label for="nombre_cliente">Nombre<?php echo form_error("nombre_cliente");?></label>
    <input value="<?php echo $cliente["nombre_cliente"];?>" type="text" class="form-control" name="nombre_cliente" placeholder="Ingrese Nombre del cliente">

    <label for="direccion">Direcccion<?php echo form_error("direccion") ?></label>
    <input value="<?php echo $cliente["direccion"];?> "type="text" class="form-control" name="direccion" placeholder="Ingrese Direcccion del Cliente">

    <label for="mail_cliente">Correo electronico<?php echo form_error("mail_cliente");?></label>
    <input value="<?php echo $cliente["mail_cliente"];?>" type="text" class="form-control" name="mail_cliente" placeholder="Ingrese Correo Electronico">

    <label for="tipo_cliente">Tipo de cliente<?php echo form_error("tipo_cliente");?></label>
    <select name="tipo_cliente" class="form-control" placeholder="Seleccione un tipo de cliente">
      <option value="Minorista">Minorista</option>
      <option value="Mayorista">Mayorista</option>
    </select>

    <label for="id_localidad">Localidad<?php echo form_error("id_localidad");?></label>
    <select name="id_localidad" class="form-control">
      <?php foreach ($localidades as $loc){
        $aux = '<option value="';
        $aux .=$loc['id_localidad'];
        $aux .=($cliente['id_localidad'] === $loc['id_localidad']) ? '" selected>' :'">';
        $aux .=$loc['nombre_localidad'] . "</opcion>\n";
        echo $aux;
      }?>
    </select>

    <label for="telefono">Telefono<?php echo form_error("telefono");?></label>
    <textarea name="telefono" class="form-control" maxlength=255 placeholder="Ejm:(0342)-4543984"><?php echo $cliente["telefono"];?></textarea>
    <input  type="submit" class="btn btn-default" name="submit" value="Enviar">
  </div>
  <?php echo form_close() ?>
</div>
