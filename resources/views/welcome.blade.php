@extends('layouts.detail')

@section('title', 'Ascend Stratus - Leading Technology Solutions & Digital Transformation in Africa')
@section('description', 'Transform your business with Ascend Stratus - Africa\'s premier technology holding company. We
provide enterprise software, fintech solutions, mobile app development, and digital transformation services designed
specifically for African markets.')
@section('keywords', 'enterprise software Africa, fintech solutions Kenya, mobile app development Africa, digital
transformation, business automation, custom software development, African technology company, payment processing,
digital banking, LogiFlow, AgriSmart')

@section('og_title', 'Ascend Stratus - Transform Your Business with Cutting-Edge Technology')
@section('og_description', 'Leading African technology company providing enterprise software, fintech solutions, and
mobile applications. Join hundreds of successful businesses that have transformed with our solutions.')
@section('og_image', asset('images/ascend-stratus-social.jpg'))

@section('twitter_title', 'Ascend Stratus - Technology Solutions for African Businesses')
@section('twitter_description', 'Enterprise software, fintech solutions & mobile apps designed for Africa. Transform
your business today.')

@push('structured-data')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Ascend Stratus - Home',
    'description' => 'Transform your business with Africa\'s leading technology solutions provider',
    'url' => url('/'),
    'mainEntity' => [
        '@type' => 'Organization',
        'name' => 'Ascend Stratus',
        'alternateName' => 'Ascend Stratus Holdings',
        'description' => 'Multi-sector technology holding company transforming businesses across Africa',
        'foundingDate' => '2020',
        'numberOfEmployees' => '50-100',
        'industry' => 'Technology Services',
        'serviceArea' => [
            '@type' => 'Place',
            'name' => 'Africa'
        ],
        'makesOffer' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Enterprise Software Development',
                    'category' => 'Software Development',
                    'description' => 'Custom enterprise applications with AI-powered features'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Fintech Solutions',
                    'category' => 'Financial Technology',
                    'description' => 'Payment processing, digital banking, and mobile money integration'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Mobile App Development',
                    'category' => 'Mobile Development',
                    'description' => 'Native iOS/Android and cross-platform applications'
                ]
            ]
        ]
    ],
    'breadcrumb' => [
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => url('/')
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endpush

@push('styles')
<style>
  /* ── Curtain ────────────────────────────────────── */
  #as-curtain-left,
  #as-curtain-right {
    position: fixed;
    top: 0;
    width: 50%;
    height: 100%;
    background: #020617;
    z-index: 9900;
    will-change: transform;
  }

  #as-curtain-left {
    left: 0;
  }

  #as-curtain-right {
    right: 0;
  }

  #as-curtain-left.as-open {
    animation: curtainLeft 1.5s cubic-bezier(0.77, 0, 0.175, 1) 0.5s forwards;
  }

  #as-curtain-right.as-open {
    animation: curtainRight 1.5s cubic-bezier(0.77, 0, 0.175, 1) 0.5s forwards;
  }

  @keyframes curtainLeft {
    to {
      transform: translateX(-100%);
    }
  }

  @keyframes curtainRight {
    to {
      transform: translateX(100%);
    }
  }

  /* Curtain sheen */
  #as-curtain-left::after,
  #as-curtain-right::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(13, 148, 136, .14) 0%, transparent 50%, rgba(6, 182, 212, .08) 100%);
  }

  #as-curtain-text {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9901;
    text-align: center;
    pointer-events: none;
    transition: opacity .6s ease .1s;
  }

  #as-curtain-text.as-hidden {
    opacity: 0;
  }

  .as-ct-logo {
    display: block;
    font-size: 10px;
    letter-spacing: 6px;
    text-transform: uppercase;
    color: rgba(20, 184, 166, .7);
    font-weight: 700;
    margin-bottom: 20px;
  }

  .as-ct-eyebrow {
    display: block;
    font-size: 9px;
    letter-spacing: 5px;
    text-transform: uppercase;
    color: rgba(20, 184, 166, .8);
    font-weight: 600;
    margin-bottom: 14px;
  }

  .as-ct-main {
    font-family: 'Playfair Display', serif;
    font-size: clamp(34px, 6vw, 60px);
    font-weight: 900;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 22px;
  }

  .as-ct-main .as-ct-grad {
    background: linear-gradient(90deg, #14b8a6, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .as-ct-rule {
    width: 60px;
    height: 2px;
    margin: 0 auto;
    background: linear-gradient(90deg, #0d9488, #06b6d4);
    border-radius: 2px;
  }

  /* ── Navbar hidden until reveal ─────────────────── */
  #navbar.as-hidden-nav {
    opacity: 0;
    pointer-events: none;
    transition: opacity .9s ease;
  }

  #navbar.as-revealed {
    opacity: 1;
    pointer-events: auto;
    transition: opacity .9s ease;
  }

  /* ──  Hero ──────────────────────────── */
  #as-grand-hero {
    min-height: 100vh;
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    padding: 40px 24px;
    background:
      radial-gradient(ellipse 80% 60% at 50% 0%, rgba(13, 148, 136, .18) 0%, transparent 60%),
      radial-gradient(ellipse 60% 40% at 80% 80%, rgba(6, 182, 212, .12) 0%, transparent 50%),
      #020617;
  }

  .as-hero-grid {
    position: absolute;
    inset: 0;
    pointer-events: none;
    opacity: .04;
    background-image: linear-gradient(rgba(255, 255, 255, 1) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, 1) 1px, transparent 1px);
    background-size: 60px 60px;
  }

  .as-spotlight {
    position: absolute;
    top: -10%;
    left: 50%;
    width: min(700px, 100vw);
    height: min(700px, 100vw);
    transform: translateX(-50%);
    background: conic-gradient(from 0deg at 50% 0%,
        transparent 70%, rgba(13, 148, 136, .12) 80%, rgba(6, 182, 212, .08) 85%, transparent 90%);
    animation: as-spotSpin 10s linear infinite;
    pointer-events: none;
  }

  @keyframes as-spotSpin {
    to {
      transform: translateX(-50%) rotate(360deg);
    }
  }

  .as-blob {
    position: absolute;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
    animation: as-blobFloat 8s ease-in-out infinite;
  }

  .as-blob-1 {
    width: 400px;
    height: 400px;
    top: -100px;
    right: -100px;
    background: radial-gradient(circle, rgba(13, 148, 136, .15), transparent 70%);
    animation-delay: 0s;
  }

  .as-blob-2 {
    width: 300px;
    height: 300px;
    bottom: -80px;
    left: -80px;
    background: radial-gradient(circle, rgba(6, 182, 212, .12), transparent 70%);
    animation-delay: 3s;
  }

  @keyframes as-blobFloat {

    0%,
    100% {
      transform: translateY(0) scale(1);
    }

    50% {
      transform: translateY(-20px) scale(1.05);
    }
  }

  .as-hero-inner {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 900px;
  }

  .as-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 11px;
    letter-spacing: 5px;
    text-transform: uppercase;
    font-weight: 600;
    color: #14b8a6;
    margin-bottom: 24px;
    opacity: 0;
    transform: translateY(16px);
    animation: as-fadeUp .7s ease 2s forwards;
  }

  .as-pulse-ring {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #14b8a6;
    flex-shrink: 0;
    box-shadow: 0 0 0 0 rgba(20, 184, 166, .6);
    animation: as-ringPulse 2s ease-in-out infinite;
  }

  @keyframes as-ringPulse {
    0% {
      box-shadow: 0 0 0 0 rgba(20, 184, 166, .5);
    }

    70% {
      box-shadow: 0 0 0 10px rgba(20, 184, 166, 0);
    }

    100% {
      box-shadow: 0 0 0 0 rgba(20, 184, 166, 0);
    }
  }

  .as-hero-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(40px, 7vw, 80px);
    font-weight: 900;
    line-height: 1.05;
    margin-bottom: 18px;
    color: #f1f5f9;
    opacity: 0;
    transform: translateY(24px);
    animation: as-fadeUp .9s ease 2.2s forwards;
  }

  .as-hero-title .as-grad {
    background: linear-gradient(90deg, #14b8a6, #22d3ee, #60a5fa);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .as-hero-sub {
    font-size: clamp(13px, 2vw, 16px);
    color: #94a3b8;
    font-weight: 300;
    letter-spacing: 4px;
    text-transform: uppercase;
    margin-bottom: 32px;
    opacity: 0;
    animation: as-fadeUp .7s ease 2.5s forwards;
  }

  .as-divider {
    width: 100px;
    height: 1px;
    margin: 0 auto 36px;
    background: linear-gradient(90deg, transparent, #0d9488, #06b6d4, transparent);
    opacity: 0;
    animation: as-fadeUp .6s ease 2.7s forwards;
  }

  @keyframes as-fadeUp {
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  /* Tools */
  .as-tools-section {
    opacity: 0;
    animation: as-fadeUp .8s ease 2.9s forwards;
  }

  .as-tools-label {
    font-size: 10px;
    letter-spacing: 4px;
    text-transform: uppercase;
    color: #64748b;
    margin-bottom: 14px;
    font-weight: 500;
  }

  .as-tools-row {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    align-items: center;
  }

  .as-tool-pill {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 16px;
    border-radius: 100px;
    border: 1px solid rgba(20, 184, 166, .25);
    background: rgba(13, 148, 136, .06);
    font-size: 12px;
    font-weight: 600;
    color: rgba(241, 245, 249, .8);
    transition: border-color .3s, background .3s, transform .3s;
    cursor: default;
  }

  .as-tool-pill:hover {
    border-color: rgba(20, 184, 166, .55);
    background: rgba(13, 148, 136, .14);
    transform: translateY(-2px);
  }

  .as-tool-pill img {
    width: 20px;
    height: 20px;
    object-fit: contain;
    border-radius: 3px;
    flex-shrink: 0;
  }

  /* New Services Hero Showcase */
  .as-services-showcase {
    margin-top: 44px;
    opacity: 0;
    animation: as-fadeUp .8s ease 3.1s forwards;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
    gap: 12px;
    max-width: 780px;
    width: 100%;
  }

  .as-srv-card {
    padding: 18px 14px;
    border-radius: 12px;
    text-align: center;
    border: 1px solid rgba(13, 148, 136, .25);
    background: rgba(13, 148, 136, .06);
    transition: border-color .3s, background .3s, transform .3s;
  }

  .as-srv-card:hover {
    border-color: rgba(13, 148, 136, .5);
    background: rgba(13, 148, 136, .12);
    transform: translateY(-4px);
  }

  .as-srv-new {
    position: relative;
  }

  .as-srv-new::before {
    content: 'NEW';
    position: absolute;
    top: -8px;
    right: -8px;
    font-size: 8px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #fff;
    background: linear-gradient(90deg, #0d9488, #06b6d4);
    padding: 2px 7px;
    border-radius: 100px;
  }

  .as-srv-icon {
    font-size: 22px;
    margin-bottom: 10px;
    display: block;
  }

  .as-srv-name {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .5px;
    text-transform: uppercase;
    color: #e2e8f0;
  }

  .as-srv-tools {
    margin-top: 6px;
    display: flex;
    flex-wrap: wrap;
    gap: 3px;
    justify-content: center;
  }

  .as-srv-tool-img {
    width: 14px;
    height: 14px;
    object-fit: contain;
    border-radius: 2px;
    opacity: .7;
  }

  /* ── Ticker ─────────────────────────────────────── */
  .as-ticker-wrap {
    background: linear-gradient(90deg, #0d9488, #06b6d4, #3b82f6);
    padding: 11px 0;
    overflow: hidden;
    position: relative;
  }

  .as-ticker-wrap::before,
  .as-ticker-wrap::after {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    width: 80px;
    z-index: 2;
    pointer-events: none;
  }

  .as-ticker-wrap::before {
    left: 0;
    background: linear-gradient(90deg, #0d9488, transparent);
  }

  .as-ticker-wrap::after {
    right: 0;
    background: linear-gradient(-90deg, #3b82f6, transparent);
  }

  .as-ticker {
    display: flex;
    white-space: nowrap;
    animation: as-ticker 22s linear infinite;
  }

  .as-ticker span {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #fff;
    padding: 0 30px;
  }

  @keyframes as-ticker {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }

  /* ── Float Modal ────────────────────────────────── */
  #as-modal {
    position: fixed;
    bottom: 28px;
    right: 28px;
    z-index: 500;
    width: 340px;
    background: linear-gradient(145deg, #0c1424, #0f1e30);
    border: 1px solid rgba(13, 148, 136, .4);
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 0 60px rgba(0, 0, 0, .7), 0 20px 60px rgba(13, 148, 136, .12);
    transform: translateY(150px) scale(.92);
    opacity: 0;
    transition: transform .9s cubic-bezier(.34, 1.56, .64, 1) 4s, opacity .7s ease 4s;
  }

  #as-modal.as-visible {
    transform: translateY(0) scale(1);
    opacity: 1;
  }

  .as-modal-hdr {
    background: linear-gradient(90deg, rgba(13, 148, 136, .18), rgba(6, 182, 212, .12));
    padding: 13px 18px;
    border-bottom: 1px solid rgba(13, 148, 136, .2);
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .as-modal-tag {
    font-size: 9px;
    font-weight: 800;
    letter-spacing: 3px;
    text-transform: uppercase;
    background: linear-gradient(90deg, #14b8a6, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .as-modal-x {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    border: 1px solid rgba(13, 148, 136, .4);
    background: none;
    color: #14b8a6;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background .2s;
  }

  .as-modal-x:hover {
    background: rgba(13, 148, 136, .2);
  }

  .as-modal-body {
    padding: 18px;
  }

  .as-modal-hl {
    font-family: 'Playfair Display', serif;
    font-size: 19px;
    font-weight: 700;
    color: #f1f5f9;
    margin-bottom: 14px;
    line-height: 1.25;
  }

  .as-modal-hl .as-hl-g {
    background: linear-gradient(90deg, #14b8a6, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .as-modal-svcs {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 16px;
  }

  .as-modal-row {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 12px;
    border-radius: 8px;
    background: rgba(255, 255, 255, .03);
    border: 1px solid rgba(255, 255, 255, .06);
    font-size: 12px;
    font-weight: 600;
    color: rgba(241, 245, 249, .85);
    transition: background .2s, border-color .2s;
  }

  .as-modal-row:hover {
    background: rgba(13, 148, 136, .08);
    border-color: rgba(13, 148, 136, .3);
  }

  .as-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: linear-gradient(90deg, #0d9488, #06b6d4);
    flex-shrink: 0;
  }

  .as-modal-cta {
    width: 100%;
    padding: 12px;
    background: linear-gradient(90deg, #0d9488, #06b6d4);
    border: none;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #fff;
    cursor: pointer;
    transition: opacity .2s, transform .2s, box-shadow .2s;
  }

  .as-modal-cta:hover {
    opacity: .92;
    transform: scale(.99);
    box-shadow: 0 8px 30px rgba(13, 148, 136, .35);
  }

  .as-modal-tools {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    margin-top: 14px;
    padding-top: 14px;
    border-top: 1px solid rgba(255, 255, 255, .06);
  }

  .as-mtool {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 9px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    padding: 4px 9px;
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .08);
    border-radius: 100px;
    color: rgba(241, 245, 249, .45);
    transition: border-color .2s, color .2s;
  }

  .as-mtool:hover {
    border-color: rgba(13, 148, 136, .3);
    color: #14b8a6;
  }

  .as-mtool img {
    width: 13px;
    height: 13px;
    object-fit: contain;
    border-radius: 2px;
  }

  #as-reopen {
    display: none;
    position: fixed;
    bottom: 28px;
    right: 28px;
    z-index: 501;
    align-items: center;
    gap: 8px;
    padding: 10px 18px;
    border: none;
    border-radius: 100px;
    background: linear-gradient(90deg, #0d9488, #06b6d4);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #fff;
    cursor: pointer;
    box-shadow: 0 4px 24px rgba(13, 148, 136, .4);
    transition: opacity .2s, transform .2s;
  }

  #as-reopen:hover {
    opacity: .9;
    transform: scale(1.02);
  }

  /* ── Remove pt-20 during curtain on main ───────── */
  body.as-unveiling main {
    padding-top: 0 !important;
  }

  @media(max-width:640px) {
    #as-modal {
      width: calc(100vw - 32px);
      right: 16px;
      bottom: 16px;
    }

    .as-services-showcase {
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style>
@endpush

@section('content')

{{-- Welcome Modal for First-Time Visitors --}}
@include('components.welcome-modal')

{{-- ════════════════════════════════════════════════════ --}}
{{-- — CURTAIN --}}
{{-- ════════════════════════════════════════════════════ --}}
<div id="as-curtain-left"></div>
<div id="as-curtain-right"></div>
<div id="as-curtain-text">
  <span class="as-ct-logo">Ascend Stratus</span>
  <span class="as-ct-eyebrow" New &mdash; 2025</span>
    <div class="as-ct-main">Something<br><span class="as-ct-grad">New Is Here</span></div>
    <div class="as-ct-rule"></div>
</div>

{{-- ════════════════════════════════════════════════════ --}}
{{-- HERO — replaces old hero --}}
{{-- ════════════════════════════════════════════════════ --}}
<section id="as-grand-hero">
  <div class="as-hero-grid"></div>
  <div class="as-spotlight"></div>
  <div class="as-blob as-blob-1"></div>
  <div class="as-blob as-blob-2"></div>

  <div class="as-hero-inner">

    <div class="as-eyebrow">
      <span class="as-pulse-ring"></span>
      &mdash; New Creative Services Live
    </div>

    <h1 class="as-hero-title">
      Where Vision Becomes<br>
      <span class="as-grad">Visual Reality</span>
    </h1>

    <p class="as-hero-sub">Tech &nbsp;&middot;&nbsp; Motion &nbsp;&middot;&nbsp; Design &nbsp;&middot;&nbsp; Film
      &nbsp;&middot;&nbsp; Identity</p>

    <div class="as-divider"></div>

    {{-- Software Logos --}}
    <div class="as-tools-section">
      <p class="as-tools-label">Powered by industry-leading creative tools</p>
      <div class="as-tools-row">
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-after-effects.svg"
            alt="After Effects">
          After Effects
        </div>
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-photoshop.svg" alt="Photoshop">
          Photoshop
        </div>
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain"
            src="https://imgs.search.brave.com/MRFs6m9rhw5S9cvefTiaK0mus-0DoTUqfrJWM7vjir0/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L3RfbGFyZ2UsZl9h/dXRvL3Byb2R1Y3Rz/Lzg4MjIxMTgvMS5q/cGc"
            alt="CorelDRAW">
          CorelDRAW
        </div>
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-premiere.svg"
            alt="Premiere Pro">
          Premiere Pro
        </div>
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain"
            src="https://imgs.search.brave.com/SGndp4503Aazenjx84FAysRQpgvtoaAoCp3PdpUPYzw/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/cmlwcGxldHJhaW5p/bmcuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDE4LzAyL2Rh/dmluY2ktcmVzb2x2/ZS0xNC1sb2dvLnBu/Zw"
            alt="DaVinci Resolve">
          DaVinci Resolve
        </div>
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-illustrator.svg"
            alt="Illustrator">
          Illustrator
        </div>
        <div class="as-tool-pill">
          <img class="w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-indesign.svg" alt="InDesign">
          InDesign
        </div>
      </div>
    </div>

    {{-- 5 new service cards --}}
    <div class="as-services-showcase">
      <a href="{{ route('services.creative.show', 'logo-animation') }}" class="as-srv-card as-srv-new block group">
        <span class="as-srv-icon flex justify-center mb-6"><img src="https://cdn.svglogos.dev/logos/adobe-animate.svg"
            class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300" alt="An"></span>
        <div class="as-srv-name mt-2">Logo Animation</div>
        <div class="as-srv-tools">
          <img class="as-srv-tool-img w-6 h-6 object-contain"
            src="https://cdn.svglogos.dev/logos/adobe-after-effects.svg" alt="Ae">
          <img class="as-srv-tool-img w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-premiere.svg"
            alt="Pr">
        </div>
      </a>
      <a href="{{ route('services.creative.show', 'grafix-design') }}" class="as-srv-card as-srv-new block group">
        <span class="as-srv-icon flex justify-center mb-6"><img src="https://cdn.svglogos.dev/logos/adobe-photoshop.svg"
            class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300" alt="Ps"></span>
        <div class="as-srv-name mt-2">Grafix &amp; Design</div>
        <div class="as-srv-tools">
          <img class="as-srv-tool-img w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-photoshop.svg"
            alt="Ps">
          <img class="as-srv-tool-img w-6 h-6 object-contain"
            src="https://imgs.search.brave.com/MRFs6m9rhw5S9cvefTiaK0mus-0DoTUqfrJWM7vjir0/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L3RfbGFyZ2UsZl9h/dXRvL3Byb2R1Y3Rz/Lzg4MjIxMTgvMS5q/cGc"
            alt="CDR">
        </div>
      </a>
      <a href="{{ route('services.creative.show', 'logo-design') }}" class="as-srv-card as-srv-new block group">
        <span class="as-srv-icon flex justify-center mb-6"><img
            src="https://cdn.svglogos.dev/logos/adobe-illustrator.svg"
            class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300" alt="Ai"></span>
        <div class="as-srv-name mt-2">Logo Design</div>
        <div class="as-srv-tools">
          <img class="as-srv-tool-img w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-illustrator.svg"
            alt="Ai">
          <img class="as-srv-tool-img w-6 h-6 object-contain"
            src="https://imgs.search.brave.com/MRFs6m9rhw5S9cvefTiaK0mus-0DoTUqfrJWM7vjir0/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L3RfbGFyZ2UsZl9h/dXRvL3Byb2R1Y3Rz/Lzg4MjIxMTgvMS5q/cGc"
            alt="CDR">
        </div>
      </a>
      <a href="{{ route('services.creative.show', 'video-after-effects') }}" class="as-srv-card as-srv-new block group">
        <span class="as-srv-icon flex justify-center mb-6"><img
            src="https://cdn.svglogos.dev/logos/adobe-after-effects.svg"
            class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300" alt="Ae"></span>
        <div class="as-srv-name mt-2">Video After Effects</div>
        <div class="as-srv-tools">
          <img class="as-srv-tool-img w-6 h-6 object-contain"
            src="https://cdn.svglogos.dev/logos/adobe-after-effects.svg" alt="Ae">
        </div>
      </a>
      <a href="{{ route('services.creative.show', 'video-editing') }}" class="as-srv-card as-srv-new block group">
        <span class="as-srv-icon flex justify-center mb-6"><img src="https://cdn.svglogos.dev/logos/adobe-premiere.svg"
            class="w-12 h-12 object-contain group-hover:scale-110 transition-transform duration-300" alt="Pr"></span>
        <div class="as-srv-name mt-2">Video Editing</div>
        <div class="as-srv-tools">
          <img class="as-srv-tool-img w-6 h-6 object-contain" src="https://cdn.svglogos.dev/logos/adobe-premiere.svg"
            alt="Pr">
          <img class="as-srv-tool-img w-6 h-6 object-contain"
            src="https://imgs.search.brave.com/SGndp4503Aazenjx84FAysRQpgvtoaAoCp3PdpUPYzw/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/cmlwcGxldHJhaW5p/bmcuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDE4LzAyL2Rh/dmluY2ktcmVzb2x2/ZS0xNC1sb2dvLnBu/Zw"
            alt="DV">
        </div>
      </a>
    </div>

  </div>
</section>

{{-- ════════ TICKER ════════ --}}
<div class="as-ticker-wrap">
  <div class="as-ticker">
    <span>✦ Logo Animation</span><span>—</span>
    <span>✦ Logo Design</span><span>—</span>
    <span>✦ Grafix &amp; Design</span><span>—</span>
    <span>✦ Video After Effects</span><span>—</span>
    <span>✦ Video Editing</span><span>—</span>
    <span>✦ Enterprise Software</span><span>—</span>
    <span>✦ Mobile App Dev</span><span>—</span>
    <span>✦ Logo Animation</span><span>—</span>
    <span>✦ Logo Design</span><span>—</span>
    <span>✦ Grafix &amp; Design</span><span>—</span>
    <span>✦ Video After Effects</span><span>—</span>
    <span>✦ Video Editing</span><span>—</span>
    <span>✦ Enterprise Software</span><span>—</span>
    <span>✦ Mobile App Dev</span><span>—</span>
  </div>
</div>

{{-- ════════ FLOATING MODAL ════════ --}}
<div id="as-modal">
  <div class="as-modal-hdr">
    <span class="as-modal-tag">✦ — New Services</span>
    <button class="as-modal-x" onclick="asCloseModal()" aria-label="Close">✕</button>
  </div>
  <div class="as-modal-body">
    <div class="as-modal-hl">We just levelled up<br>our <span class="as-hl-g">creative</span> game</div>
    <div class="as-modal-svcs">
      <div class="as-modal-row">
        <div class="as-dot"></div>Logo Animation
      </div>
      <div class="as-modal-row">
        <div class="as-dot"></div>Grafix &amp; Design
      </div>
      <div class="as-modal-row">
        <div class="as-dot"></div>Logo Design
      </div>
      <div class="as-modal-row">
        <div class="as-dot"></div>Video After Effects
      </div>
      <div class="as-modal-row">
        <div class="as-dot"></div>Video Editing
      </div>
    </div>
    <button class="as-modal-cta"
      onclick="window.location.href='{{ route('services.creative.show', 'logo-animation') }}'">
      Explore New Services &nbsp;↗
    </button>
    <div class="as-modal-tools">
      <div class="as-mtool"><img class="w-5 h-5 object-contain"
          src="https://cdn.svglogos.dev/logos/adobe-after-effects.svg" alt="">Ae</div>
      <div class="as-mtool"><img class="w-5 h-5 object-contain" src="https://cdn.svglogos.dev/logos/adobe-photoshop.svg"
          alt="">Ps</div>
      <div class="as-mtool"><img class="w-5 h-5 object-contain" src="https://cdn.svglogos.dev/logos/adobe-premiere.svg"
          alt="">Pr</div>
      <div class="as-mtool"><img class="w-5 h-5 object-contain"
          src="https://imgs.search.brave.com/SGndp4503Aazenjx84FAysRQpgvtoaAoCp3PdpUPYzw/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly93d3cu/cmlwcGxldHJhaW5p/bmcuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDE4LzAyL2Rh/dmluY2ktcmVzb2x2/ZS0xNC1sb2dvLnBu/Zw"
          alt="">DV</div>
      <div class="as-mtool"><img class="w-5 h-5 object-contain"
          src="https://cdn.svglogos.dev/logos/adobe-illustrator.svg" alt="">Ai</div>
      <div class="as-mtool"><img class="w-5 h-5 object-contain"
          src="https://imgs.search.brave.com/MRFs6m9rhw5S9cvefTiaK0mus-0DoTUqfrJWM7vjir0/rs:fit:500:0:1:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L3RfbGFyZ2UsZl9h/dXRvL3Byb2R1Y3Rz/Lzg4MjIxMTgvMS5q/cGc"
          alt="">CDR</div>
      <div class="as-mtool"><img class="w-5 h-5 object-contain" src="https://cdn.svglogos.dev/logos/adobe-indesign.svg"
          alt="">Id</div>
    </div>
  </div>
</div>
<button id="as-reopen" onclick="asOpenModal()">✦ New Services</button>

@push('scripts')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
<script>
  (function () {
    // Hide navbar and remove main pt-20 while curtain is active
    document.body.classList.add('as-unveiling');
    var nav = document.getElementById('navbar');
    if (nav) nav.classList.add('as-hidden-nav');

    // 1. Fade out curtain text after 1.8s
    setTimeout(function () {
      var ct = document.getElementById('as-curtain-text');
      if (ct) ct.classList.add('as-hidden');
    }, 1800);

    // 2. Open curtains at 2.4s
    setTimeout(function () {
      var cl = document.getElementById('as-curtain-left');
      var cr = document.getElementById('as-curtain-right');
      if (cl) cl.classList.add('as-open');
      if (cr) cr.classList.add('as-open');
    }, 2400);

    // 3. Reveal navbar at 3.8s (after curtain is open)
    setTimeout(function () {
      document.body.classList.remove('as-unveiling');
      if (nav) {
        nav.classList.remove('as-hidden-nav');
        nav.classList.add('as-revealed');
      }
    }, 3800);

    // 4. Show floating modal at 4s
    setTimeout(function () {
      var m = document.getElementById('as-modal');
      if (m) m.classList.add('as-visible');
    }, 4000);

    // 5. Remove curtain panels after animation ends (cleanup)
    setTimeout(function () {
      var cl = document.getElementById('as-curtain-left');
      var cr = document.getElementById('as-curtain-right');
      var ct = document.getElementById('as-curtain-text');
      if (cl) cl.style.display = 'none';
      if (cr) cr.style.display = 'none';
      if (ct) ct.style.display = 'none';
    }, 5500);
  })();

  function asCloseModal() {
    var m = document.getElementById('as-modal');
    if (!m) return;
    m.style.transition = 'transform .4s ease,opacity .3s ease';
    m.style.transform = 'translateY(150px) scale(.92)';
    m.style.opacity = '0';
    setTimeout(function () {
      m.style.display = 'none';
      var btn = document.getElementById('as-reopen');
      if (btn) { btn.style.display = 'flex'; }
    }, 400);
  }

  function asOpenModal() {
    var m = document.getElementById('as-modal');
    var btn = document.getElementById('as-reopen');
    if (!m) return;
    m.style.display = '';
    m.style.transform = 'translateY(150px) scale(.92)';
    m.style.opacity = '0';
    m.style.transition = 'transform .7s cubic-bezier(.34,1.56,.64,1),opacity .5s ease';
    requestAnimationFrame(function () {
      requestAnimationFrame(function () {
        m.style.transform = 'translateY(0) scale(1)';
        m.style.opacity = '1';
      });
    });
    if (btn) btn.style.display = 'none';
  }
</script>
@endpush

{{-- ════════════════════════════════════════════════════ --}}
{{-- OLD HERO (commented out — preserved for rollback) --}}
{{-- ════════════════════════════════════════════════════ --}}
{{-- @section content starts below, old hero is replaced --}}

<!-- EXISTING PAGE CONTENT CONTINUES BELOW ↓ -->
<section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-slate-50 via-white to-cyan-50"
  style="display:none !important;"><!-- OLD HERO START -->
  <!-- Animated Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div
      class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-cyan-500/10 to-teal-500/10 rounded-full blur-3xl animate-pulse">
    </div>
    <div
      class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-500/10 to-cyan-500/10 rounded-full blur-3xl animate-pulse"
      style="animation-delay: 2s;"></div>
    <div
      class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-r from-teal-200/5 to-cyan-200/5 rounded-full blur-3xl">
    </div>
  </div>

  <div class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
    <!-- Top Hero Content -->
    <div class="grid lg:grid-cols-2 gap-8 sm:gap-12 lg:gap-16 items-center mb-16 sm:mb-20">
      <!-- Left Column - Content -->
      <div class="order-2 lg:order-1 fade-in-up">
        <div class="mb-8">
          <span
            class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 slide-in-left bg-teal-50 px-4 py-2 rounded-full border border-teal-100"
            style="transition-delay: 100ms;">
            <div class="w-2 h-2 bg-teal-500 rounded-full animate-pulse"></div>
            ASCEND STRATUS
          </span>
          <h1
            class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-gray-900 mb-8 leading-[1.1] fade-in-scale"
            style="transition-delay: 200ms;">
            Next-gen software
            <span
              class="block bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">for
              ambitious</span>
            <span class="block">African businesses.</span>
          </h1>
        </div>

        <p class="text-lg sm:text-xl lg:text-2xl text-gray-600 mb-10 leading-relaxed max-w-2xl slide-in-left"
          style="transition-delay: 300ms;">
          We are a full-service digital transformation partner, helping you build and scale your business with
          cutting-edge technology that drives real results.
        </p>

        <!-- Trust Indicators with Icons -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10 slide-in-left" style="transition-delay: 350ms;">
          <div
            class="flex items-center gap-3 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:shadow-lg hover:scale-105 transition-all duration-300">
            <div class="w-10 h-10 bg-teal-100 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-teal-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <span class="block text-sm font-bold text-gray-900">ISO 27001</span>
              <span class="text-xs text-gray-500">Certified</span>
            </div>
          </div>
          <div
            class="flex items-center gap-3 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:shadow-lg hover:scale-105 transition-all duration-300">
            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                  clip-rule="evenodd"></path>
              </svg>
            </div>
            <div>
              <span class="block text-sm font-bold text-gray-900">99.9%</span>
              <span class="text-xs text-gray-500">Uptime SLA</span>
            </div>
          </div>
          <div
            class="flex items-center gap-3 bg-white/90 backdrop-blur-sm rounded-xl px-4 py-3 shadow-sm border border-gray-100 hover:shadow-lg hover:scale-105 transition-all duration-300">
            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
              <svg class="w-5 h-5 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                </path>
              </svg>
            </div>
            <div>
              <span class="block text-sm font-bold text-gray-900">24/7</span>
              <span class="text-xs text-gray-500">Support</span>
            </div>
          </div>
        </div>

        <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 items-stretch sm:items-center mb-12 fade-in-up"
          style="transition-delay: 400ms;">
          <a href='/contact'
            class="group relative bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl hover:shadow-teal-500/30 transition-all duration-500 hover:scale-105 overflow-hidden w-full sm:w-auto">
            <div
              class="absolute inset-0 bg-gradient-to-r from-teal-700 via-cyan-700 to-blue-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            </div>
            <span class="relative flex items-center justify-center gap-2">
              Get Started Today
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
              </svg>
            </span>
          </a>
          <a href='/portfolio'
            class="group border-2 border-gray-300 text-gray-700 px-8 py-4 rounded-2xl text-lg font-semibold hover:border-teal-600 hover:text-teal-600 hover:bg-teal-50 transition-all duration-300 backdrop-blur-sm bg-white/50 w-full sm:w-auto">
            <span class="flex items-center justify-center gap-2">
              <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                </path>
              </svg>
              View Our Work
            </span>
          </a>
        </div>

        <!-- Client Logos / Trusted By -->
        <div class="slide-in-left" style="transition-delay: 500ms;">
          <p class="text-sm text-gray-500 mb-4 font-medium">Trusted by industry leaders across Africa</p>
          <div class="flex items-center gap-6 flex-wrap">
            <div class="flex items-center gap-2 bg-white/80 rounded-lg px-4 py-2 border border-gray-100">
              <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
              <span class="text-sm font-semibold text-gray-700">50+ Active Clients</span>
            </div>
            <div class="flex items-center gap-2 bg-white/80 rounded-lg px-4 py-2 border border-gray-100">
              <div class="w-2 h-2 bg-blue-500 rounded-full animate-pulse" style="animation-delay: 1s;"></div>
              <span class="text-sm font-semibold text-gray-700">12+ Countries</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column - Image with Floating Cards -->
      <div class="order-1 lg:order-2 slide-in-right" style="transition-delay: 200ms;">
        <div class="relative group">
          <!-- Main Image -->
          <div class="relative overflow-hidden rounded-3xl shadow-2xl">
            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?auto=format&fit=crop&w=1920&q=80"
              alt="African technology professionals in modern corporate office developing innovative software solutions"
              loading="eager"
              class="w-full h-[350px] sm:h-[450px] lg:h-[550px] object-cover group-hover:scale-110 transition-transform duration-700">
            <div
              class="absolute inset-0 bg-gradient-to-br from-teal-600/20 via-cyan-600/10 to-blue-600/20 group-hover:opacity-75 transition-opacity duration-500">
            </div>
          </div>

          <!-- Floating Elements -->
          <div
            class="absolute -top-6 -right-6 w-28 h-28 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-3xl shadow-2xl flex flex-col items-center justify-center floating border border-teal-200"
            style="animation-delay: 1s;">
            <svg class="w-10 h-10 text-white mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z">
              </path>
            </svg>
            <span class="text-xs text-white font-bold">Fast</span>
          </div>

          <div
            class="absolute -bottom-6 -left-6 w-36 h-24 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-4 floating border border-gray-200"
            style="animation-delay: 2s;">
            <div
              class="text-3xl font-extrabold bg-gradient-to-r from-teal-600 to-cyan-600 bg-clip-text text-transparent">
              12+</div>
            <div class="text-xs text-gray-600 font-semibold">Years Experience</div>
          </div>

          <div
            class="absolute top-1/2 -left-8 w-24 h-24 bg-white/95 backdrop-blur-sm rounded-2xl shadow-2xl p-3 floating flex flex-col items-center justify-center border border-gray-200"
            style="animation-delay: 3s;">
            <div class="text-2xl font-extrabold text-green-600">98%</div>
            <div class="text-[10px] text-gray-600 font-semibold text-center">Success Rate</div>
          </div>

          <!-- Background Decoration -->
          <div
            class="absolute -z-10 -top-8 -right-8 w-72 h-72 bg-gradient-to-br from-teal-300/20 to-cyan-300/20 rounded-full blur-3xl">
          </div>
          <div
            class="absolute -z-10 -bottom-8 -left-8 w-72 h-72 bg-gradient-to-tr from-blue-300/20 to-teal-300/20 rounded-full blur-3xl">
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Statistics Section with Glassmorphism -->
    <div
      class="relative bg-gradient-to-r from-gray-900 via-slate-900 to-gray-900 rounded-3xl p-8 sm:p-12 lg:p-16 mb-20 text-white overflow-hidden shadow-2xl">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-full h-full">
          <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
              <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                <path d="M 10 0 L 0 0 0 10" fill="none" stroke="white" stroke-width="0.5" />
              </pattern>
            </defs>
            <rect width="100" height="100" fill="url(#grid)" />
          </svg>
        </div>
      </div>

      <!-- Animated gradient orbs -->
      <div
        class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-teal-500/20 to-cyan-500/20 rounded-full blur-3xl animate-pulse">
      </div>
      <div
        class="absolute bottom-0 left-0 w-64 h-64 bg-gradient-to-tr from-blue-500/20 to-teal-500/20 rounded-full blur-3xl animate-pulse"
        style="animation-delay: 2s;"></div>

      <div class="relative z-10">
        <div class="text-center mb-16 fade-in-up">
          <h2
            class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-6 bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">
            Delivering Results That Matter</h2>
          <p class="text-lg sm:text-xl text-cyan-100 max-w-3xl mx-auto">Our track record speaks for itself - trusted by
            businesses worldwide</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
          <div class="text-center fade-in-up group" style="transition-delay: 100ms;">
            <div class="relative">
              <div
                class="absolute inset-0 bg-gradient-to-r from-teal-500/20 to-cyan-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300">
              </div>
              <div
                class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-teal-400/50 transition-all duration-300">
                <div
                  class="text-5xl lg:text-6xl font-extrabold mb-2 bg-gradient-to-r from-teal-400 to-cyan-400 bg-clip-text text-transparent">
                  <span class="counter" data-target="12">0</span>+
                </div>
                <div class="text-base text-cyan-100 font-medium">Years Experience</div>
              </div>
            </div>
          </div>
          <div class="text-center fade-in-up group" style="transition-delay: 200ms;">
            <div class="relative">
              <div
                class="absolute inset-0 bg-gradient-to-r from-green-500/20 to-emerald-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300">
              </div>
              <div
                class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-green-400/50 transition-all duration-300">
                <div
                  class="text-5xl lg:text-6xl font-extrabold mb-2 bg-gradient-to-r from-green-400 to-emerald-400 bg-clip-text text-transparent">
                  <span class="counter" data-target="98">0</span>%
                </div>
                <div class="text-base text-cyan-100 font-medium">Client Satisfaction</div>
              </div>
            </div>
          </div>
          <div class="text-center fade-in-up group" style="transition-delay: 300ms;">
            <div class="relative">
              <div
                class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300">
              </div>
              <div
                class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-blue-400/50 transition-all duration-300">
                <div
                  class="text-5xl lg:text-6xl font-extrabold mb-2 bg-gradient-to-r from-blue-400 to-indigo-400 bg-clip-text text-transparent">
                  <span class="counter" data-target="50">0</span>+
                </div>
                <div class="text-base text-cyan-100 font-medium">Projects Delivered</div>
              </div>
            </div>
          </div>
          <div class="text-center fade-in-up group" style="transition-delay: 400ms;">
            <div class="relative">
              <div
                class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-2xl blur-xl group-hover:blur-2xl transition-all duration-300">
              </div>
              <div
                class="relative bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/20 group-hover:border-purple-400/50 transition-all duration-300">
                <div
                  class="text-5xl lg:text-6xl font-extrabold mb-2 bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">
                  <span class="counter" data-target="15">0</span>+
                </div>
                <div class="text-base text-cyan-100 font-medium">Team Members</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OUR SERVICES SECTION -->
<section class="relative py-24 md:py-32 bg-white overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute inset-0 overflow-hidden">
    <div
      class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-teal-400/10 to-cyan-400/10 rounded-full blur-3xl">
    </div>
    <div
      class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-tr from-blue-400/10 to-teal-400/10 rounded-full blur-3xl">
    </div>
  </div>

  <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-20 fade-in-up">
      <span
        class="inline-flex items-center gap-2 text-teal-600 font-semibold text-sm uppercase tracking-wide mb-6 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Our Expertise
      </span>
      <h2 class="text-4xl lg:text-6xl font-extrabold text-gray-900 mb-6">
        Transforming Business Through
        <span
          class="block bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 bg-clip-text text-transparent">Innovative
          Technology</span>
      </h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        We deliver cutting-edge solutions that drive growth, efficiency, and innovation across Africa's most dynamic
        industries.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
      <!-- Enterprise Software -->
      <div
        class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-teal-200 fade-in-up relative overflow-hidden hover:-translate-y-2">
        <div
          class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-teal-50 to-cyan-50 rounded-full -translate-y-20 translate-x-20 group-hover:scale-150 transition-transform duration-500">
        </div>
        <div class="relative z-10">
          <div
            class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
            </svg>
          </div>
          <span
            class="inline-block bg-gradient-to-r from-teal-500 to-cyan-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 shadow-md">FLAGSHIP</span>
          <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-teal-600 transition-colors">Enterprise
            Software</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Comprehensive fintech and SaaS solutions including payment processing, digital banking, and AI-powered
            business intelligence designed for African markets.
          </p>
          <a href="{{ url('/services') }}"
            class="inline-flex items-center text-teal-600 font-semibold hover:text-teal-700 transition-colors group">
            Explore Solutions
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Mobile App Development -->
      <div
        class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-emerald-200 fade-in-up relative overflow-hidden hover:-translate-y-2"
        style="transition-delay: 100ms;">
        <div
          class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-emerald-50 to-green-50 rounded-full -translate-y-20 translate-x-20 group-hover:scale-150 transition-transform duration-500">
        </div>
        <div class="relative z-10">
          <div
            class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-green-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 18h.01M8 21h8a1 1 0 001-1V4a1 1 0 00-1-1H8a1 1 0 00-1 1v16a1 1 0 001 1z" />
            </svg>
          </div>
          <span
            class="inline-block bg-gradient-to-r from-emerald-500 to-green-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 shadow-md">POPULAR</span>
          <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-emerald-600 transition-colors">Mobile App
            Development</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Native iOS/Android and cross-platform applications with M-Pesa integration, offline capabilities, and
            multi-language support for African markets.
          </p>
          <a href="{{ url('/services') }}"
            class="inline-flex items-center text-emerald-600 font-semibold hover:text-emerald-700 transition-colors group">
            View Portfolio
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- E-Commerce Solutions -->
      <div
        class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-purple-200 fade-in-up relative overflow-hidden hover:-translate-y-2"
        style="transition-delay: 200ms;">
        <div
          class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-purple-50 to-indigo-50 rounded-full -translate-y-20 translate-x-20 group-hover:scale-150 transition-transform duration-500">
        </div>
        <div class="relative z-10">
          <div
            class="w-16 h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
          </div>
          <span
            class="inline-block bg-gradient-to-r from-purple-500 to-indigo-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4 shadow-md">TRENDING</span>
          <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors">E-Commerce
            Solutions</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Tailored online stores and marketplace platforms with African payment integration, mobile-first design, and
            multi-currency support.
          </p>
          <a href="{{ url('/services') }}"
            class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700 transition-colors group">
            Get Started
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Digital Transformation -->
      <div
        class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-blue-200 fade-in-up relative overflow-hidden hover:-translate-y-2"
        style="transition-delay: 300ms;">
        <div
          class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-blue-50 to-cyan-50 rounded-full -translate-y-20 translate-x-20 group-hover:scale-150 transition-transform duration-500">
        </div>
        <div class="relative z-10">
          <div
            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-blue-600 transition-colors">Digital
            Transformation</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Comprehensive modernization of business processes with AI, machine learning, cloud computing, and data
            analytics solutions.
          </p>
          <a href="{{ url('/services') }}"
            class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-700 transition-colors group">
            Learn More
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Web Applications -->
      <div
        class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-orange-200 fade-in-up relative overflow-hidden hover:-translate-y-2"
        style="transition-delay: 400ms;">
        <div
          class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-orange-50 to-red-50 rounded-full -translate-y-20 translate-x-20 group-hover:scale-150 transition-transform duration-500">
        </div>
        <div class="relative z-10">
          <div
            class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-orange-600 transition-colors">Web
            Applications</h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            High-performance web applications using Laravel, modern JavaScript frameworks, and cloud-native
            architectures for scalability.
          </p>
          <a href="{{ url('/services') }}"
            class="inline-flex items-center text-orange-600 font-semibold hover:text-orange-700 transition-colors group">
            View Projects
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Tech Consulting -->
      <div
        class="group bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100 hover:border-gray-300 fade-in-up relative overflow-hidden hover:-translate-y-2"
        style="transition-delay: 500ms;">
        <div
          class="absolute top-0 right-0 w-40 h-40 bg-gradient-to-br from-gray-50 to-slate-50 rounded-full -translate-y-20 translate-x-20 group-hover:scale-150 transition-transform duration-500">
        </div>
        <div class="relative z-10">
          <div
            class="w-16 h-16 bg-gradient-to-br from-gray-600 to-slate-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300 shadow-lg">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-gray-700 transition-colors">Tech Consulting
          </h3>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Strategic technology consulting, architecture design, and dedicated development teams to accelerate your
            digital initiatives.
          </p>
          <a href="{{ route('contact') }}"
            class="inline-flex items-center text-gray-700 font-semibold hover:text-gray-900 transition-colors group">
            Get Consultation
            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Services CTA -->
    <div class="text-center fade-in-up">
      <a href="{{ url('/services') }}"
        class="inline-flex items-center gap-2 bg-gradient-to-r from-teal-600 via-cyan-600 to-blue-600 text-white px-10 py-5 rounded-2xl text-lg font-bold hover:shadow-2xl hover:shadow-teal-500/30 transition-all duration-300 hover:scale-105">
        View All Services
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
        </svg>
      </a>
    </div>
  </div>
</section>

<!-- HOW WE WORK SECTION -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 via-white to-cyan-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-20 fade-in-up">
      <span
        class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        Our Process
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">How We Bring Your Ideas to Life</h2>
      <div class="w-24 h-1.5 bg-gradient-to-r from-teal-600 to-cyan-600 mx-auto mb-6 rounded-full"></div>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        We follow a proven, transparent process to ensure your project is a success from start to finish.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
      <!-- Connecting Lines -->
      <div
        class="hidden lg:block absolute top-24 left-0 w-full h-px bg-gradient-to-r from-teal-200 via-cyan-200 to-blue-200">
      </div>

      <!-- Step 1 -->
      <div class="text-center fade-in-up relative z-10" style="transition-delay: 100ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-teal-400 to-cyan-400 rounded-full blur-xl opacity-50">
          </div>
          <div
            class="relative w-24 h-24 mx-auto bg-gradient-to-br from-teal-500 to-cyan-500 rounded-full flex items-center justify-center shadow-2xl ring-8 ring-white transform hover:scale-110 transition-transform duration-300">
            <span class="text-4xl font-extrabold text-white">1</span>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Discovery & Strategy</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          We start by understanding your vision, goals, and challenges. This phase includes market research and creating
          a detailed roadmap.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="text-center fade-in-up relative z-10" style="transition-delay: 200ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 to-blue-400 rounded-full blur-xl opacity-50">
          </div>
          <div
            class="relative w-24 h-24 mx-auto bg-gradient-to-br from-cyan-500 to-blue-500 rounded-full flex items-center justify-center shadow-2xl ring-8 ring-white transform hover:scale-110 transition-transform duration-300">
            <span class="text-4xl font-extrabold text-white">2</span>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Design & Prototyping</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Our team creates intuitive UI/UX designs and interactive prototypes focused on user-centric design for a
          seamless experience.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="text-center fade-in-up relative z-10" style="transition-delay: 300ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-indigo-400 rounded-full blur-xl opacity-50">
          </div>
          <div
            class="relative w-24 h-24 mx-auto bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center shadow-2xl ring-8 ring-white transform hover:scale-110 transition-transform duration-300">
            <span class="text-4xl font-extrabold text-white">3</span>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Development & Testing</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          Using agile methodologies, our developers write clean, scalable code. Rigorous testing ensures a bug-free,
          high-performance product.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="text-center fade-in-up relative z-10" style="transition-delay: 400ms;">
        <div class="relative inline-block mb-6">
          <div class="absolute inset-0 bg-gradient-to-br from-indigo-400 to-purple-400 rounded-full blur-xl opacity-50">
          </div>
          <div
            class="relative w-24 h-24 mx-auto bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full flex items-center justify-center shadow-2xl ring-8 ring-white transform hover:scale-110 transition-transform duration-300">
            <span class="text-4xl font-extrabold text-white">4</span>
          </div>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-4">Deployment & Support</h3>
        <p class="text-gray-600 text-sm leading-relaxed">
          We handle deployment and provide ongoing support to ensure your application runs smoothly and evolves with
          your business.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SHOWCASE / PORTFOLIO PREVIEW -->
<section class="py-24 md:py-32 bg-white">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-20 fade-in-up">
      <span
        class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        Our Work
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Success Stories from Real Clients</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        We've partnered with businesses across various industries to build exceptional digital products that drive
        results.
      </p>
    </div>

    <!-- Tabbed Showcase -->
    <div x-data="{ activeTab: 'fintech' }">
      <!-- Tabs -->
      <div class="flex justify-center mb-16 fade-in-up">
        <div class="bg-gray-100 p-2 rounded-2xl flex space-x-2 shadow-inner">
          <button @click="activeTab = 'fintech'"
            :class="{ 'bg-gradient-to-r from-teal-600 to-cyan-600 text-white shadow-lg': activeTab === 'fintech', 'text-gray-600 hover:text-gray-900': activeTab !== 'fintech' }"
            class="px-8 py-3 text-sm font-bold rounded-xl transition-all duration-300">
            FinTech
          </button>
          <button @click="activeTab = 'logistics'"
            :class="{ 'bg-gradient-to-r from-teal-600 to-cyan-600 text-white shadow-lg': activeTab === 'logistics', 'text-gray-600 hover:text-gray-900': activeTab !== 'logistics' }"
            class="px-8 py-3 text-sm font-bold rounded-xl transition-all duration-300">
            Logistics
          </button>
          <button @click="activeTab = 'healthcare'"
            :class="{ 'bg-gradient-to-r from-teal-600 to-cyan-600 text-white shadow-lg': activeTab === 'healthcare', 'text-gray-600 hover:text-gray-900': activeTab !== 'healthcare' }"
            class="px-8 py-3 text-sm font-bold rounded-xl transition-all duration-300">
            Healthcare
          </button>
        </div>
      </div>

      <!-- Tab Content -->
      <div class="relative">
        <!-- FinTech Panel -->
        <div x-show="activeTab === 'fintech'" x-transition:enter="transition ease-out duration-500"
          x-transition:enter-start="opacity-0 transform scale-95"
          x-transition:enter-end="opacity-100 transform scale-100">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative group">
              <div
                class="absolute -inset-1 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-3xl blur-lg opacity-25 group-hover:opacity-50 transition duration-500">
              </div>
              <div class="relative aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1554224155-8d04421a1f3a?auto=format&fit=crop&w=1920&q=80"
                  alt="Fintech application dashboard" class="w-full h-full object-cover">
              </div>
            </div>
            <div>
              <div class="inline-block bg-teal-100 text-teal-700 px-4 py-1 rounded-full text-sm font-bold mb-4">Featured
                Project</div>
              <h3 class="text-3xl font-extrabold text-gray-900 mb-4">Digital Banking Platform</h3>
              <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                A comprehensive digital banking solution with mobile payments, P2P transfers, and budgeting tools. We
                integrated with M-Pesa for seamless transactions, boosting user adoption by 60%.
              </p>
              <div class="flex flex-wrap gap-3 mb-8">
                <span
                  class="bg-teal-50 text-teal-700 text-sm font-bold px-4 py-2 rounded-full border border-teal-200">Laravel</span>
                <span
                  class="bg-cyan-50 text-cyan-700 text-sm font-bold px-4 py-2 rounded-full border border-cyan-200">React
                  Native</span>
                <span
                  class="bg-blue-50 text-blue-700 text-sm font-bold px-4 py-2 rounded-full border border-blue-200">M-Pesa
                  API</span>
              </div>
              <a href="{{ url('/portfolio') }}"
                class="inline-flex items-center text-teal-600 font-bold text-lg hover:text-teal-700 transition-colors group">
                View Full Portfolio
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Logistics Panel -->
        <div x-show="activeTab === 'logistics'" x-transition:enter="transition ease-out duration-500"
          x-transition:enter-start="opacity-0 transform scale-95"
          x-transition:enter-end="opacity-100 transform scale-100">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative group">
              <div
                class="absolute -inset-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-3xl blur-lg opacity-25 group-hover:opacity-50 transition duration-500">
              </div>
              <div class="relative aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1586528116311-0692421b3a9f?auto=format&fit=crop&w=1920&q=80"
                  alt="Logistics and supply chain management" class="w-full h-full object-cover">
              </div>
            </div>
            <div>
              <div class="inline-block bg-orange-100 text-orange-700 px-4 py-1 rounded-full text-sm font-bold mb-4">
                Featured Project</div>
              <h3 class="text-3xl font-extrabold text-gray-900 mb-4">LogiFlow Supply Chain</h3>
              <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                An end-to-end logistics platform for real-time tracking, fleet management, and route optimization.
                Reduced delivery times by 25% and improved operational efficiency.
              </p>
              <div class="flex flex-wrap gap-3 mb-8">
                <span
                  class="bg-orange-50 text-orange-700 text-sm font-bold px-4 py-2 rounded-full border border-orange-200">Node.js</span>
                <span
                  class="bg-red-50 text-red-700 text-sm font-bold px-4 py-2 rounded-full border border-red-200">Vue.js</span>
                <span
                  class="bg-amber-50 text-amber-700 text-sm font-bold px-4 py-2 rounded-full border border-amber-200">Google
                  Maps API</span>
              </div>
              <a href="{{ url('/portfolio') }}"
                class="inline-flex items-center text-orange-600 font-bold text-lg hover:text-orange-700 transition-colors group">
                View Full Portfolio
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Healthcare Panel -->
        <div x-show="activeTab === 'healthcare'" x-transition:enter="transition ease-out duration-500"
          x-transition:enter-start="opacity-0 transform scale-95"
          x-transition:enter-end="opacity-100 transform scale-100">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="relative group">
              <div
                class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-3xl blur-lg opacity-25 group-hover:opacity-50 transition duration-500">
              </div>
              <div class="relative aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba9996a?auto=format&fit=crop&w=1920&q=80"
                  alt="Healthcare technology" class="w-full h-full object-cover">
              </div>
            </div>
            <div>
              <div class="inline-block bg-blue-100 text-blue-700 px-4 py-1 rounded-full text-sm font-bold mb-4">Featured
                Project</div>
              <h3 class="text-3xl font-extrabold text-gray-900 mb-4">Telemedicine Platform</h3>
              <p class="text-gray-600 mb-6 text-lg leading-relaxed">
                A secure telemedicine app connecting patients with doctors for virtual consultations. Features include
                video calls, e-prescriptions, and electronic health records.
              </p>
              <div class="flex flex-wrap gap-3 mb-8">
                <span
                  class="bg-blue-50 text-blue-700 text-sm font-bold px-4 py-2 rounded-full border border-blue-200">Python
                  (Django)</span>
                <span
                  class="bg-indigo-50 text-indigo-700 text-sm font-bold px-4 py-2 rounded-full border border-indigo-200">Flutter</span>
                <span
                  class="bg-purple-50 text-purple-700 text-sm font-bold px-4 py-2 rounded-full border border-purple-200">WebRTC</span>
              </div>
              <a href="{{ url('/portfolio') }}"
                class="inline-flex items-center text-blue-600 font-bold text-lg hover:text-blue-700 transition-colors group">
                View Full Portfolio
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS SECTION -->
<section class="py-24 md:py-32 bg-gradient-to-br from-gray-50 via-white to-cyan-50">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center mb-20 fade-in-up">
      <span
        class="inline-block text-teal-600 font-semibold text-sm uppercase tracking-wide mb-4 bg-teal-50 px-5 py-2 rounded-full border border-teal-100">
        Testimonials
      </span>
      <h2 class="text-4xl lg:text-5xl font-extrabold text-gray-900 mb-6">Trusted by Industry Leaders</h2>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
        We're proud to have partnered with amazing companies and delivered outstanding results.
      </p>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div
        class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 fade-in-up"
        style="transition-delay: 100ms;">
        <div class="flex items-center mb-6">
          <img class="w-16 h-16 rounded-full mr-4 object-cover ring-4 ring-teal-50"
            src="https://randomuser.me/api/portraits/women/68.jpg" alt="Sarah Wairimu">
          <div>
            <div class="font-bold text-gray-900 text-lg">Sarah Wairimu</div>
            <div class="text-sm text-gray-600">Operations Director</div>
            <div class="text-xs text-teal-600 font-semibold">MedTech Solutions</div>
          </div>
        </div>
        <div class="flex mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <blockquote class="text-gray-700 leading-relaxed text-base">
          "Ascend Stratus delivered a custom mobile app that streamlined our patient management system. Their expertise
          resulted in a 40% increase in operational efficiency."
        </blockquote>
      </div>

      <!-- Testimonial 2 -->
      <div
        class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 fade-in-up"
        style="transition-delay: 200ms;">
        <div class="flex items-center mb-6">
          <img class="w-16 h-16 rounded-full mr-4 object-cover ring-4 ring-teal-50"
            src="https://randomuser.me/api/portraits/men/75.jpg" alt="John Omondi">
          <div>
            <div class="font-bold text-gray-900 text-lg">John Omondi</div>
            <div class="text-sm text-gray-600">CEO</div>
            <div class="text-xs text-teal-600 font-semibold">KenyaFresh Logistics</div>
          </div>
        </div>
        <div class="flex mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <blockquote class="text-gray-700 leading-relaxed text-base">
          "The logistics platform they built for us has been a game-changer. Real-time tracking and route optimization
          have cut our costs by 15%. Highly recommended!"
        </blockquote>
      </div>

      <!-- Testimonial 3 -->
      <div
        class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 fade-in-up"
        style="transition-delay: 300ms;">
        <div class="flex items-center mb-6">
          <img class="w-16 h-16 rounded-full mr-4 object-cover ring-4 ring-teal-50"
            src="https://randomuser.me/api/portraits/women/85.jpg" alt="Amina Yusuf">
          <div>
            <div class="font-bold text-gray-900 text-lg">Amina Yusuf</div>
            <div class="text-sm text-gray-600">Founder</div>
            <div class="text-xs text-teal-600 font-semibold">AgriConnect</div>
          </div>
        </div>
        <div class="flex mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
            </path>
          </svg>
        </div>
        <blockquote class="text-gray-700 leading-relaxed text-base">
          "Working with Ascend Stratus was a fantastic experience. They understood our vision for AgriConnect and
          delivered a robust platform that connects farmers to markets."
        </blockquote>
      </div>
    </div>
  </div>
</section>


<!-- Counter Animation Script -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

    const animateCounter = (counter) => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;
      const inc = target / speed;

      if (count < target) {
        counter.innerText = Math.ceil(count + inc);
        setTimeout(() => animateCounter(counter), 1);
      } else {
        counter.innerText = target;
      }
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
  });
</script>

@endsection