<?php
  $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $BRC_TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH); ?>


    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/wp-content/themes/tienda_projecto/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />



    <link rel="manifest" href="<?php echo $TEMPLATE_PATH; ?>/manifest.json" />

    <title>React WordPress Theme</title>
    <link href="/wp-content/themes/tienda_projecto/static/css/main.854d246b.css" rel="stylesheet">
</head>

<body>
    <noscript>
        You need to enable JavaScript to run this app.
    </noscript>
    <div id="root"></div>

    <script src="/wp-content/themes/tienda_projecto/static/js/main.455bdc6c.js"></script>


</body>

</html>