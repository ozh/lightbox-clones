# ![alt tag](https://raw.githubusercontent.com/ozh/lightbox-clones/images/lightbox.png) The Lightbox Clones Matrix

This is the data for the popular [Lightbox Clones Matrix](http://planetozh.com/projects/lightbox-clones/).

Want to add your own script to the list? You've come to the right place!


## How do I add a script to the list

All you have is to fork this repository, add your script data, and make a Pull Request.

## Script data ?

The [data](https://github.com/ozh/lightbox-clones/blob/master/list_of_clones.php) is just a PHP array of arrays, it's really stupid simple.

Add your own script data in a array of the following form:

```php
array(
    'name'      => '',  // the name of your script
    'url'       => '',  // the url of your script
    'size'      => '',  // the size of the Javascript part only
    'lib'       => '',  // library dependency & size
    'totalsize' => '',  // total Javascript size
    'images'    => '',  // support for images? Yes/No
    'sets'      => '',  // support for sets of images? Yes/No
    'other'     => '',  // other objects supported? Some text
    'class'     => '',  // list of space separated tags from:
                        // nolib jquery proto moo yui images sets iframes inline ajax video flash
),
```

Example:
```php
array(
    'name'      => 'My Super Script',
    'url'       => 'http://code.google.com/p/mysuperscript/',
    'size'      => '10 k',
    'lib'       => 'jQuery (94 k)',
    'totalsize' => '104 k',
    'images'    => 'Yes',
    'sets'      => 'Yes',
    'other'     => 'Iframes and Youtube videos',
    'class'     => 'jquery images sets iframes video',
),
```

The easiest way will probably be to copy another script array and edit infos to suit your own script.

The order of elements within each array does not matter.













