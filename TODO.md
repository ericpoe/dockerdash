# TODO v1.0 Release

* A basic dashboard structure
    * Should have mobile view, too
    * Aim for A11y
* ~~Always visible system info~~
* PurgeCSS - to reduce size of CSS file
* Show stats:
    * containers
    * images
    * volumes
* Anonymous can view stats
* Start, Stop, Restart, & Delete:
    * containers
    * images
    * volumes
* Logged-in Admin can view and take action on containers/images/volumes
* Run in a Docker container

# Nice to Have

* Selenium tests
* Jest tests
* PHPUnit tests

# v1.1 Release
 
* Add user-based security
    * Require users to login before they can take action on a container/image/volume
    * Associate certain containers/images/volumes with specific users
    * Admin can manually associate containers/images/volumes with specific users
* Select a better color scheme than greyscale
* Compare images to their Docker Hub equivalents and allow user to update image if a newer patch version is available
* Allow user to keep an eye on containers/images/volumes
