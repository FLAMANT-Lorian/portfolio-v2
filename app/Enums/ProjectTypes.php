<?php

namespace App\Enums;

enum ProjectTypes: string
{
    case WEBSITE = 'website';
    case WEB_APP = 'web application';
    case MOBILE_APP = 'mobile application';
    case DESIGN = 'design';
}
