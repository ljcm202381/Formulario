<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Bienvenidos al banco SENA</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
    Ingresar
  </button>
	<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar sus datos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="index.php" method="POST">
          	<div class="form-group">
            <label for="usuario">Documento del titular:</label>
            <input type="number" class="form-control" placeholder="Ingresar documento" id="txttitular" name="txttitular">
            </div>
            <div class="form-group">
            <label for="usuario">Contraseña:</label>
            <input type="password" class="form-control" placeholder="Ingresar contraseña" id="txtcontrasena" name="txtcontrasena">
            </div>
          <button type="submit" class="btn btn-primary">Ingreso</button>
          </form>
        </div>
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  
</div>


</body>
</html>