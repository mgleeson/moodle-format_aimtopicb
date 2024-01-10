# AIMtopic (SF Dashboard) format ⭐

Customised by the Scentia Group (Jamie Burgess & Matt Gleeson), originally forked from moodle-format_multitopic, authored by James Calder, Otago Polytechnic. 

Note that this specific instance of AIMTopicB is forked from MultiTopic Course Format at version 2023051701, release v4.2.1 of MultiTopic (for compatibility with Moodle 4.1)

------

> Shows multiple topics per page, with tabbed navigation between pages.  Topics are collapsible, and can optionally be timed.

### 🏠 [Otago Polytechnic](https://op.ac.nz)


## Install

1. Copy files to moodle/course/format/aimtopicb.
2. Log in as an admin, and visit moodle/admin/index.php, to update plugin data.
3. (Moodle 3.x version only) Site administration > Appearance > Additional HTML > Within HEAD (or other location appropriate for CSS): Copy and paste styles from README_styles.css (customising appropriately).
4. Site administration > Appearance > Themes > Theme settings > Allow category themes: Yes (if you want categories to have custom CSS).


## Features

* Tabbed pages (like Onetopic format)
* Multiple topics per page (a bit like Flexible Sections format)
* Collapsible topics (like Collapsed Topics format)
* Optionally timed topics (a bit like Periods format)
* Course banner image (like Snap theme)
* Section images (a bit like Grid format)


## Author

👤 **James Calder**

* Github: [@james-cnz](https://github.com/james-cnz)

This is based almost exclusively on the work of James Calder, having been forked from his [Multitopic Moodle course format](https://github.com/james-cnz/moodle-format_multitopic/tree/v4.2.1)
It has been adapted originally for the Scentia Group by Jamie Burgess in 2020 with additional minor updates in 2023 by Matt Gleeson.



## Docs

🚀 [Roadmap](docs/roadmap.md)
📄 [Contributing](docs/contributing.md)


## Acknowledgements

The author of the Multitopic format that this plugin is based on wishes to acknowledge ideas from several other course formats, and notably includes code copied from:

* Onetopic format by David Herney Bernal García (including code for displaying tabs, disabling asychronous editing, and managing settings)
* Periods format by Marina Glancy (code for managing settings)
