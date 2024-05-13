<?php

namespace App\Enums;

enum Navigation: string
{
    case HOME = 'home';
    case ABOUT = 'about';
    case SERVICES = 'services';
    case CONTACT = 'contact';

    public function getTitle(): string
    {
        return match ($this) {
            self::HOME => 'Home',
            self::ABOUT => 'About',
            self::SERVICES => 'Services',
            self::CONTACT => 'Contact',
        };
    }

    public function getLink(): string
    {
        return match ($this) {
            self::HOME => '/home',
            self::ABOUT => '/about',
            self::SERVICES => '/services',
            self::CONTACT => '/contact',
        };
    }
}

