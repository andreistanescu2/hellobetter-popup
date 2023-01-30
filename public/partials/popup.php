<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.andreistanescu.com
 * @since      1.0.0
 *
 * @package    Hellobetter_Popup
 * @subpackage Hellobetter_Popup/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div id="container-popup" class="hellobetter-popup" data-req-uri="<?php echo get_page_uri();?>">
	
	<div class="popup_inner">
		<div class="popup_header">
	    	<div class="banner">
	    		<img alt="" src="<?php do_action('hellobetter_popup_media', 'popup-header.svg');?>" />
	    	</div>
	    	<div class="copy">
		        <h4><?php echo __('Mehr Unterstützung zum Mitnehmen?', 'hellobetter-popup') ?></h4>
		        <p><?php echo __('Deine Verbindung zwischen Körper und Kopf stärken? Wir unterstützen dich mit vielen Infos und Strategien.', 'hellobetter-popup') ?></p>
	    	</div>
	    </div>
	    <div class="popup_body">
	    	<form id="hellobetter_popup">
	    		<input type="email" name="email" id="email" placeholder="<?php echo __('beispiel@email.de', 'hellobetter-popup'); ?>">
	    		<button type="submit"><?php echo __('Senden', 'hellobetter-popup') ?></button>
	    	</form>
	    </div>
	</div>	

	<a href="#" class="close-popup"><?php echo __('Schließen', 'hellobetter-popup') ?></a>
</div>
    