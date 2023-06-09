<?php

namespace Modules\Category\UseCase;

use Modules\Category\Domain\Category;
use Modules\Category\Dto\CreateCategory\CreateCategoryRequestDto;
use Modules\Category\Dto\CreateCategory\CreateCategoryResponseDto;
use Modules\Category\Repositores\CategoryRepositoryInterface;

class CreateCategoryUseCase
{
    public function __construct(private CategoryRepositoryInterface $categoryRepository)
    {
    }

    public function execute(CreateCategoryRequestDto $request): CreateCategoryResponseDto
    {
        $category = new Category(
            name: $request->name,
            description: $request->description,
            isActive: $request->isActive,
        );

        $newCategory = $this->categoryRepository->insert($category);

        return new CreateCategoryResponseDto(
            id: $newCategory->id(),
            name: $newCategory->name,
            description: $category->description,
            isActive: $category->isActive,
            createdAt: $category->createdAt(),
        );
    }
}
