

<!-- JAVASCRIPT -->
<script src="/../assets/libs/jquery/jquery.min.js"></script>
<script src="/../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/../assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/../assets/libs/simplebar/simplebar.min.js"></script>
<script src="/../assets/libs/node-waves/waves.min.js"></script>
<script src="/../assets/libs/select2/js/select2.min.js"></script>
<script src="/../assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="/../assets/js/pages/form-advanced.init.js"></script>
<script src="/../assets/libs/dropzone/min/dropzone.min.js"></script>

{{-- Owl Caraousel --}}
<script src="/../assets/libs/owl.carousel/owl.carousel.min.js"></script>






<script>
    ClassicEditor
            .create( document.querySelector( '#content' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#category-img-tag').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#cat_image").change(function(){
        readURL(this);
    });
</script>


</body>
</html>
