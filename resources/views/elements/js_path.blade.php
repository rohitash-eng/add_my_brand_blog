<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/bootsnav.js') }}" defer></script>
<script src="{{ asset('js/viewportchecker.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}" defer></script>
<script src="{{ asset('js/wysihtml5-0.3.0.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-wysihtml5.js') }}" defer></script>
<script src="{{ asset('js/jQuery.style.switcher.js') }}" defer></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>

<script type="text/javascript">
$(document).ready(function(){
    $('#styleOptions').styleSwitcher();
    $(".loadClDev").click(function(){alert("come here")
        //$("#popupContent").load("http://localhost/blog/public/register");
        //$('#signup').modal('show'); // AJAX LOAD IN DIV ROHITASH
    });
});
function openRightMenu(){
    document.getElementById("rightMenu").style.display="block";
}
function closeRightMenu(){
    document.getElementById("rightMenu").style.display="none";
}
</script>