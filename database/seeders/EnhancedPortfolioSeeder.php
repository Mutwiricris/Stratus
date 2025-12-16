<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;

class EnhancedPortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // First, update existing portfolios with Unsplash images
        Portfolio::where('slug', 'safari360')->update([
            'featured_image' => 'https://images.unsplash.com/photo-1516426122078-c23e76319801?q=80&w=2068',
        ]);

        Portfolio::where('slug', 'eventspro')->update([
            'featured_image' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?q=80&w=2070',
        ]);

        Portfolio::where('slug', 'pesapay')->update([
            'featured_image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=2070',
        ]);

        Portfolio::where('slug', 'shop-africa')->update([
            'featured_image' => 'https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=2089',
        ]);

        // Add new engagement-focused portfolios
        $newPortfolios = [
            // ConnectHub - Social Media Platform
            [
                'title' => 'ConnectHub',
                'slug' => 'connecthub',
                'tagline' => 'Africa\'s Social Media Platform Connecting Communities & Creators',
                'description' => 'ConnectHub is a revolutionary social media platform built specifically for African audiences, combining the best features of global platforms with local context and cultural understanding. The platform enables users to share stories, create communities, livestream events, and monetize their content. With features like local language support, data-efficient video streaming for low-bandwidth areas, and integrated mobile money tipping, ConnectHub empowers African creators to build their brands and connect with audiences authentically.',
                'challenge' => 'Global social media platforms often don\'t cater to African needs: high data costs make video consumption expensive, content moderation doesn\'t understand local languages and context, monetization requires foreign bank accounts or PayPal, and cultural nuances are lost. African creators struggled to build audiences and earn income from their content.',
                'solution' => 'We built ConnectHub with Africa-first features: adaptive video quality that works on 2G networks, AI content moderation trained on African languages and context, integrated M-Pesa tipping and creator funds, community-building tools with tribe/group features, local trending algorithms highlighting regional content, offline content caching, and cultural celebration features like festival countdowns and traditional event sharing.',
                'features' => [
                    [
                        'icon' => '📱',
                        'title' => 'Smart Feed Algorithm',
                        'description' => 'AI-powered feed that learns your interests, prioritizes local content, highlights community posts, shows trending topics in your region, and balances entertainment with educational content. Engagement-optimized to keep users coming back.'
                    ],
                    [
                        'icon' => '🎥',
                        'title' => 'Live Streaming Studio',
                        'description' => 'Professional livestreaming with multi-camera support, screen sharing, guest invitations, live chat with moderation, real-time tipping during streams, stream recording and highlights, scheduled streams with reminders, and analytics dashboard showing viewer engagement and peak times.'
                    ],
                    [
                        'icon' => '👥',
                        'title' => 'Community Tribes',
                        'description' => 'Create or join interest-based communities with dedicated feeds, private group chats, event organization tools, member roles and permissions, tribe merchandise stores, collaborative content creation, achievement badges, and tribe analytics for admins.'
                    ],
                    [
                        'icon' => '💰',
                        'title' => 'Creator Monetization',
                        'description' => 'Multiple revenue streams: fan tipping via M-Pesa, ad revenue sharing, paid subscriptions for exclusive content, virtual gifts during livestreams, brand partnership marketplace, merchandise integration, affiliate marketing tools, and transparent earnings dashboard with instant withdrawals.'
                    ],
                    [
                        'icon' => '🎨',
                        'title' => 'Content Creation Suite',
                        'description' => 'Built-in photo/video editor with filters and effects, story templates with African themes, reel creation tools with trending music, poll and quiz creators, event countdown timers, collaborative posts with friends, scheduled posting, and draft management.'
                    ],
                    [
                        'icon' => '🌍',
                        'title' => 'Hyper-Local Discovery',
                        'description' => 'Find content and people nearby with location-based feed, discover local businesses and services, see events happening in your city, connect with neighbors and community members, local marketplace for buying/selling, and safety features with verified location check-ins.'
                    ],
                    [
                        'icon' => '💬',
                        'title' => 'Smart Messaging',
                        'description' => 'End-to-end encrypted chats, voice and video calls, disappearing messages, group chats with up to 1000 members, channels for broadcasting to unlimited subscribers, bot integration for automated responses, payment requests within chat, and media compression for data savings.'
                    ],
                    [
                        'icon' => '🏆',
                        'title' => 'Gamification & Engagement',
                        'description' => 'Daily login streaks with rewards, achievement badges for milestones, leaderboards for top creators in each category, challenges and contests with prizes, referral program with tier bonuses, level-up system unlocking new features, and seasonal events with exclusive content.'
                    ],
                    [
                        'icon' => '🛡️',
                        'title' => 'Safety & Well-being',
                        'description' => 'AI-powered content moderation in 20+ African languages, reporting and blocking tools, time management features with usage insights, mental health resources and crisis support, parental controls for teen accounts, verified badges for authentic accounts, and community guidelines enforcement.'
                    ],
                ],
                'technologies' => [
                    'React Native' => 'Cross-platform mobile app',
                    'Next.js' => 'Web application frontend',
                    'Node.js' => 'Backend API services',
                    'GraphQL' => 'Efficient data fetching',
                    'PostgreSQL' => 'User data and relationships',
                    'Redis' => 'Real-time features and caching',
                    'WebRTC' => 'Video calls and livestreaming',
                    'TensorFlow' => 'Content recommendation AI',
                    'AWS MediaConvert' => 'Video transcoding',
                    'CloudFront CDN' => 'Content delivery',
                    'ElasticSearch' => 'Content discovery and search',
                    'Socket.io' => 'Real-time messaging',
                    'M-Pesa API' => 'Creator payments',
                    'Firebase' => 'Push notifications',
                    'Docker & Kubernetes' => 'Scalable infrastructure',
                ],
                'metrics' => [
                    'active_users' => '3.5M+',
                    'daily_posts' => '850K+',
                    'livestreams_monthly' => '45K+',
                    'creator_earnings' => '$2.8M/month',
                    'average_session' => '42 minutes',
                    'engagement_rate' => '18.5%',
                    'user_retention_30d' => '68%',
                ],
                'category' => 'mobile',
                'industry' => 'Social Media',
                'completed_at' => '2024-07-15',
                'app_store_url' => 'https://apps.apple.com/app/connecthub',
                'play_store_url' => 'https://play.google.com/store/apps/details?id=com.connecthub',
                'featured_image' => 'https://images.unsplash.com/photo-1611162617474-5b21e879e113?q=80&w=2074',
                'is_featured' => true,
                'is_published' => true,
                'order' => 5,
                'testimonial' => [
                    'name' => 'Wanjiru Kamau',
                    'role' => 'Content Creator & Influencer',
                    'photo' => '/images/testimonials/wanjiru-kamau.jpg',
                    'quote' => 'ConnectHub changed my life! I went from 500 followers to 50K in 6 months. The livestream tipping feature lets me earn $500-1000 per month. The community is so supportive and I love that I can cash out directly to M-Pesa. This is THE platform for African creators.',
                ],
            ],

            // LearnSpace - EdTech Platform
            [
                'title' => 'LearnSpace',
                'slug' => 'learnspace',
                'tagline' => 'Interactive Learning Platform Transforming Education Across Africa',
                'description' => 'LearnSpace is a comprehensive educational technology platform revolutionizing how students learn and teachers instruct across Africa. Combining live virtual classrooms, on-demand video courses, interactive assessments, gamified learning paths, and AI-powered personalization, LearnSpace makes quality education accessible to everyone. The platform works offline, supports local curricula, and provides tools for schools, individual learners, and corporate training programs. With features like peer learning communities, parent progress tracking, and affordable pricing, LearnSpace is democratizing education across the continent.',
                'challenge' => 'Traditional education systems in Africa face numerous challenges: overcrowded classrooms, shortage of qualified teachers, outdated curricula, limited access to learning resources, expensive private tuition, unreliable internet connectivity, and lack of personalized learning. Students in rural areas particularly struggled to access quality education.',
                'solution' => 'LearnSpace provides comprehensive digital learning infrastructure: live classes with real teachers, pre-recorded video lessons for self-paced learning, interactive quizzes with instant feedback, AI tutor for 24/7 homework help, offline content download for areas with poor connectivity, curriculum-aligned content for African education systems, gamification with points and leaderboards, peer study groups, parent dashboard for monitoring progress, and affordable subscription plans with family discounts.',
                'features' => [
                    [
                        'icon' => '🎓',
                        'title' => 'Live Virtual Classrooms',
                        'description' => 'Real-time interactive classes with video and audio, digital whiteboard for teaching, screen sharing for presentations, breakout rooms for group work, hand-raise and Q&A features, recording for later review, attendance tracking, and class capacity of up to 100 students per session.'
                    ],
                    [
                        'icon' => '📚',
                        'title' => 'Comprehensive Course Library',
                        'description' => '10,000+ video lessons covering primary through university level, aligned with local curricula (KCSE, WAEC, etc.), searchable by subject, topic, and difficulty, downloadable for offline viewing, closed captions in multiple languages, expert-created content, regular updates with new material, and exam preparation courses.'
                    ],
                    [
                        'icon' => '🤖',
                        'title' => 'AI Learning Assistant',
                        'description' => '24/7 AI tutor for homework help, step-by-step problem explanations, adaptive difficulty based on performance, personalized study recommendations, learning style identification, weak area identification with practice suggestions, motivational encouragement, and multi-subject support from math to literature.'
                    ],
                    [
                        'icon' => '📊',
                        'title' => 'Progress Analytics Dashboard',
                        'description' => 'Detailed learning analytics showing time spent, topics mastered, quiz scores over time, comparative performance vs peers, study streak tracking, predicted exam performance, skill gap identification, and downloadable progress reports for parents or schools.'
                    ],
                    [
                        'icon' => '🎮',
                        'title' => 'Gamified Learning Experience',
                        'description' => 'Earn XP points for completing lessons, achievement badges for milestones, daily challenges with rewards, leaderboards per class/school, virtual rewards store, level progression system, team competitions, and seasonal learning tournaments with prizes.'
                    ],
                    [
                        'icon' => '👥',
                        'title' => 'Peer Learning Communities',
                        'description' => 'Join study groups by subject or grade, ask and answer questions in forums, collaborative homework sessions, peer tutoring marketplace, study buddy matching algorithm, group video study rooms, shared note repositories, and community moderation by teachers.'
                    ],
                    [
                        'icon' => '✍️',
                        'title' => 'Interactive Assessments',
                        'description' => 'Unlimited practice quizzes with instant grading, timed mock exams simulating real tests, adaptive questions adjusting to skill level, detailed answer explanations, performance analytics per topic, printable worksheets, essay submission with AI grading, and competition mode for racing against friends.'
                    ],
                    [
                        'icon' => '👨‍🏫',
                        'title' => 'Teacher Tools Suite',
                        'description' => 'Create and schedule classes easily, upload custom course content, student enrollment management, automated grading and feedback, attendance tracking, parent communication portal, assignment creation and submission tracking, and earnings dashboard for tutors.'
                    ],
                    [
                        'icon' => '📱',
                        'title' => 'Offline Learning Mode',
                        'description' => 'Download courses for offline viewing, sync progress when back online, offline quizzes with delayed grading, cached AI responses for common questions, compressed videos for storage efficiency, automatic download of next lessons, and smart storage management.'
                    ],
                ],
                'technologies' => [
                    'Flutter' => 'Cross-platform mobile app',
                    'Vue.js 3' => 'Web dashboard',
                    'Laravel 11' => 'Backend API',
                    'WebRTC' => 'Live video classrooms',
                    'TensorFlow' => 'AI tutor and personalization',
                    'PostgreSQL' => 'User and course data',
                    'Redis' => 'Session management',
                    'Moodle Integration' => 'LMS compatibility',
                    'AWS S3' => 'Video storage',
                    'CloudFront' => 'Video CDN',
                    'OpenAI GPT-4' => 'Homework help AI',
                    'Zoom SDK' => 'Live classes',
                    'M-Pesa API' => 'Subscription payments',
                    'Firebase' => 'Real-time updates',
                    'FFmpeg' => 'Video processing',
                ],
                'metrics' => [
                    'registered_students' => '850K+',
                    'active_teachers' => '12K+',
                    'courses_available' => '10K+',
                    'monthly_lessons' => '2.5M+',
                    'average_improvement' => '35%',
                    'completion_rate' => '72%',
                    'parent_satisfaction' => '4.8/5.0',
                ],
                'category' => 'mobile',
                'industry' => 'Education Technology',
                'completed_at' => '2024-09-10',
                'app_store_url' => 'https://apps.apple.com/app/learnspace',
                'play_store_url' => 'https://play.google.com/store/apps/details?id=com.learnspace',
                'featured_image' => 'https://images.unsplash.com/photo-1501504905252-473c47e087f8?q=80&w=2074',
                'is_featured' => true,
                'is_published' => true,
                'order' => 6,
                'testimonial' => [
                    'name' => 'Mary Ochieng',
                    'role' => 'Parent of 3 Students',
                    'photo' => '/images/testimonials/mary-ochieng.jpg',
                    'quote' => 'LearnSpace saved our family thousands in tuition fees. My children use it every evening and their grades improved dramatically - from C average to A-. The AI tutor helps with homework when I\'m at work. Best investment in their education!',
                ],
            ],

            // QuickBite - Food Delivery Platform
            [
                'title' => 'QuickBite',
                'slug' => 'quickbite',
                'tagline' => 'Fast Food Delivery Connecting Restaurants with Hungry Customers',
                'description' => 'QuickBite is Africa\'s most user-friendly food delivery platform, connecting thousands of restaurants with millions of hungry customers across major cities. The platform features smart restaurant discovery with AI recommendations, real-time order tracking with GPS, multiple payment options including cash and mobile money, loyalty rewards program, group ordering for offices, and scheduled deliveries. With features like live order updates, driver rating system, restaurant reviews, and special dietary filters, QuickBite makes food delivery seamless, reliable, and enjoyable.',
                'challenge' => 'Food delivery in Africa faced significant challenges: unreliable delivery times, limited restaurant options, high commission fees hurting small businesses, payment difficulties, inaccurate addresses causing failed deliveries, language barriers, and lack of trust in online ordering. Both restaurants and customers were frustrated with existing solutions.',
                'solution' => 'QuickBite built a comprehensive ecosystem: smart restaurant recommendation based on preferences and order history, accurate real-time tracking with driver location and ETA, flexible payment options (cash, M-Pesa, cards), what3words integration for precise addressing, restaurant dashboard with order management, fair commission structure for small restaurants, group ordering with split payments, scheduled orders for meal planning, and robust customer support with live chat.',
                'features' => [
                    [
                        'icon' => '🍕',
                        'title' => 'Smart Restaurant Discovery',
                        'description' => 'AI-powered recommendations based on past orders and preferences, filter by cuisine type, dietary requirements, price range, and delivery time, trending restaurants in your area, new restaurant highlights, promotional offers and discounts, virtual restaurant browsing with photos, and save favorites for quick reordering.'
                    ],
                    [
                        'icon' => '📍',
                        'title' => 'Real-Time Order Tracking',
                        'description' => 'Live GPS tracking of delivery driver, step-by-step order status updates, accurate ETA with traffic consideration, driver details with photo and rating, in-app messaging with driver, delivery route map, order history timeline, and SMS notifications at each stage.'
                    ],
                    [
                        'icon' => '👥',
                        'title' => 'Group Ordering System',
                        'description' => 'Create group orders for office or friends, each person selects their items, automatic payment splitting, shared cart with real-time updates, set order deadline and delivery time, admin controls for managing the group, cost per person calculation, and group order history.'
                    ],
                    [
                        'icon' => '⭐',
                        'title' => 'Loyalty Rewards Program',
                        'description' => 'Earn points on every order (1 point = $0.01), tier benefits (Bronze, Silver, Gold, Platinum), free delivery for top tier members, birthday discounts and special offers, referral bonuses for bringing friends, exclusive access to partner restaurants, cashback on select orders, and points redemption for discounts.'
                    ],
                    [
                        'icon' => '🏪',
                        'title' => 'Restaurant Partner Dashboard',
                        'description' => 'Real-time order notifications with sound alerts, one-tap order acceptance/rejection, menu management with availability toggle, preparation time updates, performance analytics showing best sellers, customer feedback dashboard, promotional campaign tools, payout tracking, and support ticket system.'
                    ],
                    [
                        'icon' => '🚗',
                        'title' => 'Driver Optimization System',
                        'description' => 'Intelligent order batching for efficiency, optimal route calculation saving time and fuel, earnings tracker with daily/weekly summaries, instant payment withdrawals, driver rating and feedback, training resources and tips, heatmap showing busy areas, and referral program for recruiting drivers.'
                    ],
                    [
                        'icon' => '💳',
                        'title' => 'Flexible Payment Options',
                        'description' => 'Cash on delivery with exact change notifications, M-Pesa and mobile money wallets, credit/debit cards with secure processing, wallet system with preloaded balance, split payment between methods, promotional code application, tip addition for drivers, and transaction receipt via email/SMS.'
                    ],
                    [
                        'icon' => '⏰',
                        'title' => 'Schedule & Meal Planning',
                        'description' => 'Order in advance up to 7 days ahead, schedule recurring orders for weekly meal plans, breakfast delivery with early morning slots, lunchtime reminders for office workers, dinner planning with family favorites, event catering orders for parties, and calendar integration.'
                    ],
                    [
                        'icon' => '🔍',
                        'title' => 'Dietary Filters & Preferences',
                        'description' => 'Filter by vegetarian, vegan, halal, gluten-free options, allergen warnings and ingredient lists, calorie and nutrition information, portion size customization, cooking instructions and spice level, religious dietary compliance, and saved dietary profiles for quick filtering.'
                    ],
                ],
                'technologies' => [
                    'React Native' => 'Mobile apps for customers and drivers',
                    'Flutter' => 'Restaurant partner app',
                    'Laravel 11' => 'Backend API and admin',
                    'Vue.js 3' => 'Restaurant dashboard',
                    'PostgreSQL' => 'Orders and user data',
                    'Redis' => 'Real-time order updates',
                    'Google Maps API' => 'Routing and tracking',
                    'Firebase' => 'Push notifications',
                    'Stripe & M-Pesa' => 'Payment processing',
                    'Twilio' => 'SMS notifications',
                    'AWS Lambda' => 'Order processing',
                    'ElasticSearch' => 'Restaurant search',
                    'Socket.io' => 'Real-time communication',
                    'Cloudflare' => 'CDN and security',
                    'what3words API' => 'Precise addressing',
                ],
                'metrics' => [
                    'monthly_orders' => '650K+',
                    'partner_restaurants' => '5,200+',
                    'active_drivers' => '8,500+',
                    'average_delivery_time' => '28 minutes',
                    'customer_satisfaction' => '4.6/5.0',
                    'order_accuracy' => '98.5%',
                    'repeat_customer_rate' => '76%',
                ],
                'category' => 'mobile',
                'industry' => 'Food & Delivery',
                'completed_at' => '2024-10-05',
                'app_store_url' => 'https://apps.apple.com/app/quickbite',
                'play_store_url' => 'https://play.google.com/store/apps/details?id=com.quickbite',
                'featured_image' => 'https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070',
                'is_featured' => false,
                'is_published' => true,
                'order' => 7,
                'testimonial' => [
                    'name' => 'James Mutua',
                    'role' => 'Restaurant Owner, Nairobi',
                    'photo' => '/images/testimonials/james-mutua.jpg',
                    'quote' => 'QuickBite increased our revenue by 40%! The dashboard is so easy to use and the commission rates are fair. We get orders all day long and the delivery is always reliable. The customer reviews help us improve our menu. Highly recommend to fellow restaurant owners!',
                ],
            ],

            // FitTrack - Fitness & Health Platform
            [
                'title' => 'FitTrack',
                'slug' => 'fittrack',
                'tagline' => 'All-in-One Fitness & Wellness App for Healthy Living',
                'description' => 'FitTrack is a comprehensive fitness and wellness platform empowering users to achieve their health goals through personalized workout plans, nutrition tracking, community challenges, and professional coaching. The app features AI-powered workout recommendations, exercise video library with form corrections, meal planning with African cuisine options, progress tracking with body measurements and photos, social fitness challenges, integration with wearables, and marketplace for fitness equipment and supplements. FitTrack makes fitness accessible, social, and fun for everyone from beginners to athletes.',
                'challenge' => 'Many Africans struggled with fitness: expensive gym memberships, lack of personalized guidance, nutrition advice focused on Western diets, no accountability partners, difficulty tracking progress, language barriers in fitness content, and cultural disconnect with global fitness apps. People started fitness journeys but couldn\'t sustain motivation.',
                'solution' => 'FitTrack provides personalized fitness solutions: AI-generated workout plans based on goals, fitness level, and available equipment, video library with African trainers, meal plans featuring local healthy cuisines, community challenges with prizes for motivation, progress photo timeline, virtual personal training, home workout options requiring no equipment, habit tracking with reminders, and supportive community forums.',
                'features' => [
                    [
                        'icon' => '💪',
                        'title' => 'Personalized Workout Plans',
                        'description' => 'AI-generated plans based on fitness goals (weight loss, muscle gain, endurance), adaptive difficulty adjusting to progress, equipment-specific workouts (gym, home, bodyweight), time-flexible sessions (15min-90min), injury modification suggestions, rest day scheduling, progressive overload principles, and weekly plan adjustments based on performance.'
                    ],
                    [
                        'icon' => '🎥',
                        'title' => 'Exercise Video Library',
                        'description' => '5,000+ exercise demonstrations with HD video, multiple angle views for proper form, slow-motion breakdowns of complex movements, African trainers speaking local languages, beginner to advanced variations, equipment alternatives, common mistake warnings, and offline download capability.'
                    ],
                    [
                        'icon' => '🍎',
                        'title' => 'Nutrition & Meal Planning',
                        'description' => 'Calorie and macro tracking with barcode scanner, meal plans featuring African cuisines (ugali, jollof, injera), recipe database with healthy alternatives, water intake reminders, supplement tracking, restaurant meal estimation, grocery shopping lists, and nutrition education articles.'
                    ],
                    [
                        'icon' => '📊',
                        'title' => 'Progress Tracking Dashboard',
                        'description' => 'Body measurement logging (weight, waist, body fat %), progress photo timeline with side-by-side comparisons, workout completion streaks, strength gains over time, cardio performance metrics, visual charts showing transformation, milestone celebrations, and exportable progress reports.'
                    ],
                    [
                        'icon' => '🏆',
                        'title' => 'Community Challenges',
                        'description' => 'Weekly fitness challenges with leaderboards, team competitions vs other groups, prize rewards for top performers, challenge variety (steps, workouts, weight loss), social feed showing friend progress, challenge badges and trophies, monthly mega-challenges, and corporate wellness challenges.'
                    ],
                    [
                        'icon' => '👥',
                        'title' => 'Social Fitness Network',
                        'description' => 'Follow friends and fitness influencers, share workout photos and achievements, comment and encourage others, find workout buddies nearby, join interest-based groups (yoga, running, lifting), virtual training sessions together, accountability partner matching, and motivation wall of success stories.'
                    ],
                    [
                        'icon' => '🎯',
                        'title' => 'Smart Goal Setting',
                        'description' => 'SMART goal framework with deadlines, goal breakdown into weekly targets, progress percentage tracking, milestone reminders, success probability predictions, goal adjustment recommendations, celebration when goals achieved, and goal history to see all accomplishments.'
                    ],
                    [
                        'icon' => '⌚',
                        'title' => 'Wearable Integration',
                        'description' => 'Sync with Apple Watch, Fitbit, Garmin, Samsung Health, automatic workout detection and logging, heart rate monitoring during exercise, sleep quality tracking, daily step counting, calorie burn calculation, and unified health dashboard.'
                    ],
                    [
                        'icon' => '💬',
                        'title' => 'Virtual Personal Training',
                        'description' => 'Book 1-on-1 video sessions with certified trainers, get personalized form feedback and corrections, custom meal and workout planning, weekly check-ins and accountability, chat support between sessions, affordable pricing tiers, trainer matching algorithm, and payment via M-Pesa.'
                    ],
                ],
                'technologies' => [
                    'React Native' => 'Cross-platform mobile app',
                    'TensorFlow' => 'AI workout recommendations',
                    'Python/Django' => 'Backend services',
                    'PostgreSQL' => 'User and fitness data',
                    'Redis' => 'Real-time features',
                    'AWS S3' => 'Video storage',
                    'CloudFront' => 'Video streaming',
                    'HealthKit & Google Fit' => 'Wearable integration',
                    'WebRTC' => 'Video coaching sessions',
                    'Firebase' => 'Real-time sync',
                    'Stripe & M-Pesa' => 'Subscriptions',
                    'OpenCV' => 'Form analysis from video',
                    'Chart.js' => 'Progress visualizations',
                    'Socket.io' => 'Live challenges',
                    'FFmpeg' => 'Video processing',
                ],
                'metrics' => [
                    'active_users' => '420K+',
                    'workouts_completed' => '8.5M+',
                    'weight_lost_combined' => '150K+ kg',
                    'average_weekly_sessions' => '4.2',
                    'user_goal_achievement' => '64%',
                    'daily_active_rate' => '38%',
                    'premium_conversion' => '12%',
                ],
                'category' => 'mobile',
                'industry' => 'Health & Fitness',
                'completed_at' => '2024-08-20',
                'app_store_url' => 'https://apps.apple.com/app/fittrack',
                'play_store_url' => 'https://play.google.com/store/apps/details?id=com.fittrack',
                'featured_image' => 'https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?q=80&w=2070',
                'is_featured' => false,
                'is_published' => true,
                'order' => 8,
                'testimonial' => [
                    'name' => 'Peter Otieno',
                    'role' => 'Fitness Transformation Success',
                    'photo' => '/images/testimonials/peter-otieno.jpg',
                    'quote' => 'I lost 25kg in 6 months using FitTrack! The app kept me accountable every day. The community challenges made fitness fun - I competed with friends and won prizes. The meal plans with local food made it easy to eat healthy. I feel amazing and confident now!',
                ],
            ],

            // HomeFinder - Real Estate Platform
            [
                'title' => 'HomeFinder',
                'slug' => 'homefinder',
                'tagline' => 'Smart Real Estate Platform Connecting Buyers, Sellers & Renters',
                'description' => 'HomeFinder is the most advanced real estate platform in Africa, revolutionizing property search, listing, and transactions. The platform combines powerful search with filters, 3D virtual tours, neighborhood insights, mortgage calculator, verified listings, agent directory, price trend analytics, and secure document management. With features like saved searches with alerts, property comparison tools, rental application processing, and integrated property management for landlords, HomeFinder makes finding your dream home or investment property simple, transparent, and trustworthy.',
                'challenge' => 'The African real estate market was chaotic: fake listings and scams were rampant, property information was incomplete or inaccurate, agents were hard to verify and trust, pricing was opaque without market data, physically viewing properties was time-consuming and expensive, rental applications were paper-heavy, and property management was manual and inefficient.',
                'solution' => 'HomeFinder built a trusted ecosystem: verified listings with property ownership checks, high-quality photos and virtual tours, detailed property information with legal documents, agent verification and rating system, market price analytics with historical trends, smart search with precise filters, instant messaging with agents, online rental applications with credit checks, and property management tools for landlords.',
                'features' => [
                    [
                        'icon' => '🔍',
                        'title' => 'Intelligent Property Search',
                        'description' => 'Advanced filters by location, price, bedrooms, property type, amenities, map-based search with boundary drawing, commute time calculator to work/school, nearby amenities (schools, hospitals, malls), price range slider with affordability check, property age and condition filters, parking and security features, and pet-friendly options.'
                    ],
                    [
                        'icon' => '🏠',
                        'title' => '3D Virtual Tours',
                        'description' => 'Immersive 360° property walkthroughs, room-by-room navigation, zoomable high-resolution photos, video tours with narration, floor plans with measurements, drone footage for large properties, VR headset compatibility, and measure tool for room dimensions.'
                    ],
                    [
                        'icon' => '✅',
                        'title' => 'Verified Listings System',
                        'description' => 'Property ownership verification checks, agent licensing validation, photo authenticity confirmation, address verification with GPS, recent listing date indicators, scam detection AI, verified badge for trusted listings, and report suspicious listing button.'
                    ],
                    [
                        'icon' => '📊',
                        'title' => 'Market Intelligence Dashboard',
                        'description' => 'Property price trends over time, neighborhood appreciation rates, comparable property analysis, rental yield calculations, market inventory levels, days-on-market statistics, price per square meter insights, and investment opportunity scoring.'
                    ],
                    [
                        'icon' => '💰',
                        'title' => 'Mortgage & Finance Tools',
                        'description' => 'Mortgage calculator with multiple scenarios, affordability estimator based on income, down payment calculator, interest rate comparisons across banks, loan pre-qualification application, rent vs buy analysis, closing cost estimator, and connected to 15+ banks.'
                    ],
                    [
                        'icon' => '👤',
                        'title' => 'Agent Directory & Ratings',
                        'description' => 'Find and compare real estate agents, verified agent profiles with credentials, client reviews and ratings, transaction history and success rate, specialty area indicators, instant chat with agents, schedule property viewing requests, and agent performance badges.'
                    ],
                    [
                        'icon' => '🏘️',
                        'title' => 'Neighborhood Insights',
                        'description' => 'School ratings and locations, crime statistics and safety scores, walkability and transit scores, nearby amenities map (shopping, dining, parks), demographic information, development plans and infrastructure projects, resident reviews, and quality of life indicators.'
                    ],
                    [
                        'icon' => '📝',
                        'title' => 'Digital Application Process',
                        'description' => 'Online rental application forms, document upload (ID, pay slips, references), credit check integration, background verification, application status tracking, landlord screening dashboard, automated approval/rejection notifications, and digital lease signing.'
                    ],
                    [
                        'icon' => '🔔',
                        'title' => 'Smart Alerts & Saved Searches',
                        'description' => 'Save search criteria for repeat use, instant notifications for new matching listings, price drop alerts on saved properties, open house reminders, application status updates, market report emails, and favorite property collections.'
                    ],
                ],
                'technologies' => [
                    'Next.js' => 'Server-side rendered web app',
                    'React Native' => 'Mobile applications',
                    'Laravel 11' => 'Backend API',
                    'PostgreSQL + PostGIS' => 'Geospatial property data',
                    'ElasticSearch' => 'Property search engine',
                    'Matterport' => '3D virtual tours',
                    'Google Maps API' => 'Location services',
                    'Mapbox' => 'Custom property maps',
                    'TensorFlow' => 'Property valuation AI',
                    'AWS S3' => 'Photo and video storage',
                    'Stripe' => 'Payment processing',
                    'Twilio' => 'SMS notifications',
                    'DocuSign' => 'Digital signatures',
                    'Redis' => 'Caching',
                    'Kubernetes' => 'Scalable infrastructure',
                ],
                'metrics' => [
                    'active_listings' => '85K+',
                    'monthly_searches' => '2.5M+',
                    'verified_agents' => '3,400+',
                    'successful_transactions' => '18K+',
                    'average_search_to_contact' => '3.2 minutes',
                    'user_satisfaction' => '4.5/5.0',
                    'listing_accuracy' => '97%',
                ],
                'category' => 'web',
                'industry' => 'Real Estate',
                'completed_at' => '2024-11-01',
                'url' => 'https://homefinder.africa',
                'featured_image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?q=80&w=2073',
                'is_featured' => false,
                'is_published' => true,
                'order' => 9,
                'testimonial' => [
                    'name' => 'Susan Njeri',
                    'role' => 'New Homeowner',
                    'photo' => '/images/testimonials/susan-njeri.jpg',
                    'quote' => 'HomeFinder made buying my first home so easy! I could tour properties virtually, compare neighborhoods, calculate my budget, and find a trusted agent all in one place. No fake listings, no wasted time. Found and closed on my dream apartment in just 3 months!',
                ],
            ],
        ];

        foreach ($newPortfolios as $portfolio) {
            Portfolio::create($portfolio);
        }
    }
}
