var ContactUs = function () {

    return {
        //main function to initiate the module
        init: function () {
			var map;
			$(document).ready(function(){
			  map = new GMaps({
				div: '#map',
	            lat: 2.9948682052430677,
				lng: 101.81808787301885,
			  });
			   var marker = map.addMarker({
		            lat: 2.9948682052430677,
					lng: 101.81808787301885,
		            title: 'Quwwa Group (M) Sdn. Bhd.',
		            infoWindow: {
		                content: "<b>Quwwa Group (M) Sdn. Bhd.</b><br/> No. 32, Jln Kajang Perdana 2/3, <br /> Taman Kajang Perdana, <br />43000 Kajang, Selangor <br />"
		            }
		        });

			   marker.infoWindow.open(map, marker);
			});
        }
    };

}();