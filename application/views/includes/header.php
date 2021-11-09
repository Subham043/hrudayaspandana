<nav id="navbar">
    <div class="wrapper">
        <div class="row">
            <div class="nav-logo">
                <a href="<?php echo base_url(); ?>" class="logo-link">
                    <img  onContextMenu="return false;"  src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="logo-img">
                </a>
            </div>
            <button id="nav_menu_btn" menu="close">
                <i class="fas fa-bars"></i>
            </button>
            <div class="nav-menu" id="nav_menu">
                <ul class="menu-row" id="responsive-menu">
                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'about') ? 'active-menu-link' :'' ?>" href="#">About Us</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('about'); ?>">Introduction</a></li>
                            <li><a href="#">Leadership Team</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Testimonial</a></li>
                        </ul>
                    </li>
                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'donation') ? 'active-menu-link' :'' ?>" href="#">Donation</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('donation'); ?>">Donation</a></li>
                            <li><a href="<?php echo base_url('e-hundi'); ?>">E-Hundi</a></li>
                        </ul>
                    </li>
                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'events') ? 'active-menu-link' :'' ?>" href="#">Events</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('events/past-events'); ?>">Past Events</a></li>
                            <li><a href="<?php echo base_url('events/upcoming-events'); ?>">Upcoming Events</a></li>
                        </ul>
                    </li>
                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'gallery') ? 'active-menu-link' :'' ?>" href="#">Gallery</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('gallery/audios'); ?>">Audios</a></li>
                            <li><a href="<?php echo base_url('gallery/images'); ?>">Images</a></li>
                            <li><a href="<?php echo base_url('gallery/videos'); ?>">Videos</a></li>
                        </ul>
                    </li>
                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'literature') ? 'active-menu-link' :'' ?>" href="#">Insights</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('literature'); ?>">Literature</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Crossword</a></li>
                        </ul>
                    </li>
                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'volunteer' || $this->uri->segment(1) == 'contact') ? 'active-menu-link' :'' ?>" href="#">Join Hands</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('volunteer'); ?>">Volunteer</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="<?php echo base_url('contact'); ?>">Message us</a></li>
                            <li><a href="#">Find Us</a></li>
                        </ul>
                    </li>

                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'services') ? 'active-menu-link' :'' ?>" href="#">Services</a>
                        <ul class="child">
                        <?php
                        if (!empty($dynamic_activity)) {
                            ?>
                            <li class="parent"><a href="#">Activity<span class="expand">»</span></a>
                                <ul class="child">
                                <?php
                                foreach ($dynamic_activity as $key => $value) { 
                                ?>
                                    <li><a href="<?php echo base_url('services/vedic-rituals/'.$this->encrypt->encode($value->id)); ?>" nowrap><?php echo $value->page; ?></a></li>
                                <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php
                        if (!empty($dynamic_manava_seva)) {
                            ?>
                            <li class="parent"><a href="#">Manava Seva<span class="expand">»</span></a>
                                <ul class="child">
                                <?php
                                foreach ($dynamic_manava_seva as $key => $value) { 
                                ?>
                                    <li><a href="<?php echo base_url('services/sevas/'.$this->encrypt->encode($value->id)); ?>" nowrap><?php echo $value->page; ?></a></li>
                                <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php
                        if (!empty($dynamic_madhava_seva)) {
                            ?>
                            <li class="parent"><a href="#">Madhava Seva<span class="expand">»</span></a>
                                <ul class="child">
                                <?php
                                foreach ($dynamic_madhava_seva as $key => $value) { 
                                ?>
                                    <li><a href="<?php echo base_url('services/sevas/'.$this->encrypt->encode($value->id)); ?>" nowrap><?php echo $value->page; ?></a></li>
                                <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        <?php
                        if (!empty($dynamic_vedic)) {
                            ?>
                            <li class="parent"><a href="#">Vedic Rituals<span class="expand">»</span></a>
                                <ul class="child">
                                <?php
                                foreach ($dynamic_vedic as $key => $value) { 
                                ?>
                                    <li><a href="<?php echo base_url('services/vedic-rituals/'.$this->encrypt->encode($value->id)); ?>" nowrap><?php echo $value->page; ?></a></li>
                                <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>

                        

                        </ul>
                    </li>
                    <!-- <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'login' || $this->uri->segment(1) == 'register') ? 'active-menu-link' :'' ?>" href="#">User</a>
                        <ul class="child">
                            <?php 
                            if ($this->session->userdata('user_id') != '') { ?>
                            <li><a href="<?php echo base_url('payment-data'); ?>">Payments</a></li>
                            <li><a href="<?php echo base_url('logout'); ?>">Log out</a></li>
                            <?php }else{ ?>
                                <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                                <li><a href="<?php echo base_url('register'); ?>">Register</a></li>
                            <?php } ?>
                        </ul>
                    </li> -->
                    <li class="menu-li">
                        <a href="<?php echo base_url('login'); ?>" class="menu-call-to-action">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

