<?php
$image = imagecreatefromstring(file_get_contents('/Users/ufmurphy/Sites/images/flags.jpg'));
echo "file: /Users/ufmurphy/Sites/images/flags.jpg : " . is_resource($image);
echo "file: /Users/ufmurphy/Sites/images/flags.jpg : " . get_resource_type($image);

?>
