<?php

$default_url = "framed_main.php";
//$url = 'r.php?url=http://www.abercrombie.ca/webapp/wcs/stores/servlet/CategoryDisplay?parentCategoryId=120207&catalogId=10901&categoryId=120207&langId=-1&storeId=11306&topCategoryId=12203';

$url = empty($_REQUEST['url']) ? $default_url : $_REQUEST['url'];
$skip_sidebar = isset($_REQUEST['skip_sidebar']) ? 1 : 0;

if (!preg_match('#(?:framed_main|abercrombie|tommy|google)\.#si', $url)) {
    die('Invalid data.');
}

?>

<?php if ($url == $default_url && empty($skip_sidebar)) : ?>
    <frameset cols="80%,20%">
      <frame src="<?php echo $url; ?>" id="main_window" name="main_window">
      <frame src="search.php">
    </frameset>
<?php else : ?>
    <frameset cols="100%">
      <frame src="<?php echo $url; ?>" id="main_window" name="main_window">
    </frameset>
<?php endif; ?>