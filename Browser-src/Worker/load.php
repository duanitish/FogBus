<?php

// Display CPU load
$load = sys_getloadavg();
echo $load[0];

?>
