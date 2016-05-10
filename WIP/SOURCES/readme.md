## CVBank

# 1. Install wamp server #

Enable mod:

* php: openssl module
* apache:
	 + rewrite module
	 + Virtual Hosts
* set php_home into path environment variable
	 + eg: C:\wamp\bin\php\php5.4.12

# 2. Install composer #

# 3. Checkout project into C:\wamp\www #

# 4. Configuration #

* File: httpd-vhosts.conf

```
#!php

<VirtualHost *:80>
    DocumentRoot "D:/work/source/cvbank/public"
    ServerAlias cvbank.dev
</VirtualHost>
```

* File: etc/hosts

```
#!php

127.0.0.1 cvbank.dev
```

# 5. Open http://cvbank.dev on browser #