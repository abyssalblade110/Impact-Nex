<?php

namespace Modules\Article\Models\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait PostPresenter
{
    /**
     * Get the featured image attribute.
     *
     * @param  mixed  $value  The value of the featured image attribute.
     * @return string The modified featured image URL.
     */
    public function getFeaturedImageAttribute($value)
    {
        $featured_image = $value;

        if (Str::startsWith($featured_image, 'https://picsum.photos')) {
            $return_text = $featured_image.'?random='.$this->id;
        } else {
            $return_text = $featured_image;
        }

        return $return_text;
    }

    /**
     * Get the formatted published_at attribute.
     *
     * @return string
     */
    public function getPublishedAtFormattedAttribute()
    {
        $diff = Carbon::now()->diffInHours($this->published_at);

        if ($diff < 24) {
            return $this->published_at->diffForHumans();
        }

        return $this->published_at->isoFormat('llll');
    }

    public function getPublishedAtFormattedBengaliAttribute()
    {
        $diff = Carbon::now()->diffInHours($this->published_at);

        if ($diff < 24) {
            return $this->published_at->diffForHumans();
        }
        $date_string = $this->published_at->isoFormat('llll');

        return en2bnDate($date_string);
    }

    public function getStatusFormattedAttribute()
    {
        switch ($this->status) {
            case '0':
                return '<span class="badge bg-danger">Unpublished</span>';
                break;

            case '1':
                if ($this->published_at >= Carbon::now()) {
                    return '<span class="badge bg-warning text-dark">Scheduled ('.$this->published_at_formatted.')</span>';
                }

                return '<span class="badge bg-success">Pubished</span>';
                break;

            case '2':
                return '<span class="badge bg-info">Draft</span>';
                break;

            default:
                return '<span class="badge bg-primary">Status:'.$this->status.'</span>';
                break;
        }
    }
}
