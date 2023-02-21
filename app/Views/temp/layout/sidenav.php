<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <div class="sidenav-menu-heading d-sm-none">Account</div>
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Alerts
                <span class="badge bg-warning-soft text-warning ms-auto">4 New!</span>
            </a>

            <div class="sidenav-menu-heading">Core</div>
            <a class="nav-link" href="/dashboard">
                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                Dashboard
            </a>

            <div class="sidenav-menu-heading">Menu Custom</div>
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                Nested Menu
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesMenu">
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                        Account
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAccount" data-bs-parent="#accordionSidenavPagesMenu">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="account-profile.html">Profile</a>
                            <a class="nav-link" href="account-billing.html">Billing</a>
                            <a class="nav-link" href="account-security.html">Security</a>
                            <a class="nav-link" href="account-notifications.html">Notifications</a>
                        </nav>
                    </div>

                    <!-- Nested Sidenav Accordion (Pages -> Authentication)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                        Authentication
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseAuth" data-bs-parent="#accordionSidenavPagesMenu">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesAuth">
                            <!-- Nested Sidenav Accordion (Pages -> Authentication -> Basic)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthBasic" aria-expanded="false" aria-controls="pagesCollapseAuthBasic">
                                Basic
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuthBasic" data-bs-parent="#accordionSidenavPagesAuth">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="auth-login-basic.html">Login</a>
                                    <a class="nav-link" href="auth-register-basic.html">Register</a>
                                    <a class="nav-link" href="auth-password-basic.html">Forgot Password</a>
                                </nav>
                            </div>
                            <!-- Nested Sidenav Accordion (Pages -> Authentication -> Social)-->
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthSocial" aria-expanded="false" aria-controls="pagesCollapseAuthSocial">
                                Social
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuthSocial" data-bs-parent="#accordionSidenavPagesAuth">
                                <nav class="sidenav-menu-nested nav">
                                    <a class="nav-link" href="auth-login-social.html">Login</a>
                                    <a class="nav-link" href="auth-register-social.html">Register</a>
                                    <a class="nav-link" href="auth-password-social.html">Forgot Password</a>
                                </nav>
                            </div>
                        </nav>
                    </div>

                    <a class="nav-link" href="pricing.html">Pricing</a>
                </nav>
            </div>

            <!-- Sidenav Accordion (Flows)-->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseFlows" aria-expanded="false" aria-controls="collapseFlows">
                <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                Flows
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseFlows" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="multi-tenant-select.html">Multi-Tenant Registration</a>
                    <a class="nav-link" href="wizard.html">Wizard</a>
                </nav>
            </div>

            <!-- Sidenav Heading (Addons)-->
            <div class="sidenav-menu-heading">Plugins</div>
            <!-- Sidenav Link (Charts)-->
            <a class="nav-link" href="charts.html">
                <div class="nav-link-icon"><i data-feather="bar-chart"></i></div>
                Charts
            </a>
            <a class="nav-link" href="tables.html">
                <div class="nav-link-icon"><i data-feather="filter"></i></div>
                Tables
            </a>
        </div>
    </div>
    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Logged in as:</div>
            <div class="sidenav-footer-title">Valerie Luna</div>
        </div>
    </div>
</nav>