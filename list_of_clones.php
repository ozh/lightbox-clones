<?php

$scripts = array (

    /*
     array(
        'name'      => '',  // name
        'url'       => '',  // url
        'size'      => '',  // size of js only
        'lib'       => '',  // library dependency & size
        'totalsize' => '',  // total js size
        'images'    => '',  // supports images? Yes/No
        'sets'      => '',  // supports sets of images? Yes/No
        'other'     => '',  // other objects supported? Some text
        'class'     => '',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
     */
     
     array(
        'name'      => 'EasyBox',   // name
        'url'       => 'http://code.google.com/p/easybox/',    // url
        'size'      => '14.5',   // size of js only
        'lib'       => 'jQuery (94 k)',    // library dependency & size
        'totalsize' => '108.5 k', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Iframes, inline content and videos',  // other objects supported? Some text
        'class'     => 'jquery images sets iframes video inline',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'CeraBox',   // name
        'url'       => 'http://cerabox.net/',    // url
        'size'      => '29',   // size of js only
        'lib'       => 'mootools (84 k)',    // library dependency & size
        'totalsize' => '113 k', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Iframe, Ajax, Flash, Video',  // other objects supported? Some text
        'class'     => 'moo images sets iframes ajax video flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'tinyLightbox',   // name
        'url'       => 'https://github.com/kof/tinyLightbox',    // url
        'size'      => '9.3',   // size of js only
        'lib'       => 'jquery (94 k)',    // library dependency & size
        'totalsize' => '103 k', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => '',  // other objects supported? Some text
        'class'     => 'jquery images set',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'simplebox',    // name
        'url'       => 'http://blog.renevier.net/index.php?post/2010/07/01/simplebox%3A-a-lightbox-like-library-for-prototype',    // url
        'size'      => '6.8',    // size of js only
        'lib'       => 'prototype (163 kb)',    // library dependency & size
        'totalsize' => '169.8', // total js size
        'images'    => 'No',    // supports images? Yes/No
        'sets'      => 'No',    // supports sets of images? Yes/No
        'other'     => 'Inline elements',    // other objects supported? Some text
        'class'     => 'proto inline',    // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'SlideWindow',   // name
        'url'       => 'http://www.plashenkov.com/2010/01/lightweight-image-viewer-for-your-site.html',    // url
        'size'      => '9.4',   // size of js only
        'lib'       => '-',    // library dependency & size
        'totalsize' => '9.4', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => '-',  // other objects supported? Some text
        'class'     => 'nolib images sets',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'CeeBox',   // name
        'url'       => 'http://catcubed.com/2008/12/23/ceebox-a-thickboxvideobox-mashup/',    // url
        'size'      => '28',   // size of js only
        'lib'       => 'jQuery (94k) + Jquery SWFObject (5k)',    // library dependency & size
        'totalsize' => '127', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Inline elements, Ajax, Flash, Videos, Iframes',  // other objects supported? Some text
        'class'     => 'jquery images sets iframes inline ajax video flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'TopUp',   // name
        'url'       => 'http://gettopup.com/',    // url
        'size'      => '47',   // size of js only
        'lib'       => 'jQuery + jQuery UI (217k)',    // library dependency & size
        'totalsize' => '264', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Iframe, inline HTML, videos and flash',  // other objects supported? Some text
        'class'     => 'jquery images sets iframes inline video flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Bumpbox',   // name
        'url'       => 'http://www.artviper.net/bumpbox.php',    // url
        'size'      => '5',   // size of js only
        'lib'       => 'Mootools 1.2 (90k)',    // library dependency & size
        'totalsize' => '95', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'No',   // supports sets of images? Yes/No
        'other'     => 'FLV and SWF, PDF objects, iframes',  // other objects supported? Some text
        'class'     => 'moo images iframes video flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),

    array(
        'name'      => 'ColorBox',   // name
        'url'       => 'http://colorpowered.com/colorbox/',    // url
        'size'      => '19',   // size of js only
        'lib'       => 'jQuery (94k)',    // library dependency & size
        'totalsize' => '113', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Iframe, Inline, Ajax. Image preloading.',  // other objects supported? Some text
        'class'     => 'jquery images sets iframes inline ajax',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'ImageZoom',   // name
        'url'       => 'http://bertramakers.com/moolabs/imagezoom.php',    // url
        'size'      => '12.4',   // size of js only
        'lib'       => 'Mootools 1.2 (90k)',    // library dependency & size
        'totalsize' => '102.4', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => '-',  // other objects supported? Some text
        'class'     => 'moo images sets',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Lighter Box',   // name
        'url'       => 'http://www.tdesignonline.com/lighter-box',    // url
        'size'      => '4.4',   // size of js only
        'lib'       => '-',    // library dependency & size
        'totalsize' => '4.4', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'No',   // supports sets of images? Yes/No
        'other'     => 'No',  // other objects supported? Some text
        'class'     => 'nolib images',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'piroBox',   // name
        'url'       => 'http://www.pirolab.it/pirobox/',    // url
        'size'      => '19.7',   // size of js only
        'lib'       => 'jQuery (94 k)',    // library dependency & size
        'totalsize' => '113.7', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => '',  // other objects supported? Some text
        'class'     => 'jquery images sets',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ), 

    array(
        'name'      => 'mediaboxAdvanced ',   // name
        'url'       => 'http://iaian7.com/webcode/mediaboxAdvanced',    // url
        'size'      => '21.5',   // size of js only
        'lib'       => 'Mootools 1.2 (90k)',    // library dependency & size
        'totalsize' => '111.5', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Inline HTML, audio, video, flash, iframe',  // other objects supported? Some text
        'class'     => 'moo images sets iframes inline video flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),

    array(
        'name'      => 'Fancy Zoom for Prototype',   // name
        'url'       => 'http://orderedlist.com/articles/fancyzoom-meet-prototype',    // url
        'size'      => '9.1',   // size of js only
        'lib'       => 'Prototype + Scriptaculous (172k)',    // library dependency & size
        'totalsize' => '181.2', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'No',   // supports sets of images? Yes/No
        'other'     => 'Inline HTML, Flash',  // other objects supported? Some text
        'class'     => 'proto images inline flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Fancy Zoom for jQuery',   // name
        'url'       => 'http://orderedlist.com/articles/fancyzoom-meet-jquery',    // url
        'size'      => '6.1',   // size of js only
        'lib'       => 'jQuery (94k)',    // library dependency & size
        'totalsize' => '100.1', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'No',   // supports sets of images? Yes/No
        'other'     => 'Inline HTML, Flash',  // other objects supported? Some text
        'class'     => 'jquery images inline flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Sexy Lightbox',   // name
        'url'       => 'http://www.coders.me/web-html-js-css/javascript/sexy-lightbox',    // url
        'size'      => '13.3',   // size of js only
        'lib'       => 'mootools (96.5)',    // library dependency & size
        'totalsize' => '109.8', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => '-',  // other objects supported? Some text
        'class'     => 'moo images sets',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Sexy Lightbox2',   // name
        'url'       => 'http://www.coders.me/web-html-js-css/javascript/sexy-lightbox-2#download',    // url
        'size'      => '22',   // size of js only
        'lib'       => 'mootools (96.5) or jQuery (94k)',    // library dependency & size
        'totalsize' => '117', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Inline elements, Ajax, Flash',  // other objects supported? Some text
        'class'     => 'moo jquery images sets inline ajax flash',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'TALCIBox',   // name
        'url'       => 'http://www.cdsnettr.com/post/2008/07/talcibox.aspx',    // url
        'size'      => '15',   // size of js only
        'lib'       => '-',    // library dependency & size
        'totalsize' => '15', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Iframes &amp; inline HTML',  // other objects supported? Some text
        'class'     => 'nolib images sets inline iframes',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'WeebBox',   // name
        'url'       => 'http://www.weebbox.com/',    // url
        'size'      => '10.6',   // size of js only
        'lib'       => 'Prototype + Scriptaculous (172k)',    // library dependency & size
        'totalsize' => '182.6', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Automatic slideshows possible from sets',  // other objects supported? Some text
        'class'     => 'proto images sets',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'EnlargeIt!',   // name
        'url'       => 'http://enlargeit.timos-welt.de/english/index.php',    // url
        'size'      => '30',   // size of js only
        'lib'       => '-',    // library dependency & size
        'totalsize' => '30', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'No',   // supports sets of images? Yes/No
        'other'     => 'Also several images at once',  // other objects supported? Some text
        'class'     => 'nolib images sets',  // tags from: nolib jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Floatbox',   // name
        'url'       => 'http://floatboxjs.com/',
        'size'      => '71.3',   // size of js only
        'lib'       => '-',    // library dependency & size
        'totalsize' => '71.3', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Iframes, AJAX content, inline divs, flash, quicktime, youtube',  // other objects supported? Some text
        'class'     => 'nolib images sets iframes inline ajax video flash',  // tags from: jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      => 'Milkbox',   // name
        'url'       => 'http://reghellin.com/milkbox/',    // url
        'size'      => '23.2',   // size of js only
        'lib'       => 'Mootools (98k)',    // library dependency & size
        'totalsize' => '121.2', // total js size
        'images'    => 'Yes', // supports images? Yes/No
        'sets'      => 'Yes',   // supports sets of images? Yes/No
        'other'     => 'Flash, XML based gallery definitions. Autoplay and autosize features.',  // other objects supported? Some text
        'class'     => 'moo images sets flash',  // tags from: jquery proto moo yui images sets iframes inline ajax video flash
    ),
    
    array(
        'name'      =>'prettyPhoto',
        'url'       =>'http://www.no-margin-for-errors.com/projects/prettyPhoto/',
        'size'      =>'12',
        'lib'       => 'jQuery (94k)',
        'totalsize' => '106',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'-',
        'class'     =>'jquery images sets',
    ),
    
    array(
        'name'      => 'nyroModal',
        'url'       =>'http://nyromodal.nyrodev.com/',
        'size'      => '33.3',
        'lib'       => 'jQuery (94k)',
        'totalsize' => '127.3',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, Ajax, Iframes, Youtube',
        'class'     =>'jquery images sets iframes inline ajax'
    ),
    
    array(
        'name'      => 'Lightbox2',
        'class'     =>'proto images sets',
        'url'       =>'http://www.huddletogether.com/projects/lightbox2/',
        'size'      =>'18.4',
        'lib'       =>'Prototype + Scriptaculous (172k)',
        'totalsize' =>'190',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Lightbox+',
        'class'     =>'nolib images sets',
        'url'       =>'http://serennz.sakura.ne.jp/toybox/lightbox/',
        'size'      =>'29.4',
        'lib'       =>'-',
        'totalsize' =>'29.4',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Greybox',
        'class'     =>'nolib images sets iframes',
        'url'       =>'http://orangoo.com/labs/GreyBox/',
        'size'      =>'25.5',
        'lib'       =>'-',
        'totalsize' =>'25.5',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Iframes'
    ),
    
    array(
        'name'      => 'Thickbox',
        'class'     =>'jquery images sets iframes inline ajax',
        'url'       =>'http://jquery.com/demo/thickbox/',
        'size'      =>'11.3',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'105.3',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, iframe, ajax'
    ),
    
    array(
        'name'      => 'Greybox Redux',
        'class'     =>'jquery iframes',
        'url'       =>'http://jquery.com/demo/grey/',
        'size'      =>'1.2',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'95.2',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Iframes'
    ),
    
    array(
        'name'      => 'Slimbox',
        'class'     =>'moo images sets',
        'url'       =>'http://www.digitalia.be/software/slimbox',
        'size'      =>'7',
        'lib'       =>'Mootools (98k)',
        'totalsize' =>'105',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'ModalBox',
        'class'     =>'proto ajax',
        'url'       =>'http://www.wildbit.com/labs/modalbox/',
        'size'      =>'22.6',
        'lib'       =>'Prototype + Scriptaculous (165k)',
        'totalsize' =>'187.6',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Ajax content'
    ),
    
    array(
        'name'      => 'Suckerfish HoverLightbox Redux',
        'class'     =>'proto images sets',
        'url'       =>'http://mondaybynoon.com/2007/02/19/suckerfish-hoverlightbox-redux/',
        'size'      =>'23.5',
        'lib'       =>'Prototype + Scriptaculous (165k)',
        'totalsize' =>'152.5',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Awesome Box',
        'class'     =>'yui images sets',
        'url'       =>'http://paularmstrongdesigns.com/projects/awesomebox/',
        'size'      =>'23.5',
        'lib'       =>'YUI (DOM-Events + Animation) (43k)',
        'totalsize' =>'66.5',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'YUI based lightbox',
        'class'     =>'yui images sets',
        'url'       =>'http://thecodecentral.com/2007/08/17/yui-based-lightbox-revisit',
        'size'      =>'7.2',
        'lib'       =>'YUI (lots of components) (355k)',
        'totalsize' =>'362.2',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Imagebox',
        'class'     =>'jquery images sets',
        'url'       =>'http://www.intelliance.fr/jquery/imagebox/',
        'size'      =>'17.6',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'111.6',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'MOOdalbox',
        'class'     =>'moo ajax',
        'url'       =>'http://www.e-magine.ro/web-dev-and-design/36/moodalbox/',
        'size'      =>'9.7',
        'lib'       =>'Mootools (36k)',
        'totalsize' =>'45.7',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Ajax content'
    ),
    
    array(
        'name'      => 'Control.Modal',
        'class'     =>'proto images iframes inline ajax',
        'url'       =>'http://livepipe.net/projects/control_modal/',
        'size'      =>'15.3',
        'lib'       =>'Prototype (130k)',
        'totalsize' =>'145.3',
        'images'    =>'Yes',
        'sets'      =>'No',
        'other'     =>'Inline content, iframe, ajax'
    ),
    
    array(
        'name'      => 'SubModal',
        'class'     =>'nolib ajax',
        'url'       =>'http://www.subimage.com/dhtml/subModal/',
        'size'      =>'12.2',
        'lib'       =>'-',
        'totalsize' =>'12.2',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Ajax content'
    ),
    
    array(
        'class'     =>'proto ajax',
        'url'       =>'http://alexei.417.ro/node/4',
        'name'      => 'TinyBox',
        'size'      =>'2.9',
        'lib'       =>'Prototype (130k)',
        'totalsize' =>'132.9',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Ajax content'
    ),
    
    array(
        'name'      => 'LightBox Gone Wild',
        'class'     =>'proto ajax',
        'url'       =>'http://particletree.com/features/lightbox-gone-wild/',
        'size'      =>'5.9',
        'lib'       =>'Prototype (130k)',
        'totalsize' =>'135.9',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Ajax content'
    ),
    
    array(
        'name'      => 'Prototype Window',
        'class'     =>'proto iframes inline ajax',
        'url'       =>'http://prototype-window.xilinus.com/index.html',
        'size'      =>'64',
        'lib'       =>'Prototype (130k)',
        'totalsize' =>'194',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Inline content, Ajax content'
    ),
    
    array(
        'name'      => 'RoeBox',
        'class'     =>'moo images sets',
        'url'       =>'http://www.roebox.com/',
        'size'      =>'7',
        'lib'       =>'Mootools (23k)',
        'totalsize' =>'30',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Slightbox',
        'class'     =>'moo images sets',
        'url'       =>'http://www.oscandy.com/index.html',
        'size'      =>'20',
        'lib'       =>'Mootools (23k)',
        'totalsize' =>'43',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Litebox',
        'class'     =>'moo images sets',
        'url'       =>'http://www.doknowevil.net/litebox/',
        'size'      =>'18',
        'lib'       =>'Mootools (7k)',
        'totalsize' =>'25',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Smoothbox',
        'class'     =>'moo images sets iframes inline ajax',
        'url'       =>'http://gueschla.com/labs/smoothbox/',
        'size'      =>'10.8',
        'lib'       =>'Mootools (120k)',
        'totalsize' =>'130.8',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, iframe, ajax'
    ),
    
    array(
        'name'      => 'Slightly ThickerBox',
        'class'     =>'jquery images sets ajax video',
        'url'       =>'http://www.jasons-toolbox.com/SlightlyThickerbox/',
        'size'      =>'11.5',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'105.5',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Ajax content, Videos'
    ),
    
    array(
        'name'      => 'iBox',
        'class'     =>'nolib images inline ajax video',
        'url'       =>'http://labs.ibegin.com/ibox/',
        'size'      =>'23.7',
        'lib'       =>'-',
        'totalsize' =>'23.7',
        'images'    =>'Yes',
        'sets'      =>'No',
        'other'     =>'Inline content, Youtube video, Ajax content'
    ),
    
    array(
        'name'      => 'FancyBox',
        'class'     =>'jquery images sets',
        'url'       =>'http://fancy.klade.lv/',
        'size'      =>'12.3',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'103.6',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, iframe'
    ),
    
    array(
        'name'      => 'Highslide',
        'class'     =>'nolib images sets iframes inline ajax flash',
        'url'       =>'http://vikjavev.no/highslide/',
        'size'      =>'8.5 to 68.9',
        'lib'       =>'-',
        'totalsize' =>'8.5 to 69.9',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, Flash, Ajax content, iframe'
    ),
    
    array(
        'name'      => 'Leightbox',
        'class'     =>'proto inline',
        'url'       =>'http://www.eight.nl/files/leightbox/',
        'size'      =>'5.1',
        'lib'       =>'Prototype (130k)',
        'totalsize' =>'135.1',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Inline content'
    ),
    
    array(
        'name'      => 'Shadowbox',
        'class'     =>'nolib images sets iframes inline ajax flash video',
        'url'       =>'http://shadowbox-js.com/',
        'size'      =>'90',
        'lib'       =>'jQuery or Prototype or Mootools or YUI or ExtJS or Dojo',
        'totalsize' =>'Depends.',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, iframe, Flash, Videos, Youtube, Mostly anything'
    ),
    
    array(
        'name'      => 'Fancy Zoom',
        'class'     =>'nolib images sets',
        'url'       =>'http://www.cabel.name/2008/02/fancyzoom-10.html',
        'size'      =>'35',
        'lib'       =>'-',
        'totalsize' =>'35',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'Lightview',
        'class'     =>'proto images sets iframes inline ajax flash',
        'url'       =>'http://www.nickstakenburg.com/projects/lightview/',
        'size'      =>'28',
        'lib'       =>'Prototype + Scriptaculous (165k)',
        'totalsize' =>'157',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, Ajax content, Flash, iframe'
    ),
    
    array(
        'name'      => 'Facebox',
        'class'     =>'jquery images inline ajax',
        'url'       =>'http://famspam.com/facebox',
        'size'      =>'6.2',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'100.2',
        'images'    =>'Yes',
        'sets'      =>'No',
        'other'     =>'Inline content, Ajax content'
    ),
    
    array(
        'name'      => 'Multibox',
        'class'     =>'moo images sets iframes inline ajax flash video',
        'url'       =>'http://www.phatfusion.net/multibox/',
        'size'      =>'20',
        'lib'       =>'Mootools (36k)',
        'totalsize' =>'56',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline content, Ajax, Flash, MP3, video, iframe'
    ),
    
    array(
        'name'      => 'jQuery lightBox plugin',
        'class'     =>'jquery images sets',
        'url'       =>'http://leandrovieira.com/projects/jquery/lightbox/',
        'size'      =>'19',
        'lib'       =>'jQuery (94k)',
        'totalsize' =>'113',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'No'
    ),
    
    array(
        'name'      => 'LightWindow',
        'class'     =>'proto images sets iframes inline ajax flash video',
        'url'       =>'http://stickmanlabs.com/lightwindow/',
        'size'      =>'63.7',
        'lib'       =>'Prototype + Scriptaculous (165k)',
        'totalsize' =>'228.7',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Inline, Ajax, Flash, Video, Mostly anything'
    ),
    
    array(
        'name'      =>'SWFbox',
        'url'       =>'http://www.makesites.cc/programming/by-makis/swfbox/',
        'size'      =>'5.6',
        'lib'       =>'-',
        'totalsize' =>'5.6',
        'images'    =>'No',
        'sets'      =>'No',
        'other'     =>'Flash',
        'class'     =>'nolib flash'
    ),
    
    array(
        'name'      =>'Lytebox',
        'url'       =>'http://www.dolem.com/lytebox/',
        'size'      =>'39.5',
        'lib'       =>'-',
        'totalsize' =>'39.5',
        'images'    =>'Yes',
        'sets'      =>'Yes',
        'other'     =>'Iframes',
        'class'     =>'nolib images sets iframes'
    ),
    
);

