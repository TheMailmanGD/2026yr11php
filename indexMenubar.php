<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Year 11 PHP 2026</a>
      <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse"
      aria-controls="navbarCollapse"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      <li class="nav-item"><a class="nav-link" href="https://www.chattrath.com.au/allProjects/recipe" target="_blank">Bobby's Recipes</a></li>
        <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CORE</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="coreVariables.php">Variables</a>
          <a class="dropdown-item" href="coreDecisions.php">Decisions</a>
          <a class="dropdown-item" href="coreIterations.php">Iterations</a>
          <a class="dropdown-item" href="coreArrays.php">Arrays</a>
          </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CRUD</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="crudCreate.php">Create</a>
          <a class="dropdown-item" href="crudRead.php">Read</a>
          <a class="dropdown-item" href="crudReadOneRecord.php">Read one record</a>
          <a class="dropdown-item" href="crudUpdate.php">Update</a>
          <a class="dropdown-item" href="crudUpdateWithModal.php">Update With Modal</a>
          <a class="dropdown-item" href="crudDelete.php">Delete</a>
          <a class="dropdown-item" href="crudUpdateAllWithModal.php">Update all with modal</a>
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="signup.php">Signup</a>
        </li>
        <?php if (isset($_SESSION["session_logged"]) && $_SESSION["session_logged"] == "loggedin") { ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">PayProj</a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="projCreatePayslip.php">Create Payslip</a></li>
          <li><a class="dropdown-item" href="projFindPayslip.php">Find payslip</a></li>
          </ul>
        </li>
        <?php } ?>
        <?php if(isset($_SESSION["session_logged"]) && $_SESSION["session_logged"] == "loggedin") { ?>
        <?php echo ($_SESSION["session_user_code"]); ?>
        <form class="d-flex" action="logoutAction.php" method="post">
          <button class="btn btn-outline-warning" type="submit">
            Logout
          </button>
        </form>
        <?php } else { ?>
        <form class="d-flex" action="loginAction.php" method="post">
          <input id="code" name="code"
          class="form-control me-2"
          type="text"
          placeholder="Login code, e.g. ABC0001"
          aria-label="login_code">
          <button class="btn btn-outline-success" type="submit">
            Login
          </button>
        </form>
        <?php } ?>
      </div>
    </div>
  </nav>
</header>