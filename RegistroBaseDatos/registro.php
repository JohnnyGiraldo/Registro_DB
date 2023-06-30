<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO DE MACERADORAS</title>
  <link rel="stylesheet" href="./assets/./css/./registro.css">
  <!-- ICONS FONT AWESOME -->
  <script src="https://kit.fontawesome.com/73f851add2.js" crossorigin="anonymous"></script>
</head>
<body>
  <main>
    <!-- FORMULARIO -->
    <form action="#" class="formulario" id="formulario">
        <!-- GRUPO DE INFORMACIÓN DEL EQUIPO -->
        <!-- TITULO  REGISTRO MACERADORAS -->
                <div class="title"><h1>REGISTRO MACERADORAS</h1></div>
                <br><br><br>

        <!--1. MODELO-->
        <div class="formulario__grupo" id="grupo__usuario">
            <label class="formulario__label" for="usuario">Modelo :</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input" name="usuario" id="usuario">
                    <option value="vortex">VORTEX +</option>
                    <option value="compact">COMPACT +</option>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El modelo debe ser seleccionado.</p>
        </div>
        
        <!--2 SERIAL-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Serial</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Inserte el Serial de la maceradora">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--3 ESTADO DEL EQUIPO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Estado del equipo</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Escriba el Estado del equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--4 FECHA DE FABRICACIÓN-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha de Fabricación</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="nombre" id="nombre" placeholder="Inserte la fecha de fabricación de la maceradora">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">La fecha ingresada no es válida</p>
        </div>
        <!-- UBICACIÓN DEL EQUIPO-->

        <!--5 PAIS-->
        <div class="formulario__grupo" id="grupo__usuario">
            <label class="formulario__label" for="usuario">Pais:</label>
            <div class="formulario__grupo-input">
                <select class="formulario__input" name="usuario" id="usuario">
                    <option value="vortex">Colombia</option>
                    <option value="compact">Costarica</option>
                </select>
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El modelo debe ser seleccionado.</p>
        </div>

        <!--6 CIUDAD-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Ciudad</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Inserte la ciudad de ubicación del equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--7 INSTITUCION-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Institución</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Inserte que institucion tiene el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--8 TELÉFONO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Teléfono</label>
            <div class="formulario__grupo-input">
                <input type="tel" class="formulario__input" name="nombre" id="nombre" placeholder="Numero de telefono">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--9 DIRECCION-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Dirección</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Ingrese la dirección dónde se ubica el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--10 UBICACIÓN-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Ubicación</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="ubicación exácta el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--11 PISO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Piso</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="nombre" id="nombre" placeholder="Piso dónde está el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--12 CUARTO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Cuarto</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Numero del cuarto está el equipo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--13 TIPO DE ASISTENCIA-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Tipo de Asistencia</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div> 
        
        <!--14 FECHA DE INSTALACIÓN-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha de Instalacion</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="nombre" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--15 TIPO DE MANTENIMIENTO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Tipo de Mantenimiento</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--16 FECHA DEL MANTENIMIENTO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha de mantenimiento</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="nombre" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--17 TIPO DE PIEZA-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Tipo de Pieza</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Describa la pieza cambiada">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--18 FECHA DEL CAMBIO DE PIEZA-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha del Cambio de Piezas</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="nombre" id="nombre" placeholder="Número del cuarto">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

          <!--19 NÚMERO DE CICLOS-->
          <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Número de ciclos</label>
            <div class="formulario__grupo-input">
                <input type="number" class="formulario__input" name="nombre" id="nombre" placeholder="inserte el número de ciclos">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!--20 FECHA DEL DAÑO-->
        <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Fecha del daño</label>
            <div class="formulario__grupo-input">
                <input type="date" class="formulario__input" name="nombre" id="nombre" placeholder="inserte la fecha del daño">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

          <!--21 OBSERVACIONES-->
          <div class="formulario__grupo" id="grupo__nombre">
            <label class="formulario__label">Observaciones</label>
            <div class="formulario__grupo-input">
                <input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Escriba acá sus observaciones">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El nombre debe tener minimo 4 caracteres y solo se admiten números, letras y guión bajo.</p>
        </div>

        <!-- GRUPO ENVIAR -->
        <div class="formulario__grupo formulario__grupo-btn-enviar">
            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">El formulario se envió correctamente</p>
            <input class="formulario__btn" type="submit" value="Enviar">
        </div>

        
    </form>
  </main>
    <script src="script/registro.js"></script>


</body>
</html>