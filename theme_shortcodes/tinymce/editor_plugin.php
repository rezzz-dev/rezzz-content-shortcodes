<?php 
header("Content-Type:text/javascript");

//Setup URL to WordPres
$absolute_path = __FILE__;
$path_to_wp = explode( 'wp-content', $absolute_path );
$wp_url = $path_to_wp[0];

//Access WordPress
require_once( $wp_url.'/wp-load.php' );

//URL to TinyMCE plugin folder
$plugin_url = plugins_url().'/contentplugin/theme_shortcodes/tinymce/';
?>
(function(){
	
	var icon_url = '<?php echo $plugin_url; ?>' + '/logo-rezzz.png';

	tinymce.create(
		"tinymce.plugins.ThemeBlvdShortcodes",
		{
			init: function(d,e) {
					
					d.addCommand( "themeblvdOpenDialog",function(a,c){
						
						// Grab the selected text from the content editor.
						selectedText = '';
					
						if ( d.selection.getContent().length > 0 ) {
					
							selectedText = d.selection.getContent();
							
						} // End IF Statement
						
						themeblvdSelectedShortcodeType = c.identifier;
						themeblvdSelectedShortcodeTitle = c.title;
						
						jQuery.get(e+"/dialog.php",function(b){
							
							jQuery('#themeblvd-shortcode-options').addClass( 'shortcode-' + themeblvdSelectedShortcodeType );
							
							// Skip the popup on certain shortcodes.
							
							switch ( themeblvdSelectedShortcodeType ) {
						
								// highlight
								
								case 'highlight':
							
								var a = '[highlight]'+selectedText+'[/highlight]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
							
								break;
								
								// alert
								
								case 'alert':
								
								var a = '[alert]'+selectedText+'[/alert]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// approved
								
								case 'approved':
								
								var a = '[approved]'+selectedText+'[/approved]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// attention
								
								case 'attention':
								
								var a = '[attention]'+selectedText+'[/attention]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// camera
								
								case 'camera':
								
								var a = '[camera]'+selectedText+'[/camera]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// cart
								
								case 'cart':
								
								var a = '[cart]'+selectedText+'[/cart]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// doc
								
								case 'doc':
								
								var a = '[doc]'+selectedText+'[/doc]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// download
								
								case 'download':
								
								var a = '[download]'+selectedText+'[/download]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// media
								
								case 'media':
								
								var a = '[media]'+selectedText+'[/media]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// note
								
								case 'note':
								
								var a = '[note]'+selectedText+'[/note]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// notice
								
								case 'notice':
								
								var a = '[notice]'+selectedText+'[/notice]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// quote
								
								case 'quote':
								
								var a = '[quote]'+selectedText+'[/quote]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// tags
								
								case 'tags':
								
								var a = '[tags]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// dropcap
								
								case 'dropcap':
								
								var a = '[dropcap]'+selectedText+'[/dropcap]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame
								
								case 'frame':
								
								var a = '[frame]'+selectedText+'[/frame]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame_left
								
								case 'frameleft':
								
								var a = '[frame_left]'+selectedText+'[/frame_left]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame_right
								
								case 'frameright':
								
								var a = '[frame_right]'+selectedText+'[/frame_right]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// frame
								
								case 'hr':
								
								var a = '[hr]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// one-fourth
								
								case 'one-fourth':
								
								var a = '[one-fourth]'+selectedText+'[/one-fourth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// one-third
								
								case 'one-third':
								
								var a = '[one-third]'+selectedText+'[/one-third]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// one-half
								
								case 'one-half':
								
								var a = '[one-half]'+selectedText+'[/one-half]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// two-third
								
								case 'two-third':
								
								var a = '[two-third]'+selectedText+'[/two-third]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// three-fourth
								
								case 'three-fourth':
								
								var a = '[three-fourth]'+selectedText+'[/three-fourth]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// three-fourth
								
								case 'clear':
								
								var a = '[clear]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
								
								// tabs
								
								case 'tabs':
								
								var a = '[tabs tab1="Title #1" tab2="Title #2" tab3="Title #3"] [tab1] Tab 1 content... [/tab1] [tab2] Tab 2 content... [/tab2] [tab3] Tab 3 content... [/tab3] [/tabs]';
								
								tinyMCE.activeEditor.execCommand("mceInsertContent", false, a);
								
								break;
															
								default:
								
								jQuery("#themeblvd-dialog").remove();
								jQuery("body").append(b);
								jQuery("#themeblvd-dialog").hide();
								var f=jQuery(window).width();
								b=jQuery(window).height();
								f=720<f?720:f;
								f-=80;
								b-=84;
							
							tb_show("Insert ThemeBlvd "+ themeblvdSelectedShortcodeTitle +" Shortcode", "#TB_inline?width="+f+"&height="+b+"&inlineId=themeblvd-dialog");jQuery("#themeblvd-shortcode-options h3:first").text(""+c.title+" Shortcode Settings");
							
								break;
							
							} // End SWITCH Statement
						
						}
												 
					)
					 
					} 
				);

				},
					
				createControl:function(d,e){
				
						if(d=="themeblvd_shortcodes_button"){
						
							d=e.createMenuButton("themeblvd_shortcodes_button",{
								title:"Insert ThemeBlvd Shortcode",
								image:icon_url,
								icons:false
								});
								
								var a=this;d.onRenderMenu.add(function(c,b){
									c=b.addMenu({title:"Layout Columns"});
										a.addWithDialog(c,"1/4","one-fourth");
										a.addWithDialog(c,"1/3","one-third");
										a.addWithDialog(c,"1/2","one-half");
										a.addWithDialog(c,"2/3","two-third");
										a.addWithDialog(c,"3/4","three-fourth");
										a.addWithDialog(c,"Clear Row","clear");
									a.addWithDialog(b,"Tabs","tabs");

							});
							
							return d
						
						} // End IF Statement
						
						return null
					},
		
				addImmediate:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("mceInsertContent",false,a)}})},
				
				addWithDialog:function(d,e,a){d.add({title:e,onclick:function(){tinyMCE.activeEditor.execCommand("themeblvdOpenDialog",false,{title:e,identifier:a})}})},
		
				getInfo:function(){ return{longname:"ThemeBlvd Shortcode Generator",author:"VisualShortcodes.com",authorurl:"http://visualshortcodes.com",infourl:"http://visualshortcodes.com/shortcode-ninja",version:"1.0"} }
			}
		);
		
		tinymce.PluginManager.add("ThemeBlvdShortcodes",tinymce.plugins.ThemeBlvdShortcodes)
	}
)();
