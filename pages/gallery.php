<?php
$page_title = "Gallery & Achievements - Irish Cueva";
include 'includes/header.php';
?>

<main class="container">
    <section class="gallery-section">
        <!-- 🎓 Gallery Header -->
        <div class="gallery-hero">
            <h2>📜 Certification & Training Gallery</h2>
            <p>A visual showcase of my professional qualifications, hands-on workshops, and specialized training programs in computer systems and network engineering.</p>
            
            <div class="gallery-stats">
                <div class="stat-bubble">
                    <span class="stat-num">04</span>
                    <span class="stat-label">Certificates</span>
                </div>
                <div class="stat-bubble">
                    <span class="stat-num">2024-2026</span>
                    <span class="stat-label">Timeline</span>
                </div>
                <div class="stat-bubble">
                    <span class="stat-num">100%</span>
                    <span class="stat-label">Verified</span>
                </div>
            </div>
        </div>

        <!-- 🖼️ Certificate Grid -->
        <div class="gallery-grid">
            <!-- Card 1: National Certificate -->
            <div class="gallery-card" onclick="openLightbox('assets/img/aef5da33-02a4-430a-b6ee-3c7b884ba644.jpg', 'National Certificate in Computer Systems Servicing', 'September 27, 2024')">
                <div class="gallery-image-wrapper">
                    <img src="assets/img/aef5da33-02a4-430a-b6ee-3c7b884ba644.jpg" alt="National Certificate in Computer Systems Servicing">
                    <div class="gallery-hover-overlay">
                        <span class="zoom-icon">🔍 View Full Certificate</span>
                    </div>
                </div>
                <div class="gallery-info">
                    <span class="gallery-date">September 27, 2024</span>
                    <h3>National Certificate in Computer Systems Servicing</h3>
                    <p>Standard qualification in diagnosing, troubleshooting, configuring networks, and maintaining computer hardware components.</p>
                </div>
            </div>

            <!-- Card 2: IoT Automation -->
            <div class="gallery-card" onclick="openLightbox('assets/img/88eb5415-5f17-492e-9b76-6f7b2835f2d2.jpg', 'IoT Integration and Smart Automation Workshop', 'February 15, 2026')">
                <div class="gallery-image-wrapper">
                    <img src="assets/img/88eb5415-5f17-492e-9b76-6f7b2835f2d2.jpg" alt="IoT Integration and Smart Automation Workshop">
                    <div class="gallery-hover-overlay">
                        <span class="zoom-icon">🔍 View Full Certificate</span>
                    </div>
                </div>
                <div class="gallery-info">
                    <span class="gallery-date">February 15, 2026</span>
                    <h3>IoT Integration & Smart Automation</h3>
                    <p>Hands-on workshop focused on microcontrollers, sensor interfacing, wireless scripting, and home automation systems.</p>
                </div>
            </div>

            <!-- Card 3: Load Balancing -->
            <div class="gallery-card" onclick="openLightbox('assets/img/86e4ab65-80a0-43c9-b7b6-014f11cf0085.jpg', 'Mastering Load Balancing: Strategies for Scalable, Resilient, and High Performance Systems', 'March 16, 2025')">
                <div class="gallery-image-wrapper">
                    <img src="assets/img/86e4ab65-80a0-43c9-b7b6-014f11cf0085.jpg" alt="Mastering Load Balancing">
                    <div class="gallery-hover-overlay">
                        <span class="zoom-icon">🔍 View Full Certificate</span>
                    </div>
                </div>
                <div class="gallery-info">
                    <span class="gallery-date">March 16, 2025</span>
                    <h3>Mastering Load Balancing Strategies</h3>
                    <p>Training covering high availability setup, traffic routing models, backend scaling, and production reliability.</p>
                </div>
            </div>

            <!-- Card 4: Computer Servicing NC II -->
            <div class="gallery-card" onclick="openLightbox('assets/img/7c8c5cb1-d8c3-4a3f-aa08-7f5304e2911a.jpg', 'Empowering Skills in Computer Servicing System NC II', 'March 23, 2025')">
                <div class="gallery-image-wrapper">
                    <img src="assets/img/7c8c5cb1-d8c3-4a3f-aa08-7f5304e2911a.jpg" alt="Computer Servicing System NC II">
                    <div class="gallery-hover-overlay">
                        <span class="zoom-icon">🔍 View Full Certificate</span>
                    </div>
                </div>
                <div class="gallery-info">
                    <span class="gallery-date">March 23, 2025</span>
                    <h3>Computer Servicing System NC II</h3>
                    <p>Specialized practical training in assembly, configurations, systems diagnostics, and enterprise systems deployment.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌌 Lightbox Modal Container -->
    <div id="gallery-lightbox" class="lightbox-modal" onclick="closeLightbox()">
        <span class="lightbox-close">&times;</span>
        <div class="lightbox-content-wrapper" onclick="event.stopPropagation()">
            <img id="lightbox-img" class="lightbox-image" src="" alt="Full Resolution Certificate">
            <div class="lightbox-caption">
                <h3 id="lightbox-title">Certificate Title</h3>
                <p id="lightbox-meta">Certificate Date</p>
            </div>
        </div>
    </div>
</main>

<script>
function openLightbox(src, title, date) {
    const lightbox = document.getElementById('gallery-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxMeta = document.getElementById('lightbox-meta');

    lightboxImg.src = src;
    lightboxTitle.textContent = title;
    lightboxMeta.textContent = date;
    
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
