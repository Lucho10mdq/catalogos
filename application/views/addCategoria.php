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
        <li class="active"><a href="#">Categoria <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Producto <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('producto/index');?>">Agregar</a></li>
            <li><a href="<?php echo site_url('producto/listarProductos');?>">Listar</a></li>
            <li><a href="#">Buscar</a></li>
          </ul>
        </li>
      </ul>
      <span class="navbar-text">
         Usuario: <?php echo $this->session->userdata('usuario') ;?>
      </span>
      <span class="navbar-text">
       <a href= "<?php echo site_url('main/salir');?>"> Salir</a>
      </span>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<br>
<form class="form-horizontal" method = "post" action = "<?php echo site_url('categoria/agregarCategoria');?>">
<fieldset>

<!-- Form Name -->
<legend>Agregar Categoria</legend>
<?php if(isset($op)){?>
<div align = "center">
<div class="alert alert-danger" role="alert"><?php echo $op ?></div>

</div>
<?php } ?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md" >
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="registrarse"></label>
  <div class="col-md-4">
    <button id="registrarse" name="registrarse" class="btn btn-primary">Guardar</button>
  </div>
</div>
</fieldset>
</form>
<style>
    legend {
        display: block;
        width: 100%;
        padding: 0;
        margin-bottom: 20px;
        font-size: 21px;
        line-height: inherit;
        color: #333;
        border: lightseagreen;
        border-bottom: 1px solid #e5e5e5;
        text-align: center;
    }
</style>