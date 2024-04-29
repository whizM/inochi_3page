<?php
    get_header();  
?>

<?php
$current_language = pll_current_language();
if ($current_language == 'en') {
    include 'front-page_en.php';
} elseif ($current_language == 'ja') {
    include 'front-page_ja.php';
} else {
    // Load default language file
    include 'front-page_ja.php';
}
?>

<?php
    get_footer();
?>