iAddressBook
============

Forked from: http://iaddressbook.org/ and modified for integration with a FreePBX/Asterisk PBX. 


2014-01-15 
From a stock unmodified copy of iAddressBook ver. 2.0 with the following changes:
* New folder, /possa  - intended to store all non-standard code for these mods
* New file, /possa/Ajam.php - Ajam class originally by Carlos Alberto Cesario
* New file, /possa/dial.php - will do the click to dial 
* new file, /possa/config.php - user configuration details for AJAM API
* A new display template called `possa` based on the default template, located in /lib/tpl/possa
* edits to the file /lib/tpl/possa/phone.tpl which control how the phone numbers are displayed. Very rough click to dial is working, but extension 103 is hard coded.