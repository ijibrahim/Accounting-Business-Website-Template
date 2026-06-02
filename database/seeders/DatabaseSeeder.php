<?php

namespace Database\Seeders;

use App\Enums\BlogPostStatus;
use App\Enums\ContactSubmissionStatus;
use App\Enums\NewsletterSubscriberStatus;
use App\Models\About;
use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\ContactSubmission;
use App\Models\Faq;
use App\Models\Guarantee;
use App\Models\HeroSection;
use App\Models\Industries;
use App\Models\Legal;
use App\Models\NewsletterSubscriber;
use App\Models\Package as ServicePackage;
use App\Models\PackageFeature;
use App\Models\PageSection;
use App\Models\Service;
use App\Models\ServiceFeature;
use App\Models\SiteSetting;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = User::query()->updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => 'password',
            ]
        );

        SiteSetting::query()->updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Cain & Co Bookkeeping Services',
                'phone' => '020 8087 1341',
                'secondary_phone' => '020 7946 0321',
                'email' => 'takecontrol@cainandco.co.uk',
                'secondary_email' => 'hello@cainandco.co.uk',
                'address' => '245 Whitechapel Road, 2nd Floor, London, England, United Kingdom',
                'facebook_url' => 'https://facebook.com/cainandco',
                'linkedin_url' => 'https://linkedin.com/company/cainandco',
                'instagram_url' => 'https://instagram.com/cainandco',
                'meta_title' => 'Cain & Co Bookkeeping Services | London',
                'viewport' => 'width=device-width, initial-scale=1.0',
                'meta_keywords' => 'bookkeeping London, payroll services, VAT returns, auto enrolment, HMRC compliance',
                'meta_description' => 'Cain & Co provides fixed-fee bookkeeping, payroll and auto enrolment support for UK businesses.',
                'og_title' => 'Cain & Co Bookkeeping Services',
                'og_description' => 'Risk-free bookkeeping support from an ISO 9001 certified team.',
                'og_image' => 'assets/images/og-image.jpg',
                'twitter_image' => 'assets/images/og-image.jpg',
                'canonical_url' => 'https://bookkeepersuk.com',
                'created_by' => $admin->id,
                'updated_by' => $admin->id,
            ]
        );

        About::query()->updateOrCreate(
            ['id' => 1],
            [
                'hero_title' => 'One of the Few ISO 9001 Certified Bookkeepers in the UK',
                'hero_subtitle' => 'Cain & Co helps business owners stay compliant, understand their numbers and get their time back.',
                'about_title' => 'Built for Business Owners Who Need Clarity',
                'about_content' => 'Cain & Co exists to provide accurate bookkeeping, proactive communication and calm financial support for growing businesses.',
                'mission_title' => 'Our Mission',
                'mission_content' => 'To remove bookkeeping stress from business owners through accurate records, clear reporting and dependable support.',
                'vision_title' => 'Our Vision',
                'vision_content' => 'To become the UK bookkeeping partner most trusted for clarity, consistency and care.',
                'image' => 'assets/images/about-cain-and-co.jpg',
                'meta_title' => 'About Cain & Co',
                'meta_keywords' => 'about Cain and Co, ISO 9001 bookkeepers, bookkeeping team',
                'meta_description' => 'Learn about Cain & Co, a trusted bookkeeping and payroll support team for UK businesses.',
                'og_image' => 'assets/images/about-cain-and-co.jpg',
                'created_by' => $admin->id,
                'updated_by' => $admin->id,
            ]
        );

        $services = [
            ['Bookkeeping', 'bookkeeping', 'bi-journal-bookmarks', 299, 'Fixed-fee bookkeeping services for accurate records, VAT returns and management reporting.'],
            ['Payroll', 'payroll', 'bi-people-fill', 99, 'Stress-free weekly and monthly payroll processing, payslips and HMRC RTI submissions.'],
            ['Auto Enrolment', 'auto-enrolment', 'bi-shield-lock-fill', 149, 'Workplace pension auto enrolment management, communications and compliance support.'],
        ];

        foreach ($services as $index => [$title, $slug, $icon, $price, $description]) {
            $service = Service::query()->updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $title,
                    'short_description' => $description,
                    'hero_title' => $title.' Services for Growing Businesses',
                    'hero_subtitle' => $description,
                    'content' => $description.' Cain & Co keeps the process organised, compliant and easy to understand.',
                    'icon' => $icon,
                    'starting_price' => $price,
                    'price_label' => '+ VAT per month',
                    'is_featured' => $slug === 'bookkeeping',
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'meta_title' => $title.' Services | Cain & Co',
                    'meta_keywords' => strtolower($title).', Cain and Co, UK bookkeeping services',
                    'meta_description' => $description,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );

            foreach (['Accurate records', 'Fixed monthly fees', 'Fast support', 'HMRC-ready reporting'] as $featureIndex => $feature) {
                ServiceFeature::query()->updateOrCreate(
                    ['service_id' => $service->id, 'title' => $feature],
                    [
                        'description' => $feature.' included with '.$service->title.' support.',
                        'icon' => 'bi-check-circle-fill',
                        'sort_order' => $featureIndex + 1,
                    ]
                );
            }
        }

        $bookkeeping = Service::query()->where('slug', 'bookkeeping')->first();
        $packages = [
            ['Entry', 299, 'Perfect if you just need the essentials covered.', false, ['VAT, CIS and payroll support', 'Bank reconciliations', 'Year-end ready books']],
            ['Full', 499, 'Most popular for growing businesses.', true, ['Everything in Entry', 'Monthly management reports', 'Cash flow, P&L and forecasts']],
            ['Premium', 699, 'For busy owners who want deeper financial clarity.', false, ['Everything in Full', 'Advanced KPI tracking', 'Priority support']],
        ];

        foreach ($packages as $index => [$name, $price, $description, $featured, $features]) {
            $package = ServicePackage::query()->updateOrCreate(
                ['service_id' => $bookkeeping?->id, 'name' => $name],
                [
                    'price' => $price,
                    'price_suffix' => '+ VAT / month',
                    'description' => $description,
                    'is_featured' => $featured,
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );

            foreach ($features as $featureIndex => $feature) {
                PackageFeature::query()->updateOrCreate(
                    ['package_id' => $package->id, 'feature' => $feature],
                    ['sort_order' => $featureIndex + 1]
                );
            }
        }

        foreach ([
            ['Restaurants', 'restaurants', 'bi-egg-fried', 'Bookkeeping support for busy food and hospitality operators.'],
            ['Hospitality', 'hospitality', 'bi-building', 'Clear records for hotels, venues and service-led hospitality businesses.'],
            ['Construction', 'construction', 'bi-hammer', 'CIS, payroll and transaction-heavy bookkeeping support.'],
            ['Accountants', 'accountants', 'bi-calculator', 'Dependable bookkeeping support for practices and their clients.'],
            ['Consultants', 'consultants', 'bi-briefcase', 'Fixed-fee records and reporting for advisory businesses.'],
            ['Retail', 'retail', 'bi-shop', 'Sales, supplier invoices and VAT kept current.'],
        ] as $index => [$name, $slug, $icon, $description]) {
            Industries::query()->updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => $name,
                    'description' => $description,
                    'icon' => $icon,
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'meta_title' => $name.' Bookkeeping Services',
                    'meta_keywords' => strtolower($name).' bookkeeping, Cain and Co',
                    'meta_description' => $description,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        $categories = [
            ['Bookkeeping', 'bookkeeping', 'Guides for better financial records.'],
            ['Payroll', 'payroll', 'Payroll updates and practical advice.'],
            ['Case Studies', 'case-studies', 'Real client support examples.'],
        ];

        foreach ($categories as $index => [$name, $slug, $description]) {
            BlogCategory::query()->updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => $name,
                    'description' => $description,
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'meta_title' => $name.' Articles',
                    'meta_keywords' => strtolower($name).', bookkeeping blog',
                    'meta_description' => $description,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        $blogCategory = BlogCategory::query()->where('slug', 'bookkeeping')->first();
        foreach ([
            ['The Cain & Co Customer Journey', 'the-cain-and-co-customer-journey'],
            ['How To Automate Bookkeeping Workflows Efficiently', 'automate-bookkeeping-workflows'],
            ['Wimbledon Bookkeeping Case Study', 'wimbledon-bookkeeping-case-study'],
        ] as $index => [$title, $slug]) {
            BlogPost::query()->updateOrCreate(
                ['slug' => $slug],
                [
                    'blog_category_id' => $blogCategory?->id,
                    'title' => $title,
                    'excerpt' => 'Practical advice from Cain & Co for business owners who want clearer numbers.',
                    'content' => '<p>This demo article explains how Cain & Co helps businesses stay organised, compliant and confident with their bookkeeping.</p>',
                    'author_name' => 'Cain & Co',
                    'status' => BlogPostStatus::Published,
                    'published_at' => now()->subDays($index),
                    'meta_title' => $title,
                    'meta_keywords' => 'bookkeeping, Cain and Co, business finance',
                    'meta_description' => 'Read '.$title.' from Cain & Co.',
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        foreach ([
            ['Amanda Hill', 'AH Social Media', 'Professional, knowledgeable, switched on and passionate about the industry.'],
            ['Joanne Bell', 'Bells Accounting', 'Fast turnaround, excellent value for money and accurate, well-presented work.'],
            ['Sarah French', 'IT4Automation', 'Knowledgeable, helpful and patient. No query is too much trouble.'],
        ] as $index => [$client, $company, $quote]) {
            Testimonial::query()->updateOrCreate(
                ['client_name' => $client, 'company_name' => $company],
                [
                    'quote' => $quote,
                    'rating' => 5,
                    'is_featured' => true,
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        foreach ([
            ['Paul Cain', 'Director'],
            ['Melanie Regan-Brown', 'Bookkeeper'],
            ['Grant Dye', 'Bookkeeper'],
            ['Sam Warwick-Rolf', 'Bookkeeper'],
            ['Luke Iles', 'Marketing Partner'],
            ['Bailey Wilshire', 'Marketing Partner'],
        ] as $index => [$name, $role]) {
            TeamMember::query()->updateOrCreate(
                ['name' => $name],
                [
                    'role' => $role,
                    'bio' => $name.' supports Cain & Co clients with practical, friendly and reliable service.',
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        foreach ([
            ['What is included in bookkeeping from GBP 299/month?', 'Monthly bookkeeping, reconciliations, VAT support and clear reporting.'],
            ['Can you manage payroll too?', 'Yes, Cain & Co can support bookkeeping, payroll and auto enrolment together.'],
            ['Do you offer a trial?', 'Yes, we offer a 3-month risk-free trial for qualifying businesses.'],
        ] as $index => [$question, $answer]) {
            Faq::query()->updateOrCreate(
                ['question' => $question],
                [
                    'answer' => $answer,
                    'page' => 'home',
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        foreach ([
            ['No HMRC Fines, Guaranteed', 'Provide requested information on time and if a penalty is issued due to our error, we cover it.'],
            ['Fast Answers', 'Most questions are answered quickly by a responsive support team.'],
            ['Fixed Fees', 'Simple monthly pricing with no hidden costs.'],
        ] as $index => [$title, $description]) {
            Guarantee::query()->updateOrCreate(
                ['title' => $title],
                [
                    'description' => $description,
                    'icon' => 'bi-patch-check-fill',
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        foreach ([
            ['Privacy Policy', 'privacy-policy'],
            ['Terms and Conditions', 'terms-and-conditions'],
            ['Cookie Policy', 'cookie-policy'],
            ['AML Policy', 'aml-policy'],
            ['Complaints Policy', 'complaints-policy'],
        ] as [$title, $slug]) {
            Legal::query()->updateOrCreate(
                ['slug' => $slug],
                [
                    'title' => $title,
                    'content' => '<p>This demo '.$title.' content should be reviewed by a qualified professional before publishing.</p>',
                    'meta_title' => $title.' | Cain & Co',
                    'meta_keywords' => strtolower($title).', Cain and Co',
                    'meta_description' => $title.' for Cain & Co Bookkeeping Services.',
                    'is_active' => true,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        ContactSubmission::query()->updateOrCreate(
            ['email' => 'demo@example.com'],
            [
                'full_name' => 'Demo Client',
                'company_name' => 'Demo Business Ltd',
                'phone' => '07700 900000',
                'business_type' => 'Limited Company',
                'service_interest' => 'Bookkeeping',
                'message' => 'I would like a free bookkeeping consultation.',
                'status' => ContactSubmissionStatus::New,
            ]
        );

        NewsletterSubscriber::query()->updateOrCreate(
            ['email' => 'subscriber@example.com'],
            [
                'name' => 'Demo Subscriber',
                'status' => NewsletterSubscriberStatus::Active,
            ]
        );

        foreach ([
            ['home', "London's Trusted Bookkeepers", 'Bookkeeping London'],
            ['bookkeeping', 'Bookkeeping Services', 'Bookkeeping Services for Growing Businesses'],
            ['payroll', 'Payroll Services', 'Stress-Free Payroll Services for UK Businesses'],
            ['about', 'About Cain & Co', 'One of the Few ISO 9001 Certified Bookkeepers in the UK'],
        ] as [$page, $label, $title]) {
            HeroSection::query()->updateOrCreate(
                ['page' => $page],
                [
                    'label' => $label,
                    'title' => $title,
                    'subtitle' => 'Demo hero content managed from the admin panel.',
                    'primary_button_text' => 'Book Free Consultation',
                    'primary_button_url' => '/contacts',
                    'secondary_button_text' => 'View Services',
                    'secondary_button_url' => '/services',
                    'is_active' => true,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }

        foreach ([
            ['home', 'services-preview', 'service_grid', 'Our Core Services'],
            ['bookkeeping', 'pricing', 'pricing_table', 'Clear Bookkeeping Packages'],
            ['bookkeeping', 'guarantees', 'feature_grid', '7 Reasons You Can Trust Cain & Co'],
            ['about', 'mission-vision', 'rich_text', 'Mission & Vision'],
        ] as $index => [$page, $key, $type, $title]) {
            PageSection::query()->updateOrCreate(
                ['page' => $page, 'section_key' => $key],
                [
                    'section_type' => $type,
                    'title' => $title,
                    'subtitle' => 'Demo section content controlled from the admin panel.',
                    'content' => 'This section can be edited, reordered and hidden from admin.',
                    'button_text' => 'Learn More',
                    'button_url' => '/contacts',
                    'settings' => ['layout' => 'grid', 'theme' => 'default'],
                    'is_active' => true,
                    'sort_order' => $index + 1,
                    'created_by' => $admin->id,
                    'updated_by' => $admin->id,
                ]
            );
        }
    }
}
