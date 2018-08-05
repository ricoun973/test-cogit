<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


/**
 * Themify icon list
 */
$themify_icons = array(
	array( "ti-wand" => esc_html__( "Wand", "fixology" ) ),
	array( "ti-volume" => esc_html__( "Volume", "fixology" ) ),
	array( "ti-user" => esc_html__( "User", "fixology" ) ),
	array( "ti-unlock" => esc_html__( "Unlock", "fixology" ) ),
	array( "ti-unlink" => esc_html__( "Unlink", "fixology" ) ),
	array( "ti-trash" => esc_html__( "Trash", "fixology" ) ),
	array( "ti-thought" => esc_html__( "Thought", "fixology" ) ),
	array( "ti-target" => esc_html__( "Target", "fixology" ) ),
	array( "ti-tag" => esc_html__( "Tag", "fixology" ) ),
	array( "ti-tablet" => esc_html__( "Tablet", "fixology" ) ),
	array( "ti-star" => esc_html__( "Star", "fixology" ) ),
	array( "ti-spray" => esc_html__( "Spray", "fixology" ) ),
	array( "ti-signal" => esc_html__( "Signal", "fixology" ) ),
	array( "ti-shopping-cart" => esc_html__( "Shopping Cart", "fixology" ) ),
	array( "ti-shopping-cart-full" => esc_html__( "Shopping Cart Full", "fixology" ) ),
	array( "ti-settings" => esc_html__( "Settings", "fixology" ) ),
	array( "ti-search" => esc_html__( "Search", "fixology" ) ),
	array( "ti-zoom-in" => esc_html__( "Zoom In", "fixology" ) ),
	array( "ti-zoom-out" => esc_html__( "Zoom Out", "fixology" ) ),
	array( "ti-cut" => esc_html__( "Cut", "fixology" ) ),
	array( "ti-ruler" => esc_html__( "Ruler", "fixology" ) ),
	array( "ti-ruler-pencil" => esc_html__( "Ruler Pencil", "fixology" ) ),
	array( "ti-ruler-alt" => esc_html__( "Ruler Alt", "fixology" ) ),
	array( "ti-bookmark" => esc_html__( "Bookmark", "fixology" ) ),
	array( "ti-bookmark-alt" => esc_html__( "Bookmark Alt", "fixology" ) ),
	array( "ti-reload" => esc_html__( "Reload", "fixology" ) ),
	array( "ti-plus" => esc_html__( "Plus", "fixology" ) ),
	array( "ti-pin" => esc_html__( "Pin", "fixology" ) ),
	array( "ti-pencil" => esc_html__( "Pencil", "fixology" ) ),
	array( "ti-pencil-alt" => esc_html__( "Pencil Alt", "fixology" ) ),
	array( "ti-paint-roller" => esc_html__( "Paint Roller", "fixology" ) ),
	array( "ti-paint-bucket" => esc_html__( "Paint Bucket", "fixology" ) ),
	array( "ti-na" => esc_html__( "Na", "fixology" ) ),
	array( "ti-mobile" => esc_html__( "Mobile", "fixology" ) ),
	array( "ti-minus" => esc_html__( "Minus", "fixology" ) ),
	array( "ti-medall" => esc_html__( "Medall", "fixology" ) ),
	array( "ti-medall-alt" => esc_html__( "Medall Alt", "fixology" ) ),
	array( "ti-marker" => esc_html__( "Marker", "fixology" ) ),
	array( "ti-marker-alt" => esc_html__( "Marker Alt", "fixology" ) ),
	array( "ti-arrow-up" => esc_html__( "Arrow Up", "fixology" ) ),
	array( "ti-arrow-right" => esc_html__( "Arrow Right", "fixology" ) ),
	array( "ti-arrow-left" => esc_html__( "Arrow Left", "fixology" ) ),
	array( "ti-arrow-down" => esc_html__( "Arrow Down", "fixology" ) ),
	array( "ti-lock" => esc_html__( "Lock", "fixology" ) ),
	array( "ti-location-arrow" => esc_html__( "Location Arrow", "fixology" ) ),
	array( "ti-link" => esc_html__( "Link", "fixology" ) ),
	array( "ti-layout" => esc_html__( "Layout", "fixology" ) ),
	array( "ti-layers" => esc_html__( "Layers", "fixology" ) ),
	array( "ti-layers-alt" => esc_html__( "Layers Alt", "fixology" ) ),
	array( "ti-key" => esc_html__( "Key", "fixology" ) ),
	array( "ti-import" => esc_html__( "Import", "fixology" ) ),
	array( "ti-image" => esc_html__( "Image", "fixology" ) ),
	array( "ti-heart" => esc_html__( "Heart", "fixology" ) ),
	array( "ti-heart-broken" => esc_html__( "Heart Broken", "fixology" ) ),
	array( "ti-hand-stop" => esc_html__( "Hand Stop", "fixology" ) ),
	array( "ti-hand-open" => esc_html__( "Hand Open", "fixology" ) ),
	array( "ti-hand-drag" => esc_html__( "Hand Drag", "fixology" ) ),
	array( "ti-folder" => esc_html__( "Folder", "fixology" ) ),
	array( "ti-flag" => esc_html__( "Flag", "fixology" ) ),
	array( "ti-flag-alt" => esc_html__( "Flag Alt", "fixology" ) ),
	array( "ti-flag-alt-2" => esc_html__( "Flag Alt 2", "fixology" ) ),
	array( "ti-eye" => esc_html__( "Eye", "fixology" ) ),
	array( "ti-export" => esc_html__( "Export", "fixology" ) ),
	array( "ti-exchange-vertical" => esc_html__( "Exchange Vertical", "fixology" ) ),
	array( "ti-desktop" => esc_html__( "Desktop", "fixology" ) ),
	array( "ti-cup" => esc_html__( "Cup", "fixology" ) ),
	array( "ti-crown" => esc_html__( "Crown", "fixology" ) ),
	array( "ti-comments" => esc_html__( "Comments", "fixology" ) ),
	array( "ti-comment" => esc_html__( "Comment", "fixology" ) ),
	array( "ti-comment-alt" => esc_html__( "Comment Alt", "fixology" ) ),
	array( "ti-close" => esc_html__( "Close", "fixology" ) ),
	array( "ti-clip" => esc_html__( "Clip", "fixology" ) ),
	array( "ti-angle-up" => esc_html__( "Angle Up", "fixology" ) ),
	array( "ti-angle-right" => esc_html__( "Angle Right", "fixology" ) ),
	array( "ti-angle-left" => esc_html__( "Angle Left", "fixology" ) ),
	array( "ti-angle-down" => esc_html__( "Angle Down", "fixology" ) ),
	array( "ti-check" => esc_html__( "Check", "fixology" ) ),
	array( "ti-check-box" => esc_html__( "Check Box", "fixology" ) ),
	array( "ti-camera" => esc_html__( "Camera", "fixology" ) ),
	array( "ti-announcement" => esc_html__( "Announcement", "fixology" ) ),
	array( "ti-brush" => esc_html__( "Brush", "fixology" ) ),
	array( "ti-briefcase" => esc_html__( "Briefcase", "fixology" ) ),
	array( "ti-bolt" => esc_html__( "Bolt", "fixology" ) ),
	array( "ti-bolt-alt" => esc_html__( "Bolt Alt", "fixology" ) ),
	array( "ti-blackboard" => esc_html__( "Blackboard", "fixology" ) ),
	array( "ti-bag" => esc_html__( "Bag", "fixology" ) ),
	array( "ti-move" => esc_html__( "Move", "fixology" ) ),
	array( "ti-arrows-vertical" => esc_html__( "Arrows Vertical", "fixology" ) ),
	array( "ti-arrows-horizontal" => esc_html__( "Arrows Horizontal", "fixology" ) ),
	array( "ti-fullscreen" => esc_html__( "Fullscreen", "fixology" ) ),
	array( "ti-arrow-top-right" => esc_html__( "Arrow Top Right", "fixology" ) ),
	array( "ti-arrow-top-left" => esc_html__( "Arrow Top Left", "fixology" ) ),
	array( "ti-arrow-circle-up" => esc_html__( "Arrow Circle Up", "fixology" ) ),
	array( "ti-arrow-circle-right" => esc_html__( "Arrow Circle Right", "fixology" ) ),
	array( "ti-arrow-circle-left" => esc_html__( "Arrow Circle Left", "fixology" ) ),
	array( "ti-arrow-circle-down" => esc_html__( "Arrow Circle Down", "fixology" ) ),
	array( "ti-angle-double-up" => esc_html__( "Angle Double Up", "fixology" ) ),
	array( "ti-angle-double-right" => esc_html__( "Angle Double Right", "fixology" ) ),
	array( "ti-angle-double-left" => esc_html__( "Angle Double Left", "fixology" ) ),
	array( "ti-angle-double-down" => esc_html__( "Angle Double Down", "fixology" ) ),
	array( "ti-zip" => esc_html__( "Zip", "fixology" ) ),
	array( "ti-world" => esc_html__( "World", "fixology" ) ),
	array( "ti-wheelchair" => esc_html__( "Wheelchair", "fixology" ) ),
	array( "ti-view-list" => esc_html__( "View List", "fixology" ) ),
	array( "ti-view-list-alt" => esc_html__( "View List Alt", "fixology" ) ),
	array( "ti-view-grid" => esc_html__( "View Grid", "fixology" ) ),
	array( "ti-uppercase" => esc_html__( "Uppercase", "fixology" ) ),
	array( "ti-upload" => esc_html__( "Upload", "fixology" ) ),
	array( "ti-underline" => esc_html__( "Underline", "fixology" ) ),
	array( "ti-truck" => esc_html__( "Truck", "fixology" ) ),
	array( "ti-timer" => esc_html__( "Timer", "fixology" ) ),
	array( "ti-ticket" => esc_html__( "Ticket", "fixology" ) ),
	array( "ti-thumb-up" => esc_html__( "Thumb Up", "fixology" ) ),
	array( "ti-thumb-down" => esc_html__( "Thumb Down", "fixology" ) ),
	array( "ti-text" => esc_html__( "Text", "fixology" ) ),
	array( "ti-stats-up" => esc_html__( "Stats Up", "fixology" ) ),
	array( "ti-stats-down" => esc_html__( "Stats Down", "fixology" ) ),
	array( "ti-split-v" => esc_html__( "Split V", "fixology" ) ),
	array( "ti-split-h" => esc_html__( "Split H", "fixology" ) ),
	array( "ti-smallcap" => esc_html__( "Smallcap", "fixology" ) ),
	array( "ti-shine" => esc_html__( "Shine", "fixology" ) ),
	array( "ti-shift-right" => esc_html__( "Shift Right", "fixology" ) ),
	array( "ti-shift-left" => esc_html__( "Shift Left", "fixology" ) ),
	array( "ti-shield" => esc_html__( "Shield", "fixology" ) ),
	array( "ti-notepad" => esc_html__( "Notepad", "fixology" ) ),
	array( "ti-server" => esc_html__( "Server", "fixology" ) ),
	array( "ti-quote-right" => esc_html__( "Quote Right", "fixology" ) ),
	array( "ti-quote-left" => esc_html__( "Quote Left", "fixology" ) ),
	array( "ti-pulse" => esc_html__( "Pulse", "fixology" ) ),
	array( "ti-printer" => esc_html__( "Printer", "fixology" ) ),
	array( "ti-power-off" => esc_html__( "Power Off", "fixology" ) ),
	array( "ti-plug" => esc_html__( "Plug", "fixology" ) ),
	array( "ti-pie-chart" => esc_html__( "Pie Chart", "fixology" ) ),
	array( "ti-paragraph" => esc_html__( "Paragraph", "fixology" ) ),
	array( "ti-panel" => esc_html__( "Panel", "fixology" ) ),
	array( "ti-package" => esc_html__( "Package", "fixology" ) ),
	array( "ti-music" => esc_html__( "Music", "fixology" ) ),
	array( "ti-music-alt" => esc_html__( "Music Alt", "fixology" ) ),
	array( "ti-mouse" => esc_html__( "Mouse", "fixology" ) ),
	array( "ti-mouse-alt" => esc_html__( "Mouse Alt", "fixology" ) ),
	array( "ti-money" => esc_html__( "Money", "fixology" ) ),
	array( "ti-microphone" => esc_html__( "Microphone", "fixology" ) ),
	array( "ti-menu" => esc_html__( "Menu", "fixology" ) ),
	array( "ti-menu-alt" => esc_html__( "Menu Alt", "fixology" ) ),
	array( "ti-map" => esc_html__( "Map", "fixology" ) ),
	array( "ti-map-alt" => esc_html__( "Map Alt", "fixology" ) ),
	array( "ti-loop" => esc_html__( "Loop", "fixology" ) ),
	array( "ti-location-pin" => esc_html__( "Location Pin", "fixology" ) ),
	array( "ti-list" => esc_html__( "List", "fixology" ) ),
	array( "ti-light-bulb" => esc_html__( "Light Bulb", "fixology" ) ),
	array( "ti-Italic" => esc_html__( "Italic", "fixology" ) ),
	array( "ti-info" => esc_html__( "Info", "fixology" ) ),
	array( "ti-infinite" => esc_html__( "Infinite", "fixology" ) ),
	array( "ti-id-badge" => esc_html__( "Id Badge", "fixology" ) ),
	array( "ti-hummer" => esc_html__( "Hummer", "fixology" ) ),
	array( "ti-home" => esc_html__( "Home", "fixology" ) ),
	array( "ti-help" => esc_html__( "Help", "fixology" ) ),
	array( "ti-headphone" => esc_html__( "Headphone", "fixology" ) ),
	array( "ti-harddrives" => esc_html__( "Harddrives", "fixology" ) ),
	array( "ti-harddrive" => esc_html__( "Harddrive", "fixology" ) ),
	array( "ti-gift" => esc_html__( "Gift", "fixology" ) ),
	array( "ti-game" => esc_html__( "Game", "fixology" ) ),
	array( "ti-filter" => esc_html__( "Filter", "fixology" ) ),
	array( "ti-files" => esc_html__( "Files", "fixology" ) ),
	array( "ti-file" => esc_html__( "File", "fixology" ) ),
	array( "ti-eraser" => esc_html__( "Eraser", "fixology" ) ),
	array( "ti-envelope" => esc_html__( "Envelope", "fixology" ) ),
	array( "ti-download" => esc_html__( "Download", "fixology" ) ),
	array( "ti-direction" => esc_html__( "Direction", "fixology" ) ),
	array( "ti-direction-alt" => esc_html__( "Direction Alt", "fixology" ) ),
	array( "ti-dashboard" => esc_html__( "Dashboard", "fixology" ) ),
	array( "ti-control-stop" => esc_html__( "Control Stop", "fixology" ) ),
	array( "ti-control-shuffle" => esc_html__( "Control Shuffle", "fixology" ) ),
	array( "ti-control-play" => esc_html__( "Control Play", "fixology" ) ),
	array( "ti-control-pause" => esc_html__( "Control Pause", "fixology" ) ),
	array( "ti-control-forward" => esc_html__( "Control Forward", "fixology" ) ),
	array( "ti-control-backward" => esc_html__( "Control Backward", "fixology" ) ),
	array( "ti-cloud" => esc_html__( "Cloud", "fixology" ) ),
	array( "ti-cloud-up" => esc_html__( "Cloud Up", "fixology" ) ),
	array( "ti-cloud-down" => esc_html__( "Cloud Down", "fixology" ) ),
	array( "ti-clipboard" => esc_html__( "Clipboard", "fixology" ) ),
	array( "ti-car" => esc_html__( "Car", "fixology" ) ),
	array( "ti-calendar" => esc_html__( "Calendar", "fixology" ) ),
	array( "ti-book" => esc_html__( "Book", "fixology" ) ),
	array( "ti-bell" => esc_html__( "Bell", "fixology" ) ),
	array( "ti-basketball" => esc_html__( "Basketball", "fixology" ) ),
	array( "ti-bar-chart" => esc_html__( "Bar Chart", "fixology" ) ),
	array( "ti-bar-chart-alt" => esc_html__( "Bar Chart Alt", "fixology" ) ),
	array( "ti-back-right" => esc_html__( "Back Right", "fixology" ) ),
	array( "ti-back-left" => esc_html__( "Back Left", "fixology" ) ),
	array( "ti-arrows-corner" => esc_html__( "Arrows Corner", "fixology" ) ),
	array( "ti-archive" => esc_html__( "Archive", "fixology" ) ),
	array( "ti-anchor" => esc_html__( "Anchor", "fixology" ) ),
	array( "ti-align-right" => esc_html__( "Align Right", "fixology" ) ),
	array( "ti-align-left" => esc_html__( "Align Left", "fixology" ) ),
	array( "ti-align-justify" => esc_html__( "Align Justify", "fixology" ) ),
	array( "ti-align-center" => esc_html__( "Align Center", "fixology" ) ),
	array( "ti-alert" => esc_html__( "Alert", "fixology" ) ),
	array( "ti-alarm-clock" => esc_html__( "Alarm Clock", "fixology" ) ),
	array( "ti-agenda" => esc_html__( "Agenda", "fixology" ) ),
	array( "ti-write" => esc_html__( "Write", "fixology" ) ),
	array( "ti-window" => esc_html__( "Window", "fixology" ) ),
	array( "ti-widgetized" => esc_html__( "Widgetized", "fixology" ) ),
	array( "ti-widget" => esc_html__( "Widget", "fixology" ) ),
	array( "ti-widget-alt" => esc_html__( "Widget Alt", "fixology" ) ),
	array( "ti-wallet" => esc_html__( "Wallet", "fixology" ) ),
	array( "ti-video-clapper" => esc_html__( "Video Clapper", "fixology" ) ),
	array( "ti-video-camera" => esc_html__( "Video Camera", "fixology" ) ),
	array( "ti-vector" => esc_html__( "Vector", "fixology" ) ),
	array( "ti-themify-logo" => esc_html__( "Themify Logo", "fixology" ) ),
	array( "ti-themify-favicon" => esc_html__( "Themify Favicon", "fixology" ) ),
	array( "ti-themify-favicon-alt" => esc_html__( "Themify Favicon Alt", "fixology" ) ),
	array( "ti-support" => esc_html__( "Support", "fixology" ) ),
	array( "ti-stamp" => esc_html__( "Stamp", "fixology" ) ),
	array( "ti-split-v-alt" => esc_html__( "Split V Alt", "fixology" ) ),
	array( "ti-slice" => esc_html__( "Slice", "fixology" ) ),
	array( "ti-shortcode" => esc_html__( "Shortcode", "fixology" ) ),
	array( "ti-shift-right-alt" => esc_html__( "Shift Right Alt", "fixology" ) ),
	array( "ti-shift-left-alt" => esc_html__( "Shift Left Alt", "fixology" ) ),
	array( "ti-ruler-alt-2" => esc_html__( "Ruler Alt 2", "fixology" ) ),
	array( "ti-receipt" => esc_html__( "Receipt", "fixology" ) ),
	array( "ti-pin2" => esc_html__( "Pin2", "fixology" ) ),
	array( "ti-pin-alt" => esc_html__( "Pin Alt", "fixology" ) ),
	array( "ti-pencil-alt2" => esc_html__( "Pencil Alt2", "fixology" ) ),
	array( "ti-palette" => esc_html__( "Palette", "fixology" ) ),
	array( "ti-more" => esc_html__( "More", "fixology" ) ),
	array( "ti-more-alt" => esc_html__( "More Alt", "fixology" ) ),
	array( "ti-microphone-alt" => esc_html__( "Microphone Alt", "fixology" ) ),
	array( "ti-magnet" => esc_html__( "Magnet", "fixology" ) ),
	array( "ti-line-double" => esc_html__( "Line Double", "fixology" ) ),
	array( "ti-line-dotted" => esc_html__( "Line Dotted", "fixology" ) ),
	array( "ti-line-dashed" => esc_html__( "Line Dashed", "fixology" ) ),
	array( "ti-layout-width-full" => esc_html__( "Layout Width Full", "fixology" ) ),
	array( "ti-layout-width-default" => esc_html__( "Layout Width Default", "fixology" ) ),
	array( "ti-layout-width-default-alt" => esc_html__( "Layout Width Default Alt", "fixology" ) ),
	array( "ti-layout-tab" => esc_html__( "Layout Tab", "fixology" ) ),
	array( "ti-layout-tab-window" => esc_html__( "Layout Tab Window", "fixology" ) ),
	array( "ti-layout-tab-v" => esc_html__( "Layout Tab V", "fixology" ) ),
	array( "ti-layout-tab-min" => esc_html__( "Layout Tab Min", "fixology" ) ),
	array( "ti-layout-slider" => esc_html__( "Layout Slider", "fixology" ) ),
	array( "ti-layout-slider-alt" => esc_html__( "Layout Slider Alt", "fixology" ) ),
	array( "ti-layout-sidebar-right" => esc_html__( "Layout Sidebar Right", "fixology" ) ),
	array( "ti-layout-sidebar-none" => esc_html__( "Layout Sidebar None", "fixology" ) ),
	array( "ti-layout-sidebar-left" => esc_html__( "Layout Sidebar Left", "fixology" ) ),
	array( "ti-layout-placeholder" => esc_html__( "Layout Placeholder", "fixology" ) ),
	array( "ti-layout-menu" => esc_html__( "Layout Menu", "fixology" ) ),
	array( "ti-layout-menu-v" => esc_html__( "Layout Menu V", "fixology" ) ),
	array( "ti-layout-menu-separated" => esc_html__( "Layout Menu Separated", "fixology" ) ),
	array( "ti-layout-menu-full" => esc_html__( "Layout Menu Full", "fixology" ) ),
	array( "ti-layout-media-right-alt" => esc_html__( "Layout Media Right Alt", "fixology" ) ),
	array( "ti-layout-media-right" => esc_html__( "Layout Media Right", "fixology" ) ),
	array( "ti-layout-media-overlay" => esc_html__( "Layout Media Overlay", "fixology" ) ),
	array( "ti-layout-media-overlay-alt" => esc_html__( "Layout Media Overlay Alt", "fixology" ) ),
	array( "ti-layout-media-overlay-alt-2" => esc_html__( "Layout Media Overlay Alt 2", "fixology" ) ),
	array( "ti-layout-media-left-alt" => esc_html__( "Layout Media Left Alt", "fixology" ) ),
	array( "ti-layout-media-left" => esc_html__( "Layout Media Left", "fixology" ) ),
	array( "ti-layout-media-center-alt" => esc_html__( "Layout Media Center Alt", "fixology" ) ),
	array( "ti-layout-media-center" => esc_html__( "Layout Media Center", "fixology" ) ),
	array( "ti-layout-list-thumb" => esc_html__( "Layout List Thumb", "fixology" ) ),
	array( "ti-layout-list-thumb-alt" => esc_html__( "Layout List Thumb Alt", "fixology" ) ),
	array( "ti-layout-list-post" => esc_html__( "Layout List Post", "fixology" ) ),
	array( "ti-layout-list-large-image" => esc_html__( "Layout List Large Image", "fixology" ) ),
	array( "ti-layout-line-solid" => esc_html__( "Layout Line Solid", "fixology" ) ),
	array( "ti-layout-grid4" => esc_html__( "Layout Grid4", "fixology" ) ),
	array( "ti-layout-grid3" => esc_html__( "Layout Grid3", "fixology" ) ),
	array( "ti-layout-grid2" => esc_html__( "Layout Grid2", "fixology" ) ),
	array( "ti-layout-grid2-thumb" => esc_html__( "Layout Grid2 Thumb", "fixology" ) ),
	array( "ti-layout-cta-right" => esc_html__( "Layout Cta Right", "fixology" ) ),
	array( "ti-layout-cta-left" => esc_html__( "Layout Cta Left", "fixology" ) ),
	array( "ti-layout-cta-center" => esc_html__( "Layout Cta Center", "fixology" ) ),
	array( "ti-layout-cta-btn-right" => esc_html__( "Layout Cta Btn Right", "fixology" ) ),
	array( "ti-layout-cta-btn-left" => esc_html__( "Layout Cta Btn Left", "fixology" ) ),
	array( "ti-layout-column4" => esc_html__( "Layout Column4", "fixology" ) ),
	array( "ti-layout-column3" => esc_html__( "Layout Column3", "fixology" ) ),
	array( "ti-layout-column2" => esc_html__( "Layout Column2", "fixology" ) ),
	array( "ti-layout-accordion-separated" => esc_html__( "Layout Accordion Separated", "fixology" ) ),
	array( "ti-layout-accordion-merged" => esc_html__( "Layout Accordion Merged", "fixology" ) ),
	array( "ti-layout-accordion-list" => esc_html__( "Layout Accordion List", "fixology" ) ),
	array( "ti-ink-pen" => esc_html__( "Ink Pen", "fixology" ) ),
	array( "ti-info-alt" => esc_html__( "Info Alt", "fixology" ) ),
	array( "ti-help-alt" => esc_html__( "Help Alt", "fixology" ) ),
	array( "ti-headphone-alt" => esc_html__( "Headphone Alt", "fixology" ) ),
	array( "ti-hand-point-up" => esc_html__( "Hand Point Up", "fixology" ) ),
	array( "ti-hand-point-right" => esc_html__( "Hand Point Right", "fixology" ) ),
	array( "ti-hand-point-left" => esc_html__( "Hand Point Left", "fixology" ) ),
	array( "ti-hand-point-down" => esc_html__( "Hand Point Down", "fixology" ) ),
	array( "ti-gallery" => esc_html__( "Gallery", "fixology" ) ),
	array( "ti-face-smile" => esc_html__( "Face Smile", "fixology" ) ),
	array( "ti-face-sad" => esc_html__( "Face Sad", "fixology" ) ),
	array( "ti-credit-card" => esc_html__( "Credit Card", "fixology" ) ),
	array( "ti-control-skip-forward" => esc_html__( "Control Skip Forward", "fixology" ) ),
	array( "ti-control-skip-backward" => esc_html__( "Control Skip Backward", "fixology" ) ),
	array( "ti-control-record" => esc_html__( "Control Record", "fixology" ) ),
	array( "ti-control-eject" => esc_html__( "Control Eject", "fixology" ) ),
	array( "ti-comments-smiley" => esc_html__( "Comments Smiley", "fixology" ) ),
	array( "ti-brush-alt" => esc_html__( "Brush Alt", "fixology" ) ),
	array( "ti-youtube" => esc_html__( "Youtube", "fixology" ) ),
	array( "ti-vimeo" => esc_html__( "Vimeo", "fixology" ) ),
	array( "ti-twitter" => esc_html__( "Twitter", "fixology" ) ),
	array( "ti-time" => esc_html__( "Time", "fixology" ) ),
	array( "ti-tumblr" => esc_html__( "Tumblr", "fixology" ) ),
	array( "ti-skype" => esc_html__( "Skype", "fixology" ) ),
	array( "ti-share" => esc_html__( "Share", "fixology" ) ),
	array( "ti-share-alt" => esc_html__( "Share Alt", "fixology" ) ),
	array( "ti-rocket" => esc_html__( "Rocket", "fixology" ) ),
	array( "ti-pinterest" => esc_html__( "Pinterest", "fixology" ) ),
	array( "ti-new-window" => esc_html__( "New Window", "fixology" ) ),
	array( "ti-microsoft" => esc_html__( "Microsoft", "fixology" ) ),
	array( "ti-list-ol" => esc_html__( "List Ol", "fixology" ) ),
	array( "ti-linkedin" => esc_html__( "Linkedin", "fixology" ) ),
	array( "ti-layout-sidebar-2" => esc_html__( "Layout Sidebar 2", "fixology" ) ),
	array( "ti-layout-grid4-alt" => esc_html__( "Layout Grid4 Alt", "fixology" ) ),
	array( "ti-layout-grid3-alt" => esc_html__( "Layout Grid3 Alt", "fixology" ) ),
	array( "ti-layout-grid2-alt" => esc_html__( "Layout Grid2 Alt", "fixology" ) ),
	array( "ti-layout-column4-alt" => esc_html__( "Layout Column4 Alt", "fixology" ) ),
	array( "ti-layout-column3-alt" => esc_html__( "Layout Column3 Alt", "fixology" ) ),
	array( "ti-layout-column2-alt" => esc_html__( "Layout Column2 Alt", "fixology" ) ),
	array( "ti-instagram" => esc_html__( "Instagram", "fixology" ) ),
	array( "ti-google" => esc_html__( "Google", "fixology" ) ),
	array( "ti-github" => esc_html__( "Github", "fixology" ) ),
	array( "ti-flickr" => esc_html__( "Flickr", "fixology" ) ),
	array( "ti-facebook" => esc_html__( "Facebook", "fixology" ) ),
	array( "ti-dropbox" => esc_html__( "Dropbox", "fixology" ) ),
	array( "ti-dribbble" => esc_html__( "Dribbble", "fixology" ) ),
	array( "ti-apple" => esc_html__( "Apple", "fixology" ) ),
	array( "ti-android" => esc_html__( "Android", "fixology" ) ),
	array( "ti-save" => esc_html__( "Save", "fixology" ) ),
	array( "ti-save-alt" => esc_html__( "Save Alt", "fixology" ) ),
	array( "ti-yahoo" => esc_html__( "Yahoo", "fixology" ) ),
	array( "ti-wordpress" => esc_html__( "Wordpress", "fixology" ) ),
	array( "ti-vimeo-alt" => esc_html__( "Vimeo Alt", "fixology" ) ),
	array( "ti-twitter-alt" => esc_html__( "Twitter Alt", "fixology" ) ),
	array( "ti-tumblr-alt" => esc_html__( "Tumblr Alt", "fixology" ) ),
	array( "ti-trello" => esc_html__( "Trello", "fixology" ) ),
	array( "ti-stack-overflow" => esc_html__( "Stack Overflow", "fixology" ) ),
	array( "ti-soundcloud" => esc_html__( "Soundcloud", "fixology" ) ),
	array( "ti-sharethis" => esc_html__( "Sharethis", "fixology" ) ),
	array( "ti-sharethis-alt" => esc_html__( "Sharethis Alt", "fixology" ) ),
	array( "ti-reddit" => esc_html__( "Reddit", "fixology" ) ),
	array( "ti-pinterest-alt" => esc_html__( "Pinterest Alt", "fixology" ) ),
	array( "ti-microsoft-alt" => esc_html__( "Microsoft Alt", "fixology" ) ),
	array( "ti-linux" => esc_html__( "Linux", "fixology" ) ),
	array( "ti-jsfiddle" => esc_html__( "Jsfiddle", "fixology" ) ),
	array( "ti-joomla" => esc_html__( "Joomla", "fixology" ) ),
	array( "ti-html5" => esc_html__( "Html5", "fixology" ) ),
	array( "ti-flickr-alt" => esc_html__( "Flickr Alt", "fixology" ) ),
	array( "ti-email" => esc_html__( "Email", "fixology" ) ),
	array( "ti-drupal" => esc_html__( "Drupal", "fixology" ) ),
	array( "ti-dropbox-alt" => esc_html__( "Dropbox Alt", "fixology" ) ),
	array( "ti-css3" => esc_html__( "Css3", "fixology" ) ),
	array( "ti-rss" => esc_html__( "Rss", "fixology" ) ),
	array( "ti-rss-alt" => esc_html__( "Rss Alt", "fixology" ) ),
);