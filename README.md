# filezilla-decode
Decode passwords from Filezilla's Sitemanager

Passwords are simply stored with BASE64 encoding, so it's a trivial process of decoding it.  I keep forgetting passwords, so I am forever going into the file, and copying and pasting into some decoder to get a password I forgot.  

Requirements:
    php-xml
    

usage: php decode.php path_to_sitemanager.xml

example: php decode.php ~/.config/filezilla/sitemanager.xml
