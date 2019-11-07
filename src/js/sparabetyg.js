// JavaScript Document
$('.sparaBetyg').on('click', function() {
	sparaBetyg();
	console.log("lol")
});
function sparaBetyg() {
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
	$('.link_span').remove();

	$('.score_span').append('<span class="link_span"><div class="demo-card-square mdl-card mdl-shadow--16dp" style="text-align:left;width:260px; height:auto;margin:50px auto 0;"><div class="mdl-card__title"><h2 class="mdl-card__title-text" style="font-size:28px;">Spara</h2></div><div class="mdl-card__supporting-text">Spara Länken som bokmärke för att kunna återvända till dina betyg</div><div class="mdl-card__actions mdl-card--border" style="padding: 4px 16px 8px;"><div style="padding:0; width:125px;" class="mdl-textfield mdl-js-textfield"><input readonly style="margin: 0 0 8px 0; border-bottom: 1px solid #26a69a; box-shadow: 0 1px 0 0 #26a69a;" class="mdl-textfield__input betygLink" id="betygLink" type="text" value="'+ urlLink +'" onClick="betygSelect()"><label class="mdl-textfield__label" for="betygLink"></label></div><i class="material-icons mdl-button--primary" onClick="copyLink()" style="margin:12px 16px; cursor: pointer; position: absolute; right:0;">content_copy</i></div></div></span>');
	betygSelect();
}
function betygSelect() {
	$('.betygLink').select();
}
function copyLink() {
	betygSelect();
	document.execCommand("Copy");

	var snackbarContainer = document.querySelector('#linkCopyToast');
	var data = {message: 'Länk kopierad till urklipp'};
	snackbarContainer.MaterialSnackbar.showSnackbar(data);
}

function laddaBetyg() {
	var mp = getQueryVariable('mp');
	if (!(isNaN(mp)) && mp) {
		$('form').find('input.meritpoint').val(mp);
	}
	$('form.kurser').find('div').each(function(){
		var grade;
		var val;
		subjectName = $(this).find("input.subjectName").val();


		if (typeof subjectName !== 'undefined') {
			subjectName = encodeURI(subjectName);

			if (getQueryVariable(subjectName) == 20) {
				grade = "A";
				val = 20;
			} else if (getQueryVariable(subjectName) == '17.5') {
				grade = "B";
				val = 17.5;
			} else if (getQueryVariable(subjectName) == "15") {
				grade = "C";
				val = 15;
			} else if (getQueryVariable(subjectName) == '12.5') {
				grade = "D";
				val = 12.5;
			} else if (getQueryVariable(subjectName) == '10') {
				grade = "E";
				val = 10;
			} else if (getQueryVariable(subjectName) == '0') {
				grade = "F";
				val = 0;
			}
			if (getQueryVariable(subjectName) !== false) {
				$(this).find('.select-dropdown').val(grade);
				$(this).find('.grade').val(val);
			}
		}
	});
	raknaUtMeritvarde();
}

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
