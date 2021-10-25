<nav id="navbar">
    <div class="wrapper">
        <div class="row">
            <div class="nav-logo">
                <a href="<?php echo base_url(); ?>" class="logo-link">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="logo-img">
                </a>
            </div>
            <button id="nav_menu_btn" menu="close">
                <i class="fas fa-bars"></i>
            </button>
            <div class="nav-menu" id="nav_menu">
                <ul class="menu-row" id="responsive-menu">
                    <li class="menu-li">
                        <a href="<?php echo base_url(); ?>"
                            class="menu-links <?php echo empty($this->uri->segment(1)) ? 'active-menu-link' :'' ?>">Home</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo base_url('about'); ?>"
                            class="menu-links <?php echo($this->uri->segment(1) == 'about') ? 'active-menu-link' :'' ?>">About</a>
                    </li>

                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'services') ? 'active-menu-link' :'' ?>" href="#">Services</a>
                        <ul class="child">
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
                            <li class="parent"><a href="#">Manava Seva<span class="expand">»</span></a>
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

                        </ul>
                    </li>

                    <li class="menu-li parent"><a class="menu-links <?php echo($this->uri->segment(1) == 'events') ? 'active-menu-link' :'' ?>" href="#">Events</a>
                        <ul class="child">
                            <li><a href="<?php echo base_url('events/manava-seva'); ?>">Manava Seva</a></li>
                            <li><a href="<?php echo base_url('events/madhava-seva'); ?>">Madhava Seva</a></li>
                        </ul>
                    </li>

                    <li class="menu-li">
                        <a href="<?php echo base_url('volunteer'); ?>"
                            class="menu-links <?php echo($this->uri->segment(1) == 'volunteer') ? 'active-menu-link' :'' ?>">Volunteer</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo base_url('literature'); ?>"
                            class="menu-links <?php echo($this->uri->segment(1) == 'literature') ? 'active-menu-link' :'' ?>">Literature</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo base_url('donation'); ?>"
                            class="menu-links <?php echo($this->uri->segment(1) == 'donation') ? 'active-menu-link' :'' ?>">Donation</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo base_url('blogs'); ?>"
                            class="menu-links <?php echo($this->uri->segment(1) == 'blogs') ? 'active-menu-link' :'' ?>">Blogs</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo base_url('contact'); ?>"
                            class="menu-links <?php echo($this->uri->segment(1) == 'contact') ? 'active-menu-link' :'' ?>">Contact
                            Us</a>
                    </li>
                    <li class="menu-li">
                        <a href="<?php echo base_url('e-hundi'); ?>" class="menu-call-to-action">E-Hundi</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

