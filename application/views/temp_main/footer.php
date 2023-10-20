<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">Copyright LPM Universitas Subang &copy; 2023</span>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
    <!-- END: Page Vendor JS-->
    
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->


    <!-- BEGIN: Page JS-->
    <script src="<?= base_url(); ?>assets/app-assets/js/scripts/tables/table-datatables-advanced.js"></script>
    <script src="<?= base_url(); ?>assets/app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
    <!-- END: Page JS-->

    <!-- Plugin Tambahan Manual -->
    <script src="<?= base_url(); ?>assets/plugins/js/sweetalert.min.js"></script>
    <!-- Plugin Tambahan Manual -->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    
</body>
<!-- END: Body-->

</html>