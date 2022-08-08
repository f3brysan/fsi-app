<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                2022 © Federasi Supra Indonesia.
            </div>            
        </div>
    </div>
</footer>

</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->

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

<!-- Datatable init js -->
<script src="/../assets/js/pages/datatables.init.js"></script>

<!-- Required datatable js -->
<script src="/../assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/../assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/../assets/js/app.js"></script>
<script src="/../assets/js/pages/datatables.init.js"></script>

{{-- Owl Caraousel --}}
<script src="/../assets/libs/owl.carousel/owl.carousel.min.js"></script>

<!-- Responsive examples -->
<script src="/../assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/../assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Buttons examples -->
<script src="/../assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/../assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/../assets/libs/jszip/jszip.min.js"></script>
<script src="/../assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="/../assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="/../assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/../assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/../assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="/../assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/../assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>

<script>
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>

<script>
    $(document).ready( function () {
    $('#adartTable').DataTable();
} );
</script>

<script>
    $(document).ready( function () {
    $('#regionalsTable').DataTable();
} );
</script>

{{-- JAVASCRIPT UNTUK PROVINSI KABUPATEN/KOTA35 --}}
<script>
$('#provinsi').change(function(){
    var province_id = $(this).val();    
    if(province_id){
        $.ajax({
           type:"GET",
           url:"/getkabupaten?province_id="+province_id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#kabupaten").empty();               
                $("#kabupaten").append('<option>--- Pilih Kabupaten ---</option>');               
                $.each(res,function(name,id){
                    $("#kabupaten").append('<option value="'+id+'">'+name+'</option>');
                });
            }else{
               $("#kabupaten").empty();              
            }
           }
        });
    }else{
        $("#kabupaten").empty();
    }      
   });
</script>



</body>
</html>
