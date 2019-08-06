<br>
<form class="form-horizontal" method = "post" action = "<?php echo site_url("login/checkingLogin");?>">
    <fieldset>

        <!-- Form Name -->
        <legend text-align ="center">Login</legend>

       <?php if(isset($op)){?>
        <div align = "center">
        <div class="alert alert-danger" role="alert"><?php echo $op ?></div>
        </div>
        <?php } ?>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="usuario">Usuario:</label>  
            <div class="col-md-4">
            <input id="usuario" name="usuario" type="text" placeholder="usuario" class="form-control input-md" required="">
                
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
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
            </div>
            <label class="col-md-2 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <a href="<?php echo site_url('login/registrarseView');?>" id="singlebutton" name="singlebutton" class="btn btn-primary">Registrarse</a>
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