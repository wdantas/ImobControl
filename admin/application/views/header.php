<!DOCTYPE html>
<html ng-app="imobcontrol">
        <head>
            <meta charset="UTF-8">
            <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/materialize.min.css"); ?>"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>"  media="screen,projection"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
            <?php if(isset($titulo)): ?>
            <title><?php echo $titulo;?></title>
            <?php endif; ?>
        </head>
        <body>
