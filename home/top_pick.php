<?php
// Your SQL query to fetch all records from the e_book table
$sql = "SELECT * FROM e_book"; // Adjust the table name if different
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        // Extract the data from the current row
        $bookId = $row['id'];
        $bookName = $row['book_name'];
        $bookLink = $row['book_link'];
        $bookCover = $row['book_cover'];
        $author = $row['author'];
        ?>

        <!-- HTML code for displaying each book -->
        <div class="col-md-12">
            <div class="40344359665744 theme-product theme-product-action-on-hover mb-30
                        theme-product-action-middle theme-product-countdown-bottom product-wrapper-class">
                <div class="theme-product-inner icon_bg grid__style__2">
                    <div class="theme-product-image-wrap product-color">
                        <div class="theme-product-image">
                            <div class="theme-product-cus-tab icon_bg_img">
                                <a href="<?=$bookLink?>" class="theme-product-image">
                                    <img class="popup_cart_image" src="<?php echo htmlspecialchars($bookCover); ?>"
                                         alt="<?php echo htmlspecialchars($bookName); ?>">
                                </a>
                                <div class="theme-product-action">
                                    <ul>
                                        <li>
                                            <a href="<?=$bookLink?>"
                                               onclick="quiqview('<?php echo htmlspecialchars($bookName); ?>')"
                                               data-toggle="modal" data-target="#exampleModal">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                                                    <path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z"
                                                          fill="none" stroke="currentColor"
                                                          stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="32"/>
                                                    <circle cx="256" cy="256" r="80"
                                                            fill="none" stroke="currentColor"
                                                            stroke-miterlimit="10" stroke-width="32"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <!-- Additional action items -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="theme-product-content content__center">
                        <div class="theme-product-content-inner">
                            <div class="theme-product-categories">
                                <a href="#" class="remove_href"><?php echo htmlspecialchars($author); ?></a>
                            </div>
                            <h4 class="theme-product-title popup_cart_title">
                                <a href="<?=$bookLink?>"><?php echo htmlspecialchars($bookName); ?></a>
                            </h4>
                        </div>
                        <div class="theme-product-action">
                            <ul>
                                <!-- Additional action items -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
    }
} else {
    echo "No records found.";
}
?>
