<?php
$page_title = "About - Irish Cueva";
include 'includes/header.php';
?>

<main class="container">
    <section class="profile-page-section">

        <!-- ─── TOP PROFILE CARD ─── -->
        <div class="profile-hero-card">
            <div class="profile-hero-left">
                <div class="profile-picture-large">
                    <img src="uploads/profile.jpg.jpg"
                        alt="Irish Cueva"
                        class="profile-photo"
                        onerror="this.style.display='none'; document.getElementById('profile-fallback').style.display='inline-flex';">
                    <div class="avatar-initials avatar-initials-xxl" id="profile-fallback" style="display:none;">IC</div>
                </div>
                <h2 class="profile-name">Irish Cueva</h2>
                <p class="profile-title">Web Developer & IT Student</p>
                <div class="profile-info">
                    <p>📍 Talisay City, Cebu</p>
                    <p>🎓 Talisay City College</p>
                    <p>💻 BSIT Student</p>
                </div>
            </div>
            <div class="profile-hero-right">
                <div class="profile-intro-box">
                    <h3 class="intro-heading">Hi, I'm Irish Cueva!</h3>
                    <p class="intro-text">I'm a passionate web developer and IT student based in Talisay City, Cebu. I love creating beautiful and functional websites that solve real-world problems.</p>
                </div>

                <!-- Personal Details + Hobbies Side by Side -->
                <div class="profile-details-hobbies-row">
                    <!-- Personal Details -->
                    <div class="profile-details-card">
                        <h4 class="section-subheading">📋 Personal Details</h4>
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
                    </div>

                    <!-- Hobbies & Interests -->
                    <div class="profile-hobbies-card">
                        <h4 class="section-subheading">✨ Hobbies & Interests</h4>
                        <div class="hobbies-grid">
                            <div class="hobby-item">
                                <span class="hobby-icon">📚</span>
                                <span class="hobby-label">Reading Books</span>
                            </div>
                            <div class="hobby-item">
                                <span class="hobby-icon">🎬</span>
                                <span class="hobby-label">Watching Movies</span>
                            </div>
                            <div class="hobby-item">
                                <span class="hobby-icon">🎮</span>
                                <span class="hobby-label">Playing Mobile Games</span>
                            </div>
                            <div class="hobby-item">
                                <span class="hobby-icon">☕</span>
                                <span class="hobby-label">Making DIY Coffee</span>
                            </div>
                            <div class="hobby-item">
                                <span class="hobby-icon">🎵</span>
                                <span class="hobby-label">Listening to Music</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ─── EDUCATION + ACHIEVEMENTS ROW ─── -->
        <div class="profile-bottom-row">

            <!-- Educational Attainment -->
            <div class="profile-education-card">
                <h3 class="section-heading">🎓 Educational Attainment</h3>

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
            </div>

            <!-- Academic Achievements -->
            <div class="profile-achievements-card">
                <h3 class="section-heading">🏆 Academic Achievements</h3>

                <div class="achievement-category">
                    <h4>Secondary Education</h4>
                    <div class="achievement-list">
                        <div class="achievement-item">
                            <span class="achievement-icon">🎖️</span>
                            <div class="achievement-details">
                                <strong>Grade 7 - Conduct Award</strong>
                                <p>Recognized for exemplary behavior and discipline</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-icon">🎖️</span>
                            <div class="achievement-details">
                                <strong>Grade 8 - Conduct Award</strong>
                                <p>Recognized for exemplary behavior and discipline</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-icon">⭐</span>
                            <div class="achievement-details">
                                <strong>Grade 9 - With Honors</strong>
                                <p>Academic excellence recognition</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-icon">⭐</span>
                            <div class="achievement-details">
                                <strong>Grade 10 - With Honor</strong>
                                <p>Academic excellence recognition</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="achievement-category">
                    <h4>Senior High School</h4>
                    <div class="achievement-list">
                        <div class="achievement-item">
                            <span class="achievement-icon">🌟</span>
                            <div class="achievement-details">
                                <strong>Grade 11-12 - With Honor</strong>
                                <p>Consistent academic performance</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="achievement-category">
                    <h4>College - Talisay City College</h4>
                    <div class="achievement-list">
                        <div class="achievement-item">
                            <span class="achievement-icon">🏅</span>
                            <div class="achievement-details">
                                <strong>2023-2024 | 1st Semester</strong>
                                <p>Dean's Lister</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-icon">🏅</span>
                            <div class="achievement-details">
                                <strong>2024-2025 | 1st Semester</strong>
                                <p>Dean's Lister</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-icon">🏅</span>
                            <div class="achievement-details">
                                <strong>2024-2025 | 2nd Semester</strong>
                                <p>Dean's Lister</p>
                            </div>
                        </div>
                        <div class="achievement-item">
                            <span class="achievement-icon">🏅</span>
                            <div class="achievement-details">
                                <strong>2025-2026 | 1st Semester</strong>
                                <p>Dean's Lister</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="achievement-summary">
                    <p>🎯 <strong>Total Dean's List:</strong> 4 consecutive semesters</p>
                    <p>📚 <strong>Academic Honors:</strong> 3 years (Grades 9-12)</p>
                    <p>🎖️ <strong>Conduct Awards:</strong> 2 years (Grades 7-8)</p>
                </div>
            </div>

        </div><!-- /.profile-bottom-row -->

    </section>
</main>

<?php include 'includes/footer.php'; ?>