<x-app-layout>
    {{-- blocks --}}
    <div class="flex flex-col items-center justify-center">

        {{-- header --}}
        <x-block.standard-header
            :title="'Privacy Policy'"
            :background="'linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),' . 'url(' . $image . ')'"
        />

        {{-- content --}}
        <div
            class="text-md font-nunito flex w-full max-w-[1100px] flex-col gap-20 px-12 py-12 text-left font-extralight text-offblack sm:py-24 sm:text-left sm:text-lg">
            <ol class="flex list-decimal flex-col gap-4">
                <li>
                    <h1>
                        {{ __('Introduction') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('Results Driven Hospitality Services is committed to protecting your privacy and ensuring that your personal information is handled responsibly and in compliance with the Protection of Personal Information Act (POPIA). This Privacy Policy outlines how we collect, use, disclose, and safeguard your personal information when you visit our website or interact with us through other means.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Information we collect') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We may collect personal information that you voluntarily provide to us, including but not limited to:') }}
                    </p>
                    <ul class="text-offgrey ml-8 list-disc">
                        <li>
                            {{ __('Contact information: Name, email address, phone number, and postal address.') }}
                        </li>
                        <li>
                            {{ __('Booking details: Reservation dates, preferences, and special requests.') }}
                        </li>
                        <li>
                            {{ __('Payment information: Credit card details and billing information.') }}
                        </li>
                        <li>
                            {{ __('Technical data: IP address, browser type, operating system, and browsing behaviour on our website.') }}
                        </li>
                    </ul>
                </li>
                <li>
                    <h1>
                        {{ __('Lawful basis for processing') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We may collect personal information that you voluntarily provide to us, including but not limited to:') }}
                    </p>
                    <ul class="text-offgrey ml-8 list-disc">
                        <li>
                            {{ __('Consent: Where you have given explicit consent for processing.') }}
                        </li>
                        <li>
                            {{ __('Contractual necessity: To fulfil a booking or service request.') }}
                        </li>
                        <li>
                            {{ __('Legal obligation: To comply with legal and regulatory requirements.') }}
                        </li>
                        <li>
                            {{ __('Legitimate interests: To enhance our services and protect our business operations.') }}
                        </li>
                    </ul>
                </li>
                <li>
                    <h1>
                        {{ __('How we use your information') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We use the collected information for various purposes, including:') }}
                    </p>
                    <ul class="text-offgrey ml-8 list-disc">
                        <li>
                            {{ __('Providing services: To process and manage your bookings and reservations.') }}
                        </li>
                        <li>
                            {{ __('Communication: To send confirmations, updates, and respond to inquiries.') }}
                        </li>
                        <li>
                            {{ __('Marketing: To inform you about promotions, offers, and events that may interest you.') }}
                        </li>
                        <li>
                            {{ __('Improvement: To enhance our website, services, and customer experience.') }}
                        </li>
                        <li>
                            {{ __('Legal compliance: To comply with applicable laws and regulations.') }}
                        </li>
                    </ul>
                </li>
                <li>
                    <h1>
                        {{ __('Retention and destruction') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We retain personal information only for as long as necessary to fulfil the purposes outlined in this Privacy Policy or as required by law. Once the information is no longer needed, it will be securely destroyed in accordance with our data retention policies.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Sharing Your Information') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We do not sell your personal information. However, we may share your information with:') }}
                    </p>
                    <ul class="text-offgrey ml-8 list-disc">
                        <li>
                            {{ __('Service providers: Third-party vendors who assist in providing our services (e.g., payment processors, IT support).') }}
                        </li>
                        <li>
                            {{ __('Legal authorities: When required by law or to protect our rights and property.') }}
                        </li>
                    </ul>
                </li>
                <li>
                    <h1>
                        {{ __('Cross-border data transfers') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('If we transfer your personal information outside South Africa, we ensure that the recipient country offers an adequate level of data protection or implement binding agreements to safeguard your information.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Data security') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include encryption, access controls, and regular security audits.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Your rights') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('Under POPIA, you have the right to:') }}
                    </p>
                    <ul class="text-offgrey ml-8 list-disc">
                        <li>
                            {{ __('Access: Request a copy of the personal information we hold about you.') }}
                        </li>
                        <li>
                            {{ __('Rectification: Request correction of any inaccurate or incomplete information.') }}
                        </li>
                        <li>
                            {{ __('Deletion: Request the deletion of your personal information, subject to legal or contractual obligations.') }}
                        </li>
                        <li>
                            {{ __('Objection: Object to the processing of your personal information for certain purposes.') }}
                        </li>
                        <li>
                            {{ __('Data portability: Request your data in a structured, commonly used format.') }}
                        </li>
                    </ul>
                    <p class="text-offgrey">
                        {{ __('To exercise these rights, please contact us at') }}
                       <a
                            class="hover:underline text-gold"
                            href="mailto:info@resultsdrivenhotels.com"
                        >
                            {{ __('info@resultsdrivenhotels.com') }}
                        </a>
                        {{ __('.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Data breach notification') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('In the event of a data breach, we will notify affected individuals and the Information Regulator within the required timeframe, providing details of the breach and any steps taken to mitigate the impact.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Cookies and tracking technologies') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('Our website uses cookies and similar technologies to enhance user experience and analyse website performance. You can manage your cookie preferences through your browser settings.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Third-party links') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('Our website may contain links to third-party sites. We are not responsible for the privacy practices or content of these external sites. We encourage you to review their privacy policies.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Information officer') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('Our Information Officer oversees our compliance with POPIA. For queries or concerns, please contact:') }}
                    </p>
                    <p class="text-offgrey">
                        {{ __('Information officer') }}
                        <br>
                        {{ __('Results Driven Hospitality Services') }}
                        <br>
                        {{ __('12 Krige Rd, Stellenbosch Central, Stellenbosch, 7600') }}
                        <br>
                        {{ __('Email:') }}
                        <a
                            class="hover:underline text-gold"
                            href="mailto:info@resultsdrivenhotels.com"
                        >
                            {{ __('info@resultsdrivenhotels.com') }}
                        </a>
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Updates to this privacy policy') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date.') }}
                    </p>
                </li>
                <li>
                    <h1>
                        {{ __('Contact us') }}
                    </h1>
                    <p class="text-offgrey">
                        {{ __('If you have any questions or concerns about this Privacy Policy or our data practices, please contact us at:') }}
                    </p>
                    <p class="text-offgrey ml-6">
                        {{ __('Results Driven Hospitality Services') }}
                        <br>
                        {{ __('12 Krige Rd, Stellenbosch Central, Stellenbosch, 7600') }}
                        <br>
                        {{ __('Email:') }}
                        <a
                            class="hover:underline text-gold"
                            href="mailto:info@resultsdrivenhotels.com"
                        >
                            {{ __('info@resultsdrivenhotels.com') }}
                        </a>
                    </p>
                </li>
            </ol>
            <p class="text-center text-sm">
                {{ __('By using our services, you acknowledge that you have read and understood this Privacy Policy.') }}
            </p>
        </div>
    </div>
</x-app-layout>
