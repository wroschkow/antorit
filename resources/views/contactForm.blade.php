@section('title', 'Webentwicklung &amp; Programmierung aus München | ANTORIT')
@section('description', 'Die professionelle Agentur aus München für Ihre individuellen Webentwicklungen! · responsive Webdesign · Webentwicklung · Appentwicklung · ✆ 0176/4938 5077')
@section('teaser-text-h1', 'INTERNET-AGENTUR FÜR WEBENTWICKLUNG UND RESPONSIVE DESIGN IN MÜNCHEN')
@include('includes.head')

<body id="page-top">
@include('includes.header')
<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
        <div>


            <!-- Buttons -->
            <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                <!-- Contact Us -->


                <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                    <div class="max-w-2xl lg:max-w-5xl mx-auto">
                        <div class="text-center">
                            <h1 class="text-3xl font-bold text-gray-800 sm:text-3xl dark:text-white">
                                Sprechen Sie uns an.
                            </h1>
                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                Wir beraten Sie gerne kostenlos und unverbindlich
                            </p>
                        </div>


                        <div class="text-center">
                            @if(Session::has('success'))

                                <div class="bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 dark:bg-teal-800/10 dark:border-teal-900 dark:text-teal-500" role="alert">
                                    Vielen Dank für Ihre Kontaktaufnahme. Wir werden uns in Kürze mit Ihnen in Verbindung setzen.
                                </div>
                            @endif
                        </div>

                        <div class="text-center">

                            <!-- Card -->
                            <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">
                                <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Wir freuen uns über jede Anfrage!
                                </h2>

                                <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                                    {{ csrf_field() }}
                                    <div class="grid gap-4">
                                        <!-- Grid -->
                                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 ">
                                            <div>
                                                <label for="hs-firstname-contacts-1" class="sr-only">Vorname</label>
                                                <input type="text" name="fname" value="{{ old('fname') }}"
                                                required  id="hs-firstname-contacts-1" class="form-control border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Vorname">

                                            </div>

                                            <div>
                                                <label for="hs-lastname-contacts-1" class="sr-only">Nachname</label>
                                                <input required type="text" name="lname" id="hs-lastname-contacts-1" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Nachname">
                                            </div>
                                        </div>
                                        <!-- End Grid -->

                                        <div>
                                            <label for="hs-email-contacts-1" class="sr-only">E-Mail</label>
                                            <input required type="email" name="email" id="hs-email-contacts-1" autocomplete="email" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="E-Mail-Adresse">
                                        </div>

                                        <div>
                                            <label for="hs-phone-number-1" class="sr-only">Telefon-/Mobilnr. (optional)</label>
                                            <input type="text" name="phone" id="hs-phone-number-1" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Telefon-/Mobilnr. (optional)">
                                        </div>

                                        <div>
                                            <label for="hs-about-contacts-1" class="sr-only">Ihre Nachricht</label>
                                            <textarea required id="hs-about-contacts-1" name="message" rows="4" class="border py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400 dark:focus:ring-gray-600" placeholder="Nachricht"></textarea>
                                        </div>
                                    </div>
                                    <!-- End Grid -->

                                    <div class="mt-4 grid">
                                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">Absenden</button>
                                    </div>

                                    <div class="mt-3 text-center">
                                        <p class="text-sm text-gray-500">
                                            Wir melden uns innerhalb von 1-2 Werktagen bei Ihnen.
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Contact Us -->
            </div>
            <!-- End Review -->
        </div>
        <!-- End Col -->

        <div class="relative ml-4">
            <img class="w-full rounded-md" src="img/kontaktieren-webentwicklung-aus-muenchen.webp" alt="Kontaktieren Webentwicklung aus München">
            <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 w-full h-full rounded-md mt-4 -mb-4 mr-4 -ml-4 lg:mt-6 lg:-mb-6 lg:mr-6 lg:-ml-6 dark:from-slate-800 dark:via-slate-900/0 dark:to-slate-900/0"></div>

        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Hero -->

@include('includes.footer')
