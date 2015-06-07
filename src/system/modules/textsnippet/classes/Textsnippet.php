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

        if (isset($arrSplit[1]) && isset($arrSplit[2])) {
            $this->checkArchiveByIdentifier($arrSplit[1]);
            $objTextsnippet = $this->getTextsnippet($arrSplit[2]);
            return $objTextsnippet->text;
        }
    }

    protected function checkArchiveByIdentifier($strIdentifier) {
        $objArchiveModel = \TextsnippetArchiveModel::findBy('identifier', $strIdentifier);
        if ($objArchiveModel) {
            return $objArchiveModel;
        } else {
            throw new \Exception('Archiv ist nicht vorhanden');
        }

    }

    protected function getTextsnippet($intId) {
        $objTextsnippet = \TextsnippetModel::findByPk($intId);
        if ($objTextsnippet) {
            return $objTextsnippet;
        } else {
            throw new \Exception('Textschnipsel ist nicht vorhanden');
        }
    }
}