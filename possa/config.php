<?php

/*** *** *** iAddressBook Click to Dial Configuration Options *** *** ***
 * 
 * Edit this file to suit the local environment for the PBX. This is a PHP file,
 * all edits must must be valid php code.
 * 
 * This file requires an enabled and properly configured AJAM interface on an
 * Asterisk PBX. An AJAM user is defined in the file manager.conf (or one of its 
 * includes), with the permit and deny options set to allow access.
 
 
 
 
 
 * Variable name: $config['urlraw']
 * type: string
 * Description: defines the full url with protocol, port number, http prefix, 
 *    path, etc to the AJAM raw event manager. At the Asterisk CLI enter 
 *    "http show status" and listed among the Enabled URI's should be one labelled,
 *    "Raw HTTP Manager Event Interface". Note that neither 'localhost' nor 
 *    '127.0.0.1' worked properly during testing.
 */
$config['urlraw'] = 'http://10.41.2.6:8088/asterisk/rawman';


/*
 * Variable name: $config['name']
 * type: string
 * Description: the name used to access the AJAM interface as set in the file 
 *    manager.conf (or one of its includes). 
 */
$config['admin'] = 'name';


/*
 * Variable name: $config['secret']
 * type: string
 * Description: the secret or password associated with the name as specified in the
 *    file manager.conf (or one of its includes).
 */
$config['secret'] = 'secret';


/*
 * Variable name: $config['authtype']
 * type: string
 * Description: the type of AJAM authorization, acceptable values are 'plaintext' or 'md5'
 *    md5 has not yet been tested.
 */
$config['authtype'] = 'plaintext';
//$config['authtype'] = 'md5';


/*
 * Variable name: $config['cookiefile']
 * type: string
 * Description: optional filename for cookie storage. http user must have r/w access
 */
$config['cookiefile'] = null;


/*
 * Variable name: $config['debug']
 * type: boolean
 * Description: if enabled, the Ajam class generates verbose debug output. Earlier versions of the
 *    class required this be set to NULL not false to be disabled.
 */
$config['debug'] = null;
//$config['debug'] = true;


