<?php
// clear_cache.php
$dir = '/tmp/i18n-cache';
if (is_dir($dir)) {
	$files = glob($dir . '/*.html');
	foreach ($files as $f) {
		@unlink($f);
	}
	echo "i18n cache cleared: " . count($files) . " files removed.\n";
} else {
	echo "cache dir not found.\n";
}