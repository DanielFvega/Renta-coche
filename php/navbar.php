<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./"><b>RentCar</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <form class="navbar-form navbar-left" role="search" action="./buscar.php">
        <div class="form-group">
          <input type="text" name="s" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button>
      </form>
      <a class="navbar-brand" href="cuenta.php"><b>Mi cuenta</b></a>
      <a href="#" id="exit" class="navbar-brand" href="./"><b>Salir</b></a>
      <script>
						$("#exit").click(function(e) {
							e.preventDefault();
							p = confirm("¿ Estas seguro de cerrar la sesión ?");
							if (p) {
								window.location = "./cuenta.php";
							}
						});
					</script>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>