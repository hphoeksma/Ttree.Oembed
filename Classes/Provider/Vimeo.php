<?php
namespace Ttree\Oembed\Provider;

/*
 * This file is part of the Ttree.Oembed package.
 *
 * (c) Dominique Feyer <dfeyer@ttree.ch>
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Ttree\Oembed\Provider;
use TYPO3\Flow\Annotations as Flow;

/**
 * oEmbed Link
 *
 * @author  Romain Ruetschi <romain.ruetschi@gmail.com>
 * @author  Dominique Feyer <dfeyer@ttree.ch>
 */
class Vimeo extends Provider
{

    public function __construct()
    {
        parent::__construct(
            'https://www.vimeo.com/api/oembed.json',
            [
                'https://*.vimeo.com/*',
                'https://vimeo.com/channels/*/*',
                'https://vimeo.com/groups/*/videos/*'
            ],
            'https://www.vimeo.com',
            'Vimeo'
        );
    }

}

?>
