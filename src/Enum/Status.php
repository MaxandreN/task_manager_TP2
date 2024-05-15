<?php

namespace App\Enum;

enum Status: string {
    case await = 'En Attante';
    case assigned = 'Attribué';
    case inProgress = 'En cours';
    case do = 'fait';
}