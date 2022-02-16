<html>

<head>
  <title>Rent Car</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/stylesHome.css">
</head>

<body>
  <?php include "php/navbar.php"; ?>
  <div class="container">
    <div class="row">
      <!-- Gama baja -->
      <ul class="cards">
        <li>
          <a href="" class="card">
            <img src="./img/Baja.png" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                  <path />
                </svg>
                <div class="card__header-text">
                  <h3 class="card__title">SPARK GT 2022</h3>
                  <span class="card__status">7.000 KMS 50US x Dia</span>
                </div>
              </div>
              <p class="card__description">Es un automóvil de fabricación americana, ensamblado en
                Suramerica.</p>
            </div>
          </a>
        </li>
        <!-- Gama Media -->
        <li>
          <a href="" class="card">
            <img src="./img/Media.png" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                  <path />
                </svg>
                <div class="card__header-text">
                  <h3 class="card__title">FORD FIESTA 2019</h3>
                  <span class="card__status">45.000 KMS 70US x Dia</span>
                </div>
              </div>
              <p class="card__description">Excelente alternativa para
                emprender ese viaje de negocios o esas vacaciones</p>
            </div>
          </a>
        </li>
        <!-- Gama Alta -->
        <li>
          <a href="" class="card">
            <img src="./img/Alta.png" class="card__image" alt="" />
            <div class="card__overlay">
              <div class="card__header">
                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                  <path />
                </svg>
                <div class="card__header-text">
                  <h3 class="card__title">AUDI R8 2021</h3>
                  <span class="card__status">22.000 KMS 100US x Dia</span>
                </div>
              </div>
              <p class="card__description">Alquilar un Audi R8 te permitirá sentirte como un auténtico
                piloto</p>
            </div>
          </a>
        </li>
      </ul>
      <div class="col-md-12">
        <h2>Renta de autos</h2>
        <!-- Button trigger modal -->
        <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
        <br><br>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar</h4>
              </div>
              <div class="modal-body">
                <form role="form" method="post" action="php/agregar.php">
                  <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="document">Cédula</label>
                    <input type="text" class="form-control" name="document" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="form-group">
                    <label for="gama">Tipo de auto</label>
                    <select name="gama" class="form-control" id="gama" required>
                      <option value="baja">Gama baja</option>
                      <option value="media">Gama media</option>
                      <option value="alta">Gama alta</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="start">De</label>
                    <input type="date" class="form-control" name="start">
                  </div>
                  <div class="form-group">
                    <label for="end">Hasta</label>
                    <input type="date" class="form-control" name="end">
                  </div>

                  <button type="submit" class="btn btn-default">Agregar</button>
                </form>
              </div>

            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


        <?php include "php/tabla.php"; ?>
      </div>
    </div>
  </div>

  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>