@extends('layouts.app')

@section('title', 'Writter Area')

@section('content')


<div class="rbt-main-content area-right-expanded area-left-expanded">
    <div class="rbt-daynamic-page-content">

        <!-- Dashboard Center Content -->
        <div class="rbt-dashboard-content">
            <div class="content-page">

                <div class="chat-box-list pt--30" id="chatContainer" style="display: block">
                    <!-- Text Generator -->
                    <div class="chat-box author-speech bg-flashlight">
                        <div class="inner">
                            <div class="chat-section">
                                <div class="author">
                                    <img class="w-100" src="{{ asset('root/assets/images/banner/banner-3.png') }}" alt="Author">
                                </div>
                                <div class="chat-content">
                                    <h6 class="title">You</h6>
                                    <p>Who is VerbaGhana and what do it stand for...?</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="chat-box ai-speech bg-flashlight">
                        <div class="inner top-flashlight leftside light-xl">
                            <div class="chat-section generate-section">
                                <div class="author">
                                    <img src="{{ asset('root/assets/images/icons/loader-one.gif') }}" alt="Loader Images">
                                </div>
                                <div class="chat-content">
                                    <h6 class="title color-text-off mb--0">Generating answers for you…</h6>
                                </div>
                            </div>
                            <div class="chat-section">
                                <div class="author">
                                    <img class="w-100" src="{{ asset('root/assets/images/logo/logo-1.png') }}" alt="VerbaGhana">
                                </div>
                                <div class="chat-content">
                                    <h6 class="title">VerbaGhana</h6>
                                    <p class="mb--20">VerbaGhana is an AI-powered translation service that specializes in translating English into nearly all Ghanaian languages. It stands for promoting linguistic diversity and preserving the rich cultural heritage of Ghana by making communication accessible in various local dialects. VerbaGhana aims to bridge language barriers and enhance understanding among different language speakers within Ghana.</p>
                                    <div class="reaction-section">
                                        <div class="btn-grp">
                                            <div class="left-side-btn dropup">
                                                <button data-bs-toggle="modal" data-bs-target="#likeModal" class="react-btn btn-default btn-small btn-border"><i class="feather-thumbs-up"></i></button>
                                                <button data-bs-toggle="modal" data-bs-target="#dislikeModal" class="react-btn btn-default btn-small btn-border"><i class="feather-thumbs-down"></i></button>
                                                <button data-bs-toggle="modal" data-bs-target="#shareModal" class="react-btn btn-default btn-small btn-border"><i class="feather-share"></i></button>
                                                <button type="button" class="react-btn btn-default btn-small btn-border dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-more-vertical"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#"><i class="feather-copy"></i> Copy</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="feather-file-text"></i> Rename</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="feather-file-text"></i> Export as Word</a></li>
                                                    <li><a class="dropdown-item" href="#"><i class="feather-file-text"></i> Export as Pdf</a></li>
                                                    <li><a class="dropdown-item delete-item" href="#"><i class="feather-trash-2"></i> Delete Chat</a></li>
                                                </ul>
                                            </div>
                                            <div class="right-side-btn">
                                                <button class="react-btn btn-default btn-small btn-border">
                                                    <i class="feather-repeat"></i><span>Regenerate</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="chat-box-list pt--30" id="newChatView" style="display: none">               
                    <div class="chat-box ai-speech bg-flashlight">
                        <div class="inner wrapper top-flashlight light-xl">
                            <div class="section-title text-center mb--30 sal-animate" data-sal="slide-up" data-sal-duration="400" data-sal-delay="150">
                                <h3 class="title mb--0 w-600">Areas you can focus your translation </h3>
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
                        </div>
                    </div>
                </div>

            </div>


            
            <div class="rbt-static-bar area-right-expanded area-left-expanded">
                <form class="new-chat-form">
                    <textarea id="txtarea" rows="1" placeholder="Send a message..."></textarea>
                    <div class="left-icons">
                        <div title="VerbaGhana" class="form-icon icon-gpt">
                            <i class="feather-aperture"></i>
                        </div>
                    </div>
                    <div class="right-icons">
                        <div class="form-icon icon-plus" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Choose File">
                            <input type="file" class="input-file" name="myfile" multiple>
                            <i class="feather-plus-circle"></i>
                        </div>
                        <button class="form-icon icon-mic" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Voice Search">
                            <i class="feather-mic"></i>
                        </button>
                        <button class="form-icon icon-send" id="sendButton" onclick="sendMessage()" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Send message">
                            <i class="feather-send"></i>
                        </button>
                    </div>
                </form>
                <p class="b3 small-text">VerbaGhana can make mistakes. Consider checking important information.</p>
            </div>
        </div>

        <!-- Dashboard Right Content -->
         @include('includes/chat/sidebar')
        
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Trigger the button click when the document is ready
        $('#sideButton').click();
    });
</script>



    
@endsection


