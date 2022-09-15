<!-- Clear cache -->

```
lando drush cr
```

<!-- Remenber lando before any composer commands -->

```
lando composer ...
```

### Tara theme

https://www.drupal.org/project/tara

<!-- Documentation -->

### Drupal API

https://api.drupal.org/api/drupal

### .gitignore

https://github.com/kalwar/lando-drupal/blob/main/.gitignore

### Custom theme

themes/custom/icecream_theme

### Drupal Website Builder

https://templatetoaster.com/drupal-theme-generator

https://github.com/mediacurrent/theme_generator_8

#### Semantic versioning

https://semver.org/

### Custom modules

```shell
lando drush
```

```shell
lando drush en first_module
```

### Install Devel module

```
lando composer require 'drupal/devel:^4.1'
```

```
lando drush en webprofiler
```

```
lando drush en devel
```

---

1-2.9.22

### Dummy content

```
lando drush en devel_generate
```

https://www.drupal.org/project/realistic_dummy_content

```
lando composer require 'drupal/realistic_dummy_content:^3.1'
```

---

8.9.22

```
npm install --save react react-dom prop-types
```

```
npm install --save-dev @babel/core @babel/preset-env @babel/preset-react babel-loader webpack webpack-cli
```

---

9.9.22

### config settings

```
lando drush cex
```

```
lando drush cset system.site slogan 'Awesome platform'
```

### offer module

```
lando drush drupal generate:form:config --uri=mysite.local
```

```
lando drush en offer -y
```

---

15.9.22

### install REST UI

```
lando composer require 'drupal/restui:^1.21'
```

### progressively decoupled react app

/react-drupal (separate repository, cf. slide slide 06 - drupal basics and [react-drupal](https://github.com/kevinrwinter/react-drupal))

### create modules/my_crud

custom module my_crud

### generate custom theme

```
lando drush generate theme
```

cf. slide 06 - drupal basics

### generate custom module

```
lando drush generate module
```

cf. slide 06 - drupal basics

### database commands

```
lando mysql
```

```
lando db-export
```

```
lando db-import name_of_db_file.gz
```

cf. slide 06 - drupal basics
