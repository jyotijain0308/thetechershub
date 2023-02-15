<?php

namespace Modules\Blog\Datatables;

use Hexters\Ladmin\Supports\Datatables;
use Illuminate\Support\Facades\Blade;

use Modules\Blog\Models\Article;

class ArticleDatatables extends Datatables
{

    /**
     * Page title
     *
     * @var String
     */
    protected $title = 'Articles';

    /**
     * Setup query builder
     */
    public function __construct()
    {
        $this->query = Article::query();
    }

    /**
     * DataTables using Eloquent Builder.
     *
     * @return DataTableAbstract|EloquentDataTable
     */
    public function handle()
    {
        return $this->eloquent($this->query)
            ->addColumn('action', function ($row) {
                return Blade::render('<a href="">Button</a>');
            });
    }

    /**
     * Table headers
     *
     * @return array
     */
    public function headers(): array
    {
        return [
            'id',
            'Action' => ['class' => 'text-center'],
        ];
    }

    /**
     * Datatables Data column
     * Visit Doc: https://datatables.net/reference/option/columns.data#Default
     *
     * @return array
     */
    public function columns(): array
    {
        return [
            ['data' => 'id', 'class' => 'text-center'],
            ['data' => 'action', 'class' => 'text-center', 'orderable' => false]
        ];
    }

    /**
     * Button create for page view
     *
     * @return \Illuminate\Support\Facades\Blade | Html
     */
    public function button()
    {
        return Blade::render(
            '<a href="' . route('ladmin.article.create') . '" class="btn btn-primary">+ Add New</a>'
        );
    }
}
