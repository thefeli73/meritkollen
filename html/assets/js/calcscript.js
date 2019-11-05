$(document).ready(function() {
	$('.select_programme').change(function() {
		var myText = $(".select_programme option:selected").text();
		var options = '<select class="grade" style="margin-left:20px;"><option value="0">IG<\/option><option value="10" selected>G<\/option><option value="15">VG<\/option><option value="20">MVG<\/option><\/select>';
		$('.courses').html('')
		$.each(json[myText], function(i, object) {
			var row = null;
			$.each(object, function(property, value) {
				if (property == 'Subject') {
					row = '<div><input type="text" value="' + value + '" style="width:200px;">';
					//$('.courses').append('<input type="text" value="'+value+'" style="width:200px;">');
				} else {
					row = row + '<input type="text" class="points" value="' + value + '" style="width:100px; margin-left:20px">';
					row = row + options;
					row = row + '<a class="delete_row" style="margin-left:20px;">Ta bort rad<\/a><\/div>';
					//$('.courses').append('<input type="text" class="score" value="'+value+'" style="width:100px; margin-left:20px">');
					//$('.courses').append(options);
					$('.courses').append(row);
				}
			});
		});
		$('.courses').append('');
		$('.courses').append('');
	});
	$('form').change(function() {
		raknaUtMeritvarde();
	});
	$('.add_row').on('click', function() {
		$('div.sample_row > div').clone().appendTo('form.courses');
		raknaUtMeritvarde();
	});
	$('.delete_row').on('click', function() {
		$(this).parent().slideUp(function() {
			$(this).remove();
			raknaUtMeritvarde();
		});
	});
});

var courseTitle = false;

function raknaUtMeritvarde() {
	var totalScore = 0;
	var totalPoints = 0;
	var subjectScore = 0;
	var subjectPoints = 0;
	var meritPoints = 0;
	$('form.kurser').find('div').each(function() {
		subjectScore = parseFloat($(this).find("select").val());
		subjectPoints = parseFloat($(this).find("input.points").val());
		if (isNaN(subjectPoints)) {
			subjectPoints = 0;
		}
		totalPoints = totalPoints + subjectPoints;
		totalScore = totalScore + (subjectPoints * subjectScore);
	});
	meritPoints = parseFloat($('input.meritpoint').val());
	if (isNaN(meritPoints)) {
		meritPoints = 0;
	}
	totalScore = Math.round((meritPoints + (totalScore / totalPoints)) * 100);
	totalScore = totalScore / 100;
	if (isNaN(totalScore)) {
		totalScore = 0;
	}
	$('.score_span').html('');
	if (totalPoints > 2400) {
		$('.score_span').append('<div class="demo-card-square mdl-card mdl-shadow--16dp" style="text-align:left;width:260px; height:auto;margin:50px auto 0;"><div class="mdl-card__title"><h2 class="mdl-card__title-text" style="font-size:28px;">Ditt meritvärde är ' + totalScore + '</h2></div><div class="mdl-card__supporting-text">Ditt Snittbetyg av ' + totalPoints + ' Poäng (+100 poäng för Gymnasiearbete) ger meritvärdet: ' + totalScore + '<span style="color:#d50000;text-align:unset;font-weight:unset;display:block;">Du har över 2400 poäng och måste därför välja bort ' + (totalPoints - 2400) + ' poäng</span></div><div class="mdl-card__actions mdl-card--border"><a onClick="sparaBetyg()" class="sparaBetyg mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">Spara</a><a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="/">Till Startsidan</a></div></div>');
	} else {
		$('.score_span').append('<div class="demo-card-square mdl-card mdl-shadow--16dp" style="text-align:left;width:260px; height:auto;margin:50px auto 0;"><div class="mdl-card__title"><h2 class="mdl-card__title-text" style="font-size:28px;">Ditt meritvärde är ' + totalScore + '</h2></div><div class="mdl-card__supporting-text">Ditt Snittbetyg av ' + totalPoints + ' Poäng (+100 poäng för Gymnasiearbete) ger meritvärdet: ' + totalScore + '</div><div class="mdl-card__actions mdl-card--border"><a onClick="sparaBetyg()" class="sparaBetyg mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary">Spara</a><a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="/">Till Startsidan</a></div></div>');
	}
	//title set
	if (courseTitle === false) {
		courseTitle = document.title;
	}
	var newDocTitle = courseTitle + ' - ' + totalScore;
	document.title = newDocTitle;

	var urlLink = "?";
	$('form.kurser').find('div').each(function(){
		subjectScores = parseFloat($(this).find("select").val());
		subjectName = $(this).find("input.subjectName").val();
		if (typeof subjectName !== 'undefined') {
			urlLink = urlLink + subjectName + "=" + subjectScores + "&";
		}
	});
	urlLink = urlLink + "mp=" + $('form').find('input.meritpoint').val();
	urlLink = "https://" + window.location.hostname + window.location.pathname + urlLink;
	window.history.pushState("", newDocTitle, urlLink);
}
