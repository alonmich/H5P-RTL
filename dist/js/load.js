H5P.jQuery(document).ready(function() {
	var siteURL = window.location.hostname.cleanup();
    var originalPageID = H5P.jQuery('body', window.parent.document).attr('class').match(/page-id-[\w-]*\b/);
	H5P.jQuery('body').addClass("rtl " + siteURL + " " + originalPageID);
});

String.prototype.cleanup = function() {
    return this.toLowerCase().replace(/[^a-zA-Z0-9]+/g, "");
 }