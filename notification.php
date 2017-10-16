<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$readnumber=file_get_contents("number.txt");
$readnumber=$readnumber-1;
include_once "./allticket/".$readnumber."_Ticket.php";
?>
<script type="text/javascript">
var Bvalue = "<?echo ($Problem);?>";
var Svalue = "<?echo ($storeno.$storename);?>";
 if (window.Notification) {
    var ua = navigator.userAgent.toLowerCase();
        // Chrome
        Notification.requestPermission().then(function(permission) {
            if (permission == "granted") {
                var notification = new Notification((Svalue), {
                    body: (Bvalue),
                    icon: 'logo.png'
                });

                notification.onclick = function() {
                window.location.href='index.php'
                notification.close();    
                };
            } else {
                Notification.requestPermission();
                console.log('没有权限,用户拒绝:Notification');
            }
        })
} else {
console.log('不支持Notification');
}
    </script>