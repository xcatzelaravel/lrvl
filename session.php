<?php
$sessionPath = __DIR__ . '/storage/framework/sessions';
$interval = 900; // 15 minutes
function clearSessions($sessionPath)
{
    if (is_dir($sessionPath)) {
        $files = glob($sessionPath . '/*');
        foreach ($files as $file) {
            if (is_file($file)) {
                unlink($file);
            }
        }
    }
}
while (true) {
    clearSessions($sessionPath);
    sleep($interval);
}
//nohup php /patch_daemon/daemon.php > /patch_log/daemon.log 2>&1 &
?>
