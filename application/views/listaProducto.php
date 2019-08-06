<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('categoria/agregarCategoria');?>">Categoria <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Producto <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('producto/index');?>">Agregar</a></li>
            <li><a href="#">Listar</a></li>
            <li><a href="#">Buscar</a></li>
          </ul>
        </li>
      </ul>
      <span class="navbar-text">
         Usuario: <?php echo $this->session->userdata('usuario') ;?>
      </span>  
      <span class="navbar-text">
        Salir
      </span>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<br>
<table class="table table-striped  col-md-4">
  <thead class = "thead-dark">
    <tr>
        <th scope = "col"> Producto </th>
        <th scope = "col"> Descripcion </th>
        <th scope = "col"> Precio </th>
        <th scope = "col"> Modificar </th>
        <th scope = "col"> Eliminar </th> 
    </tr>
  </thead>
  <?php foreach($producto as $proc) { ?>
  <tbody>
    <tr>
    <td><?php echo $proc["nombre"];?></td>
    <td><?php echo $proc["descripcion"];?></td>
    <td><?php echo $proc["precio"];?></td>
    <td><a href = "<?php echo site_url("producto/modificarProducto/".$proc["idProducto"]);?>">Modificar </a></td>
    <td><a href = "<?php echo site_url("producto/eliminarProducto/".$proc["idProducto"]);?>">Eliminar </a></td>
  </tbody>
  <?php } ?>
</table>