<nav>
    <ul>
        <li class="angle-shape"><a href="/">Home</a></li>
        <li class="angle-shape drop_arrow"><a href="javascript:void(0);">About Us</a>
            <ul class="disturb_menu d-none">
                <li class="sub-menu-li"><a href="javascript:void(0);">Our Team</a></li>
                <li class="sub-menu-li"><a href="javascript:void(0);">Organogram</a></li>
            </ul>
        </li>
        <li class="angle-shape"><a href="/external_pages">Virtual Internship</a></li>
<!--        <li class="angle-shape"><a href="javascript:void(0);">What We Do</a></li>-->
        <li class="angle-shape drop_arrow text-capitalize"><a href="javascript:void(0);">Departments</a>
<!--        <li class="angle-shape drop_arrow"><a href="collections/all.html">DEPARTMENTS</a>-->
            <ul class="disturb_menu d-none">


                <li class="sub-menu mega-menu-img sub-menu-li">
                    <a href="/front_added/pdf/digital_electronics.pdf"><img
                            src="<?= $rootDir ?>cdn/shop/collections/p3f10c.png?v=1698470305"
                            alt="Featured Books" loading="lazy"/></a>
                    <span><a href="/front_added/pdf/digital_electronics.pdf" title="">Featured Books</a> </span>
<!--                    <span><a href="collections/featured-books.html" title="">Featured Books</a> </span>-->
                </li>


                <li class="sub-menu mega-menu-img sub-menu-li">
                    <a href="/front_added/pdf/com-113-intro-to-computer-programming-theory.pdf"><img
                            src="<?= $rootDir ?>cdn/shop/collections/2d8ec.png?v=1698470765"
                            alt="Best Sellers" loading="lazy"/></a>
                    <span><a href="/front_added/pdf/com-113-intro-to-computer-programming-theory.pdf" title="">Best Sellers</a> </span>
<!--                    <span><a href="collections/best-sellers.html" title="">Best Sellers</a> </span>-->
                </li>


                <li class="sub-menu mega-menu-img sub-menu-li">
                    <a href="collections/most-viewed.html"><img
                            src="<?= $rootDir ?>cdn/shop/collections/p880c1.png?v=1698470737"
                            alt="Most Viewed" loading="lazy"/></a>
                    <span><a href="javascript:void(0);" title="">Most Viewed</a> </span>
<!--                    <span><a href="collections/most-viewed.html" title="">Most Viewed</a> </span>-->
                </li>


                <li class="mega-menu-li"><a class="menu-title text-capitalize" href="javascript:void(0);">Departments In Our Institute</a>
<!--                <li class="mega-menu-li"><a class="menu-title" href="collections.html">DEPARTMENTS IN OUR INSTITUTE</a>-->
                    <ul>

                        <?php
                        // Ensure database connection is available
                        if (!isset($conn)) {
                            die("Database connection error.");
                        }

                        // Fetch departments from the database
                        $sql = "SELECT id, book_id, dep_name FROM departments";
                        $result = $conn->query($sql);

                        // Check if the query was successful
                        if ($result && $result->num_rows > 0) {
                            echo '<ul>'; // Start the unordered list
                            while ($row = $result->fetch_assoc()) {
                                $book_id = $row['book_id'];
                                $dep_name = htmlspecialchars($row['dep_name']); // Sanitize the department name for HTML output
                                $link = $siteUrl . 'departments/pages?id=' . $book_id; // Construct the link with the book_id as a GET parameter

                                // Generate the list item with the link
                                echo '<li><a href="' . $link . '">' . $dep_name . '</a></li>';
                            }
                            echo '</ul>'; // End the unordered list
                        } else {
                            echo 'No departments found.';
                        }
                        ?>


                    </ul>
                </li>


            </ul>
        </li>
        <li class="angle-shape drop_arrow"><a href="javascript:void(0);">Our Resources</a>
            <ul class="disturb_menu d-none">
                <li class="sub-menu-li"><a href="javascript:void(0);">Online Databases</a></li>
                <li class="sub-menu-li"><a href="javascript:void(0);">Institution-Based</a></li>
                <li class="sub-menu-li"><a href="javascript:void(0);">E-Books Databases</a></li>
            </ul>
        </li>
<!--        <li class="angle-shape"><a href="javascript:void(0);">Back to Website</a></li>-->
    </ul>
</nav>
<script>
    setTimeout(function () {
        $('.disturb_menu').removeClass('d-none');
    }, 2000);


    $('.mega-menu-li').parent('ul').addClass('mega-menu');
    $('.sub-menu-li').parent('ul').addClass('submenu');

    // remove product cart icon
    $(document).ready(function() {
        $('li:has(.theme-product-action-btn)').remove();
    });

    // change all collections/all.html link occurance to javascript:void(0);
    $(document).ready(function() {
        $('a[href="collections/all.html"]').attr('href', 'javascript:void(0);');
    });

</script>