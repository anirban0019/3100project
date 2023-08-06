<?php
$pdfUrl = '../admin/data/notices/cover page.pdf'; 
$pdfShiftUrl = 'https://api.pdfshift.io/v3/convert?source=' . $pdfUrl . '&page=1&image=true';
$imgUrl = json_decode(file_get_contents($pdfShiftUrl))->image_url;
echo '<img src="' . $imgUrl . '">';
?>
