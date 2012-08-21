# Upload files
You can upload files, which are stored on your server in the directory `plugins/upload/files/`. `upload` then provides you with useful information:

* Link
* URL
* HTML link
* Markdown link

If you have PHP [`fileinfo`](http://www.php.net/manual/en/book.fileinfo.php) installed, you also get:

* MIME-Type
* If the file is an image:
    * HTML image
    * Markdown image
    * displays the image