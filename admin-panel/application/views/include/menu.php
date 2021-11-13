<?php   $this->ci =& get_instance(); ?>
<div class="col l3 m12 s12">
    <div class="menu-left men-hgh">
        <ul class="men-ul">
            <li><a href="<?php echo base_url() ?>dashboard"
                    class="<?php echo($this->uri->segment(1) == 'dashboard') ? 'active' :'' ?>"><i
                        class="fab fa-delicious li-icon"></i>Dashboard</a></li>
            <li><a class="<?php echo $this->uri->segment(1) == 'registration'?'active':'' ?>"
                    href="<?php echo base_url('registration') ?>"><i class="fas fa-user li-icon"></i>
                    Registration</a>
            </li>
            <li><a class="<?php echo $this->uri->segment(1) == 'enquiries'?'active':'' ?>"
                    href="<?php echo base_url('enquiries') ?>"><i class="fas fa-envelope li-icon"></i>
                    Enquiries</a>
            </li>
            <!-- <li><a class="<?php echo $this->uri->segment(1) == 'donation'?'active':'' ?>"
                    href="<?php echo base_url('donation') ?>"><i class="fas fa-hand-holding-usd li-icon"></i>
                    Donation</a>
            </li> -->
            <ul class="collapsible men-lft">
                <li class="si-m si-d">
                    <div class="collapsible-header"><i class="fas fa-hand-holding-usd li-icon"></i>Donation</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>donation/sai-mayee-trust"
                                class="<?php echo ($this->uri->segment(2) == 'sai-mayee-trust') ? 'active' : '' ?>">Sai Mayee Trust</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>donation/sri-sai-meru-mathi-trust"
                                class="<?php echo ($this->uri->segment(2) == 'sri-sai-meru-mathi-trust') ? 'active' : '' ?>">Sri Sai Meru Mathi Trust</a></span></div>
                </li>
            </ul>
            <li><a class="<?php echo $this->uri->segment(1) == 'e-hundi'?'active':'' ?>"
                    href="<?php echo base_url('e-hundi') ?>"><i class="fas fa-hand-holding-usd li-icon"></i>
                    E-Hundi</a>
            </li>
            <li><a class="<?php echo $this->uri->segment(1) == 'subscription'?'active':'' ?>"
                    href="<?php echo base_url('subscription') ?>"><i class="fas fa-address-card li-icon"></i>
                    Subscription</a>
            </li>
            <li><a class="<?php echo $this->uri->segment(1) == 'volunteer'?'active':'' ?>"
                    href="<?php echo base_url('volunteer') ?>"><i class="fas fa-users li-icon"></i>
                    Volunteer</a>
            </li>
            <!-- <li><a class="<?php echo $this->uri->segment(1) == 'gallery'?'active':'' ?>"
                    href="<?php echo base_url('gallery') ?>"><i class="fas fa-images li-icon"></i>
                    Gallery</a>
            </li> -->
            <ul class="collapsible men-lft">
                <li class="si-m si-gg">
                    <div class="collapsible-header"><i class="fas fa-images li-icon"></i>Gallery - Images</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>gallery-images/madhava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'madhava-seva') ? 'active' : '' ?>">Madhava Seva</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>gallery-images/manava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'manava-seva') ? 'active' : '' ?>">Manava Seva</a></span></div>
                </li>
            </ul>
            <ul class="collapsible men-lft">
                <li class="si-m si-gv">
                    <div class="collapsible-header"><i class="fas fa-video li-icon"></i>Gallery - Videos</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>gallery-videos/madhava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'madhava-seva') ? 'active' : '' ?>">Madhava Seva</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>gallery-videos/manava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'manava-seva') ? 'active' : '' ?>">Manava Seva</a></span></div>
                </li>
            </ul>
            <ul class="collapsible men-lft">
                <li class="si-m si-gm">
<div class="collapsible-header"><i class="fas fa-music li-icon"></i>Gallery - Audios</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>gallery-audios/messages"
                                class="<?php echo ($this->uri->segment(2) == 'messages') ? 'active' : '' ?>">Messages</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>gallery-audios/guru-bhodha"
                                class="<?php echo ($this->uri->segment(2) == 'guru-bhodha') ? 'active' : '' ?>">Guru Bhodha</a></span></div>
                </li>
            </ul>
            <!-- <li><a class="<?php echo $this->uri->segment(1) == 'events'?'active':'' ?>"
                    href="<?php echo base_url('events') ?>"><i class="fas fa-envelope li-icon"></i>
                    Events</a>
            </li> -->
            <ul class="collapsible men-lft">
                <li class="si-m si-e">
                    <div class="collapsible-header"><i class="fas fa-calendar-alt li-icon"></i>Events</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>events/manava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'manava-seva') ? 'active' : '' ?>">Manava Seva</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>events/madhava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'madhava-seva') ? 'active' : '' ?>">Madhava Seva</a></span></div>
                </li>
            </ul>
            <ul class="collapsible men-lft">
                <li class="si-m si-s">
                    <div class="collapsible-header"><i class="fas fa-chalkboard-teacher li-icon"></i>Services</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>services/manava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'manava-seva') ? 'active' : '' ?>">Manava Seva</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>services/madhava-seva"
                                class="<?php echo ($this->uri->segment(2) == 'madhava-seva') ? 'active' : '' ?>">Madhava Seva</a></span></div>
                    <!-- <div class="collapsible-body"><span><a href="<?php echo base_url() ?>services/vedic-rituals"
                                class="<?php echo ($this->uri->segment(2) == 'vedic-rituals') ? 'active' : '' ?>">Vedic Rituals</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>services/activities"
                                class="<?php echo ($this->uri->segment(2) == 'activities') ? 'active' : '' ?>">Activities</a></span></div> -->
                </li>
            </ul>
            <li><a class="<?php echo $this->uri->segment(1) == 'literature'?'active':'' ?>"
                    href="<?php echo base_url('literature') ?>"><i class="fas fa-book li-icon"></i>
                    Literature</a>
            </li>
            <ul class="collapsible men-lft">
                <li class="si-m si-h">
                    <div class="collapsible-header"><i class="fas fa-home li-icon"></i>Home Page</div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>home/banner"
                                class="<?php echo ($this->uri->segment(2) == 'banner') ? 'active' : '' ?>">Banner</a></span></div>
                    <div class="collapsible-body"><span><a href="<?php echo base_url() ?>home/video/1"
                                class="<?php echo ($this->uri->segment(2) == 'video') ? 'active' : '' ?>">Video</a></span></div>
                </li>
            </ul>
            <li><a class="<?php echo $this->uri->segment(1) == 'crossword'?'active':'' ?>"
                    href="<?php echo base_url('crossword') ?>"><i class="fas fa-puzzle-piece li-icon"></i>
                    Crossword</a>
            </li>
            
        </ul>
    </div>
</div>