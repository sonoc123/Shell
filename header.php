<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
#button {
height: 20px;
font-weight: bolder;
color: #FFF;
font-size: 12px;
margin: 0px;
padding:0px;
}
#button li {
float:left;
width:140px;
list-style-type:none;
text-align:center;
background-color:#466277;
letter-spacing: 2px;
border-left-width: 2px;
border-left-style: solid;
border-left-color: #949494;
border-right-width: 2px;
border-right-style: solid;
border-right-color: #949494;
margin-right:0px;
}
                
#button li a {
display: block;
width: 140px;
height:20px;
padding-top:2px;
color: #FFF;
text-decoration: none;
}

#button li a:hover{
background-color:#39919F;
}
</style>

<style type="text/css">
body
{ 
background-image: 
url(bg.png);
background-repeat: repeat-x
}
</style>
<style>
a {
    text-decoration:none;
}
</style>
<body bgcolor="#F6F6F6">
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico" />
</head>


<body>
<form method="POST" action="">
<b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%">
<tr>
<td width="50%">
<b><font face="Arial Unicode MS" size="4" color="#404040"><span lang="zh-tw">
<img border="0" src="logo.png" width="60" height="53" align="left">
</span>Shell -Hong Kong and Macau </font></b>
<font face="Arial Unicode MS" size="6" color="#F2D319">.</font>
</form></td>
<td width="50%" valign="bottom"><p align="right"><?php echo date("Y-m-d");?></td>
</tr>
</table>

<P><ul id="button">
      <li><a href="main.php">Home</a></li>
      <li><a href="closedticket.php">Closed Ticket</a></li>
      <li><a href="allticket.php">All Ticket</a></li>
      <li><a href="mobile.php">Mobile</a></li>
</ul></P>
</b>
<?php
$FileDir="processed"; 
$FileDir2="newticket"; 
$FileDir3="planning"; 
$FileNum1=count(glob("$FileDir/*.*"));
$FileNum2=count(glob("$FileDir2/*.*"));
$nFileNum=($FileNum1+$FileNum2);
//
$FileDir="closedticket"; 
$cFileNum=count(glob("$FileDir/*.*"));
//
$FileDir="allticket"; 
$aFileNum=count(glob("$FileDir/*.*"));
//
$FileDir="planning"; 
$pFileNum=count(glob("$FileDir/*.*"));
?>

<form method="GET" action="">
<b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%">
<tr>
<td width="50%">
<font size="2">Total ticket :<?php echo $aFileNum; ?></font>&nbsp;&nbsp;
<font size="2">New ticket :<?php echo $nFileNum; ?></font>&nbsp;&nbsp;
<font size="2">Planning ticket :<?php echo $pFileNum; ?></font>&nbsp;&nbsp;
<font size="2">Closed ticket :<?php echo $cFileNum; ?></font>&nbsp;&nbsp;
<td width="50%" ><p align="right">
<p>New Ticket自動匯入功能測試中</p>
</td></tr></table>
</form>
    
</head>
<body>
</body>
</html>
