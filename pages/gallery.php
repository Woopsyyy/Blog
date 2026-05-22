<?php
$page_title = "Gallery & Achievements - Irish Cueva";
include 'includes/header.php';

// Check if the uploaded profile image exists to sync it dynamically
$avatar_img = "uploads/profile.jpg.jpg";
$has_avatar = file_exists($avatar_img);
?>

<main class="container">
    <section class="instagram-gallery-section">
        <!-- 📸 Instagram Profile Header -->
        <div class="insta-profile-header">
            <div class="insta-avatar-container">
                <div class="insta-avatar">
                    <?php if ($has_avatar): ?>
                        <img src="<?php echo $avatar_img; ?>" alt="Irish Cueva Profile Picture">
                    <?php else: ?>
                        <span>IC</span>
                    <?php endif; ?>
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
            <div class="insta-post" onclick="openLightbox(0)" style="--delay: 1;">
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
            <div class="insta-post" onclick="openLightbox(1)" style="--delay: 2;">
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
            <div class="insta-post" onclick="openLightbox(2)" style="--delay: 3;">
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
            <div class="insta-post" onclick="openLightbox(3)" style="--delay: 4;">
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
                <!-- Navigation Arrows inside Lightbox -->
                <button class="lightbox-nav nav-prev" onclick="prevPost(event)" title="Previous (Left ArrowKey)">❮</button>
                <img id="lightbox-img" class="lightbox-image" src="" alt="Full Resolution Certificate">
                <button class="lightbox-nav nav-next" onclick="nextPost(event)" title="Next (Right ArrowKey)">❯</button>
            </div>
            
            <div class="insta-lightbox-sidebar">
                <div class="insta-sidebar-header">
                    <div class="insta-sidebar-avatar">
                        <?php if ($has_avatar): ?>
                            <img src="<?php echo $avatar_img; ?>" alt="IC">
                        <?php else: ?>
                            IC
                        <?php endif; ?>
                    </div>
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
                            <span id="lightbox-like-btn" class="action-icon" onclick="toggleLike(event)">❤️</span>
                            <span class="action-icon" onclick="sharePost(event)">✈️</span>
                        </div>
                        <span id="lightbox-bookmark-btn" class="action-icon bookmark" onclick="toggleBookmark(event)">🔖</span>
                    </div>
                    <div class="insta-likes-count" id="lightbox-likes-count">
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

<!-- 🍞 Custom Interactive Toast Notification -->
<div id="gallery-toast" class="gallery-toast">
    <span class="gallery-toast-icon">🔗</span>
    <span class="gallery-toast-message">Shareable link copied to clipboard!</span>
    <div class="gallery-toast-progress"></div>
</div>

<script>
// Centralized certificate feed data for dynamic interpolation & carousel navigation
const galleryPosts = [
    {
        src: 'assets/img/aef5da33-02a4-430a-b6ee-3c7b884ba644.jpg',
        title: 'National Certificate in Computer Systems Servicing',
        date: 'September 27, 2024',
        desc: 'Verified qualification in computer hardware diagnostics, advanced OS configurations, server setup, and enterprise-level local area network engineering.',
        authority: 'TESDA (Technical Education and Skills Development Authority)'
    },
    {
        src: 'assets/img/88eb5415-5f17-492e-9b76-6f7b2835f2d2.jpg',
        title: 'IoT Integration and Smart Automation Workshop',
        date: 'February 15, 2026',
        desc: 'Hands-on design, development, and programming of smart home hardware interfaces, sensor controls, microcontrollers, and wireless connectivity scripts.',
        authority: 'Department of Information and Communications Technology (DICT)'
    },
    {
        src: 'assets/img/86e4ab65-80a0-43c9-b7b6-014f11cf0085.jpg',
        title: 'Mastering Load Balancing: Strategies for Scalable, Resilient, and High Performance Systems',
        date: 'March 16, 2025',
        desc: 'Mastery in system high-availability architectures, server cluster orchestration, traffic management systems, and backend failover configurations.',
        authority: 'Network Systems Engineering Council'
    },
    {
        src: 'assets/img/7c8c5cb1-d8c3-4a3f-aa08-7f5304e2911a.jpg',
        title: 'Empowering Skills in Computer Servicing System NC II',
        date: 'March 23, 2025',
        desc: 'Intensive practical training program validating computer diagnostics, assembly, network system routing protocols, and general technical hardware administration.',
        authority: 'Vocational Training Institution of Cebu'
    }
];

let currentPostIndex = 0;

function openLightbox(index) {
    currentPostIndex = index;
    const post = galleryPosts[index];
    
    const lightbox = document.getElementById('gallery-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxTitle = document.getElementById('lightbox-title');
    const lightboxMeta = document.getElementById('lightbox-meta');
    const lightboxDesc = document.getElementById('lightbox-description');

    // Populate data
    lightboxImg.src = post.src;
    lightboxTitle.textContent = post.title;
    lightboxMeta.textContent = post.date;
    lightboxDesc.textContent = post.desc;
    
    // Sync interactive states
    updateInteractiveUI();

    lightbox.classList.add('show');
    document.body.style.overflow = 'hidden'; // Disable scroll under popup
}

function closeLightbox() {
    const lightbox = document.getElementById('gallery-lightbox');
    lightbox.classList.remove('show');
    document.body.style.overflow = 'auto'; // Re-enable scroll
}

// Carousel controls
function prevPost(event) {
    if (event) event.stopPropagation();
    let newIndex = currentPostIndex - 1;
    if (newIndex < 0) {
        newIndex = galleryPosts.length - 1;
    }
    openLightbox(newIndex);
}

function nextPost(event) {
    if (event) event.stopPropagation();
    let newIndex = currentPostIndex + 1;
    if (newIndex >= galleryPosts.length) {
        newIndex = 0;
    }
    openLightbox(newIndex);
}

// Interactive states logic backed by localStorage
function updateInteractiveUI() {
    const likeBtn = document.getElementById('lightbox-like-btn');
    const bookmarkBtn = document.getElementById('lightbox-bookmark-btn');
    const likesCount = document.getElementById('lightbox-likes-count');
    const post = galleryPosts[currentPostIndex];

    const isLiked = localStorage.getItem(`cert_like_${currentPostIndex}`) === 'true';
    const isBookmarked = localStorage.getItem(`cert_bookmark_${currentPostIndex}`) === 'true';

    // Like UI
    if (isLiked) {
        likeBtn.classList.add('liked-active');
        likesCount.innerHTML = `Liked by <strong>you</strong> and <strong>recruitment boards</strong> (Verified by <strong>${post.authority}</strong>)`;
    } else {
        likeBtn.classList.remove('liked-active');
        likesCount.innerHTML = `Verified by <strong>${post.authority}</strong> and <strong>recruitment boards</strong>`;
    }

    // Bookmark UI
    if (isBookmarked) {
        bookmarkBtn.classList.add('bookmarked-active');
    } else {
        bookmarkBtn.classList.remove('bookmarked-active');
    }
}

function toggleLike(event) {
    if (event) event.stopPropagation();
    const key = `cert_like_${currentPostIndex}`;
    const wasLiked = localStorage.getItem(key) === 'true';
    localStorage.setItem(key, (!wasLiked).toString());
    
    updateInteractiveUI();
}

function toggleBookmark(event) {
    if (event) event.stopPropagation();
    const key = `cert_bookmark_${currentPostIndex}`;
    const wasBookmarked = localStorage.getItem(key) === 'true';
    localStorage.setItem(key, (!wasBookmarked).toString());
    
    updateInteractiveUI();
}

// Simulated dynamic share functionality
function sharePost(event) {
    if (event) event.stopPropagation();
    
    // Build share link referencing this page and index
    const shareUrl = `${window.location.origin}${window.location.pathname}?page=gallery&item=${currentPostIndex}`;
    
    // Write to clipboard
    navigator.clipboard.writeText(shareUrl).then(() => {
        showToast('🔗 Shareable link copied to clipboard!');
    }).catch(err => {
        showToast('❌ Failed to copy link to clipboard');
    });
}

function showToast(message) {
    const toast = document.getElementById('gallery-toast');
    const messageSpan = toast.querySelector('.gallery-toast-message');
    
    messageSpan.textContent = message;
    
    // Force animation reset
    toast.classList.remove('show');
    void toast.offsetWidth; // Trigger reflow
    toast.classList.add('show');

    // Automatically hide toast after 3 seconds
    setTimeout(() => {
        toast.classList.remove('show');
    }, 3000);
}

// Accessibility and Keyboard Listeners (Arrow navigation + Escape close)
document.addEventListener('keydown', function(event) {
    const lightbox = document.getElementById('gallery-lightbox');
    if (!lightbox.classList.contains('show')) return;

    if (event.key === 'Escape') {
        closeLightbox();
    } else if (event.key === 'ArrowLeft') {
        prevPost(event);
    } else if (event.key === 'ArrowRight') {
        nextPost(event);
    }
});

// Support reading direct item links on initial load (Deep-linking feature!)
window.addEventListener('DOMContentLoaded', () => {
    const urlParams = new URLSearchParams(window.location.search);
    const itemParam = urlParams.get('item');
    if (itemParam !== null) {
        const index = parseInt(itemParam, 10);
        if (!isNaN(index) && index >= 0 && index < galleryPosts.length) {
            // Delay slightly to allow layout and animations to settle
            setTimeout(() => {
                openLightbox(index);
            }, 300);
        }
    }
});
</script>

<?php include 'includes/footer.php'; ?>
