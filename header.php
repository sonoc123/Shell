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
<script>
Notification.requestPermission(function(status){
            if(Notification.permission !== status){
                Notification.permission = status;
            }
        });
</script>
<body bgcolor="#F6F6F6">
<link rel="Shortcut Icon" type="image/x-icon" href="favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
var ismobile=navigator.userAgent.match(/J2ME|Opera Mini|SonyEricsson|Nokia|iPhone|iPod|BB10|PlayBook|android|webOS|BlackBerry|Windows Phone|Windows CE/i) != null;
if (ismobile) {
var redirect = confirm('是否要轉到手機版網頁？');
if (redirect)
window.location = 'mobile.php';
}
});
</script>
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
<!-- <p></p> -->
</td></tr></table>
</form>
    
<?php
$readnumber=file_get_contents("number.txt");
$readnumber=$readnumber-1;
$cookie=$_COOKIE["ticket_number"];
if (isset($_COOKIE["ticket_number"])){
}else{
setcookie("ticket_number", $readnumber, time()+3600);
exit;
}
if ($cookie<$readnumber){
include ("notification.php");
}
setcookie("ticket_number", $readnumber, time()+3600);
?>

</body>
</html>
