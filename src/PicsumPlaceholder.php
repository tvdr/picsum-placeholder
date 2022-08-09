<?php

namespace Tvdr\PicsumPlaceholder;

class PicsumPlaceholder
{

    private $api_url, $width, $height, $blur, $graysacle, $random;

    public function __construct()
    {
        $this->api_url = config('picsum-placeholder.api_url');
        $this->width = config('picsum-placeholder.width');
        $this->height = config('picsum-placeholder.height');
        $this->blur = config('picsum-placeholder.blur');
        $this->graysacle = config('picsum-placeholder.grayscale');
        $this->random = config('picsum-placeholder.random');
    }

    public function width($width)
    {
        $this->width = $width;
        return $this;
    }

    public function height($height)
    {
        $this->height = $height;
        return $this;
    }

    public function blur($amount)
    {
        $this->blur = $amount;
        return $this;
    }

    public function grayscale($enabled)
    {
        $this->graysacle = $enabled;
        return $this;
    }

    public function random($enabled)
    {
        $this->random = $enabled;
        return $this;
    }

    public function getUrl()
    {

        $url = $this->api_url;

        if (substr($url, -1) !== '/') {
            $url .= '/';
        }

        $url .= $this->width . '/';
        $url .= $this->height;
        $url .= '?';
        if ($this->blur) {
            $url .= 'blur=' . $this->blur . '&';
        }
        if ($this->graysacle) {
            $url .= 'grayscale&';
        }
        if ($this->random) {
            $url .= 'r=' . rand();
        }


        return $url;
    }

    public function getBlob()
    {
        return file_get_contents(html_entity_decode($this->getUrl()));
    }
}
