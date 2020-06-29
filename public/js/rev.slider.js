var dzrevapi;
var dzQuery =jQuery;
function dz_rev_slider_1(){
	if(dzQuery("#rev_slider_989_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_989_1");
	}else{
		dzrevapi = dzQuery("#rev_slider_989_1").show().revolution({
			sliderType:"hero",
			jsFileLocation:"//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,768,500,720],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"slidercenter",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "0px",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				disableFocusListener:false,
			}
		});
	}
}
