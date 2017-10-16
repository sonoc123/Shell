<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<title>Shell-Mobile</title>
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
<?php
$file=scandir('./exportfile');
if (empty($file[2])) {
}else{
header("Location:index.php");
}
?>
<form method="POST" action="">
<b><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="95%">
<tr>
<td valign="bottom">
<b><font face="Arial Unicode MS" size="5" color="#404040"><span lang="zh-tw">
<img border="0" src="logo.png" width="57" height="50" align="left">
</span>Shell-Mobile </font></b>
<font face="Arial Unicode MS" size="6" color="#F2D319">.</font>
</form></td>
</tr>
</table>
 <form method="POST" action=""><p>
 <select size="1" name="D1">
 <option selected>Coming soon</option>
 </select></p>
</form>
<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<td width="50px"><hr></td>
<td width="100px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;New Ticket</b></td>
<td><hr></td>
</tr></tbody></table>
<?php
$readnumber=file_get_contents("number.txt");
$path ="./newticket/";
$y=$readnumber;
$s=0;
while($y > 0){
if(is_file($path.$y."_Ticket.php")){
include ($path.$y."_Ticket.php");
$s++;
echo "<form method=POST action=><fieldset style=padding: 1><legend><font color=#FF0000>".$Calldate."</font></legend><font color=#FF0000>".$CallNo."&nbsp;&nbsp;".$storeno."&nbsp;&nbsp;".$storename."<br>".$Problem."</font></fieldset></form>";
}
$y--;
}
?>
    
<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<br>
<td width="50px"><hr></td>
<td width="160px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;New Ticket(Created)</b></td>
<td><hr></td>
</tr></tbody></table>
<?php
$readnumber=file_get_contents("number.txt");
$path ="./processed/";
$y=$readnumber;
$s=0;
while($y > 0){
if(is_file($path.$y."_processed.php")){
include ($path.$y."_processed.php");
$s++;
echo "<form method=POST action=><fieldset style=padding: 1><legend><font color=#008000>".$Calldate."</font></legend><legend><font color=#008000>".$CallNo."&nbsp;&nbsp;".$storeno."&nbsp;&nbsp;".$storename."<br>".$Problem."</font></fieldset></form>";
}
$y--;
}
?>
    
<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<br>
<td width="50px"><hr></td>
<td width="120px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;Planning Ticket</b></td>
<td><hr></td>
</tr></tbody></table>
<?php
$readnumber=file_get_contents("number.txt");
$path ="./planning/";
$y=$readnumber;
$s=0;
while($y > 0){
if(is_file($path.$y."_planning.php")){
include ($path.$y."_planning.php");
$s++;
echo "<form method=POST action=><fieldset style=padding: 1><legend><font color=#808000>".$Calldate."</font></legend><font color=#808000>".$CallNo."&nbsp;&nbsp;".$storeno."&nbsp;&nbsp;".$storename."<br>".$Problem."</font></fieldset></form>";
}
$y--;
}
?>
</body>

</html>