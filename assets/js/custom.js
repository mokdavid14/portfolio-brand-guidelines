$(document).foundation();

// $(document).ready(
	// $(".pillar-btn").click{
	// 	var element = this;
	// 	$(".pillar-wrapper").slideUp(2000);
	// 	$(".pillar-wrapper").slideDown(2000);
	// }

	// $("#emotive-btn").click{

	// }
	// $(".pillar-btn").click(function(){

	// 	var element = this;

	// 	switch (element.id){
	// 		case "emotive-btn": 
	// 			$("#pillar-title").text("Emotive");
	// 			$("#pillar-details").text("ajfg;aiogjario;gjfdo;igja");
	// 			break;
	// 		case "immersive-btn":
	// 			$("#pillar-title").text("Immersive");
	// 			$("#pillar-details").text("65416846846");
	// 			break;
	// 	}

	// })
// )

$(document).ready(
	// $(".special-span:visible").css( "display", "inline !important");


	$(".pillar-btn").click(function(){

		var element = this;
		// $(".pillar-wrapper").slideUp(function(){
		$(".pillar-wrapper").hide("slide",function(){

		switch (element.id){
			case "emotive-btn": 
				$("#pillar-title").text("Emotive");
				$("#pillar-details").html("The experiences on PlayStation® are so vivid that we feel real emotions. It’s this emotive pull that the brand needs to capitalise on.");
				break;
			case "immersive-btn":
				$("#pillar-title").text("Immersive");
				$("#pillar-details").html("The brand's communications should be deep and all-encompassing. Creating truly immersive experiences that replicate the level of play on PlayStation®.");
				break;
			case "irreverent-btn":
				$("#pillar-title").text("Irreverent");
				$("#pillar-details").html("The brand is playful, cheeky, always question authority and have a mischievous, slightly naughty streak. It must do cool stuff that gets people talking.");
				break;
			case "celebratory-btn":
				$("#pillar-title").text("Celebratory");
				$("#pillar-details").html("The brand must celebrate its fans and create the most amazing communications experiences for them.");
				break;
			case "unexpected-btn":
				$("#pillar-title").text("Unexpected");
				$("#pillar-details").html("The brand exceeds expectations, challenge perceptions, innovate within the industry and defy convention.");
				break;
			case "fearless-btn":
				$("#pillar-title").text("Fearless");
				$("#pillar-details").html("The brand is the gold standard gaming brand and it should always act like it.");
				break;
		}

		});

		// $(".pillar-wrapper").slideDown();
		$(".pillar-wrapper").show("slide");

	})

)