<?php
include "conexion.php";

$user_id = null;
$sql1 = "select * from rent where id = " . $_GET["id"];
$query = $con->query($sql1);
$rent = null;
if ($query->num_rows > 0) {
  while ($r = $query->fetch_object()) {
    $rent = $r;
    break;
  }
}
?>

<?php if ($rent != null) : ?>

  <form role="form" method="post" action="php/actualizar.php">
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" value="<?php echo $rent->name; ?>" name="name" required>
    </div>
    <div class="form-group">
      <label for="lastname">Cédula</label>
      <input type="text" class="form-control" value="<?php echo $rent->document; ?>" name="document" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" value="<?php echo $rent->email; ?>" name="email">
    </div>
    <div class="form-group">
      <label for="phone">Tipo de auto</label>
      <select name="gama" class="form-control" id="gama" required>
        <option value="<?php echo $rent->gama; ?>"><?php echo $rent->gama; ?></option>
        <option value="baja">Gama baja</option>
        <option value="media">Gama media</option>
        <option value="alta">Gama alta</option>
      </select>
    </div>
    <div class="form-group">
      <label for="start">Email</label>
      <input type="date" class="form-control" value="<?php echo $rent->start; ?>" name="start">
    </div>
    <div class="form-group">
      <label for="end">Email</label>
      <input type="date" class="form-control" value="<?php echo $rent->end; ?>" name="end">
    </div>
    <input type="hidden" name="id" value="<?php echo $rent->id; ?>">
    <button type="submit" class="btn btn-default">Actualizar</button>
  </form>
<?php else : ?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; ?>