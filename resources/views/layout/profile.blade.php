<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Page</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700,400" rel="stylesheet">
    <style>
        .xyz .header-bar,
        .xyz .footer-bar {
            height: 4px;
            background: #232043;
            width: 100vw;
            position: fixed;
            left: 0;
            z-index: 2;
        }

        .xyz .header-bar {
            top: 0;
        }

        .xyz .footer-bar {
            bottom: 0;
        }

        .xyz .container {
            margin: 64px auto;
            max-width: 720px;
            padding: 0 12px;
        }

        .xyz header {
            text-align: left;
            padding: 32px 0 8px 8px;
        }

        .xyz .profile-username {
            margin: 0;
            font-size: 2rem;
            font-weight: 700;
            color: #232043;
        }

        .xyz .profile-card {
            background: #f7f8fa;
            box-shadow: 0 3px 16px 0 #dbdaee55;
            border-radius: 18px;
            margin-bottom: 48px;
            padding: 30px 40px 40px 40px;
            min-height: 350px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .xyz .tabs {
            display: flex;
            border-bottom: 2px solid #e5e5ef;
            margin-bottom: 24px;
            width: 100%;
        }

        .xyz .tab-btn {
            background: none;
            border: none;
            font: inherit;
            padding: 14px 38px 10px 18px;
            font-size: 1.1rem;
            color: #232043;
            cursor: pointer;
            position: relative;
            transition: color 0.2s;
            flex: 1 1 auto;
            text-align: center;
        }

        .xyz .tab-btn.active {
            color: #2b117d;
            font-weight: bold;
        }

        .xyz .tab-btn.active::after {
            content: "";
            display: block;
            height: 3px;
            background: #2b117d;
            position: absolute;
            left: 0;
            right: 0;
            bottom: -2px;
            border-radius: 2px;
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .xyz .tab-content {
            display: none;
            animation: fadeInTab 0.35s;
            width: 100%;
        }

        .xyz .tab-content.active {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @keyframes fadeInTab {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        .xyz .profile-avatar {
            margin: 18px 0;
        }

        .xyz .profile-avatar img {
            width: 104px;
            height: 104px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 2px 9px #c9c9e3bb;
            border: 3px solid #fff;
            background: #c9c9e3;
        }

        .xyz .profile-fields,
        .xyz .tab-content.edit-tab form {
            width: 100%;
            max-width: 320px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .xyz .profile-field {
            font-size: 1.08rem;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .xyz .profile-field span:first-child,
        .xyz .profile-field label {
            font-weight: 600;
            color: #2b117d;
        }

        .xyz .profile-field span:last-child {
            font-weight: 400;
            color: #232043;
        }

        .xyz .profile-fields input,
        .xyz .tab-content.edit-tab form input {
            padding: 8px 12px;
            border: 1px solid #c4c2e6;
            border-radius: 6px;
            font-size: 1.05rem;
            font-family: inherit;
            color: #232043;
            background: #fff;
            transition: border 0.18s;
            width: 100%;
            box-sizing: border-box;
        }

        .xyz .profile-fields input:focus,
        .xyz .tab-content.edit-tab form input:focus {
            outline: none;
            border-color: #2b117d;
            background: #fcfaff;
        }

        .xyz #save-profile {
            padding: 12px 0;
            font-size: 1rem;
            background: #2b117d;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-family: inherit;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 2px 10px #bfbfdacc;
            transition: background 0.2s;
            width: 100%;
        }

        .xyz #save-profile:hover,
        .xyz #save-profile:focus {
            background: #4123a5;
        }

        @media (max-width: 600px) {
            .xyz .container {
                max-width: 99vw;
                margin-left: 0;
                margin-right: 0;
            }

            .xyz .profile-card {
                padding: 15px 12px 21px 12px;
                min-height: auto;
            }
        }
    </style>
</head>

<body>
    <div class="xyz">
        <div class="header-bar"></div>
        <div class="container">
            <header>
                <h1 class="profile-username">{{ $user->name }}</h1>
                <a href="{{ route('home') }}" class="btn-back" style="display:inline-block; margin: 12px; color:#2b117d; text-decoration:none; font-weight:600;">
                    ←
                </a>
            </header>
            <section class="profile-card">
                <div class="tabs">
                    <button class="tab-btn active" data-tab="view">View</button>
                    <button class="tab-btn" data-tab="edit">Edit</button>
                </div>
                <div class="tab-content view-tab active">
                    <div class="profile-avatar">
                        <img src="{{ $user->avatar ?? asset('images/favicons/profile.png') }}" alt="Avatar">
                    </div>
                    <div class="profile-fields">
                        <div class="profile-field"><span>Username:</span> <span id="view-username">{{ $user->name }}</span></div>
                        <div class="profile-field"><span>Email:</span> <span id="view-email">{{ $user->email }}</span></div>
                        <div class="profile-field"><span>Place:</span> <span id="view-place">Vietnam</span></div>
                    </div>
                </div>
                <div class="tab-content edit-tab">
                    <div class="profile-avatar">
                        <img id="edit-avatar-img" src="{{ $user->avatar ?? asset('images/favicons/profile.png') }}" alt="Avatar">
                    </div>
                    <form method="POST" action="{{ url('/profile/update') }}">
                        @csrf
                        <div class="profile-field">
                            <label for="edit-username">Username:</label>
                            <input id="edit-username" type="text" name="name" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="profile-field">
                            <label for="edit-email">Email:</label>
                            <input id="edit-email" type="email" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="profile-field">
                            <label>Place:</label>
                            <input type="text" value="Vietnam" disabled>
                        </div>
                        <button id="save-profile">Save</button>
                    </form>
                </div>
            </section>
        </div>
        <div class="footer-bar"></div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabBtns = document.querySelectorAll('.tab-btn');
            const viewTab = document.querySelector('.view-tab');
            const editTab = document.querySelector('.edit-tab');
            const viewFields = {
                username: document.getElementById('view-username'),
                email: document.getElementById('view-email'),
            };
            const editFields = {
                username: document.getElementById('edit-username'),
                email: document.getElementById('edit-email'),
            };

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    tabBtns.forEach(b => b.classList.remove('active'));
                    viewTab.classList.remove('active');
                    editTab.classList.remove('active');
                    this.classList.add('active');
                    if (this.dataset.tab === 'edit') {
                        editTab.classList.add('active');
                    } else {
                        viewTab.classList.add('active');
                    }
                });
            });

            document.getElementById('save-profile').addEventListener('click', function() {
                viewFields.username.textContent = editFields.username.value;
                viewFields.email.textContent = editFields.email.value;
                tabBtns[0].click(); // Switch to View tab
            });
        });
    </script>
</body>

</html>