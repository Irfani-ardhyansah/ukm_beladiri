<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" href="{{asset('timerFree/ukm.jpg')}}">
        <title>UKM BELA DIRI PSHT</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/bootstrap/bootstrap.min.css')}}">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/ionicons/ionicons.min.css')}}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/animate-css/animate.css')}}">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/slider/slider.css')}}">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/owl-carousel/owl.theme.css')}}">
        <!-- Fancybox -->
        <link rel="stylesheet" href="{{ asset ('timerFree/plugins/facncybox/jquery.fancybox.css')}}">
        <!-- template main css file -->
        <link rel="stylesheet" href="{{ asset('timerFree/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap.css')}}">

        <link href="{{ asset('ubold/tema/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{ asset('ubold/tema/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('ubold/tema/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset('ubold/tema/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('ubold/tema/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('ubold/tema/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
<link href="{{ asset ('ubold/tema/plugins/bootstrap-table/css/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('ubold/tema/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('ubold/tema/css/core.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('ubold/tema/css/components.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('ubold/tema/css/icons.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('ubold/tema/css/pages.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset ('ubold/tema/css/responsive.css')}}" rel="stylesheet" type="text/css" />
<!-- <link href="{{ asset('ubold/tema/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('ubold/tema/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/> -->


        @section('css')
        @show
    </head>
    <body>
        @include('user/header')
        @include('sweetalert::alert')
        @yield('content')
        @include('user/footer')
	<!-- Template Javascript Files
	================================================== -->
	<!-- jquery -->
	<script src="{{ asset ('timerFree/plugins/jQurey/jquery.min.js')}}"></script>
	<!-- Form Validation -->
    <script src="{{ asset ('timerFree/plugins/form-validation/jquery.form.js')}}"></script> 
    <script src="{{ asset ('timerFree/plugins/form-validation/jquery.validate.min.js')}}"></script>
	<!-- owl carouserl js -->
	<script src="{{ asset ('timerFree/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
	<!-- bootstrap js -->
	<script src="{{ asset ('timerFree/plugins/bootstrap/bootstrap.min.js')}}"></script>
	<!-- wow js -->
	<script src="{{ asset ('timerFree/plugins/wow-js/wow.min.js')}}"></script>
	<!-- slider js -->
	<script src="{{ asset ('timerFree/plugins/slider/slider.js')}}"></script>
	<!-- Fancybox -->
	<script src="{{ asset ('timerFree/plugins/facncybox/jquery.fancybox.js')}}"></script>
	<!-- template main js -->
    <script src="{{ asset('timerFree/js/main.js')}}"></script>

    <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>

        <script src="{{ asset('ubold/tema/js/jquery.min.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/detect.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/fastclick.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/jquery.slimscroll.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/jquery.blockUI.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/waves.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/wow.min.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/jquery.nicescroll.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{ asset('ubold/tema/plugins/bootstrap-table/js/bootstrap-table.min.js')}}"></script>
        <script src="{{ asset('ubold/tema/pages/jquery.bs-table.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/jquery.core.js')}}"></script>
        <script src="{{ asset('ubold/tema/js/jquery.app.js')}}"></script>    
        <script src="{{ asset('ubold/tema/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
        <script src="{{ asset('ubold/tema/plugins/switchery/js/switchery.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
        <script src="{{ asset('ubold/tema/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('ubold/tema/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('ubold/tema/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('ubold/tema/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('ubold/tema/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/plugins/autocomplete/jquery.mockjax.js')}}"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/plugins/autocomplete/countries.js')}}"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/pages/autocomplete.js')}}"></script>
        <script type="text/javascript" src="{{ asset('ubold/tema/pages/jquery.form-advanced.init.js')}}"></script>


        <!-- <script src="{{ asset('ubold/tema/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.bootstrap.js')}}"></script>

<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.scroller.min.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.colVis.js')}}"></script>
<script src="{{ asset('ubold/tema/plugins/datatables/dataTables.fixedColumns.min.js')}}"></script>

<script src="{{ asset('ubold/tema/pages/datatables.init.js')}}"></script> -->
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js')}}"></script>
<script type="text/javascript">
    $(function() {
        var oTable = $('#table-anggota').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("/data-anggota") }}'
            },
            columns: [
                {data: 'nama_anggota', name:'nama_anggota'},
                {data: 'alamat', name:'alamat'},
                {data: 'angkatan', name:'angkatan'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
        });
    });
</script>

<script type="text/javascript">
function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#file_preview').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
}
$("#file").change(function(){
   bacaGambar(this);
});    
</script>


    @section('js')
    @show
 	</body>
</html>