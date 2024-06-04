@extends('pr.layouts.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{-- <h1 class="m-0">Dashboard <x-iconic-phone  style="width: 50px"/></h1> --}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">websites requirements</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
             <div class="card">
                <div id="content">
                    <div id="loading-overlay" style="display: none;">
                        <img src="/img/loading.gif" alt="Loading...">
                    </div>

    <div class="main-body">

        <!-- Errors and Success Messages -->

                <!-- / Errors and Success Messages -->


        <!-- Requirements -->

        <div class="accordion border-x border-top rounded mb-3" id="accordionExample">

            <div class="card shadow-none border-bottom">
                <div class="card-header bg-primary py-0" id="headingOne">

                    <button class="btn btn-link text-decoration-none btn-block py-2 px-0 collapsed text-left">
                        <span class="accordion-icon mr-2 text-light" data-fa-transform="shrink-2" data-fa-i2svg="">
                            <svg style="width: 8px" class="svg-inline--fa fa-caret-right fa-w-6 fa-lg" data-fa-transform="shrink-2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" data-fa-i2svg=""><g transform="translate(96 256)"><g transform="translate(0, 0)  scale(0.875, 0.875)  rotate(0 0 0)"><path fill="currentColor" d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" transform="translate(-96 -256)"></path></g></g></svg></span>
                        <span class="text-sans-serif text-light">You Must Read and approve this <strong>Terms and conditions</strong> before adding your websites to our platform</span>
                    </button>
                </div>
                <div>
                    <div class="card-body pt-2">
                        <ul class="pl-3">
                            <li class=" mt-2">The web pages to be indexed by Search Engine Google should not be less than 100 pages.</li>
                            <li class=" mt-2"> The website has a traffic of <strong class="text-warning">at least 500 per month.</strong></li>
                            <li class=" mt-2"> Domain age to be not less than a minimum of 06 months.</li>
                            <li class=" mt-2"> <strong class="text-warning">The Moz Domain Authority (DA) must be more than 20</strong> and the spam score less than 20%.
                                <i class="" data-fa-i2svg=""><svg style="width: 20px" class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></i> <a href="https://neilpatel.com/ubersuggest/" class="font-weight-bold text-underline" target="_blank"> You can check it here</a></li>
                            <li class=" mt-2"> <strong class="text-warning">The Ahrefs Domain Rating (DR) must be more than 20</strong>
                                <i class="" data-fa-i2svg=""><svg style="width: 20px" class="svg-inline--fa fa-arrow-right fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path></svg></i>  <a href="https://ahrefs.com/website-authority-checker" class="font-weight-bold text-underline" target="_blank"> You can check it here</a></li>

                            <li class=" mt-2"> The website should be regularly updated with unique and relevant content.</li>
                            <li class=" mt-2"> Websites violating any laws are banned.</li>
                            <li class=" mt-2"> Websites that do not adhere to copyrights are not going to be allowed.</li>
                            <li class=" mt-2"> Websites not conforming to the ethical standards and highest moral is prohibited.</li>
                            <li class=" mt-2"> Forbidden Adult or mature content website.</li>
                            <li class=" mt-2"> Forbidden Dating services website.</li>
                            <li class=" mt-2"> Forbidden Gambling and any kind of betting website.</li>
                            <li class=" mt-2"> Forbidden Unfair promotion of competitive services website.</li>
                            <li class=" mt-2"> Forbidden Any kind of marketplace website.</li>
                            <li class=" mt-2"> Forbidden Binary scams website.</li>
                            <li class=" mt-2"> Forbidden Website hacking, unethical &amp; unlicensed software; cheat codes.</li>
                            <li class=" mt-2"> Forbidden Witchcraft and Magic website.</li>
                            <li class=" mt-2"> Forbidden Sale of fake products website.</li>
                            <li class=" mt-2"> Forbidden Tobacco, cigarettes, or any kind of intoxicants website.</li>
                            <li class=" mt-2"> Forbidden Alcohol consumption website.</li>
                            <li class=" mt-2"> Forbidden Sale of any weapon and arms website.</li>
                            <li class=" mt-2"> Forbidden Open web forum platforms website.</li>
                            <li class=" mt-2"> Forbidden Deceitful activities website.</li>
                            <li class=" mt-2"> Forbidden Forex online trading activity website.</li>
                            <li class=" mt-2"> Forbidden Medical websites not providing valid medical certification status.</li>
                            <li class=" mt-2"> Forbidden Direct and online pharmaceutical sales, including and not only limited to any over-the-counter drugs, special dietary supplements, and homeopathic drugs.</li>
                            <li class=" mt-2"> We also have the authority to evaluate the website from the perspective of an end-user. Hence, a website may be rejected in case it does not meet our expectations.</li>
                            <li class=" mt-2"> Forbidden PBN(Private Blog Networks).</li>
                            <li class=" mt-2"> Payments are made weekly (Every Monday). Please Make sure to request your payment before Sunday Midnight UK Time. the minimum amount is $5.00
                                    We will take 10% to cover the Paypal Commission fee (Learn More Here) and the advertising fee.</li>
                            <li class=" mt-2"> Our decision can still be altered even once the website gets accepted or rejected. The website may also be rejected after being approved if we believe that the website quality has depreciated and no longer in sync with prevailing moderation rules.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right py-3 px-3">
            <a href="{{ route('verify_unique') }}" role="button" class="btn bg-primary text-white"><i class="" data-fa-i2svg="">
                <svg style="width: 20px" class="svg-inline--fa fa-check-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg></i> Agree &amp; Add New Website</a>
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
