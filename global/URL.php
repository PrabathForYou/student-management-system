<?php

class URL {
    /**
     * Get the base URL of the application
     */
    public static function base() {
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];
        return $protocol . '://' . $host;
    }

    /**
     * Get full URL for a file path
     */
    public static function file_loc($path) {
        return self::base() . $path;
    }

    /**
     * Get relative URL from current directory
     */
    public static function relative($path) {
        return $path;
    }

    /**
     * Redirect to a URL
     */
    public static function redirect($url) {
        header('Location: ' . $url);
        exit();
    }

    /**
     * Get current page URL
     */
    public static function current() {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * Build URL with query parameters
     */
    public static function withParams($path, $params = []) {
        $queryString = http_build_query($params);
        return $path . ($queryString ? '?' . $queryString : '');
    }
}

?>
