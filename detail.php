<html>
<head>
<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Shell</title>
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