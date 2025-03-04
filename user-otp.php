<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Code Verification</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylelogin.css">
    <style>
                *,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --brand-clr: hsl(185, 85%, 40%);
    --bg-primary: hsl(195, 20%, 86%);
    --border-clr: hsl(195, 16%, 82%);
    --accent-blue: hsl(205, 100%, 48%);
    --text-primary: hsl(180, 6%, 38%);
    --text-accent: hsl(195, 2%, 78%);

    --header: 3.5rem;
    --full-width: 100%;
    --padding-space: calc(var(--full-width) - 2rem);
    --max-width: 80rem;
    --min-width: 22.5rem;

    --bd-radius: 0.5em;
    --space-025: 0.25rem;
    --space-05: 0.5rem;
    --space-1: 1rem;
}

a {
    text-decoration: none;
}

body {
    display: flex;
    flex-flow: column;
    /* min-block-size: 100vh; */
    font-family: system-ui;
    /* background: linear-gradient(45deg, hsl(185, 26%, 72%), hsl(224, 66%, 82%)); */
}

.container1 {
    flex-grow: 1;
    display: grid;
    place-self: center;
    inline-size: clamp(
        var(--min-width),
        var(--padding-space),
        var(--max-width)
    );
}

.site-header {
    --padding: 1rem;
    --header-margin: 5vh;
    --shadow: 0 0.1875em 0.3125em #0003, 0 0.125em 0.5em #0002;
    margin-block: auto;
    min-block-size: var(--header);
    background-color: #fff;
    outline: 1px solid var(--border-clr);
    border-radius: var(--bd-radius);
    padding-inline: var(--padding);
    box-shadow: var(--shadow);
}

.header__content--flow {
    block-size: inherit;
    display: flex;
    flex-flow: wrap;

    /* Breakpoint 1280px > 720px */
    gap: 0 clamp(3.5rem, -24.14rem + 61.43vw, 25rem);
}

.header__content--flow > * {
    flex-grow: 1;
    height: var(--header);
    width: calc((45rem - var(--full-width) - (var(--padding) * 2)) * 999);
}

.header-content--left {
    display: grid;
    grid-auto-flow: column;
    inline-size: max-content;
    place-content: center;
}

.brand-logo {
    gap: var(--space-05);
    padding: 0.25em 0.75em;
    align-items: center;
    display: inline-flex;
}

.brand-logo > svg {
    fill: var(--brand-clr);
}

.logo-text {
    color: var(--text-primary);
    font-size: 20px;
    font-weight: 500;
}

.nav-toggle {
    aspect-ratio: 1;
    height: 2.25rem;
    display: inline-grid;
    place-content: center;
    background: none;
    border: none;
    visibility: hidden;
    cursor: pointer;
}

.nav-toggle:active {
    scale: 0.9;
}

.toggle--icon {
    width: 1.5rem;
    height: 0.25rem;
    border-radius: 10vh;
    position: relative;
    background-color: #666;
}

.toggle--icon::before,
.toggle--icon::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    background-color: currentColor;
    translate: 0 var(--bar--top, 0.5rem);
}

.toggle--icon::after {
    --bar--top: -0.5rem;
}

.header-content--right {
    flex-grow: 999;
}

.header-nav {
    display: grid;
    align-items: center;
    block-size: 100%;
}

.nav__list {
    list-style: none;
    display: grid;
    grid-auto-flow: column;
    justify-content: space-evenly;
    grid-auto-rows: 2.25rem;
}

.list-item {
    block-size: 100%;
    padding-top:12px;
}

.nav__link {
    block-size: inherit;
    display: inline-grid;
    place-items: center;
    min-width: 10ch;
    color: var(--text-primary);
    font-size: 15.3px;
    font-weight: 500;
    text-transform: uppercase;
}

.nav__link:focus-within {
    color: var(--accent-blue);
}
.nav__link:hover:not(:focus) {
    border-bottom: 2px solid currentColor;
}
.nav__list:hover .nav__link:not(:focus, :hover) {
    color: var(--text-accent);
}

@media (max-width: 575px) {
    .header-content--left {
        justify-content: space-between;
    }

    .header-content--right {
        height: auto;
    }

    .nav-toggle {
        visibility: visible;
    }

    .nav__list {
        right: 0;
        margin-inline: var(--space-1);
        top: calc(50% + var(--space-1) * 2);
        gap: var(--space-05) 0;
        position: fixed;
        width: 10em;
        background-color: #fff;
        border-radius: var(--bd-radius);
        border: 1px solid var(--border-clr);
        padding-block: 0.5rem;
        grid-auto-flow: row;
        box-shadow: var(--shadow);
        visibility: hidden;
        opacity: 0;
    }

    .nav__list[aria-expanded="true"] {
        visibility: visible;
        transform-origin: top center;
        opacity: 1;
        transition: visibility 0ms, transform 166ms ease, opacity 166ms linear;
    }
}

@media (max-width: 479px) {
    .header-content--left > * {
        scale: 0.83;
    }
    .nav__list {
        width: calc(var(--full-width) - (var(--space-1) * 2));
    }
}
    </style>
</head>
<body>
<div class="container1">
        <header class="site-header">
            <div class="header__content--flow">
                <section class="header-content--left">
                    <a href="#" class="brand-logo">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.098.649A12.037 12.037 0 0 0 1.088 7h3.525C5.305 4.302 6.541 2.065 8.098.65ZM6.544 7C7.359 3.45 9.014.832 11 .166V7H6.544Zm-2.33 2H.378A12.022 12.022 0 0 0 0 12c0 1.403.24 2.749.683 4h3.703A20.558 20.558 0 0 1 4 12c0-1.032.074-2.037.214-3Zm2.127 7A23.07 23.07 0 0 1 6 12c0-1.036.066-2.041.189-3H11v7H6.341Zm-1.44 2H1.605a12.037 12.037 0 0 0 6.493 5.351c-1.36-1.237-2.475-3.1-3.197-5.35ZM11 23.834C9.205 23.232 7.681 21.037 6.803 18H11v5.834Zm4.902-.483a12.037 12.037 0 0 0 6.493-5.35h-3.296c-.722 2.25-1.837 4.113-3.197 5.35ZM17.197 18c-.878 3.037-2.402 5.232-4.197 5.834V18h4.197Zm2.417-2h3.703A11.98 11.98 0 0 0 24 12c0-1.036-.131-2.041-.378-3h-3.836c.14.963.214 1.968.214 3 0 1.396-.135 2.74-.386 4Zm-1.803-7c.123.959.189 1.964.189 3 0 1.403-.12 2.749-.341 4H13V9h4.811Zm-.355-2H13V.166C14.986.832 16.641 3.45 17.456 7Zm1.931 0c-.692-2.698-1.928-4.935-3.485-6.351A12.037 12.037 0 0 1 22.912 7h-3.525Z" />
                        </svg>
                        <span class="logo-text">Art-Empire</span>
                    </a>
                    <button class="nav-toggle">
                        <span class="toggle--icon"></span>
                    </button>
                </section>
                <section class="header-content--right">
                    <nav class="header-nav" role="navigation">
                        <ul class="nav__list" aria-expanded="false">
                            <li class="list-item">
                                <a class="nav__link" href="login-user.php">Login</a>
                            </li>
                            <li class="list-item">
                                <a class="nav__link" href="signup-user.php">Registeration</a>
                            </li>
                            <li class="list-item">
                                <a class="nav__link" href="forgot-password.php">Forgot Password</a>
                            </li>
                           
                        </ul>
                    </nav>
                </section>
            </div>
        </header>
    </div>

    <script>
        const container1 = document.querySelector(".container1");
const primaryNav = document.querySelector(".nav__list");
const toggleButton = document.querySelector(".nav-toggle");

toggleButton.addEventListener("click", () => {
    const isExpanded = primaryNav.getAttribute("aria-expanded");
    primaryNav.setAttribute(
        "aria-expanded",
        isExpanded === "false" ? "true" : "false"
    );
});

container1.addEventListener("click", (e) => {
    if (!primaryNav.contains(e.target) && !toggleButton.contains(e.target)) {
        primaryNav.setAttribute("aria-expanded", "false");
    }
});

    </script>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user-otp.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>