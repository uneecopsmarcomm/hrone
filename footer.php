<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage HrOne_Theme
 * @since HrOne Theme 1.0
 */
?>

<footer class="section fp-auto-height">
    <div class='wave'></div>
    <div class='footer-bg'>
        <div class='container'>
            <div class='row'>
                <div class='col s3'>
                    <h4>Contact</h4>
                    <address>
                        <strong>Uneecops Workplace Solutions Pvt Ltd</strong><br> C-185, Phase-I, Naraina Industrial Area,<br> New Delhi –110028
                    </address>
                    <p class='icon-info'><i class='fa fa-phone'></i> 1800-532-4422</p>
                    <p class='icon-info'><i class='fa fa-envelope'></i> <a href='mailto:joy@hronecloud.com'>joy@hronecloud.com</a></p>
                </div>
                <div class='col s8 offset-s1'>
                    <div class='row'>
                        <div class='col s3 company-section'>
                            <h4>Company</h4>
                            <ul class='footer-menu'>
                                <li><a href='about-us' title='About HR-One' >About us</a></li>
                                <li><a href='pricing' title='HR-One Pricing'>Pricing</a></li>
                                <li> <a href='career' title='Career'>Career</a> </li>
                                <li><a href='blog' target='_blank' >Blog</a></li>
                                <li><a href='contact' title='Contact HR-One'>Contact Us</a></li>
                                <li><a href='sitemap.html' title='sitemap'>Sitemap</a></li>
                            </ul>
                        </div>
                        <div class='col s3 hr-one-section'>
                            <h4>HR-one SUITE</h4>
                            <ul class='footer-menu'>
                                <li><a href='recruitment-management-software' title='Recruitment Software'>Recruitment</a></li>
                                <li><a href='timeoffice-management-software' title='Timeoffice Software' >Time Office</a></li>
                                <li><a href='expense-management-software' title='Expense Software' >Expense</a></li>
                                <li><a href='performance-management-software' title='Performance Management Software'>Performance</a></li>
                                <li><a href='workforce-management-software' title='Workforce Management Software' >Workforce</a></li>
                                <li><a href='payroll-software' title='Payroll Software'>Payroll</a></li>
                            </ul>
                        </div>
                        <div class='col s3 more-section'>
                            <h4>more</h4>
                            <ul class='footer-menu'>
                                <li><a href='travel-management-software' title='Travel Management Software'>Travel</a></li>
                                <li><a href='helpdesk-management-software' title='Helpdesk Management Software'>Helpdesk</a></li>
                                <li><a href='assets-management-software' title='IT Assets Management Software'>Assets</a></li>
                                <li><a href='project-one' title='Project Management Software'>Project One</a></li>
                                <li><a href='employee-communication-solution' title='Social'>Social</a></li>
                            </ul>
                        </div>
                        <div class='col s3'>
                            <h4>SOLUTIONS</h4>
                            <ul class='footer-menu'>
                                <li><a href='hrone-suite' title='HR-One Suite'>HR-One Suite</a></li>
                                <li><a href='payroll-outsourcing' title='Payroll Outsourcing'>Payroll Outsourcing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <div class='download-app pull-left'>
                        <a  href='https://play.google.com/store/apps/details?id=com.uneecops.hronecloud' target='_blank' title='Google Play store' rel='nofollow'><img src='<?php echo get_template_directory_uri(); ?>/img/icon/play-store.png' alt='hr-one android app'></a>
                        <a  href='https://itunes.apple.com/us/app/hr-one/id1046796065?mt=8' target='_blank' title='Apple' rel='nofollow'><img src='<?php echo get_template_directory_uri(); ?>/img/icon/apple-store.png' alt='hr-one ios apple app'></a>
                    </div>
                </div>
                <div class="col s6">
                    <div class='share-link pull-right'> <a href='https://www.facebook.com/HROne.in' target='_blank' title='facebook' rel='nofollow'><i class='fa fa-facebook-square'></i></a> <a href='https://www.linkedin.com/company/hr-one---a-complete-hrms-solution?trk=company_name' target='blank' title='linkedin' rel='nofollow'><i class='fa fa-linkedin-square'></i></a> <a href='https://twitter.com/Uneecops_HROne' target='_blank' title='twitter' rel='nofollow'><i class='fa fa-twitter'></i></a> </div>
                </div>
            </div>
            <div class="row m0">
                <div class="col s12">
                    <div class='copyright'>
                        <p>Copyright © 2018 <a href='https://hronecloud.com' class="secondarycolor">Uneecops Workplace Solutions Pvt. Ltd.</a> All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php if(is_front_page()): ?>
</div><!-- // for fullpage -->
<?php endif; ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easings.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullpage.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/card-slider.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<?php wp_footer(); ?>
</body>
</html>
