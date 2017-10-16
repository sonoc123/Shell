<html>
<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Shell</title>
<?php
include ("header.php");
?>

<table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<td width="50px"><hr></td>
<td width="70px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;Detail</b></td>
<td><hr></td>
</tr></tbody></table><br>
<?php
$Tasks=stripos($Task,"Task:");
$Task=substr($Task, $Tasks+6);
?>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" height="158" align="left">
  <tr>
    <td width="10%" height="23" valign="baseline">Customer Name :</td>
    <td width="20%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="33" value="SHELL HONG KONG LIMITED"></p>
    </form>
    </td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="8%" height="23" valign="baseline">Store No :</td>
    <td width="25%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="32" value="<?php echo $storeno; ?>"></p>
    </form>
    </td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="9%" height="23" valign="baseline">Create On :</td>
    <td width="24%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="31" value="<?php echo $Calldate; ?>"></p>
    </form>
    </td>
  </tr>
  <tr>
    <td width="10%" height="23" valign="baseline">　</td>
    <td width="20%" height="23" valign="baseline">　</td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="8%" height="23" valign="baseline">　</td>
    <td width="25%" height="23" valign="baseline">　</td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="9%" height="23" valign="baseline">　</td>
    <td width="24%" height="23" valign="baseline">　</td>
  </tr>
  <tr>
    <td width="10%" height="23" valign="baseline">Ticket No :</td>
    <td width="20%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="33" value="<?php echo $CallNo; ?>"></p>
    </form>
    </td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="8%" height="23" valign="baseline">Task No :</td>
    <td width="25%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="32" value="<?php echo $Task; ?>"></p>
    </form>
    </td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="9%" height="23" valign="baseline">TaskAssgnId :</td>
    <td width="24%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="31" value="<?php echo $taskID; ?>"></p>
    </form>
    </td>
  </tr>
  <tr>
    <td width="10%" height="23" valign="baseline">　</td>
    <td width="20%" height="23" valign="baseline">　</td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="8%" height="23" valign="baseline">　</td>
    <td width="25%" height="23" valign="baseline">　</td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="9%" height="23" valign="baseline">　</td>
    <td width="24%" height="23" valign="baseline">　</td>
  </tr>
  <tr>
    <td width="10%" height="23" valign="baseline">Site Name :</td>
    <td width="20%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="33" value="<?php echo $storename; ?>"></p>
    </form>
    </td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="8%" height="23" valign="baseline">Address :</td>
    <td width="25%" height="23" valign="baseline">
    <form method="POST" action="--WEBBOT-SELF--">
      <input type="text" name="T1" size="32"></p>
    </form>
    </td>
    <td width="2%" height="23" valign="baseline">　</td>
    <td width="9%" height="23" valign="baseline">　</td>
    <td width="24%" height="23" valign="baseline">　</td>
  </tr>
  <tr>
    <td width="10%" height="24" valign="baseline">　</td>
    <td width="20%" height="24" valign="baseline">　</td>
    <td width="2%" height="24" valign="baseline">　</td>
    <td width="8%" height="24" valign="baseline">　</td>
    <td width="25%" height="24" valign="baseline">　</td>
    <td width="2%" height="24" valign="baseline">　</td>
    <td width="9%" height="24" valign="baseline">　</td>
    <td width="24%" height="24" valign="baseline">　</td>
  </tr>
  <tr>
    <td width="10%" height="24" valign="baseline">Symptom :</td>
    <td width="120%" colspan="7" height="24" valign="baseline">
    <input type="text" name="T1" size="71" value="<?php echo $Problem; ?>"></td>
  </tr>
  <tr>
    <td width="10%" height="24" valign="baseline">　</td>
    <td width="120%" colspan="7" height="24" valign="baseline">
    　</td>
  </tr>
  <tr>
    <td width="10%" height="24" valign="baseline">　</td>
    <td width="20%" height="24" valign="baseline">　</td>
    <td width="2%" height="24" valign="baseline">　</td>
    <td width="8%" height="24" valign="baseline">　</td>
    <td width="26%" height="24" valign="baseline">
    <p align="right">　<font face="Arial" size="4"><span style="background-color: #808080">&nbsp;
    <a href="<?php echo "index.php?localid=".$GetDetail; ?>">Create</a>&nbsp; </span></font></td>
    <td width="2%" height="24" valign="baseline">　</td>
    <td width="9%" height="24" valign="baseline">　<font face="Arial" size="4"><span style="background-color: #808080">&nbsp;
    <a href="<?php echo "index.php?deletecall=".$GetDetail; ?>">Delete</a>&nbsp; </span></font></td>
    <td width="23%" height="24" valign="baseline">　</td>
  </tr>
</table>

<br><br><br>
<p><table id="tblSplitLine" class="clsSplitLine" width="100%" cellspacing="0px" cellpadding="0px"><tbody><tr>
<td width="50px"><hr></td>
<td width="180px" style="font-size: 13px;"><b>&nbsp;&nbsp;&nbsp;Remark & Close ticket</b></td>
<td><hr></td>
</tr></tbody></table><br>

<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="80%" >
<tr><td width="60%" height="500" valign="top" bgcolor="#CCCCCC">　
<?php
$file=glob("./exportfile_bkup/".$GetDetail."_*");
$file=($file[0]);
$open=fopen($file,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($open,1024);
if (false !== ($rst2 = strpos(${$read}, "--Remark on"))) {
if (empty($rst2)) {
echo "<form method=POST action=>";
echo "<fieldset style=width:530px>";
echo "<legend>Remark</legend>";
echo (${$read}."</fieldset></form>");
echo "<br>";
}
}
}
?>
<form method="POST" action="index.php">
<input type="text" name="remark" size="75">
<input type="hidden" name="Detail" value="<?php echo $GetDetail;?>">
<input type="submit" value="submit"></p></form>
</td>
<td width="40%" height="500" valign="top">
<iframe name="I1" src="<?php echo "closeform.php?Completed=".$GetDetail ?>" width="700" height="600"></iframe>
</td>
</tr>
</table>



</body>

</html>