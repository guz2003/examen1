<?php include_once 'partials/variables.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exámen Final | Ejercicio02</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <?php include_once 'partials/css.php'; ?>
</head>

<body>
    <div class="container mx-auto">
        <?php require_once 'partials/header.php'; ?> <!-- header del sitio -->
        <!-- escribir el codigo del ejercicio -->
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h2 class="text-center">CALCULADORA</h2>
                <form method="POST" action="">
                    <h3 class="h3 bg-info">Datos</h3>
                    <div class="form-group">
                        <label for="nombre">Numero 1</label>
                        <input name="n1" type="number" class="form-control" placeholder="Introduce numero 1" required>
                        <label for="email" class="mt-3">numero 2</label>
                        <input name="n2" type="number" class="form-control" placeholder="Introduce numero 2" required>
                        <button type="submit" class="btn btn-info mt-4">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-6 mt-5">
                <?php if (isset($_POST['n1']) && isset($_POST['n2'])) { ?>
                    <h3 class="tex-center">Resultados</h3>
                    <p><strong>la suma es:</strong> <?php echo $resultado = $_POST['n1'] + $_POST['n2']; ?></p>
                    <p><strong>la resta es:</strong> <?php echo $resultado = $_POST['n1'] - $_POST['n2']; ?></p>
                    <p><strong>la multiplicacion es:</strong> <?php echo $resultado = $_POST['n1'] * $_POST['n2']; ?></p>
                    <p><strong>la division es:</strong> <?php echo $resultado = $_POST['n1'] / $_POST['n2']; ?></p>
                <?php }; ?>
            </div>
        </div>
    </div>
    <?php include_once 'partials/js.php' ?> <!-- scripts de bootstrap -->
</body>
</html>