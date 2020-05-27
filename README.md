# acents

Stupidly short PHP script to decode HTML special chars. I use it most to convert HTML acent characters (e.g `&aacute;`) to normal acent characters (e.g `á`).

However, it can also be used to convert ALL and every html_entities.

### Usage
```shell
php acents.php "&aacute; &eacute; &iacute; &oacute; &uacute;"
// Which will be decoded to "á é í ó ú".
```

If no argument is passed, and exception is thrown.

You can learn more about HTML acents [here](https://www.w3schools.com/charsets/ref_utf_latin1_supplement.asp) and [here](https://html.spec.whatwg.org/multipage/named-characters.html#named-character-references).

Happy coding!
