const pluginStoreUrl		 	= "https://wordpress.org/support/plugin/textoptimizer/reviews/";
const textOptimizerUrl 	 	 	= "https://api.textoptimizer.com/api/";
const api_url              	 	= 'https://api.textoptimizer.com/chrome_plugin2';
const api_url_fr           	 	= 'https://api.1.fr/chrome_plugin2';

const videoUrl_en			 	= "https://textoptimizer.com/anim/en3_900x557.mp4";
const videoUrl_fr			 	= "https://textoptimizer.com/anim/fr3_900x557.mp4";

const ipapi_key				 	= "af232ec066c78ba3e786b5c179b62bd8f9244f48";

const free_analyze_limit	 	= 10;
const free_analyze_limit_max	= 20;
const ProButtonVisibleLimit  	= 12;
const api_call_dealy_second	 	= 4;
const cookie_expire_days	 	= 7;

var api_call_dealy_timer	 	= null;
var request              	 	= null;
var callTimer            	 	= null;
var callTime             	 	= 0;
var setting_language         	= "en";
var user_location				= null;
var setting_scene            	= "";
var signin_scene             	= "home";
var userLogin                	= false;
var userEmailAddress         	= "";
var unlimited_access         	= false;
var api_key					 	= "";
var alert_message_available  	= true;
var previous_call_time		 	= 0;
var analyze_text			 	= "";
var selected_searchengine	 	= "google";
var selected_query			 	= "";
var callTimeLimit			 	= 20;
var longitude 				 	= -77.0163;
var latitude 				 	= 38.9047;
var plugin_start			 	= false;
var request_api_action		 	= "default";
var methodOfGettingText		 	= "";
var addcontent_count		 	= 0;
var clickcopy_validated		 	= false;
var selection_validated		 	= false;
var secure_validated		 	= false;
var recommend_validated		 	= false;
var domain					 	= "";

var freeAnalyzeInfo 		 	= {
	date: null,
	count: 0
};

var last_api_answer			 	= null;
var nbr_optimization_done		= 0;

const free_optimize_query		= [
	"bitcoin",
	"solar panel"
];

let $ = jQuery;

/** Stop all actions in progress and display homepage **/
function initHomepage() {
	if(request != null)
		request.abort();
	clearTimeout(api_call_dealy_timer);
	clearInterval(callTimer);
	jQuery(".scene").removeClass("active");
	jQuery("#home-scene").addClass("active");
	hide_loading();
}

/** Display or hide the pro buttons by checking. **/
function checkProButtonsVisibility() {
	if(userLogin || (addcontent_count >= ProButtonVisibleLimit))
		$(".optimize_text").css("display", "inline-block");
	else
		$(".optimize_text").css("display", "none");
}

/** Save the environment variables of plugin on the chrome storage **/
function saveEnvironment() {
	var environmentSetting = {
		'addcontent_count': addcontent_count,
		'clickcopy_validated': clickcopy_validated,
		'selection_validated': selection_validated,
		'secure_validated': secure_validated,
		'recommend_validated': recommend_validated,
		'setting_language': setting_language,
		'user_location': user_location,
		'longitude': longitude,
		'latitude': latitude,
		'nbr_optimization_done': nbr_optimization_done
	};
	localStorage.setItem("environmentSetting", JSON.stringify(environmentSetting));
}

/** Save today's free analyze information on the chrome storage. **/
function saveFreeAnalyzeInfo() {
	localStorage.setItem("textOptimizerFreeAnalyzeInfo", JSON.stringify(freeAnalyzeInfo));
}

function goNextStep(tabContent, method) {
	analyze_text = tabContent.substring(0, 2000000);
	methodOfGettingText = method;
	contentShow();
}

/** Change the language of text according to the setting language **/
function changeLanguage() {
	var video1 = document.getElementById("video-popup-video");
	video1.pause();
	var video2 = document.getElementById("big-limitation-scene-body-video");
	video2.pause();
	$("lang").hide();
	if(setting_language == "fr") {
		$("lang.l_french").show();
		$(".logo").attr("src", image_path + "/logo_1fr.png");
		$(".logo").addClass("french");
		$(".scene-header").addClass("french");
		$('#searchterms-scene input[type="text"]').attr("placeholder","Entrez votre recherche");
		$("a.proof-of-concept").attr("href","https://1.fr/h3");
		$("#video-popup-video source").attr("src", videoUrl_fr);
		$("#big-limitation-scene-body-video source").attr("src", videoUrl_fr);
		$("a.gosite").attr("href","https://1.fr");
		$("a.terms").attr("href","https://1.fr/terms");
		$("a.policy").attr("href","https://1.fr/privacy");
		$("#signup-profile").html(`<option value="copywriter">Rédacteur</option>
									<option value="seo">Spécialiste SEO</option>
									<option value="website owner">Propriétaire du site Web</option>
									<option value="marketing professional">Professionnel du marketing</option>
									<option value="content strategist">Stratégiste de contenu</option>
									<option value="Student">Étudiant</option>
									<option value="other">Autre</option>`);
		locations.sort((a,b) => (a.fr > b.fr) ? 1 : ((b.fr > a.fr) ? -1 : 0));
	}
	else {
		$("lang.l_default").show();
		$(".logo").attr("src", image_path + "/textoptimizer_logo.png");
		$(".logo").removeClass("french");
		$(".scene-header").removeClass("french");
		$('#searchterms-scene input[type="text"]').attr("placeholder","Fill in your search query");
		$("a.proof-of-concept").attr("href","https://textoptimizer.com/h3");
		$("#video-popup-video source").attr("src", videoUrl_en);
		$("#big-limitation-scene-body-video source").attr("src", videoUrl_en);
		$("a.gosite").attr("href","https://textoptimizer.com");
		$("a.terms").attr("href","https://textoptimizer.com/terms");
		$("a.policy").attr("href","https://textoptimizer.com/privacy");
		$("#signup-profile").html(`<option value="copywriter">Copywriter</option>
									<option value="seo">Seo expert</option>
									<option value="website owner">Website Owner</option>
									<option value="marketing professional">Marketing Professional</option>
									<option value="content strategist">Content Strategist</option>
									<option value="Student">Student</option>
									<option value="other">Other</option>`);
		locations.sort((a,b) => (a.en > b.en) ? 1 : ((b.en > a.en) ? -1 : 0));
	}
	$('#signup-profile').niceSelect('update');

	var location_html = '';
	for(x of locations) {
		location_html += `<option value="${x.en}">${setting_language == "fr" ? x.fr : x.en}</option>`;
	}
	$("#setting-location").html(location_html).niceSelect('update');

	video1.load();
	video1.play();
	video2.load();
	video2.play();
}

/** Change the name of sign buttons according to the setting language and sign in / out**/
function updateSigninButton()
{
	if(userLogin) {
		$(".signin").removeClass("signin").addClass("signout");
	}
	else {
		$(".signout").removeClass("signout").addClass("signin");
	}
	updateHeaderMembership();
}

/** Call updateContent according to the result of checking analyze limit **/
function contentShow() {
	if(userLogin && unlimited_access) {
		if(request_api_action == "default")
			updateContent();
		else if(request_api_action == "optimize")
			doOptimize();
		return;
	}

	if(request_api_action == "optimize" && free_optimize_query.includes(selected_query)) {
		doOptimize();
		return;
	}

	var today = new Date();
	var date = today.getDate();		
	var limited = false;
	
	if(freeAnalyzeInfo.date == date) {
		if( !userLogin && (freeAnalyzeInfo.count == free_analyze_limit)) {
			limited = true;
			jQuery(".scene").removeClass("active");
			jQuery("#small-limitation-scene .limitation-warning").show();

			if(setting_language == "fr") {
				jQuery("#small-limitation-scene .limitation-warning .message .message-content span").html(`Fin des analyses gratuites pour aujourd'hui.`);
				jQuery("#small-limitation-scene .limitation-warning .message .message-content strong").html(`Solution: revenez demain ou inscrivez-vous pour 10 analyses gratuites supplémentaires.`);
			}
			else {
				jQuery("#small-limitation-scene .limitation-warning .message .message-content span").html(`No more free analysis for today.`);
				jQuery("#small-limitation-scene .limitation-warning .message .message-content strong").html(`Solution: come back tomorrow or sign-up for 10 more free analysis.`);
			}

			jQuery("#small-limitation-scene").addClass("active");
			signin_scene = "home";
		}
		if( !userLogin && (freeAnalyzeInfo.count > free_analyze_limit)) {
			limited = true;
			jQuery(".scene").removeClass("active");
			jQuery("#small-limitation-scene .limitation-warning").show();
			
			if(setting_language == "fr") {
				jQuery("#small-limitation-scene .limitation-warning .message .message-content span").html(`Fin des analyses gratuites pour aujourd'hui.`);
				jQuery("#small-limitation-scene .limitation-warning .message .message-content strong").html(`Solution: revenez demain ou souscrivez un abonnement PRO.`);
			}
			else {
				jQuery("#small-limitation-scene .limitation-warning .message .message-content span").html(`No more free analysis for today.`);
				jQuery("#small-limitation-scene .limitation-warning .message .message-content strong").html(`Solution: come back tomorrow or subscribe to PRO.`);
			}
			
			jQuery("#small-limitation-scene").addClass("active");
			signin_scene = "home";
		}
		else if( userLogin && (freeAnalyzeInfo.count >= free_analyze_limit_max)) {
			limited = true;
			jQuery(".scene").removeClass("active");
			jQuery("#big-limitation-scene").addClass("active");
		}
	}
	
	if(limited) {
		hide_loading();
	}
	else {
		updateContent();
	}
}

/** Update analyze content **/
function updateContent() {
	var current_time = new Date().getTime() / 1000;
	var settimeout_value = api_call_dealy_second + previous_call_time - current_time;
	if(settimeout_value < 0)
		settimeout_value = 0;
	api_call_dealy_timer = setTimeout( function(){ 
		previous_call_time = new Date().getTime() / 1000;
		callTime = 0;
		callTimer = setInterval(callMonitor, 1000);
		
		var data = {
			lang: setting_language, 
			engine: selected_searchengine, 
			content: analyze_text, 
			longitude: longitude, 
			latitude: latitude, 
			domain: domain
		};
		if(api_key != "")
			data.api_key = api_key;
		data[methodOfGettingText] = 1;

		request = jQuery.ajax({
		    url: textoptimizer_ajax_url,
		    data: {
		    	action: "textoptimizer_api_call",
		    	url: setting_language == "fr" ? api_url_fr : api_url,
		    	method: "POST",
		    	curlFields: JSON.stringify(data)
		    },
		    type: 'POST',
		    dataType: 'json',
			success: function(result) {
				last_api_answer = result;
				clearInterval(callTimer);
				jQuery(".scene").removeClass("active");
				if(result.html == "") {
					$("#upload-text-scene .visible-widget").hide();
					$("#upload-text-scene .scene-header .scene-header-btns").show();
					var error_message = result.error_message_to_display;
					if(result.error_message_with_textarea_to_display != "") {
						$("#upload-text-scene .paste-box-widget").show();
						$("#upload-text-scene .selection_help_video").show();
						$("#upload-text-scene .scene-header .scene-header-btns").hide();
						$("#upload-text-content").val("");
						error_message = result.error_message_with_textarea_to_display;
					}
					else if(result.error_message_with_retry_to_display != "") {
						$("#upload-text-scene .retry-widget").show();
						error_message = result.error_message_with_retry_to_display;
					}
					else if(result.invalid_language) {
						$("#upload-text-scene .setting-widget").show();
					}
					$("#upload-text-scene .error-message").html(error_message);
					$("#upload-text-scene .error-message").show();
					$("#upload-text-scene").addClass("active");
				}
				else {
					if(!userLogin || !unlimited_access) {
						var today = new Date();
						var date = today.getDate();		
						if(freeAnalyzeInfo.date != date) {
							freeAnalyzeInfo.date = date;
							freeAnalyzeInfo.count = 1;	
						}
						else
							freeAnalyzeInfo.count = freeAnalyzeInfo.count + 1;
						saveFreeAnalyzeInfo();
					}
					addcontent_count++;
					saveEnvironment();

					jQuery('#main-wrapper').html(result.html);
					
					jQuery('#optimizer-widget').hide();
					jQuery('#optimize-button').css("display", "flex");
					checkProButtonsVisibility();

					if(!clickcopy_validated && (addcontent_count >= 1) && (addcontent_count <= 4))
						$("#clickcopy-tip").show();
					else
						$("#clickcopy-tip").hide();

					if(!selection_validated && (addcontent_count >= 5) && (addcontent_count <= 8))
						$("#selection-tip").show();
					else
						$("#selection-tip").hide();

					if(!secure_validated && (addcontent_count >= 10) && (addcontent_count <= 12))
						$("#secure-tip").show();
					else
						$("#secure-tip").hide();

					if(!recommend_validated && (addcontent_count >= 30) && (addcontent_count <= 35))
						$("#recommend-tip").show();
					else
						$("#recommend-tip").hide();

					$("#rate-tip").hide();

					$("#content-scene .scene-header-btns > *").show();
					if((addcontent_count >= 10) || (userLogin)) {
						$("#content-scene .scene-header-btns .btn").hide();
						$("#content-scene #loadtext-widget").hide();
					}
					else {
						$("#content-scene .scene-header-btns .btn-shortcut").hide();
						$("#content-scene #loadtext-widget").show();
					}

					jQuery("#content-scene").addClass("active");

					var left_analyze_count = 0;
					if(!userLogin && (free_analyze_limit - freeAnalyzeInfo.count <= 5))
						left_analyze_count = free_analyze_limit - freeAnalyzeInfo.count;
					else if(userLogin && !unlimited_access && (free_analyze_limit_max - freeAnalyzeInfo.count <= 5))
						left_analyze_count = free_analyze_limit_max - freeAnalyzeInfo.count;
					if(left_analyze_count != 0) {
						if(setting_language == "fr") {
							if(left_analyze_count == 1)
								alert_message("success", "Vous avez encore 1 analyse gratuite.");
							else
								alert_message("success", "Vous avez encore " + left_analyze_count + " analyses gratuites.");
						}
						else {	
							if(left_analyze_count == 1)
								alert_message("success", "You have 1 free use remaining for today.");
							else
								alert_message("success", "You have " + left_analyze_count + " free uses remaining for today.");
						}
					}
				}
				if(methodOfGettingText == "content_come_from_user_selection")
					$(".notificationOnSelection").show();
				else
					$(".notificationOnSelection").hide();
				hide_loading();
			}
		});
	}, settimeout_value * 1000);
}

/** Set one of 3 rocket images as background. **/
function setRandomBackground(element) {
	var rocket_num = Math.floor((Math.random() * 3) + 1);
	$(element).css("background-image", `url(${image_path}/rocket${rocket_num}.jpg)`);
}

/** Monitor if api call time takes 10 seconds **/
function callMonitor() {
	callTime ++;
	if(callTime == callTimeLimit) {
		request.abort();
		jQuery(".scene").removeClass("active");
		jQuery("#main-scene .main-scene-body-widget").removeClass("active");
		jQuery("#main-scene #main-scene-timeout").addClass("active");
		jQuery("#main-scene").addClass("active");
		hide_loading();
		clearInterval(callTimer);
	}	
}

/** Load more words **/
function accordion_function() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("dispmore_cnt");
    var btnText = document.getElementById("dispmore_btn");

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Display more";
        moreText.style.display = "none";
        document.getElementById("dispmore_btn").classList.remove("active");
    } else {
        dots.style.display = "none";
        btnText.innerHTML = "Display less";
        moreText.style.display = "inline";
        document.getElementById("dispmore_btn").classList.add("active");
    }
}

/** Show message **/
function alert_message(type, content) {
	if(alert_message_available) {
		alert_message_available = false;
		setTimeout( function() { 
			alert_message_available = true;
		}, 2000);
		$("#message-template .message." + type + " span").text(content);
		$("#message-template .message." + type).fadeIn("fast").delay(2000).fadeOut("fast");
	}
}

/** Validate signin email address format **/
function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

/** Create & Remove Cookies **/
function textoptimizer_cookies(cookiesInfo, cookieName, action) {
	if(action == 'create') {
		setCookie(cookieName, cookiesInfo, cookie_expire_days);
	}
	if(action == 'remove') {
		eraseCookie(cookieName);
	}
}

/** Cookies Callback **/
function textoptimizer_cookies_callback(cookesDatas){return cookesDatas;}

function textoptimizer_build_query(obj) {
	var Result= '';
	if(typeof(obj)== 'object') {
		jQuery.each(obj, function(key, value) {
			Result+= (Result) ? '&' : '';
			if(typeof(value)== 'object' && value.length) {
				for(var i=0; i<value.length; i++) {
					Result+= [key+'[]', encodeURIComponent(value[i])].join('=');
				}
			} else {
				Result+= [key, encodeURIComponent(value)].join('=');
			}
		});
	}
	return Result;
}

function textoptimizer_get_api_url(type) {
	var currentLanguage = setting_language;
	if(currentLanguage=='fr') {
		if(type=='api') {
			return 'https://api.1.fr/api/';
		} else if(type=='suggestion') {
			return "https://1.fr/m?q=";
		} else if(type=='buymore') {
			return 'https://1.fr/s/order?api_key=';
		} else if(type=='report') {
			return 'https://1.fr/h';
		}
	} else { 
		if(type=='api') {
			return 'https://api.textoptimizer.com/api/';
		} else if(type=='suggestion') {
			return "https://textoptimizer.com/m?q=";
		} else if(type=='buymore') {
			return 'https://textoptimizer.com/s/order?api_key=';
		} else if(type=='report') {
			return 'https://textoptimizer.com/h';
		}
	}
}

/** Check User is Login **/
function textoptimizer_check_user_login() {
	var textOptimizerUserInfo = getCookie("textOptimizerUserInfo");
    if(textOptimizerUserInfo == null) {
		userLogin = false;
		userEmailAddress = "";
		unlimited_access = false;
		api_key = "";
	}
	else {
		userLogin = true;
		var userInfo = JSON.parse(textOptimizerUserInfo);
		userEmailAddress = userInfo.userEmailAddress;
		unlimited_access = userInfo.unlimited_access;
		api_key = userInfo.api_key;
	}
	checkProButtonsVisibility();
	updateSigninButton();
}

function updateHeaderMembership() {
	if(unlimited_access && nbr_optimization_done > 30) {
		$("#nbr_optimization").text(nbr_optimization_done);
		$(".premium_member").removeClass("invisible");
	} else {
		$(".premium_member").addClass("invisible");
	}
}

/** Monitor if cookie containing credential is expired. **/
function userLoginMonitor() {
	setInterval(function(){
		textoptimizer_check_user_login();
	}, 1000 * 60 * 5);
}

// Show loading screen
function show_loading() {
	jQuery(".scene").removeClass("active");
	$(".loading-screen").css('display', 'block');
	var girl_num = Math.floor((Math.random() * 3) + 1);
	$(".loading-screen .loading-girl img").attr("src", `${image_path}/loading_${girl_num}.png`);
	$(".loading-screen .loading-girl").fadeIn(1000);
	$(".loading-screen .loading-gif img").attr("src", "").attr("src", `${image_path}/progress_bar.gif`);
	$(".loading-screen .loading-gif").fadeIn(2000);
}

// Hide loading screen
function hide_loading() {
	$(".loading-screen").css('display', 'none');
	$(".loading-screen .loading-girl").hide();
	$(".loading-screen .loading-gif").hide();
}

// Get suggestions
function startAnalyze() {
	show_loading();
	domain = window.location.hostname;
	methodOfGettingText = "content_come_from_user_selection";
	var t = performance.now();
	analyze_text = window.getSelection().toString();
	if(analyze_text.replace(/\s/g, '').length <= 1) {
		methodOfGettingText = "content_come_from_page";
		analyze_text = document.documentElement.outerHTML;
		$('textarea, input').filter(":visible").each(function(){
			analyze_text += $(this).val() + '  ';
		})
	}
	analyze_text = "(" + (performance.now() - t) + ")" + analyze_text;
    analyze_text = "comefromouterhtml:" + analyze_text.substring(0, 2000000);
	contentShow();	
}

/** Do optimization **/
function startOptimize() {
	request_api_action = "optimize";
	startAnalyze();
}

// Optimize text by calling API with added parameters of engine and query
function doOptimize() {
	callTime = 0;
	callTimer = setInterval(callMonitor, 1000);
	
	var data = {
		lang: setting_language, 
		content: analyze_text, 
		engine: selected_searchengine, 
		query: selected_query, 
		longitude: longitude, 
		latitude: latitude, 
		domain: domain
	};
	if(api_key != "")
		data.api_key = api_key;
	data[methodOfGettingText] = 1;

	request = jQuery.ajax({
	    url: textoptimizer_ajax_url,
	    data: {
	    	action: "textoptimizer_api_call",
	    	url: setting_language == "fr" ? api_url_fr : api_url,
	    	method: "POST",
	    	curlFields: JSON.stringify(data)
	    },
	    type: 'POST',
	    dataType: 'json',
		success: function(result) {
			last_api_answer = result;
			clearInterval(callTimer);
			jQuery(".scene").removeClass("active");
			if(result.html == "") {
				$("#upload-text-scene .visible-widget").hide();
				$("#upload-text-scene .scene-header .scene-header-btns").show();
				var error_message = result.error_message_to_display;
				if(result.error_message_with_textarea_to_display != "") {
					$("#upload-text-scene .paste-box-widget").show();
					$("#upload-text-scene .selection_help_video").show();
					$("#upload-text-scene .scene-header .scene-header-btns").hide();
					$("#upload-text-content").val("");
					error_message = result.error_message_with_textarea_to_display;
				}
				else if(result.error_message_with_retry_to_display != "") {
					$("#upload-text-scene .retry-widget").show();
					error_message = result.error_message_with_retry_to_display;
				}
				else if(result.invalid_language) {
					$("#upload-text-scene .setting-widget").show();
				}
				$("#upload-text-scene .error-message").html(error_message);
				$("#upload-text-scene .error-message").show();
				$("#upload-text-scene").addClass("active");
			}
			else {
				addcontent_count++;
				nbr_optimization_done = result.nbr_optimization_done;
				saveEnvironment();
				updateHeaderMembership();

				jQuery('#main-wrapper').html(result.html);
				jQuery('#optimizer-widget').show();
				jQuery('#optimize-button').css("display", "none");

				if(!clickcopy_validated && (addcontent_count >= 1) && (addcontent_count <= 4))
					$("#clickcopy-tip").show();
				else
					$("#clickcopy-tip").hide();

				if(!selection_validated && (addcontent_count >= 5) && (addcontent_count <= 8))
					$("#selection-tip").show();
				else
					$("#selection-tip").hide();

				if(!secure_validated && (addcontent_count >= 10) && (addcontent_count <= 12))
					$("#secure-tip").show();
				else
					$("#secure-tip").hide();

				if(!recommend_validated && (addcontent_count >= 30) && (addcontent_count <= 35))
					$("#recommend-tip").show();
				else
					$("#recommend-tip").hide();

				$("#rate-tip").hide();

				$("#content-scene .scene-header-btns .btn").hide();
				$("#content-scene .scene-header-btns .btn-shortcut").show();
				$("#content-scene #loadtext-widget").hide();

				$(".optimize-query").val(selected_query);
				
				jQuery("#content-scene").addClass("active");
			}
			if(methodOfGettingText == "content_come_from_user_selection")
				$(".notificationOnSelection").show();
			else
				$(".notificationOnSelection").hide();
			hide_loading();
		}
	});
}

/** Clicking refresh button on the content scene. **/
function refreshPage() {
	if(request_api_action == "optimize")
		startOptimize();
	else
		startAnalyze();	
}

/** Copy the keyword or sentence on the clipboard **/
function copy_clipboard(copy_item, text) {
	var textArea = document.createElement("textarea");
	textArea.value = text;
	textArea.setAttribute('readonly', '');
	textArea.style.position = 'absolute';
	textArea.style.left = '-9999px';
	document.body.appendChild(textArea);
	textArea.select();
	var copied = document.execCommand('copy');
	document.body.removeChild(textArea);

	if(copied) {
		copy_item.attr("data-balloon", setting_language == "fr" ? "Copié" : "Copied");
		copy_item.addClass("animated");		
		copy_item.addClass("bounceIn");		
		setTimeout(function(){
			copy_item.removeClass("bounceIn");
			copy_item.removeClass("animated");
			copy_item.removeAttr("data-balloon");
		},2000);
	}
}

function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name+'=; Max-Age=-99999999; path=/;';  
}

// Show processing screen
function show_processing() {
	$(".processing-screen").css('display', 'block');
}

// Hide processing screen
function hide_processing() {
	$(".processing-screen").css('display', 'none');
}

jQuery(document).ready(function(){
	
    $('.nice-select').niceSelect();
    userLoginMonitor();

    var result = localStorage.getItem("textOptimizerFreeAnalyzeInfo");
    if(result != null) {
    	var textOptimizerFreeAnalyzeInfo = JSON.parse(result);
    	freeAnalyzeInfo.date = textOptimizerFreeAnalyzeInfo.date;
		freeAnalyzeInfo.count = textOptimizerFreeAnalyzeInfo.count;
    }

    var result = localStorage.getItem("environmentSetting");
    if(result != null) {
    	var environmentSetting = JSON.parse(result);
    	setting_language = environmentSetting.setting_language;
    	user_location = environmentSetting.user_location;
		longitude = environmentSetting.longitude;
		latitude = environmentSetting.latitude;
		clickcopy_validated = environmentSetting.clickcopy_validated;
		selection_validated = environmentSetting.selection_validated;
		secure_validated = environmentSetting.secure_validated;
		recommend_validated = environmentSetting.recommend_validated;
		addcontent_count = environmentSetting.addcontent_count;
		nbr_optimization_done = environmentSetting.nbr_optimization_done;
		textoptimizer_check_user_login();
		changeLanguage();
    }
    else
        plugin_start = true;
    
	if(!plugin_start) {
		jQuery("#home-scene").addClass("active");
	} 
	else {
		$.getJSON('https://ipapi.co/json/?key=' + ipapi_key, function(data) {
		  	var myip = data["ip"].split(".");
		    var prefix = myip[0] + "." + myip[1];
		    var lang = french_ip_group.indexOf(prefix) == -1 ? "en" : "fr";
		    jQuery("#configuration-language").val(lang);
			jQuery("#first-scene").addClass("active");
		})
		.fail(function() {
		    jQuery("#first-scene").addClass("active");
	  	});
	}

	$('#textoptimizer-exec .btn').on('click', function() {
		$("#textoptimizer-widget").animate({
	    	right: '0px'
	    });
	});

	$('#close-textoptimizer-widget').on('click', function() {
		$("#textoptimizer-widget").animate({
	    	right: '-480px'
	    });
	});

	$('#upload-text-content').on('click', function() {
		$('.kwrd_pop').hide();
	});

	$('.terms-policy > lang').on('click', function(){
		console.log("Current Language:", setting_language);
		console.log("Longitude:", longitude);
		console.log("Latitude:", latitude);
		console.log("User Login:", userLogin);
		console.log("User Email Address:", userEmailAddress);
		console.log("Unlimited Access:", unlimited_access);
		console.log("Total count of API call since Plugin Start:", addcontent_count);
		console.log("Last API Answer:", last_api_answer);
	});

	$('.upload-text').on('click', function() {
		jQuery(".scene").removeClass("active");
		if(request_api_action == "optimize") {
			$("#upload-text-optimize-box").show();
			$("#upload-text-optimize").show();
			$("#upload-text-getcontent").hide();
		}
		else {
			$("#upload-text-optimize-box").hide();
			$("#upload-text-optimize").hide();	
			$("#upload-text-getcontent").show();
		}
		$("#upload-text-scene .visible-widget").hide();
		$("#upload-text-scene .paste-box-widget").show();
		$("#upload-text-content").val("");
		$("#upload-text-scene").addClass("active");
    })

    $('.upload-text-analyze').on('click', function() {
    	var upload_content = $("#upload-text-content").val();
    	domain = "";

		if(request_api_action == "default") {
			show_loading();
			goNextStep("comefromupload:(0.00)" + upload_content, "content_come_from_user_paste");
		} else {
			var query = $("#upload-text-optimize-box .optimize-query").val();

			if(userLogin && unlimited_access || free_optimize_query.includes(query)) {
	 			selected_query = query;
	 			show_loading();
				goNextStep("comefromupload:(0.00)" + upload_content, "content_come_from_user_paste");
	 		} else {
	 			if(!userLogin) {
		 			jQuery(".scene").removeClass("active");
		 			jQuery("#small-limitation-scene .limitation-warning").hide();
					jQuery("#small-limitation-scene").addClass("active");
					signin_scene = "upload-text";
					return;
		 		}
		 		if(!unlimited_access) {
		 			$('.video-popup').show();
		 			return;
		 		}
	 		}
		}
    })

	$('.close_popup_btn').on('click', function() {
      	$('.kwrd_pop').hide();
    })

	$(document).on("keydown", function(e) {
        e = e || window.event;
        if (e.ctrlKey) {
            var c = e.which || e.keyCode;
            if (c == 82) {
                e.preventDefault();
                e.stopPropagation();
                if(jQuery("#content-scene").hasClass("active"))
            		refreshPage();
            }
        }
    });

	$("#configuration-save").on("click", function(e) {
		setting_language = $("#configuration-language").val();
		changeLanguage();
		saveEnvironment();
		jQuery(".scene").removeClass("active");
		jQuery("#home-scene").addClass("active");
	});

	$(".clickcopy-validate").on("click", function(e) {
		clickcopy_validated = true;
		saveEnvironment();
		$("#clickcopy-tip").fadeOut("slow");
	});

	$(".selection-validate").on("click", function(e) {
		selection_validated = true;
		saveEnvironment();
		$("#selection-tip").fadeOut("slow");
	});

	$(".secure-validate").on("click", function(e) {
		secure_validated = true;
		saveEnvironment();
		$("#secure-tip").fadeOut("slow");
	});

	$(".recommend-no").on("click", function(e) {
		recommend_validated = true;
		saveEnvironment();
		$("#recommend-tip").fadeOut("slow");
	});

	$(".recommend-yes").on("click", function(e) {
		$("#recommend-tip").fadeOut("slow");
		$("#rate-tip").fadeIn("fast");
	});

	$(".rate-no").on("click", function(e) {
		recommend_validated = true;
		saveEnvironment();
		$("#rate-tip").fadeOut("slow");
	});

	$(".rate-yes").on("click", function(e) {
		recommend_validated = true;
		saveEnvironment();
		$("#rate-tip").fadeOut("slow");
		var review_win = window.open(pluginStoreUrl, '_blank');
  		review_win.focus();
	});

	$(".gohome").on("click", function(e) {
		jQuery(".scene").removeClass("active");
		jQuery("#home-scene").addClass("active");
	});

	$(".refresh").on("click", function(e) {
		refreshPage();
	});

	$(".analyze").on("click", function(e) {
		request_api_action = "default";
		startAnalyze();
	});

	$('body').on('click', '.btn_explore_popup', function(e) {
		e.preventDefault();
		$('#explore_popup_content').html(`<div class="text-center pt60 pb60"><img src="${image_path}/loading.gif"></div>`);
        $('.explore_popup').show();
        jQuery.ajax({
		    url: textoptimizer_ajax_url,
		    data: {
		    	action: "textoptimizer_api_call",
		    	url: $(this).attr("href"),
		    	method: "GET",
		    	accept: "*/*;q=0.5, text/javascript, application/javascript, application/ecmascript, application/x-ecmascript",
		    	curlFields: JSON.stringify({})
		    },
		    type: "POST",
		    success: function(result) {
		    	if(typeof result.error == "undefined") {
		    		eval(result);
			    	$('.right_subkey').hide();
	            	$('#sentence_popup_words').val($('#center_keyword').text());
		    	}
			}
		});
    })

    $('body').on('click', '.textoptimizer_popup', function(e) {
        if ($(e.target).hasClass('textoptimizer_popup')) {
            $(this).hide();
        }
    })

    $('body').on('click', '.close_popup_btn', function() {
    	$(this).removeAttr("href");
        $('.textoptimizer_popup').hide();
    })

	$('body').on('click', '#dispmore_btn', function() {
		accordion_function();
    })	

	$('body').on('click', '.setting', function() {
		setting_scene = $(this).attr("scene");
		jQuery(".scene").removeClass("active");
		
		if(userLogin) {
			$("#setting-scene .location-widget").show();
		}
		else {
			$("#setting-scene .location-widget").hide();
		}
		
		$("#setting-language").val(setting_language).niceSelect('update');
		if(user_location) {
			$("#setting-location").val(user_location.en).niceSelect('update');
		}
		
		jQuery("#setting-scene").addClass("active");
    })

	$('body').on('click', '#setting-save', function() {
		if(userLogin) {
			user_location = locations.find(x=>x.en == $("#setting-location").val());
			longitude = user_location.lng;
			latitude = user_location.lat;
		}

		var language = $("#setting-language").val();
		if(language != setting_language) {
			setting_language = language;
			changeLanguage();
		}

		jQuery(".scene").removeClass("active");
		jQuery("#home-scene").addClass("active");

		if(setting_language == "fr")
			alert_message("success", "Enregistré");
		else if (setting_language == "en")
			alert_message("success", "Saved");
		else
			alert_message("success", $("#setting-language option:selected").text().split(" ")[0] + " (automatic translation)");

		saveEnvironment();
    })

    $('body').on('click', '#setting-cancel', function() {
		jQuery(".scene").removeClass("active");
		jQuery("#" + setting_scene + "-scene").addClass("active");
    })

    $('body').on('click', '.signin', function() {
    	jQuery(".scene").removeClass("active");
		jQuery("#small-limitation-scene .limitation-warning").hide();
		jQuery("#small-limitation-scene").addClass("active");
		var attr_scene = $(this).attr('scene');
		if (typeof attr_scene !== typeof undefined && attr_scene !== false)
			signin_scene = attr_scene;
    })

    $('body').on('click', '.btn.display-signin', function() {
    	jQuery(".scene").removeClass("active");
		jQuery("#signin-scene").addClass("active");
    })

    $('body').on('click', '#signin-submit', function() {
		var userEmail = $("input#signin-email").val();
		var userPassword = $("input#signin-password").val();
		if((userEmail == "") || (userPassword == "")) {
			alert_message("important", "All fields are required.");
			return;
		}
		if(!validateEmail(userEmail)) {
			alert_message("important", "Email is invalid.");
			return;	
		} 
		var requestDatas = {
			'user[email]' : userEmail, 
			'user[password]' : userPassword, 
			'source': 'wordpress plugin'
		};

		show_processing();
		jQuery.ajax({
		    url: textoptimizer_ajax_url,
		    data: {
		    	action: "textoptimizer_api_call",
		    	url: textoptimizer_get_api_url('api') + "signin",
		    	method: "GET",
		    	curlFields: JSON.stringify(requestDatas)
		    },
		    type: "POST",
		    dataType: 'json',
		    success: function(responseDatas) {
		    	hide_processing();
		    	last_api_answer = responseDatas;
		    	if(responseDatas.success) {
					var datas = JSON.stringify({
						'userEmailAddress':userEmail, 
						'api_key': responseDatas.api_key, 
						'unlimited_access': responseDatas.unlimited_access
					});
					textoptimizer_cookies(datas, 'textOptimizerUserInfo','create');
					userLogin = true;
					checkProButtonsVisibility();
					userEmailAddress = userEmail;
					unlimited_access = responseDatas.unlimited_access;
					api_key = responseDatas.api_key;
					jQuery(".scene").removeClass("active");
					updateSigninButton();
					jQuery("#home-scene").addClass("active");
					if(setting_language == "fr")
						alert_message("success", "Bienvenue!");
					else
						alert_message("success", "Welcome back!");
				} 
				else {
					alert_message("important", responseDatas.error);
				}
			},
			fail: function(xhr, textStatus, errorThrown) {
				hide_processing();
		       	alert_message("important", 'Please try again in a few minutes.');
		    }
		});
    })

    $('body').on('keydown', '#signin-password', function(e) {
    	if(e.which == 13) {
    		e.preventDefault();
			$('#signin-submit').click();
    	}
    })
    
    $('body').on('click', '#signin-cancel', function() {
		jQuery(".scene").removeClass("active");
		jQuery("#" + signin_scene + "-scene").addClass("active");
    })

    $('body').on('click', '.signout', function() {
    	textoptimizer_cookies('', 'textOptimizerUserInfo', 'remove');
    	userLogin = false;
    	userEmailAddress = "";
    	unlimited_access = false;
    	api_key = "";

    	checkProButtonsVisibility();
    	updateSigninButton();

    	jQuery(".scene").removeClass("active");
		jQuery("#small-limitation-scene .limitation-warning").hide();
		jQuery("#small-limitation-scene").addClass("active");
		signin_scene = "home";

		if(setting_language == "fr")
			alert_message("success", "Vous êtes maintenant déconnecté.");
		else
			alert_message("success", "You have been signed out successfully.");
    })

    $('body').on('click', '.btn.display-signup', function() {
    	jQuery(".scene").removeClass("active");
		jQuery("#signup-scene").addClass("active");
    })

    $('body').on('click', '#signup-submit', function() {
    	var userProfile = $("select#signup-profile").val();
		var userEmail = $("input#signup-email").val();
		var userPassword = $("input#signup-password").val();
		if((userEmail == "") || (userPassword == "")) {
			alert_message("important", "All fields are required.");
			return;
		}
		if(!validateEmail(userEmail)) {
			alert_message("important", "Email is invalid.");
			return;	
		}
		if(!$('input[name="termsagree"]').prop("checked")) {
			alert_message("important", "Terms must be validated.");
			return;	
		}
		var requestDatas = {
			'preference_role_type': userProfile,
			'user[email]': userEmail,
			'user[password]': userPassword,
			'user[terms]': 1,
			'source': 'wordpress plugin'
		};

		show_processing();
		jQuery.ajax({
		    url: textoptimizer_ajax_url,
		    data: {
		    	action: "textoptimizer_api_call",
		    	url: textoptimizer_get_api_url('api') + "signup",
		    	method: "GET",
		    	curlFields: JSON.stringify(requestDatas)
		    },
		    type: "POST",
		    dataType: 'json',
		    success: function(responseDatas) {
		    	hide_processing();
		    	last_api_answer = responseDatas;
				if(responseDatas.success) {
					var datas = JSON.stringify({
						'userEmailAddress':userEmail, 
						'api_key': responseDatas.api_key, 
						'unlimited_access': responseDatas.unlimited_access
					});
					textoptimizer_cookies(datas, 'textOptimizerUserInfo','create');
					userLogin = true;
					checkProButtonsVisibility();
					userEmailAddress = userEmail;
					unlimited_access = responseDatas.unlimited_access;
					api_key = responseDatas.api_key;
					jQuery(".scene").removeClass("active");
					updateSigninButton();
					jQuery("#home-scene").addClass("active");
					if(setting_language == "fr")
						alert_message("success", "Bienvenue!");
					else
						alert_message("success", "Welcome!");						
				} 
				else {
					alert_message("important", responseDatas.error);
				}
			},
			fail: function(xhr, textStatus, errorThrown){
				hide_processing();
		       	alert_message("important", 'Please try again in a few minutes.');
		    }
		});
    })

    $('body').on('keydown', '#signup-password', function(e) {
    	if(e.which == 13) {
    		e.preventDefault();
			$('#signup-submit').click();
    	}
    })

    $('body').on('click', '#signup-cancel', function() {
		jQuery(".scene").removeClass("active");
		jQuery("#" + signin_scene + "-scene").addClass("active");
    })

    $('body').on('click', '.optimize_text', function(e) {
    	jQuery(".scene").removeClass("active");
    	setRandomBackground("#googlebing-scene .bg_rocket_sm");
		jQuery("#googlebing-scene").addClass("active");
    })

	$('body').on('click', '#googlebing-scene .btn_check_sm', function() {
		selected_searchengine = $(this).attr("engine");
		selected_searchengine = typeof selected_searchengine == "undefined" ? "google" : selected_searchengine;
		
		if(selected_searchengine == "google")
			jQuery("#searchterms-scene .search-engine").text("Google");
		else if(selected_searchengine == "bing")
			jQuery("#searchterms-scene .search-engine").text("Bing");

		jQuery(".scene").removeClass("active");
		setRandomBackground("#searchterms-scene .bg_rocket_btm_l");
		if(userLogin && unlimited_access) {
			$("#search-term-ex-widget").hide();
		} else {
			$("#search-term-ex-widget").show();
		}
		jQuery("#searchterms-scene").addClass("active");
    })  

    $('body').on('keyup', '#search-term', function(e) {
		if(e.which == 13)
			$('#submit_searchterm').click();
	});

 	$('body').on('click', '#submit_searchterm', function() {
 		var query = $('#search-term').val();
 		
 		if(userLogin && unlimited_access || free_optimize_query.includes(query)) {
 			selected_query = query;
 			startOptimize();
 		} else {
 			if(!userLogin) {
	 			jQuery(".scene").removeClass("active");
	 			jQuery("#small-limitation-scene .limitation-warning").hide();
				jQuery("#small-limitation-scene").addClass("active");
				signin_scene = "searchterms";
				return;
	 		}
	 		if(!unlimited_access) {
	 			$('.video-popup').show();
	 			return;
	 		}
 		}
    })  

    $('body').on('click', '#optimizer-widget #refresh-optimize', function() {
    	var query = $('#optimizer-widget .optimize-query').val();

    	if(userLogin && unlimited_access || free_optimize_query.includes(query)) {
 			selected_query = query;
 			startOptimize();
 		} else {
 			if(!userLogin) {
	 			jQuery(".scene").removeClass("active");
	 			jQuery("#small-limitation-scene .limitation-warning").hide();
				jQuery("#small-limitation-scene").addClass("active");
				signin_scene = "content";
				return;
	 		}
	 		if(!unlimited_access) {
	 			$('.video-popup').show();
	 			return;
	 		}
 		}
    }) 

    $('body').on('keyup', '#optimizer-widget input[type="text"]', function(e) {
    	if(e.which == 13)
			$('#optimizer-widget #refresh-optimize').click();
    })

	$('body').on('click', '.unlock-pro', function() {
 		if(userLogin) {
 			$('body').append($('#unlock-pro-form-template').html());
 			$('#unlock-pro-form').attr('action', setting_language == 'fr' ? 'https://1.fr/offers' : 'https://textoptimizer.com/offers');
 			$('#unlock-pro-form input[name="api_key"]').val(api_key);
 			$("#unlock-pro-form").submit();
 			$("#unlock-pro-form").remove();
 		}
 		else {
 			$('.video-popup').hide();
 			jQuery(".scene").removeClass("active");
 			jQuery("#small-limitation-scene .limitation-warning").hide();
			jQuery("#small-limitation-scene").addClass("active");
			signin_scene = "home";
 		}
    })     

	$('body').on('click', '.help', function() {
    	jQuery(".scene").removeClass("active");
		jQuery("#help-scene").addClass("active");
    })

	$('body').on('click', '.accordion_top', function() {
    	this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.display === "block") {
		  	panel.style.display = "none";
		} else {
		  	panel.style.display = "block";
		}
    })

	$('body').on('click', '#main-wrapper .textoptimizer_extension result[data-balloon-pos]', function() {
    	copy_clipboard(jQuery(this), jQuery(this).find(".keyword_text_value_popup").text());
    })

    $('body').on('click', '#main-wrapper .textoptimizer_extension .textoptimizer_popup table td[data-balloon-pos]', function() {
    	copy_clipboard(jQuery(this), jQuery(this).find("#sentence_popup_words").val());
    })

    $('.search-term-ex').click(function(e) {
    	e.preventDefault();
      	var termValue = $(this).html();
      	if (termValue != "") {
	      	$("#search-term").val(termValue);
      	}
  	});

  	$('.cancel_loading').on('click', function(){
		initHomepage();
	});

})

var french_ip_group = ["109.0","109.1","109.10","109.11","109.12","109.13","109.14","109.15","109.16","109.17","109.18","109.19","109.2","109.20","109.208","109.209","109.21","109.210","109.211","109.212","109.213","109.214","109.215","109.216","109.217","109.218","109.219","109.22","109.220","109.221","109.222","109.223","109.23","109.24","109.25","109.26","109.27","109.28","109.29","109.3","109.30","109.31","109.4","109.5","109.6","109.7","109.8","109.9","128.78","128.79","128.93","129.102","129.104","129.175","129.181","129.182","129.183","129.184","129.185","129.199","129.20","129.88","130.120","130.190","130.66","130.79","130.84","130.98","131.254","132.149","132.165","132.166","132.167","132.168","132.169","132.227","134.157","134.158","134.206","134.212","134.214","134.227","134.246","134.59","137.121","137.129","137.194","138.102","138.195","138.21","138.231","138.63","138.96","139.100","139.124","139.158","139.160","139.54","140.77","140.93","140.94","141.11","141.115","141.175","141.194","143.126","143.196","144.165","144.204","144.56","145.226","145.231","145.238","145.242","145.248","146.19","146.249","146.51","147.100","147.127","147.171","147.173","147.196","147.210","147.215","147.250","147.94","147.98","147.99","148.143","148.169","148.60","149.251","15.188","15.236","15.237","150.175","151.127","152.77","152.81","155.132","156.118","156.18","156.28","157.136","157.159","158.190","158.191","158.192","161.104","161.105","161.106","163.100","163.101","163.103","163.114","163.115","163.116","163.172","163.173","163.62","163.63","163.64","163.65","163.66","163.67","163.68","163.69","163.70","163.71","163.72","163.73","163.74","163.75","163.76","163.77","163.78","163.79","163.80","163.81","163.82","163.83","163.84","163.85","163.86","163.87","163.88","163.89","163.90","163.91","163.92","163.93","163.94","163.95","163.96","163.97","163.98","163.99","164.1","164.131","164.132","164.2","176.128","176.129","176.130","176.131","176.132","176.133","176.134","176.135","176.136","176.137","176.138","176.139","176.140","176.141","176.142","176.143","176.144","176.145","176.146","176.147","176.148","176.149","176.150","176.151","176.152","176.153","176.154","176.155","176.156","176.157","176.158","176.159","176.160","176.161","176.162","176.163","176.164","176.165","176.166","176.167","176.168","176.169","176.170","176.171","176.172","176.173","176.174","176.175","176.176","176.177","176.178","176.179","176.180","176.181","176.182","176.183","176.184","176.185","176.186","176.187","176.188","176.189","176.190","176.191","193.248","193.249","193.250","193.251","193.48","193.49","193.50","193.51","193.52","193.54","193.55","195.220","195.221","2.0","2.1","2.10","2.11","2.12","2.13","2.14","2.15","2.2","2.3","2.4","2.5","2.6","2.7","2.8","2.9","212.194","212.195","31.32","31.33","31.34","31.35","31.36","31.37","31.38","31.39","35.180","35.181","37.164","37.175","37.64","37.65","37.66","37.67","37.68","37.69","37.70","37.71","46.192","46.193","5.48","5.49","5.50","5.51","57.192","57.193","57.194","57.195","57.196","57.197","57.198","57.199","57.200","57.201","57.202","57.203","57.204","57.205","57.206","57.207","57.208","57.209","57.210","57.211","57.212","57.213","57.214","57.215","57.216","57.217","57.218","57.219","57.220","57.221","57.222","57.223","62.34","62.35","77.128","77.129","77.130","77.131","77.132","77.133","77.134","77.135","77.136","77.140","77.141","77.142","77.143","77.144","77.145","77.146","77.147","77.148","77.149","77.150","77.151","77.152","77.153","77.154","77.155","77.156","77.157","77.158","77.159","77.192","77.193","77.194","77.195","77.196","77.197","77.198","77.199","77.200","77.201","77.202","77.203","77.204","77.205","77.206","77.207","78.112","78.113","78.114","78.115","78.116","78.117","78.118","78.119","78.120","78.121","78.122","78.123","78.124","78.125","78.126","78.127","78.192","78.193","78.194","78.195","78.196","78.197","78.198","78.199","78.200","78.201","78.202","78.203","78.204","78.205","78.206","78.207","78.208","78.209","78.210","78.211","78.212","78.213","78.214","78.215","78.216","78.217","78.218","78.219","78.220","78.221","78.222","78.223","78.224","78.225","78.226","78.227","78.228","78.229","78.230","78.231","78.232","78.233","78.234","78.235","78.236","78.237","78.238","78.239","78.240","78.241","78.242","78.243","78.244","78.245","78.246","78.247","78.248","78.249","78.250","78.251","78.252","78.253","78.254","78.255","79.80","79.81","79.82","79.83","79.84","79.85","79.86","79.87","79.88","79.89","79.90","79.91","79.92","79.93","79.94","79.95","80.10","80.11","80.118","80.119","80.12","80.124","80.125","80.13","80.14","80.15","80.214","80.215","80.8","80.9","81.248","81.249","81.250","81.251","81.252","81.253","81.254","81.255","81.48","81.49","81.50","81.51","81.52","81.53","81.54","81.55","81.56","81.57","81.64","81.65","81.66","81.67","82.120","82.121","82.122","82.123","82.124","82.125","82.126","82.127","82.224","82.225","82.226","82.227","82.228","82.229","82.230","82.231","82.232","82.233","82.234","82.235","82.236","82.237","82.238","82.239","82.240","82.241","82.242","82.243","82.244","82.245","82.246","82.247","82.248","82.249","82.250","82.251","82.252","82.253","82.254","82.255","82.64","82.65","82.66","82.67","83.112","83.113","83.114","83.115","83.152","83.153","83.154","83.155","83.156","83.157","83.158","83.159","83.192","83.193","83.194","83.195","83.196","83.197","83.199","83.200","83.201","83.202","83.203","83.204","83.205","83.206","83.207","84.100","84.101","84.102","84.103","84.4","84.5","84.6","84.7","84.96","84.97","84.98","84.99","85.168","85.169","85.170","85.171","85.68","85.69","86.192","86.193","86.194","86.195","86.196","86.197","86.198","86.199","86.200","86.201","86.202","86.203","86.204","86.205","86.206","86.207","86.208","86.209","86.210","86.211","86.212","86.213","86.214","86.215","86.216","86.217","86.218","86.219","86.220","86.221","86.222","86.223","86.224","86.225","86.226","86.227","86.228","86.229","86.230","86.231","86.232","86.233","86.234","86.235","86.236","86.237","86.238","86.239","86.240","86.241","86.242","86.243","86.244","86.245","86.246","86.247","86.248","86.249","86.250","86.251","86.252","86.253","86.254","86.255","86.63","86.64","86.65","86.66","86.67","86.68","86.69","86.70","86.71","86.72","86.73","86.74","86.75","86.76","86.77","86.78","86.79","87.88","87.89","87.90","87.91","88.120","88.121","88.122","88.123","88.124","88.125","88.126","88.127","88.136","88.137","88.138","88.139","88.140","88.141","88.142","88.143","88.160","88.161","88.162","88.163","88.164","88.165","88.166","88.167","88.168","88.169","88.170","88.171","88.172","88.173","88.174","88.175","88.176","88.177","88.178","88.179","88.180","88.181","88.182","88.183","88.184","88.185","88.186","88.187","88.188","88.189","88.190","88.191","89.156","89.157","89.158","89.159","89.2","89.224","89.225","89.226","89.227","89.3","89.80","89.81","89.82","89.83","89.84","89.85","89.86","89.87","89.88","89.89","89.90","89.91","89.92","89.93","89.94","89.95","90.0","90.1","90.10","90.100","90.101","90.102","90.103","90.104","90.105","90.107","90.108","90.109","90.11","90.110","90.111","90.112","90.113","90.114","90.115","90.116","90.117","90.118","90.119","90.12","90.120","90.121","90.122","90.123","90.124","90.125","90.126","90.127","90.13","90.14","90.15","90.16","90.17","90.18","90.19","90.2","90.20","90.21","90.22","90.23","90.24","90.25","90.26","90.27","90.28","90.29","90.3","90.30","90.31","90.32","90.33","90.34","90.35","90.36","90.37","90.38","90.39","90.4","90.40","90.41","90.42","90.43","90.44","90.45","90.46","90.47","90.48","90.49","90.5","90.50","90.51","90.52","90.53","90.54","90.55","90.56","90.57","90.58","90.59","90.6","90.60","90.61","90.62","90.63","90.65","90.66","90.67","90.7","90.72","90.73","90.78","90.79","90.8","90.80","90.81","90.82","90.83","90.85","90.86","90.87","90.88","90.89","90.9","90.90","90.91","90.92","90.93","90.96","90.97","90.98","90.99","91.160","91.161","91.162","91.163","91.164","91.165","91.166","91.167","91.168","91.169","91.170","91.171","91.172","91.173","91.174","91.175","91.68","91.69","91.70","91.71","92.102","92.103","92.128","92.129","92.130","92.131","92.132","92.133","92.134","92.135","92.136","92.137","92.138","92.139","92.140","92.141","92.142","92.143","92.145","92.146","92.147","92.148","92.149","92.150","92.151","92.152","92.153","92.154","92.155","92.156","92.157","92.158","92.159","92.160","92.161","92.162","92.163","92.164","92.165","92.166","92.167","92.168","92.169","92.170","92.171","92.172","92.173","92.174","92.175","92.178","92.179","92.181","92.182","92.183","92.184","92.88","92.89","92.90","92.91","92.92","92.93","92.94","92.95","93.0","93.1","93.10","93.11","93.12","93.13","93.14","93.15","93.16","93.17","93.18","93.19","93.2","93.20","93.21","93.22","93.23","93.24","93.25","93.26","93.27","93.28","93.29","93.3","93.30","93.31","93.4","93.5","93.6","93.7","93.8","93.9","94.238","94.239"];   
  