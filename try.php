<?php require_once dirname(__FILE__) . '/header.php'; ?>

<div class="row-fluid app_container">
    <div class="app_question">
        <label for="size-height">Your Height:</label>
        <input type="text" id="size-height" />

        <div id="height-slider" class="slider"></div>
    </div>
    
    <div class="app_question">
        <label for="size-bust">Your Bust Size:</label>
        <input type="text" id="size-bust" />
        
        <div id="slider-bust" class="slider"></div>
    </div>

    <div class="app_question">
        <label for="size-waist">Your Waist Size:</label>
        <input type="text" id="size-waist" />

        <div id="slider-waist" class="slider"></div>
    </div>

    <div class="app_question">
        <label for="size-waist">Your Hips Size:</label>
        <input type="text" id="size-hips" />

        <div id="slider-hips" class="slider"></div>
    </div>

    <div class="app_question">
        <label for="size-arm">Your Arm Size:</label>
        <input type="text" id="size-arm" />

        <div id="slider-arm" class="slider"></div>
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
                $("#size-height").val(ui.value);
            }
        });
        // initial value
        $("#size-height").val($("#height-slider").slider("value"));

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
        $("#size-bust").val($("#slider-bust").slider("value"));

        $("#slider-waist").slider({
            orientation: "vertical",
            range: "min",
            min: 24,
            max: 39,
            value: 36,
            step :1,
            slide: function(event, ui) {
                $("#size-waist").val(ui.value);
            }
        });

        // initial value
        $("#size-waist").val($("#slider-waist").slider("value"));

        $("#slider-hips").slider({
            orientation: "vertical",
            range: "min",
            min: 33,
            max: 45,
            value: 36,
            step :1,
            slide: function(event, ui) {
                $("#size-hips").val(ui.value);
            }
        });

        // initial value
        $("#size-hips").val($("#slider-hips").slider("value"));

        $("#slider-arm").slider({
            orientation: "vertical",
            range: "min",
            min: 28,
            max: 39,
            value: 35,
            step :1,
            slide: function(event, ui) {
                $("#size-arm").val(ui.value);
            }
        });

        // initial value
        $("#size-arm").val($("#slider-arm").slider("value"));
    });
</script>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>
