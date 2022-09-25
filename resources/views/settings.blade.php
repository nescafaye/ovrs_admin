@extends('layouts.sidebar')


@section('content')

    <! -- Main Section -->
    <main  class="l-main">
        <section class=" section bd-container" id="admin-settings">
            <div class="account-admin-settings-container">

                <! --Sidebar -->
                <div class="sidebar_nav">
                    <ul>
                        
                        <li class="picked"><a href=""><span class="iconify-inline settings" data-icon="ant-design:user-outlined" data-width="20" data-height="20"></span>Account</a></li>
                        <li><a href=""><span class="iconify-inline icon" data-icon="fa6-solid:van-shuttle" data-width="20" data-height="20"></span>Van</a></li>
                        <li><a href=""><span class="iconify-inline icon" data-icon="codicon:key" data-width="20" data-height="20"></span>Users</a></li>
                    </ul>
                </div>

                <div class="admin-settings-account">
                    
                    <! -- Account Information -->
                    <span class="dashboard-subtitle-account-information">Account Information</span>
                    <div class="admin-settings-container">
                        <div class="admin-settings-information">
                            <! -- Ussername -->
                            <div class="username-container">
                                
                                <span class="dashboard-subtitle-username">Username</span>
                                <input class="textbox" type="text" placeholder="username">
                            </div>

                            <! --Email -->
                            <div class="email-container">
                                <br>
                                <span class="dashboard-subtitle-email">Email Address</span>
                                <input class="textbox" type="text" placeholder="someone@email.com">
                            </div>
                        </div>
                        <! -- Account Profile -->
                        <div class="admin-settings-profile">
                            <img class="prof-pic" src="{{ asset('assets/driver-pic.png')}}">
                            <div class="admin-profile-button" class="profile-admin">
                                <button class="upload-profile">Upload</button>
                                <br>
                                <button class="remove-profile">Remove</button>
                            </div>
                        </div>
                    </div>
                    <! --Privacy -->
                    <div class="admin-settings-account-privacy">
                        <! --  Password -->
                        <div class="Password-container">
                            <! -- Current Password -->
                            <br>
                            <span class="dashboard-subtitle-firstname">Current Password</span>
                            <input class="textbox" type="Password" placeholder="Current Password">
                            <! -- New Password -->
                            <br>
                            <span class="dashboard-subtitle-firstname">New Password</span>
                            <input class="textbox" type="Password" placeholder="New Password">
                            <! -- Confirm Password -->
                            <br>
                            <span class="dashboard-subtitle-firstname">Confirm Password</span>
                            <input class="textbox" type="Password" placeholder="Confirm Password">
                            <p class="privacy-password-description">Make sure it's at least 8 characters including a number, an uppercase letter, a lowercase letter, and a special character.</p>
                            <br>
                        </div>
                    </div>
                    <! -- Personal Information -->
                    <div class="admin-settings-account-personal">
                        <hr style="opacity: 0.4;"><br>
                        <span class="dashboard-subtitle-account-information-personal">Personal Information</span>
                        <! -- Full Name -->
                        <div class="fullName-container">
                            <div class="fname-cont">
                                <span class="dashboard-subtitle-firstname">First Name</span>
                                <input class="textbox" type="text" placeholder="First Name">
                                <br>
                            </div>
                            <div class="lname-cont">
                                <span class="dashboard-subtitle-firstname">Last Name</span>
                                <input class="textbox" type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="subheading-informaiton-container-personal">
                            <! -- Gender -->
                            <div class="admin-gender">
                                <span class="dashboard-subtitle-firstname">Gender</span>
                                <div class="gender-dropdown">
                                    <div class="gender-select-box">
                                        <div class="gender-container">
                                                <div class="gender">
                                                <input type="radio" class="radio" id="Female" name="category" />
                                                <label for="Female">Female</label>
                                            </div>
                                            <div class="gender">
                                                <input type="radio" class="radio" id="Male" name="category" />
                                                <label for="Male">Male</label>
                                            </div>
                                            <div class="gender">
                                                <input type="radio" class="radio" id="Others" name="category" />
                                                <label for="Others">Others</label>
                                            </div>
                                        </div>
                                        <div class="selected-gender">Select</div>
                                        </div>
                                </div>
                            </div>

                            <! -- Contact Name -->
                            <div class="admin-phone-number">
                                <span class="dashboard-subtitle-firstname">Phone Number</span>
                                <div class="phone-number-container">
                                    {{-- <span class="iconify-inline phone" data-icon="twemoji:flag-philippines" data-width="22" data-height="22"></span> --}}
                                    <input class="textbox accountphone" type="text" placeholder="Phone Number" value="">
                                </div>
                            </div>			
                        </div>
                    </div>

                    <div class="notification-admin-container">
                        <br><hr style="opacity: 0.4;"><br>
                        <span class="dashboard-subtitle-account-information-personal">Notifications</span>
                        <div class="notification-container">
                            <! --SMS -->
                            <div class="notification-sms-container privacy-notif">
                                <div class="sms-description-container">
                                    <br><br>
                                    <span class="dashboard-subtitle-sms">Receive Notifications</span>
                                    <p class="sms-description-admin">Get notification when a new transaction has been made.</p>
                                </div>
                                <input class="apple-switch sms" type="checkbox">
                            </div>

                            <! --SMS -->
                            <div class="notification-sms-container">
                                <div class="sms-description-container">
                                    <br><br>
                                    <span class="dashboard-subtitle-sms">Transaction Confirmation</span>
                                    <p class="sms-description-admin">Send email to customers after they have made a new booking.	</p>
                                </div>
                                <input class="apple-switch sms" type="checkbox">
                            </div>
                            <! --Email -->
                            <div class="notification-sms-container">
                                <div class="sms-description-container">
                                    <br><br>
                                    <span class="dashboard-subtitle-sms">Payment confirmation</span>
                                    <p class="sms-description-admin">Send confirmation email to clients after they have made a payment for their bookings.	</p>
                                </div>
                                <input class="apple-switch sms" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="delete-account-container">
                        <hr style="opacity: 0.4;"><br>
                        <span class="dashboard-subtitle-password">Delete Account</span>
                        <p class="password-description">Once you delete your account, there is no going 	back. Please be certain.</p>
                        <br>
                        <a href="#modalWindowDeleteAccount" class="delete-account">Delete Account</a>
                        <br><br><br>
                        <button class="save-changes-admin">Save Changes</button>
                    </div>
                </div>
            </div>
        </section>

        <! --SAVE CHANGES MODAL -->
        <div id="modalWindowDeleteAccount" class="">
            <div>
                <header>
                    <div class="close">
                        <a href="#close" class="exit"><i class="uil uil-times"></i></a>
                    </div>
                    <br>
                    <center>
                        <img src="{{ asset('assets/delete.png') }}" class="modal-img-delete"> 
                    </center>
                    <br>
                    <center>
                        <span class="dashboard-subtitle-modal">Are you sure you want to delete your account?</span>
                    </center>
                        <br>
                    </header>
                    <div class="content">
                        <div class="field">
                            <div class="modal-choice">
                                <center>
                                    <button class="choice-1">Yes</button>
                                    <button class="choice-2">No</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>



@endsection