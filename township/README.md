##Plug-In Dependencies
* Homepage relies on Advanced Custom Fields
* Pages with sidebar navigation uses Advanced Custom Fields: Nav Menu Field

##Secondary navigation
* For each section of the website, you can set up a secondary navigation menu. The secondary navigation menus are chosen for each page.
* Set up a new menu for the secondary navigation. (Appearance > Menus). Add the pages that you want there. (you can nest pages too) 
* If you want to add that menu to the footer as well then select one of the six positions in the footer before you save it.
* One you have set up the menus, go back into the pages and assign them to the navigation you just created.

##Setting up the footer
* Fill in the settings for your address and Twitter accounts
* There two columns available for links. Each of them contains three menu spots. You add the menus you used for the secondary navigation to each of the spots (if you have more than 6 sections, you'll need to add more menus to the footer.php file). So to add items create the menu and add the links. (you can structure them up to 3 links deep)
* The footer legal menu is for Terms, Conditions, and things like that. Create those pages, put them into a menu, assign the menu to "Footer Legal Menu"

##Setting up the homepage
* Create a new page for your homepage and title it with the text you want to appear at the top
* Select the "homepage" template. You will see that some additional fields have been populated for you. Use these to fill out the page.
* Set the homepage to (Settings > Reading) to your homepage

##Changing the look and feel
* You'll likely want to change the logo in the navigation. The logo ideally fits 128 x 128px. If you logo doesn't fit or just looks weird, you probably want to adjust the header.php template to make it better
* Change the background image. This is set to use a parallax style scroll. To keep the same effect, make sure you use a large photo. Not that the photo will have a translucent div over it that darkens it a bit
* There are two way to adjust the colors. You can modify the CSS by overriding it. Or you can edit the "Variables.less" file and then recompile the css per Bootstrap's instructions. This may be the best and quickest way to do things, but requires understanding less and setting it up.


##STEPS
* Install theme
* Activate theme
* If not created already, create a single-level menu for your main navigation. Assign it to the "Main Navigation Menu" Theme Location (this is set up the navigation). 
* Install plug-ins required (advanced custom fields, mailchimp)
** Homepage fields need to be set up exactly (this is a good reason to set this up through theme and not plug*in)
** Image, description, read more link, lists
* Add legal menu
* Add footer menus (up to 6) 
* Go to Settings > General and fill in the information
* Add pages
* Set homepage and use homepage template
* Set any page that needs navigation to use "Two Column" template
* For each page, be sure to choose the navigation on the post page that you want to show up
* To create custom templates use the advanced custom fields plugin
* Check the breakpoints. You'll want to adjust them so that the navigation still fits if you have more links


##TO DO LATER
* Add in events plug-in
* A nice list of all of the documents available
* A way to add lists/tables of information and the ability to show 
* Mega-menu for main navigation
* Optional utility navigation at the top
* Limit number of news posts by date? on the homepage. (already limited it by number)
* Add customer parameter to homepage to adjust the number of news items to show and/or date range.
* Style search box on mobile 
* Twitter feed on homepage


##BUGS
* Clicking mobile navigation expands its, meaning you can't go to certain pages.  Might be better to limit it to only top level categories
* Backgroud image sometimes jumpy on scroll
* Can't click on highest level categories in main nav dropdowns (disabled currently)
