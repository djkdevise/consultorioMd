<?php
// <a class="btn btn-primary" href="../controlador/cerrar_sesion.php?cerrar=1">CERRAR SESION</a>

// Barra de navegacion para administrador
function adminHeader(){
    echo '<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(59, 163, 253, 0.4);">
    <div class="container-fluid">
      <a class="navbar-brand mb-0 h1 d-flex align-items-center">
        <i class="bi bi-heart-pulse me-2"></i>
        CONSULTORIO
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <!-- Contenido del menú de navegación -->
          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <!-- Modulo atencion inicio -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Atencion
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#paciente">
                  Pacientes
                </a></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#cita">
                  Citas
                </a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#tratamiento">
                  Tratamientos
                </a></li>
              </ul>
            </li>
            <!-- Fin modulo atencion -->
            <!-- inicion modulo administrar -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Administrar
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#empleado">
                  Empleado</a></li>
                <li><a class="dropdown-item" href="#">Medico</a></li>
                <li><a class="dropdown-item" href="#">Medicamentos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Consultorio</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Ayuda</a>
            </li>
        </ul>
        <!-- fin modulo administrar -->
      </div>
      <button type="button" class="btn btn-sm btn-outline-dark ms-auto">
        <i class="bi bi-arrow-right-square"></i>
        Cerrar Sesión
      </button>
    </div>
  </nav>
  </header>';
    // echo "HEADER ADMINISTRADOR".'<a class="btn btn-primary" href="../controlador/cerrar_sesion.php?cerrar=1">CERRAR SESION</a>';
}


// Barra de navegacion para empleado
function empleadoHeader(){
    echo "HEADER EMPLEADO".'<a class="btn btn-primary" href="../controlador/cerrar_sesion.php?cerrar=1">CERRAR SESION</a>';
}
?>

