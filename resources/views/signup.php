<?php
include 'layouts/header.php';
?>
<div class="signup">
    <form action="">
        <div class="field">
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="text" placeholder="Username" >
                <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
                </span>
            </div>
        </div>
        <div class="field">
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fas fa-check"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control has-icons-left">
                <input class="input" type="password" placeholder="Password">
                <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <div class="control">
                <label class="checkbox">
                <input type="checkbox">
                I agree to the <a href="#">terms and conditions</a>
                </label>
            </div>
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-success">
                Login
                </button>
            </p>
        </div>
    </form>
</div>

<?php
include 'layouts/footer.php';
?>