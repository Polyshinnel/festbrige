<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\MainPageGallery;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Enums\SortDirection;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Preview;
use MoonShine\UI\Fields\Text;

/**
 * @extends ModelResource<MainPageGallery>
 */
class MainPageGalleryResource extends ModelResource
{
    protected string $model = MainPageGallery::class;

    protected string $title = 'MainPageGalleries';

    protected SortDirection $sortDirection = SortDirection::ASC;

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Page id', 'page_id'),
            Preview::make('image', 'img', static fn($image)=> "/storage/$image->img")
                ->image()
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Text::make('Page id', 'page_id'),
                Image::make('Thumbnail', 'img_small')->dir('images'),
                Image::make('Full img', 'img')->dir('images'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Page id', 'page_id'),
            Image::make('Thumbnail', 'img_small')->dir('images'),
            Image::make('Full img', 'img')->dir('images'),
        ];
    }

    /**
     * @param MainPageGallery $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [];
    }
}
