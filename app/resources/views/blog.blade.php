@extends('layouts.app')

@section('title', 'Insights - Fortune Delight Properties')

@section('content')
    <section class="hero-section">
        <h1>Property Insights & Market Reports</h1>
        <p>Stay Ahead with Dubai Real Estate Trends and Guides</p>
    </section>

    <!-- Blog Grid Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Post 1 -->
                <article class="bg-slate-50 border border-slate-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col h-full group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden relative bg-slate-950">
                        <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=600&q=80" alt="Dubai Downtown Skyline" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
                        <span class="absolute top-4 left-4 bg-slate-900/90 text-gold-400 backdrop-blur-sm px-3 py-1 rounded-md text-[10px] font-semibold tracking-widest uppercase">
                            Market Report
                        </span>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow gap-4">
                        <div class="flex items-center text-[10px] text-slate-400 gap-3">
                            <span>June 5, 2026</span>
                            <span class="h-1 w-1 rounded-full bg-slate-300"></span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="font-serif text-lg sm:text-xl font-bold text-slate-900 group-hover:text-gold-600 transition-colors">
                            <a href="{{ route('blog.detail', ['id' => 1]) }}">Dubai Real Estate Market Outlook 2026: Key Investment Opportunities</a>
                        </h3>
                        <p class="text-slate-500 text-sm font-light leading-relaxed flex-grow">
                            An in-depth analysis of Dubai's residential real estate growth, communities yielding the highest ROI, and what prime developments to watch.
                        </p>
                        <a href="{{ route('blog.detail', ['id' => 1]) }}" class="inline-flex items-center text-xs font-semibold text-gold-600 hover:text-gold-700 tracking-wider uppercase mt-2 gap-1 group/link">
                            Read Article
                            <svg class="h-3 w-3 transition-transform group-hover/link:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Post 2 -->
                <article class="bg-slate-50 border border-slate-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col h-full group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden relative bg-slate-950">
                        <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?auto=format&fit=crop&w=600&q=80" alt="Off-Plan Villa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
                        <span class="absolute top-4 left-4 bg-slate-900/90 text-gold-400 backdrop-blur-sm px-3 py-1 rounded-md text-[10px] font-semibold tracking-widest uppercase">
                            Investment Guide
                        </span>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow gap-4">
                        <div class="flex items-center text-[10px] text-slate-400 gap-3">
                            <span>May 28, 2026</span>
                            <span class="h-1 w-1 rounded-full bg-slate-300"></span>
                            <span>4 min read</span>
                        </div>
                        <h3 class="font-serif text-lg sm:text-xl font-bold text-slate-900 group-hover:text-gold-600 transition-colors">
                            <a href="{{ route('blog.detail', ['id' => 2]) }}">Why Off-Plan Properties in Dubai Are Attracting Global Investors</a>
                        </h3>
                        <p class="text-slate-500 text-sm font-light leading-relaxed flex-grow">
                            Explore the benefits of buying off-plan properties, including pre-construction discounts, high potential capital appreciation, and flexible staging payments.
                        </p>
                        <a href="{{ route('blog.detail', ['id' => 2]) }}" class="inline-flex items-center text-xs font-semibold text-gold-600 hover:text-gold-700 tracking-wider uppercase mt-2 gap-1 group/link">
                            Read Article
                            <svg class="h-3 w-3 transition-transform group-hover/link:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

                <!-- Post 3 -->
                <article class="bg-slate-50 border border-slate-100 rounded-2xl overflow-hidden hover:shadow-lg transition-all duration-300 flex flex-col h-full group">
                    <div class="aspect-w-16 aspect-h-9 overflow-hidden relative bg-slate-950">
                        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=600&q=80" alt="Residency Golden Visa" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-90">
                        <span class="absolute top-4 left-4 bg-slate-900/90 text-gold-400 backdrop-blur-sm px-3 py-1 rounded-md text-[10px] font-semibold tracking-widest uppercase">
                            Legal Guide
                        </span>
                    </div>
                    <div class="p-6 sm:p-8 flex flex-col flex-grow gap-4">
                        <div class="flex items-center text-[10px] text-slate-400 gap-3">
                            <span>May 15, 2026</span>
                            <span class="h-1 w-1 rounded-full bg-slate-300"></span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="font-serif text-lg sm:text-xl font-bold text-slate-900 group-hover:text-gold-600 transition-colors">
                            <a href="{{ route('blog.detail', ['id' => 3]) }}">Navigating the Dubai Golden Visa: A Guide for Property Buyers</a>
                        </h3>
                        <p class="text-slate-500 text-sm font-light leading-relaxed flex-grow">
                            Learn how buying real estate worth AED 2,000,000 or more qualifies you, your spouse, and your children for a 10-year residency Golden Visa.
                        </p>
                        <a href="{{ route('blog.detail', ['id' => 3]) }}" class="inline-flex items-center text-xs font-semibold text-gold-600 hover:text-gold-700 tracking-wider uppercase mt-2 gap-1 group/link">
                            Read Article
                            <svg class="h-3 w-3 transition-transform group-hover/link:translate-x-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-slate-50 border-t border-b border-slate-100 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center flex flex-col items-center gap-6">
            <h3 class="font-serif text-2xl sm:text-3xl font-bold text-slate-900">Subscribe to Our Market Insights</h3>
            <p class="text-slate-500 text-sm max-w-xl font-light">
                Receive weekly market reports, transaction updates, and notices about exclusive, invitation-only luxury property launches.
            </p>
            <form action="#" method="POST" class="w-full max-w-md flex flex-col sm:flex-row gap-3 mt-2" onsubmit="event.preventDefault(); alert('Subscribed successfully!');">
                <input type="email" placeholder="Your Email Address" required class="flex-grow px-4 py-3 rounded-lg border border-slate-200 bg-white focus:outline-none focus:border-gold-400 text-sm text-slate-900">
                <button type="submit" class="px-6 py-3.5 bg-slate-900 hover:bg-slate-850 text-white font-bold rounded-lg text-sm transition-colors flex-shrink-0">
                    Subscribe Now
                </button>
            </form>
        </div>
    </section>
@endsection
