<html>

<head>

<meta http-equiv="Content-Language" content="zh-cn">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shell-Closed ticket</title>
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
</span>Shell -Hong Kong and Macau</font></b>
<font face="Arial Unicode MS" size="6" color="#F2D319">.</font>
</form></td>
<td width="50%" valign="bottom"><p align="right"><?php echo date("Y-m-d");?></td>
</tr>
</table>

<P><ul id="button">
      <li><a href="main.php">Home</a></li>
	  <li><a href="closedticket.php">Closed Ticket</a></li>
      <li><a href="allticket.php">All Ticket</a></li>
</ul></P>
</b>

<?php
$Getlocalid = $_GET[localid];
$GetCompleted = $_GET[Completed];
$Getdeletecall = $_GET[deletecall];
$Getreopen = $_GET[reopen];
$Gettransport = $_GET[transport];
$GetDetail = $_GET[Detail];
$Getplanning = $_GET[planning];

if ($Getlocalid >= 1){
$url="index.php?localid=".$Getlocalid;
header("Location:$url");
exit;
}
if ($GetCompleted >= 1){
$url="index.php?Completed=".$GetCompleted;
header("Location:$url");
exit;
}
if ($Getdeletecall >= 1){
echo "<script>if(confirm('Are you sure you want to delete?')) window.location='delete.php?del=".$Getdeletecall."&frompage=2';</script>";
}
if ($Getreopen >= 1){
$url="index.php?reopen=".$Getreopen;
header("Location:$url");
exit;
}
if ($Gettransport >= 1){
$url="index.php?transport=".$Gettransport;
header("Location:$url");
exit;
}
if ($GetDetail >= 1){
$url="index.php?Detail=".$GetDetail;
header("Location:$url");
exit;
}
if ($Getplanning >= 1){
$url="index.php?planning=".$Getplanning;
header("Location:$url");
exit;
}
?>
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
<!-- <input type="submit" name="functionmode" value="function_1" style="width:80;height:30; font-size:8 pt"> -->
</td>
</tr>
</table>
</form>

<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<td width="50px"><hr></td>
<td width="150px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;Closed Ticket List</b></td>
<td><hr></td>
</tr></tbody></table>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
  <form method="get" action="">
    <td width="23%" align="center" bgcolor="#274358" bordercolor="#FFFFFF"><b>
    <font face="Arial" size="2" color="#FFFFFF">Create On</font></b></td>
    <td width="8%" align="center" bgcolor="#274358" bordercolor="#FFFFFF"><b>
    <font face="Arial" size="2" color="#FFFFFF">Ticket No</font></b></td>
    <td width="5%" align="center" bgcolor="#274358" bordercolor="#FFFFFF"><b>
    <font face="Arial" size="2" color="#FFFFFF">Store No</font></b></td>
    <td width="14%" align="center" bgcolor="#274358" bordercolor="#FFFFFF"><b>
    <font face="Arial" size="2" color="#FFFFFF">Site Name</font></b></td>
    <td width="30%" align="center" bgcolor="#274358" bordercolor="#FFFFFF"><b>
    <font face="Arial" size="2" color="#FFFFFF">Affected hardware</font></b></td>
  <form method="get" action="">
    <td width="8%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">
  <input type="submit" name="functionmode" value="transport" style="width:80;height:20; font-size:8 pt"></td>
    <td width="7%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">
  <input type="submit" name="functionmode" value="reopen" style="width:80;height:20; font-size:8 pt"></td></form>
	<td width="5%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?php
$Getfunctionmode = $_GET[functionmode];
$readnumber=file_get_contents("number.txt");
$path ="./closedticket/";
$y=$readnumber;
$s=0;
if (preg_match("/reopen/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_Closed.php")){
include ($path.$y."_Closed.php");
$s++;
if($s%2==0){
$boby=str_replace ("B0E0E6", "FFDAB9", $boby);
}
$boby=str_replace ("Close", "Reopen", $boby);
$boby=str_replace ("Completed", "reopen", $boby);
echo $boby;
}
$y--;
}
}

if (preg_match("/transport/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_Closed.php")){
include ($path.$y."_Closed.php");
$s++;
if($s%2==0){
$boby=str_replace ("B0E0E6", "FFDAB9", $boby);
}
$boby=str_replace ("Create Call", "Transport", $boby);
$boby=str_replace ("localid", "transport", $boby);
echo $boby;
}
$y--;
}
}

if (preg_match("/nomatch/i", $Getfunctionmode)){
}else{
while($y > 0){
if(is_file($path.$y."_Closed.php")){
include ($path.$y."_Closed.php");
$s++;
if($s%2==0){
$boby=str_replace ("B0E0E6", "FFDAB9", $boby);
}
echo $boby;
}
$y--;
}
}
?>
</body>

</html>