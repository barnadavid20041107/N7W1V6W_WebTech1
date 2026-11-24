<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Űrlap feldolgozása</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            padding: 20px;
        }
        .doboz {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #cccccc;
            border-radius: 6px;
            max-width: 600px;
        }
        a {
            color: #1e4d6b;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="doboz">
        <h1>Feldolgozott adatok</h1>
        <?php
        $nev = htmlspecialchars($_POST["nev"] ?? "", ENT_QUOTES, "UTF-8");
        $pin = htmlspecialchars($_POST["pin"] ?? "", ENT_QUOTES, "UTF-8");
        $gyumolcs = htmlspecialchars($_POST["gyumolcs"] ?? "", ENT_QUOTES, "UTF-8");
        $eletkor = htmlspecialchars($_POST["eletkor"] ?? "", ENT_QUOTES, "UTF-8");
        $labmeret = htmlspecialchars($_POST["labmeret"] ?? "", ENT_QUOTES, "UTF-8");
        $onbizalom = htmlspecialchars($_POST["onbizalom"] ?? "", ENT_QUOTES, "UTF-8");
        ?>
        <p><strong>Név:</strong> <?php echo $nev; ?></p>
        <p><strong>PIN kód:</strong> <?php echo $pin; ?></p>
        <p><strong>Kedvenc gyümölcs:</strong> <?php echo $gyumolcs; ?></p>
        <p><strong>Életkor:</strong> <?php echo $eletkor; ?></p>
        <p><strong>Lábméret:</strong> <?php echo $labmeret; ?></p>
        <p><strong>Önbizalom:</strong> <?php echo $onbizalom; ?></p>

        <p><a href="N7W1V6_urlap.html">Vissza az űrlapra</a></p>
    </div>
</body>
</html>