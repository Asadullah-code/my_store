<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
  $(document).ready(function () {
    var path = window.location.pathname;
    var page = path.split("/").pop();

    // Remove active class from all navigation links
    $('.nav-link').removeClass('active');

    // Add active class to the relevant navigation link
    $('a[href="' + page + '"]').addClass('active');
  });
</script>
<script>
    // Add a class to trigger the fade-in effect
    document.addEventListener('DOMContentLoaded', function () {
        var element = document.querySelector('.fade-in');
        element.classList.add('show');
    });
</script>


