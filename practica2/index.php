<!doctype html>
<html lang="en">
<head>
  <title>Prueba de Inicio de Sesión</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main>
  <div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <h1 class="fw-bold mb-0 fs-2">Iniciar Sesión</h1>
      </div>
      <div class="modal-body p-5 pt-0">
        <form class="" action="procesardatos.php" method="post">
          <div class="form-floating mb-3">
            <input type="text" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="username">
            <label for="floatingInput">Username</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" name="password">
            <label for="floatingInput">Password</label>
        <?php
            if (isset($_GET['error']) && !empty($_GET['error'])) {
                echo '<spam class="text-danger">' . $_GET['error'] . '</spam>';
        }
        ?>
            </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Send</button>
          <small class="text-body-secondary">Esta es una prueba.</small>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  function togglePassword() {
    var passwordField = document.getElementById("password");
    var passwordToggle = document.querySelector(".password-toggle");

    if (passwordField.type === "password") {
      passwordField.type = "text";
      passwordToggle.textContent = "Ocultar contraseña";
    } else {
      passwordField.type = "password";
      passwordToggle.textContent = "Mostrar contraseña";
    }
  }
</script>
</main>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  

</body>
</html>