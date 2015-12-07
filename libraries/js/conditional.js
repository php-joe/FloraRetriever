$( document ).ready(function() {

    //Inputs that determine what fields to show
		var useGeoLocation = $('#live_form input:radio[name=useGeoLocation]');
		var isCorrect = $('#live_form input:radio[name=isCorrect]');
    var isCP= $('#live_form input:radio[name="isCorrect"]').parent();

		//Wrappers for all fields
		var yesGL = $('#live_form textarea[name="geoLocation"]').parent();
    var yesGW = $('#live_form textarea[name="geoWeather"]').parent();
    var noGL = $('#live_form textarea[name="userLocation"]').parent();
    var noGW = $('#live_form textarea[name="userWeather"]').parent();
    var yesAL = $('#live_form textarea[name="additionalLocation"]').parent();
    var yesAW = $('#live_form textarea[name="additionalWeather"]').parent();
    var noCL = $('#live_form textarea[name="userLocation"]').parent();
    var noCW = $('#live_form textarea[name="userWeather"]').parent();
    var noCL2 = $('#live_form textarea[name="userLocation"]');
    var noCW2 = $('#live_form textarea[name="userWeather"]');
    var all=yesGL.add(yesGW).add(noGL).add(noGW).add(yesAL).add(yesAW).add(noCL).add(noCW);  //shortcut for all wrapper elements


		useGeoLocation.change(function(){
			var value=this.value;
			all.addClass('hidden'); //hide everything and reveal as needed


			if (value == 'yes'){
        all.addClass('hidden');
				yesGL.removeClass('hidden'); //show Geo Location
        yesGW.removeClass('hidden'); //show Geo Weather
        $("#isCH").removeClass('hidden');





        isCorrect.change(function(){
          var value2=this.value;
          if (value2 == 'no'){
            noGL.removeClass('hidden');
            noGW.removeClass('hidden');
            yesAL.addClass('hidden');
            yesAW.addClass('hidden');
            yesGL.addClass('hidden');
            yesGW.addClass('hidden');
            noCL2.prop('required',true);
            noCW2.prop('required',true);
						$("#userLocation").change(function() {
					 		$('#location').val(this.value);
			 			});
						$("#userWeather").change(function() {
					 		$('#weather').val(this.value);
			 			});
          }
          else if (value2 == "additionalInfo"){
            yesAL.removeClass('hidden');
            yesAW.removeClass('hidden');
            noGL.addClass('hidden');
            noGW.addClass('hidden');
            yesGL.removeClass('hidden');
            yesGW.removeClass('hidden');
            noCL2.removeAttr('required');
            noCW2.removeAttr('required');
						$("#additionalLocation").change(function() {
							$("#location").val( $("#geoLocation").val() + '  |  ' + $("#additionalLocation").val());
						});
						$("#additionalLocation").val(function() {
							$("#location").val( $("#geoLocation").val());
						});
						$("#additionalWeather").change(function() {
							$('#weather').val( $('#geoWeather').val() + '  |  ' + $('#additionalWeather').val());
						});
						$("#additionalWeather").val(function() {
							$('#weather').val( $('#geoWeather').val());
						});
          }
          else {
            yesAL.addClass('hidden');
            yesAW.addClass('hidden');
            noGL.addClass('hidden');
            noGW.addClass('hidden');
            yesGL.removeClass('hidden');
            yesGW.removeClass('hidden');
            noCL2.removeAttr('required');
            noCW2.removeAttr('required');


					 $('#location').val($('#geoLocation').val());
					 $('#weather').val($('#geoWeather').val());
            }
        });

      }
      else {
        all.addClass('hidden');
        $("#isCH").addClass('hidden');
        $("#isCH").addClass('hidden');
        noGL.removeClass('hidden');
        noGW.removeClass('hidden');
        $('input[name="isCorrect"]').attr('checked',false);
        noCL2.prop('required',true);
        noCW2.prop('required',true);
				$("#userLocation").change(function() {
					$('#location').val(this.value);
				});
				$("#userWeather").change(function() {
					$('#weather').val(this.value);
				});
				}
			});



});
