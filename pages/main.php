<?php
//$users = User::getAllUsers();
//var_dump($users);
?>
<main class="profile-wrapper">
    <div class="main">
        <div class="rawbar">
            <div class="logo">
                <a href="index.php">
                    <div id="logo-img"></div>
                </a>
                <p class="logo-name">WhatUpTo</p>
            </div>
            <div class="user">
                <img id="user-photo" src="img/andrzej.jpg" alt="profile image">
                <p class="greeting">Hi <?php echo $_SESSION['username']; ?>, what are you up to?</p>
            </div>
        </div>
        <div class="center">
            <div class="menu">
                <a href="index.php?action=settings"><img class="setting" src="img/setting.png"></a>
                <a href="index.php?action=logout"><img class="log-out" src="img/log-out.png"></a>
            </div>
            <div class="sidebar">
                <div class="box-h1">Friends</div>
                <div class="sidebar-znajomi">

                    <?php
                    require_once "engine/connect.php";
                    require_once "engine/user.php";
                    connect::connectionInit();
                    $lol = user::getAllUsers();
                    foreach ($lol as $user) {
                        echo "<div class=\"box\">
                        <img class=\"znajomy-photo\" src=\"https://microbitpolska.org/static/img/profile.png\">
                        <p class=\"chat_name\">" . $user . "</p>
                    </div>";
                    }

                    ?>
                </div>
                <div class="box-h1">Other users</div>
                <div class="sidebar-znajomi">
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Grzegorz Tluszcz</p>
                    </div>
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Paulina Kaplon</p>
                    </div>
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Maja Gruca</p>
                    </div>
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Ignacy Radlinski</p>
                    </div>
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Agnieszka Miszkurka</p>
                    </div>
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Zofia Owsiak</p>
                    </div>
                    <div class="box">
                        <img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png">
                        <p class="chat_name">Karol Piwnicki</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="calendar">
                <div class="calendar-header">
                    <h2 class="add-title">Update your calendar with plans</h2>

                    <input class="add-field" name="action-tag" type="text" placeholder="Tags">
                    <input class="add-field" name="day-of-the-week" type="text" placeholder="Weekday">
                    <input class="add-field" name="hoursstart" type="text" placeholder="Starting Hour">
                    <input class="add-field" name="hoursfinish" type="text" placeholder="Finishing Hour">
                    <button class="add-button">Add block</button>

                    <a class="prev" href="#">&#10094;</a>
                    <a class="next" href="#">&#10095;</a>
                    <div class="date">27.11 - 03.12</div>
                </div>
                <div class="weekdays">
                    <div class="day">
                        <div class="name-day">Hours</div>
                        <div class="plan">
                            <ul class="hours">
                                <li>0:00-1:00</li>
                                <li>1:00-2:00</li>
                                <li>2:00-3:00</li>
                                <li>3:00-4:00</li>
                                <li>4:00-5:00</li>
                                <li>5:00-6:00</li>
                                <li>6:00-7:00</li>
                                <li>7:00-8:00</li>
                                <li>8:00-9:00</li>
                                <li>9:00-10:00</li>
                                <li>10:00-11:00</li>
                                <li>11:00-12:00</li>
                                <li>12:00-13:00</li>
                                <li>13:00-14:00</li>
                                <li>14:00-15:00</li>
                                <li>15:00-16:00</li>
                                <li>16:00-17:00</li>
                                <li>17:00-18:00</li>
                                <li>18:00-19:00</li>
                                <li>19:00-20:00</li>
                                <li>20:00-21:00</li>
                                <li>21:00-22:00</li>
                                <li>22:00-23:00</li>
                                <li>23:00-24:00</li>
                            </ul>
                        </div>
                    </div>

                    <?php include 'engine/plan.php'; ?>

                </div>
            </div>
        </div>
        <div class="chat-window">
            <div class="bar">
                John Kowalsky
            </div>

            <ul class="chat-messages">
                <li class="chat-message-1">hello, whats up?</li>
                <li class="chat-message-2">hi!</li>
                <li class="chat-message-1">This Hackathon is sooo hard</li>
                <li class="chat-message-2">Mb we will win?</li>
                <li class="chat-message-1">sure!</li>
                <li class="chat-message-2">?</li>
                <li class="chat-message-1">Do we even have what it takes to present it?</li>
                <li class="chat-message-2">oh, u're right...</li>
                <li class="chat-message-1">I want to go to bed</li>
                <li class="chat-message-2">oh c'mon, lets coooodeeee...</li>
                <li class="chat-message-1">yea, sure...</li>
                <li class="chat-message-1">We got it!</li>
            </ul>
            <input class="write-message" type="text" placeholder="Type message...">
        </div>
</main>
