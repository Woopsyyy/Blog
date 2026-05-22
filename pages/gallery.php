<?php
$page_title = "Gallery & Achievements - Irish Cueva";
include 'includes/header.php';
?>

<main class="container">
    <section class="instagram-gallery-section">
        <!-- 📸 Instagram Profile Header -->
        <div class="insta-profile-header">
            <div class="insta-avatar-container">
                <div class="insta-avatar">
                    <span>IC</span>
                </div>
            </div>
            
            <div class="insta-profile-details">
                <div class="insta-username-row">
                    <h2 class="insta-username">irish_cueva <span class="verified-badge" title="Verified Professional">✔</span></h2>
                    <a href="index.php?page=contact" class="insta-btn-message">Message</a>
                    <a href="index.php?page=portfolio" class="insta-btn-portfolio">Portfolio</a>
                </div>
                
                <div class="insta-stats-row">
                    <span><strong>4</strong> posts</span>
                    <span><strong>10+</strong> skills verified</span>
                    <span><strong>100%</strong> CSS NC II success</span>
                </div>
                
                <div class="insta-bio">
                    <h1 class="insta-full-name">Irish Cueva</h1>
                    <p class="insta-category">Computer Systems Servicing NC II & IoT Automation</p>
                    <p class="insta-bio-text">
                        ⚡ Professional certification & achievements showcase<br>
                        🎓 Specializing in computer networking, systems diagnostics, and hardware integration<br>
                        💡 Merging IoT connectivity with modern server architectures
                    </p>
                    <a href="index.php?page=about" class="insta-bio-link">🔗 Learn more in my Bio</a>
                </div>
            </div>
        </div>

        <!-- 📑 Instagram Tab Menu -->
        <div class="insta-tabs">
            <div class="insta-tab active">
                <svg class="insta-tab-icon" viewBox="0 0 24 24" width="12" height="12">
                    <rect x="3" y="3" width="18" height="18" rx="2" fill="none" stroke="currentColor" stroke-width="2"/>
                    <line x1="9" y1="3" x2="9" y2="21" stroke="currentColor" stroke-width="2"/>
                    <line x1="15" y1="3" x2="15" y2="21" stroke="currentColor" stroke-width="2"/>
                    <line x1="3" y1="9" x2="21" y2="9" stroke="currentColor" stroke-width="2"/>
                    <line x1="3" y1="15" x2="21" y2="15" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>CERTIFICATIONS</span>
            </div>
            <div class="insta-tab disabled">
                <svg class="insta-tab-icon" viewBox="0 0 24 24" width="12" height="12">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="currentColor" stroke-width="2"/>
                    <circle cx="12" cy="10" r="3" fill="none" stroke="currentColor" stroke-width="2"/>
                    <path d="M6 19c1.5-3 4.5-5 6-5s4.5 2 6 5" fill="none" stroke="currentColor" stroke-width="2"/>
                </svg>
                <span>TAGGED</span>
            </div>
        </div>

        <!-- 🖼️ Instagram Post Grid -->
        <div class="insta-grid">
            <!-- Post 1: NC CSS -->
            <div class="insta-post" onclick="openLightbox('assets/img/aef5da33-02a4-430a-b6ee-3c7b884ba644.jpg', 'National Certificate in Computer Systems Servicing', 'September 27, 2024', 'Verified qualification in computer hardware diagnostics, advanced OS configurations, server setup, and enterprise-level local area network engineering.')" style="--delay: 1;">
                <div class="insta-post-wrapper">
                    <img src="assets/img/aef5da33-02a4-430a-b6ee-3c7b884ba644.jpg" alt="National Certificate in Computer Systems Servicing" class="insta-post-img">
                    <div class="insta-post-overlay">
                        <div class="insta-overlay-stats">
                            <span class="stat-item"><span class="icon">❤️</span> <span>Verified</span></span>
                            <span class="stat-item"><span class="icon">🎓</span> <span>NC II</span></span>
                        </div>
                        <h4 class="insta-post-hover-title">Computer Systems Servicing</h4>
                    </div>
                </div>
            </div>

            <!-- Post 2: IoT Smart Automation -->
            <div class="insta-post" onclick="openLightbox('assets/img/88eb5415-5f17-492e-9b76-6f7b2835f2d2.jpg', 'IoT Integration and Smart Automation Workshop', 'February 15, 2026', 'Hands-on design, development, and programming of smart home hardware interfaces, sensor controls, microcontrollers, and wireless connectivity scripts.')" style="--delay: 2;">
                <div class="insta-post-wrapper">
                    <img src="assets/img/88eb5415-5f17-492e-9b76-6f7b2835f2d2.jpg" alt="IoT Integration and Smart Automation Workshop" class="insta-post-img">
                    <div class="insta-post-overlay">
                        <div class="insta-overlay-stats">
                            <span class="stat-item"><span class="icon">❤️</span> <span>Verified</span></span>
                            <span class="stat-item"><span class="icon">💡</span> <span>IoT</span></span>
                        </div>
                        <h4 class="insta-post-hover-title">IoT Smart Automation</h4>
                    </div>
                </div>
            </div>

            <!-- Post 3: Load Balancing -->
            <div class="insta-post" onclick="openLightbox('assets/img/86e4ab65-80a0-43c9-b7b6-014f11cf0085.jpg', 'Mastering Load Balancing: Strategies for Scalable, Resilient, and High Performance Systems', 'March 16, 2025', 'Mastery in system high-availability architectures, server cluster orchestration, traffic management systems, and backend failover configurations.')" style="--delay: 3;">
                <div class="insta-post-wrapper">
                    <img src="assets/img/86e4ab65-80a0-43c9-b7b6-014f11cf0085.jpg" alt="Mastering Load Balancing" class="insta-post-img">
                    <div class="insta-post-overlay">
                        <div class="insta-overlay-stats">
                            <span class="stat-item"><span class="icon">❤️</span> <span>Verified</span></span>
                            <span class="stat-item"><span class="icon">🌐</span> <span>Scaling</span></span>
                        </div>
                        <h4 class="insta-post-hover-title">Load Balancing Strategies</h4>
                    </div>
                </div>
            </div>

            <!-- Post 4: Computer Servicing NC II -->
            <div class="insta-post" onclick="openLightbox('assets/img/7c8c5cb1-d8c3-4a3f-aa08-7f5304e2911a.jpg', 'Empowering Skills in Computer Servicing System NC II', 'March 23, 2025', 'Intensive practical training program validating computer diagnostics, assembly, network system routing protocols, and general technical hardware administration.')" style="--delay: 4;">
                <div class="insta-post-wrapper">
                    <img src="assets/img/7c8c5cb1-d8c3-4a3f-aa08-7f5304e2911a.jpg" alt="Computer Servicing System NC II" class="insta-post-img">
                    <div class="insta-post-overlay">
                        <div class="insta-overlay-stats">
                            <span class="stat-item"><span class="icon">❤️</span> <span>Verified</span></span>
                            <span class="stat-item"><span class="icon">🔧</span> <span>Hardware</span></span>
                        </div>
                        <h4 class="insta-post-hover-title">Computer Servicing NC II</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- 🌌 Lightbox Modal Container (Instagram Split Style) -->
<div id="gallery-lightbox" class="lightbox-modal" onclick="closeLightbox()">
    <span class="lightbox-close">&times;</span>
    <div class="lightbox-content-wrapper" onclick="event.stopPropagation()">
        <div class="insta-lightbox-body">
            <div class="insta-lightbox-media">
                <img id="lightbox-img" class="lightbox-image" src="" alt="Full Resolution Certificate">
            </div>
            
            <div class="insta-lightbox-sidebar">
                <div class="insta-sidebar-header">
                    <div class="insta-sidebar-avatar">IC</div>
                    <div class="insta-sidebar-userinfo">
                        <strong>irish_cueva <span class="verified-badge">✔</span></strong>
                        <span>Cebu, Philippines</span>
                    </div>
                </div>
                
                <div class="insta-sidebar-caption-area">
                    <div class="insta-sidebar-caption">
                        <strong class="caption-user">irish_cueva</strong> 
                        <span id="lightbox-description">Certificate details...</span>
                    </div>
                    
                    <div class="insta-sidebar-system-note">
                        <span class="note-icon">🛡️</span>
                        <div>
                            <strong>Credentials Verified</strong>
                            <span>This certificate is officially authenticated by professional educational boards.</span>
                        </div>
                    </div>
                </div>
                
                <div class="insta-sidebar-footer">
                    <div class="insta-action-icons">
                        <div class="left-actions">
                            <span class="action-icon liked">❤️</span>
                            <span class="action-icon">💬</span>
                            <span class="action-icon">✈️</span>
                        </div>
                        <span class="action-icon bookmark">🔖</span>
                    </div>
                    <div class="insta-likes-count">
                        Verified by <strong>TESDA</strong> and <strong>recruitment boards</strong>
                    </div>
                    <div class="insta-sidebar-caption-title">
                        <h3 id="lightbox-title">Certificate Title</h3>
                        <p id="lightbox-meta" class="insta-caption-date">Certificate Date</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function openLightbox(src, title, date, desc) {
    const lightbox = document.getElementById('gallery-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxMeta = document.getElementById('lightbox-meta');
    const lightboxDesc = document.getElementById('lightbox-description');

    lightboxImg.src = src;
    lightboxTitle.textContent = title;
    lightboxMeta.textContent = date;
    lightboxDesc.textContent = desc;
    
    lightbox.classList.add('show');
    document.body.style.overflow = 'hidden'; // Disable page scrolling
}

function closeLightbox() {
    const lightbox = document.getElementById('gallery-lightbox');
    lightbox.classList.remove('show');
    document.body.style.overflow = 'auto'; // Re-enable page scrolling
}

// Close lightbox on Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeLightbox();
    }
});
</script>

<?php include 'includes/footer.php'; ?>
