<?php include 'inc/header.php'; ?>






<div id="content" class="flex ">
    
    <div>       <div class="page-content page-container" id="page-content">
        





      </div>
          <div class="page-hero page-container " id="page-hero">
        <div class="padding d-flex">
            <div class="page-title">
                <h2 class="text-md text-highlight">Send Single Sms</h2>
                <small class="text-muted">To send a single message enter the phone number, type the message, select
                    sender id, choose to schedule a message to be sent later, or <strong>Send Now</strong></small>
            </div>
        </div>
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <form action="/sms/send-single" method="post">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Send Single SMS</h5>
                                    <div class="form-group">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="tel" name="phone_number" id="phoneNumber" class="form-control " placeholder="e.g 0719133270" value="">
                                                                            </div>
                                    <div class="form-group">
                                        <label for="templates">Message Templates</label>
                                        <div class="input-group">
                                            <select id="templates" class="form-control select-search select2-hidden-accessible" data-select2-id="templates" tabindex="-1" aria-hidden="true">
                                                                                                    <option value="Happy CSR Week." data-select2-id="2">Happy CSR Week.</option>
                                                                                                    <option value="Kind regards
Lisper">Kind regards
Lisper</option>
                                                                                                    <option value="Thank you for your continued business.">Thank you for your continued business.</option>
                                                                                                    <option value="Good evening">Good evening</option>
                                                                                                    <option value="God loves!">God loves!</option>
                                                                                                    <option value="Happy Jamhuri Day. May abundance and grace follow you always.">Happy Jamhuri Day. May abundance and grace follow you always.</option>
                                                                                                    <option value="We are closing tomorrow">We are closing tomorrow</option>
                                                                                                    <option value="We are open today until noon">We are open today until noon</option>
                                                                                                    <option value="This is my template">This is my template</option>
                                                                                                    <option value="Have a Good weekend!">Have a Good weekend!</option>
                                                                                                    <option value="Hello

We are open today till 12  pm noon">Hello

We are open today till 12  pm noon</option>
                                                                                                    <option value="This is my template">This is my template</option>
                                                                                                    <option value="We are  open today">We are  open today</option>
                                                                                                    <option value="We are open today till midnight">We are open today till midnight</option>
                                                                                                    <option value="Kind regards">Kind regards</option>
                                                                                                    <option value="this is my template">this is my template</option>
                                                                                                    <option value="Shalom">Shalom</option>
                                                                                                    <option value="arima fund is open today">arima fund is open today</option>
                                                                                                    <option value="this is my template">this is my template</option>
                                                                                                    <option value="we are open today">we are open today</option>
                                                                                                    <option value="To Reply sms 77777">To Reply sms 77777</option>
                                                                                                    <option value="Have a great day">Have a great day</option>
                                                                                                    <option value="MAMA COUNTY">MAMA COUNTY</option>
                                                                                                    <option value="MAMA COUNTY">MAMA COUNTY</option>
                                                                                                    <option value="Dear Parent. This is a notification alert.  The school bus has left the school for drop offs. ">Dear Parent. This is a notification alert.  The school bus has left the school f...</option>
                                                                                                    <option value="Pastor Kinyanjui">Pastor Kinyanjui</option>
                                                                                                    <option value="Shalom">Shalom</option>
                                                                                                    <option value="Dear {{name}} your bill as at {{date}} 
for House No.{{ no }} 
Service Charge: {{ kshs }}
Prev Read: {{ prev }}
Curr Read: {{ curr }}
Consumption: {{ consumption }} Cubic Meters
Water Bill: KES {{ water }}
Meter Charge: KES {{ meter }}
Current Total Bill: KES {{ total Bill }}
Arbitration Fee: KES {{ arbitration }}
Amount in arrears: KES {{ arrears }}
Total Bill Plus arrears: KES {{ plus_arrears }}
Kindly pay this bill on or before {{ deadline }} to avoid disconnection. ">Dear {{name}} your bill as at {{date}} 
for House No.{{ no }} 
Service Charge:...</option>
                                                                                                    <option value="Have a great afternoon name, we value your business">Have a great afternoon name, we value your business</option>
                                                                                                    <option value="Hi There,

Did you know that you can upload multiple contacts from excel sheets to our bulk SMS platform instead of adding 1 by one?
Reach out to our support tech@advantasms.com to learn more.">Hi There,

Did you know that you can upload multiple contacts from excel sheet...</option>
                                                                                                    <option value="Good Morning,

Here is a tip!
Our platform allows you to upload contacts from Excel sheets directly to a group. This makes it easier to add many contacts at once.">Good Morning,

Here is a tip!
Our platform allows you to upload contacts from...</option>
                                                                                                    <option value="Yours sincerely">Yours sincerely</option>
                                                                                                    <option value="Reminder
We are open this weekend">Reminder
We are open this weekend</option>
                                                                                                    <option value="WE ARE OPEN TODAY">WE ARE OPEN TODAY</option>
                                                                                                    <option value="Yours sincerely">Yours sincerely</option>
                                                                                                    <option value="thank you for your continued business.">thank you for your continued business.</option>
                                                                                                    <option value="Car washing services 

by Gpot">Car washing services 

by Gpot</option>
                                                                                                    <option value="have A GOOD DAY">have A GOOD DAY</option>
                                                                                                    <option value="Happy customer care week. ">Happy customer care week. </option>
                                                                                                    <option value="Did you know that you can enable Persistent sessions on our SMS platform to avoid logging in everytime? Try it today by checking remember me on the login page. ">Did you know that you can enable Persistent sessions on our SMS platform to avoi...</option>
                                                                                                    <option value="They need most of them. Credit is also reserved for admin and reseller">They need most of them. Credit is also reserved for admin and reseller</option>
                                                                                                    <option value="See the changes I made to the permissions">See the changes I made to the permissions</option>
                                                                                                    <option value="Inquiries call 0723695329/0788779410">Inquiries call 0723695329/0788779410</option>
                                                                                                    <option value="Join us for our service on sunday">Join us for our service on sunday</option>
                                                                                                    <option value="Your Coinqash loan declined didn't meet  qualification of 850 CREDIT SCORE POINTS per terms &amp; conditions. SMS your name to 21272 check credit score">Your Coinqash loan declined didn't meet  qualification of 850 CREDIT SCORE POINT...</option>
                                                                                                    <option value="This is a template">This is a template</option>
                                                                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 914.672px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-templates-container"><span class="select2-selection__rendered" id="select2-templates-container" role="textbox" aria-readonly="true" title="Happy CSR Week.">Happy CSR Week.</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            <div class="input-group-append">
                                                <button id="insertTemplate" type="button" class="input-group-btn btn btn-outline-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                                                    <span class="d-none d-md-block text-sm">Use Template</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="messageField">Compose Message <span class="text-warning text-sm">[15 characters are automatically added for opt out]</span></label>
                                        <textarea name="message" id="messageField" rows="5" class="form-control "></textarea>
                                                                                <div id="sms-counter" class="d-flex mt-2 text-sm">
                                            <span><span class="length">15</span>/<span class="remaining">145</span> characters</span>
                                            <span class="d-none d-md-block">&nbsp;&nbsp; Encoding:<span class="encoding">GSM_7BIT</span></span>
                                            <span class="flex"></span>
                                            <span>Per MSg:<span class="per_message">160</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            <span><span class="messages">1</span>/6 sms</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sender">Sender ID</label>
                                                                                        <select id="sender" name="sender_id" class="form-control select-search select2-hidden-accessible" data-select2-id="sender" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="4">-- Select Sender ID --</option>
                                                                                                            <option value="BizNet">BizNet</option>
                                                                                                            <option value="JuaMobile">JuaMobile</option>
                                                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 1036px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-sender-container"><span class="select2-selection__rendered" id="select2-sender-container" role="textbox" aria-readonly="true" title="-- Select Sender ID --">-- Select Sender ID --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                                                                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Time to Send</label>
                                        <div class="mt-2 col-sm-9" id="event-type">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input scheduler" type="radio" name="scheduled" value="no" checked="">Send
                                                    Now
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <input class="form-check-input scheduler" type="radio" name="scheduled" value="yes"> Send Later
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="timePicker" class="form-group row row-sm d-none">
                                        <label class="col-sm-3 col-form-label">Choose Time</label>
                                        <div class="col-sm-5">
                                            <input name="date" type="date" class="form-control" placeholder="Date" value="">
                                        </div>
                                        <div class="col-sm-4">
                                            <input name="time" step="0" type="time" class="form-control" placeholder="Time" value="">
                                        </div>
                                    </div>
                                    <div class="form-group py-3">
                                        <button type="submit" name="action" value="send" class="btn btn-primary">Send
                                            SMS
                                        </button>
                                        <span class="mx-2"></span>
                                                                                                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
  </div>





<?php include 'inc/footer.php'; ?>