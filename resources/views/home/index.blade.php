@extends('layouts.web')

@section('title', 'SSD Partners | Cross-Border Legal Advisory')
@section('description', '')

@section('content')
<section class="hero">
    <div aria-hidden="true" class="hero-media"></div>
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="hero-inner">
        <div class="reveal visible">
            <div class="eyebrow">
                <span class="eyebrow-dot"></span>
                SSD Partners • TAMCHY • MUNICH • DUBAI • NEW YORK
            </div>
            <h1 class="font-bold">{!! __('hero.title') !!}</h1>
            <p>
                {!! __('hero.description') !!}
            </p>
            <div class="hero-cta">
                <a class="btn btn-primary" href="#expertise">View practices</a>
                <a class="btn btn-secondary" href="#approach">View expertise</a>
            </div>
            <div class="stats">
                <div class="stat">
                    <strong>4 hubs</strong>
                    <span>Focused presence across Tamchy, Munich, Dubai and New York with cross-border
                        capability.</span>
                </div>
                <div class="stat">
                    <strong>24/7</strong>
                    <span>Responsive support for transactions, disputes and time-sensitive matters.</span>
                </div>
                <div class="stat">
                    <strong>One team</strong>
                    <span>Integrated advisory across corporate, finance, regulatory and disputes.</span>
                </div>
            </div>
        </div>
        <aside class="hero-card reveal delay-2 visible">
            <h3>Where clients rely on us</h3>
            <ul>
                <li>
                    <div class="icon">◆</div>
                    <div>
                        <strong>When structure matters</strong><br>
                        For transactions, investments, joint ventures and ownership models where legal architecture
                        determines commercial outcome.
                    </div>
                </li>
                <li>
                    <div class="icon">◌</div>
                    <div>
                        <strong>When risk is material</strong><br>
                        For disputes, regulatory exposure, shareholder conflict, enforcement and sensitive
                        negotiations requiring discretion and control.
                    </div>
                </li>
                <li>
                    <div class="icon">✦</div>
                    <div>
                        <strong>When execution is cross-border</strong><br>
                        For matters involving multiple jurisdictions, local counsel, banks, regulators,
                        counterparties and strategic stakeholders.
                    </div>
                </li>
            </ul>
        </aside>
    </div>
</section>
<section id="expertise">
    <div class="container">
        <div class="section-title expertise-title reveal visible">
            <h2>Practices for complex cross-border mandates.</h2>
            <p>
                SSD Partners advises principals, founders, investors, boards and senior executives through focused
                practices where legal precision
                must be aligned with commercial strategy, capital structuring, regulatory exposure and risk control.
            </p>
            <p>
                We focus on high-value mandates that require senior judgment, discretion and the ability to
                coordinate work across
                jurisdictions, financial systems and stakeholder groups.
            </p>
        </div>
        <div class="cards">
            <article class="card reveal visible">
                <div class="mini">△</div>
                <h3>Corporate &amp; M&amp;A</h3>
                <p>Private deals, acquisitions, exits, restructurings, joint ventures and governance for businesses
                    and investors operating across multiple jurisdictions.</p>
            </article>
            <article class="card reveal delay-1 visible">
                <div class="mini">◇</div>
                <h3>Banking &amp; Finance</h3>
                <p>Acquisition, corporate and structured finance, debt arrangements, refinancing and strategic
                    capital solutions for borrowers, lenders, sponsors and investors.</p>
            </article>
            <article class="card reveal delay-2 visible">
                <div class="mini">▱</div>
                <h3>Real Estate &amp; Infrastructure</h3>
                <p>Acquisitions, disposals, development projects, joint ventures, financing structures and complex
                    real estate and infrastructure investments.</p>
            </article>
            <article class="card reveal visible">
                <div class="mini">✦</div>
                <h3>Private Capital &amp; Special Situations</h3>
                <p>Advisory for principals, family capital, founders and investors in sensitive transactions,
                    distressed situations and complex asset structures.</p>
            </article>
            <article class="card reveal delay-1 visible">
                <div class="mini">◫</div>
                <h3>Investment Funds &amp; Asset Management</h3>
                <p>Fund formation, investment structures, asset management mandates, family office arrangements and
                    regulatory matters for managers and institutional investors.</p>
            </article>
            <article class="card reveal delay-2 visible">
                <div class="mini">◎</div>
                <h3>Digital Assets &amp; FinTech</h3>
                <p>Legal architecture for digital assets, custody models, tokenisation, payment infrastructure and
                    emerging financial technologies.</p>
            </article>
            <article class="card reveal visible">
                <div class="mini">⬡</div>
                <h3>Regulatory &amp; Compliance</h3>
                <p>Licensing, AML/KYC, sanctions, financial regulation and governance frameworks for businesses
                    operating in regulated environments.</p>
            </article>
            <article class="card reveal delay-1 visible">
                <div class="mini">◈</div>
                <h3>Competition &amp; Antitrust</h3>
                <p>Merger control, foreign investment screening, competition compliance and strategic advice on
                    transactions involving market concentration or regulatory scrutiny.</p>
            </article>
            <article class="card reveal delay-2 visible">
                <div class="mini">✺</div>
                <h3>Disputes &amp; Resolution</h3>
                <p>Commercial disputes, enforcement strategy, negotiation and risk management with a board-level
                    mindset and cross-border coordination.</p>
            </article>
        </div>
    </div>
</section>
<section id="presence">
    <div class="container">
        <div class="section-title reveal visible">
            <h2>Global presence</h2>
        </div>
        <div class="media-grid">
            <article class="media-card reveal visible">
                <img alt="Tamchy SFIT business center at Lake Issyk-Kul"
                    src="https://premedia.vneconomy.vn/files/uploads/2026/06/03/c4cb895b4f254447a724d16b65aa8b56-94980.png">
                <div class="media-overlay">
                    <span class="media-tag">Tamchy SFIT</span>
                    <h3>Tamchy, Kyrgyzstan</h3>
                    <p>A financial and investment hub on the shores of Lake Issyk-Kul, giving the brand a
                        distinctive regional anchor and institutional context.</p>
                </div>
            </article>
            <article class="media-card reveal delay-1 visible">
                <img alt="Munich, Germany skyline"
                    src="https://images.pexels.com/photos/28274772/pexels-photo-28274772.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
                <div class="media-overlay">
                    <span class="media-tag">Munich</span>
                    <h3>Munich, Germany</h3>
                    <p>Positioned as the European hub for sophisticated cross-border transactions, regulatory
                        strategy and premium advisory work.</p>
                </div>
            </article>
            <article class="media-card reveal delay-2 visible">
                <img alt="Dubai, UAE skyline with Burj Khalifa"
                    src="https://images.pexels.com/photos/3787839/pexels-photo-3787839.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
                <div class="media-overlay">
                    <span class="media-tag">Dubai</span>
                    <h3>Dubai, UAE</h3>
                    <p>Supporting regional expansion, high-growth ventures and cross-border business into the Gulf
                        and beyond.</p>
                </div>
            </article>
            <article class="media-card reveal delay-3 visible">
                <img alt="New York, USA skyline"
                    src="https://images.pexels.com/photos/466685/pexels-photo-466685.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1200">
                <div class="media-overlay">
                    <span class="media-tag">New York</span>
                    <h3>New York, USA</h3>
                    <p>A key U.S. financial centre that reinforces the firm's global positioning across capital,
                        disputes and strategic transactions.</p>
                </div>
            </article>
        </div>
        <div class="coverage-panel reveal visible">
            <p>
                Through our trusted partner network, SSD Partners is also ready to represent clients’ interests
                across a broad range of jurisdictions.
                Coverage may include legal coordination, local counsel management, regulatory interaction and
                transaction support in:
            </p>
            <div aria-label="Partner jurisdiction coverage" class="coverage-countries">
                <span class="coverage-chip">Argentina</span>
                <span class="coverage-chip">Uruguay</span>
                <span class="coverage-chip">United Kingdom</span>
                <span class="coverage-chip">France</span>
                <span class="coverage-chip">Netherlands</span>
                <span class="coverage-chip">Belgium</span>
                <span class="coverage-chip">Portugal</span>
                <span class="coverage-chip">Spain</span>
                <span class="coverage-chip">Austria</span>
                <span class="coverage-chip">Cyprus</span>
                <span class="coverage-chip">Serbia</span>
                <span class="coverage-chip">Bulgaria</span>
                <span class="coverage-chip">Hungary</span>
                <span class="coverage-chip">Israel</span>
                <span class="coverage-chip">Russia</span>
                <span class="coverage-chip">Romania</span>
                <span class="coverage-chip">Armenia</span>
                <span class="coverage-chip">Kazakhstan</span>
                <span class="coverage-chip">Turkey</span>
                <span class="coverage-chip">China</span>
                <span class="coverage-chip">Indonesia</span>
                <span class="coverage-chip">Thailand</span>
                <span class="coverage-chip">Singapore</span>
                <span class="coverage-chip">Australia</span>
                <span class="coverage-chip">New Zealand</span>
            </div>
        </div>
    </div>
</section>
<section id="approach">
    <div class="container">
        <div class="panel reveal visible">
            <div class="experience-intro">
                <div>
                    <div class="practice-eyebrow">Selected experience in numbers</div>
                    <h3>Expertise demonstrated by the scale of completed work.</h3>
                    <p>
                        Rather than repeat our practice areas, this section highlights selected figures from
                        confirmed professional experience
                        across transactions, financing, disputes, capital markets and digital assets.
                    </p>
                </div>
            </div>

            <div class="experience-grid">
                <article class="experience-card">
                    <strong>17+ years</strong>
                    <span>professional legal practice</span>
                </article>
                <article class="experience-card">
                    <strong>$60+ mn</strong>
                    <span>procurement budget under management</span>
                </article>
                <article class="experience-card">
                    <strong>$120 mn</strong>
                    <span>restructured credit line</span>
                </article>
                <article class="experience-card">
                    <strong>$3.6+ mn</strong>
                    <span>aggregate claims in successfully completed disputes</span>
                </article>
                <article class="experience-card">
                    <strong>3 SPACs</strong>
                    <span>launched on NASDAQ</span>
                </article>
                <article class="experience-card">
                    <strong>23.1%</strong>
                    <span>stake involved in the Detsky Mir share-sale transaction</span>
                </article>
                <article class="experience-card">
                    <strong>€200+ mn</strong>
                    <span>investment volume in the Vestas project</span>
                </article>
                <article class="experience-card">
                    <strong>$100+ mn</strong>
                    <span>value of M&amp;A projects in the digital / blockchain sector</span>
                </article>
            </div>

            <div class="practice-architecture experience-architecture">
                <div class="practice-module sector-module">
                    <h4>Sector exposure</h4>
                    <p>
                        Experience spans sectors where capital intensity, regulatory exposure and operational
                        complexity
                        require disciplined legal and commercial judgment.
                    </p>
                    <div class="sector-cloud">
                        <span class="sector-chip">Energy</span>
                        <span class="sector-chip">Metals &amp; Mining</span>
                        <span class="sector-chip">Agriculture</span>
                        <span class="sector-chip">Soft Commodities</span>
                        <span class="sector-chip">Industrial Commodities</span>
                        <span class="sector-chip">Real Estate</span>
                        <span class="sector-chip">Blockchain Infrastructure</span>
                        <span class="sector-chip">Commercial Banking</span>
                        <span class="sector-chip">FinTech</span>
                        <span class="sector-chip">Digital Assets</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="publications-section" id="publications">
    <div class="container">
        <div class="publications-header reveal visible">
            <div>
                <h2>Publications &amp; Insights</h2>
            </div>
            <p>
                SSD Partners publishes practical analysis on cross-border transactions, financial regulation,
                private capital, digital assets and developments affecting international investors.
            </p>
        </div>
        <div class="grid lg:grid-cols-2 gap-6">
             @each('posts/post-row', $posts, 'post')
        </div>
    </div>
</section>
<section class="cta-section" id="contact">
    <div class="container">
        <div class="cta-card reveal">
            <h2>Start a conversation</h2>
            <p>
                We are available for principals, founders, investors, boards and senior executives who need a
                trusted legal adviser
                for complex, cross-border and high-value matters. Share only what is necessary at the first stage;
                we will agree
                the appropriate communication channel, confidentiality perimeter and next steps before moving into
                substantive work.
            </p>
            <div aria-label="SSD Partners contact form" class="contact-form-wrap">
                <form action="https://formsubmit.co/info@ssdp.legal" class="contact-form" id="lead-form"
                    method="POST">

                    <div class="form-field">
                        <label for="contact-name">Name</label>
                        <input autocomplete="name" id="lead-name" name="name" placeholder="Your name" required=""
                            type="text">
                    </div>
                    <div class="form-field">
                        <label for="contact-email">Email</label>
                        <input autocomplete="email" id="lead-email" name="email" placeholder="you@example.com"
                            required="" type="email">
                    </div>
                    <div class="form-field">
                        <label for="contact-message">How can we help?</label>
                        <textarea id="lead-message" maxlength="3000" name="message"
                            placeholder="Tell us briefly about your matter" required=""></textarea>
                    </div>
                    <p class="form-note">Your enquiry will be treated confidentially. Please do not include highly
                        sensitive information at this initial stage.</p>
                    <button class="btn btn-primary form-submit" type="submit">Send message</button>
                </form>
                <div class="hidden" id="lead-message-success" role="status">
                    Thank you. Your enquiry has been sent. A member of SSD Partners will review it and respond using
                    the contact details you provided.
                </div>
            </div>
            <div class="hero-cta contact-actions">
                <a class="btn btn-secondary" href="#top">Back to top</a>
            </div>
        </div>
    </div>
</section>
<script>
    const reveals = document.querySelectorAll('.reveal');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, {threshold: 0.14});

    reveals.forEach((el, index) => {
      if (!el.classList.contains('visible')) observer.observe(el);
    });
  </script>
@endsection