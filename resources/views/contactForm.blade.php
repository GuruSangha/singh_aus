<x-guest-layout>
    <div class="body_content">
        <div class="container">
            <section>
                <div class="logo_head">
                    <img src="{{asset('images/logo_image.svg')}} "
                    alt="Not Available"> 
                </div>
            </section>
        </div>
        <div class="container">
            <!-- MultiStep Form -->
            @if(Session::has('message'))
            <div class="row" id="flash_message">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="alert alert-success" style="text-align: center;" role="alert">
                      <h4 class="alert-heading">Thank you for getting in touch!</h4>
                      <p>We will get back in touch with you soon!</p>
                      <hr>
                        <p class="mb-0">Have a great day!</p>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            @endif
            <div class="row">
                <div class="">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="msform" name="contactForm" method="post" action="{{route('home.submitcontactform')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active"></li>
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset style="opacity: 1;">
                            <div class="stepone_form">
                                <div class="form-wrapper">
                                    <label>What industry is your experience in?</label>
                                    <select class="indus_experience" name="industryExperience">
                                        <option value="">Select Industry</option>
                                        <option value="Automotive">Automotive</option>
                                        <option value="Building &amp; Construction">Building &amp; Construction</option>
                                        <option value="Business &amp; Finance">Business &amp; Finance</option>
                                        <option value="Civil Construction">Civil Construction</option>
                                        <option value="Commercial Cookery &amp; Hospitality">Commercial Cookery &amp; Hospitality</option>
                                        <option value="Community Services">Community Services</option>
                                        <option value="Engineering">Engineering</option>
                                        <option value="Events &amp; Entertainment">Events &amp; Entertainment</option>
                                        <option value="Hair &amp; Beauty">Hair &amp; Beauty</option>
                                        <option value="Horticulture &amp; Land Management">Horticulture &amp; Land Management </option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Mining and Resources">Mining and Resources</option>
                                        <option value="Plumbing Services">Plumbing Services</option>
                                        <option value="Retail Services">Retail Services</option>
                                        <option value="Security &amp; Cleaning">Security &amp; Cleaning</option>
                                        <option value="Transport &amp; Logistics">Transport &amp; Logistics</option>
                                        <option value="Vocational Education &amp; Training">Vocational Education &amp; Training</option>
                                    </select>
                                </div>
                                <div class="form-wrapper">
                                    <label>What qualification are you looking for?</label>
                                    <select class="indus_qualfication" name="qualification">
                                        <option value="">Select Qualification</option>
                                </select>
                            </div>


                        </div>
                        
                        <input type="button" name="next" class="next action-button phase1" value="Next" />
                        <div class="cf7mls-btns">
                            <p class="first-step-text">Convert your experience into a nationally recognised
                                qualification with Australia’s comprehensive leader in <strong>Recognition of Prior
                                Learning (RPL)</strong> which are issued by our Partner RTO’s.</p>
                                <p class="first-step-text">We’d like to understand your past work experience.
                                     Provide your work experience for <strong>achieving a nationally recognised qualification. </strong> We are developing <strong>RPL self-assessment </strong> guides to assist you in working out if you are a candidate for the <strong>RPL process for specific </strong> qualifications.</p>
                                     <p class="first-step-text">These guides will assist you to identify the units of competence/subjects you may wish to apply for, based on your experience and the evidence you can provide of that experience.</p>
                                     <p class="first-step-text">Get credit where credit is due
                                            You’ve worked hard to get where you are – whether that’s through prior study, work and other learning experiences.</p>
                            </div>
                        </fieldset>
                        <fieldset style="opacity: 0;">
                            <div class="form-wrapper">
                                <label>How many years of relevant work experience do you have?</label>
                            </div>
                            <div class="age_group">


                                <div class="radiobutton">
                                    <input type="radio" id="a25" name="experienceyears" value="1-2" />
                                    <label class="btn btn-default" for="a25"><span>1-2</span>
                                    years</label>
                                </div>

                                <div class="radiobutton">
                                    <input type="radio" id="a23" name="experienceyears" checked value="3-4"/>
                                    <label class="btn btn-default" for="a23"><span>3-4</span>
                                    years</label>
                                </div>
                                <div class="radiobutton">
                                    <input type="radio" id="a24" name="experienceyears" value="5-9" />
                                    <label class="btn btn-default" for="a24"><span>5-9</span>
                                    years</label>
                                </div>
                                <div class="radiobutton">
                                    <input type="radio" id="a26" name="experienceyears" value="10+" />
                                    <label class="btn btn-default" for="a26"><span>10+</span>
                                    years</label>
                                </div>
                            </div>
                            <div class="form-wrapper">
                                <label>Where is your work experience?</label>
                            </div>
                            <div class="experiance_location">
                                <div class="radiobutton">
                                    <input type="radio" id="a27" name="experience_loc" checked value ="australia" />
                                    <label class="btn btn-default" for="a27">Australia</label>
                                </div>
                                <div class="radiobutton">
                                    <input type="radio" id="a28" name="experience_loc" value ="overseas" />
                                    <label class="btn btn-default" for="a28">Overseas</label>
                                </div>
                                <div class="radiobutton">
                                    <input type="radio" id="a29" name="experience_loc" value="both" />
                                    <label class="btn btn-default" for="a29">Both</label>
                                </div>
                            </div>


                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            <input type="button" name="next" class="next action-button" value="Next" />

                            

                        </fieldset>
                        <fieldset style="opacity: 0;">
                            <div class="form-wrapper">
                                <label>What state do you live in?</label>
                            </div>
                            <div class="fsa-form-step3">

                                <div class="radio-custom-style nsw">
                                    <p class="selectionShareables"><input class="radio_valid2" id="radio8" type="radio"
                                        name="inf_custom_State1" value="NSW"><label class="nexta"
                                        for="radio8"><span>NSW</span></label>
                                    </p>
                                </div>
                                <div class="radio-custom-style vic">
                                    <p class="selectionShareables"><input class="radio_valid2" id="radio9" type="radio"
                                        name="inf_custom_State1" value="VIC" checked="checked"><label class="nexta"
                                        for="radio9"><span>VIC</span> </label>
                                    </p>
                                </div>
                                <div class="radio-custom-style qld">
                                    <p class="selectionShareables"><input class="radio_valid2" id="radio10" type="radio"
                                        name="inf_custom_State1" value="QLD"><label class="nexta"
                                        for="radio10"><span>QLD</span> </label>
                                    </p>
                                </div>
                                <div class="radio-custom-style sa">
                                    <p class="selectionShareables"><input class="radio_valid2" id="radio11" type="radio"
                                        name="inf_custom_State1" value="SA"><label class="nexta" for="radio11">
                                            <span>SA</span> </label>
                                        </p>
                                    </div>
                                    <div class="radio-custom-style wa">
                                        <p class="selectionShareables"><input class="radio_valid2" id="radio12" type="radio"
                                            name="inf_custom_State1" value="WA"><label class="nexta" for="radio12">
                                                <span>WA</span> </label>
                                            </p>
                                        </div>
                                        <div class="radio-custom-style act">
                                            <p class="selectionShareables"><input class="radio_valid2" id="radio13" type="radio"
                                                name="inf_custom_State1" value="ACT"><label class="nexta"
                                                for="radio13"><span>ACT</span> </label>
                                            </p>
                                        </div>
                                        <div class="radio-custom-style nt">
                                            <p class="selectionShareables"><input class="radio_valid2" id="radio14" type="radio"
                                                name="inf_custom_State1" value="NT"><label class="nexta" for="radio14">
                                                    <span>NT</span> </label>
                                                </p>
                                            </div>
                                            <div class="radio-custom-style tas">
                                                <p class="selectionShareables"><input class="radio_valid2" id="radio15" type="radio"
                                                    name="inf_custom_State1" value="TAS"><label class="nexta"
                                                    for="radio15"><span>TAS</span> </label>
                                                </p>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="button" name="next" class="next action-button" value="Next" />
                                        
                                    </fieldset>
                                    <fieldset style="opacity: 0;">
                                        <div class="fsa-form-step4">
                                            <p class="selectionShareable"><label>Do you any formal qualifications?<br>
                                            </label>
                                        </p>
                                        <div class="radio-custom-style yes">
                                            <p class="selectionShareable"><input class="radio_valid2 valid" value="Yes" id="radio20"
                                                type="radio" name="formalqulification"
                                                aria-invalid="false"><label for="radio20"> <span>Yes</span> </label>
                                            </p>
                                        </div>
                                        <div class="radio-custom-style no">
                                            <p class="selectionShareable"><input class="radio_valid2 valid" value="No" id="radio21"
                                                type="radio" name="formalqulification"
                                                aria-invalid="false" checked="checked"><label for="radio21"
                                                class=""><span>No</span> </label>
                                            </p>
                                        </div>
                                        <div class="radio-yes-custom hide">
                                            <p class="selectionShareable"><label class="custom-fq">What are your
                                                qualifications?<span class="wpcf7-form-control-wrap"
                                                data-name="inf_custom_formalqualifications"><textarea cols="40" rows="10"
                                                class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                placeholder="I'll Type (optional)"
                                                name="inf_custom_formalqualifications"></textarea></span></label>
                                            </p>
                                            <div class="cv submit selectionShareable input_cv">
                                                <input type="file" name="image" class="form-control file_upload" accept=".jpg,.jpeg,.bmp,.png,.gif,.doc,.docx,.csv,.rtf,.xlsx,.xls,.txt,.pdf,.zip" id="formFile">
                                                
                                                <p>Click here to upload resume (optional)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                    <input type="button" name="next" class="next action-button fileupload_res" value="Next" />
                                    
                                </fieldset>
                                <fieldset style="opacity: 0;">
                                    <div class="step5wrapper">


                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <p class="selectionShareable requiredField"><span class="wpcf7-form-control-wrap"
                                                    data-name="contactfname"><input required size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                                                    aria-required="true" aria-invalid="false" placeholder="First Name*"
                                                    value="" type="text" name="contactfname"></span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="selectionShareable"><span class="wpcf7-form-control-wrap"
                                                    data-name="contactlname"><input required size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required input-text"
                                                    aria-required="true" aria-invalid="false" placeholder="Last Name*"
                                                    value="" type="text" name="contactlname"></span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="selectionShareable"><span class="wpcf7-form-control-wrap"
                                                    data-name="contactphone"><input required size="40"
                                                    class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel input-text"
                                                    aria-required="true" aria-invalid="false" placeholder="Contact Number*"
                                                    value="" type="tel" name="contactphone"></span>
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <p class="selectionShareable"><span class="wpcf7-form-control-wrap"
                                                    data-name="contactemail"><input required size="40"
                                                    class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email input-text"
                                                    aria-required="true" aria-invalid="false" placeholder="Email*" value=""
                                                    type="email" name="contactemail"></span>
                                                </p>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <p class="selectionShareable"><span class="wpcf7-form-control-wrap"
                                                    data-name="inf_custom_additionalquestions"><textarea cols="40" rows="3"
                                                    class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                    placeholder="Any Questions for us?"
                                                    name="inf_custom_additionalquestions"></textarea></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="selectionShareable">
                                        <label>
                                            <input type="checkbox" name="acceptance-737" value="1" class="checkbox_valid2" id="checkbox_valid2" aria-invalid="false" required>
                                            <span class="wpcf7-list-item-label">
                                                I understand and accept the websites terms and conditions and privacy policy. I agree that Skills Certified<br> may contact me about the services it provides.</span>
                                            </label>
                                        </p>
                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                        <input type="submit" name="submit" class="submit action-button" id="formSubmit" value="Submit" />
                                        
                                    </fieldset>
                                </form>

                </div>
            </div>

        </div>
    </div>
</x-guest-layout>
