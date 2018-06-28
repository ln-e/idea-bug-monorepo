#Autocomplete bug in PHPStorm

```shell
cd projectA
composer install
cd ../projectB
composer install
```

Try to get autocomplete in `projectA/src/Controller/IdeaAutocompleteController.php`

If two copies of `Symfony\Bundle\FrameworkBundle\Controller\Controller` is present in a project idea does not show suggestions from traits used in base class
