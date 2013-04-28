<?php require_once dirname(__FILE__) . '/header.php'; ?>

<div class="row-fluid app_container">
    <p>
        <h2>Suggestions</h2>
        
        <?php echo "<pre>".  var_export($_SESSION, 1) . "</pre>"; ?>
    </p>
</div>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>
