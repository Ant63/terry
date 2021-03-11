WordPress Migrate module for Drupal 7.x

The WordPress Migrate module provides tools for setting up migration processes
from the WordPress blog to a Drupal 7 site.

This module has been developed since 2010 to reliably import WordPress sites - namely it supports the
import of WordPress blog exports (WXR files) into Drupal 7.

It will create Drupal taxonomy terms, user accounts, nodes, and comments from the WordPress export.
WordPress Migrate is built on top of the Migrate module, a general framework for migrating content into
Drupal, and requires Migrate 2.4 or higher. Although not strictly required, Migrate Extras is also highly
encouraged, particularly if your Drupal target includes the Pathauto, Media, or Redirect modules.

Specifying the import source
============================

After installing WordPress Migrate, you will find a Wordpress migration tab when you visit the
Administration->Content area. This brings up a form prompting you for the source of the WXR export file, as
well as several options affecting the import. You may either provide the address and credentials of your
WordPress blog, or upload a WXR file you have already exported (from the Tools area of the WordPress
administration interface). In the former case, WordPress Migrate will login to your admin area and perform
the export itself - your credentials are used immediately for logging in, and are not saved anywhere. Note
that earlier versions of WordPress do not support Export - to import them with WordPress Migrate you must
upgrade WordPress first.

Please refer to the documentation below for further import steps.

Documentation
=============

Complete Drupal 7 documentation is available here:
https://www.drupal.org/node/1593370

Support
=======
Your support, questions and contributions are welcome:
https://www.drupal.org/project/issues/wordpress_migrate
Please try to provide example files to help reproduce errors and notices.

Drupal 8 is now the primary focus of development. A new documentation page is being developed here:
https://www.drupal.org/docs/8/modules/wordpress-migrate

Credits
=======

Originally developed for Drupal 7 and 8 by mikeryan.

Committers for Drupal 7 and 8 include:
somersoft, lomasr, chaitanya17, felribeiro, maccath, MaskyS,
mrmikedewolf, Darren Shelley, dwillems, othermachines, ohthehugemanatee,
ezeedub, grasmash, bdone, queenvictoria, ksenzee, ptaff, pverrier,
xurizaemon, hekele, aaron, emarchak, wizonesolutions
