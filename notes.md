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

### Dummy content

```
lando drush en devel_generate
```

https://www.drupal.org/project/realistic_dummy_content

```
lando composer require 'drupal/realistic_dummy_content:^3.1'
```
