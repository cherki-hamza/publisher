@extends('pr.layouts.master')

@section('style')

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">{{ $title }}</h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">FAQ</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="main-body pt-2">

                <div class="container mt-1mb-5">

                    <div class="row justify-content-center text-center mb-5">
                        <div class="">
                            <h1 style="font-weight: 900;font-size: 28px" class="font-weight-bold">Welcome to our FAQ section! </h1>
                            <h2 class="font-weight-bold">For quick answers to your questions about our services</h2>
                        </div>
                    </div>



                            <div class="card mt-3">
                            <div class="card-header bg-primary"><h3 class="text-white text-center font-weight-medium">Publisher's Frequently Asked Questions</h3></div>
                        <div class="card-body">
                        <div class="accordion border rounded overflow-hidden" id="accordionFaq">
                            <div class="card shadow-none rounded-bottom-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading1">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion1" aria-expanded="true" aria-controls="collapseFaqAccordion1">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">1.</strong> How do I get started with website monetization?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse show" id="collapseFaqAccordion1" aria-labelledby="faqAccordionHeading1" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">To begin monetizing your website, follow these steps:</p>
                                                    <ul class="ps-3 mb-0">
                                                    <li><strong class="font-weight-bold">Sign Up: </strong> Start by signing up for an account.</li>
                                                    <li><strong class="font-weight-bold">Log In as a Buyer: </strong> Upon logging in, you will initially be logged in as a buyer.</li>
                                                    <li><strong class="font-weight-bold">Switch to Publisher: </strong> Locate the dropdown menu in the top right corner of the page. From there, you can toggle the switch to log in as a publisher.</li>
                                                    </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading2">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion2" aria-expanded="false" aria-controls="collapseFaqAccordion2">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">2.</strong> How can I add my website?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion2" aria-labelledby="faqAccordionHeading2" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">To add a new website to your account, follow these steps:</p>
                                                <ul class="ps-3 mb-0">
                                                    <li><strong class="font-weight-bold">Log in: </strong> Sign in to your account.</li>
                                                    <li><strong class="font-weight-bold">Switch to Publisher: </strong> Click on your profile icon in the top right corner, then select "Switch To Publisher.</li>
                                                    <li><strong class="font-weight-bold">Access My Platform: </strong> Navigate to the "My Platform" section.</li>
                                                    <li><strong class="font-weight-bold">Review Requirements: </strong> Read through the "Basic Requirements" carefully.</li>
                                                    <li><strong class="font-weight-bold">Add New Website: </strong> Click on the "Add New Website" button.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading3">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion3" aria-expanded="false" aria-controls="collapseFaqAccordion3">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">3.</strong> What are the requirements for websites?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion3" aria-labelledby="faqAccordionHeading3" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <ul class="ps-3 mb-0">
                                                    <li><strong class="font-weight-bold">Google Indexing: </strong> Web pages to be indexed by Search Engine Google should not be fewer than 100 pages.</li>
                                                    <li><strong class="font-weight-bold">Minimum Traffic: </strong> The website should have a traffic of at least 500 visitors per month.</li>
                                                    <li><strong class="font-weight-bold">Domain Age: </strong> The domain age should be a minimum of 6 months.</li>
                                                    <li><strong class="font-weight-bold">Moz Domain Authority (DA): </strong> DA must be more than 20, with a spam score less than 20%.</li>
                                                    <li><strong class="font-weight-bold">Ahrefs Domain Rating (DR): </strong> DR must be more than 20.</li>
                                                    <li><strong class="font-weight-bold">Content Quality: </strong> The website should be regularly updated with unique and relevant content.</li>
                                                    <li><strong class="font-weight-bold">Legal Compliance: </strong> Websites violating any laws, copyrights, or ethical standards are prohibited.</li>
                                                    <li><strong class="font-weight-bold">Content Restrictions: </strong> Forbidden content includes adult/mature, dating services, gambling, unfair promotion, marketplace, scams, witchcraft, sale of fake products, tobacco/alcohol consumption, arms/weapons, deceitful activities, etc.</li>
                                                    <li><strong class="font-weight-bold">Medical Websites: </strong> Medical websites must provide valid medical certification status.</li>
                                                    <li><strong class="font-weight-bold">Evaluation Authority: </strong> We reserve the right to evaluate websites from an end-user perspective, and rejection may occur if a website does not meet our expectations.</li>
                                                    <li><strong class="font-weight-bold">PBNs Prohibited: </strong> Private Blog Networks (PBNs) are not allowed.</li>
                                                    <li><strong class="font-weight-bold">Payment Details: </strong> Payments are made weekly (Every Monday), with a minimum payout of $5.00. A 10% deduction is applied to cover PayPal commission fees and advertising costs.</li>
                                                    <li><strong class="font-weight-bold">Revision of Decision: </strong> Our decision can be altered even after website acceptance or rejection if we believe the website quality has depreciated or no longer complies with moderation rules.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading4">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion4" aria-expanded="false" aria-controls="collapseFaqAccordion4">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">4.</strong> What does each task status mean on PR Team?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion4" aria-labelledby="faqAccordionHeading4" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">Here's an explanation of each task status:</p>
                                                <ul class="ps-3 mb-0">
                                                    <li><strong class="font-weight-bold">Not started: </strong> Tasks in this status are awaiting acceptance or rejection. You'll receive notifications once an action is taken.</li>
                                                    <li><strong class="font-weight-bold">In Progress: </strong> These tasks are currently being worked on. You'll receive notifications once they are completed.</li>
                                                    <li><strong class="font-weight-bold">Pending Approval: </strong> Tasks in this status are awaiting your approval. If no action is taken, they will be marked as complete after 3 days (provided they meet all quality requirements). You also have the option to return the task to the Publisher for improvement.</li>
                                                    <li><strong class="font-weight-bold">Improvement: </strong> These tasks have been sent for improvement and will be returned to you once they are completed.</li>
                                                    <li><strong class="font-weight-bold">Completed: </strong> Tasks in this status have been successfully finished. Payment for the task has been transferred from your reserved balance to the Publisher's main balance.</li>
                                                    <li><strong class="font-weight-bold">Rejected: </strong> Tasks in this status have been rejected either by you or by the Publisher.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading5">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion5" aria-expanded="false" aria-controls="collapseFaqAccordion5">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">5.</strong> What types of services can I provide?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion5" aria-labelledby="faqAccordionHeading5" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">You can choose from 2 service types or provide both:</p>
                                                <ul class="ps-3 mb-0">
                                                    <li><strong class="font-weight-bold">Content Placement:</strong>Select this service if you prefer not to create content yourself and wish to place buyer’s content on your website.</li>
                                                    <li><strong class="font-weight-bold">Content Creation and Placement: </strong>Choose this option if you're willing to write articles based on buyer’s requirements and place them on your website.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading6">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion6" aria-expanded="false" aria-controls="collapseFaqAccordion6">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">6.</strong> Who Sets Prices?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion6" aria-labelledby="faqAccordionHeading6" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">
                                                    You, as the provider, set the prices for the services you offer. It's important to establish reasonable prices, considering various quality characteristics of your website such as DA (Domain Authority), Ahref Traffic Rank, monthly website traffic, and other relevant factors.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading7">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion7" aria-expanded="false" aria-controls="collapseFaqAccordion7">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">7.</strong> Can I Communicate with Buyers?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion7" aria-labelledby="faqAccordionHeading7" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">
                                                    Yes, you can communicate with buyers through messages.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading8">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion8" aria-expanded="false" aria-controls="collapseFaqAccordion8">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">8.</strong> Is it possible to change my password on PR Team</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion8" aria-labelledby="faqAccordionHeading8" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">
                                                    Yes, you can change your password. Simply navigate to your Profile settings. Next, input your current password along with your new desired password. If you happen to forget your password, you can reset it by clicking the “Forgot password?” hyperlink on the client authorization page.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading9">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion9" aria-expanded="false" aria-controls="collapseFaqAccordion9">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">9.</strong> How to listed as a Top Publishers?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion9" aria-labelledby="faqAccordionHeading9" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">To be listed among the "Top publishers," your performance metrics are taken into account, including Completion rate and tasks completion.
                                                    To achieve this:
                                                </p>
                                                <ul class="ps-3 mb-0">
                                                    <li>It is advisable to diligently complete all assigned tasks and refrain from rejecting them whenever possible. Rejections, barring instances where the task pertains to prohibited categories or fails to meet platform standards, may adversely impact your Completion Rate. A publisher who has successfully completed over 100 tasks is regarded as a top performer. </li>
                                                    <li>Ensure that all content with links remains on the site where you publish it. Place the provided or created content on the site(s) chosen by the buyer. By consistently delivering high-quality work, your metrics will improve, potentially elevating you to the status of a "Top publisher."</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading10">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion10" aria-expanded="false" aria-controls="collapseFaqAccordion10">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">10.</strong> How to Get Your First (or More) Orders</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion10" aria-labelledby="faqAccordionHeading10" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">Securing orders ultimately depends on the buyers' decisions. However, there are several strategies you can employ to increase your chances:</p>
                                                <ul class="ps-3 mb-0">
                                                    <li><strong class="font-weight-bold">Expand Your Portfolio: </strong> Increase your chances of getting orders by adding more sites to your portfolio. This broadens your options and increases visibility.</li>
                                                    <li><strong class="font-weight-bold">Focus on Completion Rate: </strong> Aim for a completion rate of 70% or higher to be featured in the Verified publishers section. A higher completion rate enhances your appeal to buyers.</li>
                                                    <li><strong class="font-weight-bold">Build Credibility: </strong> Fill in your name in the provided form to appear more credible to buyers. Consistently deliver high-quality work, adhere to deadlines, and maintain polite communication to earn positive feedback and high rankings.</li>
                                                    <li><strong class="font-weight-bold">Improve Site Metrics: </strong> Work on improving key metrics like Domain Authority (DA) or Domain Rating (DR) for your site. Increasing monthly traffic can also enhance your site's attractiveness to buyers.</li>
                                                    <li><strong class="font-weight-bold">Price Revision: </strong> Ensure that your pricing aligns with the metrics of your site. Competitive pricing can make you more appealing to buyers.</li>
                                                    <li><strong class="font-weight-bold">Strive for Excellence: </strong> Consistently deliver exceptional performance to make yourself more attractive to buyers. Ultimately, your performance and professionalism will play a significant role in securing orders.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading11">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion11" aria-expanded="false" aria-controls="collapseFaqAccordion11">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">11.</strong> When Can I Get Funds I See In My Reserved Balance?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion11" aria-labelledby="faqAccordionHeading11" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">
                                                    The funds from your Reserved balance will move to the Main balance as soon as you complete your task. Therefore, ensure you complete your tasks promptly and maintain quality of the work.
                                                    Once you have a minimum of $5 on your Main balance, you can request a withdrawal.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading12">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion12" aria-expanded="false" aria-controls="collapseFaqAccordion12">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">12.</strong> Why Use the Reject Task Option?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion12" aria-labelledby="faqAccordionHeading12" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">
                                                    Rejecting tasks can impact the completion rate metric, leading some publishers to delay rejection until tasks become overdue and are automatically rejected. However, certain reject reasons are worth considering.
                                                    You are allowed to reject tasks that violate your site policies or requirements, or if the promoted URL falls under restricted categories as it won't decrease your completion rate.
                                                    While rejecting tasks for other reasons may decrease your completion rate, it's essential to accept incoming tasks to maintain a high completion rate. To minimize rejects, ensure you can place content on listed sites, update prices accurately, and correctly specify link types (dofollow or nofollow).

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-none rounded-0 border-bottom">
                                <div class="accordion-item border-0">
                                    <div class="card-header p-0" id="faqAccordionHeading13">
                                        <button class="accordion-button btn btn-link text-decoration-none d-block w-100 py-2 px-3 border-0 text-left rounded-0 shadow-none" data-toggle="collapse" data-target="#collapseFaqAccordion13" aria-expanded="false" aria-controls="collapseFaqAccordion13">
                                            <svg style="width: 20px;"class="svg-inline--fa fa-caret-right fa-w-6 accordion-icon mr-3" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg="" style="transform-origin: 0.1875em 0.5em;"><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg><!-- <span class="fas fa-caret-right accordion-icon mr-3" data-fa-transform="shrink-2"></span> Font Awesome fontawesome.com --><span class="fw-medium text-facebook"><strong class="font-weight-bold">13.</strong> Why Improve Your Completion Rate?</span></button>
                                    </div>
                                    <div class="accordion-collapse collapse" id="collapseFaqAccordion13" aria-labelledby="faqAccordionHeading13" data-parent="#accordionFaq" style="">
                                        <div class="accordion-body p-0">
                                            <div class="card-body pt-2">
                                                <p class="ps-3 mb-0">
                                                    The completion rate serves as a crucial metric, reflecting the percentage of tasks successfully executed. Its significance cannot be overstated.
                                                    Maintaining a high completion rate is indicative of reliability and responsibility in task execution, instilling confidence in buyers. It assures them of task completion as per their specifications, ensuring accurate placement of content and links, and timely delivery.
                                                    Additionally, achieving a completion rate of 75% or higher qualifies you for inclusion in the "Top Publishers" list. This exclusive roster comprises the most trusted performers on PR Team, highly recommended to buyers. Membership in this esteemed group enhances visibility and increases the likelihood of receiving more tasks, thereby bolstering opportunities for success.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                </div>


                        </div>



                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')

@endsection
