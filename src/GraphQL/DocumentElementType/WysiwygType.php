<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Enterprise License (PEL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Bundle\DataHubBundle\GraphQL\DocumentElementType;

class WysiwygType extends SimpleTextType
{
    protected static $instance;

    /**
     * @return WysiwygType
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            $config = self::getStandardConfig("document_tagWysiwyg");
            self::$instance = new static($config);
        }

        return self::$instance;
    }
}
