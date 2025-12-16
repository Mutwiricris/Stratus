<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        $portfolios = [
            // Safari360 - Tourism & Safari Booking Platform
            [
                'title' => 'Safari360',
                'slug' => 'safari360',
                'tagline' => 'Africa\'s Premier Safari Booking & Wildlife Experience Platform',
                'description' => 'Safari360 is a revolutionary digital platform transforming how travelers discover, book, and experience authentic African safaris. Built with cutting-edge technology and deep understanding of the tourism industry, Safari360 connects adventure seekers with verified safari operators, lodges, and wildlife experiences across East Africa. The platform offers real-time availability, instant bookings, secure payments, and immersive 360° virtual tours of destinations, creating an end-to-end safari planning experience that\'s seamless, transparent, and unforgettable.',
                'challenge' => 'The African safari industry faced significant digital transformation challenges: fragmented booking systems, lack of real-time availability, price transparency issues, limited payment options for international travelers, difficulty showcasing remote locations, and trust concerns when booking high-value safari packages online. Tour operators struggled with manual booking processes, while travelers found it difficult to compare options and make informed decisions.',
                'solution' => 'We developed Safari360 as a comprehensive marketplace that digitizes the entire safari booking ecosystem. The platform features intelligent search with filters for budget, duration, wildlife interests, and accommodation preferences. Real-time inventory management ensures accurate availability across hundreds of safari operators. Integrated payment gateway supports M-Pesa, cards, and international transfers with multi-currency support. Virtual 360° tours with interactive hotspots let travelers explore camps and reserves before booking. Smart itinerary builder helps create custom multi-day safari packages. The mobile-first Progressive Web App works offline in remote areas, while the vendor dashboard streamlines operations for safari operators.',
                'features' => [
                    [
                        'icon' => '🎯',
                        'title' => 'Intelligent Safari Discovery',
                        'description' => 'AI-powered recommendation engine that suggests personalized safari experiences based on preferences, budget, season, and wildlife migration patterns. Smart filters for Big Five sightings, photography safaris, family-friendly trips, and luxury vs. budget options.'
                    ],
                    [
                        'icon' => '📅',
                        'title' => 'Real-Time Booking Engine',
                        'description' => 'Live availability calendar synced across all tour operators, instant confirmation system, automated booking workflows, dynamic pricing based on demand and seasonality, and group booking management with special rates.'
                    ],
                    [
                        'icon' => '🌍',
                        'title' => '360° Virtual Tours',
                        'description' => 'Immersive 360-degree panoramic views of safari lodges, camps, and national parks. Interactive hotspots with wildlife information, accommodation details, and guided narratives from expert safari guides. VR headset compatible for ultimate immersion.'
                    ],
                    [
                        'icon' => '💳',
                        'title' => 'Flexible Payment System',
                        'description' => 'Multi-currency support (USD, EUR, GBP, KES), M-Pesa integration for local payments, international card processing with Stripe, installment payment plans for expensive packages, secure escrow system protecting both travelers and operators, and instant refund processing.'
                    ],
                    [
                        'icon' => '📱',
                        'title' => 'Mobile Safari Companion',
                        'description' => 'Progressive Web App that works offline in remote areas, digital itinerary with GPS navigation, wildlife identification using AR camera, real-time game drive tracking, emergency SOS with location sharing, and photo gallery with automatic geo-tagging and wildlife recognition.'
                    ],
                    [
                        'icon' => '⭐',
                        'title' => 'Trust & Safety System',
                        'description' => 'Verified operator badges with background checks, authentic traveler reviews with photo verification, quality assurance inspections, insurance coverage options, 24/7 emergency support hotline, and booking protection guarantee.'
                    ],
                    [
                        'icon' => '📊',
                        'title' => 'Operator Dashboard',
                        'description' => 'Centralized booking management, real-time inventory control, automated invoicing and receipts, customer communication tools, performance analytics with revenue insights, seasonal trend forecasting, and marketing campaign tools.'
                    ],
                    [
                        'icon' => '🎁',
                        'title' => 'Loyalty & Rewards Program',
                        'description' => 'Safari miles earned on every booking, tier-based benefits (Explorer, Adventurer, Pioneer), exclusive early access to new destinations, birthday safari discounts, referral bonuses, and partnership rewards with airlines and hotels.'
                    ],
                ],
                'technologies' => [
                    'Laravel 11' => 'Backend framework with advanced queuing and caching',
                    'Vue.js 3' => 'Reactive frontend with Composition API',
                    'Inertia.js' => 'Modern monolith architecture',
                    'Tailwind CSS' => 'Utility-first responsive design',
                    'Three.js' => '360° panoramic viewer rendering',
                    'Livewire' => 'Real-time booking updates',
                    'Stripe API' => 'International payment processing',
                    'M-Pesa API' => 'Mobile money integration',
                    'Google Maps API' => 'Location services and route planning',
                    'AWS S3' => 'Media storage for photos and 360° content',
                    'Redis' => 'Caching and session management',
                    'PostgreSQL' => 'Relational database with PostGIS',
                    'Algolia' => 'Lightning-fast search',
                    'Pusher' => 'Real-time notifications',
                    'Cloudflare CDN' => 'Global content delivery',
                ],
                'metrics' => [
                    'total_bookings' => '25,000+',
                    'operators_onboarded' => '350+',
                    'average_booking_value' => '$2,850',
                    'countries_covered' => '8',
                    'customer_satisfaction' => '4.8/5.0',
                    'booking_conversion' => '12.3%',
                    'mobile_traffic' => '68%',
                ],
                'category' => 'web',
                'industry' => 'Tourism & Hospitality',
                'completed_at' => '2024-08-15',
                'url' => 'https://safari360.africa',
                'featured_image' => '/images/portfolio/safari360-hero.jpg',
                'is_featured' => true,
                'is_published' => true,
                'order' => 1,
                'testimonial' => [
                    'name' => 'David Kimani',
                    'role' => 'CEO, Maasai Adventures',
                    'photo' => '/images/testimonials/david-kimani.jpg',
                    'quote' => 'Safari360 transformed our business completely. We went from 5-10 manual bookings per month to over 150 automated bookings. The platform handles everything - inventory, payments, customer communication. Our revenue increased 600% in the first year.',
                ],
            ],

            // EventsPro - Event Management Platform
            [
                'title' => 'EventsPro',
                'slug' => 'eventspro',
                'tagline' => 'End-to-End Event Management & Ticketing Platform for Africa',
                'description' => 'EventsPro is Africa\'s most comprehensive event management platform, empowering organizers to create, promote, and manage events of any scale - from intimate workshops to massive music festivals. The platform combines powerful ticketing technology with marketing automation, attendee engagement tools, and real-time analytics. EventsPro handles everything from early-bird ticket sales and group registrations to check-in management and post-event surveys, making event organization effortless and professional.',
                'challenge' => 'Event organizers across Africa struggled with fragmented tools requiring multiple subscriptions for ticketing, marketing, and attendee management. Payment collection was complicated with limited mobile money support. Fake tickets and fraud were rampant. Real-time attendee data was unavailable. Manual check-ins caused long queues. Small organizers couldn\'t afford expensive enterprise solutions, while large events needed advanced features for complex requirements.',
                'solution' => 'EventsPro provides an all-in-one platform with tiered pricing for events of all sizes. Our smart ticketing engine supports early-bird pricing, group discounts, promo codes, and VIP tiers. QR code tickets with blockchain verification eliminate fraud. Mobile-first check-in app with facial recognition speeds up entry. Built-in email and SMS marketing campaigns with AI-powered audience segmentation. Real-time dashboard shows ticket sales, revenue, and attendee demographics. Integration with M-Pesa, card payments, and bank transfers ensures smooth transactions. White-label options let large organizers maintain their brand identity.',
                'features' => [
                    [
                        'icon' => '🎫',
                        'title' => 'Advanced Ticketing Engine',
                        'description' => 'Multiple ticket tiers with custom pricing, early-bird and flash sale scheduling, limited-time offers with countdown timers, group booking discounts, promo code system with usage limits, reserved seating with interactive venue maps, waitlist management with automatic notifications, ticket transfers and resale marketplace, digital ticket wallet app, and ticket insurance options.'
                    ],
                    [
                        'icon' => '🔐',
                        'title' => 'Fraud Prevention & Security',
                        'description' => 'Blockchain-verified QR tickets that cannot be duplicated, dynamic QR codes that refresh every 30 seconds, facial recognition check-in preventing ticket sharing, device fingerprinting for suspicious purchase detection, AI fraud detection analyzing buying patterns, and PCI-DSS compliant payment processing.'
                    ],
                    [
                        'icon' => '📱',
                        'title' => 'Lightning-Fast Check-In',
                        'description' => 'Mobile check-in app working offline, simultaneous multi-device scanning, facial recognition matching ticket to attendee photo, NFC wristband integration for cashless payments and re-entry, real-time capacity monitoring, VIP fast-track lanes, and automated waitlist processing at the gate.'
                    ],
                    [
                        'icon' => '📧',
                        'title' => 'Marketing Automation Suite',
                        'description' => 'AI-powered email campaigns with A/B testing, SMS blast for last-minute promotions, social media integration posting to Facebook and Instagram Events, influencer partnership management, affiliate marketing program with tracking links, referral rewards system, automated reminder sequences, and abandoned cart recovery emails.'
                    ],
                    [
                        'icon' => '📊',
                        'title' => 'Real-Time Analytics Dashboard',
                        'description' => 'Live ticket sales tracking with revenue projections, attendee demographics and geographic heatmaps, traffic source attribution, conversion funnel analysis, sell-through rate predictions using ML, competitor benchmarking, ROI calculator for marketing spend, and exportable reports in PDF and Excel.'
                    ],
                    [
                        'icon' => '💬',
                        'title' => 'Attendee Engagement Tools',
                        'description' => 'In-app event schedule with personalized agenda builder, live polling and Q&A during sessions, networking matchmaking based on interests, gamification with points and leaderboards, photo sharing with event hashtag wall, push notifications for session reminders, and post-event feedback surveys with NPS scoring.'
                    ],
                    [
                        'icon' => '🎨',
                        'title' => 'White-Label Customization',
                        'description' => 'Fully branded event pages with custom domain, theme customization matching brand colors and fonts, custom email templates, branded mobile app for large events, API access for deep integrations, embeddable widgets for WordPress/Wix sites, and custom check-in screen branding.'
                    ],
                    [
                        'icon' => '🌍',
                        'title' => 'Multi-Event Management',
                        'description' => 'Manage unlimited events from one account, event series and recurring events automation, festival passes with multi-day access, centralized attendee database for CRM, cross-event analytics, team collaboration with role-based permissions, and event templates for quick setup.'
                    ],
                ],
                'technologies' => [
                    'Laravel 11' => 'Robust backend with job queues',
                    'Livewire 3' => 'Real-time dashboard updates',
                    'Alpine.js' => 'Interactive UI components',
                    'Filament' => 'Admin panel for organizers',
                    'Tailwind CSS' => 'Modern, responsive design',
                    'QR Code Generator' => 'Secure ticket generation',
                    'Blockchain (Stellar)' => 'Ticket verification ledger',
                    'M-Pesa STK Push' => 'Mobile money payments',
                    'Stripe Connect' => 'Multi-party payouts',
                    'SendGrid' => 'Transactional emails',
                    'Africa\'s Talking SMS' => 'Bulk SMS campaigns',
                    'Redis Queue' => 'Background job processing',
                    'MySQL' => 'Primary database',
                    'AWS Lambda' => 'Serverless ticket generation',
                    'Face Recognition API' => 'Biometric check-in',
                ],
                'metrics' => [
                    'events_hosted' => '15,000+',
                    'tickets_sold' => '2.5M+',
                    'gross_ticket_value' => '$12M+',
                    'active_organizers' => '4,200+',
                    'average_check_in_time' => '3.2 seconds',
                    'fraud_prevention_rate' => '99.8%',
                    'platform_uptime' => '99.97%',
                ],
                'category' => 'web',
                'industry' => 'Events & Entertainment',
                'completed_at' => '2024-11-20',
                'url' => 'https://eventspro.africa',
                'featured_image' => '/images/portfolio/eventspro-hero.jpg',
                'is_featured' => true,
                'is_published' => true,
                'order' => 2,
                'testimonial' => [
                    'name' => 'Amina Hassan',
                    'role' => 'Event Director, Nairobi Music Festival',
                    'photo' => '/images/testimonials/amina-hassan.jpg',
                    'quote' => 'We sold 50,000 tickets in 3 days for our music festival using EventsPro. The check-in was incredibly smooth - no queues, no fake tickets, no drama. The real-time analytics helped us make decisions on the fly. This platform is world-class.',
                ],
            ],

            // PesaPay - Mobile Money & Digital Wallet
            [
                'title' => 'PesaPay',
                'slug' => 'pesapay',
                'tagline' => 'Next-Generation Super App for Payments, Savings & Financial Services',
                'description' => 'PesaPay is a revolutionary fintech super app bringing comprehensive financial services to the African market. More than just a digital wallet, PesaPay combines instant peer-to-peer transfers, bill payments, merchant transactions, savings accounts, micro-loans, investment opportunities, and insurance products into one beautifully designed mobile experience. Built on secure, scalable infrastructure with bank-grade encryption, PesaPay makes financial services accessible to everyone - from urban professionals to rural communities - empowering financial inclusion across the continent.',
                'challenge' => 'Millions of Africans remained underbanked or completely excluded from formal financial services. Traditional banking required documentation many didn\'t have, branches were far from rural areas, and services were expensive. Existing mobile money platforms were limited to basic transfers and bill payments. People needed access to savings, credit, investments, and insurance but had no easy way to access these services. Financial literacy was low, and trust in digital financial platforms was a barrier.',
                'solution' => 'PesaPay democratizes financial services through mobile technology. Open an account in 60 seconds with just a phone number - no paperwork, no branch visit. Send money instantly to any phone number across 20+ African countries. Pay bills with one tap using saved billers. Earn 8% annual interest in automated savings pockets. Get instant micro-loans up to $500 based on AI credit scoring. Invest in fractional stocks, bonds, and mutual funds starting from $1. Buy insurance (health, device, micro-business) with daily or monthly premiums. Financial education modules with gamified learning. Everything secured with biometric authentication, end-to-end encryption, and real-time fraud monitoring.',
                'features' => [
                    [
                        'icon' => '⚡',
                        'title' => 'Instant Money Transfers',
                        'description' => 'Send money to any mobile number in seconds, cross-border transfers to 20+ African countries with transparent FX rates, scheduled transfers for regular payments, bulk transfer for business payrolls, transfer to bank accounts, cash pickup at 50,000+ agent locations, and split bills with friends using group payment requests.'
                    ],
                    [
                        'icon' => '💰',
                        'title' => 'Smart Savings Accounts',
                        'description' => 'High-yield savings accounts earning 8% annual interest, automatic savings rules (save when you spend, round-up spare change, percentage of income), goal-based savings pots (vacation, emergency fund, school fees) with visual progress tracking, locked savings with higher interest rates, challenge savings with community support, and FDIC-equivalent deposit insurance up to $10,000.'
                    ],
                    [
                        'icon' => '🏦',
                        'title' => 'AI-Powered Micro-Loans',
                        'description' => 'Instant loans from $10 to $500 approved in 30 seconds, ML credit scoring using transaction history and mobile data, flexible repayment periods (1 week to 6 months), automatic loan offers based on creditworthiness, credit score building with on-time payments, business loans with equipment financing, and refinancing options for existing loans.'
                    ],
                    [
                        'icon' => '📈',
                        'title' => 'Investment Marketplace',
                        'description' => 'Fractional investing in stocks starting from $1, curated mutual funds and ETFs, government bonds with guaranteed returns, real estate crowdfunding opportunities, cryptocurrency trading (Bitcoin, Ethereum), automated investment portfolios based on risk profile, educational content explaining each investment type, and dividend reinvestment.'
                    ],
                    [
                        'icon' => '🛡️',
                        'title' => 'Micro-Insurance Products',
                        'description' => 'Health insurance with daily premiums as low as $0.50, device insurance protecting phones and laptops, life insurance with beneficiary management, crop insurance for farmers with satellite weather triggers, micro-business insurance, instant claims processing with mobile money payouts, and family coverage with dependent management.'
                    ],
                    [
                        'icon' => '💳',
                        'title' => 'Digital Debit Card',
                        'description' => 'Virtual Visa/Mastercard for online shopping globally, physical contactless card delivery, instant freeze/unfreeze from app, spending limits and category blocks, cashback rewards on purchases, free ATM withdrawals at partner networks, Apple Pay and Google Pay integration, and transaction categorization for budgeting.'
                    ],
                    [
                        'icon' => '🏪',
                        'title' => 'Merchant Solutions',
                        'description' => 'QR code payments with instant settlement, payment links for social media selling, invoice generation and tracking, subscription billing for recurring revenue, integration with POS systems, multi-currency support, settlement to bank or PesaPay wallet, detailed sales analytics, and loyalty program management.'
                    ],
                    [
                        'icon' => '🎓',
                        'title' => 'Financial Education Hub',
                        'description' => 'Interactive courses on budgeting, saving, investing, gamified quizzes with cash rewards, personalized spending insights and recommendations, AI financial advisor chatbot, calculators for loans, savings goals, and investments, weekly money tips newsletter, and community forum for peer learning.'
                    ],
                    [
                        'icon' => '🔒',
                        'title' => 'Bank-Grade Security',
                        'description' => 'Biometric login (fingerprint, face ID), end-to-end encryption on all transactions, two-factor authentication, transaction limits and velocity checks, real-time fraud detection AI, device binding and trusted device lists, remote account freeze, and 24/7 customer support with fraud recovery guarantee.'
                    ],
                ],
                'technologies' => [
                    'Flutter' => 'Cross-platform mobile app',
                    'Laravel 11' => 'API backend and admin',
                    'Node.js' => 'Real-time transaction processing',
                    'GraphQL' => 'Efficient data queries',
                    'PostgreSQL' => 'Financial data storage',
                    'MongoDB' => 'Transaction logs and analytics',
                    'Redis' => 'Caching and real-time features',
                    'Kafka' => 'Event streaming for transactions',
                    'AWS' => 'Cloud infrastructure',
                    'Microservices' => 'Scalable service architecture',
                    'Blockchain (Hyperledger)' => 'Audit trail and transparency',
                    'TensorFlow' => 'AI credit scoring and fraud detection',
                    'Plaid API' => 'Bank account linking',
                    'Visa/Mastercard APIs' => 'Card issuing',
                    'SMS Gateway' => 'Transaction notifications',
                ],
                'metrics' => [
                    'registered_users' => '1.2M+',
                    'monthly_transactions' => '8.5M+',
                    'transaction_volume' => '$150M+/month',
                    'average_savings_balance' => '$87',
                    'loan_approval_rate' => '68%',
                    'default_rate' => '2.1%',
                    'merchant_partners' => '12,000+',
                    'app_rating' => '4.7/5.0',
                ],
                'category' => 'mobile',
                'industry' => 'Fintech',
                'completed_at' => '2024-10-10',
                'app_store_url' => 'https://apps.apple.com/app/pesapay',
                'play_store_url' => 'https://play.google.com/store/apps/details?id=com.pesapay',
                'featured_image' => '/images/portfolio/pesapay-hero.jpg',
                'is_featured' => true,
                'is_published' => true,
                'order' => 3,
                'testimonial' => [
                    'name' => 'Joseph Omondi',
                    'role' => 'Small Business Owner, Nairobi',
                    'photo' => '/images/testimonials/joseph-omondi.jpg',
                    'quote' => 'PesaPay changed my life. I got my first loan of $100 to buy stock for my shop. I paid it back and my limit increased to $500. Now I also save automatically - I have $300 saved! The app taught me about money management. I recommend everyone to use it.',
                ],
            ],

            // Shop Africa - E-Commerce Marketplace
            [
                'title' => 'Shop Africa',
                'slug' => 'shop-africa',
                'tagline' => 'Africa\'s Trusted Multi-Vendor Marketplace Connecting Buyers & Sellers',
                'description' => 'Shop Africa is the continent\'s fastest-growing e-commerce marketplace, connecting millions of buyers with thousands of trusted sellers across categories from electronics to fashion, groceries to furniture. Built specifically for the African market, Shop Africa solves logistics challenges with strategic fulfillment centers, supports mobile money payments, offers buy-now-pay-later options, and provides seller tools to help small businesses compete with large retailers. With AI-powered personalization, social commerce integration, and a commitment to authentic African products, Shop Africa is democratizing online shopping across the continent.',
                'challenge' => 'E-commerce in Africa faced massive hurdles: inadequate addressing systems making deliveries difficult, high return-to-sender rates due to failed deliveries, payment fraud deterring both buyers and sellers, expensive logistics increasing product costs, fake products eroding consumer trust, limited internet access in rural areas, and sellers lacking technical skills to build online stores. Existing platforms were foreign-owned and didn\'t understand local market dynamics.',
                'solution' => 'Shop Africa built Africa-first solutions: GPS-based delivery with what3words integration for accurate addressing, cash on delivery reducing payment friction, escrow system protecting buyers until delivery confirmation, strategic warehouse network reducing shipping costs and times, seller verification with business license validation, offline ordering via USSD for feature phone users, mobile-first PWA working on 2G networks, seller university with video tutorials in local languages, AI chatbot for customer service in multiple languages, and social commerce tools for WhatsApp and Instagram selling.',
                'features' => [
                    [
                        'icon' => '🛒',
                        'title' => 'Intelligent Product Discovery',
                        'description' => 'AI-powered personalized homepage based on browsing and purchase history, visual search to find products from photos, voice search in local languages, trending products in your city, price drop alerts on saved items, comprehensive filters (price, brand, rating, location, free shipping), and recently viewed items synced across devices.'
                    ],
                    [
                        'icon' => '📦',
                        'title' => 'Smart Logistics Network',
                        'description' => '50+ fulfillment centers across Africa reducing delivery times to 1-2 days in major cities, GPS tracking with real-time delivery updates via SMS, what3words integration for accurate addressing in unmapped areas, flexible delivery options (home, pickup point, locker), same-day delivery in select cities, scheduled delivery time slots, and easy returns with free pickup.'
                    ],
                    [
                        'icon' => '💳',
                        'title' => 'Flexible Payment Options',
                        'description' => 'M-Pesa, Airtel Money, and all major mobile wallets, bank cards with 3D Secure, bank transfer with instant account verification, cash on delivery, buy-now-pay-later with 0% interest for 3 months, installment payments for expensive items, wallet with cashback and loyalty points, and group buying for wholesale discounts.'
                    ],
                    [
                        'icon' => '✅',
                        'title' => 'Trust & Safety System',
                        'description' => 'Seller verification with business registration checks, authenticity guarantee program for branded products, buyer protection with money-back guarantee, verified reviews with photo/video proof, fraud detection AI flagging suspicious listings, dispute resolution center with mediation, and buyer/seller rating system preventing bad actors.'
                    ],
                    [
                        'icon' => '🏪',
                        'title' => 'Seller Central Dashboard',
                        'description' => 'Easy product listing with bulk upload via CSV, inventory management with low-stock alerts, order fulfillment workflow with shipping label generation, analytics dashboard showing sales trends and customer demographics, promotional tools (flash sales, coupons, sponsored products), chat integration for customer inquiries, and automated payout scheduling.'
                    ],
                    [
                        'icon' => '🎯',
                        'title' => 'Social Commerce Integration',
                        'description' => 'WhatsApp catalog integration for direct selling, Instagram shoppable posts, influencer partnership program with affiliate tracking, live shopping events with video streaming, user-generated content showcasing real customer photos, social proof with friend activity ("Your friend bought this"), and shareable wish lists for group gifting.'
                    ],
                    [
                        'icon' => '📱',
                        'title' => 'Omnichannel Shopping',
                        'description' => 'Progressive Web App working offline with saved carts, native Android and iOS apps, USSD code for feature phones (*123# for orders), SMS shopping with product codes from TV/print ads, WhatsApp bot for order tracking, kiosk ordering at partner retail stores, and voice ordering via phone call center.'
                    ],
                    [
                        'icon' => '🎁',
                        'title' => 'Loyalty & Rewards Program',
                        'description' => 'Shop Points on every purchase (1 point = $0.01), tier benefits (Bronze, Silver, Gold, Platinum) with free shipping and birthday discounts, flash deals exclusive to members, early access to sales, referral bonuses ($5 for you and friend), prize draws and sweepstakes, and cashback on select categories.'
                    ],
                    [
                        'icon' => '🌍',
                        'title' => 'Made in Africa Marketplace',
                        'description' => 'Dedicated section promoting African-made products, artisan crafts from local communities, support local campaigns highlighting small businesses, transparent supply chain showing product origin, fair trade certified products, carbon-neutral shipping option, and impact metrics (jobs created, communities supported).'
                    ],
                ],
                'technologies' => [
                    'Laravel 11' => 'Monolithic backend with modular architecture',
                    'Vue.js 3' => 'Interactive storefront',
                    'Inertia.js' => 'SPA without API complexity',
                    'Livewire' => 'Admin dashboard and seller portal',
                    'Tailwind CSS' => 'Utility-first design system',
                    'Algolia' => 'Lightning-fast product search',
                    'Elasticsearch' => 'Advanced filtering and analytics',
                    'Redis' => 'Caching and session management',
                    'MySQL' => 'Transactional data',
                    'AWS S3' => 'Product image storage',
                    'CloudFront CDN' => 'Fast image delivery',
                    'Stripe Connect' => 'Marketplace payments',
                    'Africa\'s Talking' => 'SMS notifications',
                    'Google Maps API' => 'Delivery routing optimization',
                    'TensorFlow' => 'Recommendation engine',
                ],
                'metrics' => [
                    'registered_sellers' => '18,000+',
                    'active_buyers' => '850,000+',
                    'products_listed' => '2.5M+',
                    'monthly_orders' => '320,000+',
                    'gmv_monthly' => '$8.5M+',
                    'average_delivery_time' => '2.8 days',
                    'customer_satisfaction' => '4.6/5.0',
                    'repeat_purchase_rate' => '45%',
                ],
                'category' => 'web',
                'industry' => 'E-Commerce & Retail',
                'completed_at' => '2024-09-25',
                'url' => 'https://shopafrica.market',
                'featured_image' => '/images/portfolio/shopafrica-hero.jpg',
                'is_featured' => true,
                'is_published' => true,
                'order' => 4,
                'testimonial' => [
                    'name' => 'Grace Muthoni',
                    'role' => 'Founder, Ankara Fashion Kenya',
                    'photo' => '/images/testimonials/grace-muthoni.jpg',
                    'quote' => 'I started selling my handmade dresses on Shop Africa 6 months ago. I\'ve sold over 500 items and my business has grown 10x. The platform makes it so easy - I just upload photos, and they handle payments and shipping. My customers love the quality and fast delivery.',
                ],
            ],
        ];

        foreach ($portfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
