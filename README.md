iAddressBook
============

### Summary
Forked from: http://iaddressbook.org/ and modified for integration with a FreePBX/Asterisk PBX. The goal is to make as few changes as possible to the core iAddressBook files, so that iAddressBook can be upgraded without affecting any changes. All additional code is in folders, `/possa/` and `/lib/tpl/possa/`.

### Installation
* Follow installation instructions for iAddressBook ver. 2.x as outlined at http://iaddressbook.org/. Note that before you can run the auto installer, you must first manually create a database.
* Once Installed, get the folders `/possa/` and `/lib/tpl/possa` from this repo and copy to the corresponding folders in your install
* In the main config file `/conf/config.php` add the line: `$conf['template'] = 'possa';`
* In the asterisk config file `/possa/config.php` edit variables to connect to the Asterisk PBX

### Usage
* When viewing contact details, enter the user extension number at the top of the page in the format `local/101@from-internal`, click save
* Use the `dial` button next to the displayed phone number to click to dial

### History
2013-12-03
Forked project.

2014-01-15 - Starting with an unmodified copy of iAddressBook ver. 2.0 with the following changes:
* In the main iAddressBook config file, /conf/config.php set the variable, $conf['template'] = 'possa'; 
* New folder `/possa/`  - intended to store all non-standard code for these mods
* New file `/possa/Ajam.php` - Ajam class originally by Carlos Alberto Cesario
* New file `/possa/dial.php` - will do the click to dial 
* new file `/possa/config.php` - user configuration details for AJAM API
* A new display template called `possa` based on the default template, located in `/lib/tpl/possa`
* edits to the file `/lib/tpl/possa/phone.tpl` which control how the phone numbers are displayed. Very rough click to dial is working, but extension 103 is hard coded.

2014-01-16 - Click to dial now working
* In file `lib/tpl/possa/main.tpl` added form and cookie to store the user's extension number
* In file `lib/tpl/possa/phone.tpl` added click to dial button for each phone number.