<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

//Create ticket
$Getlocalid = $_GET[localid];
$GetCompleted = $_GET[Completed];
$Getdeletecall = $_GET[deletecall];
$Getplanning = $_GET[planning];
$Getreopen = $_GET[reopen];
$Gettransport = $_GET[transport];
$GetDetail = $_GET[Detail];
$POSTremark = $_POST[remark];
$POSTDetail = $_POST[Detail];
if ($Getlocalid >= 1){
$processed=($Getlocalid."_Ticket.php");
copy("./newticket/".$processed,"./processed/".$Getlocalid."_processed.php");
$removeNewTicket=("./newticket/".$processed);
unlink($removeNewTicket);
include_once "./allticket/".$Getlocalid."_Ticket.php";
$date=date("Y-m-d");
$value=($value.$date.$value2."136".$value3);
$value2="";
$accept="https://crmgate.wincor-nixdorf.com/briefingAcknowledge?oai_url=http://crm0180.wincor-nixdorf.com:60080/oai_http_ext/servlet/transportServletHTTPEXT&taskAssgnId=";
$accept2="&noteType=XXWN_WN_INFORMATION&taskStatusIdAccept=Accepted&taskStatusIdReject=TANA";
$valueS=$accept.$taskID.$accept2;
require_once "javascript.php";
$file=glob("./exportfile_bkup/".$Getlocalid."_*");
$file=($file[0]);
$open=fopen($file, "a+");
fwrite($open,"\r\n"."--Remark on ".date("Y-m-d H:i:s")."<br>");
fwrite($open,">Created ticket on monitor system");
fclose($open);
}
//Close ticket
if ($GetCompleted >= 1){
$value=("./closeform.php");
$value2=("?Completed=".$GetCompleted);
require_once "javascript2.php";
}
//Delete ticket
if ($Getdeletecall >= 1){
echo "<script>if(confirm('Are you sure you want to delete?')) window.location='delete.php?del=".$Getdeletecall."&frompage=1';</script>";
}
//Planning ticket
if ($Getplanning >= 1){
$planticket=($Getplanning."_Ticket.php");
$planticket2=($Getplanning."_processed.php");
copy("./newticket/".$planticket,"./planning/".$Getplanning."_planning.php");
copy("./processed/".$planticket2,"./planning/".$Getplanning."_planning.php");
$removeTicket=("./newticket/".$planticket);
$removeTicket2=("./processed/".$planticket2);
unlink($removeTicket);
unlink($removeTicket2);
}
//Reopen ticket
if ($Getreopen >= 1){
$reopenticket=($Getreopen."_planning.php");
$reopenticket2=glob("./closedticket/*_".$Getreopen."_*");
$reopenticket2=($reopenticket2[0]);
copy("./planning/".$reopenticket,"./processed/".$Getreopen."_processed.php");
copy("./closedticket/".$reopenticket2,"./processed/".$Getreopen."_processed.php");
$removeTicket=("./planning/".$reopenticket);
$removeTicket2=("./closedticket/".$reopenticket2);
unlink($removeTicket);
unlink($removeTicket2);
}
//Transport ticket
if ($Gettransport >= 1){
include_once "./allticket/".$Gettransport."_Ticket.php";
$date=date("Y-m-d");
$value3=str_replace ($Problem, "Collect", $value3);
$value3=str_replace ($CallNo, $CallNo."-1", $value3);
$value=($value.$date.$value2."121".$value3);
$value2="";
require_once "javascript2.php";
}
//Remark
if (isset($POSTremark)){
$file=glob("./exportfile_bkup/".$POSTDetail."_*");
$file=($file[0]);
$open=fopen($file, "a+");
fwrite($open,"\r\n"."--Remark on ".date("Y-m-d H:i:s")."<br>");
fwrite($open,">".$POSTremark);
fclose($open);
$GetDetail=$POSTDetail;
}
//Detail
if ($GetDetail >= 1){
include_once "./allticket/".$GetDetail."_Ticket.php";
include_once "./detail.php";
exit;
}


//DEl Junk DAV file
rmdir('./exportfile/.DAV');
while($d<=10) {
$dav=scandir('./exportfile/.DAV');
if (empty($dav[2])) {
goto Startset;
}else{
$davname=$dav[2];
$davpath=("exportfile/.DAV/".$davname);
unlink($davpath);
rmdir('./exportfile/.DAV');
}
$d+1;
}

//Start set
Startset:
while($k<=10) {
$file=scandir('./exportfile');
if (empty($file[2])) {
header("refresh:0.3;url=main.php");
#include_once "main.php";
#$url = "main.php";  
#echo "<script language='javascript' 
#type='text/javascript'>";  
#echo "window.location.href='$url'";  
#echo "</script>";  
exit;
 }
else {
$filename=$file[2];
$filepath=("exportfile/".$filename);

//Verify exportfile
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
if (false !== ($rst2 = strpos(${$read}, "immediately"))) {
goto TaskAssgnId;
}
}
echo "<script>alert('Warning：Wrong file'); location.href = 'index.php';</script>";
unlink($filepath);
goto Startset;

//Set TaskAssgnId
TaskAssgnId:
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
if (false !== ($rst2 = strpos(${$read}, "https"))) {
${$read}= mb_convert_encoding(${$read}, "UTF-8", "big5");
$link=${$read};
$link=trim($link);
$r=$i+1;
$read=("read".$r);
${$read}=fgets($fp,1024);
if (empty(${$read})) {
exit;
}else{
${$read}= mb_convert_encoding(${$read}, "UTF-8", "big5");
$link1=${$read};
$link1=trim($link1); 
$r=$i+2;
$read=("read".$r);
${$read}=fgets($fp,1024);
if (empty(${$read})) {
exit;
}else{
${$read}= mb_convert_encoding(${$read}, "UTF-8", "big5");
$link2=${$read};
$link2=trim($link2); 
$r=$i+3;
$read=("read".$r);
${$read}=fgets($fp,1024);
if (empty(${$read})) {
exit;
}else{
${$read}= mb_convert_encoding(${$read}, "UTF-8", "big5");
$link3=${$read};
$link3=trim($link3); 
$r=$i+4;
$read=("read".$r);
${$read}=fgets($fp,1024);
if (empty(${$read})) {
exit;
}else{
${$read}= mb_convert_encoding(${$read}, "UTF-8", "big5");
$link4=${$read};
$link4=trim($link4); 
}}}}}}
fclose($fp);
$link=($link.$link1.$link2.$link3.$link4);
$staskID=stripos($link,"taskAssgnId");
$taskID=substr($link, $staskID+12,9);

//Set RequestTask;
Task:
fclose($fp);
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
if (false !== ($rst2 = strpos(${$read}, "Request"))) {
$sTask=stripos(${$read},"Request");
$Task=substr(${$read}, $sTask);
$Task=trim($Task);
$Task=rtrim($Task,")");
$r=$i+1;
$read=("read".$r);
${$read}=fgets($fp,1024);
if (false !== ($rst2 = strpos(${$read}, "pdf"))) {
goto CallNo;
}else{
$Task2=${$read};
$Task2=trim($Task2);
$Task2=rtrim($Task2,")");
$Task=($Task." ".$Task2);
goto CallNo;
}
}
}

//Set CallNo;
CallNo:
fclose($fp);
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
if (false !== ($rst2 = strpos(${$read}, "Request"))) {
$sCallNo=stripos(${$read},"Request");
$CallNo=substr(${$read}, $sCallNo+9,8);
goto Filter;
}else{
$CallNo=("Missing".rand(1,100));
}
}

//Filter Duplicate
Filter:
$filter=glob("./exportfile_bkup/*".$CallNo."_*");
$filter=($filter[0]);
if (empty($filter)) {
goto Calldate;
}else{
echo "<script>alert('Warning：Duplicate ticket'); location.href = 'index.php';</script>";
unlink($filepath);
goto Startset;
}


//Set Calldate;
Calldate:
fclose($fp);
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
if (strlen( $read2 )>1) {
$Calldate=substr($read2, 10);
$Calldate = mb_convert_encoding($Calldate, "UTF-8", "big5");
$Calldate=trim($Calldate);
goto Problem;
}else{
$Calldate="n/a";
}
}

//Set Problem;
Problem:
fclose($fp);
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
if (false !== ($rst2 = strpos(${$read}, "Problem"))) {
$sProblem=stripos(${$read},"Problem");
$Problem=substr(${$read}, $sProblem+9);
$Problem=trim($Problem);
$Problem=str_replace("'","",$Problem);
$Problem=str_replace('"',"",$Problem);
$r=$i+1;
$read=("read".$r);
${$read}=fgets($fp,1024);
if (false !== ($rst = strpos(${$read}, "Location"))) {
goto Store;
}else{
$Problem2=${$read};
$Problem2=trim($Problem2);
$Problem2=str_replace("'","",$Problem2);
$Problem2=str_replace('"',"",$Problem2);
$Problem=($Problem." ".$Problem2);
goto Store;
}
}else{
$Problem=("Missing".rand(1,100));
}
}

//Set Store;
Store:
fclose($fp);
require_once "storeid.php";
for ( $sn=1 ; $sn<50 ; $sn++ ) {
$store=("store".$sn);
$sstore=${$store};
$fp=fopen($filepath,"r");
  for ( $i=1 ; $i<50 ; $i++ ) {
  $read=("read".$i);
  ${$read}=fgets($fp,1024);
  if (false !== ($rst2 = stripos(${$read}, $sstore))) {
  $storename=($store."n");
  $storename=${$storename};
  $storeno=($store."o");
  $storeno=${$storeno};
  $store_monitor=${$storeno};
  goto CreateTicket;
  }else{
	  $storename="error";
	  $storeno="error";
}
}
fclose($fp);
}

//Create Ticket to newticket folder
CreateTicket:
fclose($fp);
$header=file_get_contents("number.txt");
$ticket=fopen("./newticket/".$header."_Ticket.php", "a+");
$date=date("Y-m-d");
$URL="<?php $"."value='http://42.200.212.77/tphelpdesk/editcall.php?SelDate=' ?>";
$URL2="<?php $"."value2='&Engineer=' ?>";
$URL3="<?php $"."value3='&CallID=0&Problem=".$Problem."&CallNo=".$CallNo."&StoreNo=".$store_monitor."' ?>";
$dp="<?php $"."boby='<a href=?Detail=".$header." class=class1>";
$dp2="<table border=1 cellpadding=0 cellspacing=0 style="."border-collapse: collapse"." bordercolor=#111111 width=100% bgcolor=#B0E0E6>";
$dp3='<tr onMouseOver=this.style.backgroundColor="#FFFF00" onMouseOut=this.style.backgroundColor="#B0E0E6">';
$dpStore='<th width=5% align=left><font face=Arial color=#000000><span style="font-weight: 400">';
$dpStore2=($storeno."</span></font></th>");
$dpCallNo='<th width=8% align=left><font face=Arial color=#000000><span style="font-weight: 400">';
$dpCallNo2=($CallNo."</span></font></th>");
$dpProblem='<th width=30% align=left><font face=Arial color=#000000><span style="font-weight: 400">';
$dpProblem2=($Problem."</span></font></th>");
$dpOpentime='<th width=23% align=left><font face=Arial color=#000000><span style="font-weight: 400">';
$dpOpentime2=($Calldate."</span></font></th>");
$dpAddress='<th width=14% align=left><font face=Arial color=#000000><span style="font-weight: 400">';
$dpAddress2=($storename."</span></font></th>");
$localid='<th width=8% align=cente><font face=Arial color=#000000><span style="font-weight: 400"><a href=?';
$localid2=("localid=".$header.'>Create Call</a></span></font></th>');
$Completed='<th width=7% align=cente><font face=Arial color=#000000><span style="font-weight: 400"><a href=?';
$Completed2=("Completed=".$header.'>Close</a></span></font></th>');
$delete='<th width=5% align=cente><font face=Arial color=#000000><span style="font-weight: 400"><a href=?';
$delete2=("deletecall=".$header.">Del</a></span></font></th></tr></table></a> "."'?>");
$Problem_inc="<?php $"."Problem='".$Problem."' ?>";
$CallNo_inc="<?php $"."CallNo='".$CallNo."' ?>";
$storename_inc="<?php $"."storename='".$storename."' ?>";
$storeno_inc="<?php $"."storeno='".$storeno."' ?>";
$Calldate_inc="<?php $"."Calldate='".$Calldate."' ?>";
$sstore_inc="<?php $"."sstore='".$sstore."' ?>";
$Task_inc="<?php $"."Task='".$Task."' ?>";
$taskID_inc="<?php $"."taskID='".$taskID."' ?>";

fwrite($ticket,$URL);
fwrite($ticket,$URL2);
fwrite($ticket,$URL3);
fwrite($ticket,$dp);
fwrite($ticket,$dp2);
fwrite($ticket,$dp3);
fwrite($ticket,$dpOpentime);
fwrite($ticket,$dpOpentime2);
fwrite($ticket,$dpCallNo);
fwrite($ticket,$dpCallNo2);
fwrite($ticket,$dpStore);
fwrite($ticket,$dpStore2);
fwrite($ticket,$dpAddress);
fwrite($ticket,$dpAddress2);
fwrite($ticket,$dpProblem);
fwrite($ticket,$dpProblem2);
fwrite($ticket,$localid);
fwrite($ticket,$localid2);
fwrite($ticket,$Completed);
fwrite($ticket,$Completed2);
fwrite($ticket,$delete);
fwrite($ticket,$delete2);
fwrite($ticket,$Problem_inc);
fwrite($ticket,$CallNo_inc);
fwrite($ticket,$storename_inc);
fwrite($ticket,$storeno_inc);
fwrite($ticket,$sstore_inc);
fwrite($ticket,$Calldate_inc);
fwrite($ticket,$Task_inc);
fwrite($ticket,$taskID_inc);
fclose($ticket);
$ticket=("./newticket/".$header."_Ticket.php");
copy($ticket, "./allticket/".$header."_Ticket.php");

//Remove exportfile
$remove=("./exportfile/".$filename);
copy($remove, "./exportfile_bkup/".$header."_".$CallNo."_exportfile.txt");
$file=("./exportfile_bkup/".$header."_".$CallNo."_exportfile.txt");
$open=fopen($file, "a+");
fwrite($open,"\r\n"."--Remark on ".date("Y-m-d H:i:s")."<br>");
fwrite($open,">Ticket inputted");
fclose($open);
unlink($remove);
$number = file_get_contents("number.txt");
$_number2 = fopen('number.txt', 'w');
fwrite($_number2, $number+1);
$k+1;
}
}

?>