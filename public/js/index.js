
function disablebtn() {
    let btn = document.getElementById('send');
    btn.disabled = true;
    btn.innerText = "Submitting..."; // optional
}


        document.addEventListener('DOMContentLoaded', function () {
            // Handle success message
            const successMsg = document.getElementById('successMessage');
            if (successMsg) {
                // Show message
                setTimeout(() => {
                    successMsg.classList.add('show');
                }, 100);

                // Hide message after 4 seconds
                setTimeout(() => {
                    successMsg.classList.remove('show');

                    // Remove from DOM after animation completes
                    setTimeout(() => {
                        successMsg.remove();
                    }, 500);
                }, 4000);
            }

            // Handle error message
            const errorMsg = document.getElementById('errorMessage');
            if (errorMsg) {
                // Show message
                setTimeout(() => {
                    errorMsg.classList.add('show');
                }, 100);

                // Hide message after 4 seconds
                setTimeout(() => {
                    errorMsg.classList.remove('show');

                    // Remove from DOM after animation completes
                    setTimeout(() => {
                        errorMsg.remove();
                    }, 500);
                }, 4000);
            }





            const searchInput = document.getElementById('desktop-search');

            // Same page-section keyword mapping (short example — replace with your full map)
            const pageSectionMaps = {
                '/': {
                    "mission": "mission-vision",
                    "vision": "mission-vision",
                    "team": "team-section",
                    "focus": "focus-area",
                    "area": "focus-area",
                    "impact": "impact",
                    "project": "project",
                    "volunteer": "involved-section",
                    "donate": "involved-section",
                    "advocate": "involved-section"
                },
                '/about': {
                    "values": "core-values",
                    "history": "our-history",
                    "milestone": "milestones",
                    "impact": "impact-stats",
                    "partners": "partners",
                    "join": "cta-section",
                    "story": "hero-section"
                },

                '/contact': {
                    "contact": "contact-form",
                    "location": "map",
                    "teaminformation": "team-info",
                    "email": "contact-info",
                    "phone": "contact-info",
                    "address": "contact-info",
                    "question": "faq"
                },
                '/notice': {
                    // Notice categories
                    "event": "notice-events",
                    "events": "notice-events",
                    "alert": "notice-alerts",
                    "alerts": "notice-alerts",
                    "volunteer": "notice-volunteer",
                    "volunteers": "notice-volunteer",
                    "report": "notice-reports",
                    "reports": "notice-reports",

                    // Specific notices
                    "tree planting": "notice-1",
                    "community event": "notice-1",
                    "pokhara": "notice-2",
                    "new office": "notice-2",
                    "monsoon": "notice-3",
                    "workshop": "notice-3",

                    // Sections
                    "categories": "notice-categories",
                    "archive": "notice-archive",
                    "links": "notice-links",
                    "subscribe": "notice-newsletter"
                },
                '/vacancy': {
                    // Job positions
                    "manager": "job-1",
                    "conservation": "job-1",
                    "project manager": "job-1",
                    "research": "job-2",
                    "environmental": "job-2",
                    "officer": "job-2",

                    // Job types
                    "full time": "job-types",
                    "contract": "job-types",
                    "part time": "job-types",

                    // Locations
                    "kathmandu": "job-locations",
                    "pokhara": "job-locations",

                    // Benefits section
                    "benefits": "work-benefits",
                    "why work": "work-benefits",
                    "perks": "work-benefits",

                    // Hiring process
                    "process": "hiring-process",
                    "apply": "hiring-process",
                    "interview": "hiring-process",
                    "screening": "hiring-process",

                    // General application
                    "general": "general-application",
                    "dream job": "general-application",
                    "spontaneous": "general-application",

                    // Equal opportunity
                    "equal": "equal-opportunity",
                    "diversity": "equal-opportunity",
                    "inclusion": "equal-opportunity"
                },
                "/publication": {
                    // Main sections
                    "reports": "reports",
                    "research": "reports",
                    "studies": "reports",
                    "resources": "resources",
                    "education": "resources",
                    "materials": "resources",
                    "policy": "policy-briefs",
                    "briefs": "policy-briefs",
                    "recommendations": "policy-briefs",
                    "archive": "publication-archive",
                    "collection": "publication-archive",

                    // Report types
                    "biodiversity": "featured-reports",
                    "climate": "featured-reports",
                    "agriculture": "featured-reports",
                    "himalayan": "featured-reports",

                    // Resource types
                    "guides": "educational-resources",
                    "toolkits": "educational-resources",
                    "handbooks": "educational-resources",
                    "activities": "educational-resources",
                    "children": "educational-resources",

                    // Content types
                    "pdf": "publication-archive",
                    "download": "publication-archive",
                    "subscribe": "cta-section",
                    "updates": "cta-section",
                    "notifications": "cta-section",

                    // Topics
                    "forest": "policy-briefs",
                    "energy": "policy-briefs",
                    "wildlife": "policy-briefs",
                    "tourism": "publication-archive",
                    "waste": "publication-archive",
                    "panda": "publication-archive"
                },
                "/newsletter": {
                    // Main sections
                    "latest": "latest-edition",
                    "current": "latest-edition",
                    "recent": "latest-edition",
                    "archive": "newsletter-archive",
                    "past": "newsletter-archive",
                    "previous": "newsletter-archive",
                    "testimonials": "testimonials",
                    "reviews": "testimonials",
                    "feedback": "testimonials",

                    // Benefits section
                    "benefits": "newsletter-benefits",
                    "why subscribe": "newsletter-benefits",
                    "advantages": "newsletter-benefits",
                    "features": "newsletter-benefits",

                    // Interest categories
                    "environment": "interest-environment",
                    "conservation": "interest-environment",
                    "energy": "interest-energy",
                    "renewable": "interest-energy",
                    "education": "interest-education",
                    "school": "interest-education",
                    "events": "interest-events",
                    "volunteering": "interest-events",

                },
                "/privacy": {
                    // Main policy sections
                    "privacy": "privacy-policy",
                    "data": "privacy-policy",
                    "gdpr": "privacy-policy",
                    "environment": "environmental-policy",
                    "green": "environmental-policy",
                    "sustainability": "environmental-policy",
                    "donor": "donor-policy",
                    "donation": "donor-policy",
                    "giving": "donor-policy",

                    // Key policy elements
                    "rights": "donor-rights",
                    "security": "data-security",
                    "harassment": "anti-harassment",
                    "report": "reporting-violations",
                    "updates": "policy-updates",
                    "changes": "policy-updates",
                    "revisions": "policy-updates",

                    // Contact
                    "questions": "cta-section",
                    "contact": "cta-section",
                    "compliance": "cta-section"
                },
                "/terms": {
                    "condition": "term-content",
                    "term": "term-content",
                    "terms": "term-content",
                    "agreement": "terms-content",
                    "legal": "terms-content",
                    "conditions": "term-content"
                },
                "/impact": {
                    // Main sections
                    "impact": "key-metrics",
                    "results": "key-metrics",
                    "metrics": "key-metrics",
                    "numbers": "key-metrics",
                    "achievements": "key-metrics",

                    // Content sections
                    "stories": "impact-stories",
                    "case": "impact-stories",
                    "examples": "impact-stories",
                    "geographic": "geographic-reach",
                    "regions": "geographic-reach",
                    "locations": "geographic-reach",
                    "report": "annual-report",
                    "financial": "annual-report",
                    "download": "annual-report",

                    // Action sections
                    "participate": "cta-section",
                    "donate": "cta-section",
                    "volunteer": "cta-section",
                    "join": "cta-section",
                    "support": "cta-section"
                },
                "/annual": {
                    // Main sections
                    "report": "download-report",
                    "annual": "download-report",
                    "financial": "report-highlight",
                    "finances": "report-highlight",
                    "projects": "report-highlight",
                    "initiatives": "report-highlight",
                    "download": "download-report",
                    "future": "looking-ahead",
                    "goals": "looking-ahead",
                    "2024": "looking-ahead",

                    // Report components
                    "highlights": "year-in-review",
                    "achievements": "year-in-review",
                    "stats": "year-in-review",
                    "numbers": "year-in-review",
                    "income": "report-highlight",
                    "expenses": "report-highlight",
                    "expenditure": "report-highlight"
                }
            };

            const currentPath = window.location.pathname;

            // Handle Enter key press
            searchInput.addEventListener('keydown', function (e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    const query = searchInput.value.toLowerCase().trim();
                    if (!query) return;

                    // 1. Try current page
                    const currentPageMap = pageSectionMaps[currentPath] || {};
                    for (const keyword in currentPageMap) {
                        if (query.includes(keyword)) {
                            const sectionId = currentPageMap[keyword];
                            const section = document.getElementById(sectionId);
                            if (section) {
                                section.scrollIntoView({ behavior: 'smooth' });
                                section.classList.add('highlight-section');
                                setTimeout(() => {
                                    section.classList.remove('highlight-section');
                                }, 2000);
                                return;
                            }
                        }
                    }

                    // 2. Try other pages
                    for (const path in pageSectionMaps) {
                        if (path !== currentPath) {
                            const pageMap = pageSectionMaps[path];
                            for (const keyword in pageMap) {
                                if (query.includes(keyword)) {
                                    window.location.href = path + "#" + pageMap[keyword];
                                    return;
                                }
                            }
                        }
                    }

                    // 3. Fallback: redirect to a search results page
                    window.location.href = "/search?q=" + encodeURIComponent(query);
                }
            });


            // Active menu
            function setActiveMenu() {
                const currentPath = window.location.pathname;
                const whatsappPath = 'https://wa.me/1234567890';
                document.querySelectorAll('.flex.justify-around a').forEach(link => {
                    const linkPath = link.getAttribute('href');
                    link.classList.remove('active');
                    if (linkPath === currentPath ||
                        (linkPath === whatsappPath && window.location.href.includes('whatsapp'))) {
                        link.classList.add('active');
                    }
                });
            }
            setActiveMenu();
            window.addEventListener('popstate', setActiveMenu);

            // Language toggle
            const languageButton = document.getElementById('language-button');
            const languageDropdown = document.getElementById('language-dropdown');
            const currentLanguage = document.getElementById('current-language');
            const languageOptions = document.querySelectorAll('.language-option');
            if (languageButton) {
                languageButton.addEventListener('click', function (e) {
                    e.stopPropagation();
                    languageDropdown.classList.toggle('hidden');
                });
            }
            document.addEventListener('click', function () {
                if (languageDropdown && !languageDropdown.classList.contains('hidden')) {
                    languageDropdown.classList.add('hidden');
                }
            });
            languageOptions.forEach(option => {
                option.addEventListener('click', function (e) {
                    e.preventDefault();
                    const lang = this.getAttribute('data-lang');
                    currentLanguage.textContent = lang.toUpperCase();
                    document.querySelectorAll('[data-lang]').forEach(el => {
                        if (el.textContent.includes('English') || el.textContent.includes('नेपाली')) {
                            el.textContent = lang === 'en' ? 'English' : 'नेपाली';
                        }
                    });
                    if (languageDropdown) {
                        languageDropdown.classList.add('hidden');
                    }
                    console.log('Language changed to:', lang);
                });
            });
            const mobileSearch = document.getElementById('mobile-search');
            if (mobileSearch) {
                mobileSearch.addEventListener('focus', function () {
                    this.parentElement.classList.add('search-focused');
                });
                mobileSearch.addEventListener('blur', function () {
                    this.parentElement.classList.remove('search-focused');
                });
            }
            const desktopSearch = document.getElementById('desktop-search');
            if (desktopSearch) {
                desktopSearch.addEventListener('focus', function () {
                    this.parentElement.classList.add('search-focused');
                });
                desktopSearch.addEventListener('blur', function () {
                    this.parentElement.classList.remove('search-focused');
                });
            }

            // GSAP Animations
            if (typeof gsap !== 'undefined' && gsap.registerPlugin) {
                gsap.registerPlugin(ScrollTrigger);
            }
            gsap.utils.toArray(".gsap").forEach((section) => {
                gsap.from(section, {
                    opacity: 0,
                    y: 70,
                    duration: 0.7,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: section,
                        start: "top 80%",
                        toggleActions: "play none none reverse",
                        markers: false
                    }
                });
            });
            gsap.utils.toArray(".gsap-h1").forEach((heading) => {
                const text = heading.textContent;
                heading.textContent = "";
                for (let i = 0; i < text.length; i++) {
                    const char = document.createElement("span");
                    char.textContent = text[i];
                    char.style.display = "inline-block";
                    heading.appendChild(char);
                }
                gsap.from(heading.children, {
                    opacity: 0,
                    y: 30,
                    rotationX: 90,
                    duration: 0.8,
                    stagger: 0.03,
                    ease: "back.out(1.7)",
                    scrollTrigger: {
                        trigger: heading,
                        start: "top 75%",
                        toggleActions: "play none none none",
                        markers: false
                    }
                });
            });
            gsap.utils.toArray(".gsap-card").forEach((card, index) => {
                gsap.set(card, { opacity: 0, y: 30, scale: 0.98 });
                gsap.to(card, {
                    opacity: 1,
                    y: 0,
                    scale: 1,
                    duration: 0.6,
                    delay: index * 0.07,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: card,
                        start: "top 85%",
                        toggleActions: "play none none reverse",
                        markers: false
                    }
                });
                card.addEventListener('mouseenter', () => {
                    gsap.to(card, {
                        scale: 1.02,
                        y: -8,
                        duration: 0.3,
                        ease: "power2.out",
                        transformPerspective: 1000,
                        rotationX: 1,
                        rotationY: 1
                    });
                });
                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        scale: 1,
                        y: 0,
                        rotationX: 0,
                        rotationY: 0,
                        duration: 0.4,
                        ease: "elastic.out(1, 0.5)"
                    });
                });
            });




            // Disable right click and keys
            // document.addEventListener('contextmenu', function (e) {
            //     e.preventDefault();
            // });
            // document.addEventListener('keydown', function (e) {
            //     if (e.ctrlKey && ['u', 's', 'c', 'p'].includes(e.key.toLowerCase())) e.preventDefault();
            //     if (e.ctrlKey && e.shiftKey && ['i', 'j', 'c'].includes(e.key.toLowerCase())) e.preventDefault();
            //     if (e.key === 'F12') e.preventDefault();
            // });
            // document.addEventListener('selectstart', function (e) { e.preventDefault(); });
            // document.addEventListener('dragstart', function (e) { e.preventDefault(); });

            // Mobile menu toggle
            const mobileMenuButton = document.getElementById('mobileMenuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', () => {
                    const isOpen = mobileMenu.classList.contains('max-h-0');
                    mobileMenu.classList.toggle('max-h-0', !isOpen);
                    mobileMenu.classList.toggle('max-h-screen', isOpen);
                });
            }
            function setupMobileDropdown(buttonId, dropdownId, iconId) {
                const button = document.getElementById(buttonId);
                const dropdown = document.getElementById(dropdownId);
                const icon = document.getElementById(iconId);
                if (button && dropdown && icon) {
                    button.addEventListener('click', () => {
                        const isOpen = dropdown.classList.contains('max-h-0');
                        dropdown.classList.toggle('max-h-0', !isOpen);
                        dropdown.classList.toggle('max-h-96', isOpen);
                        icon.classList.toggle('transform', !isOpen);
                        icon.classList.toggle('rotate-180', !isOpen);
                    });
                }
            }
            setupMobileDropdown('aboutMobileDropdownButton', 'aboutMobileDropdown', 'aboutMobileDropdownIcon');
            setupMobileDropdown('worksMobileDropdownButton', 'worksMobileDropdown', 'worksMobileDropdownIcon');

            // Highlight section on hash load
            if (window.location.hash) {
                const section = document.querySelector(window.location.hash);
                if (section) {
                    section.classList.add('highlight-section');
                    setTimeout(() => section.classList.remove('highlight-section'), 2000);
                }
            }
        });
