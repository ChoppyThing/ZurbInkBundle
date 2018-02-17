<?php

/*
 * This file is part of the zurb-ink-bundle package.
 *
 * (c) Marco Polichetti <gremo1982@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gremo\ZurbInkBundle\Twig;

use Hampe\Inky\Inky;

class InkyExtension extends \Twig_Extension
{
    const NAME = 'zurb_ink.inky';

    /**
     * @var Inky
     */
    protected $inky;

    public function __construct(Inky $inky)
    {
        $this->inky = $inky;
    }

    public function getName()
    {
        return self::NAME;
    }

    public function getTokenParsers()
    {
        return array(
            new InkyTokenParser()
        );
    }

    public function parse($html)
    {
        return $this->inky->releaseTheKraken($html);
    }
}