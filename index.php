<?php

include "head.html";

?>
<html>
<head>
    <title>LatenKoken</title>
</head>

<body>
<div id="home1">
<h1 id="home">Eten bestellen</h1>
<h3 id="home">Vind restaurants bij jou in de buurt</h3>
</div>
    <div id="woonplaats">
    <form action="" method="post">

        <input id="adres" title="adres" placeholder="Ardes" type="text">
        <input type="submit" value="ZOEK">

    </form>
</div>

</body>


<style>

    #home1{
        padding-top: 50px;
    }
    #home{
        margin-top: 30px;
        text-align: center;
        color: #000;
    }

    html{
        background-color: #EFEFEF;
        font-family: Arial, serif;
    }

    body {
        color: #EFEFEF;
        font-family: Arial, serif;
    }
    #woonplaats {
        background-color: rgba(72,72,72,0.7);
        padding: 10px 20px 30px 20px;
        max-width:100%;
        position: absolute;
        margin-top:3%;
        margin-left: 41%;
        border-radius:7px;
    }


    #adres{
        margin-top: 26px;
    }
    input[type=text] {
        width: 68%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        size: 25px;
    }
    input[type=submit] {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border:none;
        background: #FF3B3F;
        color:#FFF;;
        border-radius:5px;
    }
    ::-webkit-input-placeholder {
        color: #A9A9A9;
        font-size: 15px;
    }

</style>
</html>