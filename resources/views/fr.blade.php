<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-10"/>
 
<style>
#overlay{
    position:center;
    top:50px;
    left:1000px;
    z-index:10;
    display:none;
    width:900px;
    height:500px;
    overflow:auto;
    border-style:solid;
    border-color:#909090;
    border-width:1px;
    background-color:#f0f0f0;
}
</style>
 
</head
 
<body>
 
<p>Ceci est un texte simple.<br/>
Il pourrait faire toute la page mais on va<br/>
s'arrêter là...
<button onclick="document.getElementById('overlay').style.display='block'">Afficher</button>
</p>
 
<div id="overlay">
Petite fenêtre en superposition de l'autre.
Il faudra redimensionner pour que ça tienne sur moins
de ligne que là...
A vous de voir...
</div>
 
</body>
 
</html>