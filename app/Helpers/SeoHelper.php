<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class SeoHelper
{
    /**
     * Get SEO data for a specific page
     *
     * @param string $page
     * @param array $overrides
     * @return array
     */
    public static function getPageSeo(string $page = 'home', array $overrides = []): array
    {
        $defaults = Config::get('seo.defaults', []);
        $pageConfig = Config::get("seo.pages.{$page}", []);
        
        $seo = array_merge($defaults, $pageConfig, $overrides);
        
        // Ensure canonical URL is set
        if (!isset($seo['canonical']) || empty($seo['canonical'])) {
            $seo['canonical'] = URL::current();
        }
        
        // Add title suffix if not already present
        if (isset($seo['title']) && !str_contains($seo['title'], $defaults['title_suffix'])) {
            $seo['title'] .= $defaults['title_suffix'];
        }
        
        return $seo;
    }

    /**
     * Generate organization structured data
     *
     * @return array
     */
    public static function getOrganizationSchema(): array
    {
        $org = Config::get('seo.organization', []);
        
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => $org['name'],
            'legalName' => $org['legal_name'],
            'description' => $org['description'],
            'url' => $org['url'],
            'logo' => asset($org['logo']),
            'foundingDate' => $org['founding_date'],
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => $org['address']['country'],
                'addressRegion' => $org['address']['region'],
                'addressLocality' => $org['address']['locality'],
                'postalCode' => $org['address']['postal_code'],
                'streetAddress' => $org['address']['street_address']
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => $org['contact']['telephone'],
                'email' => $org['contact']['email'],
                'contactType' => $org['contact']['contact_type'],
                'availableLanguage' => $org['contact']['languages']
            ],
            'sameAs' => array_values($org['social_media']),
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Technology Solutions',
                'itemListElement' => array_map(function ($service) {
                    return [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => $service['name'],
                            'description' => $service['description'],
                            'category' => $service['category']
                        ]
                    ];
                }, $org['services'])
            ]
        ];
    }

    /**
     * Generate webpage structured data
     *
     * @param string $name
     * @param string $description
     * @param array $breadcrumbs
     * @return array
     */
    public static function getWebPageSchema(string $name, string $description, array $breadcrumbs = []): array
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => $name,
            'description' => $description,
            'url' => URL::current(),
            'mainEntity' => self::getOrganizationSchema()
        ];

        if (!empty($breadcrumbs)) {
            $schema['breadcrumb'] = [
                '@type' => 'BreadcrumbList',
                'itemListElement' => array_map(function ($crumb, $index) {
                    return [
                        '@type' => 'ListItem',
                        'position' => $index + 1,
                        'name' => $crumb['name'],
                        'item' => $crumb['url']
                    ];
                }, $breadcrumbs, array_keys($breadcrumbs))
            ];
        }

        return $schema;
    }

    /**
     * Generate service structured data
     *
     * @param string $serviceName
     * @param string $description
     * @param array $features
     * @param array $pricing
     * @return array
     */
    public static function getServiceSchema(string $serviceName, string $description, array $features = [], array $pricing = []): array
    {
        $org = Config::get('seo.organization', []);
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Service',
            'name' => $serviceName,
            'description' => $description,
            'provider' => [
                '@type' => 'Organization',
                'name' => $org['name'],
                'url' => $org['url']
            ],
            'areaServed' => [
                '@type' => 'Place',
                'name' => 'Africa'
            ],
            'serviceType' => 'Technology Services'
        ];

        if (!empty($features)) {
            $schema['hasOfferCatalog'] = [
                '@type' => 'OfferCatalog',
                'name' => $serviceName . ' Features',
                'itemListElement' => array_map(function ($feature) {
                    return [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => $feature['name'],
                            'description' => $feature['description'] ?? ''
                        ]
                    ];
                }, $features)
            ];
        }

        if (!empty($pricing)) {
            $schema['offers'] = array_map(function ($plan) {
                return [
                    '@type' => 'Offer',
                    'name' => $plan['name'],
                    'description' => $plan['description'] ?? '',
                    'price' => $plan['price'],
                    'priceCurrency' => $plan['currency'] ?? 'USD',
                    'priceValidUntil' => date('Y-12-31'),
                    'availability' => 'https://schema.org/InStock'
                ];
            }, $pricing);
        }

        return $schema;
    }

    /**
     * Generate local business structured data
     *
     * @return array
     */
    public static function getLocalBusinessSchema(): array
    {
        $org = Config::get('seo.organization', []);
        $local = Config::get('seo.local_seo', []);
        
        return [
            '@context' => 'https://schema.org',
            '@type' => $local['business_type'],
            'name' => $org['name'],
            'description' => $org['description'],
            'url' => $org['url'],
            'logo' => asset($org['logo']),
            'image' => asset('/images/business-photo.jpg'),
            'telephone' => $org['contact']['telephone'],
            'email' => $org['contact']['email'],
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => $org['address']['country'],
                'addressRegion' => $org['address']['region'],
                'addressLocality' => $org['address']['locality'],
                'postalCode' => $org['address']['postal_code'],
                'streetAddress' => $org['address']['street_address']
            ],
            'priceRange' => $local['price_range'],
            'currenciesAccepted' => implode(', ', $local['currencies_accepted']),
            'paymentAccepted' => implode(', ', $local['payment_accepted']),
            'openingHours' => array_map(function ($day, $hours) {
                return ucfirst($day) . ' ' . $hours;
            }, array_keys($local['opening_hours']), $local['opening_hours']),
            'sameAs' => array_values($org['social_media'])
        ];
    }

    /**
     * Generate FAQ structured data
     *
     * @param array $faqs
     * @return array
     */
    public static function getFaqSchema(array $faqs): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array_map(function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq['question'],
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq['answer']
                    ]
                ];
            }, $faqs)
        ];
    }

    /**
     * Generate article structured data
     *
     * @param string $title
     * @param string $description
     * @param string $content
     * @param string $author
     * @param string $publishDate
     * @param string $image
     * @return array
     */
    public static function getArticleSchema(string $title, string $description, string $content, string $author, string $publishDate, string $image = null): array
    {
        $org = Config::get('seo.organization', []);
        
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $title,
            'description' => $description,
            'articleBody' => $content,
            'author' => [
                '@type' => 'Person',
                'name' => $author
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => $org['name'],
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset($org['logo'])
                ]
            ],
            'datePublished' => $publishDate,
            'dateModified' => $publishDate,
            'url' => URL::current()
        ];

        if ($image) {
            $schema['image'] = [
                '@type' => 'ImageObject',
                'url' => asset($image),
                'width' => 1200,
                'height' => 630
            ];
        }

        return $schema;
    }

    /**
     * Get meta tags as HTML string
     *
     * @param array $seo
     * @return string
     */
    public static function getMetaTags(array $seo): string
    {
        $tags = [];
        
        // Basic meta tags
        if (isset($seo['description'])) {
            $tags[] = '<meta name="description" content="' . htmlspecialchars($seo['description']) . '">';
        }
        
        if (isset($seo['keywords'])) {
            $tags[] = '<meta name="keywords" content="' . htmlspecialchars($seo['keywords']) . '">';
        }
        
        if (isset($seo['author'])) {
            $tags[] = '<meta name="author" content="' . htmlspecialchars($seo['author']) . '">';
        }
        
        if (isset($seo['robots'])) {
            $tags[] = '<meta name="robots" content="' . htmlspecialchars($seo['robots']) . '">';
        }
        
        if (isset($seo['canonical'])) {
            $tags[] = '<link rel="canonical" href="' . htmlspecialchars($seo['canonical']) . '">';
        }
        
        // Open Graph tags
        if (isset($seo['og_type'])) {
            $tags[] = '<meta property="og:type" content="' . htmlspecialchars($seo['og_type']) . '">';
        }
        
        if (isset($seo['og_title'])) {
            $tags[] = '<meta property="og:title" content="' . htmlspecialchars($seo['og_title']) . '">';
        }
        
        if (isset($seo['og_description'])) {
            $tags[] = '<meta property="og:description" content="' . htmlspecialchars($seo['og_description']) . '">';
        }
        
        if (isset($seo['og_image'])) {
            $tags[] = '<meta property="og:image" content="' . asset($seo['og_image']) . '">';
        }
        
        $tags[] = '<meta property="og:url" content="' . URL::current() . '">';
        
        // Twitter Card tags
        if (isset($seo['twitter_card'])) {
            $tags[] = '<meta name="twitter:card" content="' . htmlspecialchars($seo['twitter_card']) . '">';
        }
        
        if (isset($seo['twitter_title'])) {
            $tags[] = '<meta name="twitter:title" content="' . htmlspecialchars($seo['twitter_title']) . '">';
        }
        
        if (isset($seo['twitter_description'])) {
            $tags[] = '<meta name="twitter:description" content="' . htmlspecialchars($seo['twitter_description']) . '">';
        }
        
        if (isset($seo['twitter_image'])) {
            $tags[] = '<meta name="twitter:image" content="' . asset($seo['twitter_image']) . '">';
        }
        
        if (isset($seo['twitter_site'])) {
            $tags[] = '<meta name="twitter:site" content="' . htmlspecialchars($seo['twitter_site']) . '">';
        }
        
        return implode("\n    ", $tags);
    }
}
