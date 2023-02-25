<?php
include "./admin/lib/database.php";
include "./lib/siteinforesults.php";
?>
<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width">

<title>Daily Deals on eBay | Best deals and Free Shipping</title>

<!-- =========== FAVICON ========== -->
<link rel="icon" href="./admin/uploads/<?php echo $site_favicon;?>">

<meta name="description" content="Save money on the best Deals online with eBay Deals. We update our deals daily, so check back for the best deals - Plus Free Shipping"><meta name="yandex-verification" content="6e11485a66d91eff"><meta name="referrer" content="unsafe-url"><meta name="y_key" content="acf32e2a69cbc2b0"><meta name="msvalidate.01" content="34E98E6F27109BE1A9DCF19658EEEE33"><link rel="preconnect" href="https://ir.ebaystatic.com"><link rel="canonical" href="https://www.ebay.com/deals"><link href="https://i.ebayimg.com" rel="preconnect"><meta name="google-site-verification" content="8kHr3jd3Z43q1ovwo0KVgo_NZKIEMjthBxti8m8fYTg"><meta property="fb:app_id" content="102628213125203"><!-- NGMARS SIGNATURE --><link rel="dns-prefetch" href="//ir.ebaystatic.com"><link rel="dns-prefetch" href="//secureir.ebaystatic.com"><link rel="dns-prefetch" href="//i.ebayimg.com"><link rel="dns-prefetch" href="//rover.ebay.com"><script>$ssgST=new Date().getTime();</script><!--M#s0-2-8-13--><script></script><!--M/--><link rel="stylesheet" href="./assets/css/DealsHub-Desktop-kQaLj--w.css"><link rel="stylesheet" type="text/css" href="./assets/css/z0utcultka4xfnsilhtym0w0yy2.css?proc=DU:N"><link rel="prefetch" href="https://ir.ebaystatic.com/cr/v/c1/skin/svg/spinner/v2/spinner-large.svg"><script>
(function(w, d, e, u, c, g, a, b){
w["SSJSConnectorObj"] = w["SSJSConnectorObj"] || {ss_cid : c, domain_info: g};
a = d.createElement(e);
a.async = true;
a.src = u;
b = d.getElementsByTagName(e)[0];
b.parentNode.insertBefore(a, b);
})(window,document,"script","https://ir.ebaystatic.com/rs/v/dxtuvtkk2q3hpkc1xveeo13iaek.js","bjp5","auto");
</script></head><body><header class="container"><!--M#s0-2-15-8--><div class="dne-ui-gh-wrapper"><style>.gh-hide-if-nocss{display:none;}.gh-ar-hdn{color:#fff}</style> <div class="gh-acc-exp-div gh-hide-if-nocss"><a id="gh-hdn-stm" class="gh-acc-a" href="#mainContent">Skip to main content</a></div><!--[if lt IE 9]><div id="gh" role="banner" class="gh-IE8 gh-flex gh-pre-js gh-w "><![endif]-->

<header id="gh" role="banner" class="gh-ui-6-5 gh-flex gh-pre-js gh-w gh-sch-prom " data-treatment>
	<div class="header_logo">
		<a href="#" class="logo_link" style="height: 60px; display: block; text-align: center;">
			<img src="./admin/uploads/<?php echo $site_logo;?>" class="logo_img" style="height: 60px">
		</a>
	</div>
</header> 

<div id="widgets-placeholder" class="widgets-placeholder"></div> </div><!--M/--></header><main class="container container-body" id="mainContent" role="main" tabindex="-1">

<div class="ebayui-refit-main-wrapper ebayui-desktop-wrapper" id="refit-spf-container"><!--M#s0-2-18-16-0[1]-->
<div class="navigation-desktop" _sp="p2344380.m2754.l2">
<h1><a href="#">Product</a></h1>
<nav role="tablist">
	<ul class="ebayui-refit-nav-ul" role="menubar">
		<li class="selected" role="menu">
`			<a class="navigation-desktop-menu-link" href="#" id="nav_222690" aria-label="Featured Current View">
				<span>All</span>
			</a>
		</li>
		<li  role="menu">
`			<a class="navigation-desktop-menu-link" href="#" id="nav_222690" aria-label="Featured Current View">
				<span>Featured</span>
			</a>
		</li>
	</ul>
</nav>
</div>

<!--M/-->
<div class="sections-container"><!--M#s0-2-18-16-6[2]--><div data-placement-id="19907" class="ebayui-dne-rtm" _sp="p2344380.m3252.l3">

<div style="overflow: hidden; display: block;">
<img border="0" src="./assets/images/jpMAAOSw7xpj3VV8-%24_57.JPG" alt="Save up to 10% from Watchbox Up to $300 off $2K+, $600 off $5K+, $1,300 off $10K. Get the coupon" usemap="#cmsmap_5828fa83-8300-4604-b173-d810975299da">
</div>


</div>


<!-- ============== PRODUCT SECTION START ================ -->
<div class="ebayui-dne-featured-card ebayui-dne-featured-with-padding">
<div class="ebayui-dne-banner-text">
	<h2><span><!--F#9[0]-->All Products<!--F/--></span></h2>
</div>
<div class="ebayui-dne-item-featured-card ebayui-dne-item-featured-card" _sp="p2344380.m3940.l4">
	<div class="row">

<?php 
// products table data fetch php code.
      $query = "SELECT * FROM products";
      $results = $conn->query($query);

      if($results== true){ 
        if ($results->num_rows > 0) {
           $rows= mysqli_fetch_all($results, MYSQLI_ASSOC); 
  ?>  
<?php foreach($rows as $row):?>
		
		<?php 
		   // Fetch product name for single page link
           $oProduct = $row['p_name'];
           $rProduct = preg_replace('#[ -]+#', '-', $oProduct);
         ?>
		<div class="col">
			<div class="dne-itemtile dne-itemtile-medium" itemscope="itemscope" data-listing-id="125654411291" itemtype="https://schema.org/Product">
				<a href="./single?product=<?php echo $rProduct;?>" itemprop="url" tabindex="-1" aria-hidden="true">
					<div class="dne-itemtile-imagewrapper">
						<div class="slashui-image-cntr">
							<img src="./admin/uploads/featured/<?php echo $row['f_image'];?>" alt="" aria-hidden="true">
						</div>
					</div>
				</a>
				
				<div class="dne-itemtile-detail">
					<a href="./single?product=<?php echo $rProduct;?>" itemprop="url">
						<h3 class="dne-itemtile-title ellipse-2">
							<span>
								<span class="ebayui-ellipsis-2" itemprop="name" style="margin: 10px 0px;">
									<?php echo $row['p_name'];?>
								</span>
							</span>
						</h3>
					</a>
					<div itemscope="itemscope" itemtype="http://schema.org/Offer" itemprop="offers" class="dne-itemtile-price" style="margin: 10px 0px;">
						<meta itemprop="priceCurrency" content="USD">
						<span itemprop="price" class="first">$<?php echo $row['p_price'];?></span>
						<span itemprop="availability" content="https://schema.org/InStock"></span>
					</div>
					<span><span class="dne-itemtile-delivery"><?php echo $row['shipping_mode'];?></span></span>
					<div class="p-btn" style="margin: 10px 0px;">
						<button class="details-btn" style="border: 1px solid #ddd; display: block; height: 30px; width: 50%;">
							<a href="./single?product=<?php echo $rProduct;?>" style="text-decoration:none; color: #767676">Details</a>
						</button>
					</div>
				</div>
			</div>
		</div>
<?php endforeach; ?>
  <?php
         } 
      }
?>		
	</div>
</div>
</div>
<!-- ============== PRODUCT SECTION END ================ -->







<!--M/--></div><div class="signup-section"></div></div></main><script src="./assets/js/c-DealsHub-Desktop-18pbI3A7.js"></script>
<script>$_mod.ready();</script>
<div id="widget-platform">   
		<script type="application/javascript">window.widget_platform = {"renderType":1,"renderDelay":500,"triggerFallBack":true,"status":4,"queryParam":null,"widgets":[{"html":"","css":null,"js":null,"jsInline":null,"init":""}],"showdiag":[]};</script>
		<div id="gh_user" style="display:none;"></div>
	</div>
<!--[if lt IE 9]><div id="glbfooter" role="contentinfo" class="gh-w gh-flex"><![endif]--><footer id="glbfooter" role="contentinfo" class="gh-w gh-flex"><div><div id="rtm_html_1650"></div><div id="rtm_html_1651"></div></div><h2 class="gh-ar-hdn">Additional site navigation</h2><div id="gf-t-box"><table class="gf-t" role="presentation">

<tr valign="top"><td class="gf-legal" style="text-align:center;">Copyright &copy; 1995-2023 eBay Inc. All Rights Reserved.</td></tr></table></div>
<!--[if lt IE 9]></div><![endif]--></footer>




<script type="text/javascript" src="./assets/js/v-l4llkud1fe1rfo0lgo4bqvkmbaa.js"></script><script type="text/javascript"> (function($){ if(typeof(GHFlyout) === 'function') { new GHFlyout("/gh/watchlist?modules=WATCH_LIST", "gh-wl-click", ""); } })(GH && GH.jQ); (function($){ if(typeof(GHFlyout) === 'function') { new GHFlyout("/gh/cart?modules=MINI_CART", "", "gh-minicart-hover"); } })(GH && GH.jQ); if(typeof GH!="undefined"&&GH){GH.urls={ autocomplete_js:"https://ir.ebaystatic.com/rs/c/desktop_ac_1024.js",fnet_js:"https://c.paypal.com/da/r/efbv3.js",ie8_js:"https://ir.ebaystatic.com/f/rbezfuzpu20wfd2kvejeb5adxyg.js",scandal_js:"https://ir.ebaystatic.com/cr/v/c1/ScandalJS-1.2.0-v4.min.js",widget_delivery_platform:"https://ir.ebaystatic.com/cr/v/c1/globalheader_widget_platform__v2-b70676194b.js",auto_tracking_widget:"https://ir.ebaystatic.com/rs/v/rqhfqcks2i0h5kr01f2accefyip.js",web_resource_tracker:"https://ir.ebaystatic.com/rs/v/mjgerh5fmy51nnbwjoml1g1juqs.js",behavior_js_collection:"https://ir.ebaystatic.com/cr/v/c1/aW5ob3VzZWpzMTY0ODcxMTc3Njc3MQ==-1.0.0.min.js" }; GH.GHSW={ raptor:0,sandbox:0,emp:0,ac1:0,ac2:0,ac3:0,ac4:"true",ac5:0,ac6:0,hideMobile:0,langSwitch:0,pool:0,ALERT_POPUPOFF:0,NEWALERT_POPUPOFF:0,newprofile:0,desktop_new_profile_service:"true",UNLOAD_Firefox:"true",UNLOAD_Chrome:"true",UNLOAD_IE:0,UNLOAD_Safari:0,ENABLE_HTTPS:"true",SEARCH_PROM:"true",MINICART:0,STICKY_HEADER:0 }; } if(typeof GH!="undefined" && GH){GH_config={"lng":"en-US","geoLang":"[]","suppressGeoUserUpdateInfo":"false","siteId":"0","xhrBaseUrl":"https://www.ebay.com","env":"production",sin:0,pageId:2344380,selectedCatId:'-1',fn:"",id:""};GH.init();}</script><script src="./assets/js/ebay-cookies-1.js"></script><script type="text/javascript">(function(scope) {var trackingInfo = {"X_EBAY_C_CORRELATION_SESSION":"si=3a657e7a1860a1b509a566aefffce2ed,c=1,operationId=2344380,trk-gflgs=QA**"};scope.trkCorrelationSessionInfo={};scope.trkCorrelationSessionInfo.getTrackingInfo=function(){return trackingInfo;};scope.trkCorrelationSessionInfo.getTrackingCorrelationSessionInfo=function(){return trackingInfo.X_EBAY_C_CORRELATION_SESSION};})(window)</script><script type="text/javascript">if(typeof raptor !== "undefined" && raptor.require){var Uri=raptor.require("ebay/legacy/utils/Uri");$uri=function(href){return new Uri(href);};window.raptor.extend(window.raptor, require("ebay/legacy/adaptor-utils"));}</script><script id="taasHeaderRes" type="text/javascript" src="./assets/js/v-10341xh50yz21mhhydueu4m5wad.js"></script><script id="taasContent" type="text/javascript">try {new window.TaaSTrackingCore({"psi":"AZX6gQZo*","rover":{"imp":"/roverimp/0/0/9","clk":"/roverclk/0/0/9","uri":"https://rover.ebay.com"},"pid":"p2344380"});
var _plsubtInp={"eventFamily":"DFLT","samplingRate":100, "pageLoadTime": new Date().getTime(), "pageId":2344380, "app":"Testapp", "disableImp":true};var _plsUBTTQ=[];var TaaSIdMapTrackerObj = new TaaSIdMapTracker();TaaSIdMapTrackerObj.roverService("https://rover.ebay.com/idmap/0?footer");} catch (err) { console && console.log && console.log(err); }</script><script id="taasFooterRes" type="text/javascript" src="./assets/js/v-s0hteylevy4bpkd12dvkd4yi5ms.js"></script><script>/* ssgST: excluded from sampling */</script>


</body>
</html>