<?php

namespace Modules\Category\Dto\ListCategories;

class ListCategoriesRequestDto
{
    public function __construct(
        public string $filter = '',
        public string $order = 'DESC',
        public int $page = 1,
        public int $totalPage = 15,
    ) {
    }
}
