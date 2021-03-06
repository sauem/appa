<?php

namespace DgoraWcas\Integrations\Themes;

class ThemesCompatibility
{
    private $themeName = '';
    private $theme = null;
    private $supportActive = false;

    public function __construct()
    {
        $this->setCurrentTheme();

        $this->loadCompatibilities();
    }

    private function setCurrentTheme()
    {
        $name = '';

        $theme = wp_get_theme();

        if (is_object($theme) && is_a($theme, 'WP_Theme')) {
            $template     = $theme->get_template();
            $stylesheet   = $theme->get_stylesheet();
            $isChildTheme = $template !== $stylesheet;
            $name         = sanitize_title($theme->Name);

            if ($isChildTheme) {
                $name = $template;
            }

            $this->theme = $theme;
        }

        $this->themeName = $name;

    }

    /**
     *  All supported themes
     *
     * @return array
     */
    public function supportedThemes()
    {
        return array(
            'storefront' => array(
                'slug' => 'storefront',
                'name' => 'Storefront',
            ),
            'flatsome'   => array(
                'slug' => 'flatsome',
                'name' => 'Flatsome',
            )
        );
    }

    /**
     * Load class with compatibilities logic for current theme
     *
     * @return void
     */
    private function loadCompatibilities()
    {

        foreach ($this->supportedThemes() as $theme) {
            if ($theme['slug'] === $this->themeName) {

                $this->supportActive = true;

                $class = '\\DgoraWcas\\Integrations\\Themes\\';

                if (isset($theme['className'])) {
                    $class .= $theme['className'] . '\\' . $theme['className'];
                } else {
                    $class .= $theme['name'] . '\\' . $theme['name'];
                }

                new $class;

                break;
            }
        }
    }

    /**
     * Check if current theme is supported
     *
     * @return bool
     */
    public function isCurrentThemeSupported()
    {
        return $this->supportActive;
    }

    /**
     * Get current theme onfo
     *
     * @return object
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Get current theme onfo
     *
     * @return object
     */
    public function getThemeImageSrc()
    {
        $src = '';

        if ( ! empty($this->theme)) {

            if (empty($src) && file_exists($this->theme->get_template_directory() . '/screenshot.png')) {
                $src = $this->theme->get_template_directory_uri() . '/screenshot.png';
            }
        }

        return ! empty($src) ? esc_url($src) : '';
    }

}