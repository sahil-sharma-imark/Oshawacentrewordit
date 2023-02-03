////////////////////////////////////////////////////////////
// CANVAS LOADER
////////////////////////////////////////////////////////////

 /*!
 * 
 * START CANVAS PRELOADER - This is the function that runs to preload canvas asserts
 * 
 */
function initPreload(){
	toggleLoader(true);
	
	checkMobileEvent();
	
	$(window).resize(function(){
		clearTimeout(resizeTimer);
		resizeTimer = setTimeout(checkMobileOrientation, 1000);
	});
	resizeGameFunc();
	
	loader = new createjs.LoadQueue(false);
	manifest=[
			{src:'../wordgame/assets/background.png', id:'background'},
			{src:'../wordgame/assets/background_p.png', id:'backgroundP'},
			{src:'../wordgame/assets/button_start.png', id:'buttonStart'},

			{src:'../wordgame/assets/item_del.png', id:'itemDel'},
			{src:'../wordgame/assets/button_arrow.png', id:'buttonArrow'},
			{src:'../wordgame/assets/button_letter.png', id:'buttonLetter'},
		
			{src:'../wordgame/assets/button_facebook.png', id:'buttonFacebook'},
			{src:'../wordgame/assets/button_twitter.png', id:'buttonTwitter'},
			{src:'../wordgame/assets/button_whatsapp.png', id:'buttonWhatsapp'},
			{src:'../wordgame/assets/button_continue.png', id:'buttonContinue'},
			{src:'../wordgame/assets/item_pop.png', id:'itemPop'},
			{src:'../wordgame/assets/item_pop_p.png', id:'itemPopP'},
			{src:'../wordgame/assets/item_pop2.png', id:'itemPop2'},
			{src:'../wordgame/assets/item_pop_p2.png', id:'itemPopP2'},
			{src:'../wordgame/assets/button_confirm.png', id:'buttonConfirm'},
			{src:'../wordgame/assets/button_cancel.png', id:'buttonCancel'},
			{src:'../wordgame/assets/button_fullscreen.png', id:'buttonFullscreen'},
			{src:'../wordgame/assets/button_sound_on.png', id:'buttonSoundOn'},
			{src:'../wordgame/assets/button_sound_off.png', id:'buttonSoundOff'},
			{src:'../wordgame/assets/button_exit.png', id:'buttonExit'},
			{src:'../wordgame/assets/button_settings.png', id:'buttonSettings'}
	];
	
	if ( typeof addScoreboardAssets == 'function' ) { 
		addScoreboardAssets();
	}
	
	soundOn = true;
	if($.browser.mobile || isTablet){
		if(!enableMobileSound){
			soundOn=false;
		}
	}
	
	if(soundOn){
		manifest.push({src:'../wordgame/assets/sounds/sound_click.ogg', id:'soundButton'});
		manifest.push({src:'../wordgame/assets/sounds/sound_over.ogg', id:'soundOver'});
		manifest.push({src:'../wordgame/assets/sounds/sound_complete.ogg', id:'soundComplete'});
		manifest.push({src:'../wordgame/assets/sounds/sound_enter.ogg', id:'soundKey'});
		manifest.push({src:'../wordgame/assets/sounds/sound_key.ogg', id:'soundEnter'});
		manifest.push({src:'../wordgame/assets/sounds/sound_nothing.ogg', id:'soundNothing'});
		manifest.push({src:'../wordgame/assets/sounds/sound_something.ogg', id:'soundSomething'});
		manifest.push({src:'../wordgame/assets/sounds/sound_success.ogg', id:'soundSuccess'});
		manifest.push({src:'../wordgame/assets/sounds/sound_error.ogg', id:'soundError'});
		
		createjs.Sound.alternateExtensions = ["mp3"];
		loader.installPlugin(createjs.Sound);
	}
	
	loader.addEventListener("complete", handleComplete);
	loader.addEventListener("fileload", fileComplete);
	loader.addEventListener("error",handleFileError);
	loader.on("progress", handleProgress, this);
	loader.loadManifest(manifest);
}

/*!
 * 
 * CANVAS FILE COMPLETE EVENT - This is the function that runs to update when file loaded complete
 * 
 */
function fileComplete(evt) {
	var item = evt.item;
	//console.log("Event Callback file loaded ", evt.item.id);
}

/*!
 * 
 * CANVAS FILE HANDLE EVENT - This is the function that runs to handle file error
 * 
 */
function handleFileError(evt) {
	console.log("error ", evt);
}

/*!
 * 
 * CANVAS PRELOADER UPDATE - This is the function that runs to update preloder progress
 * 
 */
function handleProgress() {
	$('#mainLoader span').html(Math.round(loader.progress/1*100)+'%');
}

/*!
 * 
 * CANVAS PRELOADER COMPLETE - This is the function that runs when preloader is complete
 * 
 */
function handleComplete() {
	toggleLoader(false);
	initMain();
};

/*!
 * 
 * TOGGLE LOADER - This is the function that runs to display/hide loader
 * 
 */
function toggleLoader(con){
	if(con){
		$('#mainLoader').show();
	}else{
		$('#mainLoader').hide();
	}
}