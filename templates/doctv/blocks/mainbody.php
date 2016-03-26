<body id="bd" class="dark <?php echo strtolower($helper->device); ?>" data-spy="scroll" data-target="#menu">
	<header id="header">
		<div class="wrapper _dark-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						{Live}
						<div class="logo">
							<a href="<?php echo JURI::base(); ?>" title="<?php echo $sitename; ?>"><?php echo $sitename; ?></a>
						</div>
					</div>
					<div class="col-md-7">
						<?php if ($helper->countModules('menu')) { ?>
							<jdoc:include type="modules" name="menu" />
						<?php } ?>
					</div>
					<div class="col-md-2">
						{header items}
						<?php if ($helper->countModules('search')) { ?>
							{Search}
							<jdoc:include type="modules" name="search" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php if ($helper->countModules('showcase')) { ?>
		<section id="showcase">
			<div class="wrapper gray-dark">
				{Showcase}
				<jdoc:include type="modules" name="showcase" />
			</div>
		</section>
	<?php } ?>
	<?php if ($helper->countModules('special')) { ?>
		<aside id="showcase">
			<div class="wrapper yellow">
				{Special}
				<jdoc:include type="modules" name="special" />
			</div>
		</aside>
	<?php } ?>
	<main id="mainbody">
		<div class="wrapper content gray-dark">
			<?php if ($isFrontpage) { ?>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<jdoc:include type="component" />
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if ($helper->countModules('content-left') || $helper->countModules('content-center') || $helper->countModules('content-right')) { ?>
				<div class="container">
					<div class="row">
						<?php if ($helper->countModules('content-right')) { ?>
							<div class="col-xs-12 col-md-4"><jdoc:include type="modules" name="content-right" /></div>
						<?php } ?>
						<?php if ($helper->countModules('content-center')) { ?>
							<div class="col-xs-12 col-md-4"><jdoc:include type="modules" name="content-center" /></div>
						<?php } ?>
						<?php if ($helper->countModules('content-left')) { ?>
							<div class="col-xs-12 col-md-4"><jdoc:include type="modules" name="content-left" /></div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</div>
		<?php if ($helper->countModules('main-top-left') || $helper->countModules('main-top-right')) { ?>
			<div class="wrapper main-top gray-darker">
				<div class="container">
					<div class="row">
						<?php if ($helper->countModules('main-top-right')) { ?>
							<div class="col-xs-12 col-md-6"><jdoc:include type="modules" name="main-top-right" /></div>
						<?php } ?>
						<?php if ($helper->countModules('main-top-left')) { ?>
							<div class="col-xs-12 col-md-6"><jdoc:include type="modules" name="main-top-left" /></div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if ($helper->countModules('main-left') || $helper->countModules('main-right')) { ?>
			<div class="wrapper main gray-dark">
				<div class="container">
					<div class="row">
						<?php if ($helper->countModules('main-right')) { ?>
							<div class="col-xs-12 col-md-6"><jdoc:include type="modules" name="main-right" /></div>
						<?php } ?>
						<?php if ($helper->countModules('main-left')) { ?>
							<div class="col-xs-12 col-md-6"><jdoc:include type="modules" name="main-left" /></div>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
		<?php if ($helper->countModules('main-bot')) { ?>
			<div class="wrapper main-bot gray">
				<jdoc:include type="modules" name="main-bot" />
			</div>
		<?php } ?>
	</main>
	<footer id="footer">
		<div class="wrapper gray-darker">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-3 col-lg-2">
						<?php if ($helper->countModules('copyright')) { ?>
							<jdoc:include type="modules" name="copyright" />
						<?php } ?>
					</div>
					<div class="col-xs-12 col-md-9 col-lg-10">
						<jdoc:include type="modules" name="footer" />
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php if ($helper->countMessages($app->getMessageQueue())) { ?><jdoc:include type="message" /><?php } ?>
<div id="ajax-cache" style="display: none !important;"></div>
<script src="<?php echo JURI::base(); ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo JURI::base(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo JURI::base(); ?>assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="<?php echo JURI::base(); ?>assets/js/main.min.js?_=20160326"></script>
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(["trackPageView"]);
    _paq.push(["enableLinkTracking"]);
    (function () {
        var u = "http://93.190.24.112/piwik/";
        _paq.push(["setTrackerUrl", u + "piwik.php"]);
        _paq.push(["setSiteId", "7"]);
        var d = document, g = d.createElement("script"), s = d.getElementsByTagName("script")[0];
        g.type = "text/javascript";
        g.defer = true;
        g.async = true;
        g.src = u + "piwik.js";
        s.parentNode.insertBefore(g, s);
    })();
</script>
</body>