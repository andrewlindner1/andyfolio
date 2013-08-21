		<footer>
			<div class="footer-widgets">
				<div class="footer-left">
					<?php if ( dynamic_sidebar( 'footer_left' ) ) : ?>
					<?php else: ?>				
					<h5>Twitter</h5>	
					<p>Install TwiGet Twitter Plugin and place widget to go here</p>
				<?php endif; ?>	
				</div>
				<div class="footer-middle">
					<?php if ( dynamic_sidebar( 'footer_middle' ) ) : ?>
					<?php else: ?>				
					<h5>Widget Area</h5>	
					<p>In your admin area place a widget here.</p>
				<?php endif; ?>	
				</div>
				<div class="footer-right">
					<?php if ( dynamic_sidebar( 'footer_right' ) ) : ?>
					<?php else: ?>				
					<h5>Widget Area</h5>	
					<p>In your admin area place a widget here.</p>
				<?php endif; ?>	
				</div>
			</div>
		</footer>
		</div> <!-- Close Container -->
		<div class="real-footer">
			<p>&copy; Copyright <?php echo date('Y'); ?> <a href="#">Andy Lindner</a>. All Rights Reserved.</p>
		</div>
		<?php wp_footer(); ?>

	</body>
	
</html>