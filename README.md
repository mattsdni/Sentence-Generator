# Sentence-Generator
This site generates random sentences based on grammar files. Unfortunately it's not currently hosted anywhere.

main features:
* connect to mysql database (to keep track of files, load files)
* respond to ajax requests (returns the generated sentence/paragraph)
* generate dynamic html content (generate the home page with all the available grammars listed)
* multiple return types of functions (function can return false on error, or string on success)
* pass any number of arguments to function (render takes template file + an array if you want)
