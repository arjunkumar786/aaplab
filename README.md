## CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Implementation details
 * Requirements
 * Installation
 * Maintainers


## INTRODUCTION
------------

 This project is used to give example how to create custom applab content entity. 
 The custom entity is fully depend up content-moderation and workflow 
 module. These are the basic requirement.

## REQUIREMENTS
------------

	* Create custom content entity with relevant fields (body).
  * Anonymous user can be able submit contents also reviewer can be able to review the submitted contents.
  * The reviewer can reject or publish the content based on the review.
	* The published content should be list in a page with publicly accessible.
	* Rejected contents automatically delete in Cron action (Queue worker).

 
## Installation

 - Get the repo code in a seperate folder.
 - Run composer install.
 - Install the site using drush or in the browser.
 - Once the site is ready Run drush en applab -y or enable the module from the UI. 
   This command will enable the applab module and create the new entity called "Applab" 
	 and its bundle type "applab content". This module will also set few of the config settings.
 - Set the ananomyous permissions like enity form sumit, entity view, workflow etc.
 - Check create new user and assign reviewer role them.

## FUNCTIONALITY CHECK
-------------------

 - After installation you need to goto this path
   check all the above points in requirements section.
 - Ananomyous user can submit the entity content but they can't see the draft or upblished content 
   (Initially the content will be in draft state).
 - Once the reviewer accept or reject the content their status will be changed from draft->publish, draft->reject.
 - All the published content can be publicly accessible.
 - Rejected content will not be publicly accessible and delete on every cron run.
 - User can see all the pulished content in a list view on "/content-view".
 
## Author/Maintainers
------------------

 - Manav (Manav/ArjunKumar) - https://www.drupal.org/u/manav
