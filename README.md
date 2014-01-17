iAddressBook for Asterisk
=========================

### Summary
Forked from: http://iaddressbook.org/ and modified for integration with a FreePBX/Asterisk PBX. The goal is to make as no changes to the core iAddressBook files, so that iAddressBook can be upgraded in place without affecting the possa changes. All non-iAddressBook code is confined to folders, `/possa/` and `/lib/tpl/possa/`.

### Installation
* Follow installation instructions for iAddressBook ver. 2.x as outlined at http://iaddressbook.org/. Note that before you can run the auto installer, you must first manually create a database. 
* Once Installed, get the folders `/possa/` and `/lib/tpl/possa` from this repo and copy to the corresponding folders in your install
* In the main iAddressBook config file `/conf/config.php` edit the template line to read: `$conf['template'] = 'possa';`
* In the possa asterisk config file `/possa/config.php` edit variables to connect to the Asterisk PBX. AJAM is required to be enabled and properly configured on the Asterisk PBX.

### Usage
* When viewing iAddressBook contact details, enter the local user extension number at the top of the page in the format `local/101@from-internal` or `sip/101`. Click save and reload the page to set and read the cookie.
* Use the `dial` button next to any displayed phone number to click to dial. First the configured local extension will ring, and when answered the call will bridge to the oubound number.

### Roadmap
* Add a javascript window to pop up when dial initiates to display local extension, remote number and give the user the ability to cancel the dial or to dismiss the window and allow the call to continue.
* Possibly display call progress to user in javascript window similar to Noojee click
* Add ability to connect to asterisk via AMI in addition to AJAM
* Add code that allows for a completely config free installation on a FreePBX system by loading the freePBX bootstrap and using the $astman class to initiate dialling.

### History
2013-12-03 - Forked project from iAddressBook.

2014-01-15 - Starting with an unmodified copy of iAddressBook ver. 2.0 with the following changes:
* In the main iAddressBook config file `/conf/config.php` set the variable, $conf['template'] = 'possa'; 
* New folder `/possa/`  - intended to store all non-standard code for these mods
* New file `/possa/Ajam.php` - Ajam class originally by Carlos Alberto Cesario
* New file `/possa/dial.php` - script to do the dialling
* new file `/possa/config.php` - user configuration details for AJAM API
* A new display template called `possa` based on the default template, located in `/lib/tpl/possa`
* edits to the file `/lib/tpl/possa/phone.tpl` which control how the phone numbers are displayed. Very rough click to dial is working

2014-01-16 - Click to dial now working reasonably well
* In file `lib/tpl/possa/main.tpl` added form and cookie to store the user's extension number & modified footer
* In file `lib/tpl/possa/phone.tpl` added click to dial button for each phone number.
