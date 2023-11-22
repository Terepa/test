<?php

namespace YOOtheme\Theme\Wordpress\Listener;

class AddSvgFileType
{
    /**
     * Filters the “real” file type of the given file.
     *
     * @link https://developer.wordpress.org/reference/hooks/wp_check_filetype_and_ext/
     *
     * @param mixed $data
     * @param mixed $file
     * @param mixed $filename
     * @param mixed $mimes
     */
    public static function handle($data, $file, $filename, $mimes)
    {
        if (empty($data['type']) && substr($filename, -4) === '.svg') {
            $data['ext'] = 'svg';
            $data['type'] = 'image/svg+xml';
        }

        return $data;
    }
}
