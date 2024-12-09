<h3>DATE AND TIME </h3>

<div>Date: <?php echo date('y-m-d h:i:s'); ?></div>
<div>Time: <?php echo time(); ?></div>
<div>Timestamp: <?php echo mktime(0,0,1,1, 2024); ?></div>
<div>Date: <?php echo date('Y-m-d', mktime(0,0,0,12,04,2024)); ?></div>
<div>Total days in this month: <?php echo date('t'); ?></div>
<div>Week Number:<?php echo date('W'); ?></div>