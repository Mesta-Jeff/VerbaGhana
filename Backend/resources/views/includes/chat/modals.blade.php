
        <!--New Chat Section Modal HTML -->
        <div id="newchatModal" class="modal rbt-modal-box copy-modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content wrapper top-flashlight light-xl">
                    <div class="section-title text-center mb--30 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                        <h3 class="title mb--0 w-600">Select Area Of Translation</h3>
                    </div>
                    <div class="genarator-section">
                        <ul class="genarator-card-group">
                            <li>
                                <a href="{{ route('chat')}}" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="{{ asset('root/assets/images/generator-icon/text.png') }}" alt="Writer">
                                            </div>
                                            <h5 class="title">English To Akuapim Twi</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i data-feather="arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('chat')}}" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="{{ asset('root/assets/images/generator-icon/text.png') }}" alt="Writer">
                                            </div>
                                            <h5 class="title">English To Asante Twi</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i data-feather="arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>                         
                            <li>
                                <a href="{{ route('chat')}}" class="genarator-card">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="{{ asset('root/assets/images/generator-icon/text.png') }}" alt="Writer">
                                            </div>
                                            <h5 class="title">English To Fante</h5>
                                        </div>
                                        <div class="right-align">
                                            <div class="icon-bar"><i data-feather="arrow-right"></i></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="{{ asset('root/assets/images/generator-icon/text.png') }}" alt="Writer">
                                            </div>
                                            <h5 class="title">English To Ga</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="genarator-card disabled" tabindex="-1">
                                    <div class="inner">
                                        <div class="left-align">
                                            <div class="img-bar">
                                                <img src="{{ asset('root/assets/images/generator-icon/text.png') }}" alt="Writer">
                                            </div>
                                            <h5 class="title">English To Ewe</h5>
                                        </div>
                                        <div class="right-align">
                                            <span class="rainbow-badge-card">Coming</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <button class="close-button" data-bs-dismiss="modal">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
        </div>

        <!--Like Section Modal HTML -->
        <div id="likeModal" class="modal rbt-modal-box like-modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content wrapper top-flashlight leftside light-xl">
                    <h5 class="title">Provide additional feedback</h5>
                    <div class="chat-form">
                        <div class="border-gradient text-form">
                            <textarea rows="6" placeholder="Send a message..."></textarea>
                        </div>
                    </div>
                    <div class="bottom-btn mt--20">
                        <a class="btn-default btn-small round" href="#">Send Feedback</a>
                    </div>
                    <button class="close-button" data-bs-dismiss="modal">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
        </div>

        <!--DisLike Section Modal HTML -->
        <div id="dislikeModal" class="modal rbt-modal-box dislike-modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content wrapper top-flashlight leftside light-xl">
                    <h5 class="title">Why do you like this response?</h5>
                    <span class="form-text"> Select all areas you think your response can be applied</span>
                    <select class="form-select w-100" multiple aria-label="multiple select example">
                        <option selected>Irrelevant</option>
                        <option value="2">Offensive</option>
                        <option value="3">Not Correct</option>
                    </select>
                    <div class="chat-form">
                        <h6 class="title">Provide your feedback</h6>
                        <div class="border-gradient text-form">
                            <textarea rows="6" placeholder="Send a message..."></textarea>
                        </div>
                    </div>
                    <div class="bottom-btn mt--20">
                        <a class="btn-default btn-small round" href="#">Send Feedback</a>
                    </div>
                    <button class="close-button" data-bs-dismiss="modal">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
        </div>

        <!--Share Section Modal HTML -->
        <div id="shareModal" class="modal rbt-modal-box share-modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content wrapper modal-small top-flashlight leftside light-xl">
                    <h5 class="title">Share</h5>
                    <ul class="social-icon social-default transparent-with-border mb--20">
                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="200"><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="300"><a href="https://www.twitter.com/">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="400"><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="500"><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="chat-form">
                        <div class="border-gradient text-form d-flex align-items-center">
                            <input type="text" class="copy-link-input" value="https://www.youtube.com/" readonly>
                            <button class="btn-default bg-solid-primary" type="submit">Copy</button>
                        </div>
                    </div>
                    <button class="close-button" data-bs-dismiss="modal">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
        </div>
