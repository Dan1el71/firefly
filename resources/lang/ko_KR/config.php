<?php

/**
 * config.php
 * Copyright (c) 2019 james@firefly-iii.org
 *
 * This file is part of Firefly III (https://github.com/firefly-iii).
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

return [
    'html_language'            => 'ko',
    'locale'                   => 'ko, Korean, ko_KR.utf8, ko_KR.UTF-8',
    // 'month'                   => '%B %Y',
    'month_js'                 => 'YYYY년 M월',

    // 'month_and_day'           => '%B %e, %Y',
    'month_and_day_moment_js'  => 'YYYY년 M월 D일',
    'month_and_day_fns'        => 'y년 MMMM d일',
    'month_and_day_js'         => 'YYYY년 MM월 DD일',

    // 'month_and_date_day'      => '%A %B %e, %Y',
    'month_and_date_day_js'    => 'YYYY년 M월 D일 ddd',

    // 'month_and_day_no_year'   => '%B %e',
    'month_and_day_no_year_js' => 'M월 D일',

    // 'date_time'               => '%B %e, %Y, @ %T',
    'date_time_js'             => 'YYYY년 M월 D일 HH:mm:ss',
    'date_time_fns'            => 'YYYY년 M월 D일 HH:mm:ss',
    'date_time_fns_short'      => 'yyyy년 M 월 D 일 @ HH:mm',

    // 'specific_day'            => '%e %B %Y',
    'specific_day_js'          => 'YYYY년 MM월 D일',

    // 'week_in_year'            => 'Week %V, %G',
    'week_in_year_js'          => '[Week] W, GGGG',
    'week_in_year_fns'         => "YYYY년 w주",

    // 'year'                    => '%Y',
    'year_js'                  => 'YYYY년',

    // 'half_year'               => '%B %Y',
    'half_year_js'             => '\QQ YYYY',

    'quarter_fns'              => "yyyy년 Q사분기",
    'half_year_fns'            => "yyyy년 H[반기]",
    'dow_1'                    => '월요일',
    'dow_2'                    => '화요일',
    'dow_3'                    => '수요일',
    'dow_4'                    => '목요일',
    'dow_5'                    => '금요일',
    'dow_6'                    => '토요일',
    'dow_7'                    => '일요일',
];
