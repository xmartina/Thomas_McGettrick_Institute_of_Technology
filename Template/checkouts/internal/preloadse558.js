
    (function() {
      var baseURL = "https://cdn.shopify.com/shopifycloud/checkout-web/assets/";
      var scripts = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/runtime.baseline.en.945eb16bfcc9085ea1cf.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/5161.baseline.en.5e9fb3cb6877119dac74.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/3000.baseline.en.50b57cbfb508da8a0fdf.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/4085.baseline.en.7a7a24eb6d512bc70ac3.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.be990df124699a2d2e25.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2542.baseline.en.7ec3164fc01d10bbabc6.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/5413.baseline.en.f0efebbde27c08a53dc0.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2080.baseline.en.4108502d9f2c1ca7f6c3.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/85.baseline.en.720079b87a169311341e.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/8441.baseline.en.95a9d69ba067f3121fe3.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/9649.baseline.en.dfd8549796f889e5cd84.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/8044.baseline.en.b05a4b0479a30cca1386.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/2267.baseline.en.eb05f962757dc5de4ad1.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/668.baseline.en.0354c1ce2e820fa55157.js","https://cdn.shopify.com/shopifycloud/checkout-web/assets/OnePage.baseline.en.2cfcc83cbbbc2b98426f.js"];
      var styles = ["https://cdn.shopify.com/shopifycloud/checkout-web/assets/5161.baseline.en.c876bb950df9ce6713b5.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/app.baseline.en.b63aa65e131937bbdbd3.css","https://cdn.shopify.com/shopifycloud/checkout-web/assets/6268.baseline.en.97c35071151d204d0328.css"];
      var fontPreconnectUrls = [];
      var fontPrefetchUrls = [];
      var imgPrefetchUrls = [];

      function preconnect(url, callback) {
        var link = document.createElement('link');
        link.rel = 'dns-prefetch preconnect';
        link.href = url;
        link.crossOrigin = '';
        link.onload = link.onerror = callback;
        document.head.appendChild(link);
      }

      function preconnectAssets() {
        var resources = [baseURL].concat(fontPreconnectUrls);
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) preconnect(res, next);
        })();
      }

      function prefetch(url, as, callback) {
        var link = document.createElement('link');
        if (link.relList.supports('prefetch')) {
          link.rel = 'prefetch';
          link.fetchPriority = 'low';
          link.as = as;
          if (as === 'font') link.type = 'font/woff2';
          link.href = url;
          link.crossOrigin = '';
          link.onload = link.onerror = callback;
          document.head.appendChild(link);
        } else {
          var xhr = new XMLHttpRequest();
          xhr.open('GET', url, true);
          xhr.onloadend = callback;
          xhr.send();
        }
      }

      function prefetchAssets() {
        var resources = [].concat(
          scripts.map(function(url) { return [url, 'script']; }),
          styles.map(function(url) { return [url, 'style']; }),
          fontPrefetchUrls.map(function(url) { return [url, 'font']; }),
          imgPrefetchUrls.map(function(url) { return [url, 'image']; })
        );
        var index = 0;
        (function next() {
          var res = resources[index++];
          if (res) prefetch(res[0], res[1], next);
        })();
      }

      function onLoaded() {
        preconnectAssets();
        prefetchAssets();
      }

      if (document.readyState === 'complete') {
        onLoaded();
      } else {
        addEventListener('load', onLoaded);
      }
    })();
  