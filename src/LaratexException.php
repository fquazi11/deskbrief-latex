<?php

namespace Skyplan\DeskbriefLatex;

use Exception;

class LaratexException extends Exception
{
    protected $texcontent;

    public static function detailed($message, $texcontent)
    {
        $instance = new static($message);
        $instance->texcontent = $texcontent;

        return $instance;
    }

    public function context()
    {
        return [
            'user_id' => 0,
            'tex_content' => $this->texcontent,
        ];
    }
}
