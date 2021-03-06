<?php

namespace Packages\Domain\Models\RootArticle;

use Packages\Domain\Interfaces\Models\ValueObjectInterface;

class ArticleId implements ValueObjectInterface
{
    private int $article_id;

    function __construct(int $article_id) {
        $this->article_id = $article_id;
    }

    public function getArticleId() : int{
        return $this->article_id;
    }
}
