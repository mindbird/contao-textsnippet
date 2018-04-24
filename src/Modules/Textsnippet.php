<?php

namespace Mindbird\Contao\Textsnippet\Modules;

use Contao\Frontend;
use Contao\StringUtil;
use Mindbird\Contao\Textsnippet\Models\TextsnippetModel;

/**
 * Class Textsnippet
 * @package Mindbird\Contao\Textsnippet\Modules
 */
class Textsnippet extends Frontend
{
    /**
     * ReplaceInsertTag hook
     * @param string $insertTag
     * @return bool|string
     */
    public function replaceInsertTag($insertTag)
    {
        $tagElements = explode('::', $insertTag);

        if ($tagElements[0] !== 'textsnippet') {
            return false;
        }

        return StringUtil::toHtml5($this->getTextsnippet($tagElements[1]));
    }

    /**
     * Load snippet from db
     * @param int $id
     * @return bool|TextsnippetModel
     */
    protected function getTextsnippet($id)
    {
        $snippet = TextsnippetModel::findByPk($id);
        if ($snippet) {
            return $snippet;
        }

        return false;
    }

}