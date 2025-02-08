# README

## Start up the engine

```
ddev start
```

## Setup WordPress

```
ddev wp core download --path=htdocs --locale=fr_FR
ddev wp core install --url=lesson-wp-stack-2025.ddev.site --title="WC Playground" --admin_user=admin --admin_password=admin --admin_email=lhall@amphibee.fr
ddev wp plugin install easy-wp-smtp --activate
```
