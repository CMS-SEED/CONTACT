Laravel package that provides contact management facility for cms_framework_seed.

## Installation

Require this package with composer. 

    composer require cms_framework_seed/contact

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.


## Publishing

**Configuration**

    php artisan vendor:publish --provider="Cms_Framework_Seed\Contact\ContactServiceProvider" --tag="config"

**Language**

    php artisan vendor:publish --provider="Cms_Framework_Seed\Contact\ContactServiceProvider" --tag="lang"

**Files**

    php artisan vendor:publish --provider="Cms_Framework_Seed\Contact\ContactServiceProvider" --tag="storage"

### Views

Publish views to resources\views\vendor directory

    php artisan vendor:publish --provider="Cms_Framework_Seed\Contact\ContactServiceProvider" --tag="view"

Publishes admin view to admin theme

    php artisan theme:publish --provider="Cms_Framework_Seed\Contact\ContactServiceProvider" --view="admin" --theme="admin"

Publishes public view to public theme

    php artisan theme:publish --provider="Cms_Framework_Seed\Contact\ContactServiceProvider" --view="public" --theme="public"