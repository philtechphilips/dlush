@extends('layouts.app')

@php
    $whiteText = true;
@endphp

@section('navigation')
    @include('layouts.navigation')
@endsection

@section('styles')
@endsection

@section('contents')
    <x-hero heading="TERMS AND CONDITIONS" desc="" isHome=false tag="" />

    <section class="pb-20 2xl:px-60 md:px-40 px-5">
        <div class="mt-0">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl !font-semibold">1. Overview</h1>
            <p class="text-gray-200 mt-4 !font-[Inter]">
                Thank you for choosing Event D-Lush for your event decoration and hire needs. These Terms and Conditions
                outline the agreement between Event D-Lush and ( the client )for the supply of event décor, styling, and
                rental services.
                <br>
                By confirming your booking and paying a deposit, you agree to these terms in full.
            </p>
        </div>

        <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">2. Bookings and Payments</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>A non-refundable deposit of 15 % of the total booking value is required to secure your date.</li>
                <li>The remaining balance must be paid no later than 14 days before the event.</li>
                  <li>Bookings made within 14 days of the event must be paid in full at the time of booking.</li>
                <li>Payments can be made by bank transfer, or any method agreed in writing.</li>
            </ul>
        </div>

         <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">3. Cancellations and Refunds</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>Cancellations must be made in writing (by email).</li>
                <li>Deposits are non-refundable, as materials and preparation begin once a booking is confirmed.</li>
                  <li>If cancellation occurs:</li>
                <li>More than 15 days before the event: any balance paid (excluding deposit) will be refunded.</li>
                <li>Less than 15 days before the event: no refund will be issued.</li>
                <li>In the unlikely event that Event D-Lush must cancel (e.g. illness, emergency), a full refund of all payments made will be provided, and we’ll do our best to help you find an alternative supplier.</li>
            </ul>
        </div>


         <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">4. Hire and Equipment Use</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>All hired items remain the property of Event D-Lush at all times.</li>
                <li>You are responsible for the safe keeping of all items from delivery/setup until collection.</li>
                  <li>20% refundable deposit to over damage or loss.</li>
                <li>Any damage, loss, or theft will be charged at the full replacement value.</li>
                 <li>Items should not be moved, altered, or used outdoors unless specifically agreed in writing.</li>
                  <li>Please ensure hired items are kept away from flames, liquids, and sources of heat.</li>
            </ul>
        </div>



         <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">5. Delivery, Setup, and Collection</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>We will agree setup and collection times with you in advance.</li>
                <li>You or your representative must ensure access to the venue and that it is ready for setup.</li>
                  <li>Any delays caused by restricted access or changes to the agreed schedule may incur extra charges.</li>
                <li>We are not liable for venue restrictions or third-party delays beyond our control.</li>
            </ul>
        </div>

          <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">5. Delivery, Setup, and Collection</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>We will agree setup and collection times with you in advance.</li>
                <li>You or your representative must ensure access to the venue and that it is ready for setup.</li>
                  <li>Any delays caused by restricted access or changes to the agreed schedule may incur extra charges.</li>
                <li>We are not liable for venue restrictions or third-party delays beyond our control.</li>
            </ul>
        </div>


          <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">6. Design and Styling</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>We will work with you to confirm your chosen theme, colours, and designs before your event..</li>
                <li>Minor variations may occur due to supplier availability, but we will always use equivalent quality materials.</li>
                  <li>Once designs are approved, changes requested within 14 days of the event may incur an additional fee.</li>
            </ul>
        </div>


          <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">7. Venue Responsibilities</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>Please check with your venue that decorations, installations, or equipment hire are permitted.</li>
                <li>You are responsible for any damage to the venue caused by hired items or decorations once setup is complete.</li>
                  <li>We are happy to liaise directly with your venue or planner if requested.</li>
            </ul>
        </div>

         <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">8. Photography and Marketing</h1>
            <p class="text-gray-200 mt-4 !font-[Inter]">
              We love to showcase our work! We may photograph our setups before or after your event for our portfolio, website, and social media.
                <br>
              If you prefer not to have photos used, please let us know in writing before the event date.
            </p>
        </div>

         <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">9. Liability</h1>
            <ul class="text-gray-100 pl-4 list-disc mt-4 !font-[Inter]">
                <li>We take great care with every setup, but Event D-Lush cannot be held responsible for:</li>
                <li>Injuries or accidents caused by misuse of hired items.</li>
                  <li>Damage caused by guests, weather, or venue interference.</li>
                    <li>Our liability is limited to the total value of the booking.</li>
                      <li>We recommend you ensure your venue or event insurance covers hired equipment.</li>
            </ul>
        </div>

 <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">10. Agreement</h1>
            <p class="text-gray-200 mt-4 !font-[Inter]">
            By paying your deposit or confirming your booking in writing, you acknowledge that you have read, understood, and agreed to these Terms and Conditions.
            </p>
        </div>

        <div class="mt-10">
            <h1 class="!font-[ClashDisplay] text-gray-100 text-2xl font-semibold">11. Event D-Lush</h1>
            <p class="text-gray-200 mt-4 !font-[Inter]">
                Event Décor & Rental Services
            </p>
            <ul class="text-gray-200 list-none">
                <li>
                    <span class="text-gray-100 font-semibold">Location :</span>
                    Coventry, West Midlands
                </li>
                <li>
                 <span class="text-gray-100 font-semibold">Email :</span>
                 folake02@yahoo.com
                </li>
                <li>
                     <span class="text-gray-100 font-semibold">Phone Number :</span>
                     024 7501 8311
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('footer')
@endsection
