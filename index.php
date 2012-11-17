<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <style>
            div {margin:50px;}
        </style>
    </head>
    <body>
<div>
        <?php $array1 = array(4,8,15,16,23,42); ?>

        Count: <?php echo count($array1); ?><br />
        Max value: <?php echo max($array1); ?><br />
        Min value: <?php echo min($array1); ?><br />
        <br />

        Sort: <?php sort($array1); print_r($array1); ?><br />
        Reverse Sort: <?php rsort($array1); print_r($array1); ?><br />
        <br />

        <?php
            // Implode converts an array into a string using a "join string"
            // Explode converts a string into an array using a "divide string"
        ?>
        Implode: <?php echo $string1 = implode(" * ", $array1); ?><br />
        Explode: <?php print_r(explode(" * ", $string1)); ?><br />
        <br />
        
        In array: <?php echo in_array(15, $array1); // returns T/F ?><br />
        
</div>


        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


    </body>
</html>
