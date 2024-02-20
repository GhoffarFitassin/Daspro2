{{-- ajax --}}
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
<script>
    $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {

            $('#provinsi').on('change', function() {
                let id_provinsi = $('#provinsi').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getkabupaten') }}',
                    data: {
                        id_provinsi: id_provinsi
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kabupaten').html(msg);
                        $('#kecamatan').html(
                            '<option selected disabled value="">--- Select District ---</option>'
                            );
                        $('#desa').html(
                            '<option selected disabled value="">--- Select Village ---</option>'
                            );
                    },
                    error: function(data) {
                        console.log('error:', data)
                    },
                })
            })

            $('#kabupaten').on('change', function() {
                let id_kabupaten = $('#kabupaten').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getkecamatan') }}',
                    data: {
                        id_kabupaten: id_kabupaten
                    },
                    cache: false,

                    success: function(msg) {
                        $('#kecamatan').html(msg);
                        $('#desa').html(
                            '<option selected disabled value="">--- Select Village ---</option>'
                            );
                    },
                    error: function(data) {
                        console.log('error:', data)
                    },
                })
            })

            $('#kecamatan').on('change', function() {
                let id_kecamatan = $('#kecamatan').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getdesa') }}',
                    data: {
                        id_kecamatan: id_kecamatan
                    },
                    cache: false,

                    success: function(msg) {
                        $('#desa').html(msg);
                    },
                    error: function(data) {
                        console.log('error:', data)
                    },
                })
            })
        })
    });
</script>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="/bootstrap/js/popper.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="/plugins/highlight/highlight.pack.js"></script>
<script src="/assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="/plugins/table/datatable/datatables.js"></script>
<script src="/plugins/table/datatable/custom_miscellaneous.js"></script>
<script src="/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
<script src="/plugins/select2/select2.min.js"></script>
{{-- <script src="/plugins/select2/custom-select2.js"></script> --}}
<script src="/plugins/flatpickr/flatpickr.js"></script>
<!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
<script src="/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
<script src="/plugins/table/datatable/button-ext/jszip.min.js"></script>
<script src="/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
<script src="/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
<script src="/plugins/bootstrap-select/bootstrap-select.min.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!--  BEGIN CUSTOM SCRIPT FILE  -->
<script src="/assets/js/scrollspyNav.js"></script>
<script src="/assets/js/apps/invoice.js"></script>
<script src="/assets/js/forms/bootstrap_validation/bs_validation_script.js"></script>
{{-- <script>
    $('#yt-video-link').click(function() {
        var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
        $('#videoMedia1').modal('show');
        $('<iframe>').attr({
            'src': src,
            'width': '560',
            'height': '315',
            'allow': 'encrypted-media'
        }).css('border', '0').appendTo('#videoMedia1 .video-container');
    });
    $('#vimeo-video-link').click(function() {
        var src = 'https://player.vimeo.com/video/1084537';
        $('#videoMedia2').modal('show');
        $('<iframe>').attr({
            'src': src,
            'width': '560',
            'height': '315',
            'allow': 'encrypted-media'
        }).css('border', '0').appendTo('#videoMedia2 .video-container');
    });
    $('#videoMedia1 button, #videoMedia2 button').click(function() {
        $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
    });
</script> --}}

<script>
    $('#html5-extension').DataTable({
        dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
        buttons: {
            buttons: [{
                    extend: 'copy',
                    className: 'btn'
                },
                {
                    extend: 'csv',
                    className: 'btn'
                },
                {
                    extend: 'excel',
                    className: 'btn'
                },
                // { extend: 'print', className: 'btn' }
            ]
        },
        "oLanguage": {
            "oPaginate": {
                "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
            },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "stripeClasses": [],
        "lengthMenu": [7, 10, 20, 50],
        "pageLength": 7
    });
</script>

<script>
    $(document).ready(function() {
        $('#alter_pagination').DataTable({
            "pagingType": "full_numbers",
            "oLanguage": {
                "oPaginate": {
                    "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
                    "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });
        $("#ph-number").inputmask({
            mask: "+62 99999999999"
        });
        $("#price").inputmask({
            mask: "99999"
        });

        var ss = $(".basic").select2({
            tags: true,
        });
        
        // var f2 = flatpickr(document.getElementById('date1'), {
        //     enableTime: true,
        //     dateFormat: "Y-m-d H:i",
        // });

        window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('select');
        var invalid = $('.select .invalid-feedback');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
                invalid.css('display', 'block');
            } else {
                invalid.css('display', 'none');
                form.classList.add('was-validated');
            }
        }, false);
        });
    }, false);
    });
    
</script>

<!--  END CUSTOM SCRIPT FILE  -->