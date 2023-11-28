
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	var checkdrop = true;
	if(!$('.indus_experience option:selected').val()){
		$('.indus_experience').addClass('requriedClass');
		checkdrop =false;
	}
	if(!$('.indus_qualfication option:selected').val()){
		$('.indus_qualfication').addClass('requriedClass');
		checkdrop =false;
	}
	if(!checkdrop){
		return false;
	}
	if(animating) return false;
	animating = true;
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			transform = "translateX(-50%)";
				//2. bring next_fs from the right(50%)
			left = "0%";
				//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				// 'transform': 'scale('+scale+')',
				// 'position': 'relative'
			});
			next_fs.css({'left': left, 'opacity': opacity, 'transition': 'all 1.2s'});
		}, 
		duration: 0, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			// current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity,  'transition': 'all 1.2s'},);
		}, 
		duration: 0, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$("#formSubmit").click(function(){
	//$('.subspinner').removeAttr('style');
});
var options ={
	"Automotive":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate II in Automotive Electrical Technology - AUR20420":"Certificate II in Automotive Electrical Technology - AUR20420"},
		{"Certificate II in Automotive Servicing Technology - AUR20520":"Certificate II in Automotive Servicing Technology - AUR20520"},
		{"Certificate II in Split Air-conditioning and Heat Pump Systems - UEE20120":"Certificate II in Split Air-conditioning and Heat Pump Systems - UEE20120"},
		{"Certificate III in Automotive Body Repair Technology - AUR32120":"Certificate III in Automotive Body Repair Technology - AUR32120"},
		{"Certificate III in Automotive Diesel Engine Technology - AUR31520":"Certificate III in Automotive Diesel Engine Technology - AUR31520"},
		{"Certificate III in Automotive Electrical Technology - AUR30320":"Certificate III in Automotive Electrical Technology - AUR30320"},
		{"Certificate III in Automotive Refinishing Technology - AUR32420":"Certificate III in Automotive Refinishing Technology - AUR32420"},
		{"Certificate III in Heavy Commercial Vehicle Mechanical Technology - AUR31120":"Certificate III in Heavy Commercial Vehicle Mechanical Technology - AUR31120"},
		{"Certificate III in Light Vehicle Mechanical Technology - AUR30620":"Certificate III in Light Vehicle Mechanical Technology - AUR30620"},
		{"Certificate III in Mobile Plant Technology - AUR31220":"Certificate III in Mobile Plant Technology - AUR31220"},
		{"Certificate III in Motorcycle Mechanical Technology - AUR30820":"Certificate III in Motorcycle Mechanical Technology - AUR30820"},
		{"Certificate IV in Automotive Body Repair Technology - AUR40720":"Certificate IV in Automotive Body Repair Technology - AUR40720"},
		{"Certificate IV in Automotive Electrical Technology - AUR40620":"Certificate IV in Automotive Electrical Technology - AUR40620"},
		{"Certificate IV in Automotive Mechanical Diagnosis - AUR40216":"Certificate IV in Automotive Mechanical Diagnosis - AUR40216"},
		{"Certificate IV in Automotive Mechanical Overhauling - AUR40820":"Certificate IV in Automotive Mechanical Overhauling - AUR40820"},
		{"Diploma of Automotive Management - AUR50116":"Diploma of Automotive Management - AUR50116"},
		{"Diploma of Automotive Technology - AUR50216":"Diploma of Automotive Technology - AUR50216"}
		],
	"Building & Construction":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Advanced Diploma of Building and Construction (Management) - CPC60220":"Advanced Diploma of Building and Construction (Management) - CPC60220"},
		{"Certificate I in Construction - CPC10120":"Certificate I in Construction - CPC10120"},
		{"Certificate III in Air-conditioning and Refrigeration - UEE32220":"Certificate III in Air-conditioning and Refrigeration - UEE32220"},
		{"Certificate III in Bricklaying and Blocklaying - CPC33020":"Certificate III in Bricklaying and Blocklaying - CPC33020"},
		{"Certificate III in Cabinet Making and Timber Technology - MSF30322":"Certificate III in Cabinet Making and Timber Technology - MSF30322"},
		{"Certificate III in Carpentry - CPC30220":"Certificate III in Carpentry - CPC30220"},
		{"Certificate III in Concreting - CPC30320":"Certificate III in Concreting - CPC30320"},
		{"Certificate III in Construction Waterproofing - CPC31420":"Certificate III in Construction Waterproofing - CPC31420"},
		{"Certificate III in Demolition - CPC30420":"Certificate III in Demolition - CPC30420"},
		{"Certificate III in Engineering - Fabrication Trade - MEM31922.":"Certificate III in Engineering - Fabrication Trade - MEM31922."},
		{"Certificate III in Engineering - Mechanical Trade - MEM30219":"Certificate III in Engineering - Mechanical Trade - MEM30219"},
		{"Certificate III in Glass and Glazing - MSF30422":"Certificate III in Glass and Glazing - MSF30422"},
		{"Certificate III in Joinery - CPC31920":"Certificate III in Joinery - CPC31920"},
		{"Certificate III in Landscape Construction - AHC30921":"Certificate III in Landscape Construction - AHC30921"},
		{"Certificate III in Painting and Decorating - CPC30620":"Certificate III in Painting and Decorating - CPC30620"},
		{"Certificate III in Plumbing - CPC32420":"Certificate III in Plumbing - CPC32420"},
		{"Certificate III in Roof Plumbing - CPC32620.":"Certificate III in Roof Plumbing - CPC32620."},
		{"Certificate III in Shopfitting - CPC30120":"Certificate III in Shopfitting - CPC30120"},
		{"Certificate III in Solid Plastering - CPC31020":"Certificate III in Solid Plastering - CPC31020"},
		{"Certificate III in Stonemasonry - CPC32320":"Certificate III in Stonemasonry - CPC32320"},
		{"Certificate III in Wall and Ceiling Lining - CPC31220":"Certificate III in Wall and Ceiling Lining - CPC31220"},
		{"Certificate III in Wall and Floor Tiling - CPC31320":"Certificate III in Wall and Floor Tiling - CPC31320"},
		{"Certificate IV in Building and Construction - CPC40120":"Certificate IV in Building and Construction - CPC40120"},
		{"Certificate IV in Plumbing and Services - CPC40920.":"Certificate IV in Plumbing and Services - CPC40920."},
		{"Certificate IV in Work Health and Safety - BSB41419":"Certificate IV in Work Health and Safety - BSB41419"},
		{"Diploma of Building and Construction (Building) - CPC50220":"Diploma of Building and Construction (Building) - CPC50220"},
		{"Diploma of Project Management - BSB50820":"Diploma of Project Management - BSB50820"}
		],
	"Business & Finance":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Advanced Diploma of Business - BSB60120":"Advanced Diploma of Business - BSB60120"},
		{"Advanced Diploma of Leadership and Management - BSB60420":"Advanced Diploma of Leadership and Management - BSB60420"},
		{"Advanced Diploma of Program Management - BSB60720":"Advanced Diploma of Program Management - BSB60720"},
		{"Advanced Diploma of Work Health and Safety - BSB60619":"Advanced Diploma of Work Health and Safety - BSB60619"},
		{"Certificate III in Business - BSB30120":"Certificate III in Business - BSB30120"},
		{"Certificate III in Entrepreneurship and New Business - BSB30220":"Certificate III in Entrepreneurship and New Business - BSB30220"},
		{"Certificate IV in Business - BSB40120":"Certificate IV in Business - BSB40120"},
		{"Certificate IV in Entrepreneurship and New Business - BSB40320":"Certificate IV in Entrepreneurship and New Business - BSB40320"},
		{"Certificate IV in Leadership and Management - BSB40520":"Certificate IV in Leadership and Management - BSB40520"},
		{"Certificate IV in Project Management Practice - BSB40920":"Certificate IV in Project Management Practice - BSB40920"},
		{"Diploma of Business - BSB50120":"Diploma of Business - BSB50120"},
		{"Diploma of Human Resources Management - BSB50320":"Diploma of Human Resources Management - BSB50320"},
		{"Diploma of Leadership and Management - BSB50420":"Diploma of Leadership and Management - BSB50420"},
		{"Diploma of Marketing and Communication - BSB50620":"Diploma of Marketing and Communication - BSB50620"},
		{"Diploma of Quality Auditing - BSB50920":"Diploma of Quality Auditing - BSB50920"},
		{"Diploma of Work Health and Safety - BSB51319":"Diploma of Work Health and Safety - BSB51319"},
		{"Graduate Diploma of Portfolio Management - BSB80220":"Graduate Diploma of Portfolio Management - BSB80220"},
		{"Graduate Diploma of Strategic Leadership - BSB80320":"Graduate Diploma of Strategic Leadership - BSB80320"}
		],
	"Civil Construction":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate III in Civil Construction (General) - RII30920":"Certificate III in Civil Construction (General) - RII30920"},
		{"Certificate III in Civil Construction Plant Operations - RII30820":"Certificate III in Civil Construction Plant Operations - RII30820"},
		{"Certificate IV in Civil Construction - RII40720":"Certificate IV in Civil Construction - RII40720"}
		],
	"Commercial Cookery & Hospitality":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Advanced Diploma of Hospitality Management - SIT60316":"Advanced Diploma of Hospitality Management - SIT60316"},
		{"Certificate II in Hospitality - SIT20316":"Certificate II in Hospitality - SIT20316"},
		{"Certificate III in Commercial Cookery - SIT30821":"Certificate III in Commercial Cookery - SIT30821"},
		{"Certificate III in Hospitality - SIT30622":"Certificate III in Hospitality - SIT30622"},
		{"Certificate III in Patisserie - SIT31016":"Certificate III in Patisserie - SIT31016"},
		{"Certificate IV in Kitchen Management - SIT40521":"Certificate IV in Kitchen Management - SIT40521"},
		{"Certificate IV in Patisserie - SIT40716":"Certificate IV in Patisserie - SIT40716"},
		{"Diploma of Hospitality Management - SIT50416":"Diploma of Hospitality Management - SIT50416"},
		{"Diploma of Travel and Tourism Management - SIT50116":"Diploma of Travel and Tourism Management - SIT50116"}
		],
	"Community Services":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate III in Early Childhood Education and Care - CHC30121":"Certificate III in Early Childhood Education and Care - CHC30121"},
		{"Certificate III in Individual Support - CHC33015":"Certificate III in Individual Support - CHC33015"},
		{"Certificate IV in Ageing Support - CHC43015":"Certificate IV in Ageing Support - CHC43015"},
		{"Certificate IV in Career Development - CHC41215":"Certificate IV in Career Development - CHC41215"},
		{"Diploma of Community Services - CHC52015":"Diploma of Community Services - CHC52015"},
		{"Diploma of Early Childhood Education and Care - CHC50121":"Diploma of Early Childhood Education and Care - CHC50121"},
		{"Graduate Certificate in Career Development Practice - CHC81315":"Graduate Certificate in Career Development Practice - CHC81315"}
		],
	"Engineering":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Advanced Diploma of Engineering - MEM60122":"Advanced Diploma of Engineering - MEM60122"},
		{"Certificate III in Engineering - Fabrication Trade - MEM31922":"Certificate III in Engineering - Fabrication Trade - MEM31922"},
		{"Certificate III in Engineering - Mechanical Trade - MEM30219":"Certificate III in Engineering - Mechanical Trade - MEM30219"},
		{"Certificate IV in Engineering - MEM40119":"Certificate IV in Engineering - MEM40119"},
		{"Diploma of Engineering - Advanced Trade - MEM50119":"Diploma of Engineering - Advanced Trade - MEM50119"},
		{"Diploma of Engineering - Technical - MEM50222":"Diploma of Engineering - Technical - MEM50222"}
		],
	"Events & Entertainment":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate IV in Screen and Media - CUA41220":"Certificate IV in Screen and Media - CUA41220"},
		{"Diploma of Screen and Media - CUA51020":"Diploma of Screen and Media - CUA51020"}
		],
	"Hair & Beauty":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate II in Salon Assistant - SHB20216":"Certificate II in Salon Assistant - SHB20216"},
		{"Certificate III in Barbering - SHB30516":"Certificate III in Barbering - SHB30516"},
		{"Certificate III in Beauty Services - SHB30121":"Certificate III in Beauty Services - SHB30121"},
		{"Certificate III in Hairdressing - SHB30416":"Certificate III in Hairdressing - SHB30416"},
		{"Certificate III in Make-Up - SHB30221":"Certificate III in Make-Up - SHB30221"},
		{"Certificate III in Nail Technology - SHB30321":"Certificate III in Nail Technology - SHB30321"},
		{"Certificate IV in Beauty Therapy - SHB40121":"Certificate IV in Beauty Therapy - SHB40121"},
		{"Certificate IV in Hairdressing - SHB40216":"Certificate IV in Hairdressing - SHB40216"},
		{"Diploma of Beauty Therapy - SHB50121":"Diploma of Beauty Therapy - SHB50121"},
		{"Diploma of Salon Management - SHB50216":"Diploma of Salon Management - SHB50216"}
		],
	"Horticulture & Land Management":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate III in Horticulture - AHC30722":"Certificate III in Horticulture - AHC30722"}
		],
	"Information Technology":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Advanced Diploma of Information Technology - ICT60220":"Advanced Diploma of Information Technology - ICT60220"},
		{"Diploma of Information Technology - ICT50220":"Diploma of Information Technology - ICT50220"}
		],
	"Mining and Resources":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate III in Surface Extraction Operations - RII30120":"Certificate III in Surface Extraction Operations - RII30120"}
		],
	"Plumbing Services":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate III in Plumbing - CPC32420":"Certificate III in Plumbing - CPC32420"},
		{"Certificate III in Roof Plumbing - CPC32620":"Certificate III in Roof Plumbing - CPC32620"},
		{"Certificate IV in Plumbing and Services - CPC40920":"Certificate IV in Plumbing and Services - CPC40920"}
		],
	"Retail Services":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate II in Retail Cosmetics - SHB20121":"Certificate II in Retail Cosmetics - SHB20121"}
		],
	"Security & Cleaning":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Certificate II in Retail Cosmetics - SHB20121":"Certificate II in Retail Cosmetics - SHB20121"}
		],
	"Transport & Logistics":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Diploma of Logistics - TLI50221":"Diploma of Logistics - TLI50221"}
		],
	"Vocational Education & Training":[
		{"Select Qualification":""},
		{"Not sure yet?":"Not sure yet?"},
		{"Graduate Diploma of Management (Learning) - BSB80120":"Graduate Diploma of Management (Learning) - BSB80120"}
		],		
}



$(".indus_experience").change(function() {
	$('.indus_experience').removeClass('requriedClass');
	$('.indus_qualfication').removeClass('requriedClass');
	$('.indus_qualfication').empty();

	var sel = $('option:selected', this).text();
	console.log(sel);
	$.each(options[sel], function(val, text) {
		$.each(text,function(key,value){
			$('.indus_qualfication').append(
				$('<option></option>').val(value).html(key)
				);
		});

	});

});
$(".indus_qualfication").change(function() {
	$('.indus_experience').removeClass('requriedClass');
	$('.indus_qualfication').removeClass('requriedClass');
});
$('input[type=radio][name=formalqulification]').change(function() {
    if (this.value == 'Yes') {
        $('.radio-yes-custom').removeClass('hide');
    }
    else if (this.value == 'No') {
        $('.radio-yes-custom').addClass('hide');
    }
});

$('.file_upload').on('change', function() {
    let size = this.files[0].size; // this is in bytes
    let yourLimit = 20*1048576;
    if (size > yourLimit) {
    	$('.selectionShareable.input_cv').addClass('requriedClass');
    	$('.fileupload_res').prop('disabled', true);
        alert('Try to upload file less than : 20 MB');
    }
});
setTimeout(function() {
    $('#flash_message').fadeOut(3000);
}, 5000);