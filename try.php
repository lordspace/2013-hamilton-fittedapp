<?php

require_once dirname(__FILE__) . '/config.php';

$default_data = array(
    'brand' => '',
    'size' => '',
    'style' => '',
    'clothing_type' => 'shirt',
);

$errors = array();
$step = empty($_REQUEST['step']) ? 0 : intval($_REQUEST['step']);
$data = empty($_REQUEST['data']) ? array() : $_REQUEST['data'];
$data = array_map('trim', $data);
$data = array_merge($default_data, $data);

if (!empty($_POST) && $step > 0) {
    if ($step == 1) {
        foreach ($default_data as $field_name => $val) {
            if (empty($data[$field_name])) {
                $errors[] = "Invalid/empty value for $field_name";
            }
        }
    }

    if (empty($errors)) {
        $data['step'] = $step;

        if ($step == 2) {
            $data['brand'] == 'Adidas';
        }

        $_SESSION['search_data'] = $data;

        app_redirect('suggestions.php');
    }
}

require_once dirname(__FILE__) . '/header.php';

?>

<?php if (!empty($errors)) : ?>
    <div class="alert alert-error"><?php echo join("<br/>\n", $errors);?></div>
<?php endif; ?>

<form id="qform" method="POST">
    <input type="hidden" name="step" value="<?php echo $step; ?>" />
    <div class="row-fluid app_container">
        <?php if ($step == 1) : ?>
            <h2>I know my size</h2>
            <div class="app_user_question">
                <label for="app-q1">What brand is it?</label>
                <input type="text" id="app-q1" name="data[brand]" value="<?php echo $data['brand']; ?>"/>
            </div>

            <div class="app_user_question">
                <label for="app-q2">What size is it?</label>
                <input type="text" id="app-q2" name="data[size]" value="<?php echo $data['size']; ?>" />
            </div>

            <div class="app_user_question">
                <label for="app-q3">What style is it?</label>
                <input type="text" id="app-q3" name="data[style]" value="<?php echo $data['style']; ?>" />
            </div>

            <div class="app_user_question">
                <label for="q4_1">What item of clothing is it?</label>

                <div id="radio">
                    <label for="q4_1"><input type="radio" name="data[clothing_type]" value="shirt" id="q4_1"
                        <?php echo $data['clothing_type'] == 'shirt' ? 'checked="checked"' : ''; ?> /> <span>Shirt</span></label>
                    <!--<label for="q4_2"><input type="radio" name="data[clothing_type]" value="dress" id="q4_2" readonly="readonly" /> <span>Dress</span></label>
                    <label for="q4_3"><input type="radio" name="data[clothing_type]" value="tops" id="q4_3" readonly="readonly" /> <span>Tops</span></label>
                    -->
                </div>
            </div>

            <br class="clear_both" />
            <input type="submit" class="btn btn-primary" value="Submit" />
        <?php elseif ($step == 2) : ?>
            <br class="clear_both"/>
            <h2>I want to know my size by entering my dimensions (inches).</h2>
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
        <?php else : ?>
            <div class="app_user_question0 my-hero-unit">
                <h2>Do you know your size?</h2>
                <a href="try.php?step=1" class="btn btn-primary">Yes, I know my size</a>
                <a href="try.php?step=2" class="btn btn-primary">No, I want to give my measurements</a>
            </div>
        <?php endif; ?>
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

        var availableBands = [
			"Abercrombie",
			"Adidas",
			"American Apparel",
			"Banana Republic",
			"Guess",
			"Tommy Hilfiger"
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
            'Casual',
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
