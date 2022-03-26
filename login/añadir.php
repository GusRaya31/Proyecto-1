<html>
    <link rel="stylesheet" href="tabla.css">
<div id="modal">
        <form action="insertar.php" method="post">
            <div>
                <h4>Datos</h4>
            </div>

            <div>
                
                <div class="grupo">
                    <input type="text" name="RFC" placeholder="RFC" required>
                </div>
                
                <div class="grupo">
                    <input type="text" name="CURP" placeholder="Curp" required>
                </div>

                <div class="grupo">
                    <input type="text" name="NOMBRE" placeholder="Nombre" required>
                </div>

                <div class="grupo">
                    <input type="password" name="CONTRASENA" placeholder="Contraseña" required>
                </div>
                
            </div>

            <input type="submit" value="Agregar" id="guardar">
        </form>
    </div>
</html>