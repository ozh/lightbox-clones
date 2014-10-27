# ![alt tag](https://raw.githubusercontent.com/ozh/lightbox-clones/images/lightbox.png) The Lightbox Clones Matrix

This is the data for the popular [Lightbox Clones Matrix](http://planetozh.com/projects/lightbox-clones/).

Want to add your own script to the list? You've come to the right place!


## Request a script to be added to the list

All you have is to fork this repository, add your script data, and make a Pull Request.

## Script data

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

### Details :

1. `name` : just the name of the script
1. `url`  : the URL of the script page, with presentation, demo and download link
1. `size` : size in kb of your Javascript, excluding any image, CSS or HTML bundled with it
1. `lib` : any Javascript dependency, eg Mootools, jQuery, and the uncompressed sized of such library in kb
1. `totalsize` : total uncompressed Javascript size, in kb
1. `images` : must be `Yes` or `No` to indicate support for images
1. `sets` : must be `Yes` or `No` to indicate support for sets, or groups, of images
1. `other` : free text to indicate support for other elements. Keep that bit purely informative, no "marketing" stuff here
1. `class` : a list of space separated tags summing everything up, to be chosen from **and only from** the following list:
  * `nolib` if the script has no library dependency. Otherwise, pick one or more of `jquery`, `proto` (PrototypeJS), `moo` (Mootools) or `yui` (Yahoo UI)
  * `images` if the script supports images
  * `sets` if the script supports sets of images
  * `iframes` if the script supports iframes
  * `inline` if the script supports showing inline elements
  * `ajax` if the script supports showing elements fetched via an Ajax request
  * `video` if the script supports showing video elements
  * `flash` if the script supports showing Flash stuff 

### Example :
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













