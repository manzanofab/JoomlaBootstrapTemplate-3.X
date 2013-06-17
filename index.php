<?php
defined('_JEXEC') or die;
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
// Load optional rtl Bootstrap css and Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = true);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<jdoc:include type="head" />
  <!--[if lt IE 9]>
    <script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
  <![endif]-->
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/custom.css" rel="stylesheet" type="text/css">
</head>
<body>
<header class="row-fluid">
<div class="span4">
	<a href="/"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/logo.png" alt="Click for home. " class="pull-left visible-tablet visible-desktop" /><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/mobile-logo.png" alt="click for home." class="visible-phone" /></a>
</div>
    <div class="span8">
<jdoc:include type="modules" name="search" style="html5" />
    </div>
</header>
<div class="row-fluid">
  <nav class="span12 navbar">
    <div class="navbar-inner">
      <div class="container-fluid"> 
		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
		</a>
        <div class="nav-collapse collapse">
          <jdoc:include type="modules" name="nav" style="none" />
        </div>
      </div>
    </div>
  </nav>
</div>
<div class="row-fluid">
  <div class="span12">
<jdoc:include type="modules" name="breadcrumbs" style="html5" />
    </div>
</div>
<div class="row-fluid">
  <div class="span9">
<jdoc:include type="message" />
<jdoc:include type="component" />
    </div>
    <div class="span3">
<jdoc:include type="modules" name="right" style="html5" />
    </div>
</div>
<footer class="row-fluid">
  <div class="span9">
      <p>&copy; Fabian Manzano</p>
<jdoc:include type="modules" name="footer" style="html5" />
    </div>
    <div class="span3">
      <img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/footerlogo.png" class="pull-right" alt="Fabian manzano" />
    </div> 
</footer>
</body>
</html>
