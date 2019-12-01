<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1.0" name="viewport">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
<style>
* {
	transform: none !important;
  display: block !important;
  width: 100%;
 	font: normal 14px 'Monospace', 'Merriwether', Georgia, serif;
  color: #333;
  left:0;
  top:0;
  text-align: left;
  margin:0;
  z-index:999999999 !important;
}

h1, .h1 {
  font-size: 2.5rem;
}

h2, .h2 {
  font-size: 2rem;
}

h3, .h3 {
  font-size: 1.375rem;
}

h4, .h4 {
  font-size: 1.125rem;
}

h5, .h5 {
  font-size: 1rem;
}

h6, .h6 {
  font-size: 0.875rem;
}

.no-scroll {
	overflow:hidden;
	position:fixed;
}

blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}

blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}

.highlight-313354 {
  background-color:#f4f4f6;
  border-top:1px solid #eee;
  border-bottom:1px solid #eee;
  position:relative;
  width:100%;
  overflow-x:scroll;
  margin-bottom:2em;
  line-height:1.5em;
}

.number-313354{
  display: block;
  width: 2.5em;
  background: #333 !important;
  color: #fff !important;
  padding: 0.5em;
}

.content-313354{
	position: relative;
	display: inline-block;
	left: 5em;
	top:-2em;
}

.fixed-313354 {
  position: fixed;
	width: 100%;
	height: 100%;
	background: #fafafa;
	z-index: 9999;
}
	
.container-313354 {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
  padding: 1px 0;
  overflow: auto;
}

.row-313354 {
  position: relative;
  overflow: auto;
}

.row-313354 [class^="col"] {
  float: left;
  margin: 0.1rem 2%;
  min-height: 0.125rem;
}

.row-313354::after {
 	content: "";
 	display: table;
	clear: both;
}

.col-4-313354 {
  width: 29.33%;
}

.col-8-313354 {
  width: 62.66%;
}

.col-12-313354 {
  width: 96%;
}

.col-2-313354,
.col-4-313354,
.col-8-313354,
.col-12-313354 {
  width: 96%;
}

@media only screen and (min-width: 45em) {  /* 720px */
  .col-2-313354 {
    width: 12.66%;
  }

  .col-4-313354 {
    width: 29.33%;
  }

  .col-8-313354 {
    width: 62.66%;
  }

  .col-12-313354 {
    width: 96%;
  }
}
</style>
</head>
<body class="no-scroll">
<div class="fixed-313354" style="overflow-y: scroll !important;">
	<div class="container-313354">
		<div class="row-313354">
			<div class="col-12-313354">
			  <div class="col-4-313354">
    		  <h3>Oops, <?= $exception['instanceof'] ?> thrown:</h3>
    		  <blockquote>
    		    <?= $exception['message'] ?> on line
    				<?= $exception['line'] ?>
    	    </blockquote>
    		  <blockquote>
    		    At file [<a href="file:<?= $exception['pathfile'] ?>"><?= $exception['filename'] ?></a>]
    		  </blockquote>
    	  </div>
    	  <div class="col-8-313354">
    		  <div class="highlight-313354 row-313354">
    				<?php
    					foreach($exception['contents'] as $no => $content):
    				?>
    					<div class="number-313354"><?= $no ?></div>
    					<div class="content-313354"><?= htmlentities($content) ?></div>
    				<?php
    					endforeach;
    				?>
    				</div>
    			</div>
    			<div class="col-12-313354">
    			  <div class="highlight-313354 row-313354">
    			    <?php foreach($exception['traces'] as $no => $trace): ?>
    			     <?php if (!empty($trace)): ?>
        					<div class="number-313354"><?= $no ?></div>
        					<div class="content-313354"><?= htmlentities($trace) ?></div>
        			<?php endif; ?>
    					 <?php endforeach; ?>
    				</div>
    			</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>