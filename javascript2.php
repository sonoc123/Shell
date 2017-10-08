<script type='text/javascript'>
var value = "<?echo ($value.$value2);?>";
var valueS = "<?echo ($valueS);?>";
function openwindow()
{
	  window.open((value), 'window2', 
      'alwaysRaised=yes, top=300, left=500, width=600, height=750');
	  setTimeout(settime, 5000);
}
function settime()
{
  wor.close();
}

window.onload = openwindow;
</script>
