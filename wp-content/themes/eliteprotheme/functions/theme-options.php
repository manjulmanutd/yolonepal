<?php
add_action('init', 'of_options');
if (!function_exists('of_options')) {

    function of_options() {
        // VARIABLES
        $themename = 'Elite Pro Responsive Theme';
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = elite_get_option('of_options');
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        //Stylesheet Reader
        $alt_stylesheets = array("default" => "default", "black" => "black", "brown" => "brown", "blue" => "blue", "orange" => "orange", "pink" => "pink", "purple" => "purple", "red" => "red", "green" => "green", "olive" => "olive");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories('hide_empty=0');
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
        // If using image radio buttons, define a directory path
        $imagepath = get_template_directory_uri() . '/images/';
        $options = array();
        /* ---------------------------------------------------------------------------- */
        /* General Setting */
        /* ---------------------------------------------------------------------------- */
        $options[] = array("name" => "General Settings",
            "type" => "heading");
        $options[] = array("name" => "Custom Logo",
            "desc" => "Choose your own logo. Optimal Size: 221px Wide by 84px Height.",
            "id" => "elite_logo",
            "type" => "upload");
        $options[] = array("name" => "Custom Favicon",
            "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
            "id" => "elite_favicon",
            "type" => "upload");

        $options[] = array("name" => "Body Background Image",
            "desc" => "Select image to change your website background",
            "id" => "elite_bodybg",
            "std" => "",
            "type" => "upload");
        $options[] = array("name" => "Tracking Code",
            "desc" => "Paste your Google Analytics (or other) tracking code here.",
            "id" => "elite_analytics",
            "std" => "",
            "type" => "textarea");
         $options[] = array("name" => "Front Page On/Off",
            "desc" => "Check on for enabling front page or check off for enabling blog page in front page",
            "id" => "re_nm",
            "std" => "on",
            "type" => "radio",
            "options" => $file_rename);
        /* ---------------------------------------------------------------------------- */
        /* Slider Setting */
        /* ---------------------------------------------------------------------------- */
        //Slider Setting
        $options[] = array("name" => "Slider Setting",
            "type" => "heading");
        //First Slider
        $options[] = array("name" => "Slider Image1",
            "desc" => "Choose your image for first slider. Optimal size is 640px wide and 332px height.",
            "id" => "elite_slideimage1",
            "std" => "",
            "type" => "upload");
		$options[] = array("name" => "First Slider Heading",
            "desc" => "Enter your text heading for first slider",
            "id" => "elite_sliderhead1",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "First Slider Description",
			"desc" => "Enter your text for first slider description",
			"id" => "elite_sliderdesc1",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "First Slider Link Text",
            "desc" => "Enter your text for first slider Link",
            "id" => "elite_slidelink_text1",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slide 1 Link",
            "desc" => "Enter yout link url for slide1",
            "id" => "elite_slidelink1",
            "std" => "",
            "type" => "text");
        //Second Slider
        $options[] = array("name" => "Slider Image2",
            "desc" => "Choose your image for first slider. Optimal size is 640px wide and 332px height.",
            "id" => "elite_slideimage2",
            "std" => "",
            "type" => "upload");
		$options[] = array("name" => "Second Slider Heading",
            "desc" => "Enter your text heading for second slider",
            "id" => "elite_sliderhead2",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Second Slider Description",
			"desc" => "Enter your text for second slider description",
			"id" => "elite_sliderdesc2",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Second Slider Link Text",
            "desc" => "Enter your text for second slider Link",
            "id" => "elite_slidelink_text2",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slide 2 Link",
            "desc" => "Enter yout link url for slide2",
            "id" => "elite_slidelink2",
            "std" => "",
            "type" => "text");
		 //Third Slider
        $options[] = array("name" => "Slider Image3",
            "desc" => "Choose your image for first slider. Optimal size is 640px wide and 332px height.",
            "id" => "elite_slideimage3",
            "std" => "",
            "type" => "upload");
		$options[] = array("name" => "Third Slider Heading",
            "desc" => "Enter your text heading for Third slider",
            "id" => "elite_sliderhead3",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Third Slider Description",
			"desc" => "Enter your text for third slider description",
			"id" => "elite_sliderdesc3",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Third Slider Link Text",
            "desc" => "Enter your text for third slider Link",
            "id" => "elite_slidelink_text3",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slide 3 Link",
            "desc" => "Enter yout link for url slide3",
            "id" => "elite_slidelink3",
            "std" => "",
            "type" => "text");
        //Fourth Slider
        $options[] = array("name" => "Slider Image4",
           "desc" => "Choose your image for first slider. Optimal size is 640px wide and 332px height.",
            "id" => "elite_slideimage4",
            "std" => "",
            "type" => "upload");
		$options[] = array("name" => "Fourth Slider Heading",
            "desc" => "Enter your text heading for fourth slider",
            "id" => "elite_sliderhead4",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Fourth Slider Description",
			"desc" => "Enter your text for fourth slider description",
			"id" => "elite_sliderdesc4",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Fourth Slider Link Text",
            "desc" => "Enter your text for fourth slider Link",
            "id" => "elite_slidelink_text4",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slide 4 Link",
            "desc" => "Enter yout link url for slide4",
            "id" => "elite_slidelink4",
            "std" => "",
            "type" => "text");
        //Fifth Slider
        $options[] = array("name" => "Slider Image5",
            "desc" => "Choose your image for first slider. Optimal size is 640px wide and 332px height.",
            "id" => "elite_slideimage5",
            "std" => "",
            "type" => "upload");
		$options[] = array("name" => "Fifth Slider Heading",
            "desc" => "Enter your text heading for fifth slider",
            "id" => "elite_sliderhead5",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Fifth Slider Description",
			"desc" => "Enter your text for fifth slider description",
			"id" => "elite_sliderdesc5",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Fifth Slider Link Text",
            "desc" => "Enter your text for fifth slider Link",
            "id" => "elite_slidelink_text5",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slide 5 Link",
            "desc" => "Enter yout link url for slide5",
            "id" => "elite_slidelink5",
            "std" => "",
            "type" => "text");
        //Sixth Slider
        $options[] = array("name" => "Slider Image6",
            "desc" => "Choose your image for first slider. Optimal size is 640px wide and 332px height.",
            "id" => "elite_slideimage6",
            "std" => "",
            "type" => "upload");
		$options[] = array("name" => "Sixth Slider Heading",
            "desc" => "Enter your text heading for sixth slider",
            "id" => "elite_sliderhead6",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Sixth Slider Description",
			"desc" => "Enter your text for sixth slider description",
			"id" => "elite_sliderdesc6",
            "std" => "",
            "type" => "textarea");
		$options[] = array("name" => "Sixth Slider Link Text",
            "desc" => "Enter your text for six slider Link",
            "id" => "elite_slidelink_text6",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Slide 6 Link",
            "desc" => "Enter yout link url for slide6",
            "id" => "elite_slidelink6",
            "std" => "",
            "type" => "text");
        /* ---------------------------------------------------------------------------- */
        /* Homepage Feature Area */
        /* ---------------------------------------------------------------------------- */
        $options[] = array("name" => "Homepage Settings",
            "type" => "heading");
        //Homepage Main Heading 
        $options[] = array("name" => "Homepage Content Heading",
            "desc" => "Enter your text heading for homepage content heading",
            "id" => "elite_homehead",
            "std" => "",
            "type" => "textarea");
  $options[] = array("name" => "Homepage Content Area",
            "desc" => "Put your text content or html code in this area. If required, You can visually design using the WordPress Page/Post Editor too and later copy and paste the HTML from that editor",
            "id" => "elite_homecontent",
            "std" => "",
            "type" => "texteditor");
		 //Portfolio Category Option
		$options[] = array("name" => "Portfolio Category Option",
            "type" => "heading");
		$options[] = array("name" => "Portfolio Category",
            "desc" => "Choose your category for listing your post in your portfolio page.",
            "id" => "elite_portfolio",
            "std" => "",
            "type" => "select",
			"options" => $options_categories);
        /* ---------------------------------------------------------------------------- */
        /* Social Logos */
        /* ---------------------------------------------------------------------------- */
        $options[] = array("name" => "Social Logos",
            "type" => "heading");        
        $options[] = array("name" => "Facebook URL",
            "desc" => "Enter your Facebook URL if you have one",
            "id" => "elite_facebook",
            "std" => "",
            "type" => "text");
         $options[] = array("name" => "Twitter URL",
            "desc" => "Enter your Twitter URL if you have one",
            "id" => "elite_twitter",
            "std" => "",
            "type" => "text");
         $options[] = array("name" => "RSS Feed URL",
            "desc" => "Enter your RSS Feed URL if you have one",
            "id" => "elite_rss",
            "std" => "",
            "type" => "text");
		 $options[] = array("name" => "Google Plus URL",
            "desc" => "Enter your Google Plus URL if you have one",
            "id" => "elite_google",
            "std" => "",
            "type" => "text");
		 $options[] = array("name" => "Flickr Feed Url",
            "desc" => "Enter your Flickr URL if you have one",
            "id" => "elite_flickr",
            "std" => "",
            "type" => "text");
		 $options[] = array("name" => "Pinterest URL",
            "desc" => "Enter your Pinterest URL if you have one",
            "id" => "elite_pintrust",
            "std" => "",
            "type" => "text");
        $options[] = array("name" => "Youtube URL",
            "desc" => "Enter your Youtube URL if you have one",
            "id" => "elite_youtube",
            "std" => "",
            "type" => "text");
        /* ---------------------------------------------------------------------------- */
        /* Styling Setting */
        /* ---------------------------------------------------------------------------- */
        $options[] = array("name" => "Styling Options",
            "type" => "heading");
        $options[] = array("name" => "Theme Stylesheet",
            "desc" => "Select your themes alternative color scheme.",
            "id" => "elite_altstylesheet",
            "std" => "black",
            "type" => "select",
            "options" => $alt_stylesheets);
        $options[] = array("name" => "Custom CSS",
            "desc" => "Quickly add some CSS to your theme by adding it to this block.",
            "id" => "elite_customcss",
            "std" => "",
            "type" => "textarea"); 
        /* ---------------------------------------------------------------------------- */
        /* Footer Setting */
        /* ---------------------------------------------------------------------------- */
        $options[] = array("name" => "Footer Settings",
            "type" => "heading");
        $options[] = array("name" => "Footer Text",
            "desc" => "Enter text you want to be displayed on Footer",
            "id" => "elite_footertext",
            "std" => "",
            "type" => "text");
        /* ---------------------------------------------------------------------------- */
        /* Seo Options */
        /* ---------------------------------------------------------------------------- */
        $options[] = array("name" => "SEO Options",
            "type" => "heading");
        $options[] = array("name" => "Meta Keywords (comma separated)",
            "desc" => "Meta keywords provide search engines with additional information about topics that appear on your site. This only applies to your home page. Keyword Limit Maximum 8",
            "id" => "elite_keyword",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "Meta Description",
            "desc" => "You should use meta descriptions to provide search engines with additional information about topics that appear on your site. This only applies to your home page.Optimal Length for Search Engines, Roughly 155 Characters",
            "id" => "elite_description",
            "std" => "",
            "type" => "textarea");
        $options[] = array("name" => "Meta Author Name",
            "desc" => "You should write the full name of the author here. This only applies to your home page.",
            "id" => "elite_author",
            "std" => "",
            "type" => "textarea");
        elite_update_option('of_template', $options);
        elite_update_option('of_themename', $themename);
        elite_update_option('of_shortname', $shortname);
    }

}
?>
