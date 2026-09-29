<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Leads;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lead;
use App\MoonShine\Resources\Leads\Pages\LeadsIndexPage;
use App\MoonShine\Resources\Leads\Pages\LeadsFormPage;
use App\MoonShine\Resources\Leads\Pages\LeadsDetailPage;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Contracts\Core\PageContract;

/**
 * @extends ModelResource<Leads, LeadsIndexPage, LeadsFormPage, LeadsDetailPage>
 */
class LeadsResource extends ModelResource
{
    protected string $model = Lead::class;

    protected string $title = 'Leads';
    
    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            LeadsIndexPage::class,
            LeadsFormPage::class,
            LeadsDetailPage::class,
        ];
    }
}
