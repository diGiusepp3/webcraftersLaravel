
<footer class="w-100 d-flex flex-row justify-content-between bg-primary text-white text-center">
    <div class="copyright text-center w-100">
        <small>&copy; Copyright {{Date('Y')}} Webcrafters<br> Made with Laravel</small>
    </div>
</footer>
<script>
    // jQuery-functie om het gebruikersmenu te tonen/verbergen
    $(document).ready(function() {
        $("#toggleUserMenuButton").click(function() {
            $("#userMenu").toggle();
        });
    });
</script>