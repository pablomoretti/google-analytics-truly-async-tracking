<?php
header('Content-type: text/javascript');
header('Cache-Control: public, max-age=43200');
?>

(function(window,document) {

<?php
$analytics = file_get_contents('http://www.google-analytics.com/analytics.js');
echo $analytics;
?>

})(window.parent,window.parent.document);
