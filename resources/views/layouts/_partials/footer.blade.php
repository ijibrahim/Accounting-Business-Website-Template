<footer id="footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="footer-brand">{{ $setting->site_name }}</div>
                <p class="footer-desc">{{ $setting->meta_description }}</p>
                <div class="footer-social">
                    <a href="{{ $setting->linkedin_url }}" class="social-btn" aria-label="LinkedIn"><i
                            class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-btn" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="{{ $setting->facebook_url }}" class="social-btn" aria-label="Facebook"><i
                            class="bi bi-facebook"></i></a>
                    <a href="{{ $setting->instagram_url }}" class="social-btn" aria-label="Instagram"><i
                            class="bi bi-instagram"></i></a>
                </div>
                <div style="margin-top:24px;display:flex;gap:10px;flex-wrap:wrap;">
                    <div
                        style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;padding:10px 14px;text-align:center;">
                        <div style="color:var(--gold);font-size:.72rem;font-weight:700;letter-spacing:1px;">ISO 9001
                        </div>
                        <div style="color:rgba(255,255,255,.4);font-size:.68rem;">Certified</div>
                    </div>
                    <div
                        style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;padding:10px 14px;text-align:center;">
                        <div style="color:var(--gold);font-size:.72rem;font-weight:700;letter-spacing:1px;">AAT</div>
                        <div style="color:rgba(255,255,255,.4);font-size:.68rem;">Qualified</div>
                    </div>
                    <div
                        style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:8px;padding:10px 14px;text-align:center;">
                        <div style="color:var(--gold);font-size:.72rem;font-weight:700;letter-spacing:1px;">ICB</div>
                        <div style="color:rgba(255,255,255,.4);font-size:.68rem;">Member</div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="footer-heading">Company</div>
                <a href="{{ route('about') }}" class="footer-link">About Us</a>
                <a href="{{ route('team') }}" class="footer-link">Meet the Team</a>
                <a href="{{ route('testimonials') }}" class="footer-link">Testimonials</a>
                <a href="{{ route('community') }}" class="footer-link">Community</a>
                <a href="{{ route('blogs') }}" class="footer-link">Blog</a>
            </div>
            <div class="col-6 col-md-3 col-lg-2">
                <div class="footer-heading">Services</div>
                <a href="{{ route('services') }}" class="footer-link">Bookkeeping</a>
                <a href="{{ route('payroll') }}" class="footer-link">Payroll</a>
                <a href="#services" class="footer-link">Auto Enrolment</a>
                <a href="{{ route('referral') }}" class="footer-link">Referral Offer</a>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="footer-heading">Contact Information</div>
                {{-- <div class="footer-heading">Newsletter</div>
                <p style="color:rgba(255,255,255,.4);font-size:.85rem;line-height:1.7;margin-bottom:16px;">Monthly
                    bookkeeping tips, HMRC updates, and exclusive offers for London businesses.</p>
                <div class="footer-newsletter d-flex">
                    <input type="email" placeholder="your@email.co.uk" />
                    <button>Subscribe</button>
                </div> --}}
                <div style="margin-top:20px;">
                    <div style="color:rgba(255,255,255,.45);font-size:.82rem;">📞 {{ $setting->phone }}</div>
                    <div style="color:rgba(255,255,255,.45);font-size:.82rem;margin-top:6px;">✉️ {{ $setting->email }}
                    </div>
                    <div style="color:rgba(255,255,255,.45);font-size:.82rem;margin-top:6px;">📍
                        {{ $setting->address }}
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                <p>© 2026 {{ $setting->meta_description }}. All rights reserved. Registered in England &amp; Wales
                    No. 14722816.</p>
                <div class="d-flex gap-3">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms &amp; Conditions</a>
                    <a href="#">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer>
