/**
 * Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or https://ckeditor.com/legal/ckeditor-oss-license
 */

if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
	CKEDITOR.tools.enableHtml5Elements( document );

var initSample = ( function() {
	console.log('INIT');

	return function() {
		console.log('func');
		var editorElements = document.getElementsByClassName( 'textarea-ckeditor' );
		console.log('before FOR');
		for(var i = 0; i < editorElements.length; i++)
		{
			CKEDITOR.replace(editorElements.item(i));
			console.log('REPLACED');
		}
	};
} )();


$(document).ready(initSample);

