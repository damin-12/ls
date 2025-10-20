<?php

error_reporting(0);


// Generate secure session ID
$rand = bin2hex(random_bytes(16));

  // Redirect to complete page
header("Location: Archive/ar/Archive/index.php?session_id=$rand");
exit;
}
?>
