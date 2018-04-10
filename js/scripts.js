$(document).ready(function () {

//+++++++++++++++++++++++++++++++++++++++++++
//     Jquery Code Start
//+++++++++++++++++++++++++++++++++++++++++++     
$( function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 50000,
            values: [ 0, 227564 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "USD" +  ui.values[ 0 ] + " - USD" + ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "USD" + $( "#slider-range" ).slider( "values", 0 ) +
            " - USD" + $( "#slider-range" ).slider( "values", 1 ) );
    } );
  
});