<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href='https://unpkg.com/boxicons@2.1.4/dist/boxicons.js' rel='stylesheet'>

    <title>Admin Dashboard</title>
</head>

<body>
    <div class="sec-box" id="sideNavBar">
        <div class="sections sec1">
            <div class="buttons">
                <div class="logo">
                    <h3 id="web-name">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </h3>
                    <p class="web-des-con">
                    <p class="web-title-des" id="web-des">
                        Global Administrative Alliance Cooperative
                    </p>
                    </p>

                </div>
                <button type="button" id="toggle-navbar1" class="toggleBtn" onclick="toggleSideNav1()">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button type="button" id="toggle-navbar2" class="toggleBtn" onclick="toggleSideNav2()">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>

            <div class="nav-divider"></div>

            <!-- Side Nav When Full -->
            <div class="nav-items sideNavFull">
                <div class="child"><a href="#">Dashboard</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Earnings</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Daily Tasks</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Withdraw</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Packages</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Promos</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Referrals</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">Request</a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">FQS</a></div>

                <div class="nav-items-bottom">
                    <div class="child-bottom"><a href="#">Logout</a></div>
                    <div class="child-bottom"><a href="#">Report</a></div>
                </div>
            </div>

            <!-- Side Navbar When HALF Only -->
            <div class="nav-items sideNavHalf">
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="far" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-home fa-w-18 fa-7x">
                            <path fill="currentColor" d="M557.1 240.7L512 203.8V104c0-4.4-3.6-8-8-8h-32c-4.4 0-8 3.6-8 8v60.5L313.4 41.1c-14.7-12.1-36-12.1-50.7 0L18.9 240.7c-3.4 2.8-3.9 7.8-1.1 11.3l20.3 24.8c2.8 3.4 7.8 3.9 11.3 1.1l14.7-12V464c0 8.8 7.2 16 16 16h168c4.4 0 8-3.6 8-8V344h64v128c0 4.4 3.6 8 8 8h168c8.8 0 16-7.2 16-16V265.8l14.7 12c3.4 2.8 8.5 2.3 11.3-1.1l20.3-24.8c2.6-3.4 2.1-8.4-1.3-11.2zM464 432h-96V304c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8v128h-96V226.5l170.9-140c2.9-2.4 7.2-2.4 10.1 0l170.9 140V432z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="far" data-icon="coins" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-coins fa-w-16 fa-7x">
                            <path fill="currentColor" d="M320 0C214 0 128 35.8 128 80v52.6C53.5 143.6 0 173.2 0 208v224c0 44.2 86 80 192 80s192-35.8 192-80v-52.7c74.5-11 128-40.5 128-75.3V80c0-44.2-86-80-192-80zm16 428.3C326 440 275.6 464 192 464S58 440 48 428.3v-39.5c35.2 16.6 86.6 27.2 144 27.2s108.8-10.6 144-27.2v39.5zm0-96C326 344 275.6 368 192 368S58 344 48 332.3v-44.9c35.2 20 86.6 32.6 144 32.6s108.8-12.7 144-32.6v44.9zM192 272c-79.5 0-144-21.5-144-48s64.5-48 144-48 144 21.5 144 48-64.5 48-144 48zm272 28.3c-7.1 8.3-34.9 22.6-80 30.4V283c31-4.6 58.7-12.1 80-22.2v39.5zm0-96c-7.1 8.3-34.9 22.6-80 30.4V208c0-7.2-2.5-14.2-6.8-20.9 33.8-5.3 64-14.8 86.8-27.8v45zM320 144c-5 0-9.8-.3-14.7-.5-26-7.9-56.8-13.2-90.4-14.9C191 120 176 108.6 176 96c0-26.5 64.5-48 144-48s144 21.5 144 48-64.5 48-144 48z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="fas" data-icon="tasks" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-tasks fa-w-16 fa-7x">
                            <path fill="currentColor" d="M208 132h288c8.8 0 16-7.2 16-16V76c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h288c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zm0 160h288c8.8 0 16-7.2 16-16v-40c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16v40c0 8.8 7.2 16 16 16zM64 368c-26.5 0-48.6 21.5-48.6 48s22.1 48 48.6 48 48-21.5 48-48-21.5-48-48-48zm92.5-299l-72.2 72.2-15.6 15.6c-4.7 4.7-12.9 4.7-17.6 0L3.5 109.4c-4.7-4.7-4.7-12.3 0-17l15.7-15.7c4.7-4.7 12.3-4.7 17 0l22.7 22.1 63.7-63.3c4.7-4.7 12.3-4.7 17 0l17 16.5c4.6 4.7 4.6 12.3-.1 17zm0 159.6l-72.2 72.2-15.7 15.7c-4.7 4.7-12.9 4.7-17.6 0L3.5 269c-4.7-4.7-4.7-12.3 0-17l15.7-15.7c4.7-4.7 12.3-4.7 17 0l22.7 22.1 63.7-63.7c4.7-4.7 12.3-4.7 17 0l17 17c4.6 4.6 4.6 12.2-.1 16.9z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="fal" data-icon="receipt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-receipt fa-w-14 fa-7x">
                            <path fill="currentColor" d="M344 240H104c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zm0 96H104c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8zM418.1 0c-5.8 0-11.8 1.8-17.3 5.7L357.3 37 318.7 9.2c-8.4-6-18.2-9.1-28.1-9.1-9.8 0-19.6 3-28 9.1L224 37 185.4 9.2C177 3.2 167.1.1 157.3.1s-19.6 3-28 9.1L90.7 37 47.2 5.7C41.8 1.8 35.8 0 29.9 0 14.4.1 0 12.3 0 29.9v452.3C0 499.5 14.3 512 29.9 512c5.8 0 11.8-1.8 17.3-5.7L90.7 475l38.6 27.8c8.4 6 18.2 9.1 28.1 9.1 9.8 0 19.6-3 28-9.1L224 475l38.6 27.8c8.4 6 18.3 9.1 28.1 9.1s19.6-3 28-9.1l38.6-27.8 43.5 31.3c5.4 3.9 11.4 5.7 17.3 5.7 15.5 0 29.8-12.2 29.8-29.8V29.9C448 12.5 433.7 0 418.1 0zM416 477.8L376 449l-18.7-13.5-18.7 13.5-38.6 27.8c-2.8 2-6 3-9.3 3-3.4 0-6.6-1.1-9.4-3.1L242.7 449 224 435.5 205.3 449l-38.6 27.8c-2.8 2-6 3-9.4 3-3.4 0-6.6-1.1-9.4-3.1L109.3 449l-18.7-13.5L72 449l-40 29.4V34.2L72 63l18.7 13.5L109.4 63 148 35.2c2.8-2 6-3 9.3-3 3.4 0 6.6 1.1 9.4 3.1L205.3 63 224 76.5 242.7 63l38.6-27.8c2.8-2 6-3 9.4-3 3.4 0 6.6 1.1 9.4 3.1L338.7 63l18.7 13.5L376 63l40-28.8v443.6zM344 144H104c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h240c4.4 0 8-3.6 8-8v-16c0-4.4-3.6-8-8-8z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="far" data-icon="cube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cube fa-w-16 fa-7x">
                            <path fill="currentColor" d="M239.1 7.5l-208 78c-18.7 7-31.1 25-31.1 45v225.1c0 18.2 10.3 34.8 26.5 42.9l208 104c13.5 6.8 29.4 6.8 42.9 0l208-104c16.3-8.1 26.5-24.8 26.5-42.9V130.5c0-20-12.4-37.9-31.1-44.9l-208-78C262 3.4 250 3.4 239.1 7.5zm16.9 45l208 78v.3l-208 84.5-208-84.5v-.3l208-78zM48 182.6l184 74.8v190.2l-184-92v-173zm232 264.9V257.4l184-74.8v172.9l-184 92z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="far" data-icon="bullhorn" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-bullhorn fa-w-18 fa-7x">
                            <path fill="currentColor" d="M544 184.88V32.01C544 23.26 537.02 0 512.01 0H512c-7.12 0-14.19 2.38-19.98 7.02l-85.03 68.03C364.28 109.19 310.66 128 256 128H64c-35.35 0-64 28.65-64 64v96c0 35.35 28.65 64 64 64l-.48 32c0 39.77 9.26 77.35 25.56 110.94 5.19 10.69 16.52 17.06 28.4 17.06h106.28c26.05 0 41.69-29.84 25.9-50.56-16.4-21.52-26.15-48.36-26.15-77.44 0-11.11 1.62-21.79 4.41-32H256c54.66 0 108.28 18.81 150.98 52.95l85.03 68.03a32.023 32.023 0 0 0 19.98 7.02c24.92 0 32-22.78 32-32V295.13c19.05-11.09 32-31.49 32-55.12.01-23.64-12.94-44.04-31.99-55.13zM127.73 464c-10.76-25.45-16.21-52.31-16.21-80 0-14.22 1.72-25.34 2.6-32h64.91c-2.09 10.7-3.52 21.41-3.52 32 0 28.22 6.58 55.4 19.21 80h-66.99zM240 304H64c-8.82 0-16-7.18-16-16v-96c0-8.82 7.18-16 16-16h176v128zm256 110.7l-59.04-47.24c-42.8-34.22-94.79-55.37-148.96-61.45V173.99c54.17-6.08 106.16-27.23 148.97-61.46L496 65.3v349.4z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="fas" data-icon="hands-usd" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-hands-usd fa-w-20 fa-7x">
                            <path fill="currentColor" d="M393.3 159.4c-2.9-23-20.7-41.3-42.9-47.7l-50.1-14.3c-3.6-1-6.1-4.4-6.1-8.1 0-4.6 3.8-8.4 8.4-8.4h32.8c3.6 0 7.1.8 10.3 2.2 4.8 2.2 10.4 1.7 14.1-2l17.5-17.5c5.3-5.3 4.7-14.3-1.5-18.4-9.5-6.3-20.4-10.1-31.8-11.5V16c0-8.8-7.2-16-16-16h-16c-8.8 0-16 7.2-16 16v17.6c-30.3 3.6-53.4 31-49.3 63 2.9 23 20.7 41.3 42.9 47.7l50.1 14.3c3.6 1 6.1 4.4 6.1 8.1 0 4.6-3.8 8.4-8.4 8.4h-32.8c-3.6 0-7.1-.8-10.3-2.2-4.8-2.2-10.4-1.7-14.1 2l-17.5 17.5c-5.3 5.3-4.7 14.3 1.5 18.4 9.5 6.3 20.4 10.1 31.8 11.5V240c0 8.8 7.2 16 16 16h16c8.8 0 16-7.2 16-16v-17.6c30.3-3.6 53.4-30.9 49.3-63zm-188.5 71c-10.6-14.1-30.7-17-44.8-6.4-14.1 10.6-17 30.7-6.4 44.8l38.1 50.8c4.8 6.4 4.1 15.3-1.5 20.9l-12.8 12.8c-6.7 6.7-17.6 6.2-23.6-1.1L64 244.4V96c0-17.7-14.3-32-32-32S0 78.3 0 96v218.4c0 10.9 3.7 21.5 10.5 30l104.1 134.3c5 6.5 8.4 13.9 10.4 21.7 1.8 6.9 8.1 11.6 15.3 11.6H272c8.8 0 16-7.2 16-16V384c0-27.7-9-54.6-25.6-76.8l-57.6-76.8zM608 64c-17.7 0-32 14.3-32 32v148.4l-89.8 107.8c-6 7.2-17 7.7-23.6 1.1l-12.8-12.8c-5.6-5.6-6.3-14.5-1.5-20.9l38.1-50.8c10.6-14.1 7.7-34.2-6.4-44.8-14.1-10.6-34.2-7.7-44.8 6.4l-57.6 76.8C361 329.4 352 356.3 352 384v112c0 8.8 7.2 16 16 16h131.7c7.1 0 13.5-4.7 15.3-11.6 2-7.8 5.4-15.2 10.4-21.7l104.1-134.3c6.8-8.5 10.5-19.1 10.5-30V96c0-17.7-14.3-32-32-32z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="fal" data-icon="envelope-open" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-envelope-open fa-w-16 fa-7x">
                            <path fill="currentColor" d="M349.32 52.26C328.278 35.495 292.938 0 256 0c-36.665 0-71.446 34.769-93.31 52.26-34.586 27.455-109.525 87.898-145.097 117.015A47.99 47.99 0 0 0 0 206.416V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V206.413a47.989 47.989 0 0 0-17.597-37.144C458.832 140.157 383.906 79.715 349.32 52.26zM464 480H48c-8.837 0-16-7.163-16-16V206.161c0-4.806 2.155-9.353 5.878-12.392C64.16 172.315 159.658 95.526 182.59 77.32 200.211 63.27 232.317 32 256 32c23.686 0 55.789 31.27 73.41 45.32 22.932 18.207 118.436 95.008 144.714 116.468a15.99 15.99 0 0 1 5.876 12.39V464c0 8.837-7.163 16-16 16zm-8.753-216.312c4.189 5.156 3.393 12.732-1.776 16.905-22.827 18.426-55.135 44.236-104.156 83.148-21.045 16.8-56.871 52.518-93.318 52.258-36.58.264-72.826-35.908-93.318-52.263-49.015-38.908-81.321-64.716-104.149-83.143-5.169-4.173-5.966-11.749-1.776-16.905l5.047-6.212c4.169-5.131 11.704-5.925 16.848-1.772 22.763 18.376 55.014 44.143 103.938 82.978 16.85 13.437 50.201 45.69 73.413 45.315 23.219.371 56.562-31.877 73.413-45.315 48.929-38.839 81.178-64.605 103.938-82.978 5.145-4.153 12.679-3.359 16.848 1.772l5.048 6.212z" class=""></path>
                        </svg>
                    </a></div>
                <div class="nav-divider"></div>
                <div class="child"><a href="#">
                        <svg aria-hidden="true" data-prefix="fal" data-icon="question" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-question fa-w-12 fa-7x">
                            <path fill="currentColor" d="M200.343 0C124.032 0 69.761 31.599 28.195 93.302c-14.213 21.099-9.458 49.674 10.825 65.054l42.034 31.872c20.709 15.703 50.346 12.165 66.679-8.51 21.473-27.181 28.371-31.96 46.132-31.96 10.218 0 25.289 6.999 25.289 18.242 0 25.731-109.3 20.744-109.3 122.251V304c0 16.007 7.883 30.199 19.963 38.924C109.139 360.547 96 386.766 96 416c0 52.935 43.065 96 96 96s96-43.065 96-96c0-29.234-13.139-55.453-33.817-73.076 12.08-8.726 19.963-22.917 19.963-38.924v-4.705c25.386-18.99 104.286-44.504 104.286-139.423C378.432 68.793 288.351 0 200.343 0zM192 480c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm50.146-186.406V304c0 8.837-7.163 16-16 16h-68.292c-8.836 0-16-7.163-16-16v-13.749c0-86.782 109.3-57.326 109.3-122.251 0-32-31.679-50.242-57.289-50.242-33.783 0-49.167 16.18-71.242 44.123-5.403 6.84-15.284 8.119-22.235 2.848l-42.034-31.872c-6.757-5.124-8.357-14.644-3.62-21.677C88.876 60.499 132.358 32 200.343 32c70.663 0 146.089 55.158 146.089 127.872 0 96.555-104.286 98.041-104.286 133.722z" class=""></path>
                        </svg></a></div>


                <div class="nav-items-bottom">
                    <div class="child-bottom"><a href="#">Logout</a></div>
                    <div class="child-bottom"><a href="#">Report</a></div>
                </div>
            </div>

        </div>
        <div class="sections sec2">
            <div class="top-navbar">

            </div>
        </div>
    </div>

</body>

<script src="{{ asset('/js/nav-dash.js') }}"></script>

</html>