/*
 * jQuery File Upload Plugin JS Example 6.5
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */

/*jslint nomen: true, unparam: true, regexp: true */
/*global $, window, document */
$(document).ready(function() {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload();
      
    // Enable iframe cross-domain access via redirect option:
    /*$('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );*/

});
