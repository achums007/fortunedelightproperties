@extends('layouts.app')

@php
    // Define the articles data dynamically to show rich and meaningful content based on $id
    $articles = [
        1 => [
            'title' => 'Dubai Real Estate Market Outlook 2026: Key Investment Opportunities',
            'category' => 'Market Report',
            'date' => 'June 5, 2026',
            'read_time' => '5 min read',
            'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1200&q=80',
            'author' => 'Imran Khan, Head of Research',
            'summary' => 'An in-depth analysis of Dubai\'s residential real estate growth, communities yielding the highest ROI, and what prime developments to watch.',
            'content' => '
                <p class="mb-6">Dubai\'s real estate sector continues its remarkable growth trajectory in 2026, driven by strong capital inflows, population growth, and high demand for luxury residences. In this comprehensive report, we highlight the core sectors and geographic locations presenting the strongest returns for international buyers.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">1. The Surge in Luxury Villa Communities</h3>
                <p class="mb-6">The post-pandemic demand for spacious, private residences shows no signs of slowing down. Luxury villa communities like Palm Jumeirah, Dubai Hills Estate, and Emirates Hills have experienced double-digit capital appreciation. We expect this trend to persist through 2026 due to limited supply of ready-to-move-in luxury waterfront properties.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">2. Top Communities for High Rental Yields</h3>
                <p class="mb-6">If your goal is immediate cash-flow and rental yield (ROI), focus on high-density luxury hubs. Currently, Jumeirah Lake Towers (JLT), Dubai Marina, and Business Bay are yielding average gross rental returns of 7.2% to 8.5% for studio and 1-bedroom apartments. Short-term holiday rentals in Downtown Dubai continue to yield even higher returns during peak tourist seasons.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">3. Premium Waterfront Locations</h3>
                <p class="mb-6">Emaar Beachfront and the newly announced Palm Jebel Ali projects represent premium, high-value waterfront locations. Investors targeting capital appreciation should consider pre-launch phases in these projects where prices are at their lowest entry points.</p>
                
                <blockquote class="border-l-4 border-gold-500 pl-4 py-2 my-8 italic text-slate-700 bg-slate-50 rounded-r-lg">
                    "Dubai\'s real estate market in 2026 is characterized by mature, sustainable growth. The emphasis is on high-quality construction, sustainable infrastructure, and prestigious developers."
                </blockquote>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">4. Future Market Indicators</h3>
                <p class="mb-6">As Dubai expands toward the south near the Al Maktoum International Airport and the Expo City area, we recommend looking into commercial and residential developments nearby. The airport expansion will significantly boost tourism and logistical demand, rendering the surrounding residential hubs prime investment targets over the next 5 to 10 years.</p>
            '
        ],
        2 => [
            'title' => 'Why Off-Plan Properties in Dubai Are Attracting Global Investors',
            'category' => 'Investment Guide',
            'date' => 'May 28, 2026',
            'read_time' => '4 min read',
            'image' => 'https://images.unsplash.com/photo-1582407947304-fd86f028f716?auto=format&fit=crop&w=1200&q=80',
            'author' => 'Sarah Sterling, Senior Investment Advisor',
            'summary' => 'Explore the benefits of buying off-plan properties, including pre-construction discounts, high potential capital appreciation, and flexible staging payments.',
            'content' => '
                <p class="mb-6">Dubai has established itself as a global beacon for off-plan property investment. Over 60% of all real estate transactions in the emirate now originate in the off-plan sector. But why are global investors favoring unconstructed developments over completed ones?</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">1. Buying at First-Phase Launch Prices</h3>
                <p class="mb-6">The most significant advantage of off-plan property is purchase price. Developers offer launching phases at prices substantially below market rate for completed properties in similar areas. As construction progresses, the value of the property increases, allowing investors to build immediate equity before handover.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">2. Flexible Developer Payment Plans</h3>
                <p class="mb-6">Unlike ready properties that require a 20% down payment and bank financing for the remainder, off-plan purchases come with highly flexible payment plans. These can range from 80/20 structures (where 80% is paid in stages during construction and 20% on completion) to post-handover payment plans where payments continue for 2-3 years after you move in.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">3. Customization and Brand New Amenities</h3>
                <p class="mb-6">Buying off-plan allows you to select premium layouts, higher floors, and specific views (like sea or skyline views). Furthermore, new developments feature state-of-the-art gymnasiums, infinity pools, smart home systems, and eco-friendly features that appeal to premium renters.</p>
                
                <blockquote class="border-l-4 border-gold-500 pl-4 py-2 my-8 italic text-slate-700 bg-slate-50 rounded-r-lg">
                    "Off-plan real estate allows investors to gain a foothold in Dubai\'s luxury market with lower capital requirements and flexible timelines."
                </blockquote>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">4. Mitigating Off-Plan Investment Risks</h3>
                <p class="mb-6">While highly profitable, off-plan investing requires careful planning. We advise working only with reputable, government-approved developers (like Emaar, Nakheel, and DAMAC) who utilize escrow accounts. In Dubai, all payment installments must be deposited directly into a RERA-regulated escrow account, securing investor capital.</p>
            '
        ],
        3 => [
            'title' => 'Navigating the Dubai Golden Visa: A Guide for Property Buyers',
            'category' => 'Legal Guide',
            'date' => 'May 15, 2026',
            'read_time' => '6 min read',
            'image' => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1200&q=80',
            'author' => 'Tariq Al-Mansoori, Legal Counsel',
            'summary' => 'Learn how buying real estate worth AED 2,000,000 or more qualifies you, your spouse, and your children for a 10-year residency Golden Visa.',
            'content' => '
                <p class="mb-6">Dubai\'s Golden Visa program has revolutionized the local property market, attracting entrepreneurs, digital nomads, and families seeking long-term residency in a secure and progressive city. Here is everything you need to know about qualifying through property ownership.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">1. The AED 2 Million Threshold</h3>
                <p class="mb-6">To qualify for a 10-year residency visa, the total value of your property holdings in Dubai must be equal to or greater than AED 2,000,000 (approximately USD 545,000). You can purchase a single property or a portfolio of multiple properties (e.g., two apartments worth AED 1 Million each) to satisfy this requirement.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">2. Eligible Property Types</h3>
                <p class="mb-6">The visa is applicable for residential properties, including freehold apartments, villas, townhouses, and penthouses. Commercial properties (like offices or retail units) can also qualify under specific conditions. Both ready properties and off-plan properties (from approved developers) are eligible.</p>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">3. Mortgaged Properties and Joint Ownership</h3>
                <p class="mb-6">If you purchase a property using a mortgage, you are still eligible for the Golden Visa, provided that the actual down payment made to the developer/seller is at least AED 2,000,000. In the case of joint ownership (e.g., husband and wife), the share of one individual must meet the AED 2 Million threshold, or the couple can apply jointly with marriage certificate verification.</p>
                
                <blockquote class="border-l-4 border-gold-500 pl-4 py-2 my-8 italic text-slate-700 bg-slate-50 rounded-r-lg">
                    "The Golden Visa provides investors with structural stability, 100% business ownership, tax residency benefits, and visa coverage for immediate family members and domestic staff."
                </blockquote>
                
                <h3 class="text-xl font-serif font-semibold text-slate-900 mt-8 mb-4">4. Step-by-Step Application Process</h3>
                <p class="mb-6">Once you receive the title deed for your property, you can apply through the Dubai Land Department (DLD) or the General Directorate of Residency and Foreigners Affairs (GDRFA). The process involves property valuation, medical screening, and fingerprinting for your Emirates ID. Our in-house legal experts handle all DLD coordination on behalf of our VIP clients.</p>
            '
        ],
    ];

    // Select the current article or fallback to a general template
    $post_id = intval($id);
    $post = isset($articles[$post_id]) ? $articles[$post_id] : [
        'title' => 'Investing in Dubai Luxury Real Estate',
        'category' => 'General Advisory',
        'date' => 'June 5, 2026',
        'read_time' => '5 min read',
        'image' => 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=1200&q=80',
        'author' => 'Fortune Delight Advisors',
        'summary' => 'Discover the best communities and practices for investing in Dubai\'s premier housing market.',
        'content' => '<p class="mb-6">Dubai real estate remains a powerful asset class for wealth preservation and cash generation. Explore our communities catalog or speak with our brokers for custom insights.</p>'
    ];
@endphp

@section('title', $post['title'] . ' - Fortune Delight Properties')

@section('content')
    <section class="hero-section">
        <h1>{{ $post['title'] }}</h1>
        <p>By {{ $post['author'] }} | Published on {{ $post['date'] }}</p>
    </section>

    <!-- Main Content Area & Sidebar -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Article Body (8 cols) -->
                <article class="lg:col-span-8">
                    <!-- Featured Image -->
                    <div class="aspect-w-16 aspect-h-9 rounded-2xl overflow-hidden mb-10 shadow-lg">
                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover">
                    </div>
                    
                    <!-- Text Content -->
                    <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed font-light text-base">
                        {!! $post['content'] !!}
                    </div>
                    
                    <!-- Back to Insights -->
                    <div class="border-t border-slate-100 pt-8 mt-12">
                        <a href="{{ route('blog') }}" class="inline-flex items-center text-xs font-semibold text-gold-600 hover:text-gold-700 tracking-wider uppercase gap-2">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                            Back to All Insights
                        </a>
                    </div>
                </article>
                
                <!-- Sidebar (4 cols) -->
                <aside class="lg:col-span-4 flex flex-col gap-8">
                    
                    <!-- Call To Action Card -->
                    <div class="bg-slate-900 text-white p-8 rounded-2xl border border-slate-850 relative overflow-hidden shadow-md">
                        <div class="absolute inset-0 bg-cover bg-center opacity-10" style="background-image: url('https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=600&q=80');"></div>
                        <div class="relative z-10 flex flex-col gap-5">
                            <h4 class="font-serif text-lg font-bold tracking-wide">Interested in this topic?</h4>
                            <p class="text-xs text-slate-350 leading-relaxed font-light">
                                Schedule a 1-on-1 private call with our broker specialists to clarify pricing plans, RERA regulations, or community details.
                            </p>
                            <a href="{{ route('contact') }}" class="text-center px-4 py-3 bg-gradient-to-r from-gold-400 to-gold-500 hover:from-gold-500 hover:to-gold-600 text-slate-900 font-bold rounded-lg text-xs transition-all shadow-md active:scale-95">
                                Talk to an Advisor
                            </a>
                        </div>
                    </div>
                    
                    <!-- Recent Insights -->
                    <div class="bg-slate-50 p-8 rounded-2xl border border-slate-100 flex flex-col gap-4">
                        <h4 class="font-serif text-lg font-bold text-slate-900 border-b border-slate-200 pb-3">Related Insights</h4>
                        <div class="flex flex-col gap-5">
                            @foreach([1, 2, 3] as $r_id)
                                @if($r_id != $post_id)
                                    @php
                                        $rel_titles = [
                                            1 => 'Dubai Real Estate Market Outlook 2026',
                                            2 => 'Why Off-Plan Properties Attract Investors',
                                            3 => 'Navigating the Dubai Golden Visa'
                                        ];
                                    @endphp
                                    <div class="flex flex-col gap-1">
                                        <span class="text-[9px] font-semibold text-gold-600 uppercase tracking-widest">Article</span>
                                        <a href="{{ route('blog.detail', ['id' => $r_id]) }}" class="text-slate-800 hover:text-gold-600 text-sm font-semibold transition-colors leading-snug">
                                            {{ $rel_titles[$r_id] }}
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>

                </aside>

            </div>
        </div>
    </section>
@endsection
