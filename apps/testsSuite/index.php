<?php
	//no  cache headers
	header("Expires: Mon, 26 Jul 1980 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="01 Jan 1970 00:00:00 GMT, -1" http-equiv="Expires">
    <meta content="no-cache, no-store, must-revalidate" http-equiv="Cache-Control">
    <meta content="no-cache" http-equiv="Pragma">

    <?php include("theme.cfg"); ?>

    <?php include("dependencies.inc"); ?>

</head>

<script type="text/javascript">

    function initShape(){
        $.ajaxSetup({ cache: false });
        <?php include("shapes.js"); ?>
        shape.baseUrl = "http://localhost";

        shape.expandShapeComponent(document.getElementById("main"),null, testRegistry);
    }

    if(!$.isReady){
        //$(document).ready(initShape);
        jQuery(initShape);
    }else{
        initShape();
    }

    //alert(getBaseUrl());
</script>

<body >
<div id="main" shape-view="testsSuite" shape-ctrl="testsSuiteCtrl"> Not loaded!!! </div>
</body>
</html>