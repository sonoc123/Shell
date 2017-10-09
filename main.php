<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="refresh" content="30;url='main.php'" />
<title>Shell</title>

<?php
include ("header.php");

$file=scandir('./exportfile');
if (empty($file[2])) {
}else{
header("Location:index.php");
}
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
echo "<script>if(confirm('Are you sure you want to delete?')) window.location='delete.php?del=".$Getdeletecall."&frompage=0';</script>";
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
<td width="100px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;New Ticket</b></td>
<td><hr></td>
</tr></tbody></table>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
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
  <input type="submit" name="functionmode" value="transport1" style="width:80;height:20; font-size:8 pt"></td>
    <td width="7%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">
  <input type="submit" name="functionmode" value="planning1" style="width:80;height:20; font-size:8 pt"></td></form>
	<td width="5%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

<?php
$Getfunctionmode = $_GET[functionmode];
$readnumber=file_get_contents("number.txt");
$path ="./newticket/";
$y=$readnumber;
$s=0;
if (preg_match("/planning1/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_Ticket.php")){
include ($path.$y."_Ticket.php");
$s++;
if($s%2==0){
$boby=str_replace ("B0E0E6", "FFDAB9", $boby);
}
$boby=str_replace ("Close", "Planning", $boby);
$boby=str_replace ("Completed", "planning", $boby);
echo $boby;
}
$y--;
}
}

if (preg_match("/transport1/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_Ticket.php")){
include ($path.$y."_Ticket.php");
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
if(is_file($path.$y."_Ticket.php")){
include ($path.$y."_Ticket.php");
$s++;
if($s%2==0){
$boby=str_replace ("B0E0E6", "FFDAB9", $boby);
}
echo $boby;
}
$y--;
}
}

#$readnumber=file_get_contents("number.txt");
#$path ="./newticket/";
#$y=$readnumber;
#while($y > 0){
#if(is_file($path.$y."_Ticket.php")){
#include ($path.$y."_Ticket.php");
#}
#$y--;
#}

?>

<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<br><br>
<td width="50px"><hr></td>
<td width="160px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;New Ticket(Created)</b></td>
<td><hr></td>
</tr></tbody></table>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
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
  <input type="submit" name="functionmode" value="transport2" style="width:80;height:20; font-size:8 pt"></td>
    <td width="7%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">
  <input type="submit" name="functionmode" value="planning2" style="width:80;height:20; font-size:8 pt"></td></form>
	<td width="5%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?php
$Getfunctionmode = $_GET[functionmode];
$readnumber=file_get_contents("number.txt");
$path ="./processed/";
$y=$readnumber;
$s=0;
if (preg_match("/planning2/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_processed.php")){
include ($path.$y."_processed.php");
$s++;
if($s%2==0){
$boby=str_replace ("B0E0E6", "FFDAB9", $boby);
}
$boby=str_replace ("Close", "Planning", $boby);
$boby=str_replace ("Completed", "planning", $boby);
echo $boby;
}
$y--;
}
}

if (preg_match("/transport2/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_processed.php")){
include ($path.$y."_processed.php");
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
if(is_file($path.$y."_processed.php")){
include ($path.$y."_processed.php");
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

<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<br><br>
<td width="50px"><hr></td>
<td width="120px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;Planning Ticket</b></td>
<td><hr></td>
</tr></tbody></table>

<table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  <tr>
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
  <input type="submit" name="functionmode" value="transport3" style="width:80;height:20; font-size:8 pt"></td>
    <td width="7%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">
  <input type="submit" name="functionmode" value="reopen" style="width:80;height:20; font-size:8 pt"></td></form>
	<td width="5%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?php
$Getfunctionmode = $_GET[functionmode];
$readnumber=file_get_contents("number.txt");
$path ="./planning/";
$y=$readnumber;
$s=0;
if (preg_match("/reopen/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_planning.php")){
include ($path.$y."_planning.php");
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

if (preg_match("/transport3/i", $Getfunctionmode)){
while($y > 0){
if(is_file($path.$y."_planning.php")){
include ($path.$y."_planning.php");
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
if(is_file($path.$y."_planning.php")){
include ($path.$y."_planning.php");
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
