<?php
namespace Ttree\Oembed\Resource;

/*
 * This file is part of the Ttree.Oembed package.
 *
 * (c) Dominique Feyer <dfeyer@ttree.ch>
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;

/**
 * oEmbed AbstractResource
 *
 * @author  Romain Ruetschi <romain.ruetschi@gmail.com>
 * @author  Dominique Feyer <dfeyer@ttree.ch>
 */
abstract class AbstractResource
{

    /**
     * Type.
     *
     * @var string
     */
    protected $type = '';

    /**
     * Version.
     *
     * @var string
     */
    protected $version = '1.0';

    /**
     * Title.
     *
     * @var string
     */
    protected $title = '';

    /**
     * Author _name.
     *
     * @var string
     */
    protected $author_name = '';

    /**
     * Author URL.
     *
     * @var string
     */
    protected $author_url = '';

    /**
     * Provider _name.
     *
     * @var string
     */
    protected $provider_name = '';

    /**
     * Provider URL.
     *
     * @var string
     */
    protected $provider_url = '';

    /**
     * Cache Age
     *
     * @var integer+
     */
    protected $cacheAge = 0;

    /**
     * Thumbnail URL
     *
     * @var string
     */
    protected $thumbnail_url = '';

    /**
     * Thumbnail Width
     *
     * @var integer
     */
    protected $thumbnailWidth = 0;

    /**
     * Thumbnail Height
     *
     * @var integer
     */
    protected $thumbnailHeight = 0;

    /**
     * @var integer
     */
    protected $duration = 0;

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var string
     */
    protected $upload_date = '';

    /**
     * @var string
     */
    protected $uri = '';

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getUpload_date(): string
    {
        return $this->upload_date;
    }

    /**
     * @param string $upload_date
     */
    public function setUpload_date(string $upload_date)
    {
        $this->upload_date = $upload_date;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * Get a string representation of the oEmbed resource.
     *
     * @return string
     */
    abstract public function getAsString();

    /**
     * Get a string representation of the oEmbed resource.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getAsString();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'type' => $this->type,
            'version' => $this->version,
            'author_name' => $this->author_url,
            'author_url' => $this->author_url,
            'provider_name' => $this->provider_name,
            'provider_url' => $this->provider_url,
            'cacheAge' => $this->cacheAge,
            'thumnail_url' => $this->thumbnail_url,
            'thumnailWidth' => $this->thumbnailWidth,
            'thumnailHeight' => $this->thumbnailHeight,
            'uri' => $this->uri,
            'upload_date' => $this->upload_date,
            'description' => $this->description,
            'content' => (string)$this
        ];
    }

    /**
     * @param string $author_name
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setAuthor_name($author_name)
    {
        $this->author_name = $author_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor_name()
    {
        return $this->author_name;
    }

    /**
     * @param string $author_url
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setAuthor_url($author_url)
    {
        $this->author_url = $author_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor_url()
    {
        return $this->author_url;
    }

    /**
     * @param int $cacheAge
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setCacheAge($cacheAge)
    {
        $this->cacheAge = $cacheAge;

        return $this;
    }

    /**
     * @return int
     */
    public function getCacheAge()
    {
        return $this->cacheAge;
    }

    /**
     * @param string $provider_name
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setProvider_name($provider_name)
    {
        $this->provider_name = $provider_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvider_name()
    {
        return $this->provider_name;
    }

    /**
     * @param string $provider_url
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setProvider_url($provider_url)
    {
        $this->provider_url = $provider_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvider_url()
    {
        return $this->provider_url;
    }

    /**
     * @param int $thumbnailHeight
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setThumbnailHeight($thumbnailHeight)
    {
        $this->thumbnailHeight = $thumbnailHeight;

        return $this;
    }

    /**
     * @return int
     */
    public function getThumbnailHeight()
    {
        return $this->thumbnailHeight;
    }

    /**
     * @param string $thumbnail_url
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setThumbnail_url($thumbnail_url)
    {
        $this->thumbnail_url = $thumbnail_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnail_url()
    {
        return $this->thumbnail_url;
    }

    /**
     * @param int $thumbnailWidth
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setThumbnailWidth($thumbnailWidth)
    {
        $this->thumbnailWidth = $thumbnailWidth;

        return $this;
    }

    /**
     * @return int
     */
    public function getThumbnailWidth()
    {
        return $this->thumbnailWidth;
    }

    /**
     * @param string $title
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $type
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $version
     * @return \Ttree\Oembed\Resource\AbstractResource
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $string
     * @return mixed
     * @todo use Flow API
     */
    protected static function underscoreToUpperCamelCase($string)
    {
        return str_replace(' ', '', ucwords(str_replace('_', ' ', $string)));
    }
}

?>
