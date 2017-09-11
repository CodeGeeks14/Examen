<?php	
	session_unset();
	session_destroy();
	?><script language="JavaScript" type="text/javascript">
			setTimeout("location.href = 'index.php'",500); // milliseconds, so 10 seconds = 10000ms
</script><?php
?>