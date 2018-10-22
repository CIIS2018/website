<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="cont-e">
    <div clas="header-e">

    </div>
    <div clas="body-e">
      <label>NOMBRE : <?= $name; ?></label><br>
      <label>Apellido : <?= $apellido; ?></label><br>
      <label>DNI : <?= $dni; ?></label><br>
      <label>Ciudad : <?= $ciudad; ?></label><br>
      <label>Instituto : <?= $instituto; ?></label><br>
      <label>Telefono : <?= $telefono; ?></label><br>
      <label>Tipo inscripcion : <?= $tipo_inscripcion; ?></label><br>
      <label>Celular : <?= $celular; ?></label><br>

    </div>
    <div clas="fotter-e">

    </div>
  </div>
</body>
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}
.cont-e{
  height: 500px;
  width: 600px;
  background: blue;
}
</style>

</html>
