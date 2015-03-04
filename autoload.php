<?php
use \Resonantcore\PHPFuture as Future;
spl_autoload_register(function ($class) {
    
    // project-specific namespace prefix
    $prefix = 'Resonantcore\\PHPFuture\\';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src/';
    
    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }
    
    // get the relative class name
    $relative_class = substr($class, $len);
    
    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
});

if (!function_exists('hash_equals')) {
    /**
     * From PHP 5.6
     * 
     * @param string $a
     * @param string $b
     * @ref https://php.net/hash_equals
     * @return boolean
     */
    function hash_equals($known_string, $user_string)
    {
        return Future\Security::hashEquals(
            $known_string,
            $user_string
        );
    }
}