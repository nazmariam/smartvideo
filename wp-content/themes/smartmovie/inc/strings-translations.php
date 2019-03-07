<?php

add_action( 'admin_init', 'sh_polylang_custom_strings', 10, 2 );

function sh_polylang_custom_strings() {
    if (is_plugin_active('polylang-pro/polylang.php')){
        /**
         * Locations post
         */
        pll_register_string('Locations', 'Locations', 'post types');
        pll_register_string('address', 'Address', 'post types');
        pll_register_string('latitude', 'Latitude', 'post types');
        pll_register_string('longitude', 'Longitude', 'post types');
        pll_register_string('phone number', 'Phone number', 'post types');
        pll_register_string('description to phone', 'Description to phone', 'post types');
        pll_register_string('email', 'Email', 'post types');
        pll_register_string('working range from to', 'Working range from to', 'post types');
        pll_register_string('working days from to', 'Working days from to', 'post types');
        pll_register_string('working hours from to', 'Working hours from to', 'post types');
        pll_register_string('comment', 'Comment', 'post types');
        pll_register_string('GPS coordinates', 'GPS coordinates', 'post types');
        pll_register_string('days of week DD-DD', 'days of week DD-DD', 'post types');
        pll_register_string('hours HH:MM-HH:MM', 'hours HH:MM-HH:MM', 'post types');
        pll_register_string('days of week DD - DD: hours HH:MM - HH:MM', 'days of week DD - DD: hours HH:MM - HH:MM', 'post types');
        pll_register_string('location', 'Location', 'post types');
        pll_register_string('all locations', 'All locations', 'post types');
        pll_register_string('view', 'View', 'post types');
        pll_register_string('add new location', 'Add new location', 'post types');
        pll_register_string('add new', 'Add new', 'post types');
        pll_register_string('edit', 'Edit', 'post types');
        pll_register_string('update', 'Update', 'post types');
        pll_register_string('search', 'Search', 'post types');
        pll_register_string('not found in trash', 'Not found in trash', 'post types');
        pll_register_string('location fields box', 'Location fields box', 'post types');
        pll_register_string('show on the map', 'show on the map', 'post types');

        pll_register_string('Share this page', 'Share this page', 'theme context');
        pll_register_string('Share on Facebook', 'Share on Facebook', 'theme context');
        pll_register_string('Share on LinkedIn', 'Share on LinkedIn', 'theme context');
        pll_register_string('Share on Twitter', 'Share on Twitter', 'theme context');
        pll_register_string('Share on Google+', 'Share on Google+', 'theme context');

        pll_register_string('News and events', 'News and events', 'theme context');
        pll_register_string('More news', 'More news', 'theme context');
        pll_register_string('Load more', 'Load more', 'theme context');
        pll_register_string('No news', 'No news', 'theme context');
        pll_register_string('No posts', 'No posts', 'theme context');

        pll_register_string('Our partners', 'Our partners', 'theme context');

        pll_register_string('Plan visit', 'Plan visit', 'theme context');
        pll_register_string('Show more events', 'Show more events', 'theme context');
        pll_register_string('There are no upcoming events', 'There are no upcoming events', 'theme context');
        pll_register_string('Search events', 'Search events', 'theme context');
        pll_register_string('cancel', 'cancel', 'theme context');
        pll_register_string('results', 'results', 'theme context');
        pll_register_string('This week', 'This week', 'theme context');
        pll_register_string('This month', 'This month', 'theme context');
        pll_register_string('From', 'From', 'theme context');
        pll_register_string('To', 'To', 'theme context');
        pll_register_string('Type of event', 'Type of event', 'theme context');

        pll_register_string('uah', 'uah', 'theme context');
        pll_register_string('Reset filter', 'Reset filter', 'theme context');
        pll_register_string('SH_ADDRESSES', 'SH_ADDRESSES', 'theme context');
        pll_register_string('SH_NEIGHBOUR_ACTIVITIES', 'SH_NEIGHBOUR_ACTIVITIES', 'theme context');
        pll_register_string('SH_BOOK_TOUR', 'SH_BOOK_TOUR', 'theme context');
        pll_register_string('SH_EXCURSIONS', 'SH_EXCURSIONS', 'theme context');
        pll_register_string('SH_MUSEUMS', 'SH_MUSEUMS', 'theme context');
        pll_register_string('SH_RESTAURANTS', 'SH_RESTAURANTS', 'theme context');
        pll_register_string('SH_GALLERIES', 'SH_GALLERIES', 'theme context');
        pll_register_string('SH_VIEW_ON_THE_MAP', 'SH_VIEW_ON_THE_MAP', 'theme context');
        pll_register_string('SH_PARKING_SCHEME', 'SH_PARKING_SCHEME', 'theme context');
        pll_register_string('SH_BOOKLETS_AND_GUIDES', 'SH_BOOKLETS_AND_GUIDES', 'theme context');
        pll_register_string('SH_VIEW', 'SH_VIEW', 'theme context');

        pll_register_string('Price of excursion from', 'Price of excursion from', 'theme context');
        pll_register_string('SH_BUILD_ROUTE', 'SH_BUILD_ROUTE', 'theme context');
        pll_register_string('SH_RECAPTCHA_ROBOTS_CHECKING_FAIL', 'SH_RECAPTCHA_ROBOTS_CHECKING_FAIL', 'theme context');
        pll_register_string('SH_DOWNLOAD_MORE', 'SH_DOWNLOAD_MORE', 'theme context');
        pll_register_string('SH_VIEW_ON_PROZORRO', 'SH_VIEW_ON_PROZORRO', 'theme context');
        pll_register_string('SH_LIST_OF_PROCUREMENTS', 'SH_LIST_OF_PROCUREMENTS', 'theme context');
        pll_register_string('SH_ACTUAL_PROCUREMENTS_PROZORRO', 'SH_ACTUAL_PROCUREMENTS_PROZORRO', 'theme context');

        pll_register_string('SH_EVENT_OVERVIEW', 'SH_EVENT_OVERVIEW', 'theme context');
        pll_register_string('SH_FROM', 'SH_FROM', 'theme context');
        pll_register_string('SH_FREE_ENTRANCE', 'SH_FREE_ENTRANCE', 'theme context');
        pll_register_string('SH_WANNA_GO', 'SH_WANNA_GO', 'theme context');
        pll_register_string('SH_TO_REGISTER', 'SH_TO_REGISTER', 'theme context');
        pll_register_string('SH_ADDRESS', 'SH_ADDRESS', 'theme context');
        pll_register_string('SH_EXHIBITION_OVERVIEW', 'SH_EXHIBITION_OVERVIEW', 'theme context');
        pll_register_string('SH_MASTER_CLASS_OVERVIEW', 'SH_MASTER_CLASS_OVERVIEW', 'theme context');
        pll_register_string('SH_LECTURE_OVERVIEW', 'SH_LECTURE_OVERVIEW', 'theme context');

        pll_register_string('SH_X_JANUARY', 'SH_X_JANUARY', 'theme context');
        pll_register_string('SH_X_FEBRUARY', 'SH_X_FEBRUARY', 'theme context');
        pll_register_string('SH_X_MARCH', 'SH_X_MARCH', 'theme context');
        pll_register_string('SH_X_APRIL', 'SH_X_APRIL', 'theme context');
        pll_register_string('SH_X_MAY', 'SH_X_MAY', 'theme context');
        pll_register_string('SH_X_JUNE', 'SH_X_JUNE', 'theme context');
        pll_register_string('SH_X_JULY', 'SH_X_JULY', 'theme context');
        pll_register_string('SH_X_AUGUST', 'SH_X_AUGUST', 'theme context');
        pll_register_string('SH_X_SEPTEMBER', 'SH_X_SEPTEMBER', 'theme context');
        pll_register_string('SH_X_OCTOBER', 'SH_X_OCTOBER', 'theme context');
        pll_register_string('SH_X_NOVEMBER', 'SH_X_NOVEMBER', 'theme context');
        pll_register_string('SH_X_DECEMBER', 'SH_X_DECEMBER', 'theme context');

        pll_register_string('SH_MONDAY', 'SH_MONDAY', 'theme context');
        pll_register_string('SH_TUESDAY', 'SH_TUESDAY', 'theme context');
        pll_register_string('SH_WEDNESDAY', 'SH_WEDNESDAY', 'theme context');
        pll_register_string('SH_THURSDAY', 'SH_THURSDAY', 'theme context');
        pll_register_string('SH_FRIDAY', 'SH_FRIDAY', 'theme context');
        pll_register_string('SH_SATURDAY', 'SH_SATURDAY', 'theme context');
        pll_register_string('SH_SUNDAY', 'SH_SUNDAY', 'theme context');

        pll_register_string('SH_PROGRAM_OVERVIEW', 'SH_PROGRAM_OVERVIEW', 'theme context');
        pll_register_string('SH_CONFERENCES', 'SH_CONFERENCES', 'theme context');
        pll_register_string('SH_PUBLICATIONS', 'SH_PUBLICATIONS', 'theme context');
        pll_register_string('SH_ORGANIZERS', 'SH_ORGANIZERS', 'theme context');
        pll_register_string('SH_PROVIDING_DATE', 'SH_PROVIDING_DATE', 'theme context');
        pll_register_string('SH_LAST_REQUESTS_DATE', 'SH_LAST_REQUESTS_DATE', 'theme context');

        pll_register_string('Search results', 'Search results', 'theme context');

        pll_register_string('SH_HOURS', 'SH_HOURS', 'theme context');
        pll_register_string('SH_MINUTES', 'SH_MINUTES', 'theme context');
        pll_register_string('SH_MINUTES_FULL', 'SH_MINUTES_FULL', 'theme context');
        pll_register_string('SH_EXCURSION_OVERVIEW', 'SH_EXCURSION_OVERVIEW', 'theme context');

        pll_register_string('post', 'post', 'theme post type');
        pll_register_string('page', 'page', 'theme post type');
        pll_register_string('tribe_events', 'tribe_events', 'theme post type');
        pll_register_string('SH_DURATION', 'SH_DURATION', 'theme context');
        pll_register_string('SH_SOLD_OUT', 'SH_SOLD_OUT', 'theme context');

        pll_register_string('SH_CONTACTS_THANKS', 'Дякуємо! Ваше повідомлення було успішно надіслано.', 'theme context');
        pll_register_string('SH_FORM_EVENTS_THANKS', 'SH_FORM_EVENTS_THANKS', 'theme context');
        pll_register_string('SH_FORM_EXCURSIONS_THANKS', 'SH_FORM_EXCURSIONS_THANKS', 'theme context');

        pll_register_string('Prices', 'Prices', 'theme context');
        pll_register_string('Entrance fee', 'Entrance fee', 'theme context');
        pll_register_string('Other services', 'Other services', 'theme context');
        pll_register_string('Excursions', 'Excursions', 'theme context');
        pll_register_string('Discuss price', 'Discuss price', 'theme context');
        pll_register_string('No prices', 'No prices', 'theme context');
        pll_register_string('Show', 'Show', 'theme context');
        pll_register_string('Cancel', 'Cancel', 'theme context');
        pll_register_string('Apply', 'Apply', 'theme context');
        pll_register_string('No posts', 'No posts', 'theme context');
        pll_register_string('Search count', 'Search count','theme context');

        pll_register_string('UAH', 'UAH', 'theme context');
        pll_register_string('UAH-per-hour', 'UAH-per-hour', 'theme context');
        pll_register_string('Apply filter', 'Apply filter', 'theme context');

        pll_register_string('SH_EVENT_REQUEST_THANKS', 'Дякуємо! Ваше повідомлення було успішно надіслано.', 'theme context');

    }
    return true;
}



