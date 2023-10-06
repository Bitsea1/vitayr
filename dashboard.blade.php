<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8" />
        <meta
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0"
      name="viewport"
    />
    <script src="/theme/{{$theme}}/recaptcha/api.js" async defer></script>
    <title><?php echo $title; ?></title>

    <script>
      window.settings = {
        version: '<?php echo $version; ?>',
        logo: '<?php echo $logo; ?>',
        title: '<?php echo $title; ?>',
        description: '<?php echo $description; ?>',
        theme_path: '/theme/{{$theme}}/assets/',
        theme:{
            via:'',
            color:'{{$theme_config['theme_color']}}',
            default_i18n:'{{$theme_config['theme_default_i18n']}}',
            plan_custom_html:``,
            nodes_custom_html:``,
            ticket_custom_html:``,
        }
      }
    </script>
    <script type="module" crossorigin src="/theme/{{$theme}}/assets/index.c94482b2.js"></script>
    <link rel="stylesheet" href="/theme/{{$theme}}/assets/index.b7e66be0.css">
    @if (file_exists(public_path("/theme/{{$theme}}/assets/favicon.ico")))
        <link rel="icon" type="image/png" href="/theme/{{$theme}}/favicon.ico">
    @endif
</head>


<body>
<div id="root"></div>
</body>

</html>