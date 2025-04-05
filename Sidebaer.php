<div class="col-lg-3"> 
    <nav class="navbar navbar-expand-lg bg-light rounded-3 bourder mt-2">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="width: 200px;"> Dahsbord </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset($_GET['x']) && $_GET['x'] =='Home') ? ' active link-light ' : ' link-dark ' ; ?> 
            " aria-current="page" href="Index.php?
            x=Home"><i class="bi bi-house-door"></i> Dahsbord </a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset ($_GET ['x']) && $_GET ['x'] =='Order') ? ' active link-light ' : ' link-dark ' ; ?>
            " href="Index.php?x=Order"><i class="bi bi-cart4"></i> Order </a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset ($_GET ['x']) && $_GET ['x'] =='Customer') ? ' active link-light ' : ' link-dark ' ; ?>
            " href="Index.php?x=Customer"><i class="bi bi-person-fill"></i> Customer </a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset ($_GET ['x']) && $_GET ['x'] =='Product') ? ' active link-light ' : ' link-dark ' ; ?>
            " href="Index.php?x=Product"><i class="bi bi-table"></i> Product </a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-2 <?php echo (isset ($_GET ['x']) && $_GET ['x'] =='Report') ? ' active link-light ' : ' link-dark ' ; ?>
            " href="Index.php?x=Report"><i class="bi bi-journal-check"></i> Report </a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</div>