<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>MENU</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Gestion Docteur</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Docteur.index') }}">
              <i class="bi bi-circle"></i><span>Liste Docteur</span>
            </a>
          </li>
          <li>
            <a href="{{route('Docteur.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Docteur</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Gestion Patient</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('Patient.index') }}">
              <i class="bi bi-circle"></i><span>Liste Patient</span>
            </a>
          </li>
          <li>
            <a href="{{ route('Patient.create') }}">
              <i class="bi bi-circle"></i><span>Ajouter Patient</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Gestion Specialités</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Specialité.index')}}">
              <i class="bi bi-circle"></i><span>Liste Specialité</span>
            </a>
          </li>
          <li>
            <a href="{{route('Specialité.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Specialité</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

     
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nave" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Gestion Rendez-vous</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('RV.index')}}">
              <i class="bi bi-circle"></i><span>Liste Rendez-vous</span>
            </a>
          </li>
          <li>
            <a href="{{route('RV.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter Rendez-vous</span>
            </a>
          </li>
          <li>
          </li>
        </ul>
      </li><!-- End Icons Nave -->

  </aside>
