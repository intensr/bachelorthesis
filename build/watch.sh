#!/bin/sh

# Change all instances of ‘your-project’ to whatever you have named your
# project’s stylesheet, `cd` to the directory in which this file lives and
# simply run `sh watch.sh`.


sass --watch sass/app.scss:../css/app.css --style compressed

#sass --watch your-project.scss:your-project.min.css --style expanded

exit 0
