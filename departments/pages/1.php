<main>
    <div id="shopify-section-template--14595460694096__main" class="shopify-section">
        <div class="list-product-collection pt-100 pt-sm-70 pb-50 pb-sm-20"
             id="section-template--14595460694096__main" data-section="BannerSection">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title text-center mb-65">
                            <h2>Books for Department ID: <?php echo htmlspecialchars($dpt_id); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row theme-products">
                    <?php foreach ($books as $book): ?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div
                                class="theme-product theme-product-action-on-hover mb-30 theme-product-action-middle theme-product-countdown-bottom product-wrapper-class">
                                <div class="theme-product-inner icon_bg grid__style__2">
                                    <div class="theme-product-image-wrap product-color">
                                        <div class="theme-product-image">
                                            <div class="theme-product-cus-tab icon_bg_img">
                                                <a href="<?php echo htmlspecialchars($book['book_link']); ?>"
                                                   class="theme-product-image">
                                                    <img class="popup_cart_image"
                                                         src="<?php echo htmlspecialchars($book['book_cover']); ?>"
                                                         alt="<?php echo htmlspecialchars($book['book_name']); ?>">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="theme-product-content content__center">
                                        <div class="theme-product-content-inner">
                                            <div class="theme-product-categories">
                                                <a href="#"
                                                   class="remove_href"><?php echo htmlspecialchars($book['author']); ?></a>
                                            </div>
                                            <h4 class="theme-product-title popup_cart_title">
                                                <a href="<?php echo htmlspecialchars($book['book_link']); ?>"><?php echo htmlspecialchars($book['book_name']); ?></a>
                                            </h4>
                                            <?php if ($book['book_type'] == 1): ?>
                                                <div class="theme-product-price"><span class="new">PDF</span></div>
                                            <?php else: ?>
                                                <div class="theme-product-price"><span class="new">Link</span></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <style data-shopify>#section-template--14595460694096__main {
                padding-top: 75px;
                padding-bottom: 45px;
            }

            @media (min-width: 768px) and (max-width: 991px) {
                #section-template--14595460694096__main {
                    padding-top: 75px;
                    padding-bottom: 40px;
                }
            }

            @media (max-width: 767px) {
                #section-template--14595460694096__main {
                    padding-top: 60px;
                    padding-bottom: 25px;
                }
            }</style>
    </div>
</main>