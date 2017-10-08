<!DOCTYPE HTML> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Close ticket</title>
<style>
.error {color: #FF0000;}
</style>
<style type="text/css">
body
{ 
background-image: 
url(bg.png);
background-repeat: repeat-x
}
</style>

  <link rel="stylesheet" href="js/jquery-ui.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="jqueryui/style.css">
  <script src="js/jquery.ptTimeSelect.js"></script>
  <link href="js/jquery.ptTimeSelect.css" type="text/css" rel="stylesheet">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

</head>
<body> 

<?php
$GetCompleted = $_GET[Completed];
include ("./allticket/".$GetCompleted."_Ticket.php");
?>

<h2>Close ticket</h2>
<form method="post" action="closeemail.php"> 
   <br>
   <p>Email address：<input type="text" name="email" size="27" value="calldesk.hkg@dieboldnixdorf.com">
   <span class="error">* <?php echo $emailErr;?></span>
   <br>
   <p>Site Name：<input type="text" name="sitename" size="20" value="<?php echo $sstore;?>">
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   <p>Site Signatory Name：<input type="text" size="10" name="name">
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   <p>Status：
   <input type="radio" name="status" checked="checked" value="Completed">Completed
   <input type="radio" name="status" value="Follow">Follow
   <span class="error">* <?php echo $ceErr;?></span>
   <br>
   <p><u>Symptom : <?php echo $Problem;?></u>
   <br>
   Resolution Detail：<textarea name="detail" rows="3" cols="40"></textarea>
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   <p><u>Ticket open Date/Time: <?php echo $Calldate;?></u>
   <br>
   Travel/Arrival/Fix Date : &nbsp;<input type="text" name="tafd" id="datepicker">
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   Travel Time : &nbsp;
    <!--<input type="time" name="tdt">>-->
    <input name="tdt" value="" />
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[name="tdt"]').ptTimeSelect({containerWidth: "450px",});
    });
    </script>
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   Arrival Time :
   <input name="adt" value="" />
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[name="adt"]').ptTimeSelect({containerWidth: "450px",});
    });
    </script>
   <span class="error">* <?php echo $nameErr;?></span>
   <br>
   Fix Time：&nbsp;&nbsp;&nbsp;&nbsp;
   <input name="fdt" value="" />
    <script type="text/javascript">
    $(document).ready(function(){
        $('input[name="fdt"]').ptTimeSelect({containerWidth: "450px",});
    });
    </script>
   <span class="error">* <?php echo $nameErr;?></span>
   <br><br>
   CE Name：
   <input type="radio" name="ce" value="Pang Sze Yuen">Andy
   <input type="radio" name="ce" value="Tai Chin Ming">Ming
   <input type="radio" name="ce" value="Lam Ping Man">Tommy
   <input type="radio" name="ce" value="Wong Wing Fu">Fu
   <input type="radio" name="ce" value="Lam Ka Kit">Kit
   <input type="radio" name="ce" value="Ip Wing Chung">Eric Ip
   <span class="error">* <?php echo $ceErr;?></span>
   <br>
   <p align="center">   <input type="submit" name="submit" value=" Next "></p>
   <br><br>
   <input type="hidden" name="Task" value="<?php echo $Task;?>">
   <input type="hidden" name="sstore" value="<?php echo $sstore;?>">
   <input type="hidden" name="CallNo" value="<?php echo $CallNo;?>">
   <input type="hidden" name="Problem" value="<?php echo $Problem;?>">
   <input type="hidden" name="Subject" value="<?php echo $Subject;?>">
   <input type="hidden" name="taskID" value="<?php echo $taskID;?>">
   <input type="hidden" name="GetCompleted" value="<?php echo $GetCompleted;?>">

</form>

</body>
</html>

