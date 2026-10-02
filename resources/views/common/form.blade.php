<div id="lead-form-wrap"
    class="hidden fixed inset-0 z-99 flex justify-center items-center px-4 bg-[#F8FAFE] backdrop-blur-md">

    <div class="w-full lg:min-w-105 max-w-105 bg-white border border-[#D9E4FF] pt-6 px-6 lg:px-8 pb-10 relative">
        <div id="form-spinner" class="hidden absolute inset-0 flex justify-center items-center z-9">
            <svg class="animate-spin h-6 w-6">
                <use xlink:href="#icon-spinner" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
            </svg>
        </div>


        <form action="/" id="lead-form" class="">
            <div class="flex justify-between items-center">
                <div class="text-2xl">Start a conversation</div>
                <div
                    class="js-toggle-form h-9 w-9 bg-black-primary flex justify-center items-center rounded-full cursor-pointer text-[#004AFF]">
                    <svg class="icon-svg h-6 w-6 -rotate-45">
                        <use xlink:href="#icon-close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                    </svg>
                </div>
            </div>
            <label for="lead-name" class="block text-[16px] mt-8">Name <span class="text-red-500">*</span></label>
            <input id="lead-name" name="name" type="text"
                class="block w-full border border-[#D9E4FF]  rounded-md py-2 px-4 mt-1 mb-6 ">

            <label for="lead-email" class="block">Email <span class="text-red-500">*</span></label>
            <input id="lead-email" name="email" type="text"
                class="block w-full border border-[#D9E4FF] rounded-md py-2 px-4 mt-1 mb-6 ">

            <!-- <label for="lead-phone" class="block">Телефон*</label>
            <input id="lead-phone" type="text" name="phone" id="lead-phone" placeholder="+7"
                class="block w-full border border-[#D9E4FF] rounded-md  py-2 px-4 mt-1 mb-6 "> -->

            <label for="lead-message" class="block">Message <span class="text-red-500">*</span></label>
            <textarea id="lead-message" name="message"
                class="block w-full border border-[#D9E4FF] rounded-md py-2 px-4 mt-1 mb-6 "></textarea>

            <div class="relative">
                <button type="submit"
                    class="w-full items-center justify-center cursor-pointer transition-colors text-center inline-flex bg-[#004AFF] text-white  px-6 py-3 text-sm rounded">Submit</button>
            </div>
        </form>

        <div id="lead-message-success" class="hidden text-center mt-8">
            Thank you. Your enquiry has been sent. A member of SSD Partners will review it and respond using the contact details you provided.
            <div class="js-toggle-form inline-block mt-4 border-b border-black cursor-pointer">Close</div>
        </div>
    </div>
</div>