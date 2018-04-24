<?php

namespace Mindbird\Textsnippet\Modules;

use Contao\StringUtil;
use Mindbird\Textsnippet\Models\TextsnippetModel;

class Textsnippet extends \Frontend
{

    public function replaceInsertTag($insertTag)
    {
        $insertTag = explode('::', $insertTag);

        if ($insertTag[0] !== 'textsnippet') {
            return false;
        }

        if (isset($insertTag[1])) {
            $snippet = $this->getTextsnippet($insertTag[1]);

            return StringUtil::toHtml5($this->replaceInsertTag($snippet->text, true));
        }
    }

    protected function getTextsnippet($intId)
    {
        $snippet = TextsnippetModel::findByPk($intId);
        if ($snippet) {
            return $snippet;
        }

        return false;
    }

}