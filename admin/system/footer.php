<?php if(!defined("APP")) die(); // Protect this page ?>
						<footer>
						  <a href="http://gempixel.com/doc/premium-media-script-documentation/?utm_source=app-admin&amp;utm_medium=footer&amp;utm_campaign=documentation" target="_blank">Online Documentation</a> - Version <?php echo _VERSION ?> <a href="http://cdn.gempixel.com/updater/?token=<?php echo md5('ems'); ?>&amp;current=<?php echo _VERSION; ?>" target="_blank">(Check for update)</a>
						  <div class="pull-right">
						  	<?php echo date("Y") ?> &copy; <a href="http://gempixel.com">KBRmedia</a>. All Rights Reserved.
						  </div>
						</footer>
      		</div>
      	</div>
    	</div>    
    <?php Main::admin_enqueue(TRUE) ?>
    </body>
</html>