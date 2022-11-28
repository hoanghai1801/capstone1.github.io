<!DOCTYPE html>
<html lang="en">

<head>

    @include('share.css')

</head>

<body>
    <div class="OBTS">

        @include('share.header')

        @yield('slider')

        @yield('content')

        @include('share.footer')
        {{-- Chat-box --}}
        <div class="chat-box">
            <div id="cc-chat-icon" class="bg-primary shadow text-white font-weight-bold text-center js-messages">
                <div class="state closed d-inline">
                    <i class="fas fa-comment" style="font-size: 32px; line-height: 64px;"></i>
                </div>
            </div>
        </div>
        {{-- Messages --}}
        <div class="modal js-modal">
            <div class="modal-container js-modal-container">
                <div class="modal-close js-modal-close">
                    <i class="fa-solid fa-circle-xmark" style="font-size: 32px; color: #000"></i>
                </div>
                <div class="modal-content modal-content--scroll">
                    <div class="modal-header">
                        <div class="d-flex flex-column" style="padding-top: 0px;">
                            <div class="text-center py-4 px-4">
                                <img src="./assets/img/logo1.jpg"
                                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 100%; border: 1px solid #000">
                                <h4 class="mt-4" style="font-size: 1.8rem; font-weight:bold">
                                    Chatbox by OBTS
                                </h4>
                                <p class="text-secondary" style="font-size: 1.5rem">
                                    You are having a problem. How do I help you?
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                        <div class="message_bot">Hey!</div>
                    </div>

                </div>

                <div class="modal-footer">
                    <div class="card-body">
                        <form id="cc-chat-input" class="">
                            <div class="input-group d-flex justify-content-between">
                                <input class="form-control rounded" type="text" placeholder="Type your message here..." aria-label="Type your message here..." style="background: #f5f5f5; padding: 10px 20px; width: calc(100% - 48px);">
                                <button class="btn btn-outline-dark" type="submit" style="width: 45px; height: 45px; padding: 0;  border-radius:100%">
                                    <i class="fas fa-arrow-up"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const buyBtns = document.querySelectorAll('.js-messages')
        const modal = document.querySelector('.js-modal')
        const modalContainer = document.querySelector('.js-modal-container')
        const modalClose = document.querySelector('.js-modal-close')

        function showChatBox() {
            modal.classList.add('open')
        }

        function hideChatBox() {
            modal.classList.remove('open')
        }

        for (const buyBtn of buyBtns) {
            buyBtn.addEventListener('click', showChatBox)
        }

        modalClose.addEventListener('click', hideChatBox)

        modal.addEventListener('click', hideChatBox)

        modalContainer.addEventListener('click', function(event) {
            event.stopPropagation()
        })
    </script>

</body>

</html>
