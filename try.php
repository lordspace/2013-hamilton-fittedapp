<?php

require_once dirname(__FILE__) . '/header.php';

$data = empty($_REQUEST['data']) ? array() : $_REQUEST['data'];
$data = array_map('trim', $data);

var_dump($_REQUEST);
var_dump($data);

?>

<!--Do you know your size well enough to make a purchase?
Yes, I know which size to buy
No, I'm not sure which size fits me best
-->

<form id="qform" method="POST">
    <div class="row-fluid app_container">
        <h2>Questions Step #1</h2>
        <div class="app_user_question">
            <label for="app-q1">What brand is it?</label>
            <input type="text" id="app-q1" name="data[brand]" value=""/>
        </div>

        <div class="app_user_question">
            <label for="app-q2">What size is it?</label>
            <input type="text" id="app-q2" name="data[size]" value=""/>
        </div>

        <div class="app_user_question">
            <label for="app-q3">What style is it?</label>
            <input type="text" id="app-q3" name="data[style]" value=""/>
        </div>

        <div class="app_user_question">
            <label for="q4_1">What item of clothing is it?</label>

            <div id="radio">
                <label for="q4_1"><input type="radio" name="data[clothing_type]" value="shirt" id="q4_1" checked="checked" /> <span>Shirt</span></label>
                <label for="q4_2"><input type="radio" name="data[clothing_type]" value="dress" id="q4_2" /> <span>Dress</span></label>
                <label for="q4_3"><input type="radio" name="data[clothing_type]" value="tops" id="q4_3" /> <span>Tops</span></label>
            </div>
        </div>

        <br class="clear_both"/>
        <input type="submit" class="btn btn-primary" value="Submit" />
        <br class="clear_both"/>
        
        <h2>Questions Step #2</h2>
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

        <br class="clear_both"/>
        <input type="submit" class="btn btn-primary" value="Submit" />
    </div>
</form>

<script>
    $(function() {
        $("#height-slider").slider({
            orientation: "vertical",
            range: "min",
            min: 5,
            max: 6.9,
            value: 6,
            step: 0.1,
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
            step: 1,
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
            step: 1,
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
            step: 1,
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
            step: 1,
            slide: function(event, ui) {
                $("#size-arm").val(ui.value);
            }
        });

        // initial value
        $("#size-arm").val($("#slider-arm").slider("value"));

        $("#radio").buttonset();


        var availableBands = [
			"Abercrombie",
			"Tommy Hilfiger",
			"Nothing"
		];
        
		$( "#app-q1" ).autocomplete({
            minLength: 1,
			source: availableBands
		}).off('blur');

        var availableSizes = [
			"Zero (0)",
			"Extra Small (XS)",
			"Small (S)",
			"Medium (M)",
			"Large (L)",
			"Extra Large (XL)"
		];

		$( "#app-q2" ).autocomplete({
            minLength: 1,
			source: availableSizes
		}).off('blur');

        var availableStyles = [
			"Slim Fit",
			"Relaxed Fit"
		];

		$( "#app-q3" ).autocomplete({
            minLength: 1,
			source: availableStyles
		}).off('blur');

        $("form:not(.filter) :input:visible:enabled:first").focus();

        var loading_text = "<span class='alert alert-info'>Loading...</span>";
        
        $("#qform").submit(function () {
            $('.btn-primary').after(loading_text);

            return true;
		});
    });
</script>

<?php require_once dirname(__FILE__) . '/footer.php'; ?>
