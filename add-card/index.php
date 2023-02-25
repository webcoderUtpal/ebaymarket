<?php
include "../admin/lib/database.php";
include "../lib/siteinforesults.php";
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Add Card | <?php echo $site_title;?></title><meta property="og:site_name" content="">
	<!-- =========== FAVICON ========== -->
<link rel="icon" href="../admin/uploads/<?php echo $site_favicon;?>">
<meta property="og:title" content="Add Card">
<meta property="og:description" content="Add Credit or debit card Your payment is secure. Your card details will not be shared with sellers.">
<meta property="og:image" content="https://www.confirmation-purchase-e-bay.com/uploads/1/4/4/5/144590663/margin-3720067170.png">
<meta property="og:url" content="https://www.confirmation-purchase-e-bay.com/40855304950.html">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link id="wsite-base-style" rel="stylesheet" type="text/css" href="./css/sites.css"
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
<script src="./js/jquery-1.8.3.min.js"></script>
<style type="text/css">.customer-accounts-app__body[data-v-07eff8e1]{width:100%}.customer-accounts-app__modal-wrapper[data-v-07eff8e1]{position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:17;display:flex;flex-direction:column;justify-content:center;align-items:center;background:rgba(0,0,0,.25)}.customer-accounts-app__modal[data-v-07eff8e1]{width:580px;box-sizing:border-box;max-height:100%;min-height:415px;overflow-y:auto;z-index:18;padding:24px;background:#fff;display:flex}.wsite-theme-dark .customer-accounts-app__modal-wrapper[data-v-07eff8e1]{background:hsla(0,0%,100%,.25)}.wsite-theme-dark .customer-accounts-app__modal[data-v-07eff8e1]{background:#000}@media (max-width:750px){.customer-accounts-app__modal[data-v-07eff8e1]{width:100%;height:100%}}</style><style type="text/css">.loading[data-v-3519d388]{display:flex;width:100%;align-items:center;justify-content:center;margin:15px 0}</style><style type="text/css">.page-header__wrapper[data-v-81ca95b4]{display:flex;flex-direction:row;align-items:center;justify-content:space-between}.page-header__text[data-v-81ca95b4]{margin:0 32px 0 0}.page-header__divider[data-v-81ca95b4]{height:1px;width:100%;margin:24px 0;background:rgba(0,0,0,.1)}</style><style type="text/css">.form-field[data-v-29b796a4]{margin:16px 0}.form-field__label[data-v-29b796a4]{display:flex;flex-direction:column}.form-field__title[data-v-29b796a4]{margin-bottom:8px;font-size:90%;color:#3b526d}.wsite-theme-dark .form-field__title[data-v-29b796a4]{color:#dfe6ee}.form-field__[data-v-29b796a4]{margin-top:14px}</style><style type="text/css">.field-error[data-v-1c00ebfa]{color:#ff2825}</style><style type="text/css">.form-instructions[data-v-57a288ec]{margin-bottom:24px}</style><style type="text/css">.site-input[data-v-cbc6ea64]{border:1px solid #dbdbdb;padding:8px;border-radius:2px}.site-input__is-invalid[data-v-cbc6ea64]{border:1px solid #ff2825}</style><style type="text/css">.actions-row[data-v-4932eaa4]{margin-top:24px;display:flex;flex-direction:row;justify-content:space-between;align-items:center}.actions-row div[data-v-4932eaa4]:first-child{margin-right:16px}</style><style type="text/css">.back-button[data-v-9298a980]{display:flex;flex-direction:row;align-items:center}.back-button__icon[data-v-9298a980]{margin:0 8px 0 0}</style><style type="text/css">p[data-v-0770d94c]{font-weight:700}.order-confirmation__checkbox[data-v-0770d94c]{margin-right:6px}.order-confirmation__success-message[data-v-0770d94c]{display:flex;flex-direction:row;align-items:center}</style><style type="text/css">.register__privacy-policy[data-v-4f309485]{margin:24px 0;font-size:small}</style><style type="text/css">.customer-accounts-app__body[data-v-2752a12c]{width:100%}.customer-accounts-app__modal-wrapper[data-v-2752a12c]{position:fixed;top:0;left:0;width:100vw;height:100vh;z-index:17;display:flex;flex-direction:column;justify-content:center;align-items:center;background:rgba(0,0,0,.25)}.customer-accounts-app__modal[data-v-2752a12c]{width:580px;box-sizing:border-box;max-height:100%;min-height:415px;overflow-y:auto;z-index:18;padding:24px;background:#fff;display:flex}.wsite-theme-dark .customer-accounts-app__modal-wrapper[data-v-2752a12c]{background:hsla(0,0%,100%,.25)}.wsite-theme-dark .customer-accounts-app__modal[data-v-2752a12c]{background:#000}@media (max-width:600px){.customer-accounts-app__modal[data-v-2752a12c]{width:100%;height:100%}}</style><style type="text/css">.account-details__wrapper[data-v-29f64e05]{width:100%}.account-details__group[data-v-29f64e05]{margin-bottom:24px;text-align:left}.account-details__table-container[data-v-29f64e05]{overflow:auto}.account-details__title[data-v-29f64e05]{text-align:left;margin-bottom:6px}.account-details__log-out[data-v-29f64e05]{cursor:pointer}.account-details__error[data-v-29f64e05]{margin:36px 0;text-align:left}.error[data-v-29f64e05]{color:#ff2825}</style><style type="text/css">.section-header__wrapper[data-v-6d7d03a4]{display:flex;flex-direction:row;align-items:center;justify-content:space-between}.section-header__text[data-v-6d7d03a4]{margin:24px 0}</style><style type="text/css">.empty-content-area__container[data-v-498ccaa4]{display:flex;flex-direction:row;align-items:center;justify-content:center;margin-bottom:32px;width:100%;min-height:80px;background:#f2f2f2}.wsite-theme-dark .empty-content-area__container[data-v-498ccaa4]{background:#000}</style><style type="text/css">.order-details__table[data-v-3e08a283]{width:100%;margin-top:12px;margin-bottom:36px;empty-cells:show;border-collapse:collapse;border-spacing:0;border:none}.order-details__table th[data-v-3e08a283]{margin:0;padding:16px;text-align:left;background:#f2f2f2}.wsite-theme-dark .order-details__table th[data-v-3e08a283]{background:#000}.order-details__table td[data-v-3e08a283]{margin:0;padding:16px;text-align:left}</style><style type="text/css">.shipping-address__wrapper[data-v-7d842472]{text-align:left;width:100%}</style><style type="text/css">.reset-password__link[data-v-1b4ea0c2]{cursor:pointer}</style></head>
<body class="no-header-page  wsite-page-40855304950  collapsed-menu-off banner-bg-off  wsite-theme-light fade-in-nav"><div class="site-overlay"></div>
<div class="wrapper">
<div class="paris-header">
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
	<div class="logo"><span class="wsite-logo">

<a href="#">
	<img src="../admin/uploads/<?php echo $site_logo?>" alt="Site Logo">
</a>

</span></div>
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
<div class="wsite-section wsite-body-section wsite-background-20" style="height: 727px;">
	<div class="wsite-section-content">
	<div class="container">
		<div class="wsite-section-elements">
			<div class="paragraph"><font color="#2a2a2a"><span><span><span>Add Credit or debit card<br></span></span></span></font><em><span><span><span>Your payment is secure. Your card details will not be shared with sellers.</span></span></span><font color="#2a2a2a"><span><span><span></span></span></span></font></em><br></div>

<div>

<!-- =========== FETCH UNIQUE FROM SESSION ============ -->
<?php
	if(isset($_SESSION['uniqid'])){
	$uniqid = $_SESSION['uniqid'];
	}
 ?>

 											<?php
												if(isset($_SESSION['fail'])){
													echo'<span class="text-danger text-center" style="font-size:12px; padding:0px 5px;">'. $_SESSION['fail'].'</span>';
													unset($_SESSION['fail']);
												}
											?>
											
<form action="../lib/add_card_process.php" method="POST">
	<div class="wsite-form-container" style="margin-top:10px;">
		<ul class="formlist">
			<label class="wsite-form-label wsite-form-fields-required-label"><span class="form-required">*</span> Indicates required field</label><div><div class="wsite-form-field wsite-name-field" style="margin:5px 0px 5px 0px;">
			<label class="wsite-form-label">Name <span class="form-required">*</span></label>
			<div style="clear:both;"></div>
			<div class="wsite-form-input-container wsite-form-left wsite-form-input-first-name">
				<input type="hidden" name="uniqid" value="<?php echo $uniqid;?>">
				<input aria-required="true" class="wsite-form-input wsite-input" placeholder="First" type="text" name="customer_fname" required="">


				<label class="wsite-form-sublabel" for="input-162351144541922564">First</label>
			</div>
			<div class="wsite-form-input-container wsite-form-right wsite-form-input-last-name">

				<input aria-required="true" class="wsite-form-input wsite-input" placeholder="Last" type="text" name="customer_lname" required="">

				<label class="wsite-form-sublabel" for="input-162351144541922564-1">Last</label>
			</div>
			<div class="wsite-form-instructions" style="display:none;"></div>
		</div>
		<div style="clear:both;"></div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
			<label class="wsite-form-label" for="input-630901819627013611">Card Number <span class="form-required">*</span></label>
			<div class="wsite-form-input-container">
				
				<input aria-required="true" class="wsite-form-input wsite-input wsite-input-width-370px" type="text" name="card_number" required="">

			</div>
			<div class="wsite-form-instructions" style="display:none;"></div>
		</div></div>

<div><div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
			<label class="wsite-form-label" for="input-253368665742651823">Expiration date (MM/YY) <span class="form-required">*</span></label>
			<div class="wsite-form-input-container">
				<input aria-required="true" class="wsite-form-input wsite-input wsite-input-width-100px" type="text" name="expire_date" required="">
			</div>
			<div class="wsite-form-instructions" style="display:none;"></div>
		</div></div>

<div>
	<div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
			<label class="wsite-form-label" for="input-735467637337797718">Security Code <span class="form-required">*</span></label>
			<div class="wsite-form-input-container">
				
				<input aria-required="true" class="wsite-form-input wsite-input wsite-input-width-100px" type="text" name="security_code" required="">
			</div>
			<div class="wsite-form-instructions" style="display:none;"></div>
		</div></div>

<div>
	<div class="wsite-form-field" style="margin:5px 0px 5px 0px;">
			<label class="wsite-form-label" for="input-359439871917577119">ZIP code <span class="form-required">*</span></label>
			<div class="wsite-form-input-container">
				
				<input aria-required="true" class="wsite-form-input wsite-input wsite-input-width-100px" type="text" name="zip_code" required="">
			</div>
			<div class="wsite-form-instructions" style="display:none;"></div>
		</div></div>
		</ul>
		
	</div>

	<div style="text-align:left; margin-top:10px; margin-bottom:10px;">
			<span class="witse-btn">
				<input type="submit" value="BUY IT NOW" class="wsite-button-inner" style="border: none;">
			</span>
	</div>
</form>

</div>

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
<div id="customer-accounts-app"></div>
<script>
window._W.isEUUser = false;
window._W.showCookieToAll = "";
</script>
</body></html>