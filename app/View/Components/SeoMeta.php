<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SeoMeta extends Component
{
    public string $title;
    public string $description;
    public ?string $image;
    public ?string $url;
    public string $type;
    public ?string $locale;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title = '',
        string $description = '',
        ?string $image = null,
        ?string $url = null,
        string $type = 'website',
        ?string $locale = null
    ) {
        $siteName = 'Ветеранський Простір';

        $this->title = $title ? "{$title} | {$siteName}" : $siteName;
        $this->description = $description ?: 'Ветеранський простір Хмельницького - підтримка ветеранів, військових та їхніх родин. Послуги, адаптація, консультування.';
        $this->image = $image ?: asset('images/og-default.jpg');
        $this->url = $url ?: url()->current();
        $this->type = $type;
        $this->locale = $locale ?: (app()->getLocale() === 'ua' ? 'uk_UA' : 'en_US');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.seo-meta');
    }
}
