<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LLPS GAME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
</head>

<body>

    <div class="container-fluid">
        <div class="chat-container">
            <!-- Sidebar -->
            <div class="sidebar">
                <div>
                    <div class="sidebar-logo">
                        <img src="assets/images/logo.png" alt="Logo">
                        <div class="sidebar-logo-text">LLPS GAME</div>
                    </div>

                    <span class="headertext">Levels</span>

                    <ul class="nav flex-column mb-3">
                        <li class="nav-item lev">
                            <a class="nav-link lev" href="#">Level 1</a>
                        </li>
                        <li class="nav-item lev">
                            <a class="nav-link locked" href="#">Level 2 <i class="fas fa-lock"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link locked" href="#">Level 3 <i class="fas fa-lock"></i></a>
                        </li>
                    </ul>

                    <span class="headertext">Navigation</span>

                    <ul class="nav flex-column mb-3">
                        <li class="nav-item lev">
                            <a class="nav-link lev" href="#">Grades <i class="fas fa-graduation-cap"></i></a>
                        </li>
                        <li class="nav-item lev">
                            <a class="nav-link lev" href="#">Settings <i class="fas fa-cog"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="bottom-cont">
                    <a href="#" class="logout" style="text-decoration:none; font-weight: 600; margin-left: -70px; margin-bottom: 15px;">Logout <span style="margin-left: 8px;"><i class="fas fa-sign-out-alt"></i></span></a>
                    <a href="#" class="profile-link"><img src="assets/images/user.jpg" alt="Profile"> Henry Tembo</a>
                </div>
            </div>

            <!-- Main content -->
            <div class="main-content">
                <div class="det-cont">
                    <span class="level-cont">
                        <h3>Level 1</h3>
                        <span class="count">1/20</span>
                    </span>
                    <span class="agscore">
                        Aggregate Score <span class="score">50%</span>
                    </span>
                </div>
                <div class="chat-box">
                    <div class="chat-messages">
                        <!-- User message -->
                        <div class="message user-message">
                            <span class="denoter">Translate</span>
                            <span class="msg">Muli bwanji?</span>
                        </div>
                        <!-- System message -->
                        <div class="message bot-message">
                            <span class="denoter">Student</span>
                            <span class="msg">How is your day?</span>
                        </div>

                        <div class="message user-message">
                            <span class="denoter">Answer</span>
                            <span class="msg">How are you doing?</span>
                            <div class="level-score">
                                Score <span class="score">50%</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Input box fixed at the bottom -->
    <div class="input-group fixed-bottom">
        <input type="text" class="form-control" placeholder="Type to Translate...">
        <button class="goal-btn">GO</button>
    </div>

</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</html>