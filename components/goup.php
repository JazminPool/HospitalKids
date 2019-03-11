<button onclick="topFunction()" id="btnUp" class="btn btn_round" title="Ir al inicio">
    <i class="far fa-long-arrow-alt-up"></i>
</button>

<style>
    #btnUp {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 20px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        color: white; 
        background: #582222;
        cursor: pointer;
    }

    #btnUp:hover {
        background-color: #582222e0; /* Add a dark-grey background on hover */
    }

</style>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};


    function scrollFunction() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            $("#btnUp").fadeIn(1200);
            document.getElementById("btnUp").style.display = "block";
        } else {
            //$("#btnUp").fadeOut(1500);
            document.getElementById("btnUp").style.display = "none";
           
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

</script>