<?php

namespace App\Enums;

enum ContactSubmissionStatus: int
{
    case New = 0;
    case Read = 1;
    case Replied = 2;
    case Archived = 3;
}
