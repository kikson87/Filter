<?php

 function filter_booking_kikson( $atts ){ ?>
    
    <div class="filter-booking-kikson">
        <form action="#">
        <div class="location">
            <div class="preview-location">
                <div class="preview-location-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.75 12h18.5c.69 0 1.25.56 1.25 1.25V18l.75-.75H.75l.75.75v-4.75c0-.69.56-1.25 1.25-1.25zm0-1.5A2.75 2.75 0 0 0 0 13.25V18c0 .414.336.75.75.75h22.5A.75.75 0 0 0 24 18v-4.75a2.75 2.75 0 0 0-2.75-2.75H2.75zM0 18v3a.75.75 0 0 0 1.5 0v-3A.75.75 0 0 0 0 18zm22.5 0v3a.75.75 0 0 0 1.5 0v-3a.75.75 0 0 0-1.5 0zm-.75-6.75V4.5a2.25 2.25 0 0 0-2.25-2.25h-15A2.25 2.25 0 0 0 2.25 4.5v6.75a.75.75 0 0 0 1.5 0V4.5a.75.75 0 0 1 .75-.75h15a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 0 1.5 0zm-13.25-3h7a.25.25 0 0 1 .25.25v2.75l.75-.75h-9l.75.75V8.5a.25.25 0 0 1 .25-.25zm0-1.5A1.75 1.75 0 0 0 6.75 8.5v2.75c0 .414.336.75.75.75h9a.75.75 0 0 0 .75-.75V8.5a1.75 1.75 0 0 0-1.75-1.75h-7z"></path></svg>
                </div>
                <div class="preview-location-text">
                    <input type="text" placeholder="Where are you going?">
                    <div class="search-location"></div>
                </div>
            </div>
        </div>
        <div class="calendar">
            <div class="preview-calendar">
                <div class="preview-calendar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22.5 13.5v8.25a.75.75 0 0 1-.75.75H2.25a.75.75 0 0 1-.75-.75V5.25a.75.75 0 0 1 .75-.75h19.5a.75.75 0 0 1 .75.75v8.25zm1.5 0V5.25A2.25 2.25 0 0 0 21.75 3H2.25A2.25 2.25 0 0 0 0 5.25v16.5A2.25 2.25 0 0 0 2.25 24h19.5A2.25 2.25 0 0 0 24 21.75V13.5zm-23.25-3h22.5a.75.75 0 0 0 0-1.5H.75a.75.75 0 0 0 0 1.5zM7.5 6V.75a.75.75 0 0 0-1.5 0V6a.75.75 0 0 0 1.5 0zM18 6V.75a.75.75 0 0 0-1.5 0V6A.75.75 0 0 0 18 6zM5.095 14.03a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm5.845-3.97a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28A1.125 1.125 0 1 0 12 15a1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zM12 18a1.125 1.125 0 1 0 0 2.25A1.125 1.125 0 0 0 12 18a.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm5.845-3.97a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5zm-.53 6.53a.75.75 0 1 0 1.06-1.06.75.75 0 0 0-1.06 1.06zm.53-1.28a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25.75.75 0 0 0 0 1.5.375.375 0 1 1 0-.75.375.375 0 0 1 0 .75.75.75 0 0 0 0-1.5z"></path></svg>
                </div>
                <div class="preview-calendar-text">Check-in Date - Check-out Date</div>
            </div>
            <div class="owl-carousel owl-calendar">
            <?php 

                $book = date('n');
                $days_in_curent_month = cal_days_in_month(CAL_GREGORIAN, date('n'), date('Y'));
                
                switch ($book) {
                    case 01:
                        echo "January"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 02:
                        echo "February"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 03:
                        echo "March"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 04:
                        echo "April"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 05:
                        #echo "May"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){ ?>
                                <?php if($days === 0){ echo '<div class="mounth-title">May</div>'; } ?>
                                <div class="single-date"><?php echo $days + 1 . ' '; ?></div>
                            <?php } ?>
                        </div>
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){ ?>
                                <?php if($days === 0){ echo '<div class="mounth-title">June</div>'; } ?>
                                <div class="single-date"><?php echo $days + 1 . ' '; ?></div>
                            <?php } ?>
                        </div>
                        <?php
                        break;
                    case 06:
                        echo "June"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 7:
                        echo "July"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 8:
                        echo "August"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 9:
                        echo "September"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 10:
                        echo "October"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 11:
                        echo "November"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                    case 12:
                        echo "December"; ?> 
                        <div class="single-mounth">
                            <?php for($days = 0; $days < $days_in_curent_month; $days++){
                                echo $days + 1 . ' ';
                            } ?>
                        </div>
                        <?php echo $book;
                        break;
                } ?>

            </div>
        </div>
        <div class="person">
            <div class="preview-person">
                <div class="preview-person-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16.5 6a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0zM18 6A6 6 0 1 0 6 6a6 6 0 0 0 12 0zM3 23.25a9 9 0 1 1 18 0 .75.75 0 0 0 1.5 0c0-5.799-4.701-10.5-10.5-10.5S1.5 17.451 1.5 23.25a.75.75 0 0 0 1.5 0z"></path></svg>
                </div>
                <div class="preview-person-text">2 adults · 0 children · 1 room</div>
            </div>
            <div class="calculate-person">
            <div class="adults">
                <div class="adults-text">Adults</div>
                <div class="adults-calculate">
                    <div class="minus">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.25 12.75H3.75a.75.75 0 0 1 0-1.5h16.5a.75.75 0 0 1 0 1.5z"></path></svg>
                    </div>
                    <div class="value" data="1">1</div>
                    <div class="plus">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.25 11.25h-7.5v-7.5a.75.75 0 0 0-1.5 0v7.5h-7.5a.75.75 0 0 0 0 1.5h7.5v7.5a.75.75 0 0 0 1.5 0v-7.5h7.5a.75.75 0 0 0 0-1.5z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="children">
                <div class="children-text">Children</div>
                <div class="children-calculate">
                    <div class="minus">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.25 12.75H3.75a.75.75 0 0 1 0-1.5h16.5a.75.75 0 0 1 0 1.5z"></path></svg>
                    </div>
                    <div class="value" data="0">0</div>
                    <div class="plus">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.25 11.25h-7.5v-7.5a.75.75 0 0 0-1.5 0v7.5h-7.5a.75.75 0 0 0 0 1.5h7.5v7.5a.75.75 0 0 0 1.5 0v-7.5h7.5a.75.75 0 0 0 0-1.5z"></path></svg>
                    </div>
                </div>
            </div>
            <div class="rooms">
                <div class="rooms-text">Rooms</div>
                <div class="rooms-calculate">
                    <div class="minus">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.25 12.75H3.75a.75.75 0 0 1 0-1.5h16.5a.75.75 0 0 1 0 1.5z"></path></svg>
                    </div>
                    <div class="value" data="1">1</div>
                    <div class="plus">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.25 11.25h-7.5v-7.5a.75.75 0 0 0-1.5 0v7.5h-7.5a.75.75 0 0 0 0 1.5h7.5v7.5a.75.75 0 0 0 1.5 0v-7.5h7.5a.75.75 0 0 0 0-1.5z"></path></svg>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="search"><button type="submit">Search</button></div>
        </form>
    </div>

    <?php return $tester;
} ?>
