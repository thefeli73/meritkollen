$('.changeall').on('click', function(){
	var grade;
	var val;
	if (document.getElementById('option-1').checked) {
		grade = "A";
		val = 20;
	} else if (document.getElementById('option-2').checked) {
		grade = "B";
		val = 17.5;
	} else if (document.getElementById('option-3').checked) {
		grade = "C";
		val = 15;
	} else if (document.getElementById('option-4').checked) {
		grade = "D";
		val = 12.5;
	} else if (document.getElementById('option-5').checked) {
		grade = "E";
		val = 10;
	} else if (document.getElementById('option-6').checked) {
		grade = "F";
		val = 0;
	}

	$('form.kurser').find('div').each(function(){
		$('.select-dropdown').val(grade);
		$('.grade').val(val);
	});
	raknaUtMeritvarde();
});
