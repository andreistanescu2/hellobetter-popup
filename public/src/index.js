import 'the-new-css-reset/css/reset.css';
import './fonts.scss';
import '../node_modules/popups/css/popupS.min.css';
import './index.scss';

const popupS = require('popups');
const jQuery = require('jquery');
const validate = require('jquery-validation');

jQuery.extend(jQuery.validator.messages, {
    required: 'Bitte schreibe deine Email in dieser Form: beispiel@email.de',
    email: 'Bitte schreibe deine Email in dieser Form: beispiel@email.de',
});

jQuery(document).ready(function($) {
    'use strict';

    const bodyHeight = $(document).height();
    const triggerHeight = (bodyHeight / 2) - 484;
    let triggered = false;

    window.addEventListener("scroll", () => {
        const currentScroll = window.pageYOffset;
		
		//console.log(bodyHeight);
		//console.log(triggerHeight);
		//console.log(currentScroll);

        if (currentScroll >= triggerHeight && triggered === false) {
		    popupS.modal({
		        content: hellobetter_popup.template,
		        onOpen: function() {
		            $('#hellobetter_popup').validate({
		                rules: {
		                    email: {
		                        required: true,
		                        email: true,
		                        normalizer: function(value) {
		                            return $.trim(value);
		                        }
		                    }
		                },
		                submitHandler: function(form) {
		                    $('#container-popup .popup_inner').empty().append(hellobetter_popup.template_success);
		                }
		            });
		        }
		    });
		
			$('.close-popup').on('click', function (event) {
				event.preventDefault();
				$('#popupS-close').trigger('click');
		    });	

            triggered = true;
        }
    });
});