@props(['page' => 'home', 'title' => null, 'description' => null, 'keywords' => null, 'image' => null, 'type' => 'website'])

@php
// Fallback SEO data if SeoHelper is not available
$defaultSeo = [
    'title' => $title ?? 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa',
    'description' => $description ?? 'Ascend Stratus is a premier technology holding company providing enterprise software, fintech solutions, mobile app development, and digital transformation services across Africa.',
    'keywords' => $keywords ?? 'enterprise software, fintech solutions, mobile app development, digital transformation, technology solutions Africa',
    'author' => 'Ascend Stratus',
    'robots' => 'index, follow',
    'canonical' => url()->current(),
    'og_type' => $type,
    'og_title' => $title ?? 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa',
    'og_description' => $description ?? 'Transform your business with cutting-edge enterprise software, fintech solutions, and mobile applications designed specifically for African markets.',
    'og_image' => $image ?? '/images/og-image.jpg',
    'twitter_card' => 'summary_large_image',
    'twitter_title' => $title ?? 'Ascend Stratus - Leading Technology Solutions in Africa',
    'twitter_description' => $description ?? 'Enterprise software, fintech solutions, and mobile app development for African businesses.',
    'twitter_site' => '@ascendstratus',
    'twitter_creator' => '@ascendstratus',
];

try {
    if (class_exists('App\Helpers\SeoHelper')) {
        $overrides = array_filter([
            'title' => $title,
            'description' => $description,
            'keywords' => $keywords,
            'og_image' => $image,
            'twitter_image' => $image,
            'og_type' => $type,
        ]);
        $seo = App\Helpers\SeoHelper::getPageSeo($page, $overrides);
    } else {
        $seo = $defaultSeo;
    }
} catch (Exception $e) {
    $seo = $defaultSeo;
}
@endphp

<!-- SEO Meta Tags -->
<title>{{ $seo['title'] }}</title>
<meta name="description" content="{{ $seo['description'] }}">
@if(isset($seo['keywords']))
<meta name="keywords" content="{{ $seo['keywords'] }}">
@endif
<meta name="author" content="{{ $seo['author'] }}">
<meta name="robots" content="{{ $seo['robots'] }}">
<link rel="canonical" href="{{ $seo['canonical'] }}">

<!-- Open Graph Meta Tags -->
<meta property="og:type" content="{{ $seo['og_type'] }}">
<meta property="og:title" content="{{ $seo['og_title'] ?? $seo['title'] }}">
<meta property="og:description" content="{{ $seo['og_description'] ?? $seo['description'] }}">
<meta property="og:image" content="{{ asset($seo['og_image']) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="Ascend Stratus">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="{{ $seo['twitter_card'] }}">
<meta name="twitter:title" content="{{ $seo['twitter_title'] ?? $seo['title'] }}">
<meta name="twitter:description" content="{{ $seo['twitter_description'] ?? $seo['description'] }}">
<meta name="twitter:image" content="{{ asset($seo['twitter_image'] ?? $seo['og_image']) }}">
<meta name="twitter:site" content="{{ $seo['twitter_site'] }}">
<meta name="twitter:creator" content="{{ $seo['twitter_creator'] }}">

@push('structured-data')
<script type="application/ld+json">
@php
try {
    if (class_exists('App\Helpers\SeoHelper')) {
        echo json_encode(App\Helpers\SeoHelper::getOrganizationSchema(), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    } else {
        // Fallback organization schema
        $orgSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Ascend Stratus',
            'description' => 'Leading technology holding company providing enterprise software, fintech solutions, and digital transformation services across Africa',
            'url' => url('/'),
            'logo' => asset('images/logo.png'),
            'foundingDate' => '2020',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'Kenya',
                'addressRegion' => 'Nairobi'
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+254-700-000-000',
                'contactType' => 'Customer Service',
                'availableLanguage' => ['English', 'Swahili']
            ],
            'sameAs' => [
                'https://linkedin.com/company/ascend-stratus',
                'https://twitter.com/ascendstratus'
            ]
        ];
        echo json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
} catch (Exception $e) {
    // Fallback organization schema
    $orgSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'Organization',
        'name' => 'Ascend Stratus',
        'description' => 'Leading technology holding company providing enterprise software, fintech solutions, and digital transformation services across Africa',
        'url' => url('/'),
        'logo' => asset('images/logo.png')
    ];
    echo json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}
@endphp
</script>
@endpush
