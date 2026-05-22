<?php
$page_title = "Portfolio - Irish Cueva";
include 'includes/header.php';
?>

<main class="container">
    <section class="projects-container">
        <!-- 🚀 Portfolio Header Panel -->
        <div class="projects-hero">
            <h2>📂 My Portfolio Showcase</h2>
            <p>Explore a collection of dynamic web applications, databases, and programming scripts I've built as an IT student.</p>
            
            <!-- Dynamic Stats Board -->
            <div class="projects-stats">
                <div class="stat-bubble">
                    <span class="stat-num">06</span>
                    <span class="stat-label">Total Works</span>
                </div>
                <div class="stat-bubble">
                    <span class="stat-num">03</span>
                    <span class="stat-label">Languages</span>
                </div>
                <div class="stat-bubble">
                    <span class="stat-num">100%</span>
                    <span class="stat-label">Student Built</span>
                </div>
            </div>
        </div>

        <!-- 🏷️ Dynamic Category Tabs -->
        <div class="projects-tabs">
            <button class="tab-pill active" onclick="filterPortfolio('all')">📂 All Works</button>
            <button class="tab-pill" onclick="filterPortfolio('backend')">🐘 Backend (PHP/SQL)</button>
            <button class="tab-pill" onclick="filterPortfolio('frontend')">⚡ Frontend (JS/CSS)</button>
        </div>

        <!-- 📂 Grid List of Portfolio Cards -->
        <div class="projects-grid-modern">
            <!-- Project 1: Blog -->
            <div class="project-card-modern" data-category="backend">
                <div class="card-visual-top block-purple">
                    <span class="visual-emoji">📝</span>
                </div>
                <div class="card-body-modern">
                    <span class="category-tag tag-backend">PHP / MySQL</span>
                    <h3>Portfolio Blog System</h3>
                    <p>A fully responsive multi-user blog system featuring custom Whitelist URL parameters, MD5 password encryption, dynamic comments, and advanced search criteria.</p>
                    <div class="project-tech-tags">
                        <span>PHP</span>
                        <span>MySQL</span>
                        <span>CSS Grid</span>
                        <span>Session Auth</span>
                    </div>
                </div>
            </div>

            <!-- Project 2: E-commerce -->
            <div class="project-card-modern" data-category="backend">
                <div class="card-visual-top block-teal">
                    <span class="visual-emoji">🛒</span>
                </div>
                <div class="card-body-modern">
                    <span class="category-tag tag-backend">PHP / Bootstrap</span>
                    <h3>E-commerce Catalog</h3>
                    <p>A beautiful catalog website built to list high-end product grids, containing custom category filters, admin item creations, and an automated shopping cart mock.</p>
                    <div class="project-tech-tags">
                        <span>Bootstrap</span>
                        <span>PHP</span>
                        <span>Responsive</span>
                    </div>
                </div>
            </div>

            <!-- Project 3: Restaurant -->
            <div class="project-card-modern" data-category="backend">
                <div class="card-visual-top block-amber">
                    <span class="visual-emoji">🍽️</span>
                </div>
                <div class="card-body-modern">
                    <span class="category-tag tag-backend">PHP / MySQL</span>
                    <h3>Restaurant Reservation</h3>
                    <p>A web application allowing users to book tables dynamically, featuring instant database entries validation, table slot checks, and admin status panels.</p>
                    <div class="project-tech-tags">
                        <span>MySQL</span>
                        <span>PHP PDO</span>
                        <span>Admin CRUD</span>
                    </div>
                </div>
            </div>

            <!-- Project 4: Weather -->
            <div class="project-card-modern" data-category="frontend">
                <div class="card-visual-top block-blue">
                    <span class="visual-emoji">🌤️</span>
                </div>
                <div class="card-body-modern">
                    <span class="category-tag tag-frontend">JavaScript / API</span>
                    <h3>Weather Analytics App</h3>
                    <p>A highly interactive single-page app displaying real-time weather analytics, humidity metrics, and wind forecasts using external RESTful API requests.</p>
                    <div class="project-tech-tags">
                        <span>JavaScript</span>
                        <span>Fetch API</span>
                        <span>AJAX</span>
                        <span>JSON</span>
                    </div>
                </div>
            </div>

            <!-- Project 5: Task Manager -->
            <div class="project-card-modern" data-category="frontend">
                <div class="card-visual-top block-green">
                    <span class="visual-emoji">✅</span>
                </div>
                <div class="card-body-modern">
                    <span class="category-tag tag-frontend">HTML5 / JavaScript</span>
                    <h3>Task Board Manager</h3>
                    <p>A beautifully stylized Kanban-inspired task dashboard, featuring dynamic tasks additions, completions toggling, and data persistence using localStorage.</p>
                    <div class="project-tech-tags">
                        <span>HTML5</span>
                        <span>CSS Variables</span>
                        <span>Local Storage</span>
                    </div>
                </div>
            </div>

            <!-- Project 6: Grade Calc -->
            <div class="project-card-modern" data-category="frontend">
                <div class="card-visual-top block-pink">
                    <span class="visual-emoji">📊</span>
                </div>
                <div class="card-body-modern">
                    <span class="category-tag tag-frontend">JS / CSS Grid</span>
                    <h3>Student Grade Board</h3>
                    <p>A custom analytical calculator allowing students to calculate grade point averages (GPA), compute final marks, and view charts using dynamic input sliders.</p>
                    <div class="project-tech-tags">
                        <span>Chart.js</span>
                        <span>CSS Flexbox</span>
                        <span>Formula Script</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
function filterPortfolio(category) {
    // Toggle active tab state
    const tabs = document.querySelectorAll('.tab-pill');
    tabs.forEach(tab => tab.classList.remove('active'));
    event.currentTarget.classList.add('active');
    
    // Filter portfolio cards
    const cards = document.querySelectorAll('.project-card-modern');
    cards.forEach(card => {
        if (category === 'all') {
            card.style.display = 'flex';
        } else {
            const cardCat = card.getAttribute('data-category');
            card.style.display = (cardCat === category) ? 'flex' : 'none';
        }
    });
}
</script>

<?php include 'includes/footer.php'; ?>
