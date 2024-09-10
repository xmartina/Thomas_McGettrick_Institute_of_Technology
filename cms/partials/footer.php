<?php
// Check if the current URL contains '/librarian/'
if (strpos($_SERVER['REQUEST_URI'], '/librarian/') !== false) { ?>
<footer class="d-footer">
    <div class="row align-items-center justify-content-between">
        <div class="col-auto">
            <p class="mb-0">© 2024 <?=$site_name?></p>
        </div>
        <div class="col-auto">
            <p class="mb-0">Made by <span class="text-primary-600">ServerBase</span></p>
        </div>
    </div>
</footer>
</main>
<?php } ?>
<!-- jQuery library js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/jquery-3.7.1.min.js"></script>
<!-- Bootstrap js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Apex Chart js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/apexcharts.min.js"></script>
<!-- Data Table js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/dataTables.min.js"></script>
<!-- Iconify Font js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/iconify-icon.min.js"></script>
<!-- jQuery UI js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/jquery-ui.min.js"></script>
<!-- Vector Map js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/jquery-jvectormap-2.0.5.min.js"></script>
<script src="<?=$siteUrl?>cms/assets/js/lib/jquery-jvectormap-world-mill-en.js"></script>
<!-- Popup js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/magnifc-popup.min.js"></script>
<!-- Slick Slider js -->
<script src="<?=$siteUrl?>cms/assets/js/lib/slick.min.js"></script>
<!-- main js -->
<script src="<?=$siteUrl?>cms/assets/js/app.js"></script>

<script>
    // ================== Password Show Hide Js Start ==========
    function initializePasswordToggle(toggleSelector) {
        $(toggleSelector).on('click', function() {
            $(this).toggleClass("ri-eye-off-line");
            var input = $($(this).attr("data-toggle"));
            if (input.attr("type") === "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    }
    // Call the function
    initializePasswordToggle('.toggle-password');
    // ========================= Password Show Hide Js End ===========================
</script>

</body>
</html>
