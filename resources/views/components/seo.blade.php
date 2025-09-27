@props(['page' => 'home', 'title' => null, 'description' => null, 'keywords' => null, 'image' => null, 'type' => 'website'])

@php
use App\Helpers\SeoHelper;

$overrides = array_filter([
    'title' => $title,
    'description' => $description,
    'keywords' => $keywords,
    'og_image' => $image,
    'twitter_image' => $image,
    'og_type' => $type,
]);

$seo = SeoHelper::getPageSeo($page, $overrides);
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
{!! json_encode(SeoHelper::getOrganizationSchema(), JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush
