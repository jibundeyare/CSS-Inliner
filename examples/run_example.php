<?php
	require __DIR__ . '/../src/Northys/CssInliner/CssInliner.php';
	require __DIR__ . '/../vendor/autoload.php';
	
	$inliner = new Northys\CSSInliner;
	$inliner->addCSS(__DIR__ . '/example.css');
	$inliner->render(file_get_contents(__DIR__ . '/example.html'));
