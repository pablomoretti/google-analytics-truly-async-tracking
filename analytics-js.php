(function(window,document) {

<?php
$analytics = file_get_contents('http://www.google-analytics.com/analytics.js');
echo $analytics;
?>

})(window.parent,window.parent.document);
