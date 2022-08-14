 window.onkeydown = function(event){


		changeColor();

		var hh = event.which;

		function changeColor(){

			var div =   String.fromCharCode(event.which);
			 if(event.which === 32)
            {
                div = "space";
            }

            if(event.which === 8)
            {
                div = "bckspace";
            }
            var get = document.getElementById(div);
            get.style.background = '#33aafa';

            setTimeout(function (){
                                
            get.style.background = "#59cb59";

                    },150);

            };

		if((hh > 47 && hh<58 ) || (hh > 64 && hh<91) || (hh > 96 && hh<123) || hh == 32)
		{		
			//we are now validating::
			console.log(event.which);
			var inputToNum = String.fromCharCode(hh).toLowerCase();



			console.log(inputToNum);

			// alert(word);
			// alert(count);


			//we need to convert the value from the spans to variable first::

			var cnt = count+1;
			highlight(cnt);


			var check = word.charAt(count);		
			 

			if(inputToNum === check)
				{	//this is matched
					var getSpan = document.getElementById('span'+count);
					getSpan.style.color = 'blue';
					getSpan.style.background = 'none';
					matched++;
					console.log('total matched' +matched);
					count++;
					updateResult(matched , error , word.length);
					checkNewWord();
					


				}
			else
				{
					console.log('not matched');
					var getSpan = document.getElementById('span'+count);
					getSpan.style.background = 'red';
					getSpan.style.color = 'white';
					error++;
					console.log('total errors are' + error);
					count++;
					updateResult(matched , error , word.length);
					checkNewWord();


				}
			


		}

	}