<?php

namespace app\helpers;

use app\models\Post;
use yii\helpers\Html;

/**
 * Text helper
 *
 * @author Alexander Makarov
 * @author Alexander Schilling
 */
class Text
{

    /**
     * Cuts text after [cut] mark
     *
     * @param string $text
     * @param string $moreLink
     *
     * @return string
     */
    public static function cut($text, $moreLink = null)
    {
        $text = explode('[cut]', $text, 2);

        return empty($text[1]) ? $text[0] : $moreLink === null ? $text[0] : $text[0] . "\n$moreLink";
    }

    /**
     * Removes [cut] mark from the text
     *
     * @param string $text
     *
     * @return string
     */
    public static function hideCut($text)
    {
        return str_replace('[cut]', '', $text);
    }

    /**
     * Returns tags list
     *
     * @param Post $model
     *
     * @return string
     */
    public static function getTagsList(Post $model)
    {

        $buffer = [];

        foreach ($model->tags as $tag) {
            $buffer[] = Html::a($tag->fName, ['/post/tag', 'tagName' => $tag->name]);
        }

        return implode(', ', $buffer);

    }

}
