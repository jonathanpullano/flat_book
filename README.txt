Description
-----------
With the flat_book module you can display subtrees of a big complicated book on a single page. This can make the book much more readable if the book has a lot of pages with a small amount of content. The user will be able to navigate to different sections of the book via the provided table of contents. 

Installation
------------
Install flat_book as you would any drupal module. You can download the module from drupal.org and place it in your modules directory. Alternatively, if you have drush installed, you can type:

drush dl flat_book

You then must enable the module by pointing your browser to http://www.example.com/admin/build/modules/list and clicking the check box for the flat_book module. With drush you can type

drush en flat_book

Configuration
-------------

Some basic configuration options are available at http://wwww.example.com/admin/settings/flat_book. Here you may select the level at which books are flattened. For example, setting this to 1 will display the entire book on one page, and setting this to 3 will display all nodes below the 3rd level on their own pages. You may opt to display the book navigation block at the bottom of each node on the page. This is not recommended, but the option exists in case you want these links for your theming.

Author
------
Jonathan Pullano [critical_patch]
Project sponsored by Evolving Web

Support
-------
If you experience problems with the flat_book module, please post in the module issue queue. DO NOT post in the forums, it is very unlikely that I will see your post. The author and Evolving Web are not responsible for any damage done to you site or data lost through the use of the flat_book module. This module is licensed under GPL.
