<?php
/**
 * Created by JetBrains PhpStorm.
 * User: administrateur
 * Date: 13-10-04
 * Time: 16:22
 * To change this template use File | Settings | File Templates.
 */?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!-- Librairie jQuery -->
<script type="text/javascript" src="fancybox/jquery-1.4.3.min.js"></script>

<!--fancyBox - fichiers JS et CSS -->
<script type="text/javascript" src="fancybox/fancybox/jquery.fancybox-1.3.4.js"></script>
<link rel="stylesheet" type="text/css" href="fancybox/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
    $(document).ready(function() {
        $('.fancybox').fancybox({'type':'image'});
    });
</script>


<a class="fancybox" rel="group" href="logo.jpg"><img src="logo2.jpg" alt="" /></a>
<!--<a id="example2" href="Destiny_logo.jpg"><img alt="Destiny logo" src="Destiny_logo.jpg" /></a> -->
</body>
</html>