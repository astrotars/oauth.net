<?php
@header('X-Pingback: https://webmention.io/oauth/xmlrpc');
@header('Link: <https://webmention.io/oauth/webmention>; rel="webmention"');
function e($t) { return htmlspecialchars($t); }
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo !empty($page_title) ? $page_title : "OAuth &mdash; An open protocol to allow secure API authorization in a simple and standard method from web, mobile, and desktop applications." ?></title>
  <link href="/stylesheets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/style.css?2" rel="stylesheet" type="text/css" />
  <link href="/stylesheets/print.css" rel="stylesheet" type="text/css" media="print" />
  <link rel="webmention" href="https://webmention.io/oauth/webmention" />
</head>
<body>

<div id="ea">
  <div class="ea-placement"><div class="ea-content"></div></div>
</div>

<?php if($_SERVER['SERVER_NAME'] == 'oauth.net'): ?>
<script src="https://cdn.usefathom.com/script.js" site="KKZQTOOD" defer></script>
<script>
var trackOutboundClick = function(url, code) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
   if(window.fathom) {
     window.fathom.trackGoal(code, 0);
   }
}
</script>
<?php endif; ?>

<?php require(__DIR__.'/_nav_primary.php'); ?>
<?php require(__DIR__.'/_new_banner.php'); ?>

