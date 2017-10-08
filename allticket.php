<html>

<head>

<meta http-equiv="Content-Language" content="zh-cn">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shell-All ticket</title>
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
echo "<script>if(confirm('Are you sure you want to delete?')) window.location='delete.php?del=".$Getdeletecall."&frompage=3';</script>";
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
<td width="150px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;All Ticket List</b></td>
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
    <td width="8%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
    <td width="7%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
	<td width="5%" align="center" bgcolor="#274358" bordercolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>
<?php
$readnumber=file_get_contents("number.txt");
$path ="./allticket/";
$y=$readnumber;
$s=0;
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
?>
</body>

</html>
