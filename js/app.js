 $(document).ready(function (){ 
	$("#stages .btn").click(function (){
		$("#stages .btn").removeClass('active');
		$(this).addClass('active');
		var level	=	$(this).val();
		$("#level").val(level); 
		$('#Chapter-Change').val('1');
		switch(level){
			case 'easy'   : initiate_easy();    
			break;
			case 'normal' : initiate_normal(); 
			break;
			case 'hard'   : initiate_hard();   
			break; 
		}
		
	})
	var con_time=	$('#consume_time').val(); 
	initiate_easy	=	function (){ $('#Box').html(generat_matter(easy_lessions.lession1)); }  
	initiate_normal	=	function (){ $('#Box').html(generat_matter(normal_lessions.lession1));  }  
	initiate_hard	=	function (){ $('#Box').html(generat_matter(hard_lessions.lession1)); } 
	  
	$('#start_test').click(function(){ 
		$("#timer").html('<span id="minute"></span><span class="colon">:</span><span id="second"></span>');
		var time	=	$("#time").val();
		var start 	=	setInterval(function () {
			if(time <=1){
				clearInterval(start); 
				$("#timer").html('<span id="timeout">Time Out</span>');
				generate_result();
			}
			var minute	=	Math.floor((time)/60);
			var second  =	(time)%60;
			$("#minute").text( (minute < 10) ? "0"+minute : minute  );
			$("#second").text( (second < 10) ? "0"+second : second  );
			time--;
			show_currentspeed();
		}, 1000);
		$("#text-editor").focus();
	})
	$('#text-editor').keyup(function(e){
		//if(e.which==32)  
		var txt		=	$("#text-editor").text();
		var words 	= 	txt.split(" "); 
		var id = 1;
		$('#Box span').removeClass('aab');
		$.each(words, function(i, v) {
			currnt		= i+1;	nxt= currnt+1;
			act_word 	= $('#word_'+currnt).text();
			v 		 	= v.trim();
			console.log(v+'=='+act_word)
			if(v == act_word) {  
				$('#word_'+currnt).addClass('sahi').removeClass('galat');
			} else{
				$('#word_'+currnt).addClass('galat').removeClass('sahi');;
			}
		});	
		 
		//$('#word_'+nxt).addClass('aab');
		
	}) 
	generate_result	=	function (){
		var time	=	$("#time").val();
		var words   = $("#Box").text().split(" ");
		var mywords = $("#text-editor").text().split(" ");
		len			= words.length;
		mylen		= mywords.length; 
		console.log(len);
        //alert(len);
        //alert(mywords);
		console.log(mylen);
		var speed = (mylen)/(time/60);
		//alert("Your speed is "+speed);
        //LinesIAdded
        $('#net_speed').html(speed);
        $('#net_speedh').val(speed);
        $('#tot_keystrock').html(mywords.length);
        $('#tot_keystrockh').val(mywords.length);
		var wrong =	$('.galat').length;
		$('#result_modal').modal({ keyboard: false })
		$('#result_modal').modal('show');
		$("#speedshow").html(speed);
        var rightt = $('.sahi').length;
        var accuracy = (rightt/mylen)*100;
        $('#accu').html(accuracy.toFixed(2));
        //Code for JAVASCRIPT VALUES TO PHP
        $('#accuh').val(accuracy.toFixed(2));
	} 
	changeChapter	=	function (no){
		if(no > 1 && no < 10){
			var lsn = 'lession'+no; 
			var level	=	$("#level").val();  
			switch(level){
				case 'easy'   : $('#Box').html(generat_matter(easy_lessions[lsn]))   
				break;
				case 'normal' : $('#Box').html(generat_matter(normal_lessions[lsn]))
				break;
				case 'hard'   : $('#Box').html(generat_matter(hard_lessions[lsn]))  
				break; 
			}
			
		}
		else{
			console.log('Not a value '+no);
		}
		return; 
	} 
	show_currentspeed = function(){
		var time	=	$("#time").val();
		var mywords = $("#text-editor").text().split(" ");
		mylen		= mywords.length; 
		var speed = Math.floor((mylen)/(con_time/60));
		$("#currnt_speed").html("Current Speed is: "+speed);
		$('#consume_time').val(con_time++);
		 
	}    
 }) 
 
function generat_matter(txt){
	var words = txt.split(" "); 
	var out		=	'';
	var id = 1;
	$.each(words, function(i, v) {
		out += "<span id='word_"+(id++)+"'>" + v + "</span> ";
	});
	return out;
 }
  
function tweetit(){
    var accuracyy = document.getElementById('accu').innerText;
var netspeedd = document.getElementById('net_speed').innerText;
var totk= document.getElementById('tot_keystrock').innerText;
var phrase = "My Typing Result is. Accuracy: " + accuracyy + ". Net Speed: " + netspeedd + ". Total Keystrokes: " +totk;
  var tweetUrl = 'https://twitter.com/share?text=' +
    encodeURIComponent(phrase)+
    '&url=' +
    'http://www.typingtutor.com/';
    
  window.open(tweetUrl);
}

  
  
  
  
  
  
  
  
  
  
  
