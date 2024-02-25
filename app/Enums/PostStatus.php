<?php

namespace App\Enums;

use App\Enums\Traits\Values;

/**
 * Gender
 */
enum PostStatus: string
{
    use Values;

    case Draft = 'draft';
    case PendingReview = 'pendingReview';
    case Published = 'published';
    case Trash = 'trash';
}
