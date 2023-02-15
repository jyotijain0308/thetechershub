<?php

namespace Modules\Blog\Searches;

use Hexters\Ladmin\Searches\LadminGroupSearch;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ArticleSearch extends Model
{

    use LadminGroupSearch;

    /**
     * Set gate & permission access
     *
     * @return array|null
     */
    protected function searchGates()
    {
        return null;
    }

    /**
     * Group name 
     *
     * @return string
     */
    protected function searchGropuName()
    {
        return 'Article';
    }

    /**
     * Title search
     *
     * @return string
     */
    protected function searchTitle()
    {
        return $this->id;
    }

    /**
     * Description search
     *
     * @return string
     */
    protected function searchDescription()
    {
        return $this->id;
    }

    /**
     * Set detail page
     *
     * @return string
     */
    protected function searchLinkDetails()
    {
        return null;
    }
    
}
