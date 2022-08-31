    <!--************
            Footer start
        *************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © 2022 <strong>Pemerintah Kabupaten Jombang - Dinas Pemberdayaan Masyarakat dan Desa.</strong> All Rights Reserved
            </p>
        </div>
    </div>
    <!--************
            Footer end
        *************-->

    </div>
    <!--************
        Main wrapper end
    *************-->

    <!--************
        Scripts
    *************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/apexchart/apexchart.js"></script>


    <!-- Chart Morris plugin files -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/raphael/raphael.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/morris/morris.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/morris-init.js"></script>

    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js">
    </script>
    <!-- Material color picker -->
    <script
        src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <!-- pickdate -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/pickadate/picker.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/pickadate/picker.time.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/pickadate/picker.date.js"></script>
    <!-- Daterangepicker -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/pickadate-init.js"></script>

    <script src="<?= base_url() ?>assets/assets/assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/dashboard/dashboard-1.js"></script>

    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/owl-carousel/owl.carousel.js"></script>

    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/custom.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/dlabnav-init.js"></script>
    
    <!-- Datatable -->
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/assets/assets/assets_dash/js/plugins-init/datatables.init.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?=base_url()?>assets/assets/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print"],
        language: {
			paginate: {
                next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' 
            }
        },
        searching: true,
		paging:true,
		select: true,
		info: true,         
		lengthChange: false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });

    $('#mdate2').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });

    $('#mdate3').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });

    
    </script>


    <script>
function cardsCenter() {

    /*  testimonial one function by = owl.carousel.js */



    jQuery('.card-slider').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        //center:true,
        slideSpeed: 3000,
        paginationSpeed: 3000,
        dots: true,
        navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            800: {
                items: 1
            },
            991: {
                items: 1
            },
            1200: {
                items: 1
            },
            1600: {
                items: 1
            }
        }
    })
}

jQuery(window).on('load', function() {
    setTimeout(function() {
        cardsCenter();
    }, 1000);
});
    </script>

    </body>

    </html>