<?php
/**
 * Created by mindbird
 * User: Florian Otto
 * Date: 07.06.15
 * Time: 17:53
 */

namespace Textsnippet;


class Textsnippet extends \Frontend {

    public function replaceInsertTag($strTag) {
        $arrSplit = explode('::', $strTag);

        if ($arrSplit[0] != 'textsnippet')
        {
            return false;
        }

        if (isset($arrSplit[1])) {
            $objTextsnippet = $this->getTextsnippet($arrSplit[2]);
            return $objTextsnippet->text;
        }
    }

    protected function getTextsnippet($intId) {
        $objTextsnippet = \TextsnippetModel::findByPk($intId);
        if ($objTextsnippet) {
            return $objTextsnippet;
        } else {
            return;
        }
    }
}