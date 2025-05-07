  <!--Iskanje - Search bar-->
  <div class="conteiner modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-dark text-white">
            <h5 class="modal-title" id="searchModalLabel">Iskanje</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Zapri"></button>
          </div>
          <div class="modal-body">
            <form id="searchForm">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Išči..." id="searchInput">
                <button class="btn btn-dark" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    
      <!-- Navigacija -->
      <nav class="navbar navbar-dark fixed-top" role="navigation">
        <div class="container-fluid d-flex justify-content-between">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu" aria-controls="menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div>
            <button class="btn btn-link me-3 p-0" data-bs-toggle="modal" data-bs-target="#searchModal">
              <img src="fotografije/logotip/search belo.png" width="25px" alt="Iskanje">
            </button>
            <a href="kosarica.php"><img src="fotografije/logotip/basket belo.png" width="25px" alt="Košarica"></a>
          </div>
        </div>
      </nav>

      <!-- Offcanvas meni --> <!--Dropdown v nav baru-->
      <aside class="offcanvas offcanvas-start" tabindex="-1" id="menu" aria-labelledby="menuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="menuLabel"><img src="fotografije/logotip/logoKalijak_končno_brez obrobe.png" padding-top="10px" width="50px"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Zapri"></button>
        </div>
        <div class="offcanvas-body">
          <nav>
            <ul class="navbar-nav">
              <li><a class="nav-link" href="index.php">Domov</a></li>
              <li><a class="nav-link" href="o_nas.php">O nas</a></li>
              <li><a class="nav-link" href="setveni_koledar.php">Setveni koledar</a></li>
              <li><a class="nav-link" href="zgodovina.php">Zgodovina</a></li>
              <li><a class="nav-link" href="sadike.php">Sadike</a></li>
              <li><a class="nav-link" href="zelenjava.php">Zelenjava</a></li>
              <li><a class="nav-link" href="trgovina_sadike.php">Trgovina</a></li>
            </ul>
          </nav>
        </div>
      </aside>