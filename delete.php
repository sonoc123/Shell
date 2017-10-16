<?php
$Getdeletecall= $_GET[del];
$Getfrompage= $_GET[frompage];
$delfile1=("./newticket/".$Getdeletecall."_Ticket.php");
$delfile2=("./processed/".$Getdeletecall."_processed.php");
$delfile3=glob("./exportfile_bkup/".$Getdeletecall."_*");
$delfile3=($delfile3[0]);
$delfile4=glob("./closedticket/*_".$Getdeletecall."_*");
$delfile4=($delfile4[0]);
$delfile5=("./allticket/".$Getdeletecall."_Ticket.php");
$delfile6=("./planning/".$Getdeletecall."_planning.php");
unlink($delfile1);
unlink($delfile2);
unlink($delfile3);
unlink($delfile4);
unlink($delfile5);
unlink($delfile6);
if ($Getfrompage == 0){
$url="main.php";
goto url;
}
if ($Getfrompage == 1){
$url="index.php";
goto url;
}
if ($Getfrompage == 2){
$url="closedticket.php";
goto url;
}
if ($Getfrompage == 3){
$url="allticket.php";
goto url;
}
url:
header("Location:$url");
?>