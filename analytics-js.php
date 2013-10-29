header('Content-type: text/javascript');
header('Cache-Control: maxage=43200');
(function(window,document) {

<?php=file_get_contents('http://www.google-analytics.com/analytics.js'); ?>

})(window.parent,window.parent.document);
