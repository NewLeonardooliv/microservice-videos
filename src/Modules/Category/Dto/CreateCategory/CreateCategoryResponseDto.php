<?php

namespace Modules\Category\Dto\CreateCategory;

class CreateCategoryResponseDto
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description = '',
        public bool $isActive = true,
        public string $createdAt = '',
    ) {
    }
}
