<html>

<head>

<meta http-equiv="Content-Language" content="zh-tw">
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
$FileDir="allticket"; 
$data_nums=count(glob("$FileDir/*.*"));
$readnumber=file_get_contents("number.txt");
$per = 50;//每頁顯示項目數量
$pages = ceil($data_nums/$per); //取得不小於值的下一個整數
if (!isset($_GET["page"])){ //假如$_GET["page"]未設置
$page=1; //則在此設定起始頁數
} else {
$page = intval($_GET["page"]); //確認頁數只能夠是數值資料
}
$end = ($page)*$per; //每一頁開始的資料序號
$start = ($end-$per+1);
?>
<?php
//輸出資料內容
$path ="./allticket/";
$y=$readnumber;
$sv=0;
while($sv < $end){
if(is_file($path.$y."_Ticket.php")){
$sv++;
if ($sv >= $start){
include ($path.$y."_Ticket.php");
$color++;
if($color%2==0){
$boby=str_replace ("B0E0E6", "678295", $boby);
}else{
$boby=str_replace ("B0E0E6", "6495ED", $boby);
}
echo $boby;
}
}
if ($y == 0){
$sv=$end+1;
}
$y--;
}
?>
<?php
//分頁頁碼
$nextpage=$page+1;
$backpage=$page-1;
echo 'Total '.$data_nums.'# '.$page.'-'.$pages.' Page';
echo "<br><a href=?page=1>|<</a>&nbsp;&nbsp;";
echo "<a href=?page=".$backpage."><<<</a>&nbsp;&nbsp;";
for( $i=1 ; $i<=$pages ; $i++ ) {
if ( $page-3 < $i && $i < $page+3 ) {
echo "<a href=?page=".$i.">".$i."</a> ";
echo "&nbsp;";
}
} 
echo "&nbsp;<a href=?page=".$nextpage.">>>></a>&nbsp;&nbsp";
echo "<a href=?page=".$pages.">>|</a><br /><br />";
?>

</body>
</html>
