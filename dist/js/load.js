H5P.jQuery(document).ready(function() {
    var pageID = getPageID();
    var siteURL = window.location.hostname.cleanup();
	H5P.jQuery('body').addClass("rtl " + siteURL + " " + pageID);
});

String.prototype.cleanup = function() {
    return this.toLowerCase().replace(/[^a-zA-Z0-9]+/g, "");
 }

 var getPageID = function () {
    // Embed from WP page
    var wordpress_parent = H5P.jQuery('body', window.parent.document).attr('class');

    if(wordpress_parent !== undefined)
        return wordpress_parent.match(/page-id-[\w-]*\b/);
    
    // Embed from
    var h5p_url = getParams(window.location.href);
    if(h5p_url.id !== undefined)
        return 'page-id-'+h5p_url.id;

    return '';
}

var getParams = function (url) {
	var params = {};
	var parser = document.createElement('a');
	parser.href = url;
	var query = parser.search.substring(1);
	var vars = query.split('&');
	for (var i = 0; i < vars.length; i++) {
		var pair = vars[i].split('=');
		params[pair[0]] = decodeURIComponent(pair[1]);
	}
	return params;
};