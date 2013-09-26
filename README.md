WordPress Boilerplate
=====================

WordPress Boilerplate is a simple starting point which includes WordPress as a submodule, the required configurations and a dummy plugin &amp; theme structure.


## Installation

Clone the repository:

    git clone --recursive git://github.com/jappievw/wordpress-boilerplate.git

And remove this origin repository from your working copy:

    cd wordpress-boilerplate
    git remote rm origin

Add your new origin repository to your working copy:

    git remote add origin <url_here>

## Updating Wordpress

Updating the wordpress version is as simple as checking out a new version from the submodule wordpress repository. Be aware that new versions of wordpress might have new configuration options available.

    cd wordpress-boilerplate
    cd wordpress
    git fetch
    git checkout <tag-name>
    git commit -m "Updating wordpress to <tag-name>"

## License

Licensed under the MIT license.

Copyright (c) 2013 Jasper van Wanrooy, Antti-Jussi Kovalainen, http://ajk.fi/

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
