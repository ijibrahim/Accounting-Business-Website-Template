<?php

namespace App\Enums;

enum NewsletterSubscriberStatus: int
{
    case Unsubscribed = 0;
    case Active = 1;
}
