<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo($titulo);?></title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css');?>" rel="stylesheet">

    <style>
        p {color: blue;}
        .header-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .header-container h1 {
            margin: 0;
        }
        .header-container img {
            cursor: pointer;
            width: 112.5px; /* 50% más grande que 75px */
            height: 85px;  /* 50% más grande que 30px */
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1>Bienvenidos a Focos Ya!!</h1>
        <!--logo de la empresa-->
        <a href="<?php echo base_url('acerca_de')?>">
            <img src="<?php echo base_url('assets/img/logo_empresa.jpg')?>" alt="marca" width="75" height="30" class="img-fluid"/>
        </a>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>