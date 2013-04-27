<?php require_once dirname(__FILE__) . '/header.php'; ?>

<div class="row-fluid app_container">
    <div class="app_question">
        <label for="height">Your Height:</label>
        <input type="text" id="height" />

        <div id="height-slider" class="slider"></div>
    </div>
    
    <div class="app_question">
        <label for="size-bust">Your Bust Size:</label>
        <input type="text" id="size-bust" />
        
        <div id="slider-bust" class="slider"></div>
    </div>
</p>
</div>

<script>
    $(function() {
        $("#height-slider").slider({
            orientation: "vertical",
            range: "min",
            min: 5,
            max: 6.9,
            value: 6,
            step :0.1,
            slide: function(event, ui) {
                $("#height").val(ui.value);
            }
        });
        // initial value
        $("#height").val($("#height-slider").slider("value"));

        $("#slider-bust").slider({
            orientation: "vertical",
            range: "min",
            min: 32,
            max: 41,
            value: 35,
            step :1,
            slide: function(event, ui) {
                $("#size-bust").val(ui.value);
            }
        });

        // initial value
        $("#slider-bust").val($("#slider-vertical").slider("value"));
    });
</script>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>
