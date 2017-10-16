<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Close ticket</title>
<style type="text/css">
body
{ 
background-image: 
url(bg.png);
background-repeat: repeat-x
}
</style>

</head>
<body>
<?php
$email=($_POST["email"]);
$Subject =($_POST["Subject"]);
$detail =($_POST["detail"]);
$Task =($_POST["Task"]);
$sstore =($_POST["sstore"]);
$CallNo =($_POST["CallNo"]);
$ce =($_POST["ce"]);
$tdt =($_POST["tdt"]);
$adt =($_POST["adt"]);
$fdt =($_POST["fdt"]);
$tafd =($_POST["tafd"]);
$name =($_POST["name"]);
$Problem =($_POST["Problem"]);
$status =($_POST["status"]);
$taskID =($_POST["taskID"]);
$GetCompleted =($_POST["GetCompleted"]);
$name= mb_convert_encoding($name, "UTF-8", "auto");

//
$Completicket=($GetCompleted."_Ticket.php");
$Completicket2=($GetCompleted."_processed.php");
$Completicket3=($GetCompleted."_planning.php");
copy("./newticket/".$Completicket,"./closedticket/".date("Ymd")."_".$GetCompleted."_Closed.php");
copy("./processed/".$Completicket2,"./closedticket/".date("Ymd")."_".$GetCompleted."_Closed.php");
copy("./planning/".$Completicket3,"./closedticket/".date("Ymd")."_".$GetCompleted."_Closed.php");
$removeTicket=("./newticket/".$Completicket);
$removeTicket2=("./processed/".$Completicket2);
$removeTicket3=("./planning/".$Completicket3);
unlink($removeTicket);
unlink($removeTicket2);
unlink($removeTicket3);
?>
<h2>Close ticket</h2>
<br><br><br>

<textarea id="foo" rows="22" name="2" cols="80">
Close Shell <?php echo $Task;?>

CSR no : NIL
Site Name : <?php echo $sstore;?>

Status : <?php echo $status;?>

CE Name: <?php echo $ce;?>

Travel Date/Time : <?php echo ($tafd." ".$tdt);?>

Arrival Date/Time : <?php echo ($tafd." ".$adt);?>

Fix Date/Time : <?php echo ($tafd." ".$fdt);?>

Site Signatory Name : <?php echo $name;?>

Affected hardware/software : <?php echo $Problem;?>

Resolution Detail : <?php echo $detail;?>



Parts sn: N/A
FST s/n: N/A
Parts no. & Name : N/A
Follow Up Required?:   No
Next D&T Appointment : N/A
Pending Part?:  N/A
Pending Part Name: N/A
Security Check: Done

Thanks

Best Regards,
ATL support


...
<?php
$filepath=("./exportfile_bkup/".$GetCompleted."_".$CallNo."_exportfile.txt");
$fp=fopen($filepath,"r");
for ( $i=1 ; $i<50 ; $i++ ) {
$read=("read".$i);
${$read}=fgets($fp,1024);
${$read}= mb_convert_encoding(${$read}, "UTF-8", "big5");
if (false !== ($rst2 = strpos(${$read}, "WINCOR NIXDORF"))) {
echo "WINCOR NIXDORF";
goto exitfor;
}else{
echo ${$read};
}
}
exitfor:
?>
</textarea>

<p align="center"><button  class="btn-clipboard" data-clipboard-target="#foo">1. Copy to Clipboard</button>
<script src="js/clipboard.min.js"></script>
<script>
        var cpobj = new Clipboard('.btn-clipboard');
</script>


<form action="mailto:<?php echo $email;?>?subject=<?php echo ("RE: Service Ticket with Attachment (".$Task.")");?>
&cc=atlsupport@asialandtech.com;ken.li.ext@dieboldnixdorf.com" method="post" enctype="text/plain">
<p align="center"> <input type="submit" value="2. Send from email " /></p>
</form>
<p align="center"><input onclick="window.close();" value="3. Close window" type="button">

<?php
$file=glob("./exportfile_bkup/".$GetCompleted."_*");
$file=($file[0]);
$open=fopen($file, "a+");
$wi1=(">CE Name: ".$ce."<br>");
$wi2=(">Travel Date/Time : ".$tafd." ".$tdt."<br>");
$wi3=(">Arrival Date/Time : ".$tafd." ".$adt."<br>");
$wi4=(">Fix Date/Time : ".$tafd." ".$fdt."<br>");
$wi5=(">Site Signatory Name : ".$name."<br>");
$wi6=(">Resolution Detail : ".$detail."<br>");
fwrite($open,"\r\n"."--Remark on ".date("Y-m-d H:i:s")." "."Closed ticket<br>");
fwrite($open,$wi1);
fwrite($open,$wi2);
fwrite($open,$wi3);
fwrite($open,$wi4);
fwrite($open,$wi5);
fwrite($open,$wi6);
fclose($open);
?>

</body>
</html>