# Ascend Stratus - Routes Documentation

## Overview
This document provides a comprehensive overview of all routes in the Ascend Stratus Laravel application.

## Route Structure

### 🏠 Home Page
- **GET** `/` → `home` - Main landing page

### 📄 Main Navigation Pages
- **GET** `/about` → `about` - About us page with company information
- **GET** `/benefits` → `benefits` - Benefits and advantages page
- **GET** `/platform` → `platform` - Platform overview page
- **GET** `/culture` → `culture` - Company culture page
- **GET** `/portfolio` → `portfolio` - Portfolio showcase page
- **GET** `/insights` → `insights` - Blog/insights listing page
- **GET** `/contact` → `contact` - Contact information and form

### 🛠️ Services Routes
- **GET** `/services` → `services` - Main services overview page
- **GET** `/services/web-applications` → `services.web-applications` - Web development services
- **GET** `/services/mobile-app-development` → `services.mobile-app-development` - Mobile app development
- **GET** `/services/digital-transformation` → `services.digital-transformation` - Digital transformation consulting
- **GET** `/services/dev-team-as-a-service` → `services.dev-team-as-a-service` - Team augmentation services
- **GET** `/services/ecommerce-solutions` → `services.ecommerce-solutions` - E-commerce development
- **GET** `/services/enterprise-software` → `services.enterprise-software` - Enterprise software solutions

### 🚀 Products/Ventures Routes
- **GET** `/products` → `products` - Main products page
- **GET** `/products/ascend-spa` → `products.ascend-spa` - Ascend SPA product detail
- **GET** `/products/retail-pro` → `products.retail-pro` - Retail Pro product detail
- **GET** `/products/pool-billiard` → `products.pool-billiard` - Pool Billiard product detail
- **GET** `/products/tours-app` → `products.tours-app` - Tours App product detail
- **GET** `/products/events-pro` → `products.events-pro` - Events Pro product detail
- **GET** `/products/agrismart` → `products.agrismart` - AgriSmart product detail
- **GET** `/products/logiflow` → `products.logiflow` - LogiFlow product detail

### 📝 Additional Pages
- **GET** `/ventures` → `ventures` - Ventures overview page
- **GET** `/careers` → `careers` - Career opportunities page
- **GET** `/solutions` → `solutions` - Solutions overview page
- **GET** `/case-studies` → `case-studies` - Case studies page

### 📰 Blog/Insights Routes
- **GET** `/insights/{slug}` → `insights.detail` - Individual blog post/insight detail page

### 🔌 API Routes for Dynamic Content
- **GET** `/api/ventures` → `api.ventures` - JSON data for ventures
- **GET** `/api/services` → `api.services` - JSON data for services
- **GET** `/api/stats` → `api.stats` - JSON data for company statistics

### 🛠️ Utility Routes
- **GET** `/sitemap` → `sitemap` - XML sitemap for SEO
- **GET** `/robots.txt` → `robots` - Robots.txt for search engines
- **GET** `/health` → `health` - Health check endpoint

## Route Groups

### Services Group (`/services`)
All service-related routes are grouped under the `/services` prefix with proper naming conventions.

### Products Group (`/products`)
All product-related routes are grouped under the `/products` prefix with proper naming conventions.

### API Group (`/api`)
All API endpoints are grouped under the `/api` prefix with `api.` name prefix.

## Route Names Convention

- Main pages: Simple names (e.g., `about`, `contact`)
- Services: `services.{service-name}` (e.g., `services.web-applications`)
- Products: `products.{product-name}` (e.g., `products.ascend-spa`)
- API: `api.{endpoint}` (e.g., `api.ventures`)

## Usage Examples

### In Blade Templates
```php
<!-- Using route names -->
<a href="{{ route('services') }}">Our Services</a>
<a href="{{ route('services.web-applications') }}">Web Applications</a>
<a href="{{ route('products.ascend-spa') }}">Ascend SPA</a>

<!-- Using url() helper -->
<a href="{{ url('/about') }}">About Us</a>
<a href="{{ url('/services/mobile-app-development') }}">Mobile Development</a>
```

### In Controllers
```php
// Redirecting to named routes
return redirect()->route('services');
return redirect()->route('services.digital-transformation');

// Generating URLs
$url = route('products.logiflow');
$apiUrl = route('api.ventures');
```

## API Endpoints Data Structure

### `/api/ventures`
```json
{
  "ventures": [
    {"id": 1, "name": "LogiFlow", "sector": "Logistics", "status": "Active"},
    {"id": 2, "name": "FinanceCore", "sector": "FinTech", "status": "Active"}
  ]
}
```

### `/api/services`
```json
{
  "services": [
    {"id": 1, "name": "Web Applications", "slug": "web-applications", "category": "Development"},
    {"id": 2, "name": "Mobile App Development", "slug": "mobile-app-development", "category": "Development"}
  ]
}
```

### `/api/stats`
```json
{
  "stats": [
    {"label": "Projects Completed", "value": "1500+"},
    {"label": "Happy Clients", "value": "500+"}
  ]
}
```

## SEO and Performance

- All routes have proper names for easy reference
- Sitemap route available for search engine indexing
- Robots.txt route for search engine guidelines
- Health check endpoint for monitoring
- Clean URL structure for better SEO

## Maintenance

To view all routes in the application:
```bash
php artisan route:list
```

To clear route cache:
```bash
php artisan route:clear
```

To cache routes for production:
```bash
php artisan route:cache
```

---

**Last Updated:** September 27, 2025
**Total Routes:** 36
