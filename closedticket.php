<html>

<head>

<meta http-equiv="Content-Language" content="zh-tw">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shell-Closed ticket</title>
<?php
include ("header.php");

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
