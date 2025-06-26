<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mi Página PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #eef2f3;
      text-align: center;
      padding: 50px;
    }
    h1 {
      color: #333;
    }
    p {
      color: #555;
    }
  </style>
</head>
<body>

  <h1>Bienvenido a mi sitio PHP</h1>
  <p>La fecha actual es: <strong><?php echo date("d/m/Y"); ?></strong></p>
  <p>La hora actual es: <strong><?php echo date("H:i:s"); ?></strong></p>

</body>
</html>
