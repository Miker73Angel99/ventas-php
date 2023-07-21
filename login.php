<?php
include_once "encabezado.php";
?>
<div class="container">
<div class="login-box">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <span class="logo-font">TAC-</span>MOVIL
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h3 class="header-title">LOGIN</h3>
                    <form action="iniciar_sesion.php" method="post">
                    <div class="form-group pb-3">
                        <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" placeholder="Contraseña" class="form-control" name="password" id="exampleInputPassword1">
                    </div>

                    <div class="pb-2">
                        <button type="submit" name="ingresar" class="btn btn-primary w-100 font-weight-bold mt-2">Ingresar</button>
                    </div>
                </form>
                </div>
               
                </div>
            </div>
        </div>

</div>

