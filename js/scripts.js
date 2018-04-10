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

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
         to highlight the button that controls the panel */
        this.classList.toggle("active");

        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}