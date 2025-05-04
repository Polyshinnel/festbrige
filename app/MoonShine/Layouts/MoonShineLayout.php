<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\ColorManager\ColorManager;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Laravel\Components\Layout\{Locales, Notifications, Profile, Search};
use MoonShine\UI\Components\{Breadcrumbs,
    Components,
    Layout\Flash,
    Layout\Div,
    Layout\Body,
    Layout\Burger,
    Layout\Content,
    Layout\Footer,
    Layout\Head,
    Layout\Favicon,
    Layout\Assets,
    Layout\Meta,
    Layout\Header,
    Layout\Html,
    Layout\Layout,
    Layout\Logo,
    Layout\Menu,
    Layout\Sidebar,
    Layout\ThemeSwitcher,
    Layout\TopBar,
    Layout\Wrapper,
    When};
use App\MoonShine\Resources\MainPageTextResource;
use MoonShine\MenuManager\MenuItem;
use App\MoonShine\Resources\MainPageGalleryResource;
use App\MoonShine\Resources\PageImagesResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\PageTextResource;
use App\MoonShine\Resources\ContactInfoResource;

final class MoonShineLayout extends AppLayout
{
    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            ...parent::menu(),
            MenuItem::make('MainPageTexts', MainPageTextResource::class),
            MenuItem::make('MainPageGalleries', MainPageGalleryResource::class),
            MenuItem::make('PageImages', PageImagesResource::class),
            MenuItem::make('Pages', PageResource::class),
            MenuItem::make('PageTexts', PageTextResource::class),
            MenuItem::make('ContactInfos', ContactInfoResource::class),
        ];
    }

    /**
     * @param ColorManager $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }

    public function build(): Layout
    {
        return parent::build();
    }
}
