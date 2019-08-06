<br>
<form class="form-horizontal" method = "post" action ="<?php echo site_url("login/registrarse");?>">
<fieldset>

<!-- Form Name -->
<legend>Registrarse</legend>

<?php if(isset($op)){?>
<div align = "center">
<div class="alert alert-success" role="alert"><?php echo $op ?></div>
<a href = "<?php echo site_url('login/index') ?>">Iniciar session</a>
</div>
<?php } ?>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="usuario">Usuario:</label>  
  <div class="col-md-4">
  <input id="usuario" name="usuario" type="text" placeholder="usuario" class="form-control input-md" required="usuario">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
    
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="registrarse"></label>
  <div class="col-md-4">
    <button id="registrarse" name="registrarse" class="btn btn-primary">Registrarse</button>
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
