//? echo get_stylesheet_uri(); // http://localhost/falcon/wp-content/themes/falcon/style.css
// echo '<br>';
//? echo get_template_directory_uri(); // http://localhost/falcon/wp-content/themes/falcon
// echo '<br>';
//? echo get_template_directory(); //C:\xampp\htdocs\falcon/wp-content/themes/falcon

//? echo filemtime(get_template_directory().'/style.css'); 1747919826


/*
* wp_enqueue_style( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, string $media = 'all' )
*/

/*
 * Proper way to enqueue scripts and styles - https://developer.wordpress.org/reference/functions/wp_enqueue_style/#more-information
 */

/*
? filemtime(get_template_directory().'/style.css')

? This is the version number.

? filemtime() gets the last modified time of the style.css file (as a Unix timestamp).

? Purpose: Helps with cache busting. When the file changes, the version changes, so browsers will re-download the new CSS instead of using a cached version.
*/

//? wp_enqueue_scripts is a built-in WordPress hook that runs in the <head> of the HTML document (on the frontend).

/*
wp_enqueue_script( string $handle, string $src = '', string[] $deps = array(), string|bool|null $ver = false, array|bool $args = array() )

Parameters
$handle
string
required
Name of the script. Should be unique.
$src
string
optional
Full URL of the script, or path of the script relative to the WordPress root directory.
Default:''

$deps
string[]
optional
An array of registered script handles this script depends on.
Default:array()

$ver
string|bool|null
optional
String specifying script version number, if it has one, which is added to the URL as a query string for cache busting purposes. If version is set to false, a version number is automatically added equal to current installed WordPress version.
If set to null, no version is added.
Default:false

$args
array|bool
optional
An array of additional script loading strategies.
Otherwise, it may be a boolean in which case it determines whether the script is printed in the footer. Default false.
strategy string
Optional. If provided, may be either 'defer' or 'async'.
in_footer bool
Optional. Whether to print the script in the footer. Default 'false'.
Default:array()
*/

<!-- get_template_part( $slug, $name = null ); -->

/*
?A namespace in PHP is a way to group related code and avoid naming conflicts between classes, functions, or constants—especially useful in large codebases or when using third-party libraries.
*/

/*

namespace MyTheme\Utilities;

class Helper {
    public static function do_something() {
        return 'Did something!';
    }
}

*/

/*

? ✅ Benefits:
? Prevents name collisions (e.g., two classes named Helper in different parts of the project).

? Makes the code more modular and organized.

*/

/*

? 🔹 2. What is an Autoloader?

? An autoloader automatically loads PHP classes or files when they're needed—without requiring a manual require or include.

? spl_autoload_register() this is the function needed to set up an autoloader

*/