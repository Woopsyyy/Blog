<?php
$page_title = "About Me - Irish Cueva";
include 'includes/header.php';
?>

<main class="container">
    <section class="about-section">
        <div class="about-header">
            <h2>About Me</h2>
            <p>Get to know more about who I am and what I do</p>
        </div>

        <div class="about-content">
            <div class="about-image">
                <div class="profile-picture">
                    <img src="uploads/profile.jpg.jpg" 
                         alt="Irish Cueva" 
                         class="profile-photo"
                         style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; border: 5px solid white; box-shadow: 0 8px 25px rgba(0,0,0,0.1);"
                         onerror="this.style.display='none'; document.getElementById('about-fallback').style.display='inline-flex';">
                    <div class="avatar-initials avatar-initials-xl" id="about-fallback" style="display:none;" title="Irish Cueva">IC</div>
                    <p class="img-note">Irish Cueva</p>
                </div>
            </div>
            <div class="about-text">
                <h3>Hi, I'm Irish Cueva!</h3>
                <p>I'm a passionate web developer and IT student based in Talisay City, Cebu. I love creating beautiful and functional websites that solve real-world problems.</p>
                
                <h3>Personal Details</h3>
                <div class="personal-details">
                    <div class="detail-row">
                        <span class="detail-label">Date of Birth:</span>
                        <span class="detail-value">November 27, 2004</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Place of Birth:</span>
                        <span class="detail-value">Old Namangka, Mabinay, Negros Oriental</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Age:</span>
                        <span class="detail-value">20 years old</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Height:</span>
                        <span class="detail-value">4'9"</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Weight:</span>
                        <span class="detail-value">92 lbs.</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Citizenship:</span>
                        <span class="detail-value">Filipino</span>
                    </div>
                </div>

                <h3>Educational Attainment</h3>
                
                <div class="education-item">
                    <div class="education-level">🎓 TERTIARY</div>
                    <div class="education-details">
                        <strong>Talisay City College</strong><br>
                        Poblacion, Talisay City, Cebu<br>
                        S.Y. 2023 - Present
                    </div>
                </div>

                <div class="education-item">
                    <div class="education-level">📚 SECONDARY</div>
                    <div class="education-details">
                        <strong>St. Scholastica's Academy - Tabunok</strong><br>
                        S.Y. 2017-2019<br><br>
                        <strong>Tabunok National High School</strong><br>
                        S.Y. 2019-2021<br><br>
                        <strong>Academia System Global Colleges</strong><br>
                        S.Y. 2021-2023
                    </div>
                </div>

                <div class="education-item">
                    <div class="education-level">✏️ BASIC EDUCATION</div>
                    <div class="education-details">
                        <strong>Tabunoc Central School</strong><br>
                        S.Y. 2011-2017
                    </div>
                </div>

                <h3>Skills</h3>
                <ul class="skills-list">
                    <li>📝 HTML & CSS</li>
                    <li>⚡ JavaScript</li>
                    <li>🐘 PHP & MySQL</li>
                    <li>🎨 UI/UX Design</li>
                    <li>📱 Responsive Design</li>
                </ul>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
