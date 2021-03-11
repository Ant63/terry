<div id="mainholder">
	<div id="header">
		<div class="widther">
			<div id="linkedin"><a href="https://www.linkedin.com/in/terryforsey/" target="_blank"><span>Follow</span></a></div>
			<div id="twitter"><a href="https://twitter.com/TerryForsey" target="_blank"><span>Follow</span></a></div>
			<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" id="logo"><img src="<?php print $logo; ?>" alt="Terry Forsey Consulting – Software Sales and Marketing" /></a>
			<a href="/contact-us" id="contactbutton">Contact</a>
			<div id="phonenumber"><a href="tel:01536-771440">01536 771440</a></div>
			<?php print render($page['header']); ?>
		</div>
	</div>
	<div id="main">
		<div class="widther">
			<?php if ($page['featured']) : ?><div id="featured"><?php print render($page['featured']); ?></div><?php endif; ?>
			<div id="maincol" <?php if ($page['right']) : ?>class="withright" <?php endif; ?>>
				<div class="pad">
					<?php if ($messages) : ?><?php print $messages; ?><?php endif; ?>
					<?php print render($page['help']); ?>
					<?php if ($breadcrumb) : ?><?php print $breadcrumb; ?><?php endif; ?>
					<?php if ($tabs) : ?><?php print render($tabs); ?><?php endif; ?>
					<?php print render($page['content']); ?>
				</div>
			</div>
			<?php if ($page['right']) : ?><div id="rightcol"><?php print render($page['right']); ?></div><?php endif; ?>
		</div>
	</div>
	<div id="footer">
		<div class="widther">
			<?php if ($page['footer']) : ?><?php print render($page['footer']); ?><?php endif; ?>
			<div id="copy">&copy; Terry Forsey Consulting <?php echo date("Y"); ?></div>
		</div>
	</div>

</div>