<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default SEO Configuration
    |--------------------------------------------------------------------------
    |
    | These are the default SEO settings that will be used across the site
    | when specific page settings are not provided.
    |
    */

    'defaults' => [
        'title' => 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa',
        'title_suffix' => ' | Ascend Stratus',
        'description' => 'Ascend Stratus is a premier technology holding company providing enterprise software, fintech solutions, mobile app development, and digital transformation services across Africa. Transform your business with our cutting-edge solutions.',
        'keywords' => 'enterprise software, fintech solutions, mobile app development, digital transformation, technology solutions Africa, business automation, custom software development, African technology company',
        'author' => 'Ascend Stratus',
        'robots' => 'index, follow',
        'canonical' => null,
        'og_type' => 'website',
        'og_image' => '/images/og-image.jpg',
        'twitter_card' => 'summary_large_image',
        'twitter_site' => '@ascendstratus',
        'twitter_creator' => '@ascendstratus',
    ],

    /*
    |--------------------------------------------------------------------------
    | Organization Information
    |--------------------------------------------------------------------------
    |
    | Information about the organization for structured data markup
    |
    */

    'organization' => [
        'name' => 'Ascend Stratus',
        'legal_name' => 'Ascend Stratus Holdings Limited',
        'description' => 'Leading technology holding company providing enterprise software, fintech solutions, and digital transformation services across Africa',
        'url' => env('APP_URL', 'https://ascendstratus.com'),
        'logo' => '/images/logo.png',
        'founding_date' => '2020',
        'address' => [
            'country' => 'Kenya',
            'region' => 'Nairobi',
            'locality' => 'Nairobi',
            'postal_code' => '00100',
            'street_address' => 'Westlands Business District'
        ],
        'contact' => [
            'telephone' => '+254-700-000-000',
            'email' => 'info@ascendstratus.com',
            'contact_type' => 'Customer Service',
            'languages' => ['English', 'Swahili']
        ],
        'social_media' => [
            'linkedin' => 'https://linkedin.com/company/ascend-stratus',
            'twitter' => 'https://twitter.com/ascendstratus',
            'facebook' => 'https://facebook.com/ascendstratus'
        ],
        'services' => [
            [
                'name' => 'Enterprise Software Development',
                'description' => 'Custom enterprise software solutions for African businesses',
                'category' => 'Software Development'
            ],
            [
                'name' => 'Fintech Solutions',
                'description' => 'Payment processing, digital banking, and mobile money integration',
                'category' => 'Financial Technology'
            ],
            [
                'name' => 'Mobile App Development',
                'description' => 'Native and cross-platform mobile applications',
                'category' => 'Mobile Development'
            ],
            [
                'name' => 'Custom E-Commerce Solutions',
                'description' => 'Tailored online stores and marketplace platforms',
                'category' => 'E-Commerce Development'
            ]
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Page-Specific SEO Settings
    |--------------------------------------------------------------------------
    |
    | Define SEO settings for specific pages or routes
    |
    */

    'pages' => [
        'home' => [
            'title' => 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa',
            'description' => 'Transform your business with Ascend Stratus - Africa\'s premier technology holding company. We provide enterprise software, fintech solutions, mobile app development, and digital transformation services designed specifically for African markets.',
            'keywords' => 'enterprise software Africa, fintech solutions Kenya, mobile app development Africa, digital transformation, business automation, custom software development, African technology company, payment processing, digital banking, LogiFlow, AgriSmart',
            'og_title' => 'Ascend Stratus - Transform Your Business with Cutting-Edge Technology',
            'og_description' => 'Leading African technology company providing enterprise software, fintech solutions, and mobile applications. Join hundreds of successful businesses that have transformed with our solutions.',
            'twitter_title' => 'Ascend Stratus - Technology Solutions for African Businesses',
            'twitter_description' => 'Enterprise software, fintech solutions & mobile apps designed for Africa. Transform your business today.'
        ],
        'about' => [
            'title' => 'About Ascend Stratus - Multi-Sector Technology Holding Company',
            'description' => 'Learn about Ascend Stratus, a modern multi-sector holding company revolutionizing foundational industries through technology and innovation across Africa.',
            'keywords' => 'about ascend stratus, technology holding company, African innovation, digital transformation company, enterprise solutions provider'
        ],
        'services' => [
            'title' => 'Technology Services - Enterprise Software, Fintech & Mobile Development',
            'description' => 'Comprehensive technology services including enterprise software development, fintech solutions, mobile app development, and custom e-commerce platforms designed for African businesses.',
            'keywords' => 'technology services, enterprise software development, fintech solutions, mobile app development, custom software, African technology services'
        ],
        'contact' => [
            'title' => 'Contact Ascend Stratus - Get Started with Your Digital Transformation',
            'description' => 'Ready to transform your business? Contact Ascend Stratus today to discuss your enterprise software, fintech, or mobile app development needs. Free consultation available.',
            'keywords' => 'contact ascend stratus, technology consultation, enterprise software quote, fintech development, mobile app consultation'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Analytics & Tracking
    |--------------------------------------------------------------------------
    |
    | Configuration for various analytics and tracking services
    |
    */

    'analytics' => [
        'google_analytics_id' => env('GOOGLE_ANALYTICS_ID', 'GA_MEASUREMENT_ID'),
        'google_tag_manager_id' => env('GOOGLE_TAG_MANAGER_ID', null),
        'facebook_pixel_id' => env('FACEBOOK_PIXEL_ID', null),
        'hotjar_id' => env('HOTJAR_ID', null),
    ],

    /*
    |--------------------------------------------------------------------------
    | Performance Settings
    |--------------------------------------------------------------------------
    |
    | Settings related to SEO performance optimization
    |
    */

    'performance' => [
        'lazy_loading' => true,
        'image_optimization' => true,
        'minify_html' => env('APP_ENV') === 'production',
        'cache_duration' => 3600, // 1 hour
    ],

    /*
    |--------------------------------------------------------------------------
    | Local SEO Settings
    |--------------------------------------------------------------------------
    |
    | Settings for local search optimization
    |
    */

    'local_seo' => [
        'business_type' => 'TechnologyCompany',
        'price_range' => '$$$',
        'currencies_accepted' => ['USD', 'KES', 'UGX', 'TZS'],
        'payment_accepted' => ['Cash', 'Credit Card', 'Bank Transfer', 'Mobile Money'],
        'opening_hours' => [
            'monday' => '08:00-18:00',
            'tuesday' => '08:00-18:00',
            'wednesday' => '08:00-18:00',
            'thursday' => '08:00-18:00',
            'friday' => '08:00-18:00',
            'saturday' => '09:00-15:00',
            'sunday' => 'closed'
        ]
    ]
];
