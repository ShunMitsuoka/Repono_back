<?php

namespace Packages\Domain\Models\RootCategory;

use Packages\Domain\Interfaces\Models\EntityInterface;
use Packages\Domain\Models\RootCategory\CategoryId;

class Category implements EntityInterface
{
    private ?CategoryId $category_id;
    private string $category_name;

    function __construct(
        ?CategoryId $category_id, 
        string $category_name
    ) {
        $this->category_id = $category_id;
        $this->category_name = $category_name;
    }
    public function getCategoryId() : int{
        if(is_null($this->category_id)){
            throw new \Exception('カテゴリIDが存在しません。');
        }
        return $this->category_id->getId();
    }
    public function getName() : string{
        return $this->category_name;
    }
}
