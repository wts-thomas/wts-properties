=== WTS Elementor ===

Contributors: Thomas Rainer
Requires at least: 4.7
Tested up to: 6.1
Stable tag: 1.0
Version: 1.0.0
Requires PHP: 8.0
JQuery: 3.6.3
License: GNU General Public License v3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A lightweight, plain-vanilla theme for Elementor page builder.

== Description ==

A basic, plain-vanilla, lightweight theme, best suited for building your site using Elementor page builder.
This theme resets the WordPress environment and prepares it for smooth operation of Elementor.

Screenshot's images & icons are licensed under: Creative Commons (CC0), https://creativecommons.org/publicdomain/zero/1.0/legalcode

= 1.0.0 - 12-03-2024 =
* Fixes Critical Error with the DOM functions
* Refactored hide menu functions for non WTS users
* Function to hide additional admin menu items from non authorized users
* Functionality added to show winner graphic on properties when "yes" is checked
* POH Winner class, styles, and artwork added to single property listings and to archive listing page
* Added styles and edited 'content-archive' to show Community logos on property listings
* Styles to have half map display two columns of property listings intead of three (add #halfMap-2col to widget)
* Styles for a 'white' version of Breadcrumbs (add .breadcrumbs_white to the shortcode widget)
* Refactored functions for Estatik that added spaces after commas and removed spaces after commas
* Improved DOM functions within prev mentioned functions to eliminate error related to conflicts
* Sold added as a potential label for properties
* Edits to Estatik template files, removed slideshow gallery from listings view (== 1 from => 1) - line 35
* Additional styles for POH Entry Numbers
* POH ACF Field for Entry numbers to Estatik template override (property/content-archive)
* Entry Number styling
* Blocks non-alphanumeric character in name fields (GravityForms)
* Updated and fixed functions for site optimizations: Dashicons, JS and CSS defering/render blocking resources
* CRITICAL ERROR FIX, removed functions: Width and Hight, Deregistration of Dashicons, and Canceling Revisions
* Removes the function "Explicit Fix to Width and Height" due to an occational Critical error
* Deregisters Dashicons for non logged in users
* Function to cancel revisions within WordPress
* CSS Pointer Event for passthrough on divs
* Adds the excerpt meta box for pages
* Removes additional client accesable top-level admin menus (Elementor & Templates, Code Snippets)
* Refactored function that adds commas to be more inclusive when/if field builder names change
* Refactored function to not add a space if the text is formatted like currency
* Function that adds commas to specified number strings such as sq ft etc and to lot size
* Adds a comma to the sq ft meta field
* Additional style adjustments for Status Badges
* Style adjustments for Status Badges
* Various adjustments to global styles
* Bold headings for property descriptions
* Function to add MLS Status Terms to Property Listings
* Dashboard Overrides for Elementor AI buttons
* Added additional override templates for Estatik
* Removed Property Terms from Archive listing views
* Removed Property Breadcrumbs from Single Property view
* Additional styles added to cancel scroll zoom for google maps from Estatik on property pages
* Additional styles added to hide google map elements, except zoom, on property pages
* Styles added to cancel scroll zoom for google maps from Estatik
* Styles added to hide google map elements, except zoom, on property pages
* Altered function changing all cap to title case to include communities/subdivision
* Function changing all cap builder names to title case
* Revised function to add spaces after commas for specific divs
* Addiitonal styles added to hide AI button
* Function to reformat phone numbers
* Function to remove commas in Agent names
* Initial styling for Single Property, Agent Contact boxes
* Removes not needed template overrides for Estakik
* Function to force spaces after commas for single property pages 
* Adds a checkbox in Settings/General that hides the Edit with Elementor buttons and links for Pages/Posts
* Revised margin start for paragraph widgets
* Hides AI buttons in Elementor Editor panel
* Renames Elementor Overrides stylesheet to reflect that not just color edits are being made
* Updated Screenshot for Theme
* Initial property listing template overrides for RETS plugin (Estatik4)
* Initial Release