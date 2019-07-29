# Gnous.eu

![https://git.gnous.eu/gnouseu/gnousdoteu/raw/branch/master/public/img/gnous.png](https://git.gnous.eu/gnouseu/gnousdoteu/raw/branch/master/public/img/gnous.png) [![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com) https://forthebadge.com/images/badges/gluten-free.svg

Main website of [Gnous.eu](https://gnous.eu/?lang=en), the French speaking community of free software enthusiasts since 2017.

This website use Smarty template engine and Spectre CSS framework. 

This project is **stable** and is already in production.

## Deployment 

### Requirements :

To deploy this website you need : 

1. PHP7.1 or higher
2. Composer (only for **developpement**)
3. A webserver (NGINX is recommanded)
4. At least 1.5 Gb of hard drive
5. modrewrite and .htaccess enabled (in the case of apache)
6. Git 

### Installation :

* Clone the Git repository : 
``git clone https://git.gnous.eu/gnouseu/gnousdoteu``

* Make our webserver pointing to ``public`` folder. The main folder should'nt be accessible. 

* Allow ``/public/index.php`` to write ``/public/templates_c``. 

* Make our webserver serve ``/public/index.php`` for all pages **and conserving args** : 

eg for NGINX (in ``server{``) : 

```
        location / {
                try_files $uri $uri/ /index.php?$args;
        }
```

* Make our webserver serve it for 404 and 403 too : 

eg for NGINX (in ``server{``) : 

```
        error_page 404 /index.php;
        error_page 403 /index.php;
```

* If you use modpagespeed, disable it for ``/img/gnous.svg``: 

eg for NGINX-modpagespeed (in ``server{``) : 

```
    pagespeed Disallow "*/img/gnous.svg";
```

* Reload your webserver and check if all is working

### License : 

This project is under [MIT license](LICENSE)