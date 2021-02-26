<nav class="navbar navbar-expand-lg navbar-light menu">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item pt-3 me-4">
          <a class="nav-link active" aria-current="page" href="pagina_restrita.php" ><font size="5">HOME</font></a>
        </li>
        <li class="nav-item pt-3 me-4">
          <a class="nav-link" href="quem_restrito.php"><font size="5">QUEM SOMOS</font></a>
        </li>
        <li class="nav-item pt-3 me-4">
         <a class="nav-link" href="contato_r.php"><font size="5">CONTATO</font></a>
        </li>
        <li class="nav-item login pt-3 me-4">
         <a class="nav-link" href="index.php"><font size="5">SAIR</font></a>
        </li>

      </ul>
      <form class="d-flex pt-3" action="menur_action.php" method="post" >
        <input id="menu" name="menu" type="text">
        <button class="btn btn-outline-success" type="submit">SEARCH</button>
      </form>
    </div>
  </div>
</nav>