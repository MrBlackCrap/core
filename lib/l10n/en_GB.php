<?php
$TRANSLATIONS = array(
"Cannot write into \"config\" directory!" => "Cannot write into \"config\" directory!",
"This can usually be fixed by giving the webserver write access to the config directory" => "This can usually be fixed by giving the webserver write access to the config directory",
"See %s" => "See %s",
"This can usually be fixed by %sgiving the webserver write access to the config directory%s." => "This can usually be fixed by %sgiving the webserver write access to the config directory%s.",
"Sample configuration detected" => "Sample configuration detected",
"It has been detected that the sample configuration has been copied. This can break your installation and is unsupported. Please read the documentation before performing changes on config.php" => "It has been detected that the sample configuration has been copied. This can break your installation and is unsupported. Please read the documentation before performing changes on config.php",
"Help" => "Help",
"Personal" => "Personal",
"Settings" => "Settings",
"Users" => "Users",
"Admin" => "Admin",
"App \\\"%s\\\" can't be installed because it is not compatible with this version of ownCloud." => "App \\\"%s\\\" can't be installed because it is not compatible with this version of ownCloud.",
"No app name specified" => "No app name specified",
"Unknown filetype" => "Unknown filetype",
"Invalid image" => "Invalid image",
"web services under your control" => "web services under your control",
"App directory already exists" => "App directory already exists",
"Can't create app folder. Please fix permissions. %s" => "Can't create app folder. Please fix permissions. %s",
"No source specified when installing app" => "No source specified when installing app",
"No href specified when installing app from http" => "No href specified when installing app from http",
"No path specified when installing app from local file" => "No path specified when installing app from local file",
"Archives of type %s are not supported" => "Archives of type %s are not supported",
"Failed to open archive when installing app" => "Failed to open archive when installing app",
"App does not provide an info.xml file" => "App does not provide an info.xml file",
"App can't be installed because of not allowed code in the App" => "App can't be installed because of unallowed code in the App",
"App can't be installed because it is not compatible with this version of ownCloud" => "App can't be installed because it is not compatible with this version of ownCloud",
"App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps" => "App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps",
"App can't be installed because the version in info.xml/version is not the same as the version reported from the app store" => "App can't be installed because the version in info.xml/version is not the same as the version reported from the app store",
"Application is not enabled" => "Application is not enabled",
"Authentication error" => "Authentication error",
"Token expired. Please reload page." => "Token expired. Please reload page.",
"Unknown user" => "Unknown user",
"%s enter the database username." => "%s enter the database username.",
"%s enter the database name." => "%s enter the database name.",
"%s you may not use dots in the database name" => "%s you may not use dots in the database name",
"MS SQL username and/or password not valid: %s" => "MS SQL username and/or password not valid: %s",
"You need to enter either an existing account or the administrator." => "You need to enter either an existing account or the administrator.",
"MySQL/MariaDB username and/or password not valid" => "MySQL/MariaDB username and/or password not valid",
"DB Error: \"%s\"" => "DB Error: \"%s\"",
"Offending command was: \"%s\"" => "Offending command was: \"%s\"",
"MySQL/MariaDB user '%s'@'localhost' exists already." => "MySQL/MariaDB user '%s'@'localhost' exists already.",
"Drop this user from MySQL/MariaDB" => "Drop this user from MySQL/MariaDB",
"MySQL/MariaDB user '%s'@'%%' already exists" => "MySQL/MariaDB user '%s'@'%%' already exists",
"Drop this user from MySQL/MariaDB." => "Drop this user from MySQL/MariaDB.",
"Oracle connection could not be established" => "Oracle connection could not be established",
"Oracle username and/or password not valid" => "Oracle username and/or password not valid",
"Offending command was: \"%s\", name: %s, password: %s" => "Offending command was: \"%s\", name: %s, password: %s",
"PostgreSQL username and/or password not valid" => "PostgreSQL username and/or password not valid",
"Set an admin username." => "Set an admin username.",
"Set an admin password." => "Set an admin password.",
"Can't create or write into the data directory %s" => "Can't create or write into the data directory %s",
"%s shared »%s« with you" => "%s shared \"%s\" with you",
"Sharing %s failed, because the file does not exist" => "Sharing %s failed, because the file does not exist",
"You are not allowed to share %s" => "You are not allowed to share %s",
"Sharing %s failed, because the user %s is the item owner" => "Sharing %s failed, because the user %s is the item owner",
"Sharing %s failed, because the user %s does not exist" => "Sharing %s failed, because the user %s does not exist",
"Sharing %s failed, because the user %s is not a member of any groups that %s is a member of" => "Sharing %s failed, because the user %s is not a member of any groups that %s is a member of",
"Sharing %s failed, because this item is already shared with %s" => "Sharing %s failed, because this item is already shared with %s",
"Sharing %s failed, because the group %s does not exist" => "Sharing %s failed, because the group %s does not exist",
"Sharing %s failed, because %s is not a member of the group %s" => "Sharing %s failed, because %s is not a member of the group %s",
"You need to provide a password to create a public link, only protected links are allowed" => "You need to provide a password to create a public link, only protected links are allowed",
"Sharing %s failed, because sharing with links is not allowed" => "Sharing %s failed, because sharing with links is not allowed",
"Share type %s is not valid for %s" => "Share type %s is not valid for %s",
"Setting permissions for %s failed, because the permissions exceed permissions granted to %s" => "Setting permissions for %s failed, because the permissions exceed permissions granted to %s",
"Setting permissions for %s failed, because the item was not found" => "Setting permissions for %s failed, because the item was not found",
"Cannot set expiration date. Shares cannot expire later than %s after they have been shared" => "Cannot set expiry date. Shares cannot expire later than %s after they have been shared",
"Cannot set expiration date. Expiration date is in the past" => "Cannot set expiry date. Expiry date is in the past",
"Sharing backend %s must implement the interface OCP\\Share_Backend" => "Sharing backend %s must implement the interface OCP\\Share_Backend",
"Sharing backend %s not found" => "Sharing backend %s not found",
"Sharing backend for %s not found" => "Sharing backend for %s not found",
"Sharing %s failed, because the user %s is the original sharer" => "Sharing %s failed, because the user %s is the original sharer",
"Sharing %s failed, because the permissions exceed permissions granted to %s" => "Sharing %s failed, because the permissions exceed permissions granted to %s",
"Sharing %s failed, because resharing is not allowed" => "Sharing %s failed, because resharing is not allowed",
"Sharing %s failed, because the sharing backend for %s could not find its source" => "Sharing %s failed, because the sharing backend for %s could not find its source",
"Sharing %s failed, because the file could not be found in the file cache" => "Sharing %s failed, because the file could not be found in the file cache",
"Could not find category \"%s\"" => "Could not find category \"%s\"",
"seconds ago" => "seconds ago",
"_%n minute ago_::_%n minutes ago_" => array("%n minute ago","%n minutes ago"),
"_%n hour ago_::_%n hours ago_" => array("%n hour ago","%n hours ago"),
"today" => "today",
"yesterday" => "yesterday",
"_%n day go_::_%n days ago_" => array("%n day go","%n days ago"),
"last month" => "last month",
"_%n month ago_::_%n months ago_" => array("%n month ago","%n months ago"),
"last year" => "last year",
"years ago" => "years ago",
"Only the following characters are allowed in a username: \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"" => "Only the following characters are allowed in a username: \"a-z\", \"A-Z\", \"0-9\", and \"_.@-\"",
"A valid username must be provided" => "A valid username must be provided",
"A valid password must be provided" => "A valid password must be provided",
"The username is already being used" => "The username is already being used",
"No database drivers (sqlite, mysql, or postgresql) installed." => "No database drivers (sqlite, mysql, or postgresql) installed.",
"Permissions can usually be fixed by %sgiving the webserver write access to the root directory%s." => "Permissions can usually be fixed by %sgiving the webserver write access to the root directory%s.",
"Cannot write into \"config\" directory" => "Cannot write into \"config\" directory",
"Cannot write into \"apps\" directory" => "Cannot write into \"apps\" directory",
"This can usually be fixed by %sgiving the webserver write access to the apps directory%s or disabling the appstore in the config file." => "This can usually be fixed by %sgiving the webserver write access to the apps directory%s or disabling the appstore in the config file.",
"Cannot create \"data\" directory (%s)" => "Cannot create \"data\" directory (%s)",
"This can usually be fixed by <a href=\"%s\" target=\"_blank\">giving the webserver write access to the root directory</a>." => "This can usually be fixed by <a href=\"%s\" target=\"_blank\">giving the webserver write access to the root directory</a>.",
"Setting locale to %s failed" => "Setting locale to %s failed",
"Please install one of these locales on your system and restart your webserver." => "Please install one of these locales on your system and restart your webserver.",
"Please ask your server administrator to install the module." => "Please ask your server administrator to install the module.",
"PHP module %s not installed." => "PHP module %s not installed.",
"PHP %s or higher is required." => "PHP %s or higher is required.",
"Please ask your server administrator to update PHP to the latest version. Your PHP version is no longer supported by ownCloud and the PHP community." => "Please ask your server administrator to update PHP to the latest version. Your PHP version is no longer supported by ownCloud and the PHP community.",
"PHP Safe Mode is enabled. ownCloud requires that it is disabled to work properly." => "PHP Safe Mode is enabled. ownCloud requires that it is disabled to work properly.",
"PHP Safe Mode is a deprecated and mostly useless setting that should be disabled. Please ask your server administrator to disable it in php.ini or in your webserver config." => "PHP Safe Mode is a deprecated and mostly useless setting that should be disabled. Please ask your server administrator to disable it in php.ini or in your webserver config.",
"Magic Quotes is enabled. ownCloud requires that it is disabled to work properly." => "Magic Quotes is enabled. ownCloud requires that it is disabled to work properly.",
"Magic Quotes is a deprecated and mostly useless setting that should be disabled. Please ask your server administrator to disable it in php.ini or in your webserver config." => "Magic Quotes is a deprecated and mostly useless setting that should be disabled. Please ask your server administrator to disable it in php.ini or in your webserver config.",
"PHP modules have been installed, but they are still listed as missing?" => "PHP modules have been installed, but they are still listed as missing?",
"Please ask your server administrator to restart the web server." => "Please ask your server administrator to restart the web server.",
"PostgreSQL >= 9 required" => "PostgreSQL >= 9 required",
"Please upgrade your database version" => "Please upgrade your database version",
"Error occurred while checking PostgreSQL version" => "Error occurred while checking PostgreSQL version",
"Please make sure you have PostgreSQL >= 9 or check the logs for more information about the error" => "Please make sure you have PostgreSQL >= 9 or check the logs for more information about the error",
"Please change the permissions to 0770 so that the directory cannot be listed by other users." => "Please change the permissions to 0770 so that the directory cannot be listed by other users.",
"Data directory (%s) is readable by other users" => "Data directory (%s) is readable by other users",
"Data directory (%s) is invalid" => "Data directory (%s) is invalid",
"Please check that the data directory contains a file \".ocdata\" in its root." => "Please check that the data directory contains a file \".ocdata\" in its root.",
"Could not obtain lock type %d on \"%s\"." => "Could not obtain lock type %d on \"%s\"."
);
$PLURAL_FORMS = "nplurals=2; plural=(n != 1);";
