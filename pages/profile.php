<?php
$page_title = "Profile - Irish Cueva";
include 'includes/header.php';
?>

<main class="container">
    <section class="profile-section">
        <div class="profile-container">
            <!-- Left Side: Profile Picture & Name -->
            <div class="profile-left">
                <div class="profile-card">
                    <div class="profile-picture-large">
                        <img src="uploads/profile.jpg.jpg"
                             alt="Irish Cueva"
                             class="profile-photo"
                             onerror="this.style.display='none'; document.getElementById('profile-fallback').style.display='inline-flex';">
                        <div class="avatar-initials avatar-initials-xxl" id="profile-fallback" style="display:none;">IC</div>
                    </div>
                    <h2 class="profile-name">Irish Cueva</h2>
                    <p class="profile-title">IT Student & Web Developer</p>
                    <div class="profile-info">
                        <p>📍 Talisay City, Cebu</p>
                        <p>🎓 Talisay City College</p>
                        <p>💻 BSIT Student</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Credentials & Achievements -->
            <div class="profile-right">
                <div class="credentials-section">
                    <h3>🏆 Academic Achievements</h3>
                    
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
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
