<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Source+Sans+Pro:400i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="SideMenu.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="img/network/favicon.png"/>
    <title>New Web Project</title>



    <script type="text/javascript" src="vis.js"></script>
    <script src="jquery-3.2.0.min.js"></script>
    <script type="text/javascript" src="coreApp.js"></script>
    <script type="text/javascript" src="tabManagment.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="vis-network.min.css" rel="stylesheet" type="text/css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



</head>
<body onload="init('char');">
<?php
include("menu.php") ?>

<div id="node-popUp">
    <span id="nodeOperation">node</span>
    <br>
    <table style="margin:auto;">
        <tr>
            <td>id</td><td>
            <input id="node-id" disabled="true" value="new value" />
        </td>
        </tr>
        <tr>
            <td>Character Name</td><td>
            <input id="node-name" value=" " />
        </td>
        </tr>
        <tr>
            <td>Character Goals</td><td>
            <input id="node-thoughts" value="" />
        </td>
        </tr>
    </table>
    <input type="button" value="save" id="nodeSaveButton" />
    <input type="button" value="cancel" id="nodeCancelButton" />
</div>
<div id="edge-popUp">
    <span id="edgeOperation">edge</span>
    <br>
    <table style="margin:auto;">
        <tr>
            <td>id</td><td>
            <input id="edge-id"/>
        </td>
        </tr>
        <tr>
            <td>label</td><td>
            <input id="edge-label" value="new value" />
        </td>
        </tr>
    </table>
    <input type="button" value="save" id="edgeSaveButton" />
    <input type="button" value="cancel" id="edgeCancelButton" />
</div>
<div id="charactermodel"></div>

<div id="mySidenav" class="sidenav">
    <p class="sidenavTitle" id="title">Customizer (TODO)</p>
    <p class="sidenavTitle" id="sidetitle">Customize your Network prefrences</p>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="line-separator"></div>
    <a href="#">About</a>
    <a href="#">Network Physics</a>
    <a href="#">Other info (TBD)</a>
</div>
<span id="spanNav" style="font-size:20px;position:absolute;top:10px;right:25px;cursor:pointer" onclick="openNav()">
        <img src="img/network/gear.png" alt="" align="left"  style="width:35px;height:35px;"></span>

<div class="namesPane" id="newCharPane">
    <span>New Character Model Name</span>
    <br>
    <table style="margin: auto">
        <tr><td> <input id="cname" type="text" name="name" value="New Project"></td></tr>

    </table>
    <input type="button" value="save" onclick="insertCharName('save');" id="CnodeSaveButton" />
    <input type="button" value="cancel" onclick="insertCharName('cancel');" id="CnodeCancelButton" />
</div>
<div class="namesPane" id="newStoryPane">
    <span>New Story Flow Chart Name</span>
    <br>
    <table style="margin: auto">
        <tr><td> <input id="sfname" type="text" name="name" value="New Project"></td></tr>

    </table>
    <input type="button" value="save" onclick="insertFlowName('save');" id="sFnodeSaveButton" />
    <input type="button" value="cancel" onclick="insertFlowName('cancel');" id="sFnodeCancelButton" />
</div>
</body>
</html>