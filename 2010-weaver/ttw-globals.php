<?php

define('SB_default','Default - One, right side');
define('SB_1rw', 'One, wide right side');
define('SB_1l', 'One, left side');
define('SB_2c', 'Two, left and right sides');
define('SB_2r', 'Two, unequal widths, right side');
define('SB_2l', 'Two, unequal widths, left side');
define('SB_none', 'None');


/* The definition of globally available vars */

$ttw_options = array (
	/* NOTE: For consistency, always use full 6 digit capitalized HEX values for colors: #FF00FF.
		The defaults are from Twenty Ten - even though that doesn't really make sense anymore. */
        // -----------------------------------
array(   'name' => 'General Appearance', 'id' => 'ttw_general_appearance', 'type' => 'header',
          'info'=> 'Overall settings that affect content and widget areas',
	'std' => 'h3'),
    array(  'name' => 'Wrapper Page BG', 'id' => 'ttw_page_bgcolor', 'type' => 'ctext',
	    'info' => "Background for top level #wrapper div - default BG if you don't change others.",
            'std' => '#FFFFFF'),
    array(  'name' => 'Main Area BG', 'id' => 'ttw_main_bgcolor', 'type' => 'ctext',
	    'info' => 'Background for main page #main div - wraps conatiner, content and sidebars (uses wrapper bg if not set).',
            'std' => 'transparent'),
    array(  'name' => 'Container Area BG', 'id' => 'ttw_container_bgcolor', 'type' => 'ctext',
	    'info' => 'Background for #container div - wraps content and sidebars (uses wrapper bg if not set).',
            'std' => 'transparent'),
    array( 'name' => 'Theme Width', 'id' => 'ttw_header_image_width', 'type' => 'text',
	    'info' => 'Change Theme Width. Standard size is 940px. Header Image width is automatically changed, too.',
	    'std' => '940'),
    array ( 'name' => 'Titles Font', 'id' => 'ttw_title_font', 'type' => 'select',
	    'info' => 'Font used for post, page, and widget titles, info labels, and menus.',
	     'std' => 'Helvetica Neue (default, sans)',
	     'value' => array( 'Helvetica Neue (default, sans)',
		'Bitstream Charter (serif)', 'Arial (sans-serif)', 'Verdana (sans-serif)', 'Tahoma (sans-serif)',
		'Arial Black (sans-serif)', 'Avant Garde (sans-serif)', 'Comic Sans MS (sans-serif)',
		'Impact (sans-serif)', 'Trebuchet (sans-serif)', 'Century Gothic (sans-serif)',
		'Lucida Grande (sans-serif)', 'Univers (sans-serif)',
		'Times New Roman (serif)', 'Georgia (serif)', 'Palatino (serif)',
		'Bookman (serif)', 'Garamond (serif)',
		'Courier New (mono)', 'Andale Mono (mono)'
	     )),
    array ( 'name' => 'Content Font',
	   /* IMPORTANT! make sure font style (e.g., '(serif)') has no spaces (other than defaut case). */
	    'id' => 'ttw_content_font', 'type' => 'select', 'info' => 'Font used for most content and widget text',
	    'std' => 'Bitstream Charter (default,serif)',
	    'value' => array( 'Bitstream Charter (default,serif)',
		'Helvetica Neue (sans-serif)', 'Arial (sans-serif)', 'Verdana (sans-serif)', 'Tahoma (sans-serif)',
		'Arial Black (sans-serif)', 'Avant Garde (sans-serif)', 'Comic Sans MS (sans-serif)',
		'Impact (sans-serif)', 'Trebuchet (sans-serif)', 'Century Gothic (sans-serif)',
		'Lucida Grande (sans-serif)', 'Univers (sans-serif)',
		'Times New Roman (serif)', 'Georgia (serif)', 'Palatino (serif)',
		'Bookman (serif)', 'Garamond (serif)',
		'Courier New (mono)', 'Andale Mono (mono)'
	     )),

    array( 'name' => 'Rounded Corners', 'id' => 'ttw_rounded_corners', 'type' => 'checkbox',
	    'info' => "Check to use rounded corners for main area and colored sidebars (doesn't display on IE before IE 9)",
	    'std' => false),
    array( 'name' => 'Area Border', 'id' => 'ttw_useborders', 'type' => 'checkbox',
            'info' => 'Check to include border around main area and colored sidebars',
	    'std' => false),
    array(  'name' => 'Outside BG', 'id' => 'ttw_body_bgcolor', 'type' => 'ctext',
	    'info' => 'Background color that wraps entire page. Using <em>Appearance->Background</em> will override this value, or allow a background image instead.',
            'std' => '#F8F8F8'),
    array(  'name' => 'Fade Outside BG', 'id' => 'ttw_fadebody_bg', 'type' => 'checkbox',
	    'info' => 'Will fade the Outside BG color, darker at top to lighter at bottom.',
            'std' => false),
    array(  'name' => 'Wrap site with shadow', 'id' => 'ttw_wrap_shadow', 'type' => 'checkbox',
	    'info' => "Will wrap site's main area with a shadow (won't show on IE, but looks good on Mozilla/Safari/others)",
            'std' => false),

// -----------------------------------
array(  'name' => 'Header Options', 'id' => 'ttw_header_options', 'type' => 'header',
            'info' => 'Other header options available in Appearance -> Header',
            'std' => 'h3'),
    array(  'name' => 'Header BG', 'id' => 'ttw_header_bgcolor', 'type' => 'ctext',
            'info' => 'Background for the header area.',
            'std' => 'transparent'),
    array(  'name' => 'Menu Bar', 'id' => 'ttw_menubar_color', 'type' => 'ctext',
	    'info' => 'The main menu bar (Both Primary and Secondary Menus)',
            'std' => '#000000'),
    array(  'name' => 'Menu Bar hover BG', 'id' => 'ttw_menubar_hoverbg_color', 'type' => 'ctext',
	    'info' => 'The menu item and drop down background when hovering over item.',
            'std' => '#333333'),
    array(  'name' => 'Menu Bar text', 'id' => 'ttw_menubar_text_color', 'type' => 'ctext',
	    'info' => 'Main menu bar text item when not hovering',
            'std' => '#AAAAAA'),
    array(  'name' => 'Menu Bar text hover', 'id' => 'ttw_menubar_hover_color', 'type' => 'ctext',
	    'info' => 'Main menu bar text item when hovering',
            'std' => '#FFFFFF'),
    array(  'name' => 'Menu Bar current page', 'id' => 'ttw_menubar_curpage_color', 'type' => 'ctext',
	    'info' => 'Main menu bar text item for the currently displayed site page',
            'std' => '#FFFFFF'),
    array( 'name' => 'Bold Menu Text', 'id' => 'ttw_bold_menu', 'type' => 'checkbox',
	    'info' => 'Check to use bold font style for menu text.',
	    'std' => false),
    array( 'name' => 'Hide Menu Bars', 'id' => 'ttw_hide_menu', 'type' => 'checkbox',
	    'info' => "Don't want menu bars? Hide them. (If empty, Primary or Secondary menus won't display.)",
	    'std' => false),
    array( 'name' => 'Menu Bar Gradient', 'id' => 'ttw_gradient_menu', 'type' => 'checkbox',
	    'info' => 'Check to add gradient effect to menu bars',
	    'std' => false),
    array( 'name' => 'Move Primary Menu to Top', 'id' => 'ttw_move_menu', 'type' => 'checkbox',
	    'info' => 'Move the Primary Menu to above the image (Secondary Menu will be on bottom)',
	    'std' => false),
    array(  'name' => 'Site Title', 'id' => 'ttw_title_color', 'type' => 'ctext',
	    'info' => "The site's main title in the header (blog title)",
            'std' => '#000000'),
    array(  'name' => 'Site Description', 'id' => 'ttw_desc_color', 'type' => 'ctext',
	    'info' => "The site's description tag line (blog description)",
            'std' => '#666666'),

    array( 'name' => 'Larger Site Description', 'id' => 'ttw_large_tagline', 'type' => 'checkbox',
	    'info' => 'Check to make site description larger.',
	    'std' => false),

    array( 'name' => 'Title over Header Image', 'id' => 'ttw_title_on_header', 'type' => 'checkbox',
	    'info' => 'Check to move the site Title and Description over the Header Image.',
	    'std' => false),

    array( 'name' => 'Hide Site Title/Description', 'id' => 'ttw_hide_site_title', 'type' => 'checkbox',
	    'info' => 'Check to hide display of Site Title and Description',
	    'std' => false),

    array( 'name' => 'Header Image Links to Site', 'id' => 'ttw_link_site_image', 'type' => 'checkbox',
	    'info' => 'Check to add a link to site home page for Header Image',
	    'std' => false),

    array( 'name' => 'Hide Featured Image for Header', 'id' => 'ttw_hide_featured_header', 'type' => 'checkbox',
	    'info' => 'Hide the "Featured Image" (set in Post/Page edit) from appearing as the header image. (Also see "Show Featured Image in Posts").',
	    'std' => false),
    array( 'name' => 'Header Image Height', 'id' => 'ttw_header_image_height', 'type' => 'text',
	    'info' => 'Change the default height of the Header Image (use 0 to HIDE image). Standard size is 198. Upload new image in Appearance -> Header <u>after</u> changing height.',
	    'std' => '198'),

    array( 'name' => 'Space After Header', 'id' => 'ttw_after_header', 'type' => 'text',
	    'info' => 'Change the space between Header and Body (specify space in px, but just give number, <em>no px</em>).',
	    'std' => '40'),

// -----------------------------------
array(   'name' => 'Footer Options', 'id' => 'ttw_footer_appearance', 'type' => 'header',
          'info'=> 'Settings for the footer',
	'std' => 'h3'),

    array(  'name' => 'Footer BG', 'id' => 'ttw_footer_bgcolor', 'type' => 'ctext',
            'info' => 'Background for the footer area.',
            'std' => 'transparent'),
    array(  'name' => 'Footer Border', 'id' => 'ttw_footer_border_color', 'type' => 'ctext',
	    'info' => 'Color of the border above the footer area.',
            'std' => '#000000'),
    array(  'name' => 'Hide Entire Footer', 'id' => 'ttw_hide_footer', 'type' => 'checkbox',
	    'info' => 'Hide the entire footer area.',
            'std' => false),

// -----------------------------------
array(   'name' => 'Content Areas', 'id' => 'ttw_content_appearance', 'type' => 'header',
          'info'=> 'Settings for the content area (posts and pages)',
	'std' => 'h3'),
    array(  'name' => 'Content BG', 'id' => 'ttw_content_bgcolor', 'type' => 'ctext',
	    'info' => 'Background for post and page #content div (uses main bg if not set).',
            'std' => 'transparent'),
    array(  'name' => 'Page Title Text', 'id' => 'ttw_page_title_color', 'type' => 'ctext',
	    'info' => "Main Title for static pages (note: post title is 'Post Entry Title Link')",
            'std' => '#000000'),

    array(  'name' => 'Heading text', 'id' => 'ttw_text_color', 'type' => 'ctext',
	    'info' => 'Content non-title headings and other labels',
            'std' => '#000000'),
    array(  'name' => 'Content text', 'id' => 'ttw_content_color', 'type' => 'ctext',
	    'info' => 'Main post and page content text.',
            'std' => '#444444'),

    array ('name' => 'Smaller Content Font', 'id' => 'ttw_small_content_font', 'type' => 'checkbox',
            'info' => 'Make font of article and post text a bit smaller.',
            'std' => false),
    array(  'name' => 'Bar under Titles', 'id' => 'ttw_header_underline', 'type' => 'text',
	    'info' => 'Enter size in px (just value, no px) if you want a bar under content Titles. Leave 0 for no bar.',
            'std' => '0'),
    array ( 'name' => 'Content List Bullet',
	   'id' => 'ttw_contentlist_bullet', 'type' => 'imgselect', 'info' => 'Bullet used for Unorderd Lists in Content areas',
	    'std' => '',
	    'value' => array('default','none', 'circle', 'disc', 'square',
'arrow1-black','arrow1-blue','arrow1-gray','arrow1-green','arrow1-red',
'arrow2-black','arrow2-blue','arrow2-gray','arrow2-green','arrow2-red',
'arrow3-black','arrow3-blue','arrow3-gray','arrow3-green','arrow3-red',
'arrow4-black','arrow4-blue','arrow4-gray','arrow4-green','arrow4-red',
'arrow5-black','arrow5-blue','arrow5-gray','arrow5-green','arrow5-red',
'check1-black','check1-blue','check1-gray','check1-green','check1-red',
'circle1-black','circle1-blue','circle1-gray','circle1-green','circle1-red',
'circle2-black','circle2-blue','circle2-gray','circle2-green','circle2-red',
'diamond1-black','diamond1-blue','diamond1-gray','diamond1-green','diamond1-red',
'diamond2-black','diamond2-blue','diamond2-gray','diamond2-green','diamond2-red',
'plus1-black','plus1-blue','plus1-gray','plus1-green','plus1-red',
'square1-black','square1-blue','square1-gray','square1-green','square1-red',
'square2-black','square2-blue','square2-gray','square2-green','square2-red',
'square3-black','square3-blue','square3-gray','square3-green','square3-red',
'star1-black','star1-blue','star1-gray','star1-green','star1-red',
'star2-black','star2-blue','star2-gray','star2-green','star2-red',
'star3-black','star3-blue','star3-gray','star3-green','star3-red',
'custom-black','custom-blue','custom-gray','custom-green','custom-red'
	     )),

    array ( 'name' => 'Table Style', 'id' => 'ttw_weaver_tables', 'type' => 'select',
	    'info' => 'Style used for tables in content.',
	     'std' => 'Default',
	     'value' => array( 'Default', 'Weaver', 'Bold Headings','No Borders', 'Full Width'
		)),
    array(  'name' => '&lt;HR&gt; color', 'id' => 'ttw_hr_color', 'type' => 'ctext',
	    'info' => 'Color of horizontal (&lt;hr&gt;) lines in posts and pages.',
            'std' => '#000000'),
    array(  'name' => 'Non-Captioned Image Border Color', 'id' => 'ttw_media_lib_border', 'type' => 'ctext',
	    'info' => 'Border color for <em>non-captioned</em> images from media library. (Make same color as
            Captioned Images to have media images display the same.)',
            'std' => 'transparent'),
    array(  'name' => 'Captioned Image Border Color', 'id' => 'ttw_media_lib_captioned_border', 'type' => 'ctext',
	    'info' => 'Border color for <em>captioned</em> images from media library.',
            'std' => '#F1F1F1'),
    array(  'name' => 'Caption text color', 'id' => 'ttw_caption_color', 'type' => 'ctext',
	    'info' => 'Color of captions - e.g., below media images.',
            'std' => '#333333'),
    array(  'name' => 'Input Area BG', 'id' => 'ttw_input_bgcolor', 'type' => 'ctext',
	    'info' => 'Background color for text input boxes.',
            'std' => '#F0F0F0'),
    array(  'name' => 'Standard Link', 'id' => 'ttw_link_color', 'type' => 'ctext',
	    'info' => 'Color for most links.',
            'std' => '#0066CC'),

    array(  'name' => 'Standard Link Visited', 'id' => 'ttw_link_visited_color', 'type' => 'ctext',
	    'info' => 'Color for links that have been visited.',
            'std' => '#743399'),
    array(  'name' => 'Standard Link Hover', 'id' => 'ttw_link_hover_color', 'type' => 'ctext',
	    'info' => 'Color for links when hovering.',
            'std' => '#FF4B33'),

// -----------------------------------
array(   'name' => 'Post Page Specifics', 'id' => 'ttw_post_appearance', 'type' => 'header',
          'info'=> 'Settings affecting just Post pages',
	'std' => 'h3'),
    array(  'name' => 'Post Info text', 'id' => 'ttw_info_color', 'type' => 'ctext',
	    'info' => 'Color for post information text. (also called Meta Info)',
            'std' => '#888888'),
    array( 'name' => 'Use Icons in Post Info', 'id' => 'ttw_post_icons', 'type' => 'checkbox',
            'info' => 'Check to use icons in Post Info (Meta Info)',
	    'std' => false),
    array( 'name' => 'Hide Post Info Fill-in', 'id' => 'ttw_hide_post_fill', 'type' => 'checkbox',
	    'info' => "Hide Post fill-in meta info (e.g., 'Posted on'). (allows Icons only for post info)",
	    'std' => false),
    array(  'name' => 'Display posts as excerpts', 'id' => 'ttw_always_excerpt', 'type' => 'checkbox',
            'info' => 'Will display an excerpt instead of full post on <em>blog main page</em>. Most useful when used with Featured Image.', 'std' => false ),
    array(  'name' => 'Excerpt length', 'id' => 'ttw_excerpt_length', 'type' => 'text',
            'info' => 'Change default (55 words) post excerpt length.', 'std' => false ),

    array(  'name' => 'Show Featured Image for full posts', 'id' => 'ttw_show_featured_image_fullposts', 'type' => 'checkbox',
            'info' => 'Show the "Featured Image" (set on Post edit page) thumbnail with full post displays (non-excerpted posts)', 'std' => false ),
    array(  'name' => 'Show the Featured Image for excerpted posts', 'id' => 'ttw_show_featured_image_excerptedposts', 'type' => 'checkbox',
            'info' => 'Show the "Featured Image" (set on Post edit page) thumbnail with excerpted posts.
            (See the Help page for more details on using the Featured Image.)', 'std' => false ),

    array(  'name' => 'Post BG', 'id' => 'ttw_post_bgcolor', 'type' => 'ctext',
	    'info' => 'Background color used for posts.',
            'std' => 'transparent'),
    array(  'name' => 'Sticky Post BG', 'id' => 'ttw_stickypost_bgcolor', 'type' => 'ctext',
	    'info' => 'Background color used for sticky posts and author info.',
            'std' => '#888888'),
    array(  'name' => 'Top Post Info BG', 'id' => 'ttw_infotop_bgcolor', 'type' => 'ctext',
	    'info' => "The top post info area ('Posted on x by y' line - add {display:none;} to CSS to hide entire line.)",
            'std' => 'transparent'),
    array(  'name' => 'Bottom Post Info BG', 'id' => 'ttw_infobottom_bgcolor', 'type' => 'ctext',
	    'info' => "The bottom post info area ('Posted in' line - add {display:none;} to CSS to hide entire line.)",
            'std' => 'transparent'),

    array(  'name' => 'Post Entry Title Link', 'id' => 'ttw_plink_color',
	    'type' => 'ctext', 'info' => 'Post entry title link color (blog entry titles are links).',
            'std' => '#000000'),
    array(  'name' => 'Post Entry Title Link Visited', 'id' => 'ttw_plink_visited_color', 'type' => 'ctext',
	    'info' => 'Post entry title links that have been visited.',
            'std' => '#000000'),
    array(  'name' => 'Post Entry Title Link Hover', 'id' => 'ttw_plink_hover_color', 'type' => 'ctext',
	    'info' => 'Post entry title for links when hovering.',
            'std' => '#FF4B33'),

    array(  'name' => 'Post Info Link', 'id' => 'ttw_ilink_color', 'type' => 'ctext',
	    'info' => 'Links in post information.',
            'std' => '#888888'),
    array(  'name' => 'Post Info Link Visited', 'id' => 'ttw_ilink_visited_color', 'type' => 'ctext',
	    'info' => 'Visited Post Info Links.',
            'std' => '#888888'),
    array(  'name' => 'Post Info Link Hover', 'id' => 'ttw_ilink_hover_color', 'type' => 'ctext',
	    'info' => 'Hovering on Post Info links.',
            'std' => '#FF4B33'),

// -----------------------------------
array(   'name' => 'Widget Areas', 'id' => 'ttw_widget_appearance', 'type' => 'header',
          'info'=> 'Settings affecting widget areas',
	'std' => 'h3'),
    array(  'name' => 'Main Sidebar Columns', 'id' => 'ttw_sidebars', 'type' => 'select',
	    'info' => 'Choices for one on right (default), one on left, 3 varieties of two sidebar columns, or none.',
	    'std' => SB_default,
            'value' => array( SB_default, SB_1rw, SB_1l, SB_2c, SB_2r, SB_2l, SB_none ),
            ),
    array( 'name' => 'Sidebar Width', 'id' => 'ttw_sidebar_width', 'type' => 'text',
	    'info' => 'Change width of primary and secondary side bars. Use 0 for default width (varies depending on sidebar selection). Interacts with Theme Width.',
	    'std' => '0'),
    array(  'name' => 'Primary Widget Area BG', 'id' => 'ttw_side1_bgcolor', 'type' => 'ctext',
	    'info' => 'Background for the primary (#1 sidebar) widget area.',
            'std' => 'transparent'),
    array(  'name' => 'Secondary Widget Area BG', 'id' => 'ttw_side2_bgcolor', 'type' => 'ctext',
            'info' => 'Background for the secondary (#2 sidebar) widget area.',
            'std' => 'transparent'),
    array(  'name' => 'Alternate Template Widget Area BG', 'id' => 'ttw_side3_bgcolor', 'type' => 'ctext',
            'info' => 'Background for the alternate page template sidebar widget area.',
            'std' => 'transparent'),
    array(  'name' => 'Top/Bottom Widget Area BG', 'id' => 'ttw_topbottom_bgcolor', 'type' => 'ctext',
            'info' => 'Background for the top and bottom widget areas.',
            'std' => 'transparent'),
    array(  'name' => 'Footer Widget Areas BG', 'id' => 'ttw_footer_widget_bgcolor', 'type' => 'ctext',
            'info' => 'Background for the footer widget areas.',
            'std' => 'transparent'),
    array(  'name' => 'Widget Area Text', 'id' => 'ttw_widget_color', 'type' => 'ctext',
	    'info' => 'Color for widget area content (text color).',
            'std' => '#666666'),
    array(  'name' => 'Individual Widget BG', 'id' => 'ttw_widget_item_bgcolor', 'type' => 'ctext',
	    'info' => 'Background color for individual widgets. (Use CSS to add borders, etc.)',
            'std' => 'transparent'),
    array(  'name' => 'Widget Title', 'id' => 'ttw_widget_title_color', 'type' => 'ctext',
	    'info' => 'Color for Widget titles and labels.',
            'std' => '#222222'),
    array(  'name' => 'Bar under Widget Titles', 'id' => 'ttw_widget_header_underline', 'type' => 'text',
	    'info' => 'Enter size in px (just value, no px) if you want a bar under Widget Titles. Leave 0 for no bar.',
            'std' => '0'),
    array(  'name' => 'Sidebar Border Adjust', 'id' => 'ttw_border_adjust_sidebar', 'type' => 'text',
	    'info' => 'Value to adjust sidebar area widths if you\'ve added your own borders (e.g., using CSS on widget area BG)',
            'std' => ''),
    array ( 'name' => 'Widget List Bullet',
	    'id' => 'ttw_list_bullet', 'type' => 'imgselect', 'info' => 'Bullet used for Sidebar Lists (black square default).',
	    'std' => '',
	    'value' => array('default','none', 'circle', 'disc', 'square',
'arrow1-black','arrow1-blue','arrow1-gray','arrow1-green','arrow1-red',
'arrow2-black','arrow2-blue','arrow2-gray','arrow2-green','arrow2-red',
'arrow3-black','arrow3-blue','arrow3-gray','arrow3-green','arrow3-red',
'arrow4-black','arrow4-blue','arrow4-gray','arrow4-green','arrow4-red',
'arrow5-black','arrow5-blue','arrow5-gray','arrow5-green','arrow5-red',
'check1-black','check1-blue','check1-gray','check1-green','check1-red',
'circle1-black','circle1-blue','circle1-gray','circle1-green','circle1-red',
'circle2-black','circle2-blue','circle2-gray','circle2-green','circle2-red',
'diamond1-black','diamond1-blue','diamond1-gray','diamond1-green','diamond1-red',
'diamond2-black','diamond2-blue','diamond2-gray','diamond2-green','diamond2-red',
'plus1-black','plus1-blue','plus1-gray','plus1-green','plus1-red',
'square1-black','square1-blue','square1-gray','square1-green','square1-red',
'square2-black','square2-blue','square2-gray','square2-green','square2-red',
'square3-black','square3-blue','square3-gray','square3-green','square3-red',
'star1-black','star1-blue','star1-gray','star1-green','star1-red',
'star2-black','star2-blue','star2-gray','star2-green','star2-red',
'star3-black','star3-blue','star3-gray','star3-green','star3-red',
'custom-black','custom-blue','custom-gray','custom-green','custom-red'
	     )),

    array ('name' => __('Full Width Top/Bottom widget areas',TTW_TRANS), 'id' => 'ttw_wide_top_bottom', 'type' => 'checkbox',
            'info' => __('Use full width of content area for top and bottom widget areas',TTW_TRANS),
            'std' => false),

    array ('name' => __('Hide Top/Bottom widget area in pages',TTW_TRANS), 'id' => 'ttw_hide_widg_pages', 'type' => 'checkbox',
            'info' => __('Hide the top and bottom widget areas on pages. They do not display if no widgets added to area.',TTW_TRANS),
            'std' => false),

    array ('name' => __('Hide Top/Bottom widget area in blog',TTW_TRANS), 'id' => 'ttw_hide_widg_posts', 'type' => 'checkbox',
            'info' => __('Hide the top and bottom widget areas on main posts (blog) page. They do not display if no widgets added to area.',TTW_TRANS),
            'std' => false),

    array ('name' => __('Hide Special Post Pages widget area',TTW_TRANS), 'id' => 'ttw_hide_special_posts', 'type' => 'checkbox',
            'info' => __('Hide the Special Post Pages widget area on special post pages (archives, attachment, author, category, single post). It does not display if no widgets added to area.',TTW_TRANS),
            'std' => false),

    array ('name' => __('Always ShowTop/Bottom widget area on front page',TTW_TRANS), 'id' => 'ttw_force_widg_frontpage', 'type' => 'checkbox',
            'info' => __('When checked, the top and bottom widget areas will always be displayed on the front page. Overrides other settings.',TTW_TRANS),
            'std' => false),


        array(  'name' => 'Widget Link', 'id' => 'ttw_wlink_color', 'type' => 'ctext',
	    'info' => 'Color for links in widgets (uses Standard Link colors if left to default color).',
            'std' => '#0066CC'),
    array(  'name' => 'Widget Link Visited', 'id' => 'ttw_wlink_visited_color', 'type' => 'ctext',
	    'info' => 'Color for widget links that have been visited.',
            'std' => '#743399'),
    array(  'name' => 'Widget Link Hover', 'id' => 'ttw_wlink_hover_color', 'type' => 'ctext',
	    'info' => 'Color for widget links when hovering.',
            'std' => '#FF4B33')

);


/* $ttw_optionsList is a "master" list of every option TT Weaver can change. It is IMPORTANT to keep it up to date, because
  it is used to save the user's own theme. While this array very closely parallels the theme definitions above,
  it has the extra fields for the advanced options. Also used to download and restore themes. And it now uses
  false for non-set values - to indicate to use the default std value. Note: these are THEME option, and do not include
  the per-site adminOpts defined later.
*/
 $ttw_optionsListDefault = array (
    'ttw_after_header' => false,
    'ttw_always_excerpt' => false,
    'ttw_body_bgcolor' => false,
    'ttw_body_bg_color_css' => false,
    'ttw_bold_menu' => false,
    'ttw_border_adjust_sidebar' => false,
    'ttw_caption_color' => false,
    'ttw_container_bgcolor' => false,
    'ttw_container_bgcolor_css' => false,
    'ttw_content_bgcolor' => false,
    'ttw_content_bgcolor_css' => false,
    'ttw_content_color' => false,
    'ttw_content_color_css' => false,
    'ttw_content_font' => false,
    'ttw_contentlist_bullet' => false,
    'ttw_custom_header_insert' => false,
    'ttw_desc_color' => false,
    'ttw_desc_color_css' => false,
    'ttw_excerpt_length' => false,
    'ttw_fadebody_bg' => false,
    'ttw_footer_bgcolor' => false,
    'ttw_footer_bgcolor_css' => false,
    'ttw_footer_border_color' => false,
    'ttw_footer_border_color_css' => false,
    'ttw_footer_widget_bgcolor' => false,
    'ttw_footer_widget_bgcolor_css' => false,
    'ttw_force_widg_frontpage' => false,
    'ttw_gradient_menu' => false,
    'ttw_header_bgcolor' => false,
    'ttw_header_bgcolor_css' => false,
    'ttw_header_image_height' => false,
    'ttw_header_image_width' => false,
    'ttw_header_underline' => false,
    'ttw_hide_blank_footer' => false,
    'ttw_hide_blank_header' => false,
    'ttw_hide_footer' => false,
    'ttw_hide_menu' => false,
    'ttw_hide_custom_header_template_menus' => false,
    'ttw_hide_custom_header_template_siteinfo' => false,
    'ttw_hide_featured_header' => false,
    'ttw_hide_post_fill' => false,
    'ttw_hide_site_title' => false,
    'ttw_hide_special_posts' => false,
    'ttw_hide_widg_pages' => false,
    'ttw_hide_widg_posts' => false,
    'ttw_hr_color' => false,
    'ttw_hr_color_css' => false,
    'ttw_ilink_color' => false,
    'ttw_ilink_color_css' => false,
    'ttw_ilink_hover_color' => false,
    'ttw_ilink_hover_color_css' => false,
    'ttw_ilink_visited_color' => false,
    'ttw_ilink_visited_color_css' => false,
    'ttw_info_color' => false,
    'ttw_info_color_css' => false,
     'ttw_infotop_bgcolor' => false,
    'ttw_infotop_bgcolor_css' => false,
    'ttw_infobottom_bgcolor' => false,
    'ttw_infobottom_bgcolor_css' => false,
    'ttw_input_bgcolor' => false,
    'ttw_input_bgcolor_css' => false,
    'ttw_large_tagline' => false,
    'ttw_link_color' => false,
    'ttw_link_color_css' => false,
    'ttw_link_hover_color' => false,
    'ttw_link_hover_color_css' => false,
    'ttw_link_visited_color' => false,
    'ttw_link_visited_color_css' => false,
    'ttw_link_site_image' => false,
    'ttw_list_bullet' => false,
    'ttw_main_bgcolor' => false,
    'ttw_main_bgcolor_css' => false,
    'ttw_media_lib_border' => false,
    'ttw_media_lib_captioned_border' => false,
    'ttw_menubar_color' => false,
    'ttw_menubar_color_css' => false,
    'ttw_menubar_curpage_color' => false,
    'ttw_menubar_curpage_color_css' => false,
    'ttw_menubar_hover_color' => false,
    'ttw_menubar_hover_color_css' => false,
    'ttw_menubar_hoverbg_color' => false,
    'ttw_menubar_hoverbg_color_css' => false,
    'ttw_menubar_text_color' => false,
    'ttw_menubar_text_color_css' => false,
    'ttw_move_menu' => false,
    'ttw_page_bgcolor' => false,
    'ttw_page_bgcolor_css' => false,
    'ttw_page_title_color' => false,
    'ttw_page_title_color_css' => false,
    'ttw_plink_color' => false,
    'ttw_plink_color_css' => false,
    'ttw_plink_hover_color' => false,
    'ttw_plink_hover_color_css' => false,
    'ttw_plink_visited_color' => false,
    'ttw_plink_visited_color_css' => false,
    'ttw_post_bgcolor' => false,
    'ttw_post_icons' => false,
    'ttw_rounded_corners' => false,
    'ttw_show_featured_image_excerptedposts' => false,
    'ttw_show_featured_image_fullposts' => false,
    'ttw_side1_bgcolor' => false,
    'ttw_side1_bgcolor_css' => false,
    'ttw_side2_bgcolor' => false,
    'ttw_side2_bgcolor_css' => false,
    'ttw_side3_bgcolor' => false,
    'ttw_side3_bgcolor_css' => false,
    'ttw_sidebar_width' => false,
    'ttw_sidebars' => false,
    'ttw_small_content_font' => false,
    'ttw_stickypost_bgcolor' => false,
    'ttw_stickypost_bgcolor_css' => false,
    'ttw_text_color' => false,
    'ttw_text_color_css' => false,
    'ttw_title_color' => false,
    'ttw_title_color_css' => false,
    'ttw_title_font' => false,
    'ttw_title_on_header' => false,
    'ttw_topbottom_bgcolor' => false,
    'ttw_topbottom_bgcolor_css' => false,
    'ttw_useborders' => false,
    'ttw_weaver_tables' => false,
    'ttw_wide_top_bottom' => false,
    'ttw_widget_color' => false,
    'ttw_widget_color_css' => false,
    'ttw_widget_header_underline' => false,
    'ttw_widget_item_bgcolor' => false,
    'ttw_widget_item_bgcolor_css' => false,
    'ttw_widget_title_color' => false,
    'ttw_widget_title_color_css' => false,
    'ttw_wlink_color' => false,
    'ttw_wlink_color_css' => false,
    'ttw_wlink_hover_color' => false,
    'ttw_wlink_hover_color_css' => false,
    'ttw_wlink_visited_color' => false,
    'ttw_wlink_visited_color_css' => false,
    'ttw_wrap_shadow' => false,
    /* PLUS the advanced opts! */
    'ttw_footer_opts' => false,
    'ttw_head_opts' => false,
    'ttw_preheader_insert' => false,
    'ttw_hide_front_preheader' => false,
    'ttw_hide_rest_preheader' => false,
    'ttw_header_insert' => false,
    'ttw_header_frontpage_only' => false,
    'ttw_postheader_insert' => false,
    'ttw_hide_front_postheader' => false,
    'ttw_hide_rest_postheader' => false,
    'ttw_prefooter_insert' => false,
    'ttw_hide_front_prefooter' => false,
    'ttw_hide_rest_prefooter' => false,
    'ttw_postfooter_insert' => false,
    'ttw_hide_front_postfooter' => false,
    'ttw_hide_rest_postfooter' => false,
    'ttw_presidebar_insert' => false,
    'ttw_hide_front_presidebar' => false,
    'ttw_hide_rest_presidebar' => false,
    'ttw_theme_description' => false,
    'ttw_theme_head_opts' => false,
    'ttw_theme_image' =>false,
    'ttw_themename' => false,
    /* plus current subtheme */
    'ttw_subtheme' => false
    );

    $ttw_optionsList = array();
    $ttw_optionsList = $ttw_optionsListDefault;

     $ttw_myoptionsList = array ();
     $ttw_myoptionsList = $ttw_optionsListDefault;             /* make a copy */

    /*  This list determines the order the themes are displayed on the pick a theme select box.
	It needs to be updated with each newly created subtheme. */
    $ttw_themeList = array('Wheat', 'My Saved Theme', 'Black and White', 'Blue', 'Browns', 'Dark with Green','Dark - 2 Left Sidebars', 'IndieAve',
				   'Ivory Drive', 'Orange','Reds', 'Shadows', 'Simple Silver','Sopris','Tan and Gray',
                                   'Transparent Dark', 'Transparent Light', TTW_DEFAULT_THEME, 'White','WP Weaver');
    $ttw_fullThemeList = array();

    $ttw_adminOptsDefault = array('ttw_version_id'=>TTW_VERSION_ID, 'ttw_hide_preview'=>false, 'ttw_hide_theme_thumbs'=>false,
                           'ttw_hide_metainfo'=>false, 'ttw_metainfo'=>'','ttw_end_opts' => false, 'ttw_force_inline_css'=>false,
                           'ttw_hide_IE_warning_css'=>false, 'ttw_hide_auto_css_rules' => false);

    $ttw_adminOpts = array();
    $ttw_adminOpts = $ttw_adminOptsDefault;
?>
