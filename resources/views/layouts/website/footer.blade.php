@include('layouts.website.footerconatct')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="website/js/bootstrap.min.js"></script>
<script src="website/js/carousel.js"></script>

<script>
    $(".navbar-expand-lg .navbar-nav .nav-item nav-link").on("click", function() {
      $(".navbar-expand-lg .navbar-nav .nav-item nav-link").removeClass("active");
      $(this).addClass("active");
    });
</script>