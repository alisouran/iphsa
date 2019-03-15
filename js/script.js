$(document).ready(function(){
	$(".menu-item").addClass("border-nav");
	openMember();
	openNews();
	openSponsor();
	displayNewsNavBtn("#navBtnIPSF","#navBtnIPHSA","#navBtnCourse");
	displayMainSection("#sponsor_back","#sponsorSection");
	displayMainSection("#member_back","#memberSection");
	displayMainSection("#news_back","#newsSection");
	owlCo();
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1) {
		  $("#header").addClass("header-scrolled fixed-top");
		  $("#header").removeClass("navbar-bg-color");
		  $("body").addClass("mt-12");
		} else {
		  $("#header").removeClass("header-scrolled fixed-top");
		  $("#header").addClass("navbar-bg-color");
		  $("body").removeClass("mt-12");
		}
	  });
	  $(window).resize(function(){
		if ($(window).width() <= 980){	
			$(".menu-item ").removeClass("border-nav");
		}	
		else{
			$(".menu-item ").addClass("border-nav");
		}
	});
});
function owlCo() { 
	var owl = $('.owl-carousel');
	owl.owlCarousel({
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				nav:true,
				loop:true
			}
		},
		margin:10,
		autoplay:true,
		autoplayTimeout:2000,
		loop:true,
		autoplayHoverPause:true
	});
 }
function openMember(){
	$("#member").click(function (e) { 
		$("#hideNewsIcon").fadeOut();
		$("#hideNewsText").fadeOut();
		$("#hideMemberIcon").fadeOut();
		$("#hideMemberText").fadeOut();
		$("#hideSponsorIcon").fadeOut();
		$("#hideSponsorText").fadeOut();
		$("#mainSection").fadeOut();
		displaySection("#memberSection");
		displayMainSection("#member_back","#memberSection");
	});
}
function openNews(){
	$("#news").click(function (e) { 
		$("#hideNewsIcon").fadeOut();
		$("#hideNewsText").fadeOut();
		$("#hideMemberIcon").fadeOut();
		$("#hideMemberText").fadeOut();
		$("#hideSponsorIcon").fadeOut();
		$("#hideSponsorText").fadeOut();
		$("#mainSection").fadeOut();
		displaySection("#newsSection");
		displayMainSection("#news_back","#newsSection");
	});
}
function openSponsor(){
	$("#sponsor").click(function (e) { 
		$("#hideNewsIcon").fadeOut();
		$("#hideNewsText").fadeOut();
		$("#hideMemberIcon").fadeOut();
		$("#hideMemberText").fadeOut();
		$("#hideSponsorIcon").fadeOut();
		$("#hideSponsorText").fadeOut();
		$("#mainSection").fadeOut();
		displaySection("#sponsorSection");
		displayMainSection("#sponsor_back","#sponsorSection");
	});
}
function displaySection(displaySectionId){
	$(displaySectionId).delay(500).fadeIn();
}
function displayMainSection(backId,displaySectionId){
	$(backId).click(function (e) {
		$(displaySectionId).fadeOut();
	});
}
function displayNewsNavBtn(btnId1,btnId2,btnId3){
	$(btnId1).click(function(e){
		$("#newsNavContent1").delay(400).fadeIn();
		$("#newsNavContent4").delay(400).fadeIn();
		$("#newsNavContent2").fadeOut();
		$("#newsNavContent5").fadeOut();
		$("#newsNavContent3").fadeOut();
		$("#newsNavContent6").fadeOut();
	});
	$(btnId2).click(function(e){
		$("#newsNavContent1").fadeOut();
		$("#newsNavContent4").fadeOut();
		$("#newsNavContent2").delay(400).fadeIn();
		$("#newsNavContent5").delay(400).fadeIn();
		$("#newsNavContent3").fadeOut();
		$("#newsNavContent6").fadeOut();
	});
	$(btnId3).click(function(e){
		$("#newsNavContent1").fadeOut();
		$("#newsNavContent4").fadeOut();
		$("#newsNavContent2").fadeOut();
		$("#newsNavContent5").fadeOut();
		$("#newsNavContent3").delay(400).fadeIn();
		$("#newsNavContent6").delay(400).fadeIn();
	});
}
