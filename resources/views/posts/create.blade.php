<x-layouts.main>
    <x-slot:title>
    Create a conference
    </x-slot>
<x-page-header>
    New create a conference
</x-page-header>

    <div class="container py-5">
        <div class="row w-50 py-4">
        <div class="contact-form">
            <div id="success"></div>
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                <div class="form-row">
                    <div class="col-sm-6 control-group">
                        <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-sm-6 control-group">
                        <input type="image" class="form-control p-4" id="name" placeholder="Your Name" required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="col-sm-6 control-group">
                        <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required"/>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject of Conference" required="required"  />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control p-4" rows="6" id="message" placeholder="About of Conference type and full object"
                    required="required">
                    </textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Conference</button>
                </div>
            </form>
        </div>
    </div>


</div>
</x-layouts.main>
