<?php
include_once ($rootDir.'include/functions.php');
?>

<!doctype html>
<!--[if IE 9]>
<html class="ie9 no-js supports-no-cookies" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js supports-no-cookies" lang="en"> <!--<![endif]-->
<head>
    <!-- Basic and Helper page needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#dd321e">
    <link rel="canonical" href="/"><!-- Title and description -->

    <title><?=$site_name?> | <?=$site_dec?></title>

    <meta property="og:type" content="website">
    <meta property="og:title" content="Online Store">
    <meta property="og:description" content="">

    <meta property="og:url" content="/">
    <meta property="og:site_name" content="Dunki">


    <meta name="twitter:card" content="summary">


    <meta name="twitter:title" content="Online Store">
    <meta name="twitter:description" content="">

    <!-- CSS -->
    <link href="/cdn/shop/t/9/assets/timber.scss570e.css?v=154672969426150041571698938336" rel="stylesheet"
          type="text/css" media="all"/>
    <link href="/cdn/shop/t/9/assets/bootstrap.min528d.css?v=19868337340211324411698938058" rel="stylesheet"
          type="text/css" media="all"/>


    <link href="/cdn/shop/t/9/assets/icons.min4e41.css?v=144771626144460745771698938059" rel="stylesheet" type="text/css"
          media="all"/>


    <link href="/cdn/shop/t/9/assets/icofont.minba8d.css?v=49818375117710154861698938058" rel="stylesheet"
          type="text/css" media="all"/>


    <link href="/cdn/shop/t/9/assets/animate9500.css?v=114383688823196960631698938058" rel="stylesheet" type="text/css"
          media="all"/>


    <link href="/cdn/shop/t/9/assets/slick-slidera987.css?v=98065853508920828541698938060" rel="stylesheet"
          type="text/css" media="all"/>


    <link href="/cdn/shop/t/9/assets/plugins5006.css?v=122149010790743861711698938059" rel="stylesheet" type="text/css"
          media="all"/>
    <link href="/cdn/shop/t/9/assets/stylea2a8.css?v=23287745902246098161698938060" rel="stylesheet" type="text/css"
          media="all"/>

    <!-- Theme Default CSS -->
    <link href="/cdn/shop/t/9/assets/theme-default8cb8.css?v=87801545591066565141698938089" rel="stylesheet"
          type="text/css" media="all"/>
    <!-- Make your theme CSS calls here -->
    <link href="/cdn/shop/t/9/assets/theme-custom0acb.css?v=63313606314167933051698938089" rel="stylesheet"
          type="text/css" media="all"/>


    <link href="/cdn/shop/t/9/assets/theme-responsive09ed.css?v=149555564482142597651698938060" rel="stylesheet"
          type="text/css" media="all"/>
    <link href="/cdn/shop/t/9/assets/skin-and-color85c1.css?v=64489753365287532231698938089" rel="stylesheet"
          type="text/css" media="all"/>
    <!-- Header hook for plugins -->
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script>
    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/11825648/digital_wallets/dialog">
    <script async="async" src="checkouts/internal/preloadse558.js?locale=en-NG"></script>
    <script async="async" src="../shop.app/checkouts/internal/preloadsd44f.js?locale=en-NG&amp;shop_id=11825648"
            crossorigin="anonymous"></script>
    <script id="shopify-features" type="application/json">{
            "accessToken": "db528085e18f832f7a255aedc5c52e4f",
            "betas": [
                "rich-media-storefront-analytics"
            ],
            "domain": "dunki-demo.myshopify.com",
            "predictiveSearch": true,
            "shopId": 11825648,
            "smart_payment_buttons_url": "https:\/\/dunki-demo.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js",
            "dynamic_checkout_cart_url": "https:\/\/dunki-demo.myshopify.com\/cdn\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js",
            "locale": "en"
        }</script>
    <script>var Shopify = Shopify || {};
        Shopify.shop = "assyrian-3.myshopify.com";
        Shopify.locale = "en";
        Shopify.currency = {"active": "GBP", "rate": "1.0"};
        Shopify.country = "NG";
        Shopify.theme = {"name": "Dunki-v1-0-1[h4][Submited]", "id": 122479902800, "theme_store_id": null, "role": "main"};
        Shopify.theme.handle = "null";
        Shopify.theme.style = {"id": null, "handle": null};
        Shopify.cdnHost = "dunki-demo.myshopify.com/cdn";
        Shopify.routes = Shopify.routes || {};
        Shopify.routes.root = "/";</script>
    <script type="module">!function (o) {
            (o.Shopify = o.Shopify || {}).modules = !0
        }(window);</script>
    <script>!function (o) {
            function n() {
                var o = [];

                function n() {
                    o.push(Array.prototype.slice.apply(arguments))
                }

                return n.q = o, n
            }

            var t = o.Shopify = o.Shopify || {};
            t.loadFeatures = n(), t.autoloadFeatures = n()
        }(window);</script>
    <script id="shop-js-features" type="application/json">{
            "compact": true,
            "defer_modal_on_autofill": true
        }</script>
    <script id="shop-js-analytics" type="application/json">{
            "pageType": "index"
        }</script>
    <script>(function () {
            function asyncLoad() {
                var urls = ["https:\/\/cdn1.judge.me\/assets\/installed.js?shop=assyrian-3.myshopify.com"];
                for (var i = 0; i < urls.length; i++) {
                    var s = document.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = urls[i];
                    var x = document.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                }
            };
            if (window.attachEvent) {
                window.attachEvent('onload', asyncLoad);
            } else {
                window.addEventListener('load', asyncLoad, false);
            }
        })();</script>
    <script id="__st">var __st = {
            "a": 11825648,
            "offset": -14400,
            "reqid": "29bf431c-5a0c-444f-b793-4722257f78e0-1722634485",
            "pageurl": "dunki-demo.myshopify.com\/",
            "u": "fd7f099d66df",
            "p": "home"
        };</script>
    <script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
    <script id="captcha-bootstrap">!function () {
            'use strict';
            const t = 'contact', e = 'account', n = 'new_comment',
                o = t => t.map((([t, e]) => `form[action*='/${t}']:not([data-nocaptcha='true']) input[name='form_type'][value='${e}']`)).join(',');

            function c(t, e) {
                try {
                    const n = window.sessionStorage;
                    for (const [o, c] of Object.entries(JSON.parse(n.getItem(e)))) t.elements[o] && (t.elements[o].value = c);
                    n.removeItem(e)
                } catch {
                }
            }

            const r = 'form_type', s = 'cptcha';

            function a(t) {
                t.dataset[s] = !0
            }

            ((i, m, f, u, d, p, l) => {
                if (0) return;
                let E = !1;
                const _ = (t, e, n) => {
                    const o = i[f][u], c = o.bindForm, r = 'f06e6c50-85a8-45c8-87d0-21a2b65856fe',
                        s = {infoText: 'Protected by hCaptcha', privacyText: 'Privacy', termsText: 'Terms'};
                    if (c) return c(t, r, e, s).then(n);
                    o.q.push([[t, r, e, s], n]), E || (m.body.append(Object.assign(m.createElement('script'), {
                        id: 'captcha-provider',
                        async: !0,
                        src: 'https://cdn.shopify.com/shopifycloud/storefront-forms-hcaptcha/ce_storefront_forms_captcha_hcaptcha.v1.3.3.iife.js'
                    })), E = !0)
                };
                i[f] = i[f] || {}, i[f][u] = i[f][u] || {}, i[f][u].q = [], i[f][d] = i[f][d] || {}, i[f][d].protect = function (t, e) {
                    _(t, void 0, e), a(t)
                }, Object.freeze(i[f][d]), function (i, m, f, u, d, p) {
                    const [l, E, _] = function (c, r, s) {
                        const a = r ? [[t, t], ['blogs', n], ['comments', n], [t, 'customer']] : [],
                            i = c ? [[e, 'customer_login'], [e, 'guest_login'], [e, 'recover_customer_password'], [e, 'create_customer']] : [],
                            m = [...a, ...i], f = o(m), u = o(a), d = s && o(m.filter((([t, e]) => s.includes(e)))),
                            p = t => () => t ? [...document.querySelectorAll(t)].map((t => t.form)) : [];
                        return [p(f), p(u), p(d)]
                    }(!0, !0, ['guest_login']), T = t => {
                        const e = t.target, n = e instanceof HTMLFormElement ? e : e && e.form;
                        return n && l().find((t => n === t))
                    };
                    i.addEventListener('submit', (t => {
                        T(t) && t.preventDefault()
                    }));
                    const h = (t, e) => {
                        t && !t.dataset[s] && (f(t, e.some((e => e === t))), a(t))
                    };
                    for (const t of ['focusin', 'change']) i.addEventListener(t, (t => h(T(t), E())));
                    const v = m.get('form_key'), g = m.get(r), y = v && g;
                    i.addEventListener('DOMContentLoaded', (() => {
                        const t = E();
                        if (y) for (const e of t) e.elements[r].value === g && c(e, v);
                        [...new Set([..._(), ...l().filter((t => 'true' === t.dataset.shopifyCaptcha))])].forEach((e => h(e, t)))
                    }))
                }(m, new URLSearchParams(i.location.search), _)
            })(window, document, 'Shopify', 'ce_forms', 'captcha')
        }();</script>
    <script>!function () {
            'use strict';
            const e = /recaptcha|reCATPCHA|google|Googl/gi, t = o => {
                let c = o.firstChild;
                for (; c;) c.nodeType === Node.TEXT_NODE ? c.textContent = c.textContent.replace(e, 'hCaptcha') : c.nodeType === Node.ELEMENT_NODE && t(c), c = c.nextSibling
            };
            document.addEventListener('DOMContentLoaded', (() => {
                (e => {
                    const o = document.querySelector('p[data-spam-detection-disclaimer]');
                    if (o) {
                        for (const e of ['terms', 'privacy']) {
                            const t = o.querySelector(`a[href*='https://policies.google.com/${e}']`);
                            t && (t.href = `https://hcaptcha.com/${e}`)
                        }
                        t(o)
                    }
                })()
            }))
        }();</script>
    <script integrity="sha256-n5Uet9jVOXPHGd4hH4B9Y6+BxkTluaaucmYaxAjUcvY="
            data-source-attribution="shopify.loadfeatures" defer="defer"
            src="/cdn/shopifycloud/shopify/assets/storefront/load_feature-9f951eb7d8d53973c719de211f807d63af81c644e5b9a6ae72661ac408d472f6.js"
            crossorigin="anonymous"></script>
    <script integrity="sha256-HAs5a9TQVLlKuuHrahvWuke+s1UlxXohfHeoYv8G2D8="
            data-source-attribution="shopify.dynamic-checkout" defer="defer"
            src="/cdn/shopifycloud/shopify/assets/storefront/features-1c0b396bd4d054b94abae1eb6a1bd6ba47beb35525c57a217c77a862ff06d83f.js"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" media="screen" href="/cdn/shop/t/9/compiled_assets/styles8df7.css?715">
    <script id="sections-script" data-sections="collection-banner,service,latest-blog,header,footer_5,footer-bottom"
            defer="defer" src="/cdn/shop/t/9/compiled_assets/scripts8df7.js?715"></script>

    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>
    <!-- /snippets/oldIE-js.liquid -->


    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
    <script src="//dunki-demo.myshopify.com/cdn/shop/t/9/assets/respond.min.js?v=52248677837542619231698938060"
            type="text/javascript"></script>
    <link href="//dunki-demo.myshopify.com/cdn/shop/t/9/assets/respond-proxy.html" id="respond-proxy"
          rel="respond-proxy"/>
    <link href="//dunki-demo.myshopify.com/search?q=aca2b878b64f93df7106c55d8354d521" id="respond-redirect"
          rel="respond-redirect"/>
    <script src="//dunki-demo.myshopify.com/search?q=aca2b878b64f93df7106c55d8354d521" type="text/javascript"></script>
    <![endif]-->


    <!-- JS --><!-- Your update file include here -->
    <script src="/cdn/shop/t/9/assets/modernizr-3.5.0.minb9d3.js?v=129302752053281709951698938059"></script>
    <script src="/cdn/shop/t/9/assets/jquery-1.12.4.min61ad.js?v=167620768852842279821698938059"></script>
    <script src="/cdn/shop/t/9/assets/popper.mind807.js?v=34695330375260839601698938059"></script>
    <script src="/cdn/shop/t/9/assets/bootstrap.min7dda.js?v=16883752084331194951698938058"></script>


    <script src="/cdn/shop/t/9/assets/countdowneeef.js?v=14012044983135477401698938058"></script>


    <script src="/cdn/shop/t/9/assets/slick-slider9875.js?v=156015854412133448501698938060"></script>


    <script src="/cdn/shop/t/9/assets/scrollrevealc53e.js?v=63923836180324878301698938060"></script>


    <script src="/cdn/shop/t/9/assets/pluginsa120.js?v=28728741735110059211698938089"></script>


    <script src="/cdn/shop/t/9/assets/vendor7114.js?v=15694872732475085511698938089"></script>


    <script src="/cdn/shop/t/9/assets/auto-parts-search-filterd0ee.js?v=149934856612987258451698938058"
            defer="defer"></script>

    <!-- Ajax Cart js -->
    <script src="/cdn/shopifycloud/shopify/assets/themes_support/option_selection-86cdd286ddf3be7e25d68b9fc5965d7798a3ff6228ff79af67b3f4e41d6a34be.js"></script>
    <script src="/cdn/shopifycloud/shopify/assets/themes_support/api.jquery-b0af070cfe3f5cf7c92f9e2a5da2665ee07ed2aad63bb408f8d6672f894a5996.js"></script>
    <script src="/cdn/shop/t/9/assets/cart.api68de.js?v=168067226923720647551698938058"></script>

    <!-- Your main.js file upload this file -->
    <script src="/cdn/shop/t/9/assets/theme08ca.js?v=58729172318499673551698938089"></script>


    <!-- BEGIN app block: shopify://apps/judge-me-reviews/blocks/judgeme_core/61ccd3b1-a9f2-4160-9fe9-4fec8413e5d8 -->
    <!-- Start of Judge.me Core -->
    <link rel="dns-prefetch" href="https://cdn.judge.me/">
    <script data-cfasync='false' class='jdgm-settings-script'>window.jdgmSettings = {
            "pagination": 5,
            "disable_web_reviews": false,
            "badge_no_review_text": "No reviews",
            "badge_n_reviews_text": "{{ n }} review/reviews",
            "hide_badge_preview_if_no_reviews": true,
            "badge_hide_text": false,
            "enforce_center_preview_badge": false,
            "widget_title": "Customer Reviews",
            "widget_open_form_text": "Write a review",
            "widget_close_form_text": "Cancel review",
            "widget_refresh_page_text": "Refresh page",
            "widget_summary_text": "Based on {{ number_of_reviews }} review/reviews",
            "widget_no_review_text": "Be the first to write a review",
            "widget_name_field_text": "Name",
            "widget_verified_name_field_text": "Verified Name (public)",
            "widget_name_placeholder_text": "Enter your name (public)",
            "widget_required_field_error_text": "This field is required.",
            "widget_email_field_text": "Email",
            "widget_verified_email_field_text": "Verified Email (private, can not be edited)",
            "widget_email_placeholder_text": "Enter your email (private)",
            "widget_email_field_error_text": "Please enter a valid email address.",
            "widget_rating_field_text": "Rating",
            "widget_review_title_field_text": "Review Title",
            "widget_review_title_placeholder_text": "Give your review a title",
            "widget_review_body_field_text": "Review",
            "widget_review_body_placeholder_text": "Write your comments here",
            "widget_pictures_field_text": "Picture/Video (optional)",
            "widget_submit_review_text": "Submit Review",
            "widget_submit_verified_review_text": "Submit Verified Review",
            "widget_submit_success_msg_with_auto_publish": "Thank you! Please refresh the page in a few moments to see your review. You can remove or edit your review by logging into \u003ca href='https://judge.me/login' target='_blank' rel='nofollow noopener'\u003eJudge.me\u003c/a\u003e",
            "widget_submit_success_msg_no_auto_publish": "Thank you! Your review will be published as soon as it is approved by the shop admin. You can remove or edit your review by logging into \u003ca href='https://judge.me/login' target='_blank' rel='nofollow noopener'\u003eJudge.me\u003c/a\u003e",
            "widget_show_default_reviews_out_of_total_text": "Showing {{ n_reviews_shown }} out of {{ n_reviews }} reviews.",
            "widget_show_all_link_text": "Show all",
            "widget_show_less_link_text": "Show less",
            "widget_author_said_text": "{{ reviewer_name }} said:",
            "widget_days_text": "{{ n }} days ago",
            "widget_weeks_text": "{{ n }} week/weeks ago",
            "widget_months_text": "{{ n }} month/months ago",
            "widget_years_text": "{{ n }} year/years ago",
            "widget_yesterday_text": "Yesterday",
            "widget_today_text": "Today",
            "widget_replied_text": "\u003e\u003e {{ shop_name }} replied:",
            "widget_read_more_text": "Read more",
            "widget_rating_filter_see_all_text": "See all reviews",
            "widget_sorting_most_recent_text": "Most Recent",
            "widget_sorting_highest_rating_text": "Highest Rating",
            "widget_sorting_lowest_rating_text": "Lowest Rating",
            "widget_sorting_with_pictures_text": "Only Pictures",
            "widget_sorting_most_helpful_text": "Most Helpful",
            "widget_open_question_form_text": "Ask a question",
            "widget_reviews_subtab_text": "Reviews",
            "widget_questions_subtab_text": "Questions",
            "widget_question_label_text": "Question",
            "widget_answer_label_text": "Answer",
            "widget_question_placeholder_text": "Write your question here",
            "widget_submit_question_text": "Submit Question",
            "widget_question_submit_success_text": "Thank you for your question! We will notify you once it gets answered.",
            "verified_badge_text": "Verified",
            "verified_badge_placement": "left-of-reviewer-name",
            "widget_hide_border": false,
            "widget_social_share": false,
            "all_reviews_include_out_of_store_products": true,
            "all_reviews_out_of_store_text": "(out of store)",
            "all_reviews_product_name_prefix_text": "about",
            "enable_review_pictures": true,
            "widget_product_reviews_subtab_text": "Product Reviews",
            "widget_shop_reviews_subtab_text": "Shop Reviews",
            "widget_sorting_pictures_first_text": "Pictures First",
            "floating_tab_button_name": "★ Judge.me Reviews",
            "floating_tab_title": "Let customers speak for us",
            "floating_tab_url": "",
            "floating_tab_url_enabled": false,
            "all_reviews_text_badge_text": "Customers rate us {{ shop.metafields.judgeme.all_reviews_rating | round: 1 }}/5 based on {{ shop.metafields.judgeme.all_reviews_count }} reviews.",
            "all_reviews_text_badge_text_branded_style": "{{ shop.metafields.judgeme.all_reviews_rating | round: 1 }} out of 5 stars based on {{ shop.metafields.judgeme.all_reviews_count }} reviews",
            "all_reviews_text_badge_url": "",
            "all_reviews_text_style": "branded",
            "featured_carousel_title": "Let customers speak for us",
            "featured_carousel_count_text": "from {{ n }} reviews",
            "featured_carousel_url": "",
            "verified_count_badge_style": "branded",
            "verified_count_badge_url": "",
            "picture_reminder_submit_button": "Upload Pictures",
            "widget_sorting_videos_first_text": "Videos First",
            "widget_review_pending_text": "Pending",
            "remove_microdata_snippet": false,
            "preview_badge_no_question_text": "No questions",
            "preview_badge_n_question_text": "{{ number_of_questions }} question/questions",
            "widget_search_bar_placeholder": "Search reviews",
            "widget_sorting_verified_only_text": "Verified only",
            "featured_carousel_verified_badge_enable": true,
            "featured_carousel_more_reviews_button_text": "Read more reviews",
            "featured_carousel_view_product_button_text": "View product",
            "all_reviews_page_load_more_text": "Load More Reviews",
            "widget_advanced_speed_features": 5,
            "widget_public_name_text": "displayed publicly like",
            "default_reviewer_name_has_non_latin": true,
            "widget_reviewer_anonymous": "Anonymous",
            "medals_widget_title": "Judge.me Review Medals",
            "widget_invalid_yt_video_url_error_text": "Not a YouTube video URL",
            "widget_max_length_field_error_text": "Please enter no more than {0} characters.",
            "widget_verified_by_shop_text": "Verified by Shop",
            "widget_load_with_code_splitting": true,
            "widget_ugc_title": "Made by us, Shared by you",
            "widget_ugc_subtitle": "Tag us to see your picture featured in our page",
            "widget_ugc_primary_button_text": "Buy Now",
            "widget_ugc_secondary_button_text": "Load More",
            "widget_ugc_reviews_button_text": "View Reviews",
            "widget_summary_average_rating_text": "{{ average_rating }} out of 5",
            "widget_media_grid_title": "Customer photos \u0026 videos",
            "widget_media_grid_see_more_text": "See more",
            "widget_verified_by_judgeme_text": "Verified by Judge.me",
            "widget_verified_by_judgeme_text_in_store_medals": "Verified by Judge.me",
            "widget_media_field_exceed_quantity_message": "Sorry, we can only accept {{ max_media }} for one review.",
            "widget_media_field_exceed_limit_message": "{{ file_name }} is too large, please select a {{ media_type }} less than {{ size_limit }}MB.",
            "widget_review_submitted_text": "Review Submitted!",
            "widget_question_submitted_text": "Question Submitted!",
            "widget_close_form_text_question": "Cancel",
            "widget_write_your_answer_here_text": "Write your answer here",
            "widget_show_collected_by_judgeme": true,
            "widget_collected_by_judgeme_text": "collected by Judge.me",
            "widget_load_more_text": "Load More",
            "widget_full_review_text": "Full Review",
            "widget_read_more_reviews_text": "Read More Reviews",
            "widget_read_questions_text": "Read Questions",
            "widget_questions_and_answers_text": "Questions \u0026 Answers",
            "widget_verified_by_text": "Verified by",
            "widget_number_of_reviews_text": "{{ number_of_reviews }} reviews",
            "widget_back_button_text": "Back",
            "widget_next_button_text": "Next",
            "widget_custom_forms_filter_button": "Filters",
            "how_reviews_are_collected": "How reviews are collected?",
            "widget_gdpr_statement": "How we use your data: We’ll only contact you about the review you left, and only if necessary. By submitting your review, you agree to Judge.me’s \u003ca href='https://judge.me/terms' target='_blank' rel='nofollow noopener'\u003eterms\u003c/a\u003e, \u003ca href='https://judge.me/privacy' target='_blank' rel='nofollow noopener'\u003eprivacy\u003c/a\u003e and \u003ca href='https://judge.me/content-policy' target='_blank' rel='nofollow noopener'\u003econtent\u003c/a\u003e policies.",
            "platform": "shopify",
            "branding_url": "https://judge.me/reviews",
            "branding_text": "Powered by Judge.me",
            "locale": "en",
            "reply_name": "Dunki",
            "widget_version": "3.0",
            "footer": true,
            "autopublish": true,
            "review_dates": true,
            "enable_custom_form": false,
            "can_be_branded": false
        };</script>
    <style class='jdgm-settings-style'>.jdgm-xx {
            left: 0
        }

        :root {
            --jdgm-primary-color: #399;
            --jdgm-secondary-color: rgba(51, 153, 153, 0.1);
            --jdgm-star-color: #399;
            --jdgm-paginate-color: #399;
            --jdgm-border-radius: 0
        }

        .jdgm-histogram__bar-content {
            background-color: #399
        }

        .jdgm-rev[data-verified-buyer=true] .jdgm-rev__icon.jdgm-rev__icon:after, .jdgm-rev__buyer-badge.jdgm-rev__buyer-badge {
            color: white;
            background-color: #399
        }

        .jdgm-review-widget--small .jdgm-gallery.jdgm-gallery .jdgm-gallery__thumbnail-link:nth-child(8) .jdgm-gallery__thumbnail-wrapper.jdgm-gallery__thumbnail-wrapper:before {
            content: "See more"
        }

        @media only screen and (min-width: 768px) {
            .jdgm-gallery.jdgm-gallery .jdgm-gallery__thumbnail-link:nth-child(8) .jdgm-gallery__thumbnail-wrapper.jdgm-gallery__thumbnail-wrapper:before {
                content: "See more"
            }
        }

        .jdgm-prev-badge[data-average-rating='0.00'] {
            display: none !important
        }

        .jdgm-author-all-initials {
            display: none !important
        }

        .jdgm-author-last-initial {
            display: none !important
        }

        .jdgm-rev-widg__title {
            visibility: hidden
        }

        .jdgm-rev-widg__summary-text {
            visibility: hidden
        }

        .jdgm-prev-badge__text {
            visibility: hidden
        }

        .jdgm-rev__replier:before {
            content: 'dunki-demo.myshopify.com'
        }

        .jdgm-rev__prod-link-prefix:before {
            content: 'about'
        }

        .jdgm-rev__out-of-store-text:before {
            content: '(out of store)'
        }

        @media only screen and (min-width: 768px) {
            .jdgm-rev__pics .jdgm-rev_all-rev-page-picture-separator, .jdgm-rev__pics .jdgm-rev__product-picture {
                display: none
            }
        }

        @media only screen and (max-width: 768px) {
            .jdgm-rev__pics .jdgm-rev_all-rev-page-picture-separator, .jdgm-rev__pics .jdgm-rev__product-picture {
                display: none
            }
        }

        .jdgm-preview-badge[data-template="product"] {
            display: none !important
        }

        .jdgm-preview-badge[data-template="collection"] {
            display: none !important
        }

        .jdgm-preview-badge[data-template="index"] {
            display: none !important
        }

        .jdgm-review-widget[data-from-snippet="true"] {
            display: none !important
        }

        .jdgm-verified-count-badget[data-from-snippet="true"] {
            display: none !important
        }

        .jdgm-carousel-wrapper[data-from-snippet="true"] {
            display: none !important
        }

        .jdgm-all-reviews-text[data-from-snippet="true"] {
            display: none !important
        }

        .jdgm-medals-section[data-from-snippet="true"] {
            display: none !important
        }

        .jdgm-ugc-media-wrapper[data-from-snippet="true"] {
            display: none !important
        }
    </style>


    <style class='jdgm-miracle-styles'>
        @-webkit-keyframes jdgm-spin {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            100% {
                -webkit-transform: rotate(359deg);
                -ms-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        @keyframes jdgm-spin {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg)
            }
            100% {
                -webkit-transform: rotate(359deg);
                -ms-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        @font-face {
            font-family: 'JudgemeStar';
            src: url("data:application/x-font-woff;charset=utf-8;base64,d09GRgABAAAAAAScAA0AAAAABrAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABGRlRNAAAEgAAAABoAAAAcbyQ+3kdERUYAAARgAAAAHgAAACAAMwAGT1MvMgAAAZgAAABGAAAAVi+vS9xjbWFwAAAB8AAAAEAAAAFKwBMjvmdhc3AAAARYAAAACAAAAAj//wADZ2x5ZgAAAkAAAAEJAAABdH33LXtoZWFkAAABMAAAAC0AAAA2BroQKWhoZWEAAAFgAAAAHAAAACQD5QHQaG10eAAAAeAAAAAPAAAAFAYAAABsb2NhAAACMAAAAA4AAAAOAO4AeG1heHAAAAF8AAAAHAAAACAASgAvbmFtZQAAA0wAAADeAAABkorWfVZwb3N0AAAELAAAACkAAABEp3ubLXgBY2BkYADhPPP4OfH8Nl8ZuJkYQODS2fRrCPr/aSYGxq1ALgcDWBoAO60LkwAAAHgBY2BkYGDc+v80gx4TAwgASaAICmABAFB+Arl4AWNgZGBgYGPQYWBiAAIwyQgWc2AAAwAHVQB6eAFjYGRiYJzAwMrAwejDmMbAwOAOpb8ySDK0MDAwMbByMsCBAAMCBKS5pjA4PGB4wMR44P8BBj3GrQymQGFGkBwAjtgK/gAAeAFjYoAAEA1jAwAAZAAHAHgB3crBCcAwDEPRZydkih567CDdf4ZskmLwFBV8xBfCaC4BXkOUmx4sU0h2ngNb9V0vQCxaRKIAevT7fGWuBrEAAAAAAAAAAAA0AHgAugAAeAF9z79Kw1AUx/FzTm7un6QmJtwmQ5Bg1abgEGr/BAqlU6Gju+Cgg1MkQ/sA7Vj7BOnmO/gUvo2Lo14NqIO6/IazfD8HEODtmQCfoANwNsyp2/GJt3WKQrd1NLiYYWx2PBqOsmJMEOznPOTzfSCrhAtbbLdmeFLJV9eKd63WLrZcIcuaEVdssWCKM6pLCfTVOYbz/0pNSMSZKLIZpvh78sAUH6PlMrreTCabP9r+Z/puPZ2ur/RqpQHgh+MIegCnXeM4MRAPjYN//5tj4ZtTjkFqEdmeMShlEJ7tVAly2TAkx6R68Fl4E/aVvn8JqHFQ4JS1434gXKcuL31dDhzs3YbsEOAd/IU88gAAAHgBfY4xTgMxEEVfkk0AgRCioKFxQYd2ZRtpixxgRU2RfhU5q5VWseQ4JdfgAJyBlmNwAM7ABRhZQ0ORwp7nr+eZAa54YwYg9zm3ynPOeFRe8MCrciXOh/KSS76UV5L/iDmrLiS5AeU519wrL3jmSbkS5115yR2fyivJv9kx0ZMZ2RLZw27q87iNQi8EBo5FSPIMw3HqBboi5lKTGAGDp8FKXWP+t9TU01Lj5His1Ba6uM9dTEMwvrFmbf5GC/q2drW3ruXUhhsCiQOjznFlCzYhHUZp4xp76vsvQh89CQAAeAFjYGJABowM6IANLMrEyMTIzMjCXpyRWJBqZshWXJJYBKOMAFHFBucAAAAAAAAB//8AAngBY2BkYGDgA2IJBhBgAvKZGViBJAuYxwAABJsAOgAAeAFjYGBgZACCk535hiD60tn0azAaAEqpB6wAAA==") format("woff");
            font-weight: normal;
            font-style: normal
        }

        .jdgm-star {
            font-family: 'JudgemeStar';
            display: inline !important;
            text-decoration: none !important;
            padding: 0 4px 0 0 !important;
            margin: 0 !important;
            font-weight: bold;
            opacity: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .jdgm-star:hover {
            opacity: 1
        }

        .jdgm-star:last-of-type {
            padding: 0 !important
        }

        .jdgm-star.jdgm--on:before {
            content: "\e000"
        }

        .jdgm-star.jdgm--off:before {
            content: "\e001"
        }

        .jdgm-star.jdgm--half:before {
            content: "\e002"
        }

        .jdgm-widget * {
            margin: 0;
            line-height: 1.4;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-overflow-scrolling: touch
        }

        .jdgm-hidden {
            display: none !important;
            visibility: hidden !important
        }

        .jdgm-temp-hidden {
            display: none
        }

        .jdgm-spinner {
            width: 40px;
            height: 40px;
            margin: auto;
            border-radius: 50%;
            border-top: 2px solid #eee;
            border-right: 2px solid #eee;
            border-bottom: 2px solid #eee;
            border-left: 2px solid #ccc;
            -webkit-animation: jdgm-spin 0.8s infinite linear;
            animation: jdgm-spin 0.8s infinite linear
        }

        .jdgm-prev-badge {
            display: block !important
        }

    </style>


    <script data-cfasync='false' class='jdgm-script'>
        !function (e) {
            window.jdgm = window.jdgm || {}, jdgm.CDN_HOST = "https://cdn.judge.me/",
                jdgm.docReady = function (d) {
                    (e.attachEvent ? "complete" === e.readyState : "loading" !== e.readyState) ?
                        setTimeout(d, 0) : e.addEventListener("DOMContentLoaded", d)
                }, jdgm.loadCSS = function (d, t, o, a) {
                !o && jdgm.loadCSS.requestedUrls.indexOf(d) >= 0 || (jdgm.loadCSS.requestedUrls.push(d),
                    (a = e.createElement("link")).rel = "stylesheet", a.class = "jdgm-stylesheet", a.media = "nope!",
                    a.href = d, a.onload = function () {
                    this.media = "all", t && setTimeout(t)
                }, e.body.appendChild(a))
            },
                jdgm.loadCSS.requestedUrls = [], jdgm.loadJS = function (e, d) {
                var t = new XMLHttpRequest;
                t.onreadystatechange = function () {
                    4 === t.readyState && (Function(t.response)(), d && d(t.response))
                },
                    t.open("GET.html", e), t.send()
            }, jdgm.docReady((function () {
                (window.jdgmLoadCSS || e.querySelectorAll(
                    ".jdgm-widget, .jdgm-all-reviews-page").length > 0) && (jdgmSettings.widget_load_with_code_splitting ?
                    parseFloat(jdgmSettings.widget_version) >= 3 ? jdgm.loadCSS(jdgm.CDN_HOST + "widget_v3/base.css") :
                        jdgm.loadCSS(jdgm.CDN_HOST + "widget/base.css") : jdgm.loadCSS(jdgm.CDN_HOST + "shopify_v2.css"),
                    jdgm.loadJS(jdgm.CDN_HOST + "loader.js"))
            }))
        }(document);
    </script>
    <noscript>
        <link rel="stylesheet" type="text/css" media="all" href="../cdn.judge.me/shopify_v2.css">
    </noscript>

    <!-- BEGIN app snippet: theme_fix_tags -->
    <script>
        (function () {
            var jdgmThemeFixes = null;
            if (!jdgmThemeFixes) return;
            var thisThemeFix = jdgmThemeFixes[Shopify.theme.id];
            if (!thisThemeFix) return;

            if (thisThemeFix.html) {
                document.addEventListener("DOMContentLoaded", function () {
                    var htmlDiv = document.createElement('div');
                    htmlDiv.classList.add('jdgm-theme-fix-html');
                    htmlDiv.innerHTML = thisThemeFix.html;
                    document.body.append(htmlDiv);
                });
            }
            ;

            if (thisThemeFix.css) {
                var styleTag = document.createElement('style');
                styleTag.classList.add('jdgm-theme-fix-style');
                styleTag.innerHTML = thisThemeFix.css;
                document.head.append(styleTag);
            }
            ;

            if (thisThemeFix.js) {
                var scriptTag = document.createElement('script');
                scriptTag.classList.add('jdgm-theme-fix-script');
                scriptTag.innerHTML = thisThemeFix.js;
                document.head.append(scriptTag);
            }
            ;
        })();
    </script>
    <!-- END app snippet -->
    <!-- End of Judge.me Core -->


    <!-- END app app block -->
    <link href="https://monorail-edge.shopifysvc.com/" rel="dns-prefetch">
    <script>(function () {
            if ("sendBeacon" in navigator && "performance" in window) {
                var session_token = document.cookie.match(/_shopify_s=([^;]*)/);

                function handle_abandonment_event(e) {
                    var entries = performance.getEntries().filter(function (entry) {
                        return /monorail-edge.shopifysvc.com/.test(entry.name);
                    });
                    if (!window.abandonment_tracked && entries.length === 0) {
                        window.abandonment_tracked = true;
                        var currentMs = Date.now();
                        var navigation_start = performance.timing.navigationStart;
                        var payload = {
                            shop_id: 11825648,
                            url: window.location.href,
                            navigation_start,
                            duration: currentMs - navigation_start,
                            session_token: session_token && session_token.length === 2 ? session_token[1] : "",
                            page_type: "index"
                        };
                        window.navigator.sendBeacon("https://monorail-edge.shopifysvc.com/v1/produce", JSON.stringify({
                            schema_id: "online_store_buyer_site_abandonment/1.1",
                            payload: payload,
                            metadata: {event_created_at_ms: currentMs, event_sent_at_ms: currentMs}
                        }));
                    }
                }

                window.addEventListener('pagehide', handle_abandonment_event);
            }
        }());</script>
    <script id="web-pixels-manager-setup">(function e(e, n, a, t, r) {
            var o = "function" == typeof BigInt && -1 !== BigInt.toString().indexOf("[native code]") ? "modern" : "legacy";
            window.Shopify = window.Shopify || {};
            var i = window.Shopify;
            i.analytics = i.analytics || {};
            var s = i.analytics;
            s.replayQueue = [], s.publish = function (e, n, a) {
                return s.replayQueue.push([e, n, a]), !0
            };
            try {
                self.performance.mark("wpm:start")
            } catch (e) {
            }
            var l = [a, "/wpm", "/b", r, o.substring(0, 1), ".js"].join("");
            !function (e) {
                var n = e.src, a = e.async, t = void 0 === a || a, r = e.onload, o = e.onerror,
                    i = document.createElement("script"), s = document.head, l = document.body;
                i.async = t, i.src = n, r && i.addEventListener("load", r), o && i.addEventListener("error", o), s ? s.appendChild(i) : l ? l.appendChild(i) : console.error("Did not find a head or body element to append the script")
            }({
                src: l, async: !0, onload: function () {
                    var a = window.webPixelsManager.init(e);
                    n(a);
                    var t = window.Shopify.analytics;
                    t.replayQueue.forEach((function (e) {
                        var n = e[0], t = e[1], r = e[2];
                        a.publishCustomEvent(n, t, r)
                    })), t.replayQueue = [], t.publish = a.publishCustomEvent, t.visitor = a.visitor
                }, onerror: function () {
                    var n = e.storefrontBaseUrl.replace(/\/$/, ""),
                        a = "".concat(n, "/.well-known/shopify/monorail/unstable/produce_batch"), r = JSON.stringify({
                            metadata: {event_sent_at_ms: (new Date).getTime()},
                            events: [{
                                schema_id: "web_pixels_manager_load/3.1",
                                payload: {
                                    version: t || "latest",
                                    bundle_target: o,
                                    page_url: self.location.href,
                                    status: "failed",
                                    surface: e.surface,
                                    error_msg: "".concat(l, " has failed to load")
                                },
                                metadata: {event_created_at_ms: (new Date).getTime()}
                            }]
                        });
                    try {
                        if (self.navigator.sendBeacon.bind(self.navigator)(a, r)) return !0
                    } catch (e) {
                    }
                    var i = new XMLHttpRequest;
                    try {
                        return i.open("POST.html", a, !0), i.setRequestHeader("Content-Type", "text/plain"), i.send(r), !0
                    } catch (e) {
                        console && console.warn && console.warn("[Web Pixels Manager] Got an unhandled error while logging a load error.")
                    }
                    return !1
                }
            })
        })({
            shopId: 11825648,
            storefrontBaseUrl: "https://dunki-demo.myshopify.com",
            extensionsBaseUrl: "https://extensions.shopifycdn.com/cdn/shopifycloud/web-pixels-manager",
            surface: "storefront-renderer",
            enabledBetaFlags: ["5de24938", "4735909c"],
            webPixelsConfigList: [{
                "id": "shopify-app-pixel",
                "configuration": "{}",
                "eventPayloadVersion": "v1",
                "runtimeContext": "STRICT",
                "scriptVersion": "0142",
                "apiClientId": "shopify-pixel",
                "type": "APP",
                "privacyPurposes": ["ANALYTICS", "MARKETING"]
            }, {
                "id": "shopify-custom-pixel",
                "eventPayloadVersion": "v1",
                "runtimeContext": "LAX",
                "scriptVersion": "0142",
                "apiClientId": "shopify-pixel",
                "type": "CUSTOM",
                "privacyPurposes": ["ANALYTICS", "MARKETING"]
            }],
            initData: {
                "shop": {
                    "name": "Dunki",
                    "paymentSettings": {"currencyCode": "GBP"},
                    "myshopifyDomain": "assyrian-3.myshopify.com",
                    "countryCode": "BD",
                    "storefrontUrl": "https:\/\/dunki-demo.myshopify.com"
                }, "customer": null, "cart": null, "checkout": null, "productVariants": []
            },
        }, function pageEvents(webPixelsManagerAPI) {
            webPixelsManagerAPI.publish("page_viewed", {});
        }, "/cdn.html", "05f6d516afb2cd7b017313ed219645f34ff0f321", "7b7d009ewa2c1b8d4pecef99eam4ebee0fe",);</script>
    <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
        window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
        window.ShopifyAnalytics.meta.currency = 'GBP';
        var meta = {"page": {"pageType": "home"}};
        for (var attr in meta) {
            window.ShopifyAnalytics.meta[attr] = meta[attr];
        }</script>
    <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function () {

        };
    </script>
    <script class="analytics">(function () {
            var customDocumentWrite = function (content) {
                var jquery = null;

                if (window.jQuery) {
                    jquery = window.jQuery;
                } else if (window.Checkout && window.Checkout.$) {
                    jquery = window.Checkout.$;
                }

                if (jquery) {
                    jquery('body').append(content);
                }
            };

            var hasLoggedConversion = function (token) {
                if (token) {
                    return document.cookie.indexOf('loggedConversion=' + token) !== -1;
                }
                return false;
            }

            var setCookieIfConversion = function (token) {
                if (token) {
                    var twoMonthsFromNow = new Date(Date.now());
                    twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

                    document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
                }
            }

            var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
            if (trekkie.integrations) {
                return;
            }
            trekkie.methods = [
                'identify',
                'page',
                'ready',
                'track',
                'trackForm',
                'trackLink'
            ];
            trekkie.factory = function (method) {
                return function () {
                    var args = Array.prototype.slice.call(arguments);
                    args.unshift(method);
                    trekkie.push(args);
                    return trekkie;
                };
            };
            for (var i = 0; i < trekkie.methods.length; i++) {
                var key = trekkie.methods[i];
                trekkie[key] = trekkie.factory(key);
            }
            trekkie.load = function (config) {
                trekkie.config = config || {};
                trekkie.config.initialDocumentCookie = document.cookie;
                var first = document.getElementsByTagName('script')[0];
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.onerror = function (e) {
                    var scriptFallback = document.createElement('script');
                    scriptFallback.type = 'text/javascript';
                    scriptFallback.onerror = function (error) {
                        var Monorail = {
                            produce: function produce(monorailDomain, schemaId, payload) {
                                var currentMs = new Date().getTime();
                                var event = {
                                    schema_id: schemaId,
                                    payload: payload,
                                    metadata: {
                                        event_created_at_ms: currentMs,
                                        event_sent_at_ms: currentMs
                                    }
                                };
                                return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
                            },
                            sendRequest: function sendRequest(endpointUrl, payload) {
                                // Try the sendBeacon API
                                if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                                    var blobData = new window.Blob([payload], {
                                        type: 'text/plain'
                                    });

                                    if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                                        return true;
                                    } // sendBeacon was not successful

                                } // XHR beacon

                                var xhr = new XMLHttpRequest();

                                try {
                                    xhr.open('POST.html', endpointUrl);
                                    xhr.setRequestHeader('Content-Type', 'text/plain');
                                    xhr.send(payload);
                                } catch (e) {
                                    console.log(e);
                                }

                                return false;
                            },
                            isIos12: function isIos12() {
                                return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
                            }
                        };
                        Monorail.produce('monorail-edge.shopifysvc.com',
                            'trekkie_storefront_load_errors/1.1',
                            {
                                shop_id: 11825648,
                                theme_id: 122479902800,
                                app_name: "storefront",
                                context_url: window.location.href,
                                source_url: "//dunki-demo.myshopify.com/cdn/s/trekkie.storefront.72278931d43be9cf54de64f928f82f2eef1fa047.min.js"
                            });

                    };
                    scriptFallback.async = true;
                    scriptFallback.src = 'cdn/s/trekkie.storefront.72278931d43be9cf54de64f928f82f2eef1fa047.min.js';
                    first.parentNode.insertBefore(scriptFallback, first);
                };
                script.async = true;
                script.src = 'cdn/s/trekkie.storefront.72278931d43be9cf54de64f928f82f2eef1fa047.min.js';
                first.parentNode.insertBefore(script, first);
            };
            trekkie.load(
                {
                    "Trekkie": {
                        "appName": "storefront",
                        "development": false,
                        "defaultAttributes": {
                            "shopId": 11825648,
                            "isMerchantRequest": null,
                            "themeId": 122479902800,
                            "themeCityHash": "17516947987100790415",
                            "contentLanguage": "en",
                            "currency": "GBP"
                        },
                        "isServerSideCookieWritingEnabled": true,
                        "monorailRegion": "shop_domain",
                        "enabledBetaFlags": ["bbcf04e6"]
                    },
                    "Session Attribution": {},
                    "S2S": {"facebookCapiEnabled": false, "source": "trekkie-storefront-renderer"}
                }
            );

            var loaded = false;
            trekkie.ready(function () {
                if (loaded) return;
                loaded = true;

                window.ShopifyAnalytics.lib = window.trekkie;


                var originalDocumentWrite = document.write;
                document.write = customDocumentWrite;
                try {
                    window.ShopifyAnalytics.merchantGoogleAnalytics.call(this);
                } catch (error) {
                }
                ;
                document.write = originalDocumentWrite;

                window.ShopifyAnalytics.lib.page(null, {"pageType": "home"});

                var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
                var token = match ? match[1] : undefined;
                if (!hasLoggedConversion(token)) {
                    setCookieIfConversion(token);

                }
            });


            var eventsListenerScript = document.createElement('script');
            eventsListenerScript.async = true;
            eventsListenerScript.src = "/cdn/shopifycloud/shopify/assets/shop_events_listener-61fa9e0a912c675e178777d2b27f6cbd482f8912a6b0aa31fa3515985a8cd626.js";
            document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

        })();</script>
    <script class="boomerang">
        (function () {
            if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
                return;
            }
            window.BOOMR = window.BOOMR || {};
            window.BOOMR.snippetStart = new Date().getTime();
            window.BOOMR.snippetExecuted = true;
            window.BOOMR.snippetVersion = 12;
            window.BOOMR.application = "storefront-renderer";
            window.BOOMR.themeName = "Dunki - Book Store Theme";
            window.BOOMR.themeVersion = "v1.0.1";
            window.BOOMR.shopId = 11825648;
            window.BOOMR.themeId = 122479902800;
            window.BOOMR.renderRegion = "gcp-europe-west1";
            window.BOOMR.url =
                "/cdn/shopifycloud/boomerang/shopify-boomerang-1.0.0.min.js";
            var where = document.currentScript || document.getElementsByTagName("script")[0];
            var parentNode = where.parentNode;
            var promoted = false;
            var LOADER_TIMEOUT = 3000;

            function promote() {
                if (promoted) {
                    return;
                }
                var script = document.createElement("script");
                script.id = "boomr-scr-as";
                script.src = window.BOOMR.url;
                script.async = true;
                parentNode.appendChild(script);
                promoted = true;
            }

            function iframeLoader(wasFallback) {
                promoted = true;
                var dom, bootstrap, iframe, iframeStyle;
                var doc = document;
                var win = window;
                window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
                bootstrap = function (parent, scriptId) {
                    var script = doc.createElement("script");
                    script.id = scriptId || "boomr-if-as";
                    script.src = window.BOOMR.url;
                    BOOMR_lstart = new Date().getTime();
                    parent = parent || doc.body;
                    parent.appendChild(script);
                };
                if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
                    window.BOOMR.snippetMethod = "s";
                    bootstrap(parentNode, "boomr-async");
                    return;
                }
                iframe = document.createElement("IFRAME");
                iframe.src = "about:blank";
                iframe.title = "";
                iframe.role = "presentation";
                iframe.loading = "eager";
                iframeStyle = (iframe.frameElement || iframe).style;
                iframeStyle.width = 0;
                iframeStyle.height = 0;
                iframeStyle.border = 0;
                iframeStyle.display = "none";
                parentNode.appendChild(iframe);
                try {
                    win = iframe.contentWindow;
                    doc = win.document.open();
                } catch (e) {
                    dom = document.domain;
                    iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
                    win = iframe.contentWindow;
                    doc = win.document.open();
                }
                if (dom) {
                    doc._boomrl = function () {
                        this.domain = dom;
                        bootstrap();
                    };
                    doc.write("<body onload='document._boomrl();'>");
                } else {
                    win._boomrl = function () {
                        bootstrap();
                    };
                    if (win.addEventListener) {
                        win.addEventListener("load", win._boomrl, false);
                    } else if (win.attachEvent) {
                        win.attachEvent("onload", win._boomrl);
                    }
                }
                doc.close();
            }

            var link = document.createElement("link");
            if (link.relList &&
                typeof link.relList.supports === "function" &&
                link.relList.supports("preload") &&
                ("as" in link)) {
                window.BOOMR.snippetMethod = "p";
                link.href = window.BOOMR.url;
                link.rel = "preload";
                link.as = "script";
                link.addEventListener("load", promote);
                link.addEventListener("error", function () {
                    iframeLoader(true);
                });
                setTimeout(function () {
                    if (!promoted) {
                        iframeLoader(true);
                    }
                }, LOADER_TIMEOUT);
                BOOMR_lstart = new Date().getTime();
                parentNode.appendChild(link);
            } else {
                iframeLoader(false);
            }

            function boomerangSaveLoadTime(e) {
                window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
            }

            if (window.addEventListener) {
                window.addEventListener("load", boomerangSaveLoadTime, false);
            } else if (window.attachEvent) {
                window.attachEvent("onload", boomerangSaveLoadTime);
            }
            if (document.addEventListener) {
                document.addEventListener("onBoomerangLoaded", function (e) {
                    e.detail.BOOMR.init({
                        ResourceTiming: {
                            enabled: true,
                            trackedResourceTypes: ["script", "img", "css"]
                        },
                    });
                    e.detail.BOOMR.t_end = new Date().getTime();
                });
            } else if (document.attachEvent) {
                document.attachEvent("onpropertychange", function (e) {
                    if (!e) e = event;
                    if (e.propertyName === "onBoomerangLoaded") {
                        e.detail.BOOMR.init({
                            ResourceTiming: {
                                enabled: true,
                                trackedResourceTypes: ["script", "img", "css"]
                            },
                        });
                        e.detail.BOOMR.t_end = new Date().getTime();
                    }
                });
            }
        })();</script>
    <script
        defer
        src="/cdn/shopifycloud/perf-kit/shopify-perf-kit-unstable.min.js"
        data-application="storefront-renderer"
        data-shop-id="11825648"
        data-render-region="gcp-europe-west1"
        data-page-type="index"
        data-theme-instance-id="122479902800"
        data-monorail-region="shop_domain"
        data-resource-timing-sampling-rate="10"
    ></script>
    <!-- Favicon in .ico format -->
    <link rel="icon" href="/front_added/logo/favicon.jpg" type="image/x-icon">

    <!-- Alternative Favicon in .png format -->
    <link rel="icon" href="/front_added/logo/favicon.jpg" type="image/png">

    <!-- Alternative Favicon in .svg format (for scalable vector icon) -->
    <link rel="icon" href="/front_added/logo/favicon.jpg" type="image/x-icon">

    <!-- For Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/front_added/logo/favicon.jpg">
    <style>
        .capitalize-text {
            text-transform: capitalize !important;
        }
    </style>
</head>

<body id="online-store" class=" template-index ">


<div id="preloader_active">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_four"></div>
            <div class="object" id="object_three"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_one"></div>

        </div>
    </div>
</div>


<script>
    $(window).on('load', function () {
        $('#preloader_active').fadeOut('slow');
    });
</script>
<div class="wrapper">
    <div class="top-notification-bar">
        <div class="container-fluid section-padding-1">

            <div class="row">
                <div class="notification-entry col-12 text-center">

                    <div class="notification_text">
                        <p>Welcome to Thomas McGettrick Institute of Technology | Excellence & Technology | E-Library</p>

                        <button class="notification-close-btn">X</button>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script>
        var nToggle = $('.notification-close-btn');
        nToggle.on('click', function () {
            $('.top-notification-bar').slideToggle();
        })
    </script>
    <div id="shopify-section-header" class="shopify-section">
        <script src="/cdn/shop/t/9/assets/predictive-search07d1.js?v=42609991257564171698938059" defer="defer"></script>
        <script>
            $('body').on('click', function () {
                $('#predictive-search').attr('style', $('#predictive-search').attr('style') === 'display: block;' ? 'display: none' : 'display: none;');
                $('#Search').click(function () {
                    return false;
                });
                $('.predictive-search__list-item a').click(function () {
                    return false;
                });
            });
        </script>

        <header class="header-area sticky-bar  transparent_disable menu-center">
            <div class="main-header-wrap">

                <div class="container default ">

                    <div class="row header_custom_row">

                        <div class="col-xl-2 col-lg-2">
                            <div class="logo text-left">
                                <a href="/" class="theme-logo">
                                    <img src="/cdn/shop/files/<?=$logo?>" alt="TMIT logo">
                                </a></div>
                        </div>

                        <div class="col-xl-8 col-lg-8 ">
                            <div class="main-menu">
                                <?php include_once ('nav.php');?>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2">
                            <div class="header-right-wrap">
                                <div class="header-search">
                                    <a class="search-active" href="#">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewbox="0 0 512 512">
                                            <path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                  fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                  stroke-width="32"></path>
                                            <path fill="none" stroke="currentColor" stroke-linecap="round"
                                                  stroke-miterlimit="10" stroke-width="32"
                                                  d="M338.29 338.29L448 448"></path>
                                        </svg>

                                    </a>
                                </div>

                                <div class="main-search-active">
                                    <div class="sidebar-search-icon">
                                        <button class="search-close"><span class="icofont-close-circled"></span>
                                        </button>
                                    </div>
                                    <div class="sidebar-search-input">

                                        <div class="header-search-container form-search">
                                            <predictive-search id="predictive-search-toggle" search-open="false">
                                                <form action="https://dunki-demo.myshopify.com/search" method="get"
                                                      role="search" class="header-search-box animated jackInTheBox">
                                                    <input
                                                        id="Search"
                                                        type="search"
                                                        name="q"
                                                        value="" role="combobox"
                                                        aria-expanded="false"
                                                        aria-owns="predictive-search-results-list"
                                                        aria-controls="predictive-search-results-list"
                                                        aria-haspopup="listbox"
                                                        aria-autocomplete="list"
                                                        autocorrect="off"
                                                        autocomplete="off"
                                                        autocapitalize="off"
                                                        spellcheck="false" class="header-search-field input-text"
                                                        placeholder="Search our Library">
                                                    <button type="submit">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="far"
                                                             data-icon="search" role="img"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                             class="svg-inline--fa fa-search fa-w-16 fa-2x">
                                                            <path fill="currentColor"
                                                                  d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"
                                                                  class=""></path>
                                                        </svg>
                                                    </button>
                                                    <input name="options[prefix]" type="hidden" value="last">
                                                    <div id="predictive-search" tabindex="-1"></div>
                                                </form>
                                            </predictive-search>
                                        </div>


                                    </div>
                                </div>
                                <div class="setting-wrap">
                                    <button class="setting-active">
                                        <svg viewbox="-42 0 512 512.001" xmlns="http://www.w3.org/2000/svg">
                                            <path d="m210.351562 246.632812c33.882813 0 63.21875-12.152343 87.195313-36.128906 23.96875-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.128906 87.195312 23.980469 23.96875 53.316406 36.125 87.191406 36.125zm-65.972656-189.292968c18.394532-18.394532 39.972656-27.335938 65.972656-27.335938 25.996094 0 47.578126 8.941406 65.976563 27.335938 18.394531 18.398437 27.339844 39.980468 27.339844 65.972656 0 26-8.945313 47.578125-27.339844 65.976562-18.398437 18.398438-39.980469 27.339844-65.976563 27.339844-25.992187 0-47.570312-8.945312-65.972656-27.339844-18.398437-18.394531-27.34375-39.976562-27.34375-65.976562 0-25.992188 8.945313-47.574219 27.34375-65.972656zm0 0"></path>
                                            <path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.3125-10.339844-7.808594-20.550781-13.375-30.335938-5.769532-10.15625-12.550782-19-20.160157-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.042969 5.339844-10.96875 0-22.085937-1.796876-33.042968-5.339844-11.210938-3.621094-20.300782-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.753906-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.609375 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.0625 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.777344-1.023438 19.953125-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.4375 23.730469 65.066406 23.730469h246.53125c26.621094 0 48.511719-7.984375 65.0625-23.730469 16.757813-15.945312 25.253906-37.589843 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm-44.90625 72.828125c-10.933594 10.40625-25.449218 15.464844-44.378906 15.464844h-246.527344c-18.933594 0-33.449218-5.058594-44.378906-15.460938-10.722656-10.207031-15.933594-24.140625-15.933594-42.585937 0-9.59375.316406-19.066407.949219-28.160157.617187-8.921874 1.878906-18.722656 3.75-29.136718 1.847656-10.285156 4.199219-19.9375 6.996094-28.675782 2.683593-8.378906 6.34375-16.675781 10.882812-24.667968 4.332031-7.617188 9.316407-14.152344 14.816407-19.417969 5.144531-4.925781 11.628906-8.957031 19.269531-11.980469 7.066406-2.796875 15.007812-4.328125 23.628906-4.558594 1.050781.558594 2.921875 1.625 5.953125 3.601563 6.167969 4.019531 13.277344 8.605469 21.136719 13.625 8.859375 5.648437 20.273437 10.75 33.910156 15.152344 13.941406 4.507812 28.160156 6.796875 42.273437 6.796875 14.113282 0 28.335938-2.289063 42.269532-6.792969 13.648437-4.410156 25.058594-9.507813 33.929687-15.164063 8.042969-5.140624 14.953125-9.59375 21.121094-13.617187 3.03125-1.972656 4.902344-3.042969 5.953125-3.601563 8.625.230469 16.566406 1.761719 23.636719 4.558594 7.636719 3.023438 14.121093 7.058594 19.265625 11.980469 5.5 5.261719 10.484375 11.796875 14.816406 19.421875 4.542969 7.988281 8.207031 16.289062 10.886719 24.660156 2.800781 8.75 5.15625 18.398438 7 28.675782 1.867187 10.433593 3.132812 20.238281 3.75 29.144531v.007812c.636719 9.058594.957031 18.527344.960937 28.148438-.003906 18.449219-5.214844 32.378906-15.9375 42.582031zm0 0"></path>
                                        </svg>
                                    </button>

                                    <div class="setting-content">
                                        <ul>

                                            <li><h4>Account</h4>
                                                <ul>
                                                    <li><a href="javascript:void(0);">Login</a></li>
                                                    <li><a href="javascript:void(0);">Create Account</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
            <div class="header-small-mobile">
                <div class="container default ">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="/" class="theme-logo">
                                    <img src="/cdn/shop/files/<?=$logo?>" alt="TMIT logo"
                                         srcset="/cdn/shop/files/<?=$logo?> 1x, /cdn/shop/files/<?=$logo?> 2x">
                                </a></div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">
                                <div class="cart-wrap d-none">

                                    <button class="icon-cart-active">
  <span class="icon-cart">

    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewbox="0 0 512 512"><path
            d="M80 176a16 16 0 00-16 16v216c0 30.24 25.76 56 56 56h272c30.24 0 56-24.51 56-54.75V192a16 16 0 00-16-16zM160 176v-32a96 96 0 0196-96h0a96 96 0 0196 96v32"
            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path><path
            d="M160 224v16a96 96 0 0096 96h0a96 96 0 0096-96v-16" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>

    <span class="count-style bigcounter">0</span>
  </span>


                                    </button>


                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top"><h4>Shoping Cart</h4><a class="cart-close"
                                                                                               href="#"><i
                                                    class="icofont-close-circled"></i></a>
                                        </div>
                                        <ul class="single-product-cart single-cart-item-loop"
                                            style="display:none;"></ul>
                                        <div class="single-product-cart shopping-cart-bottom" style="display:none;">
                                            <div class="shopping-cart-total">
                                                <h4>Total: <span class="shop-total shopping-cart__total">£0.00</span>
                                                </h4>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover text-center"><a class="default-btn"
                                                                                                    href="account/login770e.html">Checkout</a><a
                                                    class="default-btn" href="cart.html">View Cart</a>
                                            </div>
                                        </div>

                                        <div class="cart-empty-title" style="display:block;">
                                            <p>Your cart is empty now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="sli sli-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php include_once ('nav_mobile.php');?>


        <style>
            .theme-logo img {
                max-width: 130px;
            }

            .header-area,
            .main-menu > nav > ul > li ul.submenu {
                background: #ffffff;
            }

            .header-area.sticky-bar.stick {
                background: #ffffff;
            }

            .main-menu > nav > ul > li > a,
            .header-right-wrap .header-search > a,
            .cart-wrap > button span.icon-cart,
            .cart-wrap > button span.cart-price,
            .header-right-wrap .setting-wrap button,
            .main-menu > nav > ul > li ul.submenu li a {
                color: #000000;
            }

            .header-area .cart-wrap:hover button span.icon-cart .count-style {
                background-color: #dd321e;
            }

            .main-menu > nav > ul > li:hover > a,
            .main-menu > nav > ul > li ul.mega-menu > li > ul > li:hover > a,
            .main-menu > nav > ul > li ul.submenu li a:hover,
            .header-right-wrap .header-search > a:hover,
            .cart-wrap > button:hover span.icon-cart,
            .header-right-wrap .setting-wrap button:hover,
            .mobile-off-canvas-active .header-mobile-aside-wrap .mobile-menu-wrap .mobile-navigation nav .mobile-menu li ul li a:hover,
            .mobile-off-canvas-active .header-mobile-aside-wrap .mobile-menu-wrap .mobile-navigation nav li a:hover {
                color: #dd321e;
            }

            .main-menu > nav > ul > li > a > span {
                background-color: #dd321e;
            }

            .header-small-mobile .cart-wrap > button span.icon-cart,
            .header-small-mobile .cart-wrap > button span.cart-price,
            .header-small-mobile .header-right-wrap .setting-wrap button,
            .header_contact_info a {
                color: #000000;
            }

            .header-small-mobile .cart-wrap > button span.icon-cart:hover,
            .header-small-mobile .cart-wrap > button span.cart-price:hover,
            .header-small-mobile .header-right-wrap .setting-wrap button:hover,
            .header_contact_info a:hover {
                color: #dd321e;
            }

            .header-area .main-menu > nav > ul > li ul.mega-menu {
                width: 1000px;
                left: -200px;
                background-color: #fff;
            }


            @media only screen and (min-width: 992px) and (max-width: 1199px) {

                .header-area .main-menu > nav > ul > li ul.mega-menu {
                    width: 900px;
                    left: -250px;
                }

            }


            .header-right-wrap .setting-wrap button svg,
            .cart-wrap > button span.icon-cart svg,
            .header-right-wrap .header-search svg {
                width: 24px;
                fill: #000000;
                transition: .3s
            }

            .header-right-wrap .setting-wrap button svg:hover,
            .cart-wrap > button span.icon-cart svg:hover,
            .header-right-wrap .header-search svg:hover {
                fill: #dd321e;
            }

            .header_contact_info a svg {
                width: 30px;
                fill: #000000;
                transition: .3s;
                margin-right: 10px;
            }

            .header_contact_info a:hover svg {
                fill: #dd321e;
            }

            .clickable-menu a:hover {
                color: #dd321e;
            }

            .clickable-mainmenu {
                color: #dd321e;
            }

            .clickable-mainmenu .clickable-mainmenu-icon button {
                color: #000000;
            }

            .clickable-mainmenu .clickable-mainmenu-icon button:hover {
                color: #dd321e;
            }

            .clickable-mainmenu .clickable-menu-style ul li a {
                color: #000000;
            }

            .clickable-mainmenu .clickable-menu-style ul li a:hover {
                color: #dd321e;
            }

            .slinky-menu a span span {
                color: #dd321e;
            }

            .header-hm-7.stick .clickable-menu a {
                color: #000000;
            }

            .header-hm-7.stick .clickable-menu a:hover {
                color: #dd321e;
            }

            .slinky-theme-default .next::after {
                color: #000000;
            }

            .slinky-theme-default .next:hover::after {
                color: #dd321e;
            }

            .slinky-theme-default .back::before {
                background-color: #dd321e;
            }

            @font-face {
                font-family: Futura;
                font-weight: 400;
                font-style: normal;
                src: url("/cdn/fonts/futura/futura_n4.df36ce3d9db534a4d7947f4aa825495ed740e4107941.woff2?h1=YXNzeXJpYW4tMy5hY2NvdW50Lm15c2hvcGlmeS5jb20&amp;h2=ZHVua2ktZGVtby5teXNob3BpZnkuY29t&amp;hmac=4685eb3a7180e62ddf191370d23164d60304af1a30c582deb0889ba465b1b403") format("woff2"),
                url("/cdn/fonts/futura/futura_n4.6bce24beb4ba1ff4ddeb20f7cd6e2fa513a3d6ec2d45.woff?h1=YXNzeXJpYW4tMy5hY2NvdW50Lm15c2hvcGlmeS5jb20&amp;h2=ZHVua2ktZGVtby5teXNob3BpZnkuY29t&amp;hmac=e4130ced5fd30018d43e34eaa324b8777e07b07982b23cb6f1a3039115366e9a") format("woff");
            }

            @font-face {
                font-family: Futura;
                font-weight: 400;
                font-style: normal;
                src: url("/cdn/fonts/futura/futura_n4.df36ce3d9db534a4d7947f4aa825495ed740e4107941.woff2?h1=YXNzeXJpYW4tMy5hY2NvdW50Lm15c2hvcGlmeS5jb20&amp;h2=ZHVua2ktZGVtby5teXNob3BpZnkuY29t&amp;hmac=4685eb3a7180e62ddf191370d23164d60304af1a30c582deb0889ba465b1b403") format("woff2"),
                url("/cdn/fonts/futura/futura_n4.6bce24beb4ba1ff4ddeb20f7cd6e2fa513a3d6ec2d45.woff?h1=YXNzeXJpYW4tMy5hY2NvdW50Lm15c2hvcGlmeS5jb20&amp;h2=ZHVua2ktZGVtby5teXNob3BpZnkuY29t&amp;hmac=e4130ced5fd30018d43e34eaa324b8777e07b07982b23cb6f1a3039115366e9a") format("woff");
            }


            .header-area .main-menu > nav > ul > li > a,
            .header-area .header-right-wrap .setting-wrap .setting-content ul li h4,
            .header-area .cart-wrap .shopping-cart-content .shopping-cart-top h4,
            .header-area .header-right-wrap .cart-empty-title p,
            .header-area .main-search-active .sidebar-search-input .form-search input,
            .clickable-mainmenu .clickable-menu-style ul li a,
            .header-area .cart-wrap > button span.cart-price {
                font-family: Futura, sans-serif;
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
            }

            .header-area .main-menu > nav > ul > li ul.submenu li a,
            .header-area .main-menu > nav > ul > li ul.mega-menu > li ul li a,
            .header-area .main-menu > nav > ul > li ul.mega-menu > li a.menu-title,
            .header-right-wrap .setting-wrap .setting-content ul li ul li {
                font-family: Futura, sans-serif;
                font-style: normal;
                font-weight: 400;
                font-size: 18px;
            }

            .header-area .cart-wrap:hover > button span.cart-price {
                color: #dd321e;
            }

            .header_style_5 .main-menu > nav > ul > li:first-child {
                margin-left: 0;
            }

            .header_style_5 .main-menu > nav > ul > li > a {
                line-height: 80px;
            }

            .header_style_5 .header_top_search button,
            .header_style_5 .header-search-container .header_5_btn {
                background: #dd321e;
                border: 1px solid #dd321e;
            }

            .header_style_5 .header_top_search button:hover,
            .header_style_5 .header-search-container .header_5_btn:hover {
                color: #dd321e;
                background: transparent;
            }

            .header-area.menu-left .main-menu {
                text-align: left
            }

            .header-area.menu-center .main-menu {
                text-align: center;
                margin-left: 0;
            }

            .header-area.menu-right .main-menu {
                text-align: right
            }

            .header-small-mobile .header-right-wrap .mobile-off-canvas a {
                color: #000000;
            }

            .header-small-mobile .header-right-wrap .mobile-off-canvas a:hover {
                color: #dd321e;
            }

            .clickable-menu.clickable-mainmenu-active i {
                transition: .3s;
                color: #ffffff;
                background: #000000;
                outline: 1px solid #000000;
            }

            .clickable-menu.clickable-mainmenu-active i:hover {
                color: #dd321e;
            }

        </style>


    </div>