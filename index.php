<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Google Analytics Truly Asynchronous Tracking</title>
		<script type="text/javascript">
            var timerStart = Date.now();
        </script>
		<script type="text/javascript">

			(function (i, s, r, url) {

			    i['GoogleAnalyticsObject'] = r;
			    i[r] = i[r] || function () {
			        (i[r].q = i[r].q || []).push(arguments)
			    },

			    i[r].l = 1 * new Date();

			    //Thanks Stoyan Stefanov http://www.phpied.com/non-onload-blocking-async-js/
			    var iframe = document.createElement('iframe');
			    (iframe.frameElement || iframe).style.cssText = "width: 0; height: 0; border: 0; position: absolute";
			    iframe.src = "javascript:false";
			    iframe.id = "GoogleAnalyticsFrienlyIframe";
			    iframe.title = ""; iframe.role="presentation";
			    var where = document.getElementsByTagName('script')[0];
			    where.parentNode.insertBefore(iframe, where);
			    var doc, dom;
			    try {
    				doc = iframe.contentWindow.document;
  			    } catch(e) {
				    dom = document.domain;
    				iframe.src="javascript:var d=document.open();d.domain='"+dom+"';void(0);";
    				doc = iframe.contentWindow.document;
  			    }
     			doc.open()._l = function() {
    			    var js = this.createElement("script");
			        if(dom) this.domain = dom;
			        js.src = url;
			        this.body.appendChild(js);
			    };
  			    doc.write('<body onload="document._l();">');
  			    doc.close();
			})(window, document, 'ga', '/analytics-js.php');

			ga('create', 'UA-42736011-1', 'herokuapp.com');

			ga('send', 'pageview',{
  				'hitCallback': function(){
  					document.getElementById('output').innerHTML = document.getElementById('output').innerHTML + 'Track page: ' + (Date.now()-timerStart) + 'ms <br>';
				}
  			});

  			window.onload = function(){
  				document.getElementById('output').innerHTML = document.getElementById('output').innerHTML + 'Load page: ' + (Date.now()-timerStart) + 'ms <br>';
  			}

		</script>
	</head>
	<body>
		<h1> Google Analytics Truly Asynchronous Tracking </h1>
		<div id="output" > </div>
	</body>
</html>

