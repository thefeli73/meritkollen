<?php
echo "

<div class='demo-card-square mdl-card mdl-shadow--16dp' style='text-align:left;width:260px;height:auto;margin: 25px auto; min-height: 0;'>
    <div class='mdl-card__title'>
        <form>
		<div style='display:grid;'>
			<label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-1'>
				<input type='radio' id='option-1' class='mdl-radio__button' name='options' value='1'>
				<span class='mdl-radio__label'>A</span>
			</label>
			<label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-2'>
				<input type='radio' id='option-2' class='mdl-radio__button' name='options' value='1'>
				<span class='mdl-radio__label'>B</span>
			</label>
			<label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-3'>
				<input type='radio' id='option-3' class='mdl-radio__button' name='options' value='1' checked>
				<span class='mdl-radio__label'>C</span>
			</label>
			<label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-4'>
				<input type='radio' id='option-4' class='mdl-radio__button' name='options' value='1'>
				<span class='mdl-radio__label'>D</span>
			</label>
			<label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-5'>
				<input type='radio' id='option-5' class='mdl-radio__button' name='options' value='1'>
				<span class='mdl-radio__label'>E</span>
			</label>
			<label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='option-6'>
				<input type='radio' id='option-6' class='mdl-radio__button' name='options' value='1'>
				<span class='mdl-radio__label'>F</span>
			</label>
		</div>
        <a class='changeall mdl-button mdl-js-button mdl-button--accent mdl-js-ripple-effect' style='position: absolute;top: 50%;transform: translate(40%,-50%);width: 160px;height: auto;'>Tillämpa på alla kurser</a>
    </div>
</div>
<div id='linkCopyToast' class='mdl-js-snackbar mdl-snackbar'>
  <div class='mdl-snackbar__text'></div>
  <button class='mdl-snackbar__action' type='button'></button>
</div>
";