<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.html">PsicoApp/web </a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <ul class="navbar-nav ml-auto ml-md-0 ">
      <!-- <div class="nav-item">
        <label class="font-weight-bold mr-sm-2" for="nit">todos</label>
      </div> -->
      <div class="nav-item">
        <form id="form_searchEmail" method="POST" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar por Correo" aria-label="Search" id="correo" name="correo">
          <button class="btn btn-outline-success my-2 my-sm-0  mr-sm-2" type="submit">
            <i class="fa fa-search"></i></button>
        </form>
      </div>

      <li class="nav-item">
        <a class="btn btn-secondary my-2 my-sm-0" href="#">

          <?= $_SESSION['Nombre_Completo']; ?>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- <span class="badge badge-danger">9+</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-question-circle"></i>
          <!-- <span class="badge badge-danger">7</span> -->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">THIS PROGRAM WAS DEVELOPED BY CRISTHIAN</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" id="viewAcount">
            <input type="hidden" name="userId" id="userId" value="<?= $_SESSION['user_id']; ?>">
            <i class="fas fa-cog">&nbsp;Configuracion</i></a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Salir</a>
        </div>
      </li>
    </ul>

</nav>